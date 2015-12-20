 

<div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h4><a href="#">Insecure Direct Object Reference </a></h4>
        
        <p align="justify">
        This vulnerability happens when the application exposes direct objects to an internal resource, such as files, directory, keys etc. Such mechanisms could lead an attacker to predict objects that would refer to unauthorized resources as well. 
        </p>
        <p>Read more about Insecure Direct Object Reference  <br>
        <strong><a target="_blank" href="https://www.owasp.org/index.php/Testing_for_Insecure_Direct_Object_References_(OTG-AUTHZ-004)">https://www.owasp.org/index.php/Testing_for_Insecure_Direct_Object_References_(OTG-AUTHZ-004) </a></p></strong>

    </div>
    </div>

    <div class="well">
        <div class="col-lg-6"> 
            <p>Search by Itemcode or use search option  
                <form method='GET' action=''>
                    <div class="form-group"> 
                        <label></label>
                        <select class="form-control" name="item">
                            <option value="">Select Item Code</option>
                            <?php 
                            include('../../config.php');
                            if($conn1){
                                $sql= 'select itemid from caffaine LIMIT 5';
                                $stmt = $conn1->prepare($sql);
                                $stmt->execute();
                                while($rows = $stmt->fetch(PDO::FETCH_NUM)){
                                    echo "<option value=\"".$rows[0]."\">".$rows[0]."</option>";
                                }
                            } 

                            echo "</select><br>";
                            echo "<div align=\"right\"> <button class=\"btn btn-default\" type=\"submit\">Submit</button></div>";

                            echo "</div> </form> </p>";
                            echo "</div>";
                            $item = isset($_GET['item']) ? $_GET['item'] : '';
                            $sql = "select itemcode,itemname,itemdisplay,itemdesc,categ,price from caffaine where itemid = :itemid";
                            $stmt = $conn1->prepare($sql);
                            $stmt->bindParam(':itemid',$item);
                            $stmt->execute();
                            echo "<table>";
                            while($rows = $stmt->fetch(PDO::FETCH_NUM)){
                                echo "<tr><td><b>Item Code : </b>".htmlspecialchars($rows[0])."</td><td rowspan=5>&nbsp;&nbsp;</td><td rowspan=5 valign=\"top\" align=\"justify\"><b>Description : </b>".htmlspecialchars($rows[3])."</td></tr>";
                                echo "<tr><td><b>Item Name : </b>".htmlspecialchars($rows[1])."</td></tr>";
                                echo "<td><img src='".htmlspecialchars($rows[2])."' height=130 weight=20/></td>";
                                echo "<tr><td><b>Category : </b>".htmlspecialchars($rows[4])."</td></tr>";
                                echo "<tr><td><b>Price : </b>".htmlspecialchars($rows[5])."$</td></tr>"; 
                                echo "<tr><td colspan=3><hr></td></tr>";
                            }
                            echo "</table>";

                            ?>



                            <hr>
                            
                        </div>
                    </div>
                </div>
                
                <?php include_once('../../about.html'); ?>
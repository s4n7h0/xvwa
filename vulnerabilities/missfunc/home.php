 

<div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h4><a href="#">Missing Functional Level Access Control </a></h4>
        
        <p align="justify">
        This vulnerability exists when the application has insufficient access rights protection. Application sometimes hides sensitive actions from user roles but forget to ensure the access rights if the user tries to predict/use specific parameter to trigger those action. This issue could lead to much more complex and affect the business logic as well.  
        </p>
        <p>Read more about Missing Functional Level Access Control <br>
        <strong><a target="_blank" href="https://www.owasp.org/index.php/Top_10_2013-A7-Missing_Function_Level_Access_Control">https://www.owasp.org/index.php/Top_10_2013-A7-Missing_Function_Level_Access_Control </a></p></strong>

    </div>

    </div>

    <div class="well">
        <div class="col-lg-6"> 
            <p>Search by Itemcode to view the details  
                <form method='GET' action=''>
                    <div class="form-group"> 
                        <label></label>
                        <select class="form-control" name="item">
                            <option value="">Select Item Code</option>
                            <?php
                            include('../../config.php');
                            
                            if($conn1){
                                $sql= 'select itemid from caffaine';
                                $stmt = $conn1->prepare($sql);
                                $stmt->execute();
                                while($rows = $stmt->fetch(PDO::FETCH_NUM)){
                                    echo "<option value=\"".$rows[0]."\">".$rows[0]."</option>";
                                }
                            } 

                            echo "</select><br>";
                            echo "<div align='right'> <button class='btn btn-default' type='submit' name='action' value='view'>View</button>&nbsp;&nbsp;";
                            if($_SESSION['user'] == 'admin'){
                                echo "<button class='btn btn-default' type='submit' name='action' value='delete'>Delete</button></div>";
                            }else{
                                echo "</div>";
                            }
                            echo "</div> </form> </p>";
                            echo "</div>";
                            $item = isset($_GET['item']) ? $_GET['item'] : '';
                            $action = isset($_GET['action']) ? $_GET['action'] : '';
                            if($action=='view'){
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
                            }else if($action=='delete'){
                                $sql="delete from caffaine where itemid=:itemid";
                                $stmt=$conn1->prepare($sql);
                                $stmt->bindParam(':itemid',$item);
                                $stmt->execute();
                                if($stmt->rowCount()){
                                    echo "Item deleted successfully.";
                                } 
                            }

                            ?>



                            <hr>
                            
                        </div>
                    </div>
                </div>
                
                <?php include_once('../../about.html'); ?>
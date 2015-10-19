 

<div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h4><a href="#">SQL Injection – Blind</a></h4>
        
        <p align="justify">
        Blind SQL injections are tricky to detect and exploit as the application is designed to handle errors and exceptions smartly. However the vulnerability still exists. Blind SQL injections are nearly identical to Normal or Error based SQL injections. The difference here is that user/attacker will not see any backend error message in this case. Since no errors are provided in web responses, it becomes difficult for an attacker to exploit this vulnerability. 
        </p>
        <p>Read more about Blind SQL Injection <br>
        <strong><a target="_blank" href="https://www.owasp.org/index.php/Blind_SQL_Injection">https://www.owasp.org/index.php/Blind_SQL_Injection </a></p></strong>

    </div>

    </div>

    <div class="well">
        <div class="col-lg-6"> 
            <p>Search by Itemcode or use search option  
                <form method='post' action=''>
                    <div class="form-group"> 
                        <label></label>
                        <select class="form-control" name="item">
                            <option value="">Select Item Code</option>
                            <?php
                            include('../../config.php');
                            if(!$conn){
                                echo "Error in connecting to database";

                            }else{
                                $dbselect=mysql_select_db($dbname,$conn);
                                $sql = 'select itemid from caffaine';
                                $result = mysql_query($sql,$conn);
                                while($rows = mysql_fetch_array($result)){
                                    echo "<option value=\"".$rows['itemid']."\">".$rows['itemid']."</option>";
                                }
                            } 

                            echo "</select><br>";
                            echo "<input class=\"form-control\" width=\"50%\" placeholder=\"Search\" name=\"search\"></input> <br>";
                            echo "<div align=\"right\"> <button class=\"btn btn-default\" type=\"submit\">Submit</button></div>";
                            echo "</div> </form> </p>";
                            echo " </div>";
                            $item = isset($_POST['item']) ? $_POST['item'] : '';
                            $search = isset($_POST['search']) ? $_POST['search'] : '';
                            $isSearch = false;
                            if(($item!="") && $search!=""){ 
                                echo "<br><ul class=\"featureList\">";
                                echo "<li class=\"cross\">Error! Can not use both search and itemcode option. Search using either of these optoins.</li>";
                                echo "</ul>";
                            }else if($item){
                                $sql = "select * from caffaine where itemid = ".$item;
                                $result = mysql_query($sql);
                                $rowcount = @mysql_numrows($result); # this avoid errors cause by sql attacks
                                if($rowcount>0){
                                    $isSearch = true;
                                }
                            }else if($search){
                                $sql = "SELECT * FROM caffaine WHERE itemname LIKE '%" . $search . "%' OR itemdesc LIKE '%" . $search . "%' OR categ LIKE '%" . $search . "%'";
                                $result = mysql_query($sql);
                                $rowcount = @mysql_numrows($result); # this avoid errors cause by sql attacks
                                if($rowcount>0){
                                    $isSearch = true;
                                }
                            }
                            if($isSearch){
                                echo "<table>";
                                while($rows = mysql_fetch_array($result)){
                                    echo "<tr><td><b>Item Code : </b>".$rows['itemcode']."</td><td rowspan=5>&nbsp;&nbsp;</td><td rowspan=5 valign=\"top\" align=\"justify\"><b>Description : </b>".$rows['itemdesc']."</td></tr>";
                                    echo "<tr><td><b>Item Name : </b>".$rows['itemname']."</td></tr>";
                                    echo "<td><img src='".$rows['itemdisplay']."' height=130 weight=20/></td>";
                                    echo "<tr><td><b>Category : </b>".$rows['categ']."</td></tr>";
                                    echo "<tr><td><b>Price : </b>".$rows['price']."$</td></tr>"; 
                                    echo "<tr><td colspan=3><hr></td></tr>";
                                }
                                echo "</table>";                            
                            }

                            ?>




                            <hr>
                           
                        </div>
                    </div>
                </div>
                
                        <?php include_once('../../about.html'); ?>
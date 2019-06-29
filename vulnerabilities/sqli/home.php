 

<div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h4><a href="#">SQL Injection – Error Based</a></h4>
        
        <p align="justify">
        SQL injection considerably one of the most critical issues in application security is an attack technique by which a malicious user can run SQL code with the privilege on which the application is configured. Error based SQL injections are easy to detect and exploit further. It responds to user’s request with detailed backend error messages. These error messages are generated because of specially designed user requests such that it breaks the SQL query syntax used in the application. 
        </p>
        <p>Read more about SQL Injection <br>
        <strong><a target="_blank" href="https://www.owasp.org/index.php/SQL_Injection">https://www.owasp.org/index.php/SQL_Injection</a></p></strong>

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
                            error_reporting(E_ALL);
                            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                            ini_set('display_errors', 1);
                            include('../../config.php');
                            if($conn->connect_errno > 0){
                                echo "Error in connecting to database";
                            }else{
                                $sql = 'select itemid from caffaine';
                                $result = $conn->query($sql);
                                while($rows = $result->fetch_assoc()) {
                                    echo "<option value=\"".$rows['itemid']."\">".$rows['itemid']."</option>";
                                }
                            } 

                            echo "</select><br>";
                            echo "<input class=\"form-control\" width=\"50%\" placeholder=\"Search\" name=\"search\"></input> <br>";
                            echo "<div align=\"right\"> <button class=\"btn btn-default\" type=\"submit\">Submit</button></div>";
                            echo "</div> </form> </p>";
                            echo "</div>";
                            $item = isset($_POST['item']) ? $_POST['item'] : '';
                            $search = isset($_POST['search']) ? $_POST['search'] : '';
                            $isSearch = false;
                            if(($item!="") && $search!=""){ 
                                echo "<br><ul class=\"featureList\">";
                                echo "<li class=\"cross\">Error! Can not use both search and itemcode option. Search using either of these optoins.</li>";
                                echo "</ul>";
                            }else if($item){
                                $sql = "select * from caffaine where itemid = ".$item;
                                $result = $conn->query($sql);
                                $isSearch = true;
                            }else if($search){
                                $sql = "SELECT * FROM caffaine WHERE itemname LIKE '%" . $search . "%' OR itemdesc LIKE '%" . $search . "%' OR categ LIKE '%" . $search . "%'";
                                $result = $conn->query($sql);
                                $isSearch = true;
                            }
                            if($isSearch){
                                echo "<table>";
                                while($rows = $result->fetch_assoc()){
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

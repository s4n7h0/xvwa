 

<div class="thumbnail">

    <div class="caption-full">
        <h4><a href="#">CSV Formula Injection</a></h4>
        
        <p align="justify">
            CSV Formula injection is also known as CSV Excel Macro Injection. This happens when the application does not validate the content of CSV file. Applications that allows to export/download data in CSV or excel format usually vulnerable to such attacks. </p>
            <p>Read more about CVS Formula Injection <br>
                <strong><a target="_blank" href="https://www.owasp.org/index.php/CSV_Excel_Macro_Injection">https://www.owasp.org/index.php/CSV_Excel_Macro_Injection</a></strong>
            </p>
            <p>
             Hint: Find a way to create or update am item with your payload
           </p>

    </div>

</div>

<div class="well">
    
        <p>
            <form method='post' action='export.php'>
                <div class="form-group"> 
                    <label></label>
                    <div class="form-group" align="right"> 
                        <button class="btn btn-primary" name="action" value="export" type="submit">Export to CSV</button>
                    </div>
                    <div>
                        <br>
                    <?php

                       

                        include('../../config.php');
                          
                            if($conn){
                                $stmt = $conn1->prepare("SELECT itemcode,itemname,categ,price from caffaine");
                                $stmt->execute();
                                echo "<table class='table table-striped'>";
                                echo "<tr><th>Item Code</th><th>Item Name</th><th>Category</th><th>Price</th></tr>";
                                while($rows=$stmt->fetch(PDO::FETCH_NUM)){
                                    echo "<tr>";
                                    echo "<td>".htmlspecialchars($rows[0])."</td>";
                                    echo "<td>".htmlspecialchars($rows[1])."</td>"; 
                                    echo "<td>".htmlspecialchars($rows[2])."</td>";
                                    echo "<td>$".htmlspecialchars($rows[3])."</td>";
                                    echo "</tr>"; 
                                }
                            }
                            echo "</table>";
                            
                            #$action = isset($_POST['action']) ? $_POST['action'] : '';
                            
                            

                            ?>
                        </div>
                        <hr>
                </div>
            </form>
        </p>
  
</div>

<?php include_once('../../about.html'); ?>
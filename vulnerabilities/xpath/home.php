<?php
$result = '';
if(isset($_POST['submit'])){
$doc = new DOMDocument;
$doc->load('coffee.xml');
$xpath = new DOMXPath($doc);
$input = $_POST['search'];
$query = "/Coffees/Coffee[@ID='".$input."']";
#$result = isset($xpath->query($query)) ? $xpath->query($query) : '';
$result = $xpath->query($query);
}
?>
<div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h4><a href="#">XPATH Injection </a></h4>
        
        <p align="justify">
XPTH injections are fairly similar to SQL injection with a difference that it uses XML Queries instead of SQL queries. This vulnerability occurs when application does not validate user-supplied information that constructs XML queries. An attacker can send malicious requests to the application to find out how XML data is structured and can leverage the attack to access unauthorized XML data.         </p>
        <p>Read more about XPTH Injection<br>
        <strong><a target="_blank" href="https://www.owasp.org/index.php/XPATH_Injection">https://www.owasp.org/index.php/XPATH_Injection</a></p></strong>

    </div>

</div>

<div class="well">
    <div class="col-lg-6"> 
        <p><b>Search Your Coffee</b>
            <form method='POST' action=''>
                <div class="form-group"> 
                    <label></label> 
                    <input type="text" class="form-control" placeholder="Search by ID" name="search" value="<?php echo $input;?>"> </input> <br>
                    <div align="right"> <button class="btn btn-default" name="submit" type="submit">Search</button></div>
               </div> 
            </form>
        
        </p>

    </div>
      
    <?php
        if (is_array($result) || is_object($result)){
            echo "<table><tr><th>ID</th><th>&nbsp;&nbsp;</th><th>Item & Description</th></tr>";
            foreach($result as $row){
                echo " ";
                echo "<tr><td valign=\"top\">".$row->getElementsByTagName('ID')->item(0)->nodeValue."</td><td>&nbsp;&nbsp;</td>";
                echo "<td valign=\"top\"><b>".$row->getElementsByTagName('Name')->item(0)->nodeValue."</b><br>".$row->getElementsByTagName('Desc')->item(0)->nodeValue."</td></tr>";
                echo "<tr><td colspan=2>&nbsp;</td></tr>";
            }
            echo "</table>";
        }else{
            echo "Item Not Found.";
        }
    ?>

    <hr>
    
</div>
<?php include_once('../../about.html'); ?>
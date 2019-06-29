 

 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h4><a href="#">Cross Site Scripting (XSS) – Reflected</a></h4>
        
        <p align="justify">
        Cross Site Scripting attacks abuse the browser’s functionality to send malicious scripts to the client machine. In other words, this is client side attack. Cross Site Scripting attacks are generally be categorized into two categories: stored and reflected. In reflected attacks, the application reflects the malicious script back on the browser. The server doesn’t store anything, rather just send back whatever user inputs, for instance, error messages, search results etc. Such attacks are campaigning via different routes such as emails, chats, or on third party web sites.  
        </p>
        <p>Read more about Reflected XSS<br>
        <strong><a target="_blank" href="https://www.owasp.org/index.php/Types_of_Cross-Site_Scripting#Reflected_XSS_.28AKA_Non-Persistent_or_Type_II.29">https://www.owasp.org/index.php/Types_of_Cross-Site_Scripting#Reflected_XSS_.28AKA_Non-Persistent_or_Type_II.29 </a></p></strong>

    </div>

</div>

<div class="well">
    <div class="col-lg-6"> 
        <p>Enter your message here.  
            <form method='get' action=''>
                <div class="form-group"> 
                    <label></label>
                    <input class="form-control" width="50%" placeholder="Enter URL of Image" name="item"></input> <br>
                    <div align="right"> <button class="btn btn-default" type="submit">Submit Button</button></div>
               </div> 
            </form>
            <?php
                if (isset($_GET['item'])) {
                    echo $_GET['item'];
                }
                
            ?>
        </p>
    </div>
      
    <hr>
    
</div>
<?php include_once('../../about.html'); ?>

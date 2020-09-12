 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h4><a href="#">Session Flaws </a></h4>
        
        <p align="justify">
        Web applications require better session management to keep tracking the state of application and it’s users’ activities. Insecure session management can leads to attacks such as session prediction, hijacking, fixation and replay attacks. 
        </p>
        <p>Read more about session management <br>
        <strong><a target="_blank" href="https://www.owasp.org/index.php/Session_Management_Cheat_Sheet">https://www.owasp.org/index.php/Session_Management_Cheat_Shee</a></p></strong>

    </div>
</div>

<div class="well">
    <div class="col-lg-6"> 
        <p>
        <strong>
            <?php
            if(isset($_SESSION['user'])){
                echo "Welcome ". ucfirst($_SESSION['user']); 
                echo "<br><br><a href='../../logout.php'>Logout</a>";
            }else{
                echo "You are not a logged in. <br>Please login and try again.";
            }
        ?>
        </strong>
        </p>



    </div>
      
    <hr>
    
</div>

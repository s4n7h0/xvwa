 

 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h4><a href="#">Cross Site Scripting (XSS) – Stored</a></h4>
        
        <p align="justify">
Stored Cross Site Scripting attacks happen when the application doesn’t validate user inputs against malicious scripts, and it occurs when these scripts get stored on the database. Victim gets infected when they visit web page that loads these malicious scripts from database. For instances, message forum, comments page, visitor logs, profile page, etc.         </p>
        <p>Read more about Stored XSS <br>
        <strong><a target="_blank" href="https://www.owasp.org/index.php/Cross-site_Scripting_(XSS)#Stored_XSS_Attacks">https://www.owasp.org/index.php/Cross-site_Scripting_(XSS)#Stored_XSS_Attacks</a></p></strong>

    </div>


</div>

<div class="well">
    <div class="col-lg-6"> 
        <p>  <h4>Post Your Comments </h4>
            <form method='post' action=''>
                <div class="form-group"> 
                    <label></label>
                    <b>Enter Name</b>
                    <input class="form-control" placeholder="Anonymous" name="name"></input> <br>
                    <b>Enter Comment</b>
                    <textarea class="form-control" name="msg"> </textarea> <br>
                    <div align="right"> <button class="btn btn-default" type="submit">Submit Button</button></div>
               </div> 
            </form>
        </p>
    </div>
        <hr>
        <?php 
        include_once('../../config.php');

        $user = isset($_POST['name']) ? $_POST['name'] : '';
        $comment = isset($_POST['msg']) ? $_POST['msg'] : '';
        if($comment){
            if(!$user){
                $user = "Anonymous";
            }
            $today = date("d M Y");
            $sql="insert into comments (user,comment,date) values(:user,:comment,:date)";
            $stmt = $conn1->prepare($sql);
            $stmt->bindParam(":user",$user);
            $stmt->bindParam(":comment",$comment);
            $stmt->bindParam(":date",$today);
            $stmt->execute();

        }

        $stmt = $conn1->prepare("select user,comment,date from comments"); 
        $stmt->execute();
        while($rows = $stmt->fetch(PDO::FETCH_NUM)){
            echo "<div class=\"row\">";
                echo "<div class=\"col-md-12\">";
                echo "<span class=\"glyphicon glyphicon-star\"></span> &nbsp;";
                    echo ucfirst($rows[0]);
                echo "<span class=\"pull-right\">".$rows[2]."</span>";
                echo "<p>".$rows[1]."</p>";
                echo "</div>";
                echo "</div><hr>";
        } 

        ?>

        <hr>

        

</div>
<?php include_once('../../about.html'); ?>
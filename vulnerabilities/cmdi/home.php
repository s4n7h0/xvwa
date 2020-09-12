 

 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h4><a href="#">OS Command Injection</a></h4>
        
        <p align="justify">
        Some applications use operating system commands to execute certain functionalities by using bad coding practices, say for instance, usage of functions such as system(),shell_exec(), etc. This allows a user to inject arbitrary commands that will execute on the remote host with the privilege of web server user. An attacker can trick the interpreter to execute his desired commands on the system. 
        </p>
        <p>Read more about Command Injection <br>
        <strong><a target="_blank" href="https://www.owasp.org/index.php/Command_Injection">https://www.owasp.org/index.php/Command_Injection </a></p></strong>

    </div>
    
</div>

<div class="well">
    <div class="col-lg-6"> 
        <p>Enter your IP/host to ping.  
            <form method='get' action=''>
                <div class="form-group"> 
                    <label></label>
                    <input class="form-control" width="50%" placeholder="Enter IP/HOSTNAME to Ping" name="target"></input> <br>
                    <div align="right"> <button class="btn btn-default" type="submit">Submit Button</button></div>
               </div> 
            </form>
        </p>
    </div>
            <?php
            if (isset($_REQUEST['target'])) {
                $target = $_REQUEST['target'];
                if($target){
                    if (stristr(php_uname('s'), 'Windows NT')) { 
            
                    $cmd = shell_exec( 'ping  ' . $target );
                    echo '<pre>'.$cmd.'</pre>';

                    } else { 
                        $cmd = shell_exec( 'ping  -c 3 ' . $target );
                        echo '<pre>'.$cmd.'</pre>';
                    }
                }
            }
                
            ?>
        
      
    <hr>
    
</div>

<?php include_once('../../about.html'); ?>

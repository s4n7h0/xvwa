 <div class="thumbnail">
    <div class="caption-full">
        <h4><a href="#">PHP Object Injection</a></h4>
        
        <p align="justify">Though PHP Object Injection is not a very common vulnerability and also difficult to exploit, but it is found to be really dangerous vulnerbility as this could lead an attacker to perform different kinds of malicious attacks, such as Code Injection, SQL Injection, Path Traversal and Denial of Service, depending on the application context. PHP Object Injection vulnerability occurs when user-supplied inputs are not sanitized properly before passing to the unserialize() PHP function at the server side. Since PHP allows object serialization, attackers could pass ad-hoc serialized strings to a vulnerable unserialize() calls, resulting in an arbitrary PHP object(s) injection into the application scope.
        </p>         <p>Read more about PHP
Object Injection <br> <strong><a target="_blank"
href="https://www.owasp.org/index.php/PHP_Object_In
jection">https://www.owasp.org/index.php/PHP_Object_Injection</a></p></strong>

        </div>

    </div>
    <div class="well">
        <p>
            <form method="get" action="">
                <div class="form-group">
                    <div class="text-left">
                        <label></label>
                    <div class="form-group" align="left"> 
                        <a class="btn btn-primary" href='?r=a:2:{i:0;s:4:"XVWA";i:1;s:33:"Xtreme Vulnerable Web Application";}' type="submit">CLICK HERE</a>
                    </div>
                        <?php 
                            class PHPObjectInjection{
                                public $inject;
                                function __construct(){

                                }

                                function __wakeup(){
                                    if(isset($this->inject)){
                                        eval($this->inject);
                                    }
                                }
                            }
                            if(isset($_REQUEST['r'])){  

                                $var1=unserialize($_REQUEST['r']);
                                

                                if(is_array($var1)){ 
                                    echo "<br/>".$var1[0]." - ".$var1[1];
                                }
                            }else{
                                echo ""; # nothing happens here
                            }
                        ?>
         </div>
     </div>
 </form>
</p>      
<hr>

</div>
<?php include_once('../../about.html'); ?>
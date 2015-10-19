

 <div class="thumbnail">
    <!--
        <img class="img-responsive" src="http://placehold.it/800x300" alt="">
    -->
    <div class="caption-full">
        <h4><a href="#">Cross Site Scripting (XSS) – DOM</a></h4>
        
        <p align="justify">
        DOM based XSS also known as “type-0 XSS” is a special contrast class in Cross Site Scripting category in which the malicious script is executed as a result of tampering the DOM environment objects. The attack triggers within the page, but with no need of requests/response pair. 
        </p>
        <p>Read more about DOM Based XSS <br>
        <strong><a target="_blank" href="https://www.owasp.org/index.php/DOM_Based_XSS ">https://www.owasp.org/index.php/DOM_Based_XSS </a></p></strong>

    </div>

</div>

<div class="well">
    <div class="col-lg-6"> 
        <p>  
            <form method='get' action=''>
                <div class="form-group"> 
                    <label></label>
                    Select Language:<br>
                    <select class="form-control"><script>
                        var i = document.location.href.substring(document.location.href.indexOf("default="));
                        if(i.indexOf("default") > -1){
                            document.write("<OPTION value=1>"+document.location.href.substring(document.location.href.indexOf("default=")+8)+"</OPTION>");
                        }
                        document.write("<OPTION value=2>English</OPTION>");
                        document.write("<OPTION value=3>French</OPTION>");
                        document.write("<OPTION value=4>Germany</OPTION>");
                        document.write("<OPTION value=5>Spanish</OPTION>");
                    </script></select>
                    <hr>
                    Search on the page<br>
                    <input class="form-control" width="50%" placeholder="Enter Search Item" name="search"></input> <br>
                    <div align="right"> <button class="btn btn-default" type="submit" onclick="search()">Submit Button</button></div>
                
                </div> 
            </form>
            
            
            </p>
            <p id="srch"></p>
    </div>
      
    <hr>
    
</div>
<?php include_once('../../about.html'); ?>
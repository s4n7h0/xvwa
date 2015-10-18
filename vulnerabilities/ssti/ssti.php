<html>
<head><title>Server Side Template injection</title></head>
<body><form action="" method="GET">
<label>Enter your Name:</label><br/><input type="text" name="name"><br><br>
<input type="submit" name="submit" value="Enter"><br><br>
</form>
<?php
if (isset($_GET['submit'])) {
$name=$_GET['name'];
// include and register Twig auto-loader
include 'vendor/twig/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
try {
  // specify where to look for templates
  $loader = new Twig_Loader_String();
  
  // initialize Twig environment
  $twig = new Twig_Environment($loader);
 // set template variables
 // render template
$result= $twig->render($name);
echo "Hello $result";
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
}

?>
<p>
  <h3>Hint:</h3>
  <b>1.</b> Template Engine used is TWIG.<br>
  <b>2.</b> Loader function used = "Twig_Loader_String"<br>
</p>

</body>
</html>




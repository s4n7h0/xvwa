<?php 
	if (isset($_GET['forward'])){
		$forward=$_GET['forward'];
		if (strlen($forward)>0){
			header("Location: ".$forward);
		}
	}
?>
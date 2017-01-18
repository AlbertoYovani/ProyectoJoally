<?php
	session_start();
	if($_SESSION['valido']!='si'){
		header('location:index.php');
	}
?>

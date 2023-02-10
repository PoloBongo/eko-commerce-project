<?php 
	session_start();
	require("database.php");
	
	if(!isset($_SESSION["user"])){
		header("location:home.php");
	}
	$sql="DELETE FROM inscription WHERE id_compte='{$_GET["id"]}'";
	if($con->query($sql)){
		header("location:admin_page.php");
	}
?>
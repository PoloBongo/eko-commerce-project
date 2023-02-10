<?php 
	session_start();
	require("../database.php");
	
	if(!isset($_SESSION["user"])){
		header("location:../home.php");
	}
	$sql="delete from contact where id_c='{$_GET["id_c"]}'";
	if($con->query($sql)){
		header("location:./donnee_contact.php");
	}
?>
<?php 
	session_start();
	require("database.php");
	
	if(!isset($_SESSION["user"])){
		header("location:home.php");
	}
	$sql="DELETE FROM order_table WHERE order_id='{$_GET["order_id"]}'";
	if($con->query($sql)){
		header("location:historique_commande.php");
	}
?>
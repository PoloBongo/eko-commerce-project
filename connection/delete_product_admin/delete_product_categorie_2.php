<?php 
	session_start();
	require("../database.php");
	
	if(!isset($_SESSION["user"])){
		header("location:../home.php");
	}
	$sql="DELETE FROM produit_categorie_2 WHERE id='{$_GET["id"]}'";
	if($con->query($sql)){
		header("location:./delete_product.php");
	}
?>
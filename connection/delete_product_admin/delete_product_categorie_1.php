<?php 
	session_start();
	require("../database.php");
	
	if(!isset($_SESSION["user"])){
		header("location:../home.php");
	}
	$sql="delete from produit_categorie_1 where id='{$_GET["id"]}'";
	if($con->query($sql)){
		header("location:./delete_product.php");
	}
?>
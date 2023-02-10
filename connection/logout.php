<?php 
	session_start();
	unset($_SESSION["user"]);
	header("location:https://www.baimmobilier.fr/eko/");
?>
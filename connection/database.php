<?php

define('DB_SERVER',"baimmoxpolo.mysql.db");
define('DB_USERNAME', "baimmoxpolo");
define('DB_PASSWORD', "Poloarthur2004");
define('DB_NAME',"baimmoxpolo");

// Connexion à la base de données MySQL 
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Vérifier la connexion
if($con === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>
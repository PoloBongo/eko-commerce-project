<?php

define('db_host',"baimmoxpolo.mysql.db");
define('db_user', "baimmoxpolo");
define('db_password', "Poloarthur2004");
define('db_name',"baimmoxpolo");

//database_connection.php

$dsn = "mysql:dbname=".db_name.";host=". db_host;
$connect = new PDO($dsn,db_user,db_password,array(
    PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC
));
?>
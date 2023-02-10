<?php
session_start();

    // connexion à la base de données
    $db_username = 'baimmoxpolo';
    $db_password = 'Poloarthur2004';
    $db_name = 'baimmoxpolo';
    $db_host = 'baimmoxpolo.mysql.db';
    
    $pdo = new PDO('mysql:host='.$db_host.';dbname='.$db_name.'', $db_username, $db_password);
    $pdo->exec("SET CHARACTER SET utf8");

    if(isset($_POST['login']))
    {
        header('location:home.php');

        $stmt = $pdo->prepare("SELECT * FROM inscription WHERE nom=?");

        $stmt->bindParam(1,$_POST['nom']);
        $stmt->execute();
        $res = $stmt->fetchAll();

        foreach ( $res as $row ) {
            $_SESSION['user']['email'] = $row['email']; 
            $_SESSION['user']['prenom'] = $row['prenom']; 
            $_SESSION['user']['nom'] = $row['nom']; 
            $_SESSION['user']['tel'] = $row['tel']; 
            $_SESSION['user']['admin'] = $row['admin']; 
        }
}
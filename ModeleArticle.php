<?php
error_reporting(E_ALL);
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Polycoin</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>

<?php

error_reporting(E_ALL);

    $serveur = "127.2.204.2";
    $username = "adminEGbGpij";
    $password = "cDk-2WrRQM_U";
    $bdd = "php";

   // connexion
    $link=mysql_connect($serveur, $username, $password); 
    mysql_select_db($bdd,$link) or die(mysql_error()); 
     
    if(isset($name) && !empty($name)){
        echo "toto";
        $sql = "SELECT idVendeur, nomArticle, description, DateMiseEnLigne from Article where nomArticle LIKE '%$name%'";
        $result = mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
    }


    if(isset($_COOKIE['id']) && isset($_COOKIE['token']) && empty($name)){
        $sql = "SELECT idVendeur, nomArticle, description, DateMiseEnLigne from Article where idVendeur= '$id'";
        $resultats = mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
        print_r($resultats);

    }

    mysql_close();  // on ferme la connexion 
?>
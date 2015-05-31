<?php

error_reporting(E_ALL);

    $serveur = "127.2.204.2";
    $username = "adminEGbGpij";
    $password = "cDk-2WrRQM_U";
    $bdd = "php";

   // connexion
    $link=mysql_connect($serveur, $username, $password); 
    mysql_select_db($bdd,$link) or die(mysql_error()); 
     
    if(isset($_COOKIE['id']) && isset($_COOKIE['token']) && isset($_POST['supprimer'])){
        $sql = "DELETE from Article where idArticle= '$idArticle'";
        $img = "SELECT url from Article where idArticle= '$idArticle'";
        $url = mysql_fetch_array($img);
        echo "toto";
        print_r($url);
        mysql_query($img);
        mysql_query($sql);
        unlink($img);
    }
    mysql_close();  // on ferme la connexion 
?>
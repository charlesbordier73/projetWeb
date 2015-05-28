<?php

error_reporting(E_ALL);

    $serveur = "127.2.204.2";
    $username = "adminEGbGpij";
    $password = "cDk-2WrRQM_U";
    $bdd = "php";

   // connexion
    $link=mysql_connect($serveur, $username, $password); 
    mysql_select_db($bdd,$link) or die(mysql_error()); 
     
    if(isset($_POST['name'])){
        $sql = "SELECT idVendeur, nomArticle, description from Article where nomArticle in '$name";
         // on insère les informations du formulaire dans la table 
        mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
    }
    
    mysql_close();  // on ferme la connexion 

?>
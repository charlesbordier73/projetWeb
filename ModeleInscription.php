<?php

error_reporting(E_ALL);

    $serveur = "127.2.204.2";
    $username = "adminEGbGpij";
    $password = "cDk-2WrRQM_U";
    $bdd = "php";

   // connexion
    $link=mysql_connect($serveur, $username, $password); 
    mysql_select_db($bdd,$link) or die(mysql_error()); 
        
     
    // on écrit la requête sql 
    $sql = "INSERT INTO Vendeur(nom, prenom,email, tel, login, mdp, categorie) VALUES($nom,$prenom,$email,$tel,$login,$mdp,'Novice')";
     
    // on insère les informations du formulaire dans la table 
    mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error()); 

    // on affiche le résultat pour le visiteur 
    echo 'Vous êtes bien inscrit.'; 

    mysql_close();  // on ferme la connexion 

?>
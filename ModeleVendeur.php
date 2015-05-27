<?php

error_reporting(E_ALL);

    $serveur = "127.2.204.2";
    $username = "adminEGbGpij";
    $password = "cDk-2WrRQM_U";
    $bdd = "php";

   // connexion
    $link=mysql_connect($serveur, $username, $password); 
    mysql_select_db($bdd,$link) or die(mysql_error()); 
        
     
    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['tel']) && isset($_POST['login']) && isset($_POST['mdp'])){
        $sql = "INSERT INTO Vendeur(nom, prenom, mail, tel, login, mdp, categorie) VALUES('$nom', '$prenom', '$email', '$tel', '$login', '$mdp', 'Novice')";
         // on insère les informations du formulaire dans la table 
        mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
    }

    if(isset($_POST['login']) && isset($_POST['mdp'])){
        echo "totoModele";
        $login = $_POST['login'];
        echo $login;
        $mdp = mysql_query("SELECT mdp from Vendeur where login='$login'");
        echo $mdp;
            if($_POST['mdp']==$mdp){

                $id=mysql_query("SELECT id from Vendeur where login='$login'");
                echo $id;
                $tokenValue=sha1(uniqid(rand()));
                setcookie("id",$id,time()+(3600),"/");
                setcookie("token",$tokenValue,time()+(3600),"/");
                mysql_query("UPDATE Vendeur SET token = '$tokenValue' WHERE id = '$id' ");

            }


    }
    
    mysql_close();  // on ferme la connexion 

?>
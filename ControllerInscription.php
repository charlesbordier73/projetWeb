<?php 
error_reporting(E_ALL);

//récupération des champs
if(isset($_POST['nom']))      $nom=$_POST['nom'];
else      $nom="";

if(isset($_POST['prenom']))      $prenom=$_POST['prenom'];
else      $prenom="";

if(isset($_POST['email']))      $email=$_POST['email'];
else      $email="";

if(isset($_POST['tel']))      $tel=$_POST['tel'];
else      $tel="";

if(isset($_POST['login']))      $login=$_POST['login'];
else      $login="";

if(isset($_POST['mdp']))      $mdp=$_POST['mdp'];
else      $mdp="";

// vérification
if(empty($nom) OR empty($prenom) OR empty($email) OR empty($tel) OR empty($login)) OR empty($mdp))
    { 
    echo '<font color="red">Attention, tous les champs sont obligatoires !!</font>'; 
    } 

else      
    { 
        include "ModeleInscription.php";
    }  
?>
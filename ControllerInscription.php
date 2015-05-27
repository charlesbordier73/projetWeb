<?php 
echo "1";
//récupération des champs
if(isset($_POST['nom']))
    $nom=$_POST['nom'];
else
    $nom="";

if(isset($_POST['prenom']))
    $prenom=$_POST['prenom'];
else
    $prenom="";

if(isset($_POST['email']))
    $email=$_POST['email'];
else
    $email="";

if(isset($_POST['tel']))
    $tel=$_POST['tel'];
else
    $tel="";

if(isset($_POST['login']))
    $login=$_POST['login'];
else
    $login="";

if(isset($_POST['mdp']))
    $mdp=$_POST['mdp'];
else
    $mdp="";

echo 2;
?>
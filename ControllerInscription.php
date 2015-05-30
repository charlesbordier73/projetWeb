<?php 

//récupération des champs
if(isset($_POST['nom']))
    $nom=htmlspecialchars($_POST['nom']);
else
    $nom="";

if(isset($_POST['prenom']))
    $prenom=htmlspecialchars($_POST['prenom']);
else
    $prenom="";

if(isset($_POST['email']))
    $email=htmlspecialchars($_POST['email']);
else
    $email="";

if(isset($_POST['tel']))
    $tel=htmlspecialchars($_POST['tel']);
else
    $tel="";

if(isset($_POST['login']))
    $login=htmlspecialchars($_POST['login']);
else
    $login="";

if(isset($_POST['mdp']))
    $mdp=htmlspecialchars($_POST['mdp']);
else
    $mdp="";


// vérification
if(empty($nom) OR empty($prenom) OR empty($email) OR empty($tel) OR empty($login) OR empty($mdp))
    { 
        echo '<font color="red">Attention, tous les champs sont obligatoires !!</font>'; 
    } 

else      
    { 
        include 'ModeleVendeur.php';
        header('Location:index.php');
    }  
?>
<?php
if(isset($_POST['login']))
    $login=mysql_escape_string(htmlspecialchars($_POST['login']));
else
    $login="";

if(isset($_POST['mdp']))
    $mdp=mysql_escape_string(htmlspecialchars($_POST['mdp']));
else
    $mdp="";

// vérification
if(empty($login) OR empty($mdp))
    { 
        echo '<font color="red">Attention, remplissez bien les deux champs !!</font>'; 
    }


else      
    { 
        include 'ModeleVendeur.php';
        header('Location:index.php');
    }  
?>
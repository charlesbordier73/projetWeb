<?php

if(isset($_POST['login']))
    $login=$_POST['login'];
else
    $login="";

if(isset($_POST['mdp']))
    $mdp=$_POST['mdp'];
else
    $mdp="";

// vérification
if(empty($login) OR empty($mdp))
    { 
        echo '<font color="red">Attention, remplissez bien les deux champs !!</font>'; 
    }


else      
    { 
    	echo "toto";
        include 'ModeleVendeur.php';
        header('Location:index.php');
    }  
?>
<?php
if(isset($_GET['name']))
    $name=$_GET['name'];
else
    $name="";

// vérification
if(empty($name))
    { 
        echo '<font color="red">Attention, remplissez bien le champs !!</font>'; 
    }


else      
    { 
        include 'ModeleArticle.php';
        header('Location:catalogue.php');

    }  
?>
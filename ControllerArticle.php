<?php
if(isset($_POST['name']))
    $name=$_POST['name'];
else
    $name="";

// vérification
if(empty($name)
    { 
        echo '<font color="red">Attention, remplissez bien le champs !!</font>'; 
    }


else      
    { 
        include 'ModeleArticle.php';
    }  
?>
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
    echo "toto";


else      
    { 
        include 'ModeleArticle.php';
        include 'catalogue.php';

    }

 if(isset($_COOKIE['id']) && isset($_COOKIE['token'])){
    echo "toto1";
 	include 'ModeleArticle.php';
    include 'mesArticles.php'; 
 }

?>
<?php

 
if(isset($_GET['name']))
    $name=$_GET['name'];
else
    $name="";

if(!empty($name)) 
{ 

        include 'ModeleArticle.php';
        include 'catalogue.php';

} 
else if(isset($_COOKIE['id']) && isset($_COOKIE['token'])){
    if(isset($_POST['supprimer'])){
        echo "toto";
    }
    else{
        include 'ModeleArticle.php';
    include 'mesArticles.php'; 
    }
    
 }


?>
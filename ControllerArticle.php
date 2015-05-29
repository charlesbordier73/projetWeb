<?php

 
if(isset($_GET['name']))
    $name=$_GET['name'];
else
    $name="";

if(!empty($name))      
    { 
        echo "toto";
        include 'ModeleArticle.php';
        include 'catalogue.php';

    }

else if(isset($_COOKIE['id']) && isset($_COOKIE['token'])){
    include 'ModeleArticle.php';
    include 'mesArticles.php'; 
 }


?>
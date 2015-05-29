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

if(isset($_COOKIE['id']) && isset($_COOKIE['token'])){
    include 'ModeleArticle.php';
    include 'mesArticles.php'; 
 }


?>
<?php

 
if(isset($_GET['name']))
    $name=$_GET['name'];
else
    $name="";

/*if(!empty($name)) 
{ 

        include 'ModeleArticle.php';
        include 'catalogue.php';

} 
else */if(isset($_COOKIE['id']) && isset($_COOKIE['token'])){
    echo "toto7";
    include 'ModeleArticle.php';
    include 'mesArticles.php'; 
 }


?>
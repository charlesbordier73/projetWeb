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
        $idArticle=$_POST['id'];
        include 'Suppression.php';
        include 'mesArticles.php';
    }   
    else if(isset($_POST['modifier'])){
        $idArticle=$_POST['id'];
        $nomArticle=$_POST['nom'];
        $descrArticle=$_POST['descr'];
        include 'Modification.php';
    }
    else if(isset($_POST['validationModif'])){
        echo "toto";
        include 'ModeleArticle.php';
        include 'mesArticles.php'; 
    }
    
    else{
        include 'ModeleArticle.php';
        include 'mesArticles.php'; 
    }
    
 }


?>
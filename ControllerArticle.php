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
        $idArticle=$_POST['idmod'];
        echo "test2";
        echo $idArticle;
        $nomArticle=$_POST['nom'];
        $descrArticle=$_POST['descr'];
        include 'Modification.php';
    }
    else if(isset($_POST['validationModif'])){
        $idArticleMod=$_POST['idModif'];
        $nomArticleMod=$_POST['nom'];
        $descrArticleMod=$_POST['descr'];
        echo "test3";
        echo $idArticleMod;
        include 'ModeleArticle.php';
        include 'mesArticles.php'; 
    }
    
    else{
        include 'ModeleArticle.php';
        include 'mesArticles.php'; 
    }
    
 }


?>
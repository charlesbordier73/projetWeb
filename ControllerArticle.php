<?php

 
if(isset($_GET['name']))
    $name=mysql_escape_string($_GET['name']);
else
    $name="";

if(!empty($name)) 
{ 

        include 'ModeleArticle.php';
        include 'catalogue.php';

}
else if(isset($_POST['detailArt'])){
    $idAr=$_POST['idArt'];
    include 'ModeleArticle.php';
    include 'details.php';
}

else if(isset($_COOKIE['id']) && isset($_COOKIE['token'])){
    if(isset($_POST['supprimer'])){
        $idArticle=$_POST['id'];
        include 'Suppression.php';
        include 'mesArticles.php';
    }   
    else if(isset($_POST['modifier'])){
        $idArticle=$_POST['idmod'];
        $nomArticle=mysql_escape_string($_POST['nom']);
        $descrArticle=mysql_escape_string($_POST['descr']);
        include 'Modification.php';
    }
    else if(isset($_POST['validationModif'])){
        $idArticleMod=$_POST['idModif'];
        $nomArticleMod=mysql_escape_string(htmlspecialchars($_POST['nom']));
        $descrArticleMod=mysql_escape_string(htmlspecialchars($_POST['descr']));
        include 'ModeleArticle.php';
        include 'mesArticles.php'; 
    }
    else if(isset($_POST['ajouter'])){
        include 'AjoutArticle.php';
    }
    else if(isset($_POST['validationAjout'])){
        $nomAj=mysql_escape_string(htmlspecialchars($_POST['nomAj']));
        $descrAj=mysql_escape_string(htmlspecialchars($_POST['descrAj']);
        $dateAj=$_POST['dateAj'];
        $idV=$_POST['idAj'];
        $lienCtrl = trim($_FILES['lien']['name']);
        $lienIm = $_FILES['lien'];
        include 'ModeleArticle.php';
        include 'mesArticles.php'; 

    }
    else if(isset($_POST['afficher'])){

        include 'ModeleArticle.php';
        include 'mesArticles.php'; 
    }
    
 }


?>
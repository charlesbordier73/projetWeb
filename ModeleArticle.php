<?php

error_reporting(E_ALL);

    $serveur = "127.2.204.2";
    $username = "login";
    $password = "mdp";
    $bdd = "php";

   // connexion
    $link=mysql_connect($serveur, $username, $password); 
    mysql_select_db($bdd,$link) or die(mysql_error()); 
     
    if(isset($_COOKIE['id']) && isset($_COOKIE['token']) && empty($name)){
        if(isset($_POST['validationModif'])){
            $sql="UPDATE Article SET nomArticle = '$nomArticleMod', description = '$descrArticleMod' WHERE idArticle='$idArticleMod'";
            mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
        }
        else if(isset($_POST['validationAjout'])){
            $lien= "./images/" . $lienCtrl;
            $insertSql = "INSERT INTO Article(idVendeur, nomArticle, description, DateMiseEnLigne, url) VALUES ('$idV','$nomAj','$descrAj','$dateAj', '$lien')";
            $query=mysql_query($insertSql) or die('Erreur SQL !'.$insertSql.'<br>'.mysql_error());
            if($query==1){
                move_uploaded_file($lienIm['tmp_name'], $lien);
            }
        }
        else{
            $id=$_COOKIE['id'];
            $sql = "SELECT idVendeur, idArticle, nomArticle, description, DateMiseEnLigne, url from Article where idVendeur= '$id'";
            $resultats = mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());

        }
    }
    if(isset($_POST['detailArt'])){
        $detail="SELECT nomArticle, description, DateMiseEnLigne, url, nom, prenom, mail, tel, libCat FROM Vendeur, Article, CategorieVendeur
                where idVendeur = id and categorie = idCat and idArticle = '$idAr'";
        $reqDetail=mysql_query($detail) or die('Erreur SQL !'.$reqDetail.'<br>'.mysql_error());
    }

    if(isset($name) && !empty($name)){
        $sql = "SELECT idVendeur, idArticle, nomArticle, description, DateMiseEnLigne, url from Article where nomArticle LIKE '%$name%'";
        $result = mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());

    }



    mysql_close();  // on ferme la connexion 
?>
<?php
error_reporting(E_ALL);
include 'header.php';

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Polycoin</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<table border ="1">
    <tr>
        <th>Nom</th>
        <th>Description</th>
        <th>Date</th>
    </tr>
<?php

error_reporting(E_ALL);

    $serveur = "127.2.204.2";
    $username = "adminEGbGpij";
    $password = "cDk-2WrRQM_U";
    $bdd = "php";

   // connexion
    $link=mysql_connect($serveur, $username, $password); 
    mysql_select_db($bdd,$link) or die(mysql_error()); 
     
    if(isset($name)){
        $sql = "SELECT idVendeur, nomArticle, description, DateMiseEnLigne from Article where nomArticle LIKE '%$name%'";
         // on insère les informations du formulaire dans la table 
        $result = mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
        while($article = mysql_fetch_array($result))
    {
?>

    <tr>
        <td><?php echo $article['nomArticle']; ?></td>
        <td><?php echo $article['description']; ?></td>
        <td><?php echo $article['DateMiseEnLigne']; ?></td>
    </tr>
    <?php
    }
    ?>
    </table>
<?php }
    $resultats->closeCursor();
    }
    
    mysql_close();  // on ferme la connexion 

?>
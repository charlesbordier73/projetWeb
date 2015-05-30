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
<body>
    
    <br>
    <center>
    <form method="POST" action="ControllerArticle.php">
        <table>
            <tr>
                <td> Nom : </td> 
                <td><input type="text" name="nom" size="20" value="<?php echo $nomArticle;?>" maxlength="50" required><td>
            </tr>
            <tr>
                <td> Description : </td>
                <td><input type="text" name="descr" size="20" value="<?php echo $descrArticle;?>" maxlength="50" required></td>
                <input type="hidden" value="<?php echo $idArtcile;?>" name="id">

        </table>
        <br>
        <br>
        <input type="submit" value="Modifier" name="vaidationModif">
    </form>
        
    </center>

</body>
</html>
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
 <?php
 if(isset($_COOKIE['id']) && isset($_COOKIE['token'])){
 ?>   
    <br>
    <center>
    <form method="POST" action="ControllerArticle.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td> Nom : </td> 
                <td><input type="text" name="nomAj" size="20" placeholder="Nom" maxlength="50" required><td>
            </tr>
            <tr>
                <td> Description : </td>
                <td><input type="text" name="descrAj" size="20" placeholder="Description..." maxlength="50" required></td>
            </tr>
            <tr>
                <td> Image : </td>
                <td><input type="file"  name="lien"></td>
            
                <input type="hidden" value="<?php echo $_COOKIE['id'];?>" name="idAj">
                <input type="hidden" value="<?php echo gmdate('Y-m-d');?>" name="dateAj">

            </tr>

        </table>
        <br>
        <br>
        <input type="submit" value="Ajouter" name="validationAjout">
    </form>
        
    </center>
<?php
}   
?>
</body>
</html>
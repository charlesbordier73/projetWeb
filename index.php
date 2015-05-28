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


 		 
	<p>Bienvenue sur le Polycoin, c'est comme le bon coin, mais pour Polytech.</p>
	
	<?php
     
    
    if(isset($_COOKIE['id']) && isset($_COOKIE['token']))
    {
    $serveur = "127.2.204.2";
    $username = "adminEGbGpij";
    $password = "cDk-2WrRQM_U";
    $bdd = "php";

   // connexion
    $link=mysql_connect($serveur, $username, $password); 
    mysql_select_db($bdd,$link) or die(mysql_error());

    	$idclient = $_COOKIE['id'];
    	$tokenTab = mysql_fetch_assoc(mysql_query("SELECT token FROM Vendeur WHERE id = '$idclient'"));
    	$token = $tokenTab["token"];
    	$loginTab = mysql_fetch_assoc(mysql_query("SELECT login FROM Vendeur WHERE id = '$idclient'"));
    	$login=$loginTab["login"];
    	echo "Bonjour, vous êtes connectés en tant que : $login !";

    	?>

    	<form method="POST" action="deconnexion.php">
    		<input type="submit" value="Déconnexion" name="envoyer">
    	</form>

    	<?php
    }
    
    else{
    ?>
	<form method="POST" action="ControllerIndex.php">
		<table>
			<tr>
				<td> Login : </td> 
				<td><input type="text" name="login" size="20" placeholder="login" required="" maxlength="50"><td>
			</tr>
			<tr>
				<td> Mdp : </td> 
				<td><input type="password" name="mdp" size="20" placeholder="motdepasse" required="" maxlength="50"><td>
			</tr>
		</table>
		<br>
	<input type="submit" value="Se connecter" name="envoyer">
	</form>
	<?php
	}
	?>

</body>
</html>
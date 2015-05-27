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
     /*
    
    if(isset($_COOKIE['id']) && isset($_COOKIE['token']))
    {
    	$idclient = $_COOKIE['id'];
    	$token = mysql_query("SELECT token FROM Vendeur WHERE id = '$idclient'");
    	$loginTab = mysql_fetch_assoc(mysql_query("SELECT login FROM Vendeur WHERE id = '$idclient'"));
    	$login=$loginTab["login"];
    	echo "Vous êtes connectés en tant que "$login;
    }
    else{*/
    ?>
	<form method="POST" action="ControllerIndex.php">
		<table>
			<tr>
				<td> Login : </td> 
				<td><input type="text" name="login" size="20" placeholder="login" maxlength="50"><td>
			</tr>
			<tr>
				<td> Mdp : </td> 
				<td><input type="password" name="mdp" size="20" placeholder="motdepasse" maxlength="50"><td>
			</tr>
		</table>
	<input type="submit" value="Se connecter" name="envoyer">
	</form>
	<?php
	}
	?>


</body>
</html>
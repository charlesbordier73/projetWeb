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
	<form method="POST" action="ControllerInscription.php">
		<table>
			<tr>
				<td> Nom : </td> 
				<td><input type="text" name="nom" size="20" required="" maxlength="50"><td>
			</tr>
			<tr>
				<td> Prénom : </td>
				<td><input type="text" name="prenom" size="20" placeholder="Lagrange" required="" maxlength="50"></td>
			</tr>
			 <tr>
				<td> Mail : </td>
				<td><input type="mail" name="email" size="20" placeholder="mail@mail.mail" required="" maxlength="50"></td>
			</tr>
			<tr>
				<td> Tél : </td>
				<td><input type="tel" name="tel" size="20" placeholder="XXXXXXXXXX" required="" maxlength="10"></td>
			</tr>
			<tr>
				<td> Login : </td>
				<td><input type="text" name="login" size="20" placeholder="Votre login" required="" maxlength="50"></td>
			</tr>
			<tr>
				<td> Mot de passe : </td>
				<td><input type="password" name="mdp" size="20" placeholder="Votre mot de passe" required="" maxlength="50"></td>
			</tr>
		</table>
		<br>
		<br>
		<p>Tous les champs sont obligatoires !</p>
		<input type="submit" value="S'inscrire" name="envoyer">
	</form>
		
	</center>

</body>
</html>
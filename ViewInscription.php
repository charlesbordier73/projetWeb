<?php
error_reporting(E_ALL);
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
 	<header><b>Bienvenue sur le PolyCoin</b></header>
	<ul class="nav nav-pills">

		<li>
			<a href="index.php">Accueil</a>
		</li>
		
		<li>
			<a href="article.php">Articles</a>
		</li>
		<li>
			<a href="ViewInscription.php">Inscription</a>
		</li>
	</ul>
 		

	<br>
	<center>
	<form method="POST" action="ControllerInscription.php">
		<center>
			<table>
				<tr>
					<td> Nom : </td> 
					<td><input type="text" name="nom" size="20" placeholder="Jean" maxlength="50"><td>
				</tr>
				<tr>
					<td> Prénom : </td>
					<td><input type="text" name="prenom" size="20" placeholder="Lagrange" maxlength="50"></td>
				</tr>
				 <tr>
					<td> Mail : </td>
					<td><input type="text" name="email" size="20" placeholder="mail@mail.mail" maxlength="50"></td>
				</tr>
				<tr>
					<td> Tél : </td><td><input type="text" name="tel" size="20" placeholder="XXXXXXXXXX" maxlength="10"></td>
				</tr>
				<tr>
					<td> Login : </td><td><input type="text" name="login" size="20" placeholder="Votre login" maxlength="50"></td>
				</tr>
				<tr>
					<td> Mot de passe : </td><td><input type="text" name="mdp" size="20" placeholder="Votre mot de passe" maxlength="50"></td>
				</tr>
			</table>
			<br>
			<br>
			<p>Tous les champs sont obligatoires !</p>
			<input type="submit" value="Envoyer" name="envoyer">
	</form>
		
</cente>

</body>
</html>
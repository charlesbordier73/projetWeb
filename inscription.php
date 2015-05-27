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
			<a href="inscription.php">Inscription</a>
		</li>
	</ul>
 		

	<br>
	<form method="POST" action="add.php">
		<center>
			<table>
				<tr>
				<td>Nom</td> <input type="text" name="nom" size="20" value="Jean" maxlength="35"><br>
				</tr>
				 Prénom <input type="text" name="prenom" size="20" value="Lagrange" maxlength="35"><br>
				 Mail <input type="text" name="email" size="20" value="mail@mail.mail" maxlength="70"><br>
				 Tél <input type="text" name="tel" size="20" value="XXXXXXXXXX" maxlength="11"><br>
				 Login <input type="text" name="login" size="20" value="Votre login" maxlength="70"><br>
				 Mot de passe <input type="text" name="url" size="20" value="Votre mot de passe" maxlength="255"><br>
			</table>
		</center>
			<p>Tous les champs sont obligatoires !</p>
			<input type="submit" value="Envoyer" name="envoyer">
	</form>
		


</body>
</html>
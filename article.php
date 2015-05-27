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
 	<header>Bienvenue sur le PolyCoin</header>
 		<ul class="nav nav-pills">

 			<li>
 				<a href="index.php">Accueil</a>
 			</li>
 			
 			<li>
 				<a href="article.php">Articles</a>
 			</li>
 			
 		</ul>
 		 

<table border="1">
	<tr>
		<th>Nom</th>
		<th>Description</th>
		<th>Date</th>
	</tr>
	<?php
	$serveur = "127.2.204.2";
	$username = "adminEGbGpij";
	$password = "cDk-2WrRQM_U";
	$bdd = "php";
	
	try {
    	$connexion = new PDO("mysql:host=$serveur;dbname=$bdd", $username, $password);
    	$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	}
	catch(PDOException $e)
		{
    	echo "Connexion échouée: " . $e->getMessage();
    	}
	$resultats = $connexion->query('SELECT NOMARTICLE, Description FROM ARTICLE');
	
	while($fournisseur = $resultats->fetch())
	{
?>
	<tr>
		<td><?php echo $fournisseur['NOMARTICLE']; ?></td>
		<td><?php echo $fournisseur['description']; ?></td>
	</tr>
<?php }
	$resultats->closeCursor();
	$connexion=null;
?>
</table>


</body>
</html>

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
 	<header>Bienvenue sur le PolyCoin</header>
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
	
	
    $link=mysql_connect($serveur, $username, $password); 
 	mysql_select_db($bdd,$link) or die(mysql_error()); 
    	
 	$query = "SELECT `nomArticle`, `description`,`DateMiseEnLigne` FROM `Article`";
 	$result = mysql_query($query, $link) or die($query . " - " . mysql_error());

	
	while($article = mysql_fetch_array($result))
	{
?>
	<tr>
		<td><?php echo $article['nomArticle']; ?></td>
		<td><?php echo $article['description']; ?></td>
		<td><?php echo $article['DateMiseEnLigne']; ?></td>
	</tr>
	<br>
<?php }
	$resultats->closeCursor();
	mysql_close($link);?>

</table>


</body>
</html>

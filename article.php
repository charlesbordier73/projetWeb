coucou
<!--
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
-->
<?php 

include_once'header.php';

include 'articleCo.php';

?>

<form method="GET" action="ControllerArticle.php">
	<table>
		<tr>
			<td> Nom de l'article : </td> 
			<td><input type="text" name="name" size="20" placeholder="Recherche..." required="" maxlength="50"><td>
			<td><input type="submit" value="Go !" name="envoyer"></td>
		</tr>
	</table>
</form>

<br>

<?php
if(isset($_GET['name'])){

?>
	<table border ="1">
	    <tr>
	    	<th>Images</th>
	        <th>Nom</th>
	        <th>Description</th>
	        <th>Date</th>
	    </tr>

<?php
	
	while($article = mysql_fetch_array($result))
		{
		?>
			<tr>
				<td><img src="<?php echo $article['url']; ?>" width="200" height="150" alt="" /></td>
			    <td><?php echo $article['nomArticle']; ?></td>
			    <td><?php echo $article['description']; ?></td>
			    <td><?php echo $article['DateMiseEnLigne']; ?></td>
			    <td>
			    	<form method="POST" action="ControllerArticle.php">
			    		<input type="submit" value="Détails" name="detailArt">
			    		<input type="hidden" value="<?php echo $mesArticles['idArticle'];?>" name="idArt">
			    	</form>
			    </td>

			</tr>

		<?php 
		}
		$result->closeCursor();
	?>
	</table>
	<?php
} 


?>


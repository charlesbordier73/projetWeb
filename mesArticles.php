<?php
include 'header.php';
include 'articleCo.php';

if(isset($_COOKIE['id']) && isset($_COOKIE['token'])){

?>

	<form method="GET" action="ControllerArticle.php">
		<input type="submit" value="Afficher vos articles" name="envoyer">
	</form>

	<table border ="1">
	    <tr>
	    	<th>Images</th>
	        <th>Nom</th>
	        <th>Description</th>
	        <th>Date</th>
	    </tr>

<?php
	while($mesArticles = mysql_fetch_array($resultats))
		{
		?>

			<tr>
				<td>
				<?php
				//$img = mysql_fetch_array($images);		
				while($img = mysql_fetch_array($images)){
					if($img['idArticle']==$mesArticles['idArticle']){
						?>
							<img src="<?php echo $img['url'];?>" width="200" height="150" alt="" />
						<?php
							
					}
					$images=mysqli_data_seek($images, 0);

				}
				?>
				</td>
			    <td><?php echo $mesArticles['nomArticle']; ?></td>
			    <td><?php echo $mesArticles['description']; ?></td>
			    <td><?php echo $mesArticles['DateMiseEnLigne']; ?></td>
			    <td>	
			    	<form method="POST" action="ControllerArticle.php">
						<input type="submit" value="Modifier" name="modifier">
						<input type="hidden" value="<?php echo $mesArticles['idArticle'];?>" name="idmod">
						<input type="hidden" value="<?php echo $mesArticles['nomArticle'];?>" name="nom">
						<input type="hidden" value="<?php echo $mesArticles['description'];?>" name="descr">
					</form>
				</td>
				<td>	
			    	<form method="POST" action="ControllerArticle.php">
						<input type="submit" value="Supprimer" name="supprimer">
						<input type="hidden" value="<?php echo $mesArticles['idArticle'];?>" name="id">

					</form>
				</td>
				<td>
					<?php
					print_r($images);
					echo "toto";
					$images=mysqli_data_seek($images, 0);
					print_r($images);
				?>
				</td>
			</tr>

		<?php 


		}
		$resultats->closeCursor();
	?>
	</table>
	<?php
} 


?>
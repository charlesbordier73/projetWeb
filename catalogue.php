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
				<td>
				<?php
				print_r(mysql_fetch_array($images));
				while($img = mysql_fetch_array($images)){
					if($img['idArticle']==$article['idArticle']){
						print_r($img[1]);

						?>
							<img src="<?php echo $img['url'][1];?>" width="200" height="150" alt="" />
						<?php
							
					}
				}
				?>
				</td>
			    <td><?php echo $article['nomArticle']; ?></td>
			    <td><?php echo $article['description']; ?></td>
			    <td><?php echo $article['DateMiseEnLigne']; ?></td>
			</tr>

		<?php 
		}
		$result->closeCursor();
	?>
	</table>
	<?php
} 


?>


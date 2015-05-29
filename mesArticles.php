<?php
include 'header.php';
include 'articleCo.php';

if(isset($_COOKIE['id']) && isset($_COOKIE['token'])){

?>
	<table border ="1">
	    <tr>
	        <th>Nom</th>
	        <th>Description</th>
	        <th>Date</th>
	    </tr>

<?php
	while($mesArticles = mysql_fetch_array($resultats))
		{
			echo "toto";
		?>

			<tr>
			    <td><?php echo $mesArticles['nomArticle']; ?></td>
			    <td><?php echo $mesArticles['description']; ?></td>
			    <td><?php echo $mesArticles['DateMiseEnLigne']; ?></td>
			</tr>

		<?php 
		}
		$resultats->closeCursor();
	?>
	</table>
	<?php
} 


?>
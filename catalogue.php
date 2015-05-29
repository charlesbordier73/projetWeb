<?php
if(isset($_COOKIE['id']) && isset($_COOKIE['token']))
{
	include 'header.php';
}
include 'articleCo.php';
echo "catalogue.php";

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
<br>

<table border ="1">
    <tr>
        <th>Nom</th>
        <th>Description</th>
        <th>Date</th>
    </tr>

<?php
if(isset($_GET['name'])){
	include "ControllerArticle.php";

	while($article = mysql_fetch_array($result))
		{
		?>

			<tr>
			    <td><?php echo $article['nomArticle']; ?></td>
			    <td><?php echo $article['description']; ?></td>
			    <td><?php echo $article['DateMiseEnLigne']; ?></td>
			</tr>

		<?php 
		}
		$result->closeCursor();
} 


?>
</table>


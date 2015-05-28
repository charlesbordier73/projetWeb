<?php
include 'header.php';
include 'articleCo.php';
echo "catalogue.php";

?>

<form method="POST" action="ControllerArticle.php">
	<table>
		<tr>
			<td> Nom de l'article : </td> 
			<td><input type="text" name="name" size="20" placeholder="Recherche..." required="" maxlength="50"><td>
			<td><input type="submit" value="Go !" name="envoyer"></td>
		</tr>
	</table>
</form>

		
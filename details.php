<?php 

include_once'header.php';

include 'catalogue.php';

?>
Article :
<br>
<table border = "1">

	<tr>
    	<th>Images</th>
        <th>Nom</th>
        <th>Description</th>
        <th>Date</th>
    </tr>

	<?php
	while($detail=mysql_fetch_array($reqDetail)){

	?>
	<tr>
		<td><img src="<?php echo $detail['url']; ?>" width="200" height="150" alt="" /></td>
		<td><?php echo $detail['nomArticle']; ?></td>
	    <td><?php echo $detail['description']; ?></td>
	    <td><?php echo $detail['DateMiseEnLigne']; ?></td>
	</tr>
</table>
<br>
<br>
Contact :
<br>
<table>

	<tr>
    	<th>Nom</th>
        <th>Prénom</th>
        <th>mail</th>
        <th>tél</th>
        <th>Catégorie</th>
    </tr>

    <tr>
    	<td><?php echo $detail['nom']; ?></td>
	    <td><?php echo $detail['prenom']; ?></td>
	    <td><?php echo $detail['mail']; ?></td>
	    <td><?php echo $detail['tel']; ?></td>
	    <td><?php echo $detail['libCat']; ?></td>	    
	</tr>
</table>
<?php
}
?>



<?php
error_reporting(E_ALL);


if(isset($_COOKIE['id']) && isset($_COOKIE['token']))
{
?>
	<br>
	<ul class="nav nav-pills">

		<li>
			<a href="mesArticles.php">Mes articles</a>
		</li>
		<li>
			<a href="catalogue.php">Catalogue</a>
		</li>
	</ul>
<?php
}
?>


</body>
</html>
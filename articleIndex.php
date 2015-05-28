<?php
error_reporting(E_ALL);
include 'header.php';

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
 	
 	<?php
 	if(isset($_COOKIE['id']) && isset($_COOKIE['token']))
    {
    	include 'articleCo.php';

    }
    else
    {
    	?>
    	<ul class="nav nav-pills">
			<li>
				<a href="catalogue.php">Catalogue</a>
			</li>
		</ul>
		<?php
    }
   	?>


</body>
</html>
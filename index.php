<!doctype html>
<html lang="fr" ng-app="polycoin">
<head>
  <meta charset="utf-8">
  <title>Accueil</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

 	<header>Bienvenue sur le PolyCoin</header>
 	<section ng-controller="menuController">
 		<ul class="nav nav-pills">

 			<li ng-class="menuController.estChoisi(1)">
 				<a>Accueil</a>
 			</li>
 			
 			<li ng-class="menuController.estChoisi(2)">
 				<a href ng-click="ong=2">Articles</a>
 			</li>
 			
 		</ul>
 		<div article class="panel" ng-show="estChoisi(2)"></div>
 	</section>

	<script type ="text/javascript" src="./angular.min.js"></script>
	<script type ="text/javascript" src="./polycoin.js"></script>

</body>
</html>
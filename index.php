<!doctype html>
<html lang="fr" ng-app="polycoin">
<head>
  <meta charset="utf-8">
  <title>Accueil</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>

 	<header>Bienvenue sur le PolyCoin</header>
 	<section ng-controller="menuController">
 		<ul class="nav nav-pills">

 			<li ng-class="{active: menu.estChoisi(1)}">
 				<a>Accueil</a>
 			</li>
 			
 			<li ng-class="{active: menu.estChoisi(2)}">
 				<a href ng-click="ong=2">Articles</a>
 			</li>
 			
 		</ul>
 		<div article class="panel" ng-show="estChoisi(2)"></div>
 	</section>

	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
	<script type ="text/javascript" src="./polycoin.js"></script>

</body>
</html>
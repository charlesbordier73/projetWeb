<!DOCTYPE html>
<html ng-app="alu3a"> 
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Alu 3 A</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</head>
	<body >
		<div class="well media">
			<div class="media-left media-middle">
				<img class="media-object" src="./alu3a.jpg">
			</div>
			<div class="media-body media-middle">
				<h1 class="media-body">Bienvenue sur le site web d'Alu3A !</h1>
			</div>
		</div>
		
		<section ng-controller="ongletsController">
			<ul class="nav nav-pills">
				<li ng-class="{active: $parent.estChoisi(1)}">
					<a href ng-click="ong=1">Accueil</a>
				</li>
				<li ng-class="{active: $parent.estChoisi(2)}">
					<a href ng-click="ong=2">Nos fournisseurs</a>
				</li>
				<li  ng-class="{active: $parent.estChoisi(3)}">
					<a href ng-click="ong=3">Nos produits</a>
				</li>
				<li ng-class="{active: $parent.estChoisi(4)}">
					<a href ng-click="ong=4">Notre histoire</a>
				</li>
				<li ng-class="{active: $parent.estChoisi(5)}">
					<a href ng-click="ong=5">Quelques réalisations</a>
				</li>
			</ul>
			<div class="panel" ng-show="estChoisi(1)">
				<h4>{{ ong }}</h4>
			</div>
			<div fournisseurs class="panel" ng-show="estChoisi(2)"></div>
			<div class="panel" ng-show="estChoisi(3)">
				<h4>{{ ong }}</h4>
			</div>
			<div presentation class="panel" ng-show="estChoisi(4)"></div>
			<div quelques-realisations class="panel" ng-show="estChoisi(5)"></div>
		</section>

	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
	<script type = "text/javascript" src="./polycoin.js"></script>
	</body>
</html>
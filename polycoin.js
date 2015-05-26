var alu3a = angular.module('alu3a', []);
	
alu3a.controller('ongletsController',['$scope',function($scope){
	$scope.ong = 1;
	
	$scope.estChoisi = function(chOng) {
		if ($scope.ong === chOng)
			return true;
		else 
			return false;
	};
}]);

alu3a.directive('quelquesRealisations',function(){
	return{
		restrict: 'AEC',
		templateUrl: './quelques-realisations.html'
	}
});

alu3a.directive('presentation',function(){
	return{
		restrict: 'AEC',
		templateUrl: './presentation.html'
	}
});

alu3a.directive('fournisseurs',function(){
	return{
		restrict: 'AEC',
		templateUrl: './fournisseurs.php'
	}
});
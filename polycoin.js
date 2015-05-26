var menu = angular.module('menu',[]);

menu.controller('menu',['$scope',function($scope){
	$scope.ong = 1;
	
	$scope.estChoisi = function(chOng) {
		if ($scope.ong === chOng)
			return true;
		else 
			return false;
	};
}]);

menu.directive('articles',function(){
	return{
		restrict: 'AEC',
		templateUrl: './article.php'
	}
});
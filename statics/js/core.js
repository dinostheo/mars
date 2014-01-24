// public/core.js
var marsApp = angular.module('marsApp', []);

function mainController($scope, $http) {

    // when landing on the page, get all todos and show them
    $http.get('planets')
        .success(function(data) {
            $scope.planets = data.data.planets;
        })
        .error(function(data) {
            console.log('Error: ' + data);
        });
}
// public/core.js
var marsApp = angular.module('marsApp', []);

function mainController($scope, $http) {

    // when landing on the page, get all todos and show them
    $http.get('planets/systems')
        .success(function(data) {
            $scope.planets        = {};
            $scope.systems        = data.data.systems;
            $scope.clicked_system = '';
        })
        .error(function(data) {
            console.log('Error: ' + data.status.message + ', with code: ' + data.status.code);
        });

    $scope.getPlanets = function(system) {
        $http.get('planets/planets/' + system)
            .success(function(data) {
                $scope.planets        = data.data.planets;
                $scope.clicked_system = system;
            })
            .error(function(data) {
                console.log('Error: ' + data.status.message + ', with code: ' + data.status.code);
            });
    };
}
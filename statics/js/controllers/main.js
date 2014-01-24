angular.module('marsController', [])
    .controller('mainController', function($scope, $http, Mars) {
        Mars.get()
            .success(function(data) {
                $scope.planets        = {};
                $scope.systems        = data.data.systems;
                $scope.clicked_system = '';
            });

        $scope.getPlanets = function(system) {
            Mars.getPlanets(system)
                .success(function(data) {
                    $scope.planets        = data.data.planets;
                    $scope.clicked_system = system;
                });
        };
    });
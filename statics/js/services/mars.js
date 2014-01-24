angular.module('marsService', [])
    .factory('Mars', function($http) {
        return {
            get : function() {
                return $http.get('planets/systems');
            },
            getPlanets : function(system) {
                return $http.get('planets/planets/' + system);
            }
        }
    });
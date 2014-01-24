<!doctype html>

<html ng-app="marsApp">
<head>
    <base href="<?= $this->base_url(); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>From Lunr to Mars</title>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
    <script src="statics/js/core.js"></script>

</head>

<body ng-controller="mainController">
    <div class="container">

        <div class="jumbotron text-center">
            <h1>Planetary systems</h1>
        </div>

        <div class="row">
            <div ng-repeat="system in systems">
                <img ng-src="{{system.img}}" ng-click="getPlanets(system.name)" style="width: 140px; height:140px; margin-bottom: 5px;" class="img-circle" title="{{system.name}}">
            </div>
        </div>

        <div class="row" ng-switch on="clicked_system">
            <span ng-switch-when=""></span>
            <span ng-switch-default>
                <h4>Planets in {{clicked_system}} <span class="label label-info">{{ planets.length }}</span></h4>
                <div ng-repeat="planet in planets">
                    <div>{{planet}}</div>
                </div>
            </span>
        <div>

    </div>
</body>
</html>
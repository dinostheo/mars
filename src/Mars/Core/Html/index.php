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
    <ol>
        <li ng-repeat="planet in planets">{{planet}}</li>
    </ol>
</body>
</html>
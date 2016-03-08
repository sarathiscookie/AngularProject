<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <title>Angular JS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
</head>

<body data-ng-app="appModule">
<div data-ng-controller="apptooController" >
    <p>Good {{time}} {{name}}</p>
    <div data-ng-controller="appjooController">
        <p>Good {{time}} {{name}}</p>
        <div data-ng-controller="appfooController">
            <p>Good {{time}} {{name}}</p>
        </div>
    </div>
</div>
<script type="text/javascript" src="angular.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//code.jquery.com/jquery-2.2.0.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

<script>
    var module = angular.module('appModule', []);
    module.controller('apptooController', ['$scope', function($scope){
            $scope.time = 'Morning';
            $scope.name = 'too';
    }]);
    module.controller('appjooController', ['$scope', function($scope){
        $scope.time = 'Afternoon';
        $scope.name = 'joo';
    }]);
    module.controller('appfooController', ['$scope', function($scope){
        $scope.time = 'Evening';
        $scope.name = 'foo';
    }]);
</script>
</body>
</html>

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
<div data-ng-controller="appController">
    <button data-ng-click="chillyspice()">Chilli</button>
    <button data-ng-click="jalapenospice()">Jalapeno</button>
    <p>The food is {{spice}} spicy!</p>
</div>
<script type="text/javascript" src="angular.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//code.jquery.com/jquery-2.2.0.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<script>
    angular.module('appModule', [])
        .controller('appController', ['$scope', function($scope){
            $scope.spice = 'very';
            $scope.chillyspice = function(){
                $scope.spice = 'chilly';
            };
            $scope.jalapenospice = function(){
                $scope.spice = 'jalapeno';
            };
        }]);
</script>
</body>
</html>

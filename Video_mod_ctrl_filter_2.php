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
<body>
<div data-ng-app="testMod" data-ng-controller="testCtrl">
    <input type="text" data-ng-model="name">
    <ul>
        <li data-ng-repeat="cust in customers | filter: name | orderBy: 'name'">
            {{ cust.name | uppercase }} - {{ cust.country | lowercase}}
        </li>
    </ul>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//code.jquery.com/jquery-2.2.0.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<script>
    var testApp = angular.module('testMod', []);
    testApp.controller('testCtrl', function($scope){
        $scope.customers = [
            {name : 'Peter Zaminov', country : 'Russia'},
            {name : 'Declan Russel', country : 'UK'},
            {name : 'Mattias Himmelstob', country : 'Germany'}
        ];
    });
</script>
</body>
</html>

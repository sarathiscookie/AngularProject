<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html data-ng-app="testMod" >
<head>
    <title>Angular JS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
</head>
<body>
<input type="text" data-ng-model="name">
<div data-ng-controller="userCtrl">

    <ul>
        <li data-ng-repeat="cust in customers | filter: name | orderBy: 'customername'">{{ cust.customername | uppercase }} - {{ cust.customercity | lowercase }}</li>
    </ul>
</div>
<div data-ng-controller="carCtrl">
    <ul>
        <li data-ng-repeat="model in carmodels | orderBy: 'carname' | filter: name">{{ model.carname | uppercase }}</li>
    </ul>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js"></script>
<!--<script src="angular.min.js"></script>-->
<!-- Latest compiled and minified JavaScript -->
<script src="//code.jquery.com/jquery-2.2.0.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<script>
    var testModule = angular.module('testMod', [])
    var controllerDetails = {};
    controllerDetails.userCtrl = function($scope){
      $scope.customers = [
          {customername: 'Russel', customercity: 'Srilanka'},
          {customername: 'Matthias', customercity: 'Germany'},
          {customername: 'Anderson', customercity: 'USA'},
          {customername: 'Andreas', customercity: 'Germany'}
      ]
    };
    controllerDetails.carCtrl = function($scope){
        $scope.carmodels = [
            {carname: 'Volvo'},
            {carname: 'BMW'},
            {carname: 'Audi'}
        ]
    };
    testModule.controller(controllerDetails);
</script>
</body>
</html>

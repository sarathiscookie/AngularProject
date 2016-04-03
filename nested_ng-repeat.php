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
</head>
<body ng-app="appModule">
<div ng-controller="appController">
    <ul ng-repeat="country in countries">
        <li>{{ country.name }}
          <ul ng-repeat="city in country.cities">
              <li>{{city.name}}</li>
          </ul>
        </li>
    </ul>
</div>
<script src="//code.jquery.com/jquery-2.2.0.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script>
    angular.module('appModule', [])
        .controller('appController', ['$scope', function($scope){
            $scope.countries = [
                {name:'USA', cities: [
                    {name:'Newyork'},
                    {name:'Washington'},
                    {name:'Texas'}
                ]},
                {name:'India', cities: [
                    {name:'Delhi'},
                    {name:'Mumbai'},
                    {name:'Banglore'}
                ]},
                {name:'Germany', cities: [
                    {name:'Bayren'},
                    {name:'Regensberg'},
                    {name:'Frankfurt'}
                ]}
            ]
        }]);
</script>
</body>
</html>

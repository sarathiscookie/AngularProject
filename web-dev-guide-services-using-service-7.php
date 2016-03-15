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
<body data-ng-app="calculationApp">
<div data-ng-controller="CalculationController as cal">
    <input type="text" name="qty" data-ng-model="cal.qty">
    <input type="text" name="cost" data-ng-model="cal.cost">
    <select data-ng-model="cal.inCurr">
        <option data-ng-repeat="cur in cal.currencies">{{ cur }}</option>
    </select>
    <p>{{total(cal.qty, cal.cost)}}</p>
</div>
<script type="text/javascript" src="angular.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//code.jquery.com/jquery-2.2.0.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<script>
    angular.module('calculationApp', ['currencyApp'])
        .controller('CalculationController', ['$scope', 'CurrencyController', function($scope, CurrencyController){
            this.qty = 4;
            this.cost = 5;
            $scope.total = function(value, value1){
                return value * value1;
            };
            this.inCurr = CurrencyController.inCurr;
            this.currencies = CurrencyController.currencies;
        }]);

    angular.module('currencyApp', [])
        .factory('CurrencyController', function(){
            var inCurr     = 'STR';
            var currencies = ['GBR', 'STR', 'US'];
            return {
                currencies : currencies,
                inCurr     : inCurr
            };
        });
</script>
</body>
</html>

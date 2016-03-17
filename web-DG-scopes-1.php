<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Example</title>
</head>
<body ng-app="appModule">
<div ng-controller="appController">
    <div>
        Name: <input type="text" name="name" ng-model="name">
    </div>
    <div>
        <button ng-click="message();">Click</button>
    </div>
    <p>{{ greetings }}</p>
</div>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
<script>
    angular.module('appModule', [])
        .controller('appController', ['$scope', function($scope){
            $scope.name = 'sarath ts';
            $scope.message = function(){
                $scope.greetings = 'Welcome ' +$scope.name;
            }
        }]);
</script>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Example</title>
    <style>
        .show-scope-demo.ng-scope,
        .show-scope-demo .ng-scope  {
            border: 1px solid red;
            margin: 3px;
        }
    </style>
</head>
<body ng-app="appModule">
<div ng-controller="staffController" class="show-scope-demo">
    <div>{{ staffname }}</div>
    <div ng-controller="studentController">
        <ol>
            <li ng-repeat="student in students">{{ student }} From {{ branch }}</li>
        </ol>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
<script>
    angular.module('appModule', [])
        .controller('staffController', ['$scope', '$rootScope',function($scope, $rootScope){
            $scope.staffname = 'Peter';
            $rootScope.branch = 'Angular';
        }])
        .controller('studentController', ['$scope', function($scope){
            $scope.students = ['Igor', 'Misko', 'Vojta'];
        }]);
</script>
</body>
</html>

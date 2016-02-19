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
<h4>Like JavaScript expressions, AngularJS expressions can contain literals, operators, and variables.<br>

    Unlike JavaScript expressions, AngularJS expressions can be written inside HTML.<br>

    AngularJS expressions do not support conditionals, loops, and exceptions, while JavaScript expressions do.<br>

    AngularJS expressions support filters, while JavaScript expressions do not.</h4>
<div data-ng-app="" data-ng-init="color = 'lightblue'; quantity=5; cost=100; person={firstname:'sarath', secondname:'ts'}">
    <input type="text" style="background-color:{{color}}" value="{{color}}" data-ng-model="color">
    <p>{{ person.firstname }}{{ person.secondname }} : {{ quantity*cost }}</p>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js"></script>
<script type="text/javascript" src="js/w3.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//code.jquery.com/jquery-2.2.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<script>
</script>
</body>
</html>

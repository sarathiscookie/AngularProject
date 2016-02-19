<h2>About Us</h2>
<input type="text" data-ng-model="name">
<div data-ng-controller="appController">
    <ul>
        <li data-ng-repeat="cust in customers | filter: name | orderBy: name ">{{ cust.name | uppercase}}-{{ cust.country }}</li>
    </ul>
</div>
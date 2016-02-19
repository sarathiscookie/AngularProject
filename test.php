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
<body data-ng-app="paymentmodule">

<div data-ng-controller="PaymentController as payment">
    <p data-ng-bind="payment.qty"></p>
    <div>
        <label for="quantity">Quantity</label>
        <input type="text" name="qty" data-ng-model="payment.qty">
    </div>
    <div>
        <label for="cost">Cost</label>
        <input type="text" name="cost" data-ng-model="payment.cost">
        <select id="currency" data-ng-model="payment.inCurr">
            <option data-ng-repeat="pay in payment.currency">{{pay}}</option>
        </select>
    </div>
    <div data-ng-repeat="pay in payment.currency">
        <p>{{payment.total(pay)}}</p>
    </div>
</div>
<script type="text/javascript" src="angular.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//code.jquery.com/jquery-2.2.0.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<script>
    angular.module('paymentmodule', [])
        .controller('PaymentController', function(){
            this.qty = 1;
            this.cost= 2;
            this.inCurr = 'RUPEE';
            this.currency = ['GBR', 'US', 'RUPEE'];
            this.total = function total(){
                return this.qty * this.cost, this.currency ;
            }
        });


    /*angular.module('invoice1', [])
        .controller('InvoiceController', function() {
            this.qty = 1;
            this.cost = 2;
            this.inCurr = 'EUR';
            this.currencies = ['USD', 'EUR', 'CNY'];
            this.usdToForeignRates = {
                USD: 1,
                EUR: 0.74,
                CNY: 6.09
            };
        });*/
</script>
</body>
</html>

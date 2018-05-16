<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html  lang="fr">  <!-- définit l'application angular utilisée -->   <!--  -->
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" src="css/style.css"/>
        <link  rel="stylesheet" type="text/css" src="css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script type="text/javascript" src="js/angular.min.js"></script>
        <title>tests</title>
    </head>
    <body >
    <div ng-app="myApp" ng-controller="customerCtrl">

<p>The url of this page is: </p>
<h3>{{myUrl}}</h3>
</div> 

<script>
var app = angular.module('myApp', []);
app.controller('customerCtrl', function($scope, $location) {
    $scope.myUrl = $location.absUrl();
}); 
</script> 
    </body>
</html>

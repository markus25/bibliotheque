<!DOCTYPE html>
<!--
 commentaires
-->
<html ng-app="store" lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link  rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <title>Liste de grands classiques de la littérature Française</title>
    </head>
    <body ng-controller="StoreController as store">
       <header>
            <a href="" class="floatleft">
            <img src="img/livre" alt="logolibrairie" style="vertical-align: top;">    
            </a>
            <div id="header-infos">
                <div class="text-center infos-client"></div>
                <span id="bloc-compte">
                    <a href=""></a>
                    <img src="img/compte.png" alt="compte">
                </span>
                <span id="bloc-panier"></span>
                    <a href=""></a>
                    <img src="img/panier.jpg" alt="panier">
            </div>
        </header> 
         <!-- Products container  -->
        <div class="container">
        <div class="list-group">
         <!--Product container -->    
         <div class="list-group-item" ng-hide="product.soldOut" ng-repeat="product in store.products | limitTo:6">
             <div product-title></div>
           <!--  <div ng-include ="'product-title.html'" ></div> -->
             <product-panels ng-controller="PanelController as panel">
             </product-panels> <br/>
        </div>
        </div> 
        </div>  
         <script type="text/javascript" src="Jquery/angular.min.js"></script>
        <script type="text/javascript" src="Jquery/app.js"></script>
        <script type="text/javascript" src="Jquery/bootstrap.js"></script>
    </body>
</html>

(function (){ 
var app = angular.module('store', []);

app.controller('StoreController', function(){this.products = livres;});
 
 var livres = [ 
     {
     name: 'Eugénie Grandet',
     price: 15.30,
     description: 'Grandeur et décadence sous l\'\empire',
     images: [
         {
         full: "img/eugenie-grandet1.jpg",
         thumb: "img/eugenie-grandet1.jpg"
     }
     ],
     canPurchase: true,
     soldOut: false
     },
     {
     name: 'Le grand meaulne',
     price: 15.93,
     description: 'une histoire de vie',
     images: [
         {
          full:'img/le_grand_meaulne1.jpg',    
          thumb:'img/le_grand_meaulne1.jpg'
         }
     ],
     review: [
         {
          stars: 5,
          body: "J'aime ce produit!",
          author: "jojo grandeBouille"
         },
         {
          stars: 1,
          body: "Bof!",
          author: "Billy laTerreur"
         }
     ],
     canPurchase: true,
     soldOut: false
     },
     {
     name: 'Comte de Monte-Cristo',
     price: 16.00,
     description: 'Une histoire de vengeance qui fait réfléchir',
     images: [
         {
         full: "img/comte-monte-cristo.jpg",
         thumb: "img/comte-monte-cristo.jpg"
     }
     ],
     canPurchase: true,
     soldOut: false
     }
     ];
     
app.controller("PanelController", function(){
  this.tab = 1;
  
  this.selectTab = function(setTab){
  this.tab = setTab;    
  };
  this.isSelected = function(checkTab){
  return this.tab === checkTab;
  };
});

app.controller("ReviewController", function(){
 this.review = {};
 
 this.addReview = function(product){
     product.reviews.push(this.review);
     this.review = {};
 };
});

app.directive('productTitle', function(){
  return {
       restrict: 'EA',
       templateUrl: 'view/product-title.html'
  };  
});

app.directive ('productPanels', function(){
    return {
        restrict: 'E',
        templateUrl: 'view/product-panels.html',
        controller: function (){},
        controllerAs: 'panels'
       
    };
});


})();
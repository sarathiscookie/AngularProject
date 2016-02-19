/* Module and Controller */
(function(){
 var gem = { Name:'Nike', Price:2934.88, canPurchase: true, soldOut: false };
 var app = angular.module('gemStore', []); 
 app.controller('StoreController',function(){
  this.product = gem;   
 });
})();
/* ng-repeat */
(function(){
 var appNew = angular.module('comTurnover',[]);
 var companies = [
                  {
                   companyName:'Infosys',
                   companyTurnover:'12345'
                  },
                  {
                   companyName:'TCS',
                   companyTurnover:'67890'
                  }
                 ];
 appNew.controller('companyTurnoverController', function()
 {
    this.companiesdetails = companies;  
 });                
})();
/* ng-src  */
(function(){
var srcapp = angular.module('srcAppModule',[]);
var srcAppStore = [
                   {
                    srcAppName:'Facebook & Twitter',
                    srcAppPrice:'36',
                    images:[
                           "images/images.jpg",
                           "images/twitter.png"                         
                    ]
                   },
                   {
                    srcAppName:'Watsapp',
                    srcAppPrice:'36',
                    images:[
                           "images/wattsapp.jpg"                           
                    ]
                   },
                   {
                    srcAppName:'Social Network',
                    srcAppPrice:'21',
                    images:[ ]
                   }
                  ];
srcapp.controller('SocialAppController', function(){
    this.apps = srcAppStore;
});
}) ();

/* ng-module, data binding, filter by name*/
(function(){
    var modelFilterName = angular.module('modelFilter', []);
    var personname = [
                      {
                        Name: 'User',
                        City: 'USA'
                      },
                      {
                        Name: 'Sarath',
                        City: 'INDIA'
                      }
                      
                     ];
    modelFilterName.controller('filterNameController', function(){
       this.person = personname; 
    });
})();


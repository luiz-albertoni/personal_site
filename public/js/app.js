(function(){
    'use strict';

    angular.module('app', ['ngLodash', 'restangular'], function( $interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });
    
})();


(function(){
    'use strict';

    function ApiControllerUserShow($http, $window, lodash, Restangular) {
        var vm = this;
         vm.var ="button ok";
        vm.changeLanguage = changeLanguage;

        activate();
        
        function activate() {

        }
        
        function changeLanguage(language){

            Restangular.all('albertoni/data').doGET().then(function(response){
                window.console.log(response);
            });

        }
    }
    angular.module('app')
        .controller('ApiControllerUserShow', ApiControllerUserShow);

})();
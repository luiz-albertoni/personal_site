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
        vm.changeLanguage   = changeLanguage;
        vm.validMail        = validMail;
        activate();
        
        function activate() {

        }
        
        function changeLanguage(language){
            console.log(language);
            Restangular.one("/albertoni").post('language', {"language" : language}).then(function(response) {
                $window.location.reload();
            })

        }

        function validMail()
        {
           return false;
        }
    }
    angular.module('app')
        .controller('ApiControllerUserShow', ApiControllerUserShow);

})();
(function(){
    'use strict';

    angular.module('app',
        [

        ]);
})();

(function(){
    'use strict';

    function ApiControllerUserShow($http, $window) {
        var vm = this;
        
        vm.changeLanguage = changeLanguage;


        activate();
        
        function activate() {

        }
        
        function changeLanguage(language){
            console.log('swsw');
        }
    }
    angular.module('app')
        .controller('ApiControllerUserShow', ApiControllerUserShow);

})();
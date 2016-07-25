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

        activate();
        ///
        function activate() {
            console.log('ola');

        }
    }
    angular.module('app')
        .controller('ApiControllerUserShow', ApiControllerUserShow);

})();
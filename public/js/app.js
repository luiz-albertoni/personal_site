(function(){
    'use strict';

    var app =angular.module('app', ['ngLodash', 'restangular'], function( $interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });

    app.config(function($interpolateProvider) {
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
        vm.searchPost       = '';
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



(function(){
    'use strict';

    function PostController($http, $window, lodash, Restangular) {
        var vm = this;
        vm.posts            = window.posts;
        vm.search_post      = '';
        vm.searchPosts      = searchPosts;

        function searchPosts()
        {
            Restangular.one("/albertoni/blog/searchPost").get( {"searchPost" : vm.search_post}).then(function(response) {
                vm.posts = response.result;
            });
        }

    }
    angular.module('app')
        .controller('PostController', PostController);

})();
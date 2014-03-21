'use strict';

/* Directives */


angular.module('myApp.directives', []).
    directive('appVersion', ['version', function(version) {
    return function(scope, elm, attrs) {
      elm.text(version);
    };
    }])
    .directive('myDialog', function() {
        return {
            restrict: 'E',
            transclude: true,
            scope: {
                'close': '&onClose'
            },
            templateUrl: 'tmp/dialog/dialog.html'
        };
    })
    .directive('checkUser',  function ($rootScope, $location, UserService) {
        return {
            link: function (scope, elem, attrs, ctrl) {
                $rootScope.$on('$routeChangeStart', function (event,url) {
                    UserService.getCurrentUser(function(data){
                        if(!data && url.originalPath != '/user/create' && url.originalPath != '/user/login'){
                            $location.path('/user/login');
                        }
                    });
                });
            }
        }
    })

	.directive('nav',  function ($rootScope) {
		return {
			link: function (scope, elem) {
				$rootScope.$on('$routeChangeStart', function (event,url) {
					elem.find('li').removeClass('active');
					var path = '#'+url.originalPath;
					$('li a[rel="'+path+'"]').parent().addClass('active');
					console.log(url.originalPath.indexOf('phase'));
					if(url.originalPath.indexOf('phase') > 0) {
						$('li a[rel="#/video/phase/1"]').parent().addClass('active');
					}
				});

			}
		}

	})
    .directive('photoload' , function(){
        return {
            link: function(scope, element, attrs) {
                element.bind('load', function() {
                    transformMgr.initialize( $(this.parentNode) );
                });
            }
        };
    })
    .directive('searchInput',  function ($rootScope) {
        return {
            link: function (scope, elem) {
                elem.bind('keyup',function(e){
                    if(e.which == 13) {
                        scope.$apply(scope.search);
                    }
                });

            }
        }

    })


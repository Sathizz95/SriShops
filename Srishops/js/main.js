var navbarHeight = $('.navbar').height(); 

$(window).scroll(function() {
    var navbarColor = "255,255,255";//color attr for rgba
    var smallLogoHeight = $('.small-logo').height();
    var bigLogoHeight = $('.big-logo').height();


    var smallLogoEndPos = 0;
    var smallSpeed = (smallLogoHeight / bigLogoHeight);

    var ySmall = ($(window).scrollTop() * smallSpeed); 

    var smallPadding = navbarHeight - ySmall;
    if (smallPadding > navbarHeight) { smallPadding = navbarHeight; }
    if (smallPadding < smallLogoEndPos) { smallPadding = smallLogoEndPos; }
    if (smallPadding < 0) { smallPadding = 0; }

    $('.small-logo-container ').css({ "padding-top": smallPadding});

    var navOpacity = ySmall / smallLogoHeight; 
    if  (navOpacity > 1) { navOpacity = 1; }
    if (navOpacity < 0 ) { navOpacity = 0; }
    var navBackColor = 'rgba(' + navbarColor + ',' + navOpacity + ')';
    $('.navbar').css({"background-color": navBackColor});

    var shadowOpacity = navOpacity * 0.4;
    if ( ySmall > 1) {
        $('.navbar').css({"box-shadow": "0 2px 3px rgba(0,0,0," + shadowOpacity + ")"});
    } else {
        $('.navbar').css({"box-shadow": "none"});
    }



});

/*angular navigation*/

	// create the module and name it scotchApp
	var scotchApp = angular.module('scotchApp', ['ngRoute']);

	// configure our routes
	scotchApp.config(function($routeProvider) {
		$routeProvider

			// route for the home page
			.when('/', {
				templateUrl : 'index.html',
				controller  : 'mainController'
			})

			// route for the newspaper page
			.when('/newspapers', {
				templateUrl : 'newspapers.html',
				controller  : 'newsController'
			})
       // route for the article page
			.when('/article', {
				templateUrl : 'article.html',
				controller  : 'articleController'
			})
			// route for the contact page
			.when('/contact', {
				templateUrl : 'contact.html',
				controller  : 'contactController'
			});
	});

	// create the controller and inject Angular's $scope
	scotchApp.controller('mainController', function($scope) {
		// create a message to display in our view
		$scope.message = 'mainPage';
	});

	scotchApp.controller('newsController', function($scope) {
		$scope.message = 'News Page';
	});

	scotchApp.controller('contactController', function($scope) {
		$scope.message = 'Contact';
	});

scotchApp.controller('articleController', function($scope) {
		$scope.message = 'Article';
	});

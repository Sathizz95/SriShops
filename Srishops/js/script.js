// create the module and name it
	var myApp = angular.module('myApp', ['ngRoute']);

	// routes
	myApp.config(function($routeProvider) {
		$routeProvider

			// route for the home page
			.when('/', {
				templateUrl : 'partials/welcome.html',
				controller  : 'mainController'
			})
        
        .when('/home', {
				templateUrl : 'partials/home.html',
				controller  : 'homeController'
			})

			// route for the about page
			.when('/news', {
				templateUrl : 'partials/news.html',
				controller  : 'newsController'
			})
        
        .when('/article', {
				templateUrl : 'partials/article.html',
				controller  : 'articleController'
			})

			// route for the service page
			.when('/about', {
				templateUrl : 'partials/about.html',
				controller  : 'aboutController'
			});
	
	});

   myApp.controller('mainController', function($scope) {
		// create a message to display in our view
		$scope.info = 'Welcome to SriShops';
	});

	// create the controller and inject Angular's $scope
	myApp.controller('homeController', function($scope) {
		// create a message to display in our view
		$scope.info = 'Home';
	});

	myApp.controller('newsController', function($scope) {
		$scope.info = 'Read Newspapers';
	});

	myApp.controller('articleController', function($scope) {
		$scope.info = 'Articles';
	});

	myApp.controller('aboutController', function($scope) {
		$scope.info = 'About SriShops';
	});

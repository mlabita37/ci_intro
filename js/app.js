console.log("app.js is loaded");

var app = angular.module('coolApp', ['ngRoute', 'ui.bootstrap']);

app.config(['$routeProvider','$locationProvider',
  function($routeProvider, $locationProvider) {
    $routeProvider
      .when('/',{
        templateUrl: '/site/loadHomePage',
        controller: 'HomeController'
      })
      .when('/site',{
        templateUrl: 'homeRedirect',
        controller: 'HomeController'
      })
      .when('/home_view',{
        templateUrl: '/site/loadHomePage',
        controller: 'HomeController'
      })
      .when('/about_view', {
        templateUrl: '/user/index',
        controller: 'AboutController'
      })
      .when('/db_view', {
        templateUrl: '/site/loadDbPage',
        controller: 'DbController'
      })
      .when('/new_user', {
        templateUrl: 'site/loadNewUserPage',
        controller: 'UserController'
      })
      .otherwise({
        redirectTo: '/home_view'
      });

      $locationProvider.html5Mode(true);
  }]);

//** Header Ctrl
  app.controller('HeaderController', function($scope, $location){
      $scope.isActive = function (viewLocation) {
          return viewLocation === $location.path();
      };
  });

//** Home Ctrl
  app.controller('HomeController', function($scope){
    $scope.message = "Sup ya'll? You are Home!!!";
});


//** About Ctrl
app.controller('AboutController', function($scope){
    $scope.message = "Welcome to About!!!";
});

//** Db Ctrl
app.controller('DbController', function($scope){
  $scope.message = "Welcome to the DB!!!";
});

//** User Ctrl
app.controller('UserController', function($scope, $http, $route){
  $scope.message = "Welcome to the New User Page!!!";

  // $scope.newUser = {
  //   login: $scope.login,
  //   password: $scope.password,
  //   user: $scope.email
  // };
  //
  // // $scope.refresh = function(){
  // //     $http.get('api/tasks').success(function(data){
  // //         $scope.tasks = data;
  // //     }).error(function(data){
  // //         $scope.tasks = data;
  // //     });
  // // }
  // //
  // // $scope.addUser = function(){
  // //     var newTask = {title: $scope.taskTitle};
  // //     $http.post('api/user', newUser).success(function(data){
  // //         $scope.refresh();
  // //         $scope.taskTitle = '';
  // //     }).error(function(data){
  // //         alert(data.error);
  // //     });
  // // }
  $scope.user = {};
  $scope.user.message = undefined;
  $scope.user.login = undefined;
  $scope.user.password = undefined;
  $scope.user.email = undefined;
  console.log($scope.user);

  $scope.addUser = function (){
  console.log("posting data....");
  $http({
  method: 'POST',
  url: '/user/create',
  headers: {'Content-Type': 'application/x-www-form-urlencoded'},
  data: JSON.stringify($scope.user)
  }).success(function (data) {
  $route.reload();
  console.log(data);
  $scope.user.message = data.status;
  $scope.user.message = "Success! You've Successfully Joined!";

  });
  }

  $scope.users = [];
  $http.get('/user/get_users').success(function($data){
    $scope.users=$data;
    console.log($scope.users);
    console.log($scope.users[0]['email']);
    $scope.currentPage = 0;
    $scope.pageSize = 10;
    $scope.data = $scope.users;
    console.log($scope.data.length);
    console.log($scope.data);
    $scope.numberOfPages=function(){
      return Math.ceil($scope.data.length/$scope.pageSize);
    }
  });




});

app.filter('startFrom', function() {
    return function(input, start) {
        start = +start; //parse to int
        return input.slice(start);
    }
});

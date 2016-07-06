<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<base href="/">
<head>
	<meta charset="utf-8">
	<title>Cool Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen"/>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.9/angular-route.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/1.3.3/ui-bootstrap.min.js"></script>
	<script src="js/app.js"></script>
</head>
    <body ng-app="coolApp">
			<div class="collapse navbar-collapse" ng-controller="HeaderController">
			    <ul class="nav navbar-nav">
			        <li ng-class="{ active: isActive('/home_view')}"><a href="/home_view">Home</a></li>
			        <li ng-class="{ active: isActive('/about_view')}"><a href="/about_view">About</a></li>
			        <li ng-class="{ active: isActive('/db_view')}"><a href="/db_view">Database</a></li>
							<li ng-class="{ active: isActive('/new_user')}"><a href="/new_user">New User</a></li>
			    </ul>
			</div>
      <div id="coolDiv" ng-view>
      </div>


    </body>
</html>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cool Page</title>
</head>

    <body data-ng-controller="TodoCtrl">

      <div id="coolDiv" ng-view>
      </div>

        <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0-rc.5/angular-material.min.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>

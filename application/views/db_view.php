<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
</head>
<body>

<div id="container">
<a href="home">Home</a>
<a href="about">About</a>
<h1>Welcome to Database</h1>
<?php

  //print_r($results); // Print r will return what's in an array in a readable format


  foreach($results as $row){
    echo $row->id;
    echo $row->name;
    echo "<br />";

  }

 ?>

</body>
</html>

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

<h1>Sup ya'll?</h1>

	<h2>Add</h2>
	<p>
		<?php echo $val1. " + " .$val2. " = " .$addTotal; ?>
	</p>


	<h2>Subtract</h2>
	<p>
		<?php echo $val1. " - " .$val2. " = " .$subTotal ?>
	</p>



</body>
</html>

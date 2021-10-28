<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- To students: How can you pass the title from the controller dynamically? -->
	<title><?php echo $appName;?></title>
</head>
<body>

<div id="container">
	<h1><?php echo "Welcome to the " .$appName. " Portal";?></h1>

	<!-- To students: All of the content below will need to be deleted. This is just to help you out as you begin -->
	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		
	</div>	
	
</div>

</body>
</html>
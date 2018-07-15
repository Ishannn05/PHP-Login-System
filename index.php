<?php 
//Allow the config
define('__CONFIG__',true);
//Require a Config
require_once "inc/config.php";
forcedashboard();?>
<!DOCTYPE html>
<html>

<head>

	<title>Sign In</title>
	<?php require_once "inc/header.php"; ?>
	<meta name="description" content="Sign in for fuel monitoring system">
	<meta name="keyword" content="Fuel,Money,Save,Monitoring">
	<meta name="author" content="Ishan">
</head>

<body>
	<?php 
	 echo "Hello World! </br> Today is :";
	 echo date("Y m d");
	 ?>
 <a href="login.php"><button type="button">LogIn</button></a>
 <a href="signup.php"><button type="button">Register</button></a>
 </body>
</html>
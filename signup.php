<?php 
//Allow the config
define('__CONFIG__',true);
//Require a Config
require_once "inc/config.php";
forcedashboard();?>
<!DOCTYPE html>
<html>

<head>

	<title>Sign Up</title>
	<?php require_once "inc/header.php"; ?>
	<link rel="stylesheet" type="text/css" href="Assets/css/basic.css">
	<meta name="description" content="Sign Up for fuel monitoring system">
	<meta name="keyword" content="Fuel,Money,Save,Monitoring">
	<meta name="author" content="Ishan">
</head>

<body>
	<table border="3" frame="void" width="100%" id="banner">
		<tr height="150"> 
		</tr>
	</table>
	<h1 class="heading" align="center" ><em>Sign Up</em></h1>
	<form method="post" id="formsignup" class="align">
		<table class="format" >
		<tr><td id="x">Name:<input id="name" name="name" type="text" placeholder="Full Name" required="required" onblur="validate1();"/></td></tr>
		<tr><td id="y">Your Email:<input id="email" name="email" type="email" placeholder="Email address" required="required" onblur="validate2();"/></td></tr>
		<tr><td id="z">Password:<input id="pass1" name="password" type="password" placeholder="Your Password" required="required" onblur="validate3();"/></td></tr>
		<tr><td id="w">Confirm Password:<input id="pass2" name="cpassword" type="password" placeholder="Re-enter password" required="required" onblur="validate4();"/></td></tr> 
		</table>
		<input id="submit" type="submit" align="center" name="submitButton" value="">
	</form>
 </body>




</html>
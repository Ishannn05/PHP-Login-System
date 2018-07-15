<?php 
//Allow the config
define('__CONFIG__',true);
//Require a Config
require_once "inc/config.php";
echo $_SESSION['user_id']." is your user id.";
exit;
?>
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
	<table border="3" frame="void" width="100%" id="banner">
		<tr height="150"> 
		</tr>
	</table>
	<h1 class="heading" align="center" ><em>Sign In</em></h1>
	<form method="post" id="formsignin" class="align">
		<table class="format" >
		<tr><td id="y">Your Email:<input id="email" name="email" type="email" placeholder="Email address" onblur="validate2();"/></td></tr>
		<tr><td id="z">Password:<input id="pass1" name="password" type="password" placeholder="Your Password" onblur="validate3();"/></td></tr>
		</table>
		<input id="submit" type="submit" align="center" value="">
	</form>
	<div id="error"></div>
 </body>




</html>
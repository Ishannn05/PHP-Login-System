<?php 
//Allow the config
define('__CONFIG__',true);
//Require a Config
require_once "inc/config.php";
forcelogin();
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
	<h1 align="center" ><em>You are signed in as user and your user id is :<?php echo " ". $_SESSION['user_id'].".";?></em></h1>
 </body>




</html>
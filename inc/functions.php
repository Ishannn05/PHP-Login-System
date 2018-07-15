<?php 
//Force the user to log in or be logged in
function forcelogin()
{
if(isset($_SESSION['user_id']))
{
	//User is allowed here
}
else
{
	//header("Location : loginsystemtest/login.php");
	header('Location: /loginsystemtest/login.php');
	exit;
	//user is not allowed here
}
}
//Force dashboard
function forcedashboard()
{
if(isset($_SESSION['user_id']))
{
	//User is allowed here
	header('Location: /loginsystemtest/dash.php');
	exit;
}
else
{
	//user is not allowed here
}
}?>
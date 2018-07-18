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
}
function findUser($con, $email, $return_assoc = false)
{
	$email = (string) Filter::String( $_POST['email'] );
    $find_user = $con->prepare("SELECT user_id, password FROM users WHERE email = LOWER(:email) LIMIT 1");
    $find_user -> bindParam(':email',$email, PDO::PARAM_STR);
	$find_user -> execute();

	if($return_assoc)
	{
		return $find_user->fetch(PDO::FETCH_ASSOC);
	}
    
    $user_found = (boolean) $find_user->rowCount();

    return $user_found;
}
?>
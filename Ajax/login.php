<?php 
	// Allow the config
	define('__CONFIG__', true);

	// Require the config
	require_once "../inc/config.php"; 

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Always return JSON format
		//header('Content-Type: application/json');

		$return = [];
		$email = Filter::String( $_POST['email'] ); //To protect database from SQL injection
		$password = $_POST['password'];
		// Make sure the user does not exist. 
		$user_found = findUser($con, $email, true);

		if($user_found)
		{
			//User exists, try and sign them in
				$user_id = (int)$user_found['user_id'];
				$hash = $user_found['password'];

				if(password_verify($password,$hash))
				{
					$return['redirect']="dash.php";//user is signed in
					$_SESSION['user_id']=$user_id;
				}
				else
				{
					//Invalid user email/password.
					$return['error']="Invalid user email/password.";
				}		
		}
		else
		{ //They need to create an account
			$return['error']="You do not have an account. <a href='/register.php'>Create one now?</a>";
		}

		echo json_encode($return, JSON_PRETTY_PRINT); exit;
	} else {
		// Die. Kill the script. Redirect the user. Do something regardless.
		exit('Invalid URL');
	}
?>
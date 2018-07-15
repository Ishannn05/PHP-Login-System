<?php 

	// Allow the config
	define('__CONFIG__', true);

	// Require the config
	require_once "../inc/config.php"; 

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Always return JSON format
		header('Content-Type: application/json');

		$return = [];
		$email = Filter::String( $_POST['email'] ); //To protect database from SQL injection
		$password = $_POST['password'];
		// Make sure the user does not exist. 
		$find_user = $con->prepare("SELECT user_id, password FROM users WHERE email = LOWER(:email) LIMIT 1");
		$find_user -> bindParam(':email',$email, PDO::PARAM_STR);
		$find_user -> execute();

		if($find_user->rowCount() == 1)
		{
			//User exists, try and sign them in
				$user = $find_user->fetch(PDO::FETCH_ASSOC);
				$user_id = (int)$user['user_id'];
				$hash=$user['password'];

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
			$return['error']='You already have an account';			
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
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

		// Make sure the user does not exist. 
		$user_found = findUser($con, $email);

		if($user_found)
		{
			//User exists
			//Try to login the user
			$return['error']='You already have an account';			
			$return['is_logged_in']=false;
		}
		else
		{ 	$password = password_hash($_POST['password'],PASSWORD_DEFAULT);
			$add_user = $con->prepare("INSERT INTO users(email,password) VALUES(LOWER(:email),:password)");
			$add_user -> bindParam(':email',$email, PDO::PARAM_STR);
			$add_user -> bindParam(':password',$password, PDO::PARAM_STR);
			$add_user ->execute();

			$user_id = $con->lastInsertId();
			$_SESSION['user_id']=(int)$user_id;

			$return['redirect']="dash.php";//user is signed in
			$return['is_logged_in']=true;
			//User Doesn't exist, add them now.
		}
		echo json_encode($return, JSON_PRETTY_PRINT); exit;
	} else {
		// Die. Kill the script. Redirect the user. Do something regardless.
		exit('Invalid URL');
	}
?>
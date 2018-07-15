<?php if(!defined('__CONFIG__'))
		{//If there is no constant defined called CONFIG, do not load this file.
			exit('You do not have a config file.');
		}
	//Our config is below
	//Allow Error message
	
	//Sessions are always turned on
	if(!isset($_SESSION))
	{
		session_start();
	}
	/*error_reporting(-1);
	ini_set('display_errors','ON');
	*/
	//Include the DB.php file
	include_once "classes/db.php";
	include_once "classes/filter.php";
	include_once "functions.php";
	$con = DB::getConnection();
?>
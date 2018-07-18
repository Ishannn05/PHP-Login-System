<?php 
	//Allow the config
	define('__CONFIG__',true);
	
	//Require a Config
	require_once "inc/config.php";
	
	forcelogin();
	
	$user_id = $_SESSION['user_id'];
	$getUserInfo = $con->prepare('SELECT email, reg_time FROM users WHERE user_id=:user_id LIMIT 1');
	$getUserInfo -> bindParam(':user_id',$user_id,PDO::PARAM_INT);
	$getUserInfo -> execute();
    echo $user_id;
	if($getUserInfo -> rowCount() == 1) //rowCount() returns the number of rows affected by the latest SQL statement executed.
		{
			//User Exists
			$user = $getUserInfo -> fetch(PDO::FETCH_ASSOC);
		}
	else
		{
			//User is not signed in
			header('Location: /loginsystemtest/logout.php');
			exit;
		}

?>


<!DOCTYPE html>
<html>

	<head>

		<title>Dashboard</title>
		<?php require_once "inc/header.php"; ?>
		<link rel="stylesheet" href="Assets/css/Website Template.css" type="text/css"> 
		<meta name="description" content="Dashboard">
		<meta name="keyword" content="Fuel,Money,Save,Monitoring">
		<meta name="author" content="Ishan">
	
	</head>

	<body>
	
		<table frame="void" width="100%" height="35%" class="banner">
    		<tr> 
    			<td>
    				<div style="height:60px;"><div id="td1" class="header">Taking bold initiatives.</div></div>
			 		<div style="height:60px;"><div id="td2" class="header">Reducing carbon footprint on environment</div><div>
		 		</td>
			</tr>
			
			<tr> 
			 	<td style="margin-bottom:0px; position:relative; width:100%; background-color:rgba(123, 148, 181,0.5); height: 6%;" >
			 		<marquee behavior="scroll" direction="left">Welcome to E-Funnel online petrol monitoring portal. <?php echo " Today is ";echo date("d-m-Y");?></marquee>
			 	</td> 
	    	</tr>
  		</table>

 		<table frame="void" style=" background-color:#00647c; width: 100%; height: 5%;" >
	    	<tr> 
			 	<td>
			 		<div><a href="/loginsystemtest/logout.php" target="_self" class="nav">Log Out</a></div>
			 	</td> 
			 	
			 	<td>
			 		<div><a href="contact.html" target="_self" class="nav">Contact</a></div>
			 	</td> 
	    	</tr>
   		</table> 
   
   		<table frame="void" style="margin-bottom:4px; width:100%; height:57%; ">
	    	<tr>            
       	    	<td width="100%"><h3>INFORMATION WILL BE DISPLAYED HERE.</h3></td> <!-- ALL THE INFORMATION PERTAINING TO THE USER'S DEVICE SHOULD BE DISPLAYED IN THIS TABLE DATA ELEMENT--> 
	    	</tr>
   		</table>
   
   		<div class="footer" style="text-align:left; font-size:20px; padding-top:5px" width="100%">
			<a href="" name="Terms" target="_blank" class="footer" style="display:inline; font-size:20px;">Terms</a>&nbsp|
			<a href="" name="Privacy Policy" target="_blank" class="footer" style="display:inline; font-size:20px; ">Privacy Policy</a>
   		</div>
	 </body>
</html>
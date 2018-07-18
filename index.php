<?php 
//Allow the config
define('__CONFIG__',true);

//Require a Config
require_once "inc/config.php";

forcedashboard();

?>

<!DOCTYPE html>
<html>

<head>

	<?php $flag= 'w'; require_once "inc/header.php"; ?>
	<title>Online Portal | E-Funnel </title> 
	<link rel="stylesheet" href="Assets/css/Website Template.css" type="text/css"> 
	<meta name="description" content="Sign in for fuel monitoring system">
	<meta name="keyword" content="Fuel,Money,Save,Monitoring">
	<meta name="author" content="Ishan">

</head>

<body > 

  	<table frame="void" width="100%" height="35%" class="banner" style="height: 30%;">
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
			 	<div><a href="login.php" target="_self" class="nav">Sign In</a></div>
			</td>

			<td>
			 	<div><a href="signup.php" target="_self" class="nav">Sign Up</a></div>
			</td> 
			 
			<td>
			 	<div><a href="contact.html" target="_self" class="nav">Contact</a></div>
			</td> 
	    </tr>
   	</table> 

   	<table frame="void" style="width:100%; height:69%; ">
	    <tr>   
	        <td width="100%"><div id="about">In the age of rapidly increasing fuel demands, declining environmental sustainability is a great issue. Therefore, reduction of carbon footprint should take highest priority. <b>E-Funnel</b> is an IOT based comprehensive vehicle fuel monitoring system. The project is aimed at reducing the environmental footprint of petroleum by managing the fuel demands of heavy machineries. This has a long range of applications, starting from automobiles to generators and DG sets. Such wide spread application of our device will facilitate environmental sustainability.</div></td> 
	    </tr>
   	</table>

   	<div class="footer" style="text-align:left; font-size:20px; padding-top:5px" width="100%">
		<a href="" name="Terms" target="_blank" class="footer" style="display:inline; font-size:20px;">Terms</a>&nbsp|
		<a href="" name="Privacy Policy" target="_blank" class="footer" style="display:inline; font-size:20px; ">Privacy Policy</a>
   	</div>

</body>
</html>
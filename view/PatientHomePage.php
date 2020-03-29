<?php
	//session starts
	session_start();
	if(isset($_SESSION['uid']))
	{
		if (time()-$_SESSION['last_time']>1800) //30 min inactive thakle logout automatic
		{
			header("Location:../control/LogoutControl.php");
		}
		else
		{
			$_SESSION['last_time']=time();
		}
	}
	else
	{
		header("Location:Login.php");
	}
	//session ends
?>
<html>
	<head>
		<title>
			Patient Home Page
		</title>
		<link rel="stylesheet"type="text/css"href="CSS/doctorcss.css">
		<link rel="stylesheet"type="text/css"href="CSS/doctorhomepage.css">
	</head>
	<body>
		<button class="button"onclick="window.location='../control/LogoutControl.php'">Logout</button>
		<button class="button"onclick="window.location='PatientNotification.php'">Noification</button>
		<div class="div1">
			<h2>Home Page</h2>
		</div>
		<label class="l1">Welcome Patient :<?php echo $_SESSION['uid'] ?><label>
		<div class="sidebar">                   <!--https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_sidenav_dropdown-->
			<a href="PatientProfile.php">Profile</a>
			<a href="PatientTakeAppointment.php">Take Appoinment</a>
			<a href="PatientPrescription.php">Prescription</a>
		</div>
	</body>
</html>
<?php
	include 'CSS/bootstrap.php';
	include '../control/DoctorsControls.php';
	//session starts
	session_start();
	if(isset($_SESSION['did']))
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
	$id=0;
	$patients=patientlist($_SESSION['did']);
?>

<html>
	<head>
		<title>
			Doctor Patient Waiting
		</title>
		<link rel="stylesheet"type="text/css"href="CSS/doctorcss.css">
		<script>
			function prescrive()
			{
				document.getElementById('bg-model').style.display='flex';
			}
		</script>
	</head>
	<body>
		<button class="button"onclick="window.location='../control/LogoutControl.php'">Logout</button>
		<button type="button"name="home"class="button"onclick="window.location='DoctorHomePage.php'">Home Page</button>
		<div class="div1">
			<h2>Patient Request</h2>
		</div>
		<!--popup page starts-->
		<div id="bg-model"class="bg-model">
			<div class="model-content">
				<div >
					<button type="button"name="close"class="close"onclick="document.getElementById('bg-model').style.display='none'";>+</button>
				</div>
				<form action=""method="post">
					<label class="content">Patient Name :</label><br>
					<label class="content">Gender :</label><br><br>
					<label class="content">Symptom :</label><br>
					<input id="content"type="text"placeholder="Symptom"name="symtom"><br>
					<label class="content">Diseases :</label><br>
					<select id="content"name="diseases">
						<option>High Fever</option>
						<option>High Fever</option>
					</select><br>
					<label class="content">Test :</label><br>
					<select id="content"name="test">
						<option>High Fever</option>
						<option>High Fever</option>
					</select><br>
					<label class="content">Test Clinic Name :</label><br>
					<select id="content"name="cname">
						<option>High Fever</option>
						<option>High Fever</option>
					</select><br>
					<label class="content">Report :</label><br>
					<input type="text"name="report"id="content"placeholder="write report here"><br>
					<label class="content">Medicines :</label><br>
					<textarea type="text"name="medicines"id="content"placeholder="write medicines here"></textarea><br><br>
					<button type="button"name="prescrive"class="prescrive"onclick="window.location=''">Prescrive</button>
				</form>
			</div>
		</div>
		<!--popup page ends-->
		<!--search bar and table statrs-->
		<div class="search">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<button class="btn btn-outline-primary" type="button">Search</button>
				</div>
				<input type="text" class="form-control" placeholder="search with name" >
			</div>
		</div>
		<div class="table">
			<table class="table table-hover table-bordered ">
			  <thead>
			    <tr class="thead-dark">
			      <th scope="col">SI#</th>
			      <th scope="col">Patient id</th>
			      <th scope="col">Patient name</th>
			      <th scope="col">Clinic id</th>
			      <th scope="col">Clinic name</th>
			      <th scope="col">Time</th>
			      <th scope="col">Date</th>
			      <th scope="col">Divission</th>
			      <th scope="col">District</th>
			      <th scope="col">Thana</th>
			      <th scope="col">Actions</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php foreach ($patients as $value) { $id++;?>
			  		<tr>
			  			<td><?php echo $id ?></td>
			  			<td><?php echo $value['pid'] ?></td>
			  			<td><?php echo $value['pname'] ?></td>
			  			<td><?php echo $value['cid'] ?></td>
			  			<td><?php echo $value['cname'] ?></td>
			  			<td><?php echo $value['time'] ?></td>
			  			<td><?php echo $value['date'] ?></td>
			  			<td><?php echo $value['divission'] ?></td>
			  			<td><?php echo $value['district'] ?></td>
			  			<td><?php echo $value['thana'] ?></td>
				      	<td>
					      	<button type="button" class="btn btn-danger float-right"style="width: 78px" onclick="location.href='../control/DoctorsControls.php?wpid=<?php echo $value['id'] ?>'">Delete</button>
					      	<button type="button" class="btn btn-primary float-right"style="width: 78px"onclick="prescrive()">Prescrive</button>
				      	</td>
				    </tr>
			  	<?php } ?>
				    
			  </tbody>
			</table>
		</div>
		<!--search bar and table ends-->


	</body>
</html>
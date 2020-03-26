<?php
	include 'CSS/bootstrap.php';
	session_start();
	if(!isset($_SESSION['uid']))
	{
		header("Location:Login.php");
	}
?>
<html>
	<head>
		<title>
			Admin Doctor Request
		</title>
		<link rel="stylesheet"type="text/css"href="CSS/admincliniclist.css">
	</head>
	<body>
		<div class="div1">
			<label class="h2">Doctor Request List</label>
			<button class="adminbtn"onclick="window.location='../control/LogoutControl.php'">Logout</button>
			<button type="button"class="adminbtn"onclick="window.location='AdminHomePage.php'">Home</button>
		</div>
		<div class="table">
			<table class="table table-hover table-bordered ">
			  <thead>
			    <tr class="thead-dark">
			      <th scope="col">SI#</th>
			      <th scope="col">Userid</th>
			      <th scope="col">Name</th>
			      <th scope="col">Gender</th>
			      <th scope="col">Phone no.</th>
			      <th scope="col">Email</th>
			      <th scope="col">DOB</th>
			      <th scope="col">Gender</th>
			      <th scope="col">Divission</th>
			      <th scope="col">District</th>
			      <th scope="col">Thana</th>
			      <th scope="col">Specialty</th>
			      <th scope="col">Degree</th>
			      <th scope="col">BMDC no.</th>
			      <th scope="col">Actions</th>

			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>@fat</td>
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>@fat</td>
			      <td>Jacob</td>
			      <td>Thorntonnjbvbhvvvhv</td>
			      <td>@fat</td>
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>@fat</td>
			      <td>Jacob</td>
			      <td>
				      <button type="button" class="btn btn-danger float-right"style="width: 70px">Delete</button>
				      <button type="button" class="btn btn-primary float-right"style="width: 70px">Accept</button>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">2</th>
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>@fat</td>
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>@fat</td>
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>@fat</td>
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>@fat</td>
			      <td>@fat</td>
			      <td>
				      <button type="button" class="btn btn-danger float-right"style="width: 70px">Delete</button>
				      <button type="button" class="btn btn-primary float-right"style="width: 70px">Accept</button>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">3</th>
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>@fat</td>
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>@fat</td>
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>@fat</td>
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>@fat</td>
			      <td>Jacob</td>
			      <td>
				      <button type="button" class="btn btn-danger float-right"style="width: 70px">Delete</button>
				      <button type="button" class="btn btn-primary float-right"style="width: 70px">Accept</button>
			      </td>
			    </tr>
			  </tbody>
			</table>
		</div>
	</body>
</html>
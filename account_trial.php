<!DOCTYPE html>
<html>
<head>
	<title>User account</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>


<?php

session_start();
$servername="localhost";
$username="root";
$password="";
$database="check";

$conn= mysqli_connect($servername,$username,$password,$database);


$user = $_SESSION['username'] ;
$sql = "SELECT * FROM registration WHERE username = '$user'" ;

$query = mysqli_query($conn,$sql );
$row=mysqli_fetch_assoc($query);
$id=$row["id"];

$fullname=$row["fullname"];

$email= $row['email'];
$mobile=$row['number'];
$birth=$row['birth'];
$blood=$row['blood'];
$covid=$row['covid'];
$filename=$row['file'];
$ldate=$row['ldate'];
$gender=$row['gender'];
$address=$row['address'];
$occupation=$row['occupation'];

?>


<div class="row">
	<div class="col-4">
		<div class="row">
				<div class="card-body">
					<img src="profile.jpg" class="rounded-circle" width="150" style="margin-left: 20px;">
					<div><h3>Mayuri Ghangare</h3></div>
				</div>
		</div>

		<div class="row">
			<a href='view.php?id=$id' style="margin-left: 30px;"><button class='btn btn-success'>View Form</button></a>
		</div>

		<div class="row">
			<a href='view.php?id=$id' style="margin-left: 10px;"><button class='btn btn-success'>Edit Form</button></a>
		</div>
	</div>

	<div class="col-8">
		<div class="row">
			<h2>ABOUT</h2>
		</div>
			<div class="row">
					<div class="col-md-3">
							<h5>Full Name</h5>
				    </div>
						

					<div class="col-md-9 text-secondary">
							Mayuri Ghangare
					</div>
						
		    </div>
	</div>



</div>

</body>
</html>
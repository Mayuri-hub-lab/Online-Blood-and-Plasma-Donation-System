
<!DOCTYPE html>
<html>
<head>
	<title>Donar account</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="profile.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background: linear-gradient(135deg,#71b7e6,#9b59b6);">


<?php

session_start();
error_reporting(0);
$servername="localhost";
$username="root";
$password= "";
$database="check";

$conn= mysqli_connect($servername,$username,$password,$database);

$user	= $_SESSION['username'];

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

<div class="row" style="margin-top: 0px;">
	<div class="col-9" style="margin-left: 25px;font-size: 30px; font-weight: bold;">Welcome in Online Blood and Plasma Donation System</div>
	<div class="col-1" style="margin-left:175px; ; font-size: 25px;" ><span class="fa fa-sign-out"><a href="logout.php" style="color: black;font-weight: bold;">Logout</a></span></div>
	
</div>

<br>



<div class="row">
			<div class="col-3" style="margin-left: 30px;">
				<div class="card text-center sidebar">
					<div class="card-body">
						<img src="profile.jpg" class="rounded-circle" width="150">
						<div class="mt-3">
							<h3 style="color: black;"><?php echo $_SESSION['username']; ?></h3> <br><br>
							<?php
                              echo "<a href='view.php?id=$id'><button class='btn btn-primary'>View Form</button></a>"; 
                              echo "<br>";

                              
                              echo "<a href='useredit.php?id=$id'><button class='btn btn-primary'>Edit Form</button></a>";
                              // echo "<br>";

                              // echo "<a href='view.php?id=$id'><button class='btn btn-primary'>Chat Box</button></a>"; 
                              

                            ?>


						</div>
					</div>
				</div>

			</div>
			<div class="col-8 " style="margin-left: 10px;">
				<div class="card mb-3 content">
					<h1 class="m-3 pt-3">About</h1>
					<div class="card-body">
						<div class="row">
							<div class="col-md-3">
							    <h5>Full Name</h5>
						    </div>
						

						<div class="col-md-9 text-secondary">
							<h5><?php echo $fullname;?></h5>
						</div>
						</div>
					</div>

					<hr>

					<div class="card-body">
						<div class="row">
							<div class="col-md-3">
							    <h5>Email</h5>
							</div>
						

						<div class="col-md-9 text-secondary">
							<h5><?php echo $email;?></h5>
						</div>
						</div>
					</div>
					<hr>

					<div class="card-body">
						<div class="row">
							<div class="col-md-3">
							    <h5>Phone Number</h5>
							</div>
						

						<div class="col-md-9 text-secondary">
							<h5><?php echo $mobile;?></h5>
						</div>
						</div>
					</div>
					<hr>

					<div class="card-body">
						<div class="row">
							<div class="col-md-3">
							    <h5>Last Donation Date</h5>
							</div>
						

						<div class="col-md-9 text-secondary">
							<h5><?php echo $ldate;?></h5>
						</div>
						</div>
					</div>
					<hr>

					<div class="card-body">
						<div class="row">
							<div class="col-md-3">
							    <h5>Adress</h5>
							</div>
						

						<div class="col-md-9 text-secondary">
							<h5><?php echo $address;?></h5>
						</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
	</div>

    

	
</body>
</html>



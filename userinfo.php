


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<!-- <?php

$fullname=$_POST['fullname'];

?> -->

<?php 

session_start();  
// header('location:login1.html');
error_reporting(0);
$fullname=$_POST['fullname'];
$user= $_POST['user'];
$email= $_POST['email'];
$mobile=$_POST['mobile'];
$pass=$_POST['spass'];
// $cpass=$_POST['cpass'];
$birth=$_POST['dob'];
$blood=$_POST['blood'];
$covid=$_POST['covid'];
$filename=$_FILES['file'];
// print_r($filename);

$imagename = $filename['name'];
$imagepath = $filename['tmp_name'];
$imageerror = $filename['error'];

if($imageerror == 0){

	$destination = 'upload/'.$imagename;
	// echo $destination;
	move_uploaded_file($imagepath,$destination);

}

$ldate=$_POST['ldate'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$occupation=$_POST['occupation'];

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'check');

$s="select * from registration where username= '$user'";

$result=mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{   
	$_SESSION['status']="username already taken";
	$_SESSION['status_code']="info";
  
	// header('Location:registrationpage.php');
}
else{

    $_SESSION['status']="Registered successfully";
	$_SESSION['status_code']="success";
	header('Location:index.php');
	
}




$query="insert into registration (fullname,username,email,number, pass,birth,blood,covid,file,ldate,gender,address,occupation) values ('$fullname','$user','$email','$mobile', '$pass', '$birth','$blood','$covid', '$destination', '$ldate','$gender','$address','$occupation')";

$i=mysqli_query($con,$query);

// echo $i;

mysqli_close($con);


 ?>


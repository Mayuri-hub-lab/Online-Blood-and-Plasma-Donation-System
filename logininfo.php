<?php

session_start();
error_reporting(0);

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'check');

$user=$_POST['user'];
$pass=$_POST['pass'];


$s="select * from registration where username= '$user' && pass='$pass' ";


$result=mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{ 
	$_SESSION['username'] = $user;
	header('location:account.php');
}

else{
	
	header('location:login1.html');
}


?>
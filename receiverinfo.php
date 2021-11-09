<?php 

$fullname=$_POST['fullname'];
$user= $_POST['user'];
$email= $_POST['email'];
$mobile=$_POST['mobile'];
$pass=$_POST['spass'];
// $cpass=$_POST['conpass'];
$birth=$_POST['dob'];
$blood=$_POST['blood'];
$need=$_POST['need'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$occupation=$_POST['occupation'];




$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'check');



if($con)
{
	header('Location:index.php');
}

else
{
	echo "connection not establish";
}


$query="insert into receiver(fullname,username,email,mobile,pass,birth,blood,need,gender,address,occupation) values ('$fullname','$user','$email','$mobile','$pass','$birth','$blood','$need','$gender','$address','$occupation')";

$i=mysqli_query($con,$query);

echo $i;

mysqli_close($con);


 ?>
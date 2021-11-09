<?php 

// print_r($_POST);

    $id = $_POST['id'];
	$fullname=$_POST['fullname'];
    $user=$_POST['username '];
    $email= $_POST['email'];
    $mobile=$_POST['mobile'];
    $birth=$_POST['dob'];
    $blood=$_POST['blood'];
    $covid=$_POST['covid'];
    $ldate=$_POST['ldate'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $occupation=$_POST['occupation'];

	$servername="localhost";
	$username="root";
	$password="";
	$database="check";

	$conn= mysqli_connect($servername,$username,$password,$database);


    $sql = "UPDATE `registration` SET `fullname`='$fullname',`email`='$email',`number`='$mobile',`birth`='$birth',`blood`='$blood',`covid`='$covid',`ldate`='$ldate',`gender`='$gender',`address`='$address',`occupation`='$occupation' WHERE id= $id";

    echo $sql;

    $update= mysqli_query($conn,$sql);

    if($update)
    {
    	header("Location:account.php");
    }


?>




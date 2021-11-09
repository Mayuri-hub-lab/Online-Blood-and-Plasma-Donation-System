


<!-- php

$user='root';
$pass='';
$db='blood bank';

$db = new mysqli('localhost',$user,$pass,$db) or die("unable to corect");

echo "data inserted successfully";
 -->


<?php

$con=mysqli_connect('localhost','root','');

if(!$con)
{
	echo'Not connected to server!';
}

if(!mysqli_select_db($con,'miniproject'))
{
	echo'Database is not selected';
}

$fullname= $_POST['fullname'];
$username =$_POST['username'];
$email= $_POST['email'];
$phonenumber= $_POST['phonenumber'];
$setpassword= $_POST['setpassword'];
$confirmpassword= $_POST['confirmpassword'];
$dateofbirth= $_POST['dateofbirth'];
$bloodgroup= $_POST['bloodgroup'];
$selectdisease= $_POST['selectdisease'];
$whichdisease=$_POST['whichdisease'];
$selectcovid=$_POST['selectcovid'];
$uploadreport=$_FILES['uploadreport']['name'];
$lastdate= $_POST['lastdate'];
$slectallergies=$_POST['slectallergies'];
$occupation=$_POST['occupation'];
$address=$_POST['address'];
$gender=$_POST['gender'];



$sql= "INSERT INTO registration (fullname,username,email,mobile,setpassword,confirmpassword,dob,bloodgroup,selectdisease,whichdisease,covid,report,lastdate,allergies,occupation,address,gender) VALUES ('$fullname','$username','$email','$phonenumber','$setpassword','$confirmpassword','$dateofbirth',$bloodgroup,$selectdisease,$whichdisease,$selectcovid,$uploadreport,$lastdate,$slectallergies,$occupation,$address,$gender)";

if(!mysqli_query($con,$sql))
{
	echo "Not Inserted";
}

else
{
	echo "Data Inserted";
}


header("refresh:5;url=registration1.php")

?>









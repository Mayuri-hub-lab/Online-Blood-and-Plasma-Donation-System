
<?php


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
$uploadreport=$_POST['uploadreport']['name'];
// $fn=$_FILES['uploadreport']['name'];
// $tmp=$_FILES['uploadreport']['tmp_name'];
// move_uploaded_file($tmp, "Covid_report/".$fn);
$lastdate= $_POST['lastdate'];
$slectallergies=$_POST['slectallergies'];
$occupation=$_POST['occupation'];
$address=$_POST['address'];
$gender=$_POST['gender'];



$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'miniproject');

if($con)
{
	echo "successfull";
}

else
{
	echo "connection not establish";
}

$query = "insert into registration(fullname,username,email,phonenumber,setpassword,confirmpassword,dateofbirth,bloodgroup,selectdisease,whichdisease,selectcovid,uploadrepor,lastdate,slectallergies,occupation,address,gender) values ('$fullname','$username','$email','$phonenumber','$setpassword','$confirmpassword','$dateofbirth','$bloodgroup','$selectdisease','$whichdisease','$selectcovid','$uploadreport',$lastdate','$slectallergies','$occupation','$address','$gender')";

$i=mysqli_query($con,$query);

echo $i;

mysqli_close($con);



?>










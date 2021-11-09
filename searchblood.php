<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>


<?php


$servername="localhost";
$username="root";
$password= "";
$database="check";

$conn= mysqli_connect($servername,$username,$password,$database);



$sql = "SELECT * FROM registration " ;

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

</body>
</html>



    <table> 
      <tr> 

        <th> Name </th>
        <th> Blood Group </th>
        <th> Location </th>
        <th> contact </th>

       </tr>


    </table>
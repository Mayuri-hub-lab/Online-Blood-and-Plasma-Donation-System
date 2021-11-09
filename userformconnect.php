<?php


$name= $_POST['username'];
$pass= $_POST['Password'];

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'check');



$query="insert into login (username,password) values('$name','$pass')";

$i=mysqli_query($con,$query);

echo $i;

mysqli_close($con);

?>


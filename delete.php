<?PHP

$conn= mysqli_connect("localhost","root","","check");
if($conn-> connect_error)
 {
	die("Connection failed:". $conn-> connect_error);
 }
error_reporting(0);

$id=$_GET['id'];

$query= "delete from registration where  id='$id' ";

$data=mysqli_query($conn,$query);

if($data)
    {
    	header("Location:fetchdata.php");
    }


// else
// {
// 	echo "<font color='red'> Failed to delete record";
// }

?>
<?php

include("userinfo.php");
error_reporting(0);
$query = "select * from registration";
$data = mysql_query($con,$query);
$total = mysql_num_rows($data);

if($total!=0)
{
	echo "Table has records";
}

else
{
	echo "No records found";
}



?>
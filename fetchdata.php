<!DOCTYPE html>
<html>
<head>
	<title>Donar Data</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
      
        table{
        text-align:left;
        border: 1px solid black;
        border-collapse:collapse;
        width:100%;
    }
       th,td{
       padding:15px;
       text-align:lrft;
       }
      th{
       border: 1px solid black;
        }
      td{
       border-right:1px dotted;
       border-bottom:1px dotted;
        }

		
		
	</style>
</head>
<body>
   <h1 style="text-align: center;font-size: 35px; "><u>Donar Database</u> </h1>
	<table> 
		<tr>
			<th>Id </th>
			<th>Full Name</th>
			<th>Username</th> 
			<th>Email</th>
			<th>Phone Number</th>
			<th>DOB</th>
			<th>Blood Group</th>
			<th>Covid Patient</th>
			<th>Report</th>
			<th>Last Donated</th>
			<th>Gender</th>
			<th>Adress</th>
			<th>Occupation</th>
			<th colspan="2" align="center">Operations</th>
		</tr>

		<?php

		$conn= mysqli_connect("localhost","root","","check");
		if($conn-> connect_error) {
			die("Connection failed:". $conn-> connect_error);
		}

		$sql="select id, fullname, username, email , number , birth , blood , covid ,file ,ldate ,gender , address , occupation from registration";
		$result= $conn-> query($sql);


		if($result-> num_rows > 0){
			while ($row =$result-> fetch_assoc()){

		       $id= $row['id'];

		       echo '<tr>';
		       echo '<td>'.$row['id'].'</td>';
		       echo '<td>'.$row['fullname'].'</td>';
		       echo '<td>'.$row['username'].'</td>';
		       echo '<td>'.$row['email'].'</td>';
		       echo '<td>'.$row['number'].'</td>';
		       echo '<td>'.$row['birth'].'</td>';
		       echo '<td>'.$row['blood'].'</td>';
		       echo '<td>'.$row['covid'].'</td>';
		       echo '<td>'.$row['file'].'</td>';
		       echo '<td>'.$row['ldate'].'</td>';
		       echo '<td>'.$row['gender'].'</td>';
		       echo '<td>'.$row['address'].'</td>';
		       echo '<td>'.$row['occupation'].'</td>';
		       echo "<td><a href='addedit.php?id=$id'<button class='btn btn-success'>Edit</button></td>";
		       echo "<td><a href='delete.php?id=$id' <button type='button' class='btn btn-danger'>Delete</button></td>";

		       echo '</tr>';
			}

			echo "</table>";
		}

		else{
			echo "0 result";
		}

		$conn->close();


		?>
	</table>


</body>
</html>



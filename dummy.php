<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'miniproject');




 if(isset($_POST['insert']))
{
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
$uploadreport=$_POST['uploadreport'];
 $fn=$_FILES['uploadreport']['name'];
$tmp=$_FILES['uploadreport']['tmp_name'];
move_uploaded_file($tmp, "Covid_report/".$fn);
$lastdate= $_POST['lastdate'];
$slectallergies=$_POST['slectallergies'];
$occupation=$_POST['occupation'];
$address=$_POST['address'];
$gender=$_POST['gender'];

	$query = "INSERT INTO 'registration'('fullname','username','email','phonenumber','setpassword','confirmpassword','dateofbirth','bloodgroup','selectdisease','whichdisease','selectcovid','uploadreport'lastdate','slectallergies','occupation','address','gender') VALUES ('$fullname','$username','$email','$phonenumber','$setpassword','$confirmpassword','$dateofbirth','$bloodgroup','$selectdisease','$whichdisease','$selectcovid','$uploadreport',$lastdate','$slectallergies','$occupation','$address','$gender')";

	$query_run=mysqli_query($connection,$query);

	 if($query_run)
	  {
		echo '<script type="text/javascript"> alert("Data Saved")</script>';
	}

	if($query_run)
	 {
	 	echo '<script type="text/javascript"> alert("Data  is not Saved")</script>';
	}



}



?> 



contact.css page


*{
	padding: 0;
	font-size: 18px;
	display: block;
	align-items: center;
	font-weight: bold;
	font-family: Montserrat;
}

section{
	height: 100vh;
	width: 100%;
	background-color:#dcdde1; 
	display:flex;
	justify-content: center;
	flex-direction: column;
}

.container{
	width: 90%;
	max-width: 400px;
	margin: 0 auto;
	padding: 20px;
/*	box-shadow: 0px 0px 20px;*/
	background-color: white;
	border-radius: 8px;
	margin-bottom: 20px;
}

input,
textarea{
width: 90%;
padding: 10px;
font-size: 15px;
padding: 5px;
/*border: 1px solid rgba(128, 128, 128,0.199);*/
}

textarea{
	resize: vertical;
}

button{
	width: 95%;
	border: none;
	outline: none;
	padding: 10px;
	font-size: 18px;
	border-radius: 8px;
	text-align: center;
	cursor: pointer;
	color: #00a8ff;
	margin-top: 10px;
	transition: .3s ease background-color;
}

button:hover{
	background-color: #c8d6e5; 
}

#status{
	width: 90%;
	text-align: center;
	max-width: 430px;
	border-radius: 8px;
	padding: 10px;
	margin: 0 auto;
}

#status.success{
	background-color: #4cd137;
	animation: status 4s ease forwards;
}

#status.error{
	background-color: #ff6348;
	animation: status 4s ease forwards;
	color: white;
}

@keyframes status{
	0%{
		opacity: 1;
		pointer-events: all;
	}

	90%{
		opacity: 1;
		pointer-events: all;
	}

	100%{
		opacity:0;
		pointer-events: none;
	}
}



contact.html

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="contact.css">

  <title></title>
</head>
<body>
  <section>
    <div class="container">
      <form action="contact.php">
        <label>Full Name:</label>
        <input type="text" name="fullname" placeholder="enter your full name" required=""><br><br>

       <label>Email:</label>
        <input type="email" name="email" placeholder="enter your email" required=""><br><br>


       <label>Message:</label>
       <textarea name="message" placeholder="enter your message" cols="30" rows="10" required=""></textarea><br>
       

        <button class="btn btn-success" type="submit">Submit</button>


      </form>
    </div>



  </section>

</body>
</html> 



php code of registration page

<?php

// if(isset($_POST['fullname']) || $_POST['username']) || $_POST['email']) || $_POST['phonenumber']) || $_POST['setpassword']) || $_POST['confirmpassword']) || $_POST['dateofbirth']) || $_POST['bloodgroup']) || $_POST['selectdisease']) || $_POST['whichdisease']) || $_POST['selectcovid']) || $_POST['uploadreport']) || $_POST['lastdate']) || $_POST['fullname']) || $_POST['fullname']) || $_POST['fullname']) || $_POST['fullname']) || )																																																																																																																																					

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


$con=mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con,'miniproject');

if($con)
{
	echo "successfull";
}

else
{
	echo "connection not establish";
}


$query = "insert into registration (fullname,username,email,number,setpassword,confirmpassword,dob,bloodgroup,selectdisease,whichdisease,covid,report,last date,allergies,occupation,address) values ('$fullname','$username','$email','$phonenumber','$setpassword','$confirmpassword','$dateofbirth',$bloodgroup,$selectdisease,$whichdisease,$selectcovid,$uploadreport,$lastdate,$slectallergies,$occupation,$address,$gender)";

$i=mysqli_query($con,$query);

echo $i;

mysqli_close($con);

?>


faizan code html

<div class="form-group">
			<label>Phone Number</label>
		<input type="text" name="mobile" autocomplete="off" class="form-control">
			
		</div>

		<div class="form-group">
			<label>Set Password</label>
		<input type="Password" name="spass" autocomplete="off" class="form-control">
			
		</div>

		<div class="form-group">
			<label>Confirm Password</label>
		<input type="Password" name="cpass" autocomplete="off" class="form-control">
			
		</div>

		<div class="form-group">
        <label for="birthday">Date of Birth:</label>
        <input type="date" id="date" name="dob">
        </div>

		

		<!-- <div class="form-group">
			<label>Comments</label>
		<textarea class="form-control" name="comments"></textarea>
	</div> -->

	 <div class="form-group">
     <label for="Group">Select Blood Group:</label>
     <select id="blood" name="blood">
     <option value="A+">A+</option>
     <option value="B+">B+</option>
     <option value="AB+">AB+</option>
     <option value="O+">O+</option>
     <option value="A-">A-</option>
     <option value="B-">B-</option>
     <option value="AB-">AB-</option>
     <option value="O-">O-</option>
     </select>
    </div>

    <div class="form-group">
       <label for="Group">Are You Covid Recovered Person?</label>
     <select id="covid" name="covid">
     <option value="YES">YES</option>
     <option value="NO">NO</option>
     <option value="NOT TESTED">NOT TESTED</option>
    </div><br>

    <div class="form-group">
	<label>FILES UPLOADS</label>
   <input type="file" name="file">
   </div>

   

    <div class="form-group">
    <label for="birthday">Last donation date:</label>
    <input type="date" id="date" name="ldate">
    </div>

    <div class="form-group">
     <label for="Group">Gender</label>
     <select id="gender" name="gender">
     <option value="Male">Male</option>
     <option value="Femlae">Female</option>
     <option value="Others">Others</option>
    </div><br><br>


     <h3>Adress</h3>
    <div class="form-group">
        <label>Adress</label>
        <input type="text" name="address" autocomplete="off" class="form-control">
	</div>

    
    <div class="form-group">
        <label>Occupation</label>
    <input type="text" name="occupation" autocomplete="off" class="form-control">
	</div>

	
		<button type="submit" class="btn btn-success">Submit</button>

	</form>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>










addedit.php

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>Edit Registration From</title>
  2<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="registration1.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

 
</head>

<body>
//yesterday pending work
	<?php
     $id=$_GET['id'];
     echo $id;
     $conn= mysqli_connect("localhost","root","","check");
     $sql = "SELECT * FROM `registration` WHERE id=$id";
    
     $result= mysqli_query($conn,$sql);
     $row= mysqli_fetch_assoc($result);

     $fullname=$row['fullname'];
     $username=$row['username'];
     ?>
 //

<div class="container">
    <div class="title">Registration Form</div>
    <div class="w-50 m-auto">
	<form action="userinfo.php"  method="post" enctype="multipart/form-data">
	<div class="user-details">

		<div class="input-box">
					<span class="details">Full Name</span>
					<input type="text" placeholder="Enter Your Name" required="" name="fullname" autocomplete="off" class="form-control" />
		</div>

		<div class="input-box">
					<span class="details">Username</span>
					<input type="varchar" placeholder="Enter Your Username" required="" name="user" autocomplete="off" class="form-control" />
		</div>

		<div class="input-box">
					<span class="details">Email</span>
					<input type="Email" placeholder="Enter Your Email" required="" name="email" autocomplete="off" class="form-control" />
		</div>

		<div class="input-box">
					<span class="details">Phone Number</span>
					<input type="Number" placeholder="Enter Your Number" required="" name="mobile" autocomplete="off" class="form-control" />
		</div>

      <!--   <div class="input-box">
					<span class="details">Set Password</span>
					<input type="Password" id="Password" value="" placeholder="Enter Your Password" required="" name="spass"  autocomplete="off" class="form-control"/>
		</div>

		<div class="input-box">
					<span class="details">Confirm Password</span>
					<input type="Password" id="Password" value="" placeholder="Confirm Your Password" required="" name="cpass" autocomplete="off" class="form-control"/>
					
		</div> -->

		<div class="input-box">
					<span class="details">Date of Birth</span>
					<input type="date" placeholder="Enter Your Birth Date" required="" name="dob" autocomplete="off"  />
				
		</div>

		<div class="input-box">
					<span class="details">Blood Group</span>
					    <select class="s" name="blood" required="" autocomplete="off"/>
                       	
 	                       <option value="">Select Your Blood Group</option>
                           <option value="A+">A+</option>
                           <option value="B+">B+</option>
                           <option value="AB+">AB+</option>
                           <option value="O+">O+</option>
                           <option value="A-">A-</option>
                           <option value="B-">B-</option>
                           <option value="AB-">AB-</option>
                           <option value="O-">O-</option>
                        
                        </select>   
                      
		</div>

		<div class="input-box">
					<span class="details">Are You Covid Recovered Person?</span>
					 <select class="s" name="covid" required="" autocomplete="off"/>
                       	
 	                       <option value="">Select YES / NO</option>
                           <option value="YEs">YES</option>
                           <option value="NO">NO</option>
                           <option value="NOT TESTED">NOT TESTED</option>
                           
                     </select>  
	    </div>

	    <div class="input-box">
					<span class="details">If Yes then Upload Covid Recovery Report </span>
					<input type="file" placeholder="Upload Covid Recovery Report"  name="file"autocomplete="off">
		</div>

		<div class="input-box">
					<span class="details">Last Donate Date</span>
					<input type="date"  required="" name="ldate" autocomplete="off"  />
	    </div>

	    <div class="input-box">
					<span class="details">Gender</span>
					 <select class="s" name="gender" required="" autocomplete="off"/>
                       	
 	                       <option value="">Select Gender</option>
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
                           <option value="Others">Others</option>
                           
                     </select>  
	    </div>


        <div class="input-box">
					<span class="details">Occupation</span>
					<input type="varchar" placeholder="Enter Your Occupation" required="" name="occupation" autocomplete="off"/>
	    </div>

	    <div class="input-box">
					<span class="details">Residential Adress</span>
					<input type="varchar" placeholder="Enter Your Adress" required="" name="address" autocomplete="off" />
		</div>


		<!-- <div class="button" style="width: 100%;">
		      <input type="submit"  name="insert"  value="Register" >
		    
	    </div> -->

    
    
	
		<!-- <button type="submit" class="btn btn-success">Submit</button>
 -->
	</form>
	</div>

</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



userinfo.php

$fullname=$_POST['fullname'];
$user= $_POST['user'];
$email= $_POST['email'];
$mobile=$_POST['mobile'];
$spass=$_POST['spass'];
$cpass=$_POST['conpass'];
$birth=$_POST['dob'];
$blood=$_POST['blood'];
$covid=$_POST['covid'];
$filename=$_FILES['file']['name'];
$ldate=$_POST['ldate'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$occupation=$_POST['occupation'];




to display file on webpage
echo "<td><img src='<?php echo $row["file"];?>' width='100' height='50'></td>";

<td><?php echo '<img src="upload/'.$row["file"].'"width="100px;" height="100px;" alt="file">'?></td>


account.php



<!-- <!DOCTYPE html>
<html>
<head>
	<title>User Account</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    
	
</head>
<body > -->

<?php

		$conn= mysqli_connect("localhost","root","","check");
		if($conn-> connect_error)
		{
			die("Connection failed:". $conn-> connect_error);
		}

		$sql="select id, fullname, username, email , number , birth , blood , covid ,file ,ldate ,gender , address , occupation from registration";
		$result= $conn-> query($sql);


		if($result-> num_rows > 0)
		{
			while ($row =$result-> fetch_assoc())
			{

		       $id= $row['id'];

		      
			}

		}

		

		?>
	
 

	<!-- <?php
	$id = $_GET['id'];
	$servername="localhost";
	$username="root";
	$password="";
	$database="check";

	$conn= mysqli_connect($servername,$username,$password,$database);

	if($conn-> connect_error)
		{
			die("Connection failed:". $conn-> connect_error);
		}

	$sql = "SELECT * FROM `registration` WHERE id=$id";
	$result = mysqli_query($conn,$sql);
	$row =mysqli_fetch_assoc($result);

	$fullname=$row['fullname'];
    $user=$row['username']; 
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


	?> -->




    
    <a  style="margin-left: 1250px;" href="logout.php">LOGOUT</a>
    <header> <h2> Welcome in Online Blood and Plasma Donation System </h2>	</header> <br><br>	
	<!-- <h1>Welcome</h1> -->

	<img src="profile.jpg" alt="Avatar" style="margin-left: 30px;"><br><br>		
	<h5 style="margin-left: 30px;"><?php echo $_SESSION['user'];?></h5>
<!-- 	<?php echo $_SESSION['Password'] ;?>  -->
	


<!-- 
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

session_start();
echo "Welcome ";
?>

    <a  style="margin-left: 1250px;" href="logout.php">LOGOUT</a>
    <header> <h2> Welcome in Online Blood and Plasma Donation System </h2>	</header> <br><br>	
	<!-- <h1>Welcome</h1> -->

	<img src="profile.jpg" alt="Avatar" style="margin-left: 30px;"><br><br>		
	<h5 style="margin-left: 30px;"><?php echo $_SESSION['user'];?></h5>

</body>
</html>

update.php

<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
</head>
<body>

<?php 
        

		$conn= mysqli_connect("localhost","root","","check");
		if($conn-> connect_error)
		{
			die("Connection failed:". $conn-> connect_error);
		}

		$sql="select id, fullname, username, email , number , birth , blood , covid ,file ,ldate ,gender , address , occupation from registration";
		$result= $conn-> query($sql);

		$id = $_GET['id'];

		// if($result)
		// {
		// 	echo "success";
		// }

		// else
		// {
		// 	echo "fail";
		// }


		// if($result-> num_rows > 0){
		// 	while ($row =$result-> fetch_assoc()){

		//        $id= $row['id'];

	print_r($_POST);
	// $servername="localhost";
	// $username="root";
	// $password="";
	// $database="check";

	// $conn= mysqli_connect($servername,$username,$password,$database);

	$fullname=$row['fullname'];
    $user=$row['user']; 
    $email= $row['email'];
    $mobile=$row['mobile'];
    $birth=$row['dob'];
    $blood=$row['blood'];
    $covid=$row['covid'];
    $ldate=$row['ldate'];
    $gender=$row['gender'];
    $address=$row['address'];
    $occupation=$row['occupation'];










    account.php

    <?php

session_start();
$user=$_SESSION['user'];
// echo $user; 

?>

<!DOCTYPE html>
<html>
<head>
	<title>User account</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

	<div class="row">
		<div class="col-10" style="margin-left: 10px;font-size: 25px;">Welcome in Online Blood and Plasma Donation System</div>
		<div class="col-1" style="font-size: 20px;margin-left: 100px;">Logout</div>
	</div><br><br>

<!-- 
    <header> <h1> Welcome in Online Blood and Plasma Donation System </h1>	</header>
	<a  style="margin-left: 1250px;" href="logout.php">LOGOUT</a>
     <br><br>	 -->
	<!-- <h1>Welcome</h1> -->

	<img src="profile.jpg" alt="Avatar" style="margin-left: 30px;"><br>	
	<h5 style="margin-left: 30px;"><?php echo $_SESSION['fullname'];?></h5>

<h1 style="margin-left: 15px;"> <?php echo $_SESSION['user']; ?></h><br><br>

<?php

    $servername="localhost";
	$username="root";
	$password="";
	$database="check";

	$conn= mysqli_connect($servername,$username,$password,$database);

	$sql= "SELECT `id`, `fullname`, `username`, `email`, `number`,  `birth`, `blood`, `covid`,  `ldate`, `gender`, `address`, `occupation` FROM `registration` WHERE username= '$user' ";

	// echo $sql;


    $result = mysqli_query($conn,$sql);
    $row =mysqli_fetch_assoc($result);
	// error_reporting(0);


		
			

		       // $id= $row['id'];
		       // echo $id;

		       // echo '<tr>';
		       // echo '<td>'.$row['id'].'</td>';
		       // echo '<td>'.$row['fullname'].'</td>';
		       // echo '<td>'.$row['username'].'</td>';
		       // echo '<td>'.$row['email'].'</td>';
		       // echo '<td>'.$row['number'].'</td>';
		       // echo '<td>'.$row['birth'].'</td>';
		       // echo '<td>'.$row['blood'].'</td>';
		       // echo '<td>'.$row['covid'].'</td>';
		       // echo '<td>'.$row['file'].'</td>';
		       // echo '<td>'.$row['ldate'].'</td>';
		       // echo '<td>'.$row['gender'].'</td>';
		       // echo '<td>'.$row['address'].'</td>';
		       // echo '<td>'.$row['occupation'].'</td>';
		 //       echo "<td><a href='view.php?id=$id'<button class='btn btn-success'>View</button></td>";
		      

		 //       echo '</tr>';
			

			// echo "</table>";





		$conn= mysqli_connect("localhost","root","","check");
		if($conn-> connect_error) {
			die("Connection failed:". $conn-> connect_error);
		}

		$sql="select id, fullname, username, email , number , birth , blood , covid ,file ,ldate ,gender , address , occupation from registration WHERE username= '$user'";



    $result = mysqli_query($conn,$sql);
    $row =mysqli_fetch_assoc($result);


		       $id= $row['id'];

		       echo '<tr>';
		       echo '<td>'.$row['id'].'</td>';
		    
		       echo "<td><a href='view.php?id=$id'<button class='btn btn-success'>View</button></td>";
		      

		       echo '</tr>';
			

			echo "</table>";
		


		$conn->close();


		?>
	</table>



</body>
</html>



view.php


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>View Form</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="registration1.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

 
</head>

<body>

	<?php
	$user=$_GET['username'];
	error_reporting(0);


	$servername="localhost";
	$username="root";
	$password="";
	$database="check";

	$conn= mysqli_connect($servername,$username,$password,$database);

	$sql = "SELECT * FROM `registration` WHERE username='$user' ";
	$result = mysqli_query($conn,$sql);
	$row =mysqli_fetch_assoc($result);

	$fullname=$row['fullname'];
    $user=$row['username']; 
    $email= $row['email'];
    $mobile=$row['number'];
    $birth=$row['birth'];
    $blood=$row['blood'];
    $covid=$row['covid'];
    $ldate=$row['ldate'];
    $gender=$row['gender'];
    $address=$row['address'];
    $occupation=$row['occupation'];


	?>

<div class="container">
    <div class="title">Registration Form</div>
    <div class="w-50 m-auto">
	<form action="userinfo.php"  method="post" enctype="multipart/form-data">
	<div class="user-details">

		<div class="input-box">
					<span class="details">Full Name</span>
					<input type="text" placeholder="Enter Your Name" required="" disabled value="<?php echo $fullname;?>" name="fullname" autocomplete="off" class="form-control" />
		</div>

		<div class="input-box">
					<span class="details">Username</span>
					<input type="varchar" placeholder="Enter Your Username" required=""  disabled value="<?php echo  $user;?>" name="user" autocomplete="off" class="form-control" />
		</div>

		<div class="input-box">
					<span class="details">Email</span>
					<input type="Email" placeholder="Enter Your Email" required="" disabled value="<?php echo  $email;?>" name="email" autocomplete="off" class="form-control" />
		</div>

		<div class="input-box">
					<span class="details">Phone Number</span>
					<input type="Number" placeholder="Enter Your Number" required="" value="<?php echo  $mobile;?>" name="mobile" autocomplete="off" class="form-control" />
		</div>


		<div class="input-box">
					<span class="details">Date of Birth</span>
					<input type="date" placeholder="Enter Your Birth Date" required="" value="<?php echo $birth;?>" name="dob" autocomplete="off"  />
				
		</div>

		<div class="input-box">
					<span class="details">Blood Group</span>
					    <select class="s" name="blood" required="" value="<?php echo $blood;?>"  autocomplete="off"/>
                       	
 	                       <option value="">Select Your Blood Group</option>
                           <option value="A+"

                           <?php
                              if($blood== 'A+')
                              {
                              	echo "selected";
                              }

                           ?>

                           >A+</option>

                           <option value="B+"

                            <?php
                              if($blood== 'B+')
                              {
                              	echo "selected";
                              }

                           ?>


                           >B+</option>

                           <option value="AB+"
                            <?php
                              if($blood== 'AB+')
                              {
                              	echo "selected";
                              }

                           ?>

                           >AB+</option>

                           <option value="O+"

                            <?php
                              if($blood== 'O+')
                              {
                              	echo "selected";
                              }

                           ?>


                           >O+</option>

                           <option value="A-"

                            <?php
                              if($blood== 'A-')
                              {
                              	echo "selected";
                              }

                           ?>
                           >A-</option>

                           <option value="B-"

                             <?php
                              if($blood== 'B-')
                              {
                              	echo "selected";
                              }

                           ?>

                           >B-</option>

                           <option value="AB-"
                            <?php
                              if($blood== 'AB-')
                              {
                              	echo "selected";
                              }

                           ?>


                           >AB-</option>

                           <option value="O-"
                            <?php
                              if($blood== 'O-')
                              {
                              	echo "selected";
                              }

                           ?>


                           >O-</option>
                        
                        </select>   
                      
		</div>

		<div class="input-box">
					<span class="details">Are You Covid Recovered Person?</span>
					 <select class="s" name="covid" required="" value="<?php echo  $covid;?>" />
                       	
 	                       <option value="">Select YES / NO</option>
                           <option value="YES"

                           <?php
                              if($covid== 'YEs')
                              {
                              	echo "selected";
                              }

                           ?>
                           >YES</option>


                           <option value="NO"

                           
                           <?php
                              if($covid== 'NO')
                              {
                              	echo "selected";
                              }

                           ?>


                           >NO</option>


                           <option value="NOT TESTED"


                           <?php
                              if($covid== 'NOT TESTED')
                              {
                              	echo "selected";
                              }

                           ?>


                           >NOT TESTED</option>
                           
                     </select>  
	    </div>

	    <div class="input-box">
					<span class="details">If Yes then Upload Covid Recovery Report </span>
					<input type="file" placeholder="$filename"  name="file"  value="<?php echo  $filename;?>" autocomplete="off">
		</div>


		<div class="input-box">
					<span class="details">Last Donate Date</span>
					<input type="date"  required="" name="ldate" value="<?php echo $ldate;?>"  autocomplete="off"  />
	    </div>

	    <div class="input-box">
					<span class="details">Gender</span>
					 <select class="s" name="gender" required=""  value="<?php echo $gender;?>"  autocomplete="off"/>
                       	
 	                       <option value="">Select Gender</option>
                           <option value="Male" 
                           <?php
                              if($gender== 'Male')
                              {
                              	echo "selected";
                              }

                           ?>
                           >Male</option>

                           <option value="Female" 
                           <?php
                              if($gender== 'Femlae')
                              {
                              	echo "selected";
                              }

                           ?>
                           >Female</option>
                        
                           <option value="Others"

                            <?php
                              if($gender== 'Others')
                              {
                              	echo "selected";
                              }

                           ?>
                           >Others</option>
                           
                     </select>  
	    </div>


        <div class="input-box">
					<span class="details">Occupation</span>
					<input type="varchar" placeholder="Enter Your Occupation" required="" value="<?php echo  $occupation;?>"  name="occupation" autocomplete="off"/>
	    </div>

	    <div class="input-box">
					<span class="details">Residential Adress</span>
					<input type="varchar" placeholder="Enter Your Adress" required="" name="address"  value="<?php echo $address;?>" autocomplete="off" />
		</div>


		<a href="fetchdata.php" class="btn btn-danger">CANCEL</a>
		<button type="submit" name="update" class="btn btn-primary">UPDATE</button>


		<!-- <div class="button" style="width: 100%;">
		      <input type="submit"  name="insert"  value="Register" >
		    
	    </div> -->

    
    
	
		<!-- <button type="submit" class="btn btn-success">Submit</button>
 -->
	</form>
	</div>

</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

	

    $sql = "UPDATE `registration` SET `fullname`='$fullname',`username`='$user',`email`='$email',`number`='$mobile',`birth`='$birth',`blood`='$blood',`covid`='$covid',`ldate`='$ldate',`gender`='$gender',`address`='$address',`occupation`='$occupation' WHERE id= $id";

   
   $update = mysqli_query($conn,$sql);
   if($update)
   {
   	header("Location:fetchdata.php");
   }

?>


</body>
</html> 


?>



view.php


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>View Form</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="registration1.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

 
</head>

<body>


	<?php

	$user = $_GET['username'];
	$servername= "localhost";
	$username= "root";
	$password= "";
	$database= "check";
	$conn = mysqli_connect($servername,$username,$password,$database);
	$sql = "SELECT * FROM `registration` WHERE username = '$user' ";
	$result = mysqli_query($conn,$sql);
	$row =mysqli_fetch_array($sql);

	print_r($row);



?>

<div class="container">
    <div class="title">Registration Form</div>
    <div class="w-50 m-auto">
	<form action="userinfo.php"  method="post" enctype="multipart/form-data">
	<div class="user-details">

		<div class="input-box">
					<span class="details">Full Name</span>
					<input type="text" placeholder="Enter Your Name" required="" value="<?php echo $row['fullname'];?>" name="fullname" autocomplete="off" class="form-control" />
		</div>

		<div class="input-box">
					<span class="details">Username</span>
					<input type="varchar" placeholder="Enter Your Username" required=""  value="<?php echo  $user;?>" name="user" autocomplete="off" class="form-control" />
		</div>

		<div class="input-box">
					<span class="details">Email</span>
					<input type="Email" placeholder="Enter Your Email" required="" value="<?php echo  $email;?>" name="email" autocomplete="off" class="form-control" />
		</div>

		<div class="input-box">
					<span class="details">Phone Number</span>
					<input type="Number" placeholder="Enter Your Number" required="" value="<?php echo  $mobile;?>" name="mobile" autocomplete="off" class="form-control" />
		</div>


		<div class="input-box">
					<span class="details">Date of Birth</span>
					<input type="date" placeholder="Enter Your Birth Date" required="" value="<?php echo $birth;?>" name="dob" autocomplete="off"  />
				
		</div>

		<div class="input-box">
					<span class="details">Blood Group</span>
					    <select class="s" name="blood" required="" value="<?php echo $blood;?>"  autocomplete="off"/>
                       	
 	                       <option value="">Select Your Blood Group</option>
                           <option value="A+"

                           <?php
                              if($blood== 'A+')
                              {
                              	echo "selected";
                              }

                           ?>

                           >A+</option>

                           <option value="B+"

                            <?php
                              if($blood== 'B+')
                              {
                              	echo "selected";
                              }

                           ?>


                           >B+</option>

                           <option value="AB+"
                            <?php
                              if($blood== 'AB+')
                              {
                              	echo "selected";
                              }

                           ?>

                           >AB+</option>

                           <option value="O+"

                            <?php
                              if($blood== 'O+')
                              {
                              	echo "selected";
                              }

                           ?>


                           >O+</option>

                           <option value="A-"

                            <?php
                              if($blood== 'A-')
                              {
                              	echo "selected";
                              }

                           ?>
                           >A-</option>

                           <option value="B-"

                             <?php
                              if($blood== 'B-')
                              {
                              	echo "selected";
                              }

                           ?>

                           >B-</option>

                           <option value="AB-"
                            <?php
                              if($blood== 'AB-')
                              {
                              	echo "selected";
                              }

                           ?>


                           >AB-</option>

                           <option value="O-"
                            <?php
                              if($blood== 'O-')
                              {
                              	echo "selected";
                              }

                           ?>


                           >O-</option>
                        
                        </select>   
                      
		</div>

		<div class="input-box">
					<span class="details">Are You Covid Recovered Person?</span>
					 <select class="s" name="covid" required="" value="<?php echo  $covid;?>" />
                       	
 	                       <option value="">Select YES / NO</option>
                           <option value="YES"

                           <?php
                              if($covid== 'YEs')
                              {
                              	echo "selected";
                              }

                           ?>
                           >YES</option>


                           <option value="NO"

                           
                           <?php
                              if($covid== 'NO')
                              {
                              	echo "selected";
                              }

                           ?>


                           >NO</option>


                           <option value="NOT TESTED"


                           <?php
                              if($covid== 'NOT TESTED')
                              {
                              	echo "selected";
                              }

                           ?>


                           >NOT TESTED</option>
                           
                     </select>  
	    </div>

	    <div class="input-box">
					<span class="details">If Yes then Upload Covid Recovery Report </span>
					<input type="file" placeholder="$filename"  name="file"  value="<?php echo  $filename;?>" autocomplete="off">
		</div>


		<div class="input-box">
					<span class="details">Last Donate Date</span>
					<input type="date"  required="" name="ldate" value="<?php echo $ldate;?>"  autocomplete="off"  />
	    </div>

	    <div class="input-box">
					<span class="details">Gender</span>
					 <select class="s" name="gender" required=""  value="<?php echo $gender;?>"  autocomplete="off"/>
                       	
 	                       <option value="">Select Gender</option>
                           <option value="Male" 
                           <?php
                              if($gender== 'Male')
                              {
                              	echo "selected";
                              }

                           ?>
                           >Male</option>

                           <option value="Female" 
                           <?php
                              if($gender== 'Femlae')
                              {
                              	echo "selected";
                              }

                           ?>
                           >Female</option>
                        
                           <option value="Others"

                            <?php
                              if($gender== 'Others')
                              {
                              	echo "selected";
                              }

                           ?>
                           >Others</option>
                           
                     </select>  
	    </div>


        <div class="input-box">
					<span class="details">Occupation</span>
					<input type="varchar" placeholder="Enter Your Occupation" required="" value="<?php echo  $occupation;?>"  name="occupation" autocomplete="off"/>
	    </div>

	    <div class="input-box">
					<span class="details">Residential Adress</span>
					<input type="varchar" placeholder="Enter Your Adress" required="" name="address"  value="<?php echo $address;?>" autocomplete="off" />
		</div>


		<a href="fetchdata.php" class="btn btn-danger">CANCEL</a>
		<button type="submit" name="update" class="btn btn-primary">UPDATE</button>


		<!-- <div class="button" style="width: 100%;">
		      <input type="submit"  name="insert"  value="Register" >
		    
	    </div> -->

    
    
	
		<!-- <button type="submit" class="btn btn-success">Submit</button>
 -->
	</form>
	</div>

</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



new account.php


<!DOCTYPE html>
<html>
<head>
	<title>User account</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>


<?php

session_start();
$servername="localhost";
$username="root";
$password="";
$database="check";

$conn= mysqli_connect($servername,$username,$password,$database);


$user = $_SESSION['username'] ;
$sql = "SELECT * FROM registration WHERE username = '$user'" ;

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



    
	<div class="row">
		<div class="col-10" style="margin-left: 10px;font-size: 25px;">Welcome in Online Blood and Plasma Donation System</div>
		<div class="col-1" style="font-size: 20px;margin-left: 100px;">Logout</div>
	</div><br><br>

<!-- 

	<img src="profile.jpg" alt="Avatar" style="margin-left: 30px;"><br>	 -->
			<div class="row">
			<div class="col-md-4 ">
				<div class="card text-center sidebar">
					<div class="card-body">
						<img src="profile.jpg" class="rounded-circle" width="150">
						<div class="mt-3">
							<h3><?php echo $_SESSION['username']; ?></h3>
							<a href='view.php?id=$id'<button class='btn btn-success'>View Form</button>
							<a href='useredit.php?id=$id'<button class='btn btn-success'>Edit</button>
<!-- 							<a href="">View Form</a>
							<a href="">Edit Form</a>
							<a href="">Chat Box</a>
							<a href="">Signout</a>
							<a href=""></a> -->
						</div>
					</div>
				</div>
			</div><br>	<br>	


<!-- <h1 style="margin-left: 15px;"> <?php echo $_SESSION['username']; ?></h1> -->
<!-- <a href='addedit.php?id=$id'<button class='btn btn-success'>Edit</button> -->

<?php



echo '<tr>';
 echo "<td><a href='view.php?id=$id'<button class='btn btn-success'>View</button></td>";
 echo '<br>';
 echo '<br>';
 echo "<td><a href='useredit.php?id=$id'<button class='btn btn-success'>Edit</button></td>";
echo '</tr>';
?>

</body>
</html>


serach.php

<!DOCTYPE html>
<html>
<head>
	<title>Search Donar</title>
	<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
	<link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<style type="text/css">
		.img{
			border-radius: 50%;
			vertical-align:middle;
            width: 50px;
            height: 50px;
 
        }


        .t {
               
        	height: 40px;
        	width: 50%;
        	outline: none;
        	border-radius: 5px;
        	border:1px solid #ccc;
        	padding-left: 15px;
        	font-size: 16px;
        	border-bottom-width: 2px;
            margin-left: 320px;
        	transition: all 0.3s ease;
        	box-shadow: 0 5px 10px rgba(0,0,0,0.15);
        	border:1px blue;
        	box-shadow: 1px 1px 2px 1px blue;

         }


        .s {
               
        	height: 40px;
        	width: 50%;
        	outline: none;
        	border-radius: 5px;
        	border:1px solid #ccc;
        	padding-left: 15px;
        	font-size: 16px;
        	border-bottom-width: 2px;
        	transition: all 0.3s ease;
        	margin-left:130px;
        	/*box-shadow: 0 5px 10px rgba(0,0,0,0.15);*/
        	border:1px blue;
        	box-shadow: 1px 1px 2px 1px blue;

         }


	</style>
</head>
<body>

<from  method="POST" >
  <h2 style="text-align: center;">Search for Blood Group / Plasma Donar</h2> <br>
	<center><img src="logo5.png" alt="Avatar"></center><br>



  <form action="" method="POST">
	<div class="row">

		<div class="col-5" >

			
			            <select class="t" name="blood" required=""/>
                       	
 	                       <option value="">Select Blood Group</option>
                           <option value="A+">A+</option>
                           <option value="B+">B+</option>
                           <option value="AB+">AB+</option>
                           <option value="O+">O+</option>
                           <option value="A-">A-</option>
                           <option value="B-">B-</option>
                           <option value="AB-">AB-</option>
                           <option value="O">O-</option>
                        
                        </select> 

		</div>

	    <div class="col-5" >

			
			            <select class="s" name="place" required=""/>
                       	
 	                       <option value="">Search by Place</option>
                           <option value="Koradi">Koradi</option>
                           <option value="Jaripatka">Jaripatka</option>
                           <option value="Sadar">Sadar</option>
                           <option value="Burdi">Burdi</option>
                           <option value="Dhantoli">Dhantoli</option>
                           <option value="Wadi">Wadi</option>
                           <option value="Hingana">Hingana</option>
                           <option value="Vardha">Vardha</option>
                        
                        </select> 

		</div>
	
	</div>

<?php

$servername="localhost";
$username="root";
$password= "";
$database="check";


$conn= mysqli_connect("localhost","root","","check");
    if($conn-> connect_error) 
    {
      die("Connection failed:". $conn-> connect_error);
    }

$blood=$_POST['blood'];
$place=$_POST['place'];

    $sql="select id from registration where ";
    $result= $conn-> query($sql);


    if($result-> num_rows > 0)
    {
      while ($row =$result-> fetch_assoc())
      {

           $id= $row['id'];


      }
     } 



?>

 <br><br>

    <a href='searchblood.php?id=$id'><button class='btn btn-success' style="margin-left: 601px;">Search</button></a>
<!--     <button class="btn btn-success" type="submit" name="search"  style="margin-left: 601px;">Search</button> -->
    </form>


	          

</body>
</html>



new search.php

<!DOCTYPE html>
<html>
<head>
  <title>Serach Donar</title>
  <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
  <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
  <style type="text/css">
    .img{
      border-radius: 50%;
      vertical-align:middle;
            width: 50px;
            height: 50px;
 
        }


        .t {
               
          height: 40px;
          width: 50%;
          outline: none;
          border-radius: 5px;
          border:1px solid #ccc;
          padding-left: 15px;
          font-size: 16px;
          border-bottom-width: 2px;
            margin-left: 320px;
          transition: all 0.3s ease;
          box-shadow: 0 5px 10px rgba(0,0,0,0.15);
          border:1px blue;
          box-shadow: 1px 1px 2px 1px blue;

         }


        .s {
               
          height: 40px;
          width: 50%;
          outline: none;
          border-radius: 5px;
          border:1px solid #ccc;
          padding-left: 15px;
          font-size: 16px;
          border-bottom-width: 2px;
          transition: all 0.3s ease;
          margin-left:130px;
          /*box-shadow: 0 5px 10px rgba(0,0,0,0.15);*/
          border:1px blue;
          box-shadow: 1px 1px 2px 1px blue;

         }


  </style>
</head>
<body>

  <h2 style="text-align: center;">Search for Blood Group / Plasma Donar</h2> <br>
  <center><img src="logo5.png" alt="Avatar"></center><br>

  <form action=""  method="post">

    <div class="row">

    <div class="col-5" >

      
                  <select class="t" name="blood" required=""/>
                        
                         <option value="">Select Blood Group</option>
                           <option value="A+">A+</option>
                           <option value="B+">B+</option>
                           <option value="AB+">AB+</option>
                           <option value="O+">O+</option>
                           <option value="A-">A-</option>
                           <option value="B-">B-</option>
                           <option value="AB-">AB-</option>
                           <option value="O">O-</option>
                        
                        </select> 

    </div>

      <div class="col-5" >

      
                  <select class="s" name="address" required=""/>
                        
                         <option value="">Search by Place</option>
                           <option value="Koradi">Koradi</option>
                           <option value="Jaripatka">JP</option>
                           <option value="Sadar">Sadar</option>
                           <option value="Burdi">Burdi</option>
                           <option value="Dhantoli">Dhantoli</option>
                           <option value="Wadi">Wadi</option>
                           <option value="Hingana">Hingana</option>
                           <option value="Vardha">Vardha</option>
                        
                        </select> 

    </div>
  
    </div>

    <button class='btn btn-success' type="submit" name="search" style="margin-left: 601px;">search</button>


  </form>
  <table> 
     <center>

     <tr> 

        <th> Name </th>
        <th> Blood Group </th>
        <th> Location </th>
        <th> contact </th>

     </tr>

     </center>
        <br> 

     <?php



    $conn= mysqli_connect("localhost","root","","check");


    if(isset($_POST['search']))
    {
      $blood=$_POST['blood'];
      $address=$_POST['address'];

      

      $query = "SELECT  `fullname`, `number`, `blood`, `address` FROM `registration` WHERE  blood='$blood' && address=' $address'";
      $result=mysqli_query($conn,$query);

      $row=mysqli_fetch_assoc($result);

      $fullname=$row["fullname"];
      echo  $fullname;

      

      while($row)
        {

          ?>
          <tr>
            <td> <?php echo $row['fullname'];?> </td>
            <td> <?php echo $row['address'];?> </td>
            <td> <?php echo $row['blood'];?> </td>
            <td> <?php echo $row['number'];?> </td>

          </tr>

          <?php

        }


    }



     ?>


  </table>


</body>
</html>


chatbox.html

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="chatbox.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
	<title>Donar-Reciver Chat</title>
</head>
<body>
	<div class="wrapper">
		<section class="form signup">
			<header>Realtime Chat</header>

			<form action="#">
				<div class="error-txt">This is an error message</div>
				<div class="name-details">
					<div class="field input">
						<label>First Name</label>
						<input type="text"  placeholder="First Name">
					</div>

                    
					<div class="field input">
						<label>Last Name</label>
						<input type="text"  placeholder="Last Name">
					</div>
				</div>

					<div class="field input">
						<label>Email Address</label>
						<input type="text"  placeholder="Enter your Email">
					</div>

					<div class="field input">
						<label>Password</label>
						<input type="text"  placeholder="Set Password ">
					</div>

					<div class="field">
						<label>Select Image</label>
						<input type="file">
					</div>

					<div class="field">

						<input type="submit" value="Continue to chat">
					</div>

				</div>
			</form>

			<div class="link">Already Signed up? <a href="#">Login Now</a></div>
		</section>
	</div>

</body>
</html>






account.php


<!DOCTYPE html>
<html>
<head>
	<title>User account</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="profile.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background: linear-gradient(135deg,#71b7e6,#9b59b6);">


<?php

session_start();
$servername="localhost";
$username="root";
$password= "";
$database="check";

$conn= mysqli_connect($servername,$username,$password,$database);

$user	= $_SESSION['username'];

$sql = "SELECT * FROM registration WHERE username = '$user'" ;

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

<div class="row" style="background-color: red;margin-top: 0px;">
	<div class="col-9" style="margin-left: 25px;font-size: 25px;">Welcome in Online Blood and Plasma Donation System</div>
	<div class="col-1" style="margin-left:175px; ; font-size: 25px;" ><span class="fa fa-sign-out"><a href="logout.php">Logout</a></span></div>
	
</div>

<br>



<div class="row">
			<div class="col-3" style="margin-left: 30px;">
				<div class="card text-center sidebar">
					<div class="card-body">
						<img src="profile.jpg" class="rounded-circle" width="150">
						<div class="mt-3">
							<h3 style="color: black;"><?php echo $_SESSION['username']; ?></h3>
							<?php
                              echo "<a href='view.php?id=$id'><button class='btn btn-primary'>View Form</button></a>"; 
                              echo "<br>";
                              
                              echo "<a href='useredit.php?id=$id'><button class='btn btn-info'>Edit Form</button></a>";
                              echo "<br>";

                              echo "<a href='view.php?id=$id'><button class='btn btn-primary'>Chat Box</button></a>"; 
                              

                            ?>


						</div>
					</div>
				</div>

			</div>
			<div class="col-8 " style="margin-left: 10px;">
				<div class="card mb-3 content">
					<h1 class="m-3 pt-3">About</h1>
					<div class="card-body">
						<div class="row">
							<div class="col-md-3">
							    <h5>Full Name</h5>
						    </div>
						

						<div class="col-md-9 text-secondary">
							<h5><?php echo $fullname;?></h5>
						</div>
						</div>
					</div>

					<hr>

					<div class="card-body">
						<div class="row">
							<div class="col-md-3">
							    <h5>Email</h5>
							</div>
						

						<div class="col-md-9 text-secondary">
							<h5><?php echo $email;?></h5>
						</div>
						</div>
					</div>
					<hr>

					<div class="card-body">
						<div class="row">
							<div class="col-md-3">
							    <h5>Phone Number</h5>
							</div>
						

						<div class="col-md-9 text-secondary">
							<h5><?php echo $mobile;?></h5>
						</div>
						</div>
					</div>
					<hr>

					<div class="card-body">
						<div class="row">
							<div class="col-md-3">
							    <h5>Last Donation Date</h5>
							</div>
						

						<div class="col-md-9 text-secondary">
							<h5><?php echo $ldate;?></h5>
						</div>
						</div>
					</div>
					<hr>

					<div class="card-body">
						<div class="row">
							<div class="col-md-3">
							    <h5>Adress</h5>
							</div>
						

						<div class="col-md-9 text-secondary">
							<h5><?php echo $address;?></h5>
						</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
	</div>

    

	
</body>
</html>







receiver_account.php



<!DOCTYPE html>
<html>
<head>
	<title>Receiver account</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="profile.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background: linear-gradient(135deg,#71b7e6,#9b59b6);">


<?php

session_start();
$servername="localhost";
$username="root";
$password= "";
$database="check";

$conn= mysqli_connect($servername,$username,$password,$database);

$user	= $_SESSION['username'];

$sql = "SELECT * FROM registration WHERE username = '$user'" ;

$query = mysqli_query($conn,$sql );
$row=mysqli_fetch_assoc($query);
$id=$row["id"];

$fullname=$row["fullname"];

$email= $row['email'];
$mobile=$row['number'];
$birth=$row['birth'];
$blood=$row['blood'];

$filename=$row['file'];
$ldate=$row['ldate'];
$gender=$row['gender'];
$address=$row['address'];
$occupation=$row['occupation'];

?>

<div class="row" style="background-color: red;margin-top: 0px;">
	<div class="col-9" style="margin-left: 25px;font-size: 25px;">Welcome in Online Blood and Plasma Donation System</div>


	<div class="col-1" style="margin-left:175px; ; font-size: 25px;" ><span class="fa fa-sign-out"><a href="receiver_logout.php">Logout</a></span></div>


	
</div>

<br>



<div class="row">
			<div class="col-3" style="margin-left: 30px;">
				<div class="card text-center sidebar">
					<div class="card-body">
						<img src="profile.jpg" class="rounded-circle" width="150">
						<div class="mt-3">
							<h3 style="color: black;"><?php echo $_SESSION['username']; ?></h3>
							<?php
                              echo "<a href='view.php?id=$id'><button class='btn btn-primary'>View Form</button></a>"; 
                              echo "<br>";
                              
                              echo "<a href='useredit.php?id=$id'><button class='btn btn-info'>Edit Form</button></a>";
                              echo "<br>";

                              echo "<a href='view.php?id=$id'><button class='btn btn-primary'>Chat Box</button></a>"; 
                              

                            ?>


						</div>
					</div>
				</div>

			</div>
			<div class="col-8 " style="margin-left: 10px;">
				<div class="card mb-3 content">
					<h1 class="m-3 pt-3">About</h1>
					<div class="card-body">
						<div class="row">
							<div class="col-md-3">
							    <h5>Full Name</h5>
						    </div>
						

						<div class="col-md-9 text-secondary">
							<h5><?php echo $fullname;?></h5>
						</div>
						</div>
					</div>

					<hr>

					<div class="card-body">
						<div class="row">
							<div class="col-md-3">
							    <h5>Email</h5>
							</div>
						

						<div class="col-md-9 text-secondary">
							<h5><?php echo $email;?></h5>
						</div>
						</div>
					</div>
					<hr>

					<div class="card-body">
						<div class="row">
							<div class="col-md-3">
							    <h5>Phone Number</h5>
							</div>
						

						<div class="col-md-9 text-secondary">
							<h5><?php echo $mobile;?></h5>
						</div>
						</div>
					</div>
					<hr>

					<div class="card-body">
						<div class="row">
							<div class="col-md-3">
							    <h5>Last Donation Date</h5>
							</div>
						

						<div class="col-md-9 text-secondary">
							<h5><?php echo $ldate;?></h5>
						</div>
						</div>
					</div>
					<hr>

					<div class="card-body">
						<div class="row">
							<div class="col-md-3">
							    <h5>Adress</h5>
							</div>
						

						<div class="col-md-9 text-secondary">
							<h5><?php echo $address;?></h5>
						</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
	</div>

    

	
</body>
</html>



#Live Blood Bank

<html>
<head>
	<title>Live Blood camp</title>
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

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 30%;
  align-items: right;
  margin-top: 50px;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

</style>
</head>
<body>
<h2 style="color:green;font-size: 35px;margin-left: 20px;margin-top: 40px;">Live Blood Donation Camp</h2>
<input type="text" id="myInput" style="margin-left: 1000px;" onkeyup="myFunction()" placeholder="Search for address" >
<br><br>
<table id="myTable">
<tr>
<th><h4>S.NO</h4></th>
<th><h4>DATE</h4></th>
<th><h4>TIME</h4></th>
<th><h4>CAMP NAME</h4></th>
<th><h4>ADDRESS</h4></th>
<th><h4>CONTACT</h4></th>
</tr>
<tr>
<td>1</td>
<td>14-Jun-2021</td>
<td>08:00AM-11:00PM</td>
<td>Blood Donation camp</td>
<td>NMCH Patna,Agamkuan, NMCH, patna, Patna</td>
<td>9431619781</td>	
</tr>
<tr>
<td>2</td>
<td>14-Jun-2021</td>
<td>10:00AM-3:00PM</td>
<td>VOLUNTARY BLOOD DONATION CAMP</td>
<td>BLOOD BANK MAHAMAYA RAJKIYA ALLOPATHIC MEDICAL COLLEGE,SADDARPUR, TANDA, AMBEDKAR NAGAR, Ambedkar Nagar</td>
<td>9415388820</td>
</tr>
<tr>
<td>3</td>
<td>14-Jun-2021</td>
<td>4:00PM-7:00PM</td>
<td>R M Group</td>
<td>R M Group,Drive In Road, AHMEDABAD, Ahmedabad</td>
<td>7926600101</td>
</tr>
<tr>
<td>4</td>
<td>14-Jun-2021</td>
<td>09:00AM-3:00PM</td>
<td>Blood Donation Camp Blood Centre, Kasturba Health Society, MGIMS, Sevagram</td>
<td>Blood Centre, Kasturba Health Society,Blood Centre, Kasturba Health Society, Wardha, Wardha</td>
<td>0715284245</td>
</tr>
<td>5</td>
<td>14-Jun-2021</td>
<td>10:00AM-5:00PM</td>
<td>S P Group</td>
<td>S P Group,Vatva, AHMEDABAD, Ahmedabad</td>
<td>7926600101</td>
</tr>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

</body>
</html>












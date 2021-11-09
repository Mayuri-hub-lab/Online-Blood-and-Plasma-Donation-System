<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>Edit Donar Form</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="registration1.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

 
</head>

<body>

	<?php
	$id = $_GET['id'];
	$servername="localhost";
	$username="root";
	$password="";
	$database="check";

	$conn= mysqli_connect($servername,$username,$password,$database);

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


	?>

<div class="container">
    <div class="title">Registration Form</div>
    <div class="w-50 m-auto">
	<form action="update.php"  method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $id;?>">
	<div class="user-details">

		<div class="input-box">
					<span class="details">Full Name</span>
					<input type="text" placeholder="Enter Your Name" required=""  value="<?php echo $fullname;?>" name="fullname" autocomplete="off" class="form-control" />
		</div>

		<div class="input-box">
					<span class="details">Username</span>
					<input type="varchar" placeholder="Enter Your Username" required=""  value="<?php echo  $user;?>" disabled name="user" autocomplete="off" class="form-control" />
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
					<input type="date" placeholder="Enter Your Birth Date" required=""  value="<?php echo $birth;?>" name="dob" autocomplete="off"  />
				
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
                              if($gender== 'Female')
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
		</div> <br>

<!-- 
		<a href="fetchdata.php" class="btn btn-danger">CANCEL</a> -->
<!--     <button  class="btn btn-primary">CANCEL</button> -->
   <div class="row">
    <div class="col-3">
    <!--  <a href='update.php?id=$id' <button type='button' class='btn btn-danger'>UPDATE</button> -->
	 <button type="submit" name="submit" class="btn btn-success" style="margin-top:35px;">UPDATE</a></button> 
    </div>
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


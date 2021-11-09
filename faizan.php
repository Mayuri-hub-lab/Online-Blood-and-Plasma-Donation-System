<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="registration1.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>

<div class="container">
    <div class="title">Donar Registration</div>
	<div class="w-50 m-auto">
	<form action="userinfo.php" method="post" enctype="multipart/form-data">
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

        <div class="input-box">
					<span class="details">Set Password</span>
					<input type="Password" id="Password" value="" placeholder="Enter Your Password" required="" name="spass"  autocomplete="off" class="form-control"/>
		</div>

		<div class="input-box">
					<span class="details">Confirm Password</span>
					<input type="Password" id="Password" value="" placeholder="Confirm Your Password" required="" name="cpass" autocomplete="off" class="form-control"/>
					
		</div>

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
					<input type="file" placeholder="Upload Covid Recovery Report" required="" name="file"autocomplete="off">
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

    </div>
    
	
		<button type="submit" class="btn btn-success">Submit</button>

	</form>

</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
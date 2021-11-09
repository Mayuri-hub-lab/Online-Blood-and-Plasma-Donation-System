<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

	<title>Donar Registration Form</title>
	<meta charset="utf-8">
	<title>Donar Registration</title>
	<link rel="stylesheet" type="text/css" href="registration1.css">
	<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
	<meta name="viewport" content="width=device-width , initial-scale=1.0" >

</head>



<body>

       
	    <div class="container">
		<div class="title">Donar Registration</div>
		<form action="connect_registration.php"  method="post" enctype="multipart/form-data">
			<div class="user-details">
				<div class="input-box">
					<span class="details">Full Name</span>
					<input type="varchar" placeholder="Enter Your Name" required="" name="fullname" autocomplete="off" class="form-control" />
				</div>

				<div class="input-box">
					<span class="details">Username</span>
					<input type="varchar" placeholder="Enter Your Username" required="" name="username" autocomplete="off" class="form-control" />
				</div>

				<div class="input-box">
					<span class="details">Email</span>
					<input type="Email" placeholder="Enter Your Email" required="" name="email" autocomplete="off" class="form-control" />
				</div>

				<div class="input-box">
					<span class="details">Phone Number</span>
					<input type="Number" placeholder="Enter Your Number" required="" name="phonenumber" autocomplete="off" class="form-control" />
				</div>

				<div class="input-box">
					<span class="details">Set Password</span>
					<input type="Password" id="Password" value="" placeholder="Enter Your Password" required="" name="setpassword"  autocomplete="off" class="form-control"/>
				</div>

				<div class="input-box">
					<span class="details">Confirm Password</span>
					<input type="Password" id="ConfirmPassword" value="" placeholder="Confirm Your Password" required="" name="confirmpassword" autocomplete="off" class="form-control"/>
					<span id="message"></span>
				</div>

				<div class="input-box">
					<span class="details">Date of Birth</span>
					<input type="date" placeholder="Enter Your Birth Date" required="" name="dateofbirth" autocomplete="off"  />
				
				</div>

                 <div class="input-box">
					<span class="details">Blood Group</span>
					    <select class="s" name="bloodgroup" required="" autocomplete="off"/>
                       	
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
					<span class="details">Is You have any disease?</span>
					 <select class="s" name="selectdisease" required="" autocomplete="off" />
                       	
 	                       <option value="">Select YES / NO</option>
                           <option value="YEs">YES</option>
                           <option value="NO">NO</option>
                           
                      </select>  
					
				</div>

				<div class="input-box">
					<span class="details">Is Yes then Which disease You have?</span>
					<input type="text" placeholder="Which disease You have? "  name="whichdisease" required="" autocomplete="off"/>
				</div>

				<div class="input-box">
					<span class="details">Are You Covid Recovered Person?</span>
					 <select class="s" name="selectcovid" required="" autocomplete="off"/>
                       	
 	                       <option value="">Select YES / NO</option>
                           <option value="YEs">YES</option>
                           <option value="NO">NO</option>
                           
                     </select>  
				</div>

				<div class="input-box">
					<span class="details">If Yes then Upload Covid Recovery Report </span>
					<input type="file" placeholder="Upload Covid Recovery Report" required="" name="uploadreport"autocomplete="off">
				</div>


				<div class="input-box">
					<span class="details">Last Donate Date</span>
					<input type="date"  required="" name="lastdate" autocomplete="off"  />
				</div>

				<div class="input-box">
					<span class="details">Do you have any type of allergies?</span>
				
					<select class="s" name="slectallergies"  required="" autocomplete="off" />
						 <option value="">Select YES / NO</option>
                          <option value="YEs">YES</option>
                          <option value="NO">NO</option>
                           
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

			<div class="gender-details">
				<input type="radio" name="gender" id="dot-1" value="m" autocomplete="off">
				<input type="radio" name="gender" id="dot-2" value="f" autocomplete="off">
				<input type="radio" name="gender" id="dot-3" value="o" autocomplete="off">

                <span class="gender-title">Gender</span>
				<div class="category">
					<label for="dot-1">
						<span class="dot one"></span>
						<span class="gender">Male</span>
					</label>

					<label for="dot-2">
						<span class="dot two"></span>
						<span class="gender">Female</span>
					</label>

					<label for="dot-3">
						<span class="dot three"></span>
						<span class="gender">Other</span>
					</label>

				</div>
			</div>

		

			<div class="button">
		      <input type="submit" name="insert"  value="Register" >
		    
			</div>


<!-- for jumping on next page afetr registrtion -->
<!-- formaction="registration1a.html" -->
<!-- onclick="alert('You Want to Submit?')" -->
		

		

        </form> 
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	

	</div>

</body>
</html>



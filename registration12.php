
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>
	<section class="my-5">
	<div class="py-5">
		<h2 class=" py-5 text-center">Donar Registration</h2>
	</div>
<div class="w-50 m-auto">
	<form action="connect_registration.php" method="post" enctype="multipart/form-data">

		<div class="form-group">
			<label>Full Name</label>
		<input type="text" name="fullname" autocomplete="off" class="form-control">
			
		</div>

		<div class="form-group">
			<label>Username</label>
		<input type="text" name="username" autocomplete="off" class="form-control">
			
		</div>

		<div class="form-group">
			<label>Email </label>
		<input type="email" name="email" autocomplete="off" class="form-control">
			
		</div>

		<div class="form-group">
			<label>Phone Number</label>
		<input type="Number" name="phonenumber" autocomplete="off" class="form-control">
			
		</div>

		<div class="form-group">
			<label>Set Password</label>
		<input type="Password" name="setpassword" autocomplete="off" class="form-control">
			
		</div>

		<div class="form-group">
			<label>Confirm Password</label>
		<input type="Password" name="confirmpassword" autocomplete="off" class="form-control">
			
		</div>

		<div class="form-group">
			<label>Date of Birth</label>
		<input type="date" name="dateofbirth" autocomplete="off" class="form-control">
			
		</div>

		<!-- <div class="form-group">
			<label>Blood Group</label>
			<select id="group" name="bloodgroup" required="" autocomplete="off">
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
			<label>Is You have any disease?</label>
	        <select id="disease" name="selectdisease" required="" autocomplete="off">
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            </select>
			
		</div>

		<div class="form-group">
			<label>Is Yes then Which disease You have?</label>
		<input type="text" name="whichdisease" autocomplete="off" class="form-control">
			
		</div>

		<div class="form-group">
			<label>Are You Covid Recovered Person?</label>
			<select id="disease" name="selectcovid" required="" autocomplete="off">
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            </select>
		
		</div>

		<div class="form-group">
			<label>Upload report</label>
		<input type="file" name="uploadreport" autocomplete="off" class="form-control">
			
		</div>

		<div class="form-group">
			<label>Last Date</label>
		<input type="date" name="lastdate" autocomplete="off" class="form-control">
			
		</div>
 -->
		<!-- <div class="form-group">
			<label>Do you have any type of allergies?</label>
		    <select id="allergies" name="slectallergies" required="" autocomplete="off">
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            </select>
			
		</div>

		<div class="form-group">
			<label>Occupation</label>
		<input type="text" name="occupation" autocomplete="off" class="form-control">
			
		</div>

		<div class="form-group">
			<label>Adress</label>
		<input type="text" name="address" autocomplete="off" class="form-control">
			
		</div>

		<div class="form-group">
			<label>Gender</label>
			 <input type="radio" id="male" name="gender" value="male">
             <label for="male">Male</label><br>
             <input type="radio" id="female" name="gender" value="female">
             <label for="female">Female</label><br>
             <input type="radio" id="other" name="gender" value="other">
             <label for="other">Other</label>
		
			
		</div> -->

		<button type="submit" class="btn btn-success">Submit</button>

	</form>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

		

<!-- 
		<div class="form-group">
			<label>Comments</label>
		<textarea class="form-control" name="comments"></textarea>
	</div>


<div class="form-group">
	<label>GENDER</label><br>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
  </div>


<div class="form-group">
<label for="cars">Choose a car:</label>
<select id="cars" name="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</select>
</div>


<div class="form-group">
	<label>FILES UPLOADS</label>
<input type="file" name="file">
</div>


<div class="form-group">
<label for="birthday">Birthday:</label>
<input type="date" id="birthday" name="dob">
</div>
 -->
	
	<!-- 	<button type="submit" class="btn btn-success">Submit</button>

	</form>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html> -->
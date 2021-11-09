<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>View Receiver Form</title>
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

  $sql = "SELECT * FROM `receiver` WHERE id=$id";
  $result = mysqli_query($conn,$sql);
  $row =mysqli_fetch_assoc($result);


 $fullname=$row["fullname"];
$email= $row['email'];
$mobile=$row['mobile'];
$birth=$row['birth'];
$blood=$row['blood'];
$user=$row['username'];
$need=$row['need'];
$gender=$row['gender'];
$address=$row['address'];
$occupation=$row['occupation'];


  ?>

<div class="container">
    <div class="title">View Form</div>
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
          <input type="Number" placeholder="Enter Your Number" required=""  disabled value="<?php echo  $mobile;?>" name="mobile" autocomplete="off" class="form-control" />
    </div>


    <div class="input-box">
          <span class="details">Date of Birth</span>
          <input type="date" placeholder="Enter Your Birth Date" required=""  disabled value="<?php echo $birth;?>" name="dob" autocomplete="off"  />
        
    </div>

    <div class="input-box">
          <span class="details">Blood Group</span>
              <select class="s" name="blood" required=""  disabled value="<?php echo $blood;?>"  autocomplete="off"/>
                        
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
          <span class="details">What You Want to receive?</span>
           <select class="s" name="covid" required="" disabled value="<?php echo  $need;?>" />
                        
                         <option value="">Select Blood / Plasma</option>
                           <option value="Blood"

                           <?php
                              if($need== 'Blood')
                              {
                                echo "selected";
                              }

                           ?>
                           >Blood</option>


                           <option value="Plasma"

                           
                           <?php
                              if($need== 'Plasma')
                              {
                                echo "selected";
                              }

                           ?>


                           >Plasma</option>


                           <option value="Both"


                           <?php
                              if($need== 'Both')
                              {
                                echo "selected";
                              }

                           ?>


                           >Both</option>
                           
                     </select>  
      </div>

<!--      <div class="input-box">
          <span class="details">If Yes then Upload Covid Recovery Report </span>
          <input type="file" placeholder="$filename"  name="file"  value="<?php echo  $filename;?>" autocomplete="off">
    </div>
 -->

   

      <div class="input-box">
          <span class="details">Gender</span>
           <select class="s" name="gender" required="" disabled value="<?php echo $gender;?>"  autocomplete="off"/>
                        
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
          <input type="varchar" placeholder="Enter Your Occupation" required="" disabled value="<?php echo  $occupation;?>"  name="occupation" autocomplete="off"/>
      </div>

      <div class="input-box">
          <span class="details">Residential Adress</span>
          <input type="varchar" placeholder="Enter Your Adress" required=""  disabled name="address"  value="<?php echo $address;?>" autocomplete="off" />
    </div><br>  <br>  


    <a href="account.php" class="btn btn-primary" style="margin-top: 35px;">BACK</a>

  


  </form>
  </div>

</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>































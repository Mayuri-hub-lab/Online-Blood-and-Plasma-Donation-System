<?php include 'sendmail.php';?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title><!-- 
  <link rel="stylesheet" type="text/css" href="contact.css"> -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 


<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap');


*{
  margin:0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins ,sans-serif";
}

body{
  min-height: 100vh;
  background: linear-gradient(135deg,#71b7e6,#9b59b6); 
  background-size: cover;
  display: flex;
  justify-content: center;
  align-items: center;
}

.contact-section{
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.contact-info{
  color: white;
  max-width: 500px;
  line-height: 65px;
  padding-left: 50px;
  font-size: 18px;
}

.contact-info i{
  margin-right: 20px;
  font-size: 22px;
}

.contact-form{
  max-width: 700px;
  margin-right: 50px;
}

.contact-info, .contact-form{
  flex:1;
}

.contact-form h2{
  color: white;
  text-align: center;
  font-size: 35px;
  text-transform: uppercase;
  margin-bottom: 40px;
}

.contact-form .text-box{
  background:#000;
  color: #fff;
  border:none;
  width: 49%;
  width:calc(80% -80px);
  height: 50px;
  padding: 12px;
  font-size: 18px;
  border-radius: 5px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  opacity:0.9;
}


.contact-form .text-box:first-child{
  margin-right: 15px;
  width: 47%;
}



.contact-form textarea{
  background:#000;
  color: #fff;
  border:none;
  width:100%;
  height: 50px;
  padding: 12px;
  font-size: 18px;
  min-height: 200px;
  max-height: 400px;
  resize: vertical;
  border-radius: 5px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  opacity:0.9;

}

.contact-form .send-btn{
  float: right;
  background:#0FBF51;
  color: #fff;
  border:none;
  width: 120px;
  height: 40px;
  font-size: 17px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 2px;
  border-radius: 5px;
  cursor: pointer;
  transition-property: background;
}

.contact-form .send-btn:hover{
  background:#0DDF5D ;
}

.alert-success{
  z-index: 1;
  background: #0FBF51;
  font-size: 18px;
  padding: 20px 40px;
  min-width: 420px;
  position: fixed;
  right: 0;
  top: 10px;
  border-left: 8px solid #3AD66E;
  border-radius: 4px;
}


.alert-error{
  z-index: 1;
  background:#FFF3CD;
  font-size: 18px;
  padding: 20px 40px;
  min-width: 400px;
  position: fixed;
  right: 0;
  top: 10px;
  border-left: 8px solid #FFA502;
  border-radius: 4px;
}

</head>
</style>
<body>



 <!--alert message start-->

<!-- <?php echo $alert?> -->

  <!--alert message end-->

  <!--Contact section start-->

<!--   <div class="alert alert-success">
  <strong>Success!</strong> Indicates a successful or positive action.
</div> -->
  <div class="contact-section">
    <div class="contact-info">
     <div><i class="fa fa-map-marker-alt" aria-hidden="true">Jhulelal Institute of Technology,Lonara</i></div>
     <div><i class="fa fa-envelope" aria-hidden="true">jitcseminiprojectgroup7@gmial.com</i></div>
     <div><i class="fa fa-phone" aria-hidden="true">+91 1234  564  879</i></div>
     <div><i class="fa fa-clock" aria-hidden="true">Mon-Sun 24 hour</i></div>
    </div>

    <div class="contact-form" autocomplete="off">
      <h2>Contact Us</h2>
      <form class="contact" action="" method="post">
        <input type="text" name="name" class="text-box" placeholder="Your Name" required="">
        <input type="email" name="email" class="text-box" placeholder="Your Email" required=""> <br><br><br>
        <textarea name="message" rows="5" placeholder="Your Message" required=""></textarea> <br><br>
        <input type="submit" onclick="myFunction()"  name="submit" class="send-btn" value="Send">
        <script>
          function myFunction()
          {
             alert("Thank You for Your Valueable Response"); 
           }

        </script>


        
      </form>
    </div>
  </div>


  <!--Contact section end-->

 


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!--    <script>
    swal("Good job!", "You clicked the button!", "success");
  </script> -->



   

</body>
<!-- <script type="text/javascript">
    if(window.history.replaceState){
    window.history.replaceState(null,null,Window.location.href);  
   }
   </script> -->
</html>
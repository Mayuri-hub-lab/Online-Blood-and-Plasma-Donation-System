<?PHP

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail= new PHPMailer(true);


if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	try{
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth=true;
		$mail->Username="jitcseminiprojectgroup7@gmail.com";
		$mail->Password="GMRS@2021";
		$mail->SMTPSecure= PHPMailer::ENCRYPTION_STARTTLS;
		$mail->Port ='587';

		$mail->setFrom('jitcseminiprojectgroup7@gmail.com');
		$mail->addAddress('jitcseminiprojectgroup7@gmail.com');

		$mail->isHTML(true);
		$mail->Subject=' Online Blood and Plasma Donation System';
		$mail->Body="<h3>Name: $name <br> Email: $email <br> Message: $message <br></h3>";

		$mail->send();

		$alert= '<div class="alert-success">
                 <span>Message Sent Successfully! We will get back to you in 24 hours. </span>
                </div>';
	} catch(Exception $e){
	    $alert=	'<div class="alert-error">
                 <span>'.$e->getMessage().'</span>
                </div>';
	}

}

?>
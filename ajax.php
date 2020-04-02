<?php
date_default_timezone_set('Asia/Karachi');
require __DIR__ .'/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['formData'])) {
	$name = $_POST['formData']['name'];
	$email = $_POST['formData']['email'];
	$service = $_POST['formData']['service'];
  $message = $_POST['formData']['message'];

    $mail = new PHPMailer;
	  $mail->isSMTP(true);
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'agency.impact01@gmail.com';
    $mail->Password   = 'msn975#$';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
  	$mail->setFrom('agency.impact01@gmail.com');
  	$mail->addAddress("sana.abbhaid@gmail.com");
  	$mail->addAddress("marion.schleifer@gmail.com");
    $mail->addAddress("baldellinadia@gmail.com");
  	$mail->isHTML(true);
    $mail->Subject = "Contact Form";
    $mail->Body    = "Name: $name <br> <br>
    				          Email: $email <br> <br>
    				          Service Required: $service <br /> <br />
                      Message: $message" ;
    if($mail->send()){
		echo  "Email Sent";
		}else{
			var_dump($mail);
		}
}

?>

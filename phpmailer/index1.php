<?php
//include phpmailer files
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
//Define namespaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Personal Info
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone-Number'];
    $content = $_POST['Comment'];

//body declaration
    $body = "
        From: ".$name."
        Email: ".$email."
        Phone: ".$phone."

        ".$content."";

    $order = "Order ".date("l")." ".date("Y-m-d")."";

//create instance of PHPMailer
$mail = new PHPMailer();
//Set mailer to use smtp
$mail->isSMTP();
//Define SMTP host
$mail->Host = "smtp.gmail.com";
//enable SMTP auth
$mail->SMTPAuth = "true";
//set type of encryption(ssl/tls)
$mail->SMTPSecure = "tls";
//set port to connect SMTP
$mail->Port = "587";
//set gmail username
$mail->Username = "princeoctiemarecha@gmail.com";
//set email password
$mail->Password = "DHEWA42im??";
//subject
$mail->Subject = $order;
//set sender email
$mail->setFrom("princeoctiemarecha@gmail.com");
//Email body
$mail->Body = $body;
//add reciepient
$mail->addAddress("princeoctiemarecha@gmail.com");
//send email

if ($mail->Send()){
echo ("<h1>Dande</h1>");
}else{
    echo "Error...";
}
//Closing smtp connection
$mail->smtpClose();


<?php
ob_start();  
// require_once("control/otdo-panel/includes/config.php");
require 'PHPMailer/src/Exception.php'; 
require 'PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/src/SMTP.php'; 

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
require_once("functions.php");

// PHPMailer config old server

// $message = new PHPMailer;
// $message->isSMTP();
// $message->Host     = 'smtp.skylar-homes.com';
// $message->SMTPAuth = true;
// $message->Username = 'info@skylar-homes.com';
// $message->Password = 'admin@786';
// $message->SMTPSecure = 'tls';
// $message->Port     = 465;

// PHPMailer config new server

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host     = 'mail.interiorgenie.in'; 
$mail->SMTPAuth = true;
$mail->SMTPAutoTLS = false; 
$mail->Port = 587; 
$mail->Username = 'help@interiorgenie.in';
$mail->Password = 'admin@789@789@789';




if(isset($_POST['submit'])){
if(empty($_POST['honeypot'])){
echo $name = $_POST['name'];
echo $email = $_POST['email'];
echo $phone = $_POST['phone'];
echo $subject = $_POST['subject'];
echo $message1 = $_POST['message'];

$recipient = $email;
//sent
$mail->setFrom('help@interiorgenie.in', 'Interior Genie'); 
$mail->addReplyTo('help@interiorgenie.in', 'reply'); 


// $mail->addAddress('satpaloutdo@gmail.com'); 
$mail->addAddress('hellointeriorgenie@gmail.com'); 

$mail->Subject =  "New Query from:" .$name;
$mail->isHTML(true); 

$message .= "<p> Name : ".$name."<br>";
$message .= "E-mail  : ".$email."<br>";
$message .= "Phone Number  : ".$phone."<br>";
$message .= "Subject  : ".$subject."<br>";
$message .= "Message : ".$message1."</p>";

$mail->Body = $message; 


if(!$mail->send()){ 
    redirect("index.php?er=13");
}else{ 
    redirect("contact.php?er=12"); 
}
}
}

ob_start();
?>

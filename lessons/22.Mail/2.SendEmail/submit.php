<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer;  // Passing true enablese xceptions

if(isset($_POST['submit'])) {
$emailinp = $_POST['email'];
$subjectinp = $_POST['subject'];
$messageinp = $_POST["message"];
}

//Server settings
$mail->SMTPDebug= 4;
$mail->isSMTP();
// Set mailer to use SHTP
$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMIP servers
$mail->SMTPAuth = true;              // Enable SMIP authentication
$mail->Username = 'arianittershnjaku@gmail.com'; // SMIP usernane
$mail->Password = 'ficxirnpbbezqnbd';  // SHIP password
$mail->SMTPSecure = 'ssl'; // Enable TLS encryption,ssl also accepted
$mail->Port = 465;         // TCP port to connect to

//Recipients
$mail->setFrom('arianittershnjaku@gmail.com', 'Contact');
$mail->addAddress($emailinp);
$mail->addReplyTo('arianittershnjaku@gmail.com');

//Content
$mail->isHTML(true);       // Set email format to html
$mail->Subject = $subjectinp; 

$mail->Body = $messageinp;

if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Error: '.$mail->ErrorInfo;
}else{
    //echo 'Message has been sent';
    echo "<script>alert('Message has been sent!');</script>";
    echo "<script>window.open('send.php','_self');</script>";
    
}
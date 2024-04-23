<?php



use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;



require 'PHPMailer/src/Exception.php';

require 'PHPMailer/src/PHPMailer.php';

require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer;



if (isset($_POST['submit'])) {

    $emailinp = $_POST['email'];

    $subjectinp = $_POST['subject'];

    $messageinp = $_POST['message'];
}


$mail->SMTPDebug = 4;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'arianittershnjaku@gmail.com';
$mail->Password = 'ficxirnpbbezqnbd';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('arianittershnjaku@gmail.com', 'gmail');
$mail->addAddress('arianittershnjaku@gmail.com');
$mail->addReplyTo('arianittershnjaku@gmail.com');
$mail->isHTML(true);
$mail->Subject = "Contact form";
$message = "Email: $emailinp , <br> Subject: $subjectinp , <br>Message: $messageinp ";
$mail->Body = $message;


if (!$mail->send()) {

    echo 'Messazhi nuk shkoj';

    echo '' . $mail->ErrorInfo;
} else {

    echo 'Mesazhi ka shkuar';

    echo "<script>window.open('send.php', '_self')</script>";
}

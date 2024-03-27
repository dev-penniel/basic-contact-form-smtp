<?php

$names = $_POST['names'];
$mailFrom = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.pennielsoftware.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'no-reply@pennielsoftware.com';                     //SMTP username
    $mail->Password   = 'pen@2023niel';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom( 'no-reply@pennielsoftware.com', 'Pennielsoftware.com');
    $mail->addAddress('tlhonolofatsopennielmothae@gmail.com', 'Web Master');     //Add a recipient
    $mail->addReplyTo('tlhonolofatsopennielmothae@gmail.com', 'Web Master');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Inquiry from your Website Contact Form';
    $mail->Body    = $names." ".$mailFrom.": ".$message;
    $mail->AltBody = $message;

    $mail->send();
    header('Location: ../form.php?success');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:/xampp/htdocs/PhpMailForm/PHPMailer-master/src/Exception.php';
require 'C:/xampp/htdocs/PhpMailForm/PHPMailer-master/src/PHPMailer.php';
require 'C:/xampp/htdocs/PhpMailForm/PHPMailer-master/src/SMTP.php';


$email = isset($_POST['email']) ? $_POST['email'] : null;
$subject = isset($_POST['subject']) ? $_POST['subject'] : 'Konu';
$content = isset($_POST['content']) ? $_POST['content'] : null;

if (!$email) {
    die("Please provide your email address.");
}

if (!$content) {
    die("Please enter the email content.");
}

$mail = new PHPMailer(true);

try {

    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'example@gmail.com'; // SMTP username
    $mail->Password = 'password'; // Gmail application account
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;



    $mail->setFrom('example@gmail.com', 'Sender');
    $mail->addAddress($email);
    $mail->addReplyTo('example@gmail.com', 'Receiver');

    // Dosya Ekleri
    if (isset($_FILES['attachment']['name']) && $_FILES['attachment']['error'] == UPLOAD_ERR_OK) {
        $mail->addAttachment($_FILES['attachment']['tmp_name'], $_FILES['attachment']['name']);
    }


    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $content;

    $mail->send();
    echo "Success";
} catch (Exception $e) {
    echo "Fail: {$mail->ErrorInfo}";
}
?>

//MrtOguzhan

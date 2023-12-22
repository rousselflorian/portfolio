<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'file:///C:/xampp/htdocs/florian/vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = 'travailsiotp@gmail.com';
        $mail->Password = 'bboh xoul kzgf iwvj';
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';


        $mail->setFrom('travailsiotp@gmail.com', 'Dev Local');
        $mail->addAddress('travailsiotp@gmail.com', 'Dev Local');

        $mail->isHTML(true);
        $mail->Subject = 'Formulaire reçus';
        $mail->Body = "Email: $email<br>Comment: $message";

        if (!$mail->send()) {
            echo 'Email not sent an error was encountered: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent.';
        }

        $mail->smtpClose();
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
?>

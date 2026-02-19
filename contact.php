<?php
header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = $_POST["name"];
    $email   = $_POST["email"];
    $phone   = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $mail = new PHPMailer(true);

    try {
        // SMTP Settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'kyrylishynaviktoriia@gmail.com'; // YOUR GMAIL
        $mail->Password   = 'puavyumxuasnkxou'; // APP PASSWORD
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Email Settings
        $mail->setFrom('kyrylishynaviktoriia@gmail.com', 'Portfolio Contact');
        $mail->addAddress('kreysanityasa@gmail.com'); // where you want to receive mail

        $mail->Subject = "New Contact: " . $subject;
        $mail->Body    = "
        Name: $name
        Email: $email
        Phone: $phone

        Message:
        $message
        ";

        $mail->send();
        header("Location: index.html?status=success#home");
        exit();

    } catch (Exception $e) {
        echo "error";
        exit();
    }
}
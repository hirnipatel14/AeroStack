<?php

error_reporting(E_ALL);
ini_set('display_errors', 0);

// Load PHPMailer
require __DIR__ . '/PHPMailer/Exception.php';
require __DIR__ . '/PHPMailer/PHPMailer.php';
require __DIR__ . '/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit('Illegal access');
}

// reCAPTCHA v3 verification
require __DIR__ . '/recaptcha-verify.php';

$token = $_POST['g-recaptcha-response'] ?? '';

// Allow lower score on localhost
$minScore = ($_SERVER['HTTP_HOST'] === 'localhost') ? 0.1 : 0.5;

if (!verify_recaptcha_v3($token, 'contact_form', $minScore)) {
    http_response_code(403);
    exit('Captcha verification failed');
}


// INPUTS FROM contact.php
$name     = isset($_POST['name']) ? trim($_POST['name']) : '';
$email    = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone    = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$subject  = isset($_POST['cate']) ? trim($_POST['cate']) : '';
$message  = isset($_POST['message']) ? trim($_POST['message']) : '';

// SANITISE
$name     = substr(preg_replace("/[\r\n]+/", ' ', strip_tags($name)), 0, 100);
$email    = filter_var($email, FILTER_SANITIZE_EMAIL);
$phone    = substr(preg_replace('/\D+/', '', $phone), 0, 20);
$subject  = substr(strip_tags($subject), 0, 120);
$message  = substr(strip_tags($message), 0, 5000);

// MIN VALIDATION
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    exit("Invalid email");
}

if ($name === '') {
    http_response_code(400);
    exit("Name required");
}

// ----------------------
// Subject
// ----------------------
$baseSubject = 'Website Enquiry - AeroStack Systems';

$e = fn($s) => htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');

// TEXT EMAIL
$text  = $baseSubject . "\n\n";
$text .= "Name:   {$name}\n";
$text .= "Email:  {$email}\n";
$text .= "Phone:  {$phone}\n";
$text .= "Subject: {$subject}\n";
$text .= "Message:\n{$message}\n";

// HTML EMAIL
$html = '<!doctype html>
<html>
<head><meta charset="UTF-8"><title>' . $e($baseSubject) . '</title></head>
<body style="margin:0;padding:0;background:#ffffff;font-family:Arial,Helvetica,sans-serif;">
  <div style="width:100%;max-width:560px;margin:0 auto;border-top:5px solid #0041ff;padding:20px;">
    <h2 style="margin:0 0 16px 0;font-size:20px;line-height:1.3;">' . $e($baseSubject) . '</h2>
    <p><strong>Name:</strong> ' . $e($name) . '</p>
    <p><strong>Email:</strong> ' . $e($email) . '</p>
    <p><strong>Phone:</strong> ' . $e($phone) . '</p>
    <p><strong>Subject Selected:</strong> ' . $e($subject) . '</p>
    <p><strong>Message:</strong><br>' . nl2br($e($message)) . '</p>
    <hr>
    <p style="font-size:12px;color:#666;">AeroStack Systems - Website Enquiry Message</p>
  </div>
</body>
</html>';

try {
    $mail = new PHPMailer(true);

    // SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'digital@hbsoftweb.com';
    $mail->Password = 'bbgyhjrawzwqphkn';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // MAIL FROM
    $mail->setFrom('info@aero-stack.com', 'Aero-stack');

    // RECEIVING MAILBOXES
    $mail->addAddress('info@aero-stack.com');
    $mail->addCC('');

    // Reply-to visitor
    $mail->addReplyTo($email, $name);

    // FINAL SEND
    $mail->isHTML(true);
    $mail->Subject = $baseSubject;
    $mail->Body    = $html;
    $mail->AltBody = $text;

    $mail->send();

    header("Location: thank-you.php");
    exit;

} catch (Exception $ex) {
    http_response_code(500);
    echo "Error sending email. Please try again.";
    error_log('PHPMailer contact error: ' . $ex->getMessage());
    exit;
}

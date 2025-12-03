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

$email = isset($_POST['subscriber_email']) ? trim($_POST['subscriber_email']) : '';
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    exit("Invalid email");
}

$baseSubject = 'New Subscriber — AeroStack Systems Newsletter';

$e = fn($s) => htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');

// TEXT
$text  = $baseSubject . "\n";
$text .= "Subscriber Email: {$email}\n";

// HTML TEMPLATE
$html = '<!doctype html>
<html>
<head><meta charset="UTF-8"><title>' . $e($baseSubject) . '</title></head>
<body style="margin:0;padding:0;background:#ffffff;font-family:Arial,Helvetica,sans-serif;">
  <div style="width:100%;max-width:560px;margin:0 auto;border-top:5px solid #00b300;padding:20px;">
    <h2 style="margin:0 0 16px 0;font-size:20px;line-height:1.3;">' . $e($baseSubject) . '</h2>
    <p><strong>Subscriber Email:</strong> ' . $e($email) . '</p>
    <hr>
    <p style="font-size:12px;color:#666;">AeroStack Systems — Newsletter Subscription</p>
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

    // FROM
    $mail->setFrom('digital@hbsoftweb.com', 'HB Softweb');

    // RECEIVING MAILBOXES
    $mail->addAddress('info@aero-stack.com');
    $mail->addCC('info@hbsoftweb.com');

    // Reply-to subscriber
    $mail->addReplyTo($email);

    // SEND
    $mail->isHTML(true);
    $mail->Subject = $baseSubject;
    $mail->Body    = $html;
    $mail->AltBody = $text;

    $mail->send();

    header("Location: thank-you.php");
    exit;

} catch (Exception $ex) {
    http_response_code(500);
    echo "Error sending subscription. Please try again.";
    error_log('PHPMailer Subscribe Error: ' . $ex->getMessage());
    exit;
}

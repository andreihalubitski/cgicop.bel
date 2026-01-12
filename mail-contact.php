<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require_once 'config.php';

header('Content-Type: application/json');

// Only allow POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed']);
    exit;
}

// Sanitize helper
function sanitize_input($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

// Input fields
$name    = sanitize_input($_POST['name'] ?? '');
$email   = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$subject = sanitize_input($_POST['subject'] ?? 'New Contact Request');
$address = sanitize_input($_POST['address'] ?? '');
$service = sanitize_input($_POST['service'] ?? '');
$note    = sanitize_input($_POST['note'] ?? '');
$phone   = sanitize_input($_POST['phone'] ?? '');

// Validate required fields
if (!$name || !$email || !$address || !$service || !$note) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Please fill in all required fields.']);
    exit;
}

// Email message body
$message = <<<EOD
You have received a new contact request:

Name: $name
Email: $email
Address: $address
Service: $service
Phone: $phone
Message: $note

Submitted from: {$_SERVER['HTTP_HOST']}
EOD;

// Send using PHPMailer
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USERNAME;
    $mail->Password   = SMTP_PASSWORD;
    $mail->SMTPSecure = SMTP_SECURE;
    $mail->Port       = SMTP_PORT;

    // Enable detailed debugging if in debug mode
    if (DEBUG_MODE) {
        $mail->SMTPDebug = 2;
        $mail->Debugoutput = 'error_log'; // send output to PHP error log
    }

    $mail->setFrom(SMTP_USERNAME, EMAIL_HEADER_FROM_NAME);
    $mail->addAddress(SITE_ADMIN_EMAIL);
    $mail->addReplyTo($email, $name);

    $mail->Subject = EMAIL_SUBJECT_PREFIX . ' ' . SITE_NAME;
    $mail->Body    = $message;

    $mail->send();
    echo json_encode(['status' => 'success']);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => DEBUG_MODE ? "Mailer Error: {$mail->ErrorInfo}" : 'Mail function failed. Please contact admin.'
    ]);
}

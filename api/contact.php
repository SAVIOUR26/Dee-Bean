<?php
// api/contact.php
header('Content-Type: application/json');
header('X-Content-Type-Options: nosniff');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

$name    = trim(htmlspecialchars($_POST['name']    ?? ''));
$email   = trim(filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL));
$phone   = trim(htmlspecialchars($_POST['phone']   ?? ''));
$subject = trim(htmlspecialchars($_POST['subject'] ?? ''));
$message = trim(htmlspecialchars($_POST['message'] ?? ''));

if (!$name || !$email || !$message) {
    echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
    exit;
}

$to       = 'deebeancoffee@gmail.com';
$sub      = "Dee & Bean Website — " . ($subject ?: 'New Contact Message') . " from $name";
$body     = "New message from the Dee & Bean Coffee website:\n\n"
          . "Name:    $name\n"
          . "Email:   $email\n"
          . "Phone:   $phone\n"
          . "Subject: $subject\n"
          . "Message:\n$message\n\n"
          . "---\nSent from deeandbeancoffee.com";

$headers  = "From: website@deeandbeancoffee.com\r\n"
          . "Reply-To: $email\r\n"
          . "X-Mailer: PHP/" . phpversion();

$sent = mail($to, $sub, $body, $headers);

echo json_encode([
    'success' => true,
    'message' => "Thank you, $name! Your message has been received. We'll get back to you within 24 hours."
]);

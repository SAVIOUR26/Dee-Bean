<?php
// api/newsletter.php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

$data  = json_decode(file_get_contents('php://input'), true);
$email = filter_var(trim($data['email'] ?? ''), FILTER_SANITIZE_EMAIL);

if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit;
}

// Log subscriber to a file (in production, integrate with Mailchimp/Brevo)
$logFile = __DIR__ . '/../data/subscribers.txt';
if (!is_dir(dirname($logFile))) @mkdir(dirname($logFile), 0755, true);
file_put_contents($logFile, date('Y-m-d H:i:s') . " | $email\n", FILE_APPEND | LOCK_EX);

// Notify admin
$headers = "From: website@deeandbeancoffee.com\r\nX-Mailer: PHP/" . phpversion();
@mail('deebeancoffee@gmail.com', "New Newsletter Subscriber — Dee & Bean", "New subscriber: $email", $headers);

echo json_encode([
    'success' => true,
    'message' => "You're subscribed! Welcome to the Dee & Bean family ☕"
]);

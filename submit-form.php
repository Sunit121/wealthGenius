<?php
session_start();
require_once 'db-config.php';

/* Allow only POST */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.php");
    exit;
}

/* ---------------- CSRF PROTECTION ---------------- */
if (!isset($_POST['csrf'], $_SESSION['csrf']) || $_POST['csrf'] !== $_SESSION['csrf']) {
    die("Invalid request");
}

/* ---------------- SANITIZE INPUT ---------------- */
$name     = htmlspecialchars(trim($_POST['name'] ?? ''), ENT_QUOTES, 'UTF-8');
$mobile   = trim($_POST['mobile'] ?? '');
$email    = trim($_POST['email'] ?? '');
$comments = htmlspecialchars(trim($_POST['comments'] ?? ''), ENT_QUOTES, 'UTF-8');
$offers   = isset($_POST['offers']) ? 'Yes' : 'No';

/* ---------------- VALIDATION ---------------- */
if ($name === '' || $mobile === '' || $email === '' || $comments === '') {
    die("All fields are required");
}

/* Prevent header injection */
if (preg_match("/[\r\n]/", $email)) {
    die("Invalid email");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email address");
}

/* Mobile validation (India example) */
if (!preg_match('/^[0-9]{10}$/', $mobile)) {
    die("Invalid mobile number");
}

/* ---------------- DATABASE INSERT ---------------- */
$stmt = $conn->prepare(
    "INSERT INTO contact_queries (name, mobile, email, comments, offers)
     VALUES (?, ?, ?, ?, ?)"
);

if (!$stmt) {
    die("Database error");
}

$stmt->bind_param("sssss", $name, $mobile, $email, $comments, $offers);

if (!$stmt->execute()) {
    die("Failed to save data");
}

/* ---------------- EMAIL TO ADMIN ---------------- */

$adminEmail = "admin@yourdomain.com";
$subject = "New Contact Query";

$adminMessage = "New contact query received:\n\n"
              . "Name: $name\n"
              . "Phone: $mobile\n"
              . "Email: $email\n"
              . "Message: $comments\n"
              . "Offers: $offers\n";

$adminHeaders  = "From: Website <no-reply@yourdomain.com>\r\n";
$adminHeaders .= "Reply-To: $email\r\n";
$adminHeaders .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (!mail($adminEmail, $subject, $adminMessage, $adminHeaders)) {
    error_log("Admin email failed");
}

/* ---------------- THANK YOU EMAIL ---------------- */

$userSubject = "Thank you for contacting us";

$userMessage = "Hi $name,

Thank you for contacting us.
Our team will get back to you shortly.

Regards,
Your Company Name";

$userHeaders  = "From: Your Company <no-reply@yourdomain.com>\r\n";
$userHeaders .= "Reply-To: $adminEmail\r\n";
$userHeaders .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (!mail($email, $userSubject, $userMessage, $userHeaders)) {
    error_log("User email failed");
}

/* Destroy token after use */
unset($_SESSION['csrf']);

/* Redirect */
header("Location: wg-thank-you.php");
exit;

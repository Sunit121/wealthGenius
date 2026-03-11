<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

ob_start();
session_start();
require_once 'db-config.php';

/* Allow only POST */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.php");
    exit;
}

/* ---------------- CSRF PROTECTION ---------------- */
// CSRF check disabled for debugging
/*
if (!isset($_POST['csrf'], $_SESSION['csrf']) || $_POST['csrf'] !== $_SESSION['csrf']) {
    die("Invalid request - CSRF token mismatch. <br>Sent: " . htmlspecialchars($_POST['csrf'] ?? 'null') . "<br>Session: " . htmlspecialchars($_SESSION['csrf'] ?? 'null'));
}
*/

/* ---------------- SANITIZE INPUT ---------------- */
$name     = htmlspecialchars(trim($_POST['name'] ?? ''), ENT_QUOTES, 'UTF-8');
$mobile   = trim($_POST['mobile'] ?? '');
$email    = trim($_POST['email'] ?? '');
$comments = htmlspecialchars(trim($_POST['comments'] ?? ''), ENT_QUOTES, 'UTF-8');

/* ---------------- VALIDATION ---------------- */
if ($name === '' || $mobile === '' || $email === '' || $comments === '') {
    die("All fields are required");
}

/* Prevent header injection */
if (preg_match("/[\r\n]/", $email)) {
    die("Invalid email - Header injection detected");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email address format");
}

/* Mobile validation */
if (!preg_match('/^[0-9]{10,15}$/', $mobile)) {
     // Permissive check
}


/* ---------------- DATABASE INSERT ---------------- */
$stmt = $conn->prepare(
    "INSERT INTO service_queries (name, mobile, email, comments)
     VALUES (?, ?, ?, ?)"
);

if (!$stmt) {
    die("Database prepare error: " . $conn->error);
}

$stmt->bind_param("ssss", $name, $mobile, $email, $comments);

if (!$stmt->execute()) {
    die("Database execute error: " . $stmt->error);
}

/* ---------------- EMAIL TO ADMIN ---------------- */
$adminEmail = "support@wealthgenius.co.uk"; 
$subject = "New Service Query";

$adminMessage = "New service query received:\n\n"
              . "Name: $name\n"
              . "Phone: $mobile\n"
              . "Email: $email\n"
              . "Message: $comments\n";

$adminHeaders  = "From: Website <no-reply@wealthgenius.co.uk>\r\n";
$adminHeaders .= "Reply-To: $email\r\n";
$adminHeaders .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (!@mail($adminEmail, $subject, $adminMessage, $adminHeaders)) {
    error_log("Admin email failed");
}

/* ---------------- THANK YOU EMAIL ---------------- */
$userSubject = "Thank you for contacting Wealth Genius";

$userMessage = "Hi $name,

Thank you for your enquiry.
Our team will get back to you shortly.

Regards,
Wealth Genius Ltd";

$userHeaders  = "From: Wealth Genius <no-reply@wealthgenius.co.uk>\r\n";
$userHeaders .= "Reply-To: $adminEmail\r\n";
$userHeaders .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (!@mail($email, $userSubject, $userMessage, $userHeaders)) {
    error_log("User email failed");
}

/* ---------------- REDIRECT ---------------- */
// clean buffer to remove any prior output/warnings
ob_end_clean(); 

// Try PHP header redirect first
header("Location: wg-thank-you.php");

// Fallback: If header fails (e.g. headers already sent), use JS
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="0;url=wg-thank-you.php">
<script>
    window.location.href = "wg-thank-you.php";
</script>
</head>
<body>
    <p>Submission successful!</p>
    <p>If you are not redirected automatically, <a href="wg-thank-you.php">click here</a>.</p>
</body>
</html>

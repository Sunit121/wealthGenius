<?php
/**
 * Link and Database Diagnostic Tool
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>🔍 Site Diagnostic</h1>";

require_once dirname(__DIR__) . '/env-config.php';

echo "<h3>Environment: " . ($is_live ? "LIVE" : "LOCAL") . "</h3>";
echo "HTTP_HOST: " . ($_SERVER['HTTP_HOST'] ?? 'NOT SET') . "<br>";
echo "__FILE__: " . __FILE__ . "<br>";

// 2. Check Base URL
echo "BASE_URL: <code>$base_url</code><br>";

// 3. Test Database Connectivity
require_once '../db-config.php';
if ($conn->connect_error) {
    echo "❌ Database: Connection failed: " . $conn->connect_error . "<br>";
} else {
    echo "✅ Database: Connected successfully!<br>";
    $conn->close();
}

// 4. Check WordPress Environment
if (file_exists('wp-load.php')) {
    echo "✅ WordPress: wp-load.php found.<br>";
} else {
    echo "❌ WordPress: wp-load.php NOT found.<br>";
}

echo "<br><hr>";
echo "<h3>Recommended Base URL Correction</h3>";
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$actual_url = $protocol . $_SERVER['HTTP_HOST'] . str_replace('resources/link_check.php', '', $_SERVER['REQUEST_URI']);
echo "Dynamic detected URL: <code>$actual_url</code><br>";
?>

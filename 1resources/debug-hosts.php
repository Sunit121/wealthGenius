<?php
/**
 * Hostinger Multi-Host Database Diagnostic
 * This script tests multiple potential Hostinger MySQL hostnames to find the correct one.
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Credentials from your updated config
$DB_USER = "u133917450_admin";
$DB_PASS = "wealthGenius-2026";
$DB_NAME = "u133917450_wealthgenius";

$hosts_to_test = [
    'localhost',
    '127.0.0.1',
    'srv1755.hstgr.io',
    '31.220.106.154',
    '77.37.35.50'
];

echo "<html><body style='font-family: sans-serif; padding: 20px; line-height: 1.6; max-width: 800px; margin: 0 auto;'>";
echo "<h1 style='color: #333;'>🗺️ Hostinger Database Host Finder</h1>";
echo "<p>Testing multiple hostnames with your credentials to find the correct one.</p>";

echo "<div style='background: #f4f4f4; padding: 15px; border-radius: 5px; margin-bottom: 20px;'>";
echo "<strong>Testing Credentials:</strong><br>";
echo "User: <code>$DB_USER</code><br>";
echo "Database: <code>$DB_NAME</code><br>";
echo "Password: <code>wealthGenius-2026</code>";
echo "</div>";

foreach ($hosts_to_test as $host) {
    echo "<div style='border: 1px solid #ddd; padding: 15px; border-radius: 5px; margin-bottom: 10px;'>";
    echo "<h3>Testing Host: <code>$host</code></h3>";
    
    // Set a short timeout for the connection attempt
    $conn = mysqli_init();
    if (!$conn) {
         echo "<p style='color: red;'>❌ mysqli_init failed</p>";
         echo "</div>";
         continue;
    }
    
    mysqli_options($conn, MYSQLI_OPT_CONNECT_TIMEOUT, 5);
    
    $start_time = microtime(true);
    $connected = @mysqli_real_connect($conn, $host, $DB_USER, $DB_PASS, $DB_NAME);
    $end_time = microtime(true);
    $duration = round(($end_time - $start_time) * 1000, 2);

    if ($connected) {
        echo "<p style='color: green; font-weight: bold;'>✅ SUCCESS! Connection established in {$duration}ms.</p>";
        echo "<p style='background: #efe; padding: 10px; border-left: 5px solid #0a0;'><strong>USE THIS HOST:</strong> Update your <code>DB_HOST</code> to <code>'$host'</code></p>";
        
        // Check if wp_users table exists
        $result = mysqli_query($conn, "SHOW TABLES LIKE 'wp_users'");
        if (mysqli_num_rows($result) > 0) {
            echo "<p>✅ <code>wp_users</code> table found.</p>";
        } else {
            echo "<p style='color: orange;'>⚠️ Connection worked, but <code>wp_users</code> table not found. Check your table prefix.</p>";
        }
        
        mysqli_close($conn);
        // We found it! But let's keep checking others just in case.
    } else {
        echo "<p style='color: red;'>❌ FAILED (Error: " . mysqli_connect_errno() . " - " . mysqli_connect_error() . ")</p>";
        if (mysqli_connect_errno() == 2002) {
            echo "<p style='font-size: 0.9em;'><em>Note: Connection refused/timed out. This host is likely incorrect.</em></p>";
        } elseif (mysqli_connect_errno() == 1045) {
            echo "<p style='font-size: 0.9em;'><em>Note: Access denied. The host is likely correct, but USER or PASSWORD might be wrong.</em></p>";
        }
    }
    echo "</div>";
}

echo "<hr>";
echo "<h2>Next Steps:</h2>";
echo "<ol>";
echo "<li>Look for the <strong>GREEN ✅ SUCCESS</strong> message above.</li>";
echo "<li>Copy the host name that worked.</li>";
echo "<li>Update your <code>wp-config.php</code> and <code>db-config.php</code> with that exact name.</li>";
echo "<li>Upload the updated files to Hostinger.</li>";
echo "</ol>";

echo "</body></html>";
?>

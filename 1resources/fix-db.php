<?php
/**
 * Hostinger Database Fixer & Connection Test
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Credentials from your updated config
$DB_HOST = "localhost";
$DB_USER = "u133917450_admin";
$DB_PASS = "wealthGenius-2026";
$DB_NAME = "u133917450_wealthgenius";

echo "<html><body style='font-family: sans-serif; padding: 20px; line-height: 1.6;'>";
echo "<h1>🛠️ Hostinger Database Fixer</h1>";

// 1. Test Connection
$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if ($conn->connect_error) {
    echo "<div style='background: #fee; padding: 15px; border: 1px solid #f99; border-radius: 5px;'>";
    echo "<h2 style='color: #d00; margin-top: 0;'>❌ Connection Failed</h2>";
    echo "<p><strong>Error:</strong> " . $conn->connect_error . "</p>";
    echo "<p>This means Hostinger is rejecting your Username or Password.</p>";
    echo "</div>";
} else {
    echo "<div style='background: #efe; padding: 15px; border: 1px solid #9f9; border-radius: 5px; margin-bottom: 20px;'>";
    echo "<h2 style='color: #080; margin-top: 0;'>✅ Database Connected!</h2>";
    echo "<p>The config files can successfully talk to Hostinger.</p>";
    echo "</div>";

    // 2. Action: Fix Password
    if (isset($_GET['fix_password'])) {
        // WordPress uses MD5 for simple manual updates
        $new_pass_hash = md5('wealthGenius-2026');
        $sql = "UPDATE wp_users SET user_pass = '$new_pass_hash' WHERE user_login = 'admin'";
        
        if ($conn->query($sql)) {
            echo "<div style='background: #eef; padding: 10px; border: 1px solid #99f; border-radius: 5px;'>";
            echo "✨ <strong>Success!</strong> Admin password has been set to <code>wealthGenius-2026</code>";
            echo "</div>";
        } else {
            echo "<p style='color: red;'>Error updating password: " . $conn->error . "</p>";
        }
    }

    // 3. Check Users
    $result = $conn->query("SELECT user_login, user_pass FROM wp_users");
    echo "<h3>Current Users in Database:</h3>";
    echo "<table border='1' cellpadding='5' style='border-collapse: collapse;'><tr><th>Username</th><th>Password Hash (Should not be plain text)</th></tr>";
    while ($row = $result->fetch_assoc()) {
        $is_plain = ($row['user_pass'] == 'WG-2026' || $row['user_pass'] == 'wealthGenius-2026');
        $color = $is_plain ? 'red' : 'green';
        echo "<tr><td>{$row['user_login']}</td><td style='color: $color;'>{$row['user_pass']}</td></tr>";
    }
    echo "</table>";

    if (!isset($_GET['fix_password'])) {
        echo "<br><a href='?fix_password=1' style='background: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block;'>Click here to fix Admin Password</a>";
    }
    
    echo "<br><br><a href='https://a-c-m-e.in/wealthGenius/resources/' style='color: #007bff;'>Go to Blog Homepage</a>";

    $conn->close();
}

echo "</body></html>";
?>

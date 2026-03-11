<?php
/**
 * Database Connection Test
 * This file tests if your database connection is working
 */

// Environment detection
$is_localhost = (
    $_SERVER['SERVER_NAME'] === 'localhost' || 
    $_SERVER['SERVER_ADDR'] === '127.0.0.1' ||
    $_SERVER['SERVER_ADDR'] === '::1' ||
    strpos($_SERVER['HTTP_HOST'], 'localhost') !== false
);

echo "<h1>Database Connection Test</h1>";
echo "<h2>Environment Detection</h2>";
echo "<p><strong>Is Localhost:</strong> " . ($is_localhost ? 'YES' : 'NO') . "</p>";
echo "<p><strong>SERVER_NAME:</strong> " . $_SERVER['SERVER_NAME'] . "</p>";
echo "<p><strong>SERVER_ADDR:</strong> " . ($_SERVER['SERVER_ADDR'] ?? 'Not set') . "</p>";
echo "<p><strong>HTTP_HOST:</strong> " . $_SERVER['HTTP_HOST'] . "</p>";

echo "<hr>";

// Database credentials based on environment
if ($is_localhost) {
    $DB_HOST = "localhost";
    $DB_USER = "root";
    $DB_PASS = "";
    $DB_NAME = "wealthgenius";
    echo "<h2>Using LOCAL Database Settings</h2>";
} else {
    $DB_HOST = "srv1755.hstgr.io";
    $DB_USER = "u133917450_admin";
    $DB_PASS = "wealthGenius-2026";
    $DB_NAME = "u133917450_wealthgenius";
    echo "<h2>Using LIVE Server Database Settings</h2>";
}

echo "<ul>";
echo "<li><strong>Host:</strong> $DB_HOST</li>";
echo "<li><strong>User:</strong> $DB_USER</li>";
echo "<li><strong>Password:</strong> " . (empty($DB_PASS) ? '(empty)' : '***hidden***') . "</li>";
echo "<li><strong>Database:</strong> $DB_NAME</li>";
echo "</ul>";

echo "<hr>";
echo "<h2>Connection Test</h2>";

// Try to connect
$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if ($conn->connect_error) {
    echo "<p style='color: red;'><strong>❌ CONNECTION FAILED:</strong> " . $conn->connect_error . "</p>";
    
    // Try without database name to see if MySQL is accessible
    echo "<h3>Testing MySQL Server Connection (without database)...</h3>";
    $conn2 = new mysqli($DB_HOST, $DB_USER, $DB_PASS);
    if ($conn2->connect_error) {
        echo "<p style='color: red;'><strong>❌ MySQL Server Not Accessible:</strong> " . $conn2->connect_error . "</p>";
        echo "<p><strong>Possible Issues:</strong></p>";
        echo "<ul>";
        echo "<li>MySQL/MariaDB is not running</li>";
        echo "<li>Wrong username or password</li>";
        echo "<li>Wrong host (try 'localhost' instead of '127.0.0.1' or vice versa)</li>";
        echo "</ul>";
    } else {
        echo "<p style='color: orange;'><strong>⚠️ MySQL Server is accessible, but database '$DB_NAME' doesn't exist</strong></p>";
        echo "<p><strong>Solution:</strong> Create database '$DB_NAME' in phpMyAdmin</p>";
        
        // List available databases
        $result = $conn2->query("SHOW DATABASES");
        echo "<h4>Available Databases:</h4>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row['Database'] . "</li>";
        }
        echo "</ul>";
        $conn2->close();
    }
} else {
    echo "<p style='color: green;'><strong>✅ CONNECTION SUCCESSFUL!</strong></p>";
    echo "<p>MySQL Version: " . $conn->server_info . "</p>";
    
    // List tables
    $result = $conn->query("SHOW TABLES");
    if ($result->num_rows > 0) {
        echo "<h3>Tables in database '$DB_NAME':</h3>";
        echo "<ul>";
        while ($row = $result->fetch_array()) {
            echo "<li>" . $row[0] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p style='color: orange;'><strong>⚠️ Database exists but has no tables</strong></p>";
        echo "<p>You need to install WordPress or import your database.</p>";
    }
    
    $conn->close();
}
?>

<?php
// Comprehensive Database Connection Tester

$tests = [
    ['host' => '127.0.0.1', 'user' => 'root', 'pass' => '', 'db' => 'wg_blogs'],
    ['host' => 'localhost', 'user' => 'root', 'pass' => '', 'db' => 'wg_blogs'],
];

echo "<h1>Database Connection Diagnostics</h1>";
echo "<h3>Target Database: wg_blogs</h3>";

foreach ($tests as $config) {
    echo "<hr><strong>Testing Host: {$config['host']}</strong><br>";
    
    mysqli_report(MYSQLI_REPORT_OFF); // Disable exceptions for manual handling
    $conn = @new mysqli($config['host'], $config['user'], $config['pass']);

    if ($conn->connect_error) {
        echo "<span style='color:red;'>FAILED to connect to MySQL: " . $conn->connect_error . "</span><br>";
        continue; // Skip DB check if connection failed
    } 
    
    echo "<span style='color:green;'>SUCCESS: Connected to MySQL server!</span><br>";
    echo "Server Info: " . $conn->server_info . "<br>";

    // Check for database
    $db_selected = $conn->select_db($config['db']);
    if ($db_selected) {
        echo "<span style='color:green;'>SUCCESS: Database '{$config['db']}' exists and is accessible.</span><br>";
        echo "<strong>Recommendation:</strong> Set DB_HOST to '{$config['host']}' in wp-config.php.<br>";
    } else {
        echo "<span style='color:orange;'>WARNING: Connected, but database '{$config['db']}' was NOT FOUND.</span><br>";
        echo "Attempting to create it... ";
        if ($conn->query("CREATE DATABASE `{$config['db']}`")) {
            echo "<span style='color:green;'>CREATED! Database '{$config['db']}' has been created.</span><br>";
        } else {
            echo "<span style='color:red;'>FAILED to create database: " . $conn->error . "</span><br>";
        }
    }
    $conn->close();
}
echo "<hr>";
?>

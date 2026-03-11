<?php
/**
 * Database Auto-Discovery Tool
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>🔍 Database Auto-Discovery</h1>";

$hosts = ['127.0.0.1', 'localhost'];
$users = ['root'];
$passes = [''];
$names = ['wealthgenius', 'wealth_genius_new', 'u133917450_wealthgenius'];

foreach ($hosts as $host) {
    foreach ($names as $name) {
        echo "Testing <strong>$host</strong> with database <strong>$name</strong>... ";
        $conn = @new mysqli($host, 'root', '', $name);
        
        if ($conn->connect_error) {
            echo "❌ Failed (" . $conn->connect_error . ")<br>";
        } else {
            echo "✅ <strong>SUCCESS!</strong><br>";
            echo "Available tables:<br>";
            $result = $conn->query("SHOW TABLES");
            while ($row = $result->fetch_array()) {
                echo "- " . $row[0] . "<br>";
            }
            $conn->close();
            echo "<br>";
        }
    }
}
?>

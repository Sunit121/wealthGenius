<?php
/**
 * Central Environment Configuration
 */

// 1. Environment Detection
$is_live = (
    (isset($_SERVER['HTTP_HOST']) && strpos($_SERVER['HTTP_HOST'], 'a-c-m-e.in') !== false) ||
    (strpos(__FILE__, '/home/u133917450/') !== false)
);

// 2. Base URL Detection
if ($is_live) {
    $base_url = "https://a-c-m-e.in/wealthGenius/";
} else {
    // Automatically detect local URL
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    
    // Get the current directory relative to the web root
    $script_path = $_SERVER['SCRIPT_NAME'];
    $project_folder = '/wealth-genius-new/'; // Standardize on the final folder name
    
    // Find where the project root is in the URL
    $pos = strpos($script_path, $project_folder);
    if ($pos !== false) {
        $base_path = substr($script_path, 0, $pos + strlen($project_folder));
    } else {
        // Fallback to existing manual check if folder name is different
        if (strpos($script_path, '/web/wealth-genius-new/') !== false) {
            $base_path = "/web/wealth-genius-new/";
        } else {
            // Last resort: current script's directory (excluding /resources/)
            $base_path = str_replace('\\', '/', dirname($script_path));
            $base_path = preg_replace('/\/resources$/', '', $base_path);
        }
    }
    
    $base_url = $protocol . $host . rtrim($base_path, '/') . '/';
}

// Ensure base_url ends with a slash
$base_url = rtrim($base_url, '/') . '/';

// 3. Database Credentials (Shared across systems)
if (!$is_live) {
    $DB_HOST = "localhost"; 
    $DB_USER = "root";      
    $DB_PASS = "";
    
    // Try to determine the correct database name
    $DB_NAME = "wealth_genius_new"; // Most likely given the folder name
} else {
    $DB_HOST = "srv1755.hstgr.io";
    $DB_USER = "u133917450_admin";      
    $DB_PASS = "wealthGenius-2026";
    $DB_NAME = "u133917450_wealthgenius";
}

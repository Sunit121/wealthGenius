<?php
header('Content-Type: text/plain');
echo "SERVER_NAME: " . ($_SERVER['SERVER_NAME'] ?? 'NOT SET') . "\n";
echo "SERVER_ADDR: " . ($_SERVER['SERVER_ADDR'] ?? 'NOT SET') . "\n";
echo "HTTP_HOST: " . ($_SERVER['HTTP_HOST'] ?? 'NOT SET') . "\n";
echo "DOCUMENT_ROOT: " . ($_SERVER['DOCUMENT_ROOT'] ?? 'NOT SET') . "\n";
echo "SCRIPT_FILENAME: " . ($_SERVER['SCRIPT_FILENAME'] ?? 'NOT SET') . "\n";
echo "__FILE__: " . __FILE__ . "\n";
echo "PHP_SAPI: " . php_sapi_name() . "\n";
?>

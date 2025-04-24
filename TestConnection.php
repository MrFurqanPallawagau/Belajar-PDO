<?php

$host = 'localhost'; // Database host
$port = '3306'; // Database port
$database = "belajar_php_database"; // Database name
$username = "shura";
$password = "parepare"; // Database password

try {
$connection = new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);
echo "Connection successful!". PHP_EOL;

$connection = null;
} catch (PDOException $exception) {
    echo "Connection failed: " . $exception->getMessage() . PHP_EOL;
}
<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$username = "admin";
$password = "admin"; // Example password

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$Statement = $connection->prepare($sql);
$Statement->execute([$username, $password]);

$success = false;
$find_user = null;
foreach ($Statement as $row) {
    $success = true;
    $find_user = $row['username'];
}

if ($success) {
    echo "User found: $find_user" . PHP_EOL;
} else {
    echo "User not found." . PHP_EOL;
}


$connection = null;
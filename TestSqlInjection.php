<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$username = $connection->quote("admin");
$password = $connection->quote("admin"); // Example password
$sql = "SELECT * FROM users WHERE username = $username AND password = $password";

$statement= $connection->query($sql);

$success = false;
$find_user = null;

foreach ($statement as $row){
  $success = true;
  $find_user = $row['username'];
}
if ($success) {
    echo "User found: $find_user" . PHP_EOL;
} else {
    echo "User not found." . PHP_EOL;
}

$connection = null;
<?php

function getConnection(): PDO
{
    $host = 'localhost'; // Database host
    $port = '3306'; // Database port
    $database = "belajar_php_database"; // Database name
    $username = "shura";
    $password = "parepare"; // Database password

    return new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);
}

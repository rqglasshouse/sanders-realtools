<?php

// Load environment variables
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();

// $host = $_ENV['DB_HOST'];
// $username = $_ENV['DB_USER'];
// $password = $_ENV['DB_PASS'];
// $database = $_ENV['DB_NAME'];


// $host = 'localhost';
// $username = 'root';
// $password = 'root';
// $database = 'usertestimport';

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = $_ENV['DB_HOST'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
$database = $_ENV['DB_NAME'];

// Create DB Connection
$con = mysqli_connect($host, $username, $password, $database);

// Check DB Connection
if (!$con) {
    die("Connection Failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully!";
}

?>

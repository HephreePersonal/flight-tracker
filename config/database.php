<?php
// Database configuration
$host = 'localhost'; // Database host
$dbname = 'hephreeair'; // Database name
$username = 'root'; // Database username
$password = 'VeryKnies23!'; // Database password

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle connection error
    echo "Connection failed: " . $e->getMessage();
}
?>
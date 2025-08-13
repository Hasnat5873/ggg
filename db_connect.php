<?php
// db_connect.php - Database Connection File

// Database configuration
$host = 'localhost'; // Change to your database host
$dbname = 'bibahabd'; // Change to your database name
$username = 'root'; // Change to your database username
$password = ''; // Change to your database password
$charset = 'utf8mb4'; // UTF-8 encoding for Bengali support

try {
    // Create DSN (Data Source Name)
    $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

    // PDO options for security and performance
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Throw exceptions on errors
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Fetch as associative arrays
        PDO::ATTR_EMULATE_PREPARES => false, // Use real prepared statements
    ];

    // Establish database connection
    $conn = new PDO($dsn, $username, $password, $options);

    // Set error reporting for debugging (remove in production)
    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);
} catch (PDOException $e) {
    // Log error to a file or system log in production
    // file_put_contents('error.log', $e->getMessage(), FILE_APPEND);
    die('Database connection failed: ' . htmlspecialchars($e->getMessage()));
}

// Make connection available globally (optional, depending on your needs)
global $conn;

?>
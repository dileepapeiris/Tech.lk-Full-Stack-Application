<?php
// Database connection settings
$dbhost = "localhost";  // Running locally
$dbuser = "root";       // Default XAMPP MySQL/MariaDB user
$dbpass = "";           // Default password (empty in XAMPP)
$dbname = "westminsterw2082094"; // Replace with your actual database name
$dbport = 3300;         // MariaDB is running on this port

// Create a database connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>

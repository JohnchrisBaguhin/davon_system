<?php
// Load environment variables
$servername = getenv('DB_HOST');
$username   = getenv('DB_USER');
$password   = getenv('DB_PASS');
$dbname     = getenv('DB_NAME');

// Check if all required environment variables are set
if (!$servername || !$username || !$password || !$dbname) {
    die("❌ Missing one or more DB environment variables.");
}

// Debug output
echo "Connecting to $servername with user $username<br>";

// Connect to MySQL without SSL
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("❌ Connection failed: " . mysqli_connect_error());
}

echo "✅ Successfully connected to the database!";
?>

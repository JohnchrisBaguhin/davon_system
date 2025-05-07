<?php
// Show environment variable values (for debugging)
echo "DB_HOST: " . getenv('DB_HOST') . "<br>";
echo "DB_USER: " . getenv('DB_USER') . "<br>";
echo "DB_PASS: " . getenv('DB_PASS') . "<br>";
echo "DB_NAME: " . getenv('DB_NAME') . "<br>";

// Load environment variables
$servername = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASS');
$dbname = getenv('DB_NAME');

// Check if all required environment variables are set
if (!$servername || !$username || !$password || !$dbname) {
    die("❌ Missing one or more DB environment variables.");
}

// Create connection
$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);

if (!mysqli_real_connect($conn, $servername, $username, $password, $dbname, 3306, NULL, MYSQLI_CLIENT_SSL)) {
    die("❌ Connection failed: " . mysqli_connect_error());
}

echo "✅ Successfully connected to the database!";
?>

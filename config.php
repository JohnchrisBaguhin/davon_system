<?php
// Load DB credentials from environment
$servername = getenv('DB_HOST');
$username   = getenv('DB_USER');
$password   = getenv('DB_PASS');
$dbname     = getenv('DB_NAME');

// Check if environment variables are set
if (!$servername || !$username || !$password || !$dbname) {
    die("❌ Missing one or more DB environment variables.");
}

// Create MySQLi connection
$conn = mysqli_init();

// Optional SSL (uncomment if needed)
// mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);

// Connect to the database
if (!mysqli_real_connect($conn, $servername, $username, $password, $dbname, 3306, NULL, MYSQLI_CLIENT_SSL)) {
    die("❌ Connection failed: " . mysqli_connect_error());
}

echo "✅ Successfully connected to the database.";
?>

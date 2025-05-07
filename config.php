<?php
// Safely get environment variables (supports getenv, $_ENV, $_SERVER)
function get_env_var($key) {
    return getenv($key) ?: ($_ENV[$key] ?? ($_SERVER[$key] ?? null));
}

// Load environment variables
$servername = get_env_var('DB_HOST');
$username   = get_env_var('DB_USER');
$password   = get_env_var('DB_PASS');
$dbname     = get_env_var('DB_NAME');



// Check if all required environment variables are set
if (!$servername || !$username || !$password || !$dbname) {
    die("❌ Missing one or more DB environment variables.");
}

// Show connection attempt
echo "Connecting to $servername with user $username<br>";

// Connect to MySQL (no SSL for SQLyog-style hosting)
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("❌ Connection failed: " . mysqli_connect_error());
}

echo "✅ Successfully connected to the database!";
?>

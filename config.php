<?php
// Remote Database connection
$servername = "192.185.48.158";
$username = "bisublar_k9";
$password = "k9Registration@2025";
$dbname = "bisublar_k9";

// Simple connection without SSL
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

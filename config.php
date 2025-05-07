<?php
// Supabase PostgreSQL credentials
$host = 'aws-0-ap-southeast-1.pooler.supabase.com';
$db   = 'postgres';
$user = 'postgres.mxgvexgdfrvsnsgdazbn';
$pass = 'ULpSLhzXgeLX9jXj'; // Use your actual password
$port = '6543';

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$db;";
    $conn = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    // Optional: echo "✅ Connected";
} catch (PDOException $e) {
    die("❌ Database connection failed: " . $e->getMessage());
}
return $conn;

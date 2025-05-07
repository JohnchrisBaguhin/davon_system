<?php
// Supabase PostgreSQL credentials
$host = 'aws-0-ap-southeast-1.pooler.supabase.com';
$db   = 'postgres';
$user = 'postgres.mxgvexgdfrvsnsgdazbn';
$pass = 'ULpSLhzXgeLX9jXj'; // replace with actual password
$port = '6543';

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$db;";
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    echo "✅ Successfully connected to Supabase PostgreSQL database.";
} catch (PDOException $e) {
    echo "❌ Database connection failed: " . $e->getMessage();
    exit;
}
?>

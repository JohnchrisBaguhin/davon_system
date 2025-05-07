<?php
session_start();
$conn = require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirmPassword']);

    if ($password !== $confirmPassword) {
        echo "<script>alert('Passwords do not match!'); window.location.href = 'register.html';</script>";
        exit();
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    try {
        // Prepare and execute PDO statement
        $stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (:username, :password, 'user')");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);

        if ($stmt->execute()) {
            echo "<script>alert('Registration successful!'); window.location.href = 'login.html';</script>";
        } else {
            echo "<script>alert('Registration failed.'); window.location.href = 'register.html';</script>";
        }
    } catch (PDOException $e) {
        echo "<script>alert('Error: " . $e->getMessage() . "'); window.location.href = 'register.html';</script>";
    }
} else {
    header("Location: index.html");
    exit();
}

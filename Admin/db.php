<?php
// db.php - Database connection & role-based session start

session_start(); // Start session for login management

$host = "localhost";
$user = "root";
$password = "";
$dbname = "tnpc";

try {
    // Create PDO connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $password);

    // Set PDO error mode
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Default fetch mode as associative array
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // echo "Connected successfully"; // Optional debug
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Function to check if user is logged in
function checkLogin() {
    if (!isset($_SESSION['user_id'])) {
        // Redirect to login if not logged in
        header("Location: login.php?message=Please+login+first");
        exit();
    }
}

// Function to check role (e.g., admin or student)
function checkRole($role) {
    if (!isset($_SESSION['role']) || $_SESSION['role'] != $role) {
        // Redirect if role doesn't match
        header("Location: unauthorized.php?message=Access+denied");
        exit();
    }
}
?>
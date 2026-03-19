<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login - TNPC</title>
<link rel="stylesheet" href="admin.css">
<link rel="stylesheet" href="../CSS/style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
<div class="login-wrapper">
    <div class="login-card">
        <h2>TNPC Admin</h2>
        <p>Login to your dashboard</p>
        <form action="login_process.php" method="POST">
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" class="custom-btn login-btn">
                Login
            </button>
        </form>
    </div>
</div>
</body>
</html>
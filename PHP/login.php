<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TNPC Admin Login</title>
<link rel="stylesheet" href="../Admin/admin.css">
<link rel="stylesheet" href="../CSS/style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

<div class="login-wrapper">
    <div class="login-card">
        <h2>TNPC Admin</h2>
        <p>Login to your dashboard</p>

        <form action="check_login.php" method="POST">

            <!-- Role Selection inline, same style -->
            <div class="role-selection" style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                <label>Select Role:</label>
                <input type="radio" name="role" value="admin" required> Admin
                <input type="radio" name="role" value="teacher"> Teacher
                <input type="radio" name="role" value="student"> Student
            </div>

            <!-- Username -->
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>

            <!-- Password -->
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <!-- Button -->
            <button type="submit" class="custom-btn login-btn">
                Login
            </button>

        </form>
    </div>
</div>

</body>
</html>
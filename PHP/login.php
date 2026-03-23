omm<!DOCTYPE html>
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

<div class="login-box">
<h3 class="text-center mb-3">Login</h3>

<form action="check_login.php" method="POST">

<!-- Role Selection -->
<div class="mb-3">
<label>Select Role:</label><br>

<input type="radio" name="role" value="admin" required> Admin<br>
<input type="radio" name="role" value="teacher"> Teacher<br>
<input type="radio" name="role" value="student"> Student

</div>

<input type="text" name="username" class="form-control mb-3" placeholder="Username" required>
<input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

<button class="btn btn-primary w-100">Login</button>

</form>
</div>

</body>
</html>
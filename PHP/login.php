<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body{
    background: linear-gradient(135deg,#0d6efd,#6ea8fe);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}
.login-box{
    background:#fff;
    padding:30px;
    border-radius:12px;
    width:350px;
    box-shadow:0 10px 30px rgba(0,0,0,0.2);
}
</style>
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
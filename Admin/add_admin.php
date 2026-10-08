<?php

include "db.php";

if(isset($_POST['submit'])){

$username = trim($_POST['username']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO admin(username,password) VALUES(?,?)");
$stmt->execute([$username, $password]);

header("Location: manage_admin.php");
exit();

}

?>

<h2>Add Admin</h2>

<form method="POST">

Username
<input type="text" name="username" required>

Password
<input type="password" name="password" required>

<button name="submit">Add Admin</button>

</form>

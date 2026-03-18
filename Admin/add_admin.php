<?php

include "db.php";

if(isset($_POST['submit'])){

$username=$_POST['username'];
$password=$_POST['password'];

mysqli_query($conn,"INSERT INTO admin(username,password)
VALUES('$username','$password')");

header("Location: manage_admin.php");

}

?>

<h2>Add Admin</h2>

<form method="POST">

Username
<input type="text" name="username">

Password
<input type="password" name="password">

<button name="submit">Add Admin</button>

</form>
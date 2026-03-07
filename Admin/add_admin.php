<?php
include "db.php";

if(isset($_POST['submit'])){

$username=$_POST['username'];
$password=$_POST['password'];

$query="INSERT INTO admin(username,password)
VALUES('$username','$password')";

mysqli_query($conn,$query);

header("Location: manage_admin.php");

}
?>

<h2>Add Admin</h2>

<form method="POST">

Username
<input type="text" name="username">

Password
<input type="password" name="password">

<button type="submit" name="submit">Add Admin</button>

</form>
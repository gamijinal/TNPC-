<?php
include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Admin</title>
</head>

<body>

<h2>Admin List</h2>

<a href="add_admin.php">Add New Admin</a>

<table border="1" cellpadding="10">

<tr>
<th>ID</th>
<th>Username</th>
<th>Action</th>
</tr>

<?php

$query="SELECT * FROM admin";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result)){

?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['username']; ?></td>

<td>

<a href="delete_admin.php?id=<?php echo $row['id']; ?>">Delete</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>
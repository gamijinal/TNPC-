<?php

include "db.php";

$result=mysqli_query($conn,"SELECT * FROM admin");

?>

<h2>Admin List</h2>

<a href="add_admin.php">Add Admin</a>

<table border="1">

<tr>
<th>ID</th>
<th>Username</th>
<th>Action</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['username']; ?></td>

<td>
<a href="delete_admin.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>

</tr>

<?php } ?>

</table>
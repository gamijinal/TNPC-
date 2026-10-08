<?php

include "db.php";

$rows = $conn->query("SELECT * FROM admin")->fetchAll();

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

        <?php foreach ($rows as $row) { ?>

            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo htmlspecialchars($row['username']); ?></td>

                <td>

                    <a href="delete_admin.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Delete this admin?')">Delete</a>

                </td>

            </tr>

        <?php } ?>

    </table>

</body>

</html>

<?php

include "db.php";

$id=$_GET['id'];

$query="DELETE FROM admin WHERE id='$id'";

mysqli_query($conn,$query);

header("Location: manage_admin.php");

?>
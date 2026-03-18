<?php

include "db.php";

$id=$_GET['id'];

mysqli_query($conn,"DELETE FROM admin WHERE id='$id'");

header("Location: manage_admin.php");

?>
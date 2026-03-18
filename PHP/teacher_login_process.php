<?php
session_start();
$conn = mysqli_connect("localhost","root","","your_db");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users 
        WHERE email='$email' 
        AND password='$password' 
        AND role='teacher'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

    $_SESSION['role'] = 'teacher';

    header("Location: teacher/dashboard.php");

}else{
    echo "Invalid Teacher Login";
}
?>
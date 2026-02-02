<link rel="stylesheet" href="style.css">

<?php
include 'db.php';

$id = $_POST['id'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];

mysqli_query($conn, "UPDATE users SET
firstname='$fname',
lastname='$lname',
email='$email'
WHERE id=$id");

header("Location: users_list.php");
?>

<link rel="stylesheet" href="style.css">
<?php
include 'db.php';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];

if ($pass != $cpass) {
    echo "Password not matched";
    exit;
}

$password = password_hash($pass, PASSWORD_DEFAULT);

$query = "INSERT INTO users (firstname, lastname, email, password)
VALUES ('$fname', '$lname', '$email', '$password')";

mysqli_query($conn, $query);

header("Location: users_list.php");
?>

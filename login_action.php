<link rel="stylesheet" href="style.css">

<?php
session_start();
include 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);

    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['firstname'];
        header("Location: dashboard.php");
    } else {
        echo "Invalid Password";
    }
} else {
    echo "User not found";
}
?>

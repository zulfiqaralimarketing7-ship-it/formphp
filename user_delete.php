<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}
include 'db.php';
?>
<?php
include 'db.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM users WHERE id=$id");

header("Location: users_list.php");
?>

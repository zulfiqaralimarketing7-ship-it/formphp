<link rel="stylesheet" href="style.css">

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
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id=$id"));
?>
<!DOCTYPE html>
<html>
<head><title>Edit User</title></head>
<body>

<form action="user_update.php" method="POST">
    <input type="hidden" name="id" value="<?= $data['id']; ?>">
    First Name: <input type="text" name="firstname" value="<?= $data['firstname']; ?>"><br><br>
    Last Name: <input type="text" name="lastname" value="<?= $data['lastname']; ?>"><br><br>
    Email: <input type="email" name="email" value="<?= $data['email']; ?>"><br><br>
    <button type="submit">Update</button>
</form>

</body>
</html>

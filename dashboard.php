<link rel="stylesheet" href="style.css">

<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Welcome <?= $_SESSION['user_name']; ?> 👋</h2>

<ul>
    <li><a href="users_list.php">Users List</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>

</body>
</html>

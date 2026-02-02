<link rel="stylesheet" href="style.css">

<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
}
include 'db.php';
?>

<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>
<div class="table-container">
<h2 style="text-align:center;">Users List</h2>
<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM users");
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['firstname']." ".$row['lastname']; ?></td>
    <td><?= $row['email']; ?></td>
    <td>
        <a href="user_edit.php?id=<?= $row['id']; ?>">Edit</a> |
        <a href="user_delete.php?id=<?= $row['id']; ?>">Delete</a>
    </td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>

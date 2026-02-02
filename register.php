<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <link rel="stylesheet" href="style.css">
<div class="container">
    <h2>Register</h2>

    <form action="register_action.php" method="POST"><br><br>
        <input type="text" name="firstname" placeholder="First Name" required><br><br>
        <input type="text" name="lastname" placeholder="Last Name" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <input type="password" name="cpassword" placeholder="Confirm Password" required><br><br>
        <button type="submit">Create Account</button>
    </form>
</div>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <title>Simple Login</title>
</head>
<body>
    <h2>Login Form</h2>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>



<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === '12345') {
        echo "Login successful!";
    } else {
        echo "Invalid credentials.";
    }
} else {
    echo "Please submit the form first.";
}
?>
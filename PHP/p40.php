<!DOCTYPE html>
<html>
<head>
    <title>Welcome Form</title>
</head>
<body>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["username"])) {
    $name = htmlspecialchars($_POST["username"]);
    echo "<h2>Welcome, $name!</h2>";
} else {
?>
    <form method="POST" action="">
        <label for="username">Enter your name:</label><br>
        <input type="text" id="username" name="username" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>
<?php
}
?>

</body>
</html>
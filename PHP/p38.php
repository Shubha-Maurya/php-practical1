<!DOCTYPE html>
<html>
    <head>
        <title>Sum Two Numbers</title>
    </head>
    <body>
        <h2>Enter Two Numbers</h2>
        <form action="sum.php" method="get">
            <label for="num1">Number 1:</label>
            <input type="number" name="num1" id="num1" required> <br><br>
            <label for="num2">Number 2:</label>
            <input type="number" name="mum2" id="num2" required> <br><br>
            <input type="submit" value="Calculate Sum">
        </form>
    </body>
</html>















<?php
if (isset($_GET['num1']) &&
isset($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    if (is_numeric($num1) &&
    is_numeric($num2)) {
        $sum = $num1 + $num2;
        echo "
        <h2>Sum of $num1 and $num2 is: $sum</h2>";
    }
    else {
        echo "<p>Please enter Valid numbers.</p>";
    }
 } else {
        echo "<p>Please provide both numbers in the URL sing GET method.</p>";
    }
?>
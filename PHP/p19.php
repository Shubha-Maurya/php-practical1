<?php
$name = "Shubha Maurya";
$roll = 101;
$maths = 85;
$science = 90;
$english = 78;

$total = $maths + $science + $english;
$percentage = $total / 3;
?>
<!DOCTYPE html>
<html>
<head><title>Marksheet</title></head>
<body>
<h2>Student Marksheet</h2>
<table border="1" cellpadding="5" cellspacing="0">
<tr><td>Name</td><td><?php echo $name; ?></td></tr>
<tr><td>Roll No</td><td><?php echo $roll; ?></td></tr>
<tr><td>Maths</td><td><?php echo $maths; ?></td></tr>
<tr><td>Science</td><td><?php echo $science; ?></td></tr>
<tr><td>English</td><td><?php echo $english; ?></td></tr>
<tr><td>Total</td><td><?php echo $total; ?></td></tr>
<tr><td>Percentage</td><td><?php echo round($percentage,2)."%"; ?></td></tr>
</table>
</body>
</html>
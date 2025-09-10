<?php
$numbers = array (10, 20, 30, 40, 50, 0,);
echo "Reverse order without using array_reverse():<br>";
for ($i = count($numbers) - 1; $i >= 0;  $i--) {
    echo $numbers[$i] . " ";
}
echo "<br><br>";
echo "Reverse order without using array_reverse():<br>";
$reversed = array_reverse($numbers);
foreach ($reversed as $value) {
    echo $value . " ";
}
?>
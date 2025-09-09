<?php
$numbers = array(10, 20, 30, 40, 50);
$sum = 0;
foreach ($numbers as $num){
    $sum += $num;
}
echo "Numbers in the Array:<br>";
foreach ($numbers as $index => $value){
    echo "Index => $value<br>";
}
echo "<br>sum of all numbers = " . $sum;
?>
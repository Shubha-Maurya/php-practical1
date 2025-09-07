<?php

$array = array(45, 12, 78, 34, 89, 23, 67, 1, 90, 56);

echo "Original Array:<br>";
print_r($array);
echo "<br><br>";

// 1. sort() - Ascending order (by values)
$temp = $array;
sort($temp);
echo "After sort() (Ascending by value):<br>";
print_r($temp);
echo "<br><br>";

// 2. rsort() - Descending order (by values)
$temp = $array;
rsort($temp);
echo "After rsort() (Descending by value):<br>";
print_r($temp);
echo "<br><br>";

// 3. asort() - Ascending order (preserve keys)
$temp = $array;
asort($temp);
echo "After asort() (Ascending by value, keys preserved):<br>";
print_r($temp);
echo "<br><br>";

// 4. arsort() - Descending order (preserve keys)
$temp = $array;
arsort($temp);
echo "After arsort() (Descending by value, keys preserved):<br>";
print_r($temp);
echo "<br><br>";

// 5. ksort() - Ascending order by keys
$temp = $array;
ksort($temp);
echo "After ksort() (Ascending by key):<br>";
print_r($temp);
echo "<br><br>";

// 6. krsort() - Descending order by keys
$temp = $array;
krsort($temp);
echo "After krsort() (Descending by key):<br>";
print_r($temp);
echo "<br><br>";

?>
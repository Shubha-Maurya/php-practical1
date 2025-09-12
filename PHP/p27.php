<?php
$numbers = array(25, 37, 10, 75, 6);
echo "<b>Original Array:</b><br>";
foreach ($numbers as $num){
    echo $num . " ";
}
echo "<br><br>";
sort($numbers);
echo "<b>Array in Ascending Order (using sort()):</b><br>";
foreach ($numbers as $num){
    echo $num . " ";
}
echo "<br><br>";
rsort($numbers); 
    echo "<b>Array in Ascending Order (using sort()):</b><br>";
    foreach ($numbers as $num){
    echo $num . " ";
}
?>
<?php
$students = array(
    "Shubha" => 90,
    "Shivani" => 85,
    "Kamna" => 78,
    "Anchal" => 88,
    "priyashu" => 92
);
$students["Kamna"] = 82;
foreach ($students as $name => $marks) {
    echo $name . " : " . $marks . "<br>";
}
?>
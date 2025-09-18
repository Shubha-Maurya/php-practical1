<?php
$students = array (
    "Anchal" =>85,
    "kamna" => 78,
    "shubha" => 92,
    "Shivani" => 88,
    "Anjali" => 76
);
$students["Kamna"] =90;
echo "Updated Students Marks: <br>";
foreach ($students as $name => $marks) {
    echo $name . " => " . $marks . "<br>";
}
?>

<?php
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "France" => "Paris",
    "Japan" => "Tokyo",
    "Australia" => "Canberra"
);
$capital = "Paris";
$country = array_search($capital,$countries);
if ($country !== false) {
    echo "The capital city '$capital'belongs to: $country";
}
else{
     echo "The capital city '$capital' was not found in the list";
}
?>
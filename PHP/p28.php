<?php
$numbers = array(10, 20, 30, 40, 50);
$search = 30;
if (in_array($search, $numbers)){
    echo "The value $search exists in the array."; 
}
else {
    echo "The value $search does not exists in the array."; 
}
?>
<?php
if (isset($_GET['name'])) {
    $name =
    htmlspecialchars($_GET['name']);
      echo"Hello, " . $name;  
}
else{
    echo "Hello, Guest";
}
?>
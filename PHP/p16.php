<?php
echo "<h3>for loop</h3>";
for ($i = 1; $i<= 20; $i++) {
    echo $i . " ";
}

echo "<h3>while loop</h3>";
 $i = 1;
        while ($i <= 20) {
          echo $i . " ";
          $i++;
        }

        echo "<h3>do…while loop</h3>";
        $i = 1;
        do {
          echo $i . " ";
          $i++;
        } while ($i <= 20);
?>


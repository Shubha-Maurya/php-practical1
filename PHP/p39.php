  <!DOCTYPE html>
  <html>
    <head>
        <title>Marks Form</title>
    </head>
    <body>
        <h2>Enter Your Marks</h2>
        <form action="result.php" method="get">
            <label for="marks">Marks:</label>
            <input type="number" name="marks" id="marks" required> 
            <input type="Submit" value="Check Result">
        </form>
    </body>
  </html> 
   
   
<?php
if(isset($_GET['marks'])) {
    $marks = (int) $_GET['marks'];
    if ($marks >= 40) {
        echo "PASS";
    }
    else {
        echo "FAIL";
    }
}else {
       echo "No marks provided.";  
    }
?>
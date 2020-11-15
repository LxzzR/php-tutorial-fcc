<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP For Loops</title>
</head>
<body>
  <h1>PHP For Loops</h1>
  <?php
    
    for ($index = 1; $index <= 5; $index++) {
      echo "index: $index <br>";
      echo "<p>Hello World!</p>";
    }

    $luckyNumbers = array(4, 8, 14, 16, 23, 42);

    for ($i = 0; $i <= count($luckyNumbers); $i++) {
      echo "$luckyNumbers[$i] <br>";
    }
  ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP While Loops</title>
</head>
<body>
  <h1>PHP While Loops</h1>
  <?php
    // while Loops 
    $index = 1;
    while($index <= 10) {
      echo "$index";
      echo "<br>";
      $index++;
    }

    // Do While Loops
    $index2 = 6;
    do {
      echo "index 2: $index2 <br>";
      $index2++;
    } while ($index2 <= 5);
  ?>
  
</body>
</html>
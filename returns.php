<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Return Statements</title>
</head>
<body>
  <h1>Return Statements</h1>
  <?php
    function cubeNum($num) {
      return $num * $num * $num;
    }

    $cubeResult = cubeNum(4);

    echo "<h3>4 cubed is: $cubeResult</h3>"
  ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Comparason</title>
</head>
<body>
  <h1>PHP Comparason</h1>
  <?php
    $num1 = 40;
    $num2 = 180;

    echo "Using the Max function, the biggest number between 40 and 18 is: ", max(40, 18);

    function getMax($num1, $num2, $num3) {
      if ($num1 >= $num2 && $num1 >= $num3) {
        return "$num1 is the larger number";
      } elseif ($num2 >= $num1 && $num2 >= $num3) {
        return "$num2 is the larger number";
      } else {
        return "$num3 is the larger number";
      }
    }

    echo "<br> Using a conditional function, ", getMax($num1, $num2, 300);
  ?>
</body>
</html>
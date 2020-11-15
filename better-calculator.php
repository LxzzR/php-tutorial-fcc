<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Better Calculator</title>
</head>
<body>
  <h1>A Fully Functional PHP Calculator</h1>
  <!-- HTML limits numbers to whole numbers unless we add the step with decimal values -->
  <form action="better-calculator.php" method="post">
    First Num: <input type="number" step="0.01" name="num1"><br>
    Operator: <input type="text" name="op"><br>
    Second Num: <input type="number" name="num2"><br>
    <input type="submit" value="Submit">
  </form>

  <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if ($op == "+") {
      echo $num1 + $num2;
    } elseif ($op == "-") {
      echo $num1 - $num2;
    } elseif ($op == "/" || $op == "%") {
      echo $num1 / $num2;
    }  elseif ($op == "*" || $op == "x") {
      echo $num1 * $num2;
    } else {
      echo "Invalid Operator";
    }
  ?>

</body>
</html>
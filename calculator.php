<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple PHP Calculator</title>
</head>
<body>
  <h1>Simple PHP Calculator!</h1>
  <form action="calculator.php" method="get">
    <label for="num1">Num1</label>
    <input type="number" name="num1" id="num1">
    <label for="num2">Num2</label>
    <input type="number" name="num2" id="num2">
    <input type="submit" value="Submit">
  </form>

  <?php 
    echo "<h3>Your total is: ", $_GET["num1"] + $_GET["num2"],"</h3>";
  ?>
</body>
</html>
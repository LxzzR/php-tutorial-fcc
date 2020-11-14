<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Functions</title>
</head>
<body>
  <h1>PHP Functions</h1>

  <?php
    function sayHi($name, $adjective) {
      echo "Hello $name. You're so $adjective! <br>";
    }
    sayHi("Lizz", "beautiful");
    sayHi("Sine", "clever");
    sayHi("Oscar", "hilarious");
  ?>

</body>
</html>
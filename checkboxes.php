<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP checkboxes + arrays</title>
</head>
<body>
  <h1>PHP Checkboxes + Arrays</h1>
  <form action="checkboxes.php" method="post">
    Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
    Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
    Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
    Chrries: <input type="checkbox" name="fruits[]" value="cherries"><br>
    <input type="submit" value="Submit">
  </form>

  <?php
    $fruits = $_POST["fruits"];
    echo "<h2>$fruits[0]</h2>";
  ?>
</body>
</html>
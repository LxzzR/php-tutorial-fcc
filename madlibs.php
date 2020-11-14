<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mad Libs!</title>
</head>
<body>
  <h1>PHP Mad Libs!</h1>
  <form action="madlibs.php" method="get">
    <!-- Colour -->
    <label for="color">Choose a colour:</label>
    <input type="text" name="color" id="color">
    <br>
    <!-- Plural Noun -->
    <label for="plurNoun">Choose a plural noun:</label>
    <input type="text" name="plurNoun" id="plurNoun">
    <br>
    <!-- Celebrity Name -->
    <label for="name">Choose a celebrity name:</label>
    <input type="text" name="name" id="name">
    <br>
    <input type="submit" value="Submit">
  </form>

  <!-- PHP -->
  <?php
    $color = $_GET["color"];
    $plurNoun = $_GET["plurNoun"];
    $name = $_GET["name"];

    echo "<h3>Roses are $color <br>";
    echo "$plurNoun are blue <br>";
    echo "I love $name </h3>";
  ?>
</body>
</html>
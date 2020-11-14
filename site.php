<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My first PHP file!</title>
</head>
<body>
  <?php 
    $characterName = "Lizz";
    $characterAge = 32;
    echo "<h1>$characterName's PHP Site</h1>";
    echo "<p>Hello world, this is my first PHP file!</p>";
    echo "<hr>";
    echo "<p>The once was a man named $characterName</p>";
    echo "<p>He was $characterAge years old</>";
    $characterName = "Mike";
    echo "<p>He really liked the name $characterName</p>";
    echo "<p>But he didn't like beind $characterAge<p/>";
  ?>
</body>
</html>
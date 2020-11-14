<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Input</title>
</head>
<body>
<h1>Getting User Input!</h1>
<p>Here we use a form that acts as the middle man between our HTML PHP</p>
  <form action="userinput.php" method="get">
    <label for="name">Name:</label>
    <input type="text" name="username" id="name" />
    <label for="age">Age:</label>
    <input type="text" name="age" id="age" />
    <input type="submit"></button>
  </form>
  <p>Your name is:
  <?php
    echo $_GET["username"];
  ?></p>
  <p>Your age is:
  <?php
    echo $_GET["age"];
  ?></p>
</body>
</html>
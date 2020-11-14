<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>URL Parameters</title>
</head>
<body>
  <h1>URL Params!</h1>
  <p>We can store information inside of the URL, but it's not very secure. All the information in the URL is visible in the URL - we can use post in place of get in our form attributes!</p>
  <form action="urlparams.php">
  <label for="name">Name:</label>
  <input type="text" name="name" id="name">
  <input type="submit" value="Submit">
  </form>

  <?php
    echo "<h3>", $_GET["name"], "</h3>";
    // We can pass this value into the URL, for example &age=70
    echo $_GET["age"];
  ?>
</body>
</html>
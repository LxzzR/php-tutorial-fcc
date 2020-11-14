<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post vs Get</title>
</head>
<body>
  <h1>Post vs Get</h1>
  <p>Differences between post and get in the HTML form "method" attribute with PHP</p>
  <p>Post is more secure and protects user information like passwords</p>
  <p>Get is great if we want to store information inside the URL</p>
  <form action="post-vs-get.php" method="post">
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <input type="submit" value="Submit">
  </form>

  <?php
    echo $_POST["password"];
  ?>
</body>
</html>
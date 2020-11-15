<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Including PHP files in PHP</title>
</head>
<body>
  <h1>Including PHP files in PHP</h1>
  <?php
    $title = "My first Article!";
    $author = "Lizz Rennie";
    $wordCount = 400;
    include "header.html";
    include "article-header.php";
    include "useful-tools.php";
    include "footer.html";

    echo $feetInMiles, "<br>";
    sayHi("Lizz");
  ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP If Statements</title>
</head>
<body>
  <h1>PHP If Statements</h1>

  <?php
    // Variables
    $isWhale = true;
    $isTall = false;

    // If Statement ===, ==, !=, !== || and && all work here! 
    if ($isWhale && $isTall){
      echo "You are a VERY TALL WHALE!";
    } elseif ($isWhale && !$isTall) {
      echo "You are NOT a very tall whale!";
    } else {
      echo "Something Else!";
    }
  ?>
</body>
</html>
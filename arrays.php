<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Arrays</title>
</head>
<body>
  <h1>PHP Arrays</h1>
  <h2>Store large groups of values!</h2>
  <?php
    $friends = array("Kevin", "Karen", "Oscar", "Jim");
    echo $friends[0], " ", $friends[1], " ", $friends[2], " ", $friends[3];
    // Change an array value using indexs
    $friends[1] = "Dwight";
    echo "<br>";
    echo $friends[1];
    // Use index to add to an array 
    $friends[4] = "Angela";
    echo "<br>";
    echo $friends[4];
    echo "<br>";
    // Finds how many items are in the array
    echo count($friends);
  ?>
</body>
</html>
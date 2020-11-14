<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strings</title>
</head>
<body>
  <?php
    $phrase = "<p>This string is saved to the phrase variable</p>";
    $name = "Lizz";
    echo "This is a pure plain text string";
    echo $phrase;
    // String to lowercase
    echo strtolower($phrase);
    // String to uppercase
    echo strtoupper($phrase);
    // Find the length of a string
    echo strlen($phrase);
    // Find a character in a string using an index
    echo $phrase[3];
    echo "Lizz"[2];
    $name[0] = "F";
    echo $name;
    echo str_replace("Fizz", "Slizz", $name);
    echo $name;
    echo substr($phrase, 3, 4);
  ?>

</body>
</html>
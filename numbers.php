<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Numbers</title>
</head>
<body>
  <?php
    echo "Whole Number Integer: ";
    echo 12345;
    echo "<br>";
    echo "Floating point number: ";
    echo 22.99;
    echo "<br>";
    echo "Negative integers and floats: ";
    echo -55.33;
    echo "<br>";
    echo "Math Operations: ";
    echo "4 + 9 || 4 - 3 || 3 * 3 | 10 / 2 || 10 % 5";
    echo "<br>";
    echo "You can do math with variables, and ++ += -= and -- all work here";
    echo "<br>";
    echo "absolute value = abs(-100) would = 100";
    echo "<br>";
    // First number to the power of the second
    echo pow(2, 4);
    echo "<br>";
    // Gets the largest of two numbers
    echo max(2, 10);
    echo "<br>";
    // Rounds a number up or down according to standard rounding rules 
    echo round(3.22);
    echo "<br>";
    // Always rounds a number UP
    echo ceil(3.3);
    echo "<br>";
    // Always rounds a number DOWN
    echo floor(3.9);
    echo "<br>";
    echo "There are dozens of math functions you can easily look up php math functions!"
  ?>
</body>
</html>
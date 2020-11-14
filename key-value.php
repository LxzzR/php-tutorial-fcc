<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Asscociative Arrays | Key Value Pairs</title>
</head>
<body>
  <h1>Associative Array | Key Value Pairs</h1>
  <form action="key-value.php" method="post">
    <label for="student">Student:</label>
    <input type="text" name="student" id="student">
    <input type="submit" value="Submit">
  </form>

  <?php
    $grades = array("Jim"=>"A+", "Lizz"=>"A+", "Pam"=>"B-", "Dwight"=>"C+");
    echo "Jim: ", $grades["Jim"], "<br>";
    echo "Lizz: ", $grades["Lizz"], "<br>";
    echo "Pam: ", $grades["Pam"], "<br>";
    echo "Dwight: ", $grades["Dwight"], "<br>";
    $grades["Jim"] = "F";
    echo "Jim Cheated: ", $grades["Jim"], "<br>";
    echo $grades[$_POST["student"]];
  ?>
</body>
</html>
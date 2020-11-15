<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Switch Statements</title>
</head>
<body>
  <h1>Switch Statements</h1>
  <form action="switch.php" method="post">
    What was your grade?
    <input type="text" name="grade">
    <input type="submit" value="Submit">
  </form>

  <?php 
    $grade = $_POST["grade"];
    echo "<h3>Your grade was: $grade</h3>";

    switch($grade) {
      case "A":
        echo "<p>Well done! You did amazing<p>";
        break;
      case "B": 
        echo "You did alright!";
        break;
      case "C":
        echo "You can do better next time!";
        break;
      case "D": 
        echo "You need some help, come see the teacher!";
      default:
        echo "Please enter a valid grade (A, B, C, D)";
    } 
  ?>
</body>
</html>
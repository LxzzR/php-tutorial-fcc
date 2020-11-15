<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Inheritance</title>
</head>
<body>
  <h1>Inheritance</h1>
  <?php
    class Chef {
      function makeChicken(){
        echo "The chef makes some chicken. <br>";
      }
      function makeRibs(){
        echo "The chef makes some BBQ ribs. <br>";
      }
      function makeSpecial(){
        echo "The chef makes a special dish. <br>";
      }
    }

    class ItalianChef extends Chef {
      function makePasta() {
        echo "The chef makes pasta <br>";
      }
      function makeSpecial() {
        echo "The chef makes Pizza <br>";
      }
    }

    $chef = new Chef();
    $chef->makeChicken();

    $italianChef = new ItalianChef();
    echo "Italian chef: ", $italianChef->makeChicken();
    echo "Italian chef: ", $italianChef->makeSpecial();
    echo "Italian chef: ", $italianChef->makePasta();
  ?>
</body>
</html>
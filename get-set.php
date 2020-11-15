<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Getters and Setters</title>
</head>
<body>
  <h1>Getters and Setters</h1>
  <?php

    // Class
    class Movie {
      public $title;
      private $rating;

      function __construct($title, $rating) {
        $this->title = $title;
        $this->setRating($rating);
      }

      function getRating() {
        return $this->rating;
      }

      function setRating($rating) {
        if ($rating == "G" || $rating == 
        "PG" || $rating == "PG-14" || $rating == "R") {
          $this->rating = $rating;
        } else {
          $this->rating = "NR";
        }
      }
    }

    // Object
    $avengers = new Movie("Avengers", "PG-12");
    $avengers->setRating("PG-14");

    echo $avengers->title, " rating : ", $avengers->getRating();

  ?>
</body>
</html>
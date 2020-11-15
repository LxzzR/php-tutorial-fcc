<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Constructors PHP</h1>
  <?php 

    class Movie {
      var $title;
      var $genre;
      var $decade;
      function __construct($aTitle, $aGenre, $aDecade){
        $this->title = $aTitle;
        $this->genre = $aAuthor;
        $this->decade = $aPages;
      }
    }

    $movie1 = new Movie("Clueless", "Comedy", "The 90's");
    $movie2 = new Movie("Scream", "Horror", "The 00's");

    echo $movie1->title;

    echo "<br>", $movie2->title;
  ?>
</body>
</html>
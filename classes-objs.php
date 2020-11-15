<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Classes and Objects</title>
</head>
<body>
  <h1>PHP Classes and Objects</h1>

  <?php

    // Creates the Book class - a template for what's inside
    class Book {
      var $title;
      var $author;
      var $genre;
      var $pages; 
    }

    // This is an object, an instance of a class that's filled with data
    $book1 = new Book;
    $book1->title = "Harry Potter";
    $book1->author = "JK Smelling";
    $book1->genre = "Young Adult";
    $book1->pages = 568;

    $book2 = new Book;
    $book2->title = "Lord of The Rings";
    $book2->author = "Tolkien";
    $book2->genre = "Fantasy";
    $book2->pages = 968;

    echo $book1->title, "<br>";
    echo $book1->author, "<br>";
    echo $book1->genre, "<br>";
    echo $book1->pages, "<br>";
    
    echo "<hr>";

    echo $book2->title, "<br>";
    echo $book2->author, "<br>";
    echo $book2->genre, "<br>";
    echo $book2->pages, "<br>";
  ?>
</body>
</html>
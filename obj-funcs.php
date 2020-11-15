<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Object Functions</title>
</head>
<body>
  <h1>Object Functions</h1>
  <?php

    class Student {
      var $name;
      var $major;
      var $gpa;
      // Constructor Func
      function __construct($name, $major, $gpa) {
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
      }

      function hasHonors() {
        if ($this->gpa >= 3.5) {
          return "true";
        } else {
          return "false";
        }
      }
    }

    $student1 = new Student("Jim", "Business", 2.8);
    $student2 = new Student("Pam", "Art", 3.6);

    echo "<p>$student1->name has honors? ", $student1->hasHonors(), "</p>";
    echo "<p>$student2->name has honors? ", $student2->hasHonors(), "</p>";
  ?>
</body>
</html>
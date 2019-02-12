<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>::)</title>
    <style media="screen">
      img {
        height: 400px;
        width: 400px;
        border-style: solid;
        border: 10px;
      }
    </style>
  </head>
  <body>
    <?php
    define("ROZ", 5);
    $a = ROZ;
      for ($y=0; $y < 5 ; $y++) {
        for ($x=0; $x < $a; $x++) {

          echo "<img src='brick.jpg' alt='aaa'>";
        }
            $a--;
          echo "<br>";
      }
    ?>
  </body>
</html>

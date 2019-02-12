<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>::)</title>
    <style media="screen">
      .b {
        text-align: center;
      }
      img {
        width: 400px;
        height: 400px;
        display: inline-block;
      }
    </style>
  </head>
  <body>
   <div class="b">
    <?php
    $a = 1;
      for ($y=0; $y < 5; $y++) {
       for ($x=0; $x < $a; $x++) {
        ?> <img src='brick.jpg' alt='aaa'> <?php
        }
          $a++;
          echo "<br>";
      }
    ?>
      </div>
  </body>
</html>

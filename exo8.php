<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $boucle = 200;
      $diviser = 12;

    while ($boucle > 0) {
      $boucle -= $diviser;
      echo $boucle . ':  Enfin !!!!' . '</br>';
    }
    ?>
  </body>
</html>

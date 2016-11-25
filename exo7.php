<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $boucle = 1;
      $multiple = 15;

    while ($boucle < 100) {
      $boucle += $multiple;
      echo $boucle . ':  On tient le bon bout' . '</br>';
    }
    ?>
  </body>
</html>

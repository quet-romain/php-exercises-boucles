<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $nombre = 1;
      $nombredm = $nombre / 2;

      while ($nombre < 10) {
        $nombre += $nombredm;
        echo $nombre . '</br>';
      }
    ?>
  </body>
</html>

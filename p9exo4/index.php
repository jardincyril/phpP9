<?php
$date = new DateTime('2016-08-02 15:00:00');
$today = new DateTime();
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>exo4</title>
  </head>
  <body>
    <p><?php echo $today->getTimestamp(); ?></p>
    <p><?php echo $date->getTimestamp(); ?></p>
  </body>
</html>

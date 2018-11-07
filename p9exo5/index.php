<?php
$date = new DateTime('2016-05-16');
$today = new DateTime();
$interval = $date->diff($today);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>exo5</title>
  </head>
  <body>
    <p><?php echo $interval->format('%R%a') . ' Jours'; ?></p>
  </body>
</html>

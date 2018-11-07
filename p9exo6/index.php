<?php
$numberOfDays = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>exo6</title>
  </head>
  <body>
    <p>
      <?php
      echo $numberOfDays
      ?>
    </p>
  </body>
</html>

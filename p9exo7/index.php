<?php
$date = strtotime('+20 days')
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>exo7</title>
    </head>
    <body>
        <p>
            <?php
            echo date('d-m-Y', $date)
            ?>
        </p>
    </body>
</html>

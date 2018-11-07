<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>exo3</title>
  </head>
  <body>
    <p>
      <?php
      //pour affiche la date en français au lieu de l'afficher en anglais
      setlocale(LC_TIME, 'fr_FR.utf8');
      //affiche une date par exemple:(mardi 10 juin 2018)
            echo strftime('%A %d %B %Y');
      ?>
    </p>
  </body>
</html>

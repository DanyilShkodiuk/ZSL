  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Dołączanie plików</title>
    </head>
    <body>
      Początek pliku
      <?php
      include '3_1_file.php';
      include_once '3_1_file.php';

      echo "<br>Require<br>";
      require '3_1_file.php';
      require_once '3_1_file.php';
       ?>
      Koniec pliku
    </body>
  </html>

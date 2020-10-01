<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>zadanie 1</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <p id="catalog_info">Dane katalogowe:</p>
    <?php
      include 'imie_nazwisko/imie.php';
      include 'imie_nazwisko/nazwisko.php';
      echo "Imie:$name".'<br>';
      echo "Nazwisko:$nazwisko";
     ?>
  </body>
</html>

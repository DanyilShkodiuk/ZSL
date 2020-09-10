<!DOCTYPE html>
<html lang=pl dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zmienne</title>
  </head>
  <body>
    <?php
    $name='Janusz';
    $surname='Nowak';
    echo 'Imię: $name<br>'; //dla tekstu
    echo "Imię: $name<br>"; // dla przemiennych
    //konkatenacja .
    echo "Nazwisko: $surname".'<hr>';

//Typy dannych
//boolean


$prawda = true; //1
$fałsz = false; //nic nie wyświetli

//integer


$bin = 0b1010; //10
$oct = 010; //8
$dec = 20; //20
$hex = 0xB; //11

echo $hex,'<hr>';

//składnia heredoc

$name = 'Krystyna';
$surename='Janusz';
$text = <<< ETYKIETA
Imię:$name,<br>
Nazwisko:$surename,<br>
ETYKIETA;

      echo $text;

      echo <<< E
      Heredoc 2<br>
      Imię: $name<hr>
      E;

      //składnia nowodoc
      echo <<< 'E'
      Nowodoc<br>
      Imię: $name<hr>
      E;

      $city='Poznan';
      echo "Nazwa zminnej: \$city,
      wartość:$city"
     ?>
  </body>
</html>

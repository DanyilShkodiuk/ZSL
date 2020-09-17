<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>try.php</title>
  </head>
  <body>
    <?php
    //"$"-переменнная
    $name = 'Jan';
    $surename = 'Nowak';
    //'' для текста 
    echo 'Imię: $name<br>';
    echo 'Nazwisko: $surename<br>';
    // "" для переменных
    echo "Imię: $name<br>";
    echo "Nazwisko: $surename<hr>";
    //'.' конкатинация
    $k = '"." oznacza konkatenacje';
    echo "$k".'<hr>';
    //Typy dannych
    //boolean
    $prawda = true;
    $falsz = false;
    echo "To jest:$prawda - czyli prawda.".'<br>';
    echo "Tutaj:$falsz(nic) - więc falsz.".'<hr>';
    //integer
    $bin = 0b1010;
    echo "liczba binarna:$bin".'<br>';
    $oct = 010;
    echo "liczba ósemkowa:$oct".'<br>';
    $dec = 20;
    echo "liczba dzieśiętna:$dec".'<br>';
    $hex = 0xB;
    echo "liczba szestnastkowa:$hex".'<hr>';
    /*heredoc - код определяеться как обычно.
    Удобен для работы с большим количестом Кода.*/
    $lol_peremennaja = 'kek';
    $kek_peremennaja = 'lol';
    echo <<< E
    Kek: $lol_peremennaja <br>
    Lol: $kek_peremennaja <hr>
    E;
    /*nowdoc - код определяеться прямо.
    Удобен для работы с большим количеством текста*/
    $text_one = 'text one';
    $text_two = 'text two';
    echo <<<'TEXT'
    $text one <br>
    $text two <hr>
    TEXT;
     ?>
  </body>
</html>

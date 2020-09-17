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
    ////////////////////////////////////////////////////////////////////////////////////////////////
    //Показывает версию PHP
    echo'"PHP_VERSION","phpinfo()."'.'<hr>';
    //Арифметические операторы
    $dod = 8 + 2;
    $od = 8 - 2;
    $mno = 8 * 2;
    $dzie = 8 / 2;
    $pot =2 ** 8;
    echo "8 + 2 = $dod.".'<br>';
    echo "8 - 2 = $od.".'<br>';
    echo "8 * 2 = $mno.".'<br>';
    echo "8 / 2 = $dzie.".'<br>';
    echo "(2)^8 = $pot.".'<hr>';
    /* Если ставить"," после каждого значения -
    это перечисление.
    Если ставить"." после каждого значения -
    это сумирование.*/
    echo <<< 'ПиС'
    Это перечисление: echo'a','b','c'<br>
    Это сумирование: echo 'a'.'b'.'c'<hr>
    ПиС;
    //operatory bitowe
    // and &, or /, xor ^, not ~, <<, >>
    $x = 0b1010;
    /*echo "<hr>$x<br>";*/
    $x = $x >> 0;
    echo "$x".'<br>';
    $x = $x << 1;
    echo "$x".'<br>';
    //
    $x = 10;
    $y = 20;
    echo $x <=> $y;
    $result = $x <=> $y;
    echo $result;
    ////////////////////////////////////////////////////////////////////////////////////////////////////
    $x = 1;
    $y = 1.0;

    if ($x == $y) {
      echo 'Zmienne są równe'.'<br>';
    } else {
      echo 'Zmienne są różne:'.'<br>';
    }

    echo gettype ($x).'<br>';
    echo gettype ($y).'<br>';

    /*
    preinkrementacja ++$x
    predekrementacja --$x
    posinkrementacja $x++
    postinkrementacja $x--
    */
    $x=1;
    $x=$x++;
    echo $x;
    $x=++$x;
    echo $x;
    $y=$x++;
    echo $x;
    echo $y;
    $y=++$x * 2 - 1;
    echo $x;
    echo $y.'<br>';

    $x = 2;
    echo $x++; //2 ->3
    echo ++$x; //3 -> 4
    echo$x; // 4
    $y=$x++;
    echo $y;//4
    $y=++$x;
    echo $y;//6
    echo ++$y;//6 -> 7

    //operatory rzutowania
    //bool,int,float,string,array,object,unset

    $test='123abc';
    $test1=0;
    $test2=20;
    echo '<hr>Typ dannych $test: ',gettype($test);
    $x=(int)$test;
    echo "<hr>$x<br>";
    echo 'Typ danych $x: ',gettype($x);
         ?>
      </body>
    </html>

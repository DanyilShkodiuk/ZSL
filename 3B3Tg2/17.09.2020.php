<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>17.09.20</title>
  </head>
  <body>
    <?php
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

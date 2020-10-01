<?php
  $text = <<< T
    zsl - Zespół
    Szkół
    Łączności<br>
  T;

  echo $text;
  echo nl2br($text);

  $name = 'jaNusZ';

  //zamiana na małe litery
  $name = strtolower($name); //janusz
  echo "$name".'<br>';

  //zamiana na duże litery
  $name = 'krYstYnA';
  echo strtoupper($name).'<br>';//KRYSTYNA

  //zamiana pierwszej litery na dużą

  $name = "aNNa noWaK";
  echo ucfirst($name).'<br>'; //ANNa noWaK

  //zamiana wszystkich pierwszych liter na duże

  $name = "aNNa noWaK";
  echo ucwords($name).'<br>'; // ANNa NoWaK

  //Anna Nowak
    $name = "aNNa noWaK";
    echo ucwords(strtolower($name)).'<br>';

  //lorem ipsum
  $lorem = <<<LOREM
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  <br>
  LOREM;

  echo "$lorem".'<br>';
  $col = wordwrap($lorem,40,'<hr>');
  echo "$col";

  $col = wordwrap($lorem,40,'<br>');
  echo "$col";

  //czyszczenie wartosci bufora
  ob_clean();

  //usuwanie bialych znakow
  $name = 'Anna';
  $name1 = '  Anna ';
  echo 'Długość $name; ',strlen($name).'<br>'; //4
  echo 'Długość $name; ',strlen($name1); //7

  echo strlen(ltrim($name1)); //5
  echo strlen(rtrim($name1)); //6
  echo strlen(trim($name1)); //4

  echo strlen($name1);//7
  $name1 = trim($name1);
  echo strlen($name1);

  //przeszukiwanie ciągów znaków
  $address = "Poznań, ul. Polna 2, tel. (61) 123-45-67";
  $search = strstr($address, 'tel');
  echo "<br>$search<br>"; //(61) 123-45-67

  $address = "Poznań, ul. Polna 2, tel. (61)123-45-67";
  $search = strstr($address, 'tel', true);
  echo '<br>Długość $search: ',strlen($search); //22 znaki (polskie znaki x2)
  echo "<br>$search<br>"; //Poznań, ul. Polna 2

  $address = "Poznań, ul. Polna 2, tel. (61) 123-45-67";
  $search = stristr($address, 'Tel');
  echo "<br>$search<br>"; //stristr - nie zwraca uwagi na wielkość liter np. 'Tel' tutaj.

  echo strstr('zsl@gmail.com', '@');
  echo strstr('zsl@gmail.com', '64');
  $domain = substr(strstr('zsl@gmail.com','@'),1);
  echo "$domain";



  ?>

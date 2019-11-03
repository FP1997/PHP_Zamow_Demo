<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8"/>
  <title>Podsumowanie zamówienia w księgarnii informatycznej</title>
</head>

<body>
<?php
$php1 = $_POST['PHP1'];
$php2 = $_POST['PHP2'];

$cena_php1 = 99.00 * $php1;
$cena_php2 = 107.10 * $php2;
$sztuki = $php1 + $php2;
$suma = 99.00 * $php1 + 107.10 * $php2;

$zapisac = $_POST['zapis'];
$dostawa = $_POST['dostawa'];
$koszt_dostawy;
$sposob_platnosci = $_POST['platnosc'];
if($dostawa != "" && $sposob_platnosci != "") {

  if($dostawa == "Odbiór w punkcie" && ($sposob_platnosci == "Przelew" || $sposob_platnosci == "Płatność przy odbiorze w sklepie"))
    $koszt_dostawy = 0;
  elseif($dostawa == "Dostawa kurier" && ($sposob_platnosci == "Przelew")) 
    $koszt_dostawy = 12;
  elseif($dostawa == "Dostawa kurier" && ($sposob_platnosci == "Pobranie"))
    $koszt_dostawy = 16;
  
  $calkowity_koszt = $suma + $koszt_dostawy;

  $cena_php1 = number_format($cena_php1, 2)." PLN";
  $cena_php2 = number_format($cena_php2, 2)." PLN";
  $suma = number_format($suma, 2)." PLN";
  $calkowity_koszt = number_format($calkowity_koszt, 2)." PLN";
  $tekst = "Podsumowanie zamówienia";
  $tekst .= "\r\n"; // Nowa linia w zapisywanym pliku
  $tekst .= "PHP i MySQL. Dla każdego (99.00 PLN / szt) Ilość: $php1 Cena: $cena_php1";
  $tekst .= "\r\n";
  $tekst .= "PHP, MySQL i JavaScript. Wprowadzenie (107.10 PLN / szt) Ilość: $php2 Cena: $cena_php2";
  $tekst .= "\r\n";
  $tekst .= "Całkowita ilość książek i ich cena Ilość: $sztuki Cena: $suma";
  $tekst .= "\r\n";
  echo <<< END
      <h2>Podsumowanie zamówienia</h2>
      <table border="2" cellpadding="10" cellspacing="0">
      <tr>
        <th> Nazwa</th> <th>Ilość</th> <th>Cena</th> 
      </tr>
      <tr>
        <td> PHP i MySQL. Dla każdego (99.00 PLN / szt)</td> <td>$php1</td> <td>$cena_php1</td>
      </tr>
      <tr>
        <td>PHP, MySQL i JavaScript. Wprowadzenie (107.10 PLN / szt)</td> <td>$php2</td> <td>$cena_php2</td>
      </tr>
      <tr>
        <td>Całkowita ilość książek i ich cena</td> <td>$sztuki</td> <td>$suma</td>
      </tr>
      <tr>
        <td>Całkowita cena z wysyłką</td> <td>-</td> <td>$calkowity_koszt</td>
      </tr>
      </table>
      <br>
      <a href="index.php">Powrót do poprzedniego punktu zamówienia</a>
  END;
  
  if($zapisac == "Tak") {
    $wp = fopen("zamowienia.txt", 'w+');
    fwrite($wp, $tekst);
    fclose($wp);
  }
}
else {

  echo <<< END
  <p>Nie wybrałeś sposobu dostawy i metody płatności</p>
  <a href="index.php">Powrót do poprzedniego punktu zamówienia</a>
  END;
}
?>

</body>
</html>

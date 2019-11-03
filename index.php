<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8"/>
  <title>Księgarnia informatyczna</title>
</head>

<body>

  <form action="order.php" method="post">
  <table>
  <tr>
    <th colspan="4" align="center">Zamównienie online</th>
  </tr>
  <tr>
    <td></br></br></td>
  </tr>  
  <tr>
    <th>Pozycja</th>
    <th>Cena</th>
    <th>Ilość</th> 
  </tr>
  <tr>
    <td><img src="JPG/PHP_i_MySQL.JPG" width="180" height="250"></td>
    <td>99.00 PLN</td>
    <td><input type="text" name="PHP1"/></td>
  </tr>

  <tr>
    <td><img src="JPG/PHP, MySQL i JavaScript. Wprowadzenie.JPG" width="180" height="250"></td>
    <td>107.10 PLN</td>
    <td><input type="text" name="PHP2"/></td>
  </tr>

  <tr>
    <td>Wybierz sposób dostawy: </td>
    <td> <select name="dostawa">
           <option name="brakd">
           <option name="da"> Odbiór w punkcie
           <option name="db"> Dostawa kurier
         </select>
    </td>
  </tr> 

  <tr>
    <td>Wybierz metodę płatności: </td>
    <td> <select name="platnosc">
           <option name="brakp">
           <option name="pa"> Przelew
           <option name="pb"> Płatność przy odbiorze w sklepie
           <option name="pc"> Pobranie
         </select>
    </td>
  </tr> 
  
  <tr>
    <td>Czy zapisać dane zamówienia: </td>
    <td> <select name="zapis">
           <option name="tak"> Tak
           <option name="nie"> Nie
         </select>
    </td>
  </tr>
  <tr>
    <td colspan="4" align="center"><input type="submit" value="Wyślij zamówienie"/></td>
  </tr> 
  </table>
  </form>

</body>
</html>

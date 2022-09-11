<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Punto 1:</h1>
<?php
  $n = 9;
  if ($n > 0){
    echo "$n es positivo.";
  }
?>
<br>
<hr>
    <h1>Punto 2:</h1>
<?php
  if ($n > 1 and $n < 10){
    echo "$n es mayor que 1 y menor que 10";
  }
?>
<br>
<hr>
    <h1>Punto 3:</h1>
<?php
  if ($n < 2 or $n > 10){
    echo "$n es mayor a 10 o menor a 2.";
  } else {
      echo "$n no es ni menor a 2 ni mayor a 10";
  }
?>
<br>
<hr>
    <h1>Punto 4:</h1>
<?php
  $numero1 = 5;
  $numero2 = 8;
  $suma = $numero1 + $numero2;
  $resta = $numero1 - $numero2;
  $multi = $numero1 * $numero2;
  $divi = $numero1 / $numero2;
  $resto = $numero1 % $numero2;

  if ($numero1 > $numero2){
    echo "Como $numero1 es mayor a $numero2 la suma de ambos es $suma y su resta es $resta.";
  } elseif ($numero1 < $numero2){
    echo "Como $numero1 es menor a $numero2 la multiplicacion de ambos es $multi, su division entera es $divi y su resto es $resto.";
  } else {
    "Los numeros ingresados son iguales.";
  }
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

    <h1>Punto 1:</h1>

        <?php
        echo "Hola Mundo";
        ?>
<br>
<hr>

    <h1>Punto 2:</h1>

        <?php
        $variable="Hola Mundo";
        echo $variable;
        ?>
<br>
<hr>

    <h1>Punto 3:</h1>

        <?php
        $num1=5;
        $num2=8;
        $suma=$num1+$num2;
        $resta=$num1-$num2;
        $multi=$num1*$num2;
        $divi=$num1/$num2;
        $resto=$num1%$num2;
        echo "La suma de 5 y 8 es $suma, la resta es $resta, la multiplicacion es $multi, la division es $divi y el resto es $resto."
        ?>
<br>
<hr>

    <h1>Punto 4:</h1>

        <?php
        $grados=20;
        $resultadof= $grados * 1.8 + 32;
        echo "20 grados Celsius a Fahrenheit es $resultadof."
        ?>
<br>
<hr>

    <h1>Punto 5-a:</h1>

        <?php
        $altura=18;
        $base=12;
        $perimetrorectangulo= $altura * 2 + $base * 2;
        $arearectangulo= $base * $altura;

        echo "El perimetro del rectangulo es $perimetrorectangulo y su area es $arearectangulo."
        ?>
<br>
<hr>

    <h1>Punto 5-b:</h1>
        <?php
        $radio=30;
        $perimetrocirculo= 2 * 3.14 * $radio;
        $areacirculo= 3.14 * $radio ** 2;
        echo "El perimetro del circulo es $perimetrocirculo y el area es $areacirculo."
        ?>
</body>
</html>
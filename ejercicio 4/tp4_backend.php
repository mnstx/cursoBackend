<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 4</title>
  </head>
  <body>
    <h1>Punto 1:</h1>
    <?php
      $numpares = [2,4,6,8,10,12,14,16,18,20];
        foreach ($numpares as $i){
        	print "$i<br>";
      }
    ?>
<br>
<hr>

    <h1>Punto 2:</h1>
    <?php
        $array = ["Pedro", "Ana", 34, 1,];
        print_r($array);
    ?>

<br>
<hr>

    <h1>Punto 3:</h1>
    <?php
        $arrayaso = [
        	"nombre"=>'Pedro',
        	"apellido"=>'Torres',
        	"direccion"=>'Av. Mayor 3703',
        	"telefono"=>1122334455,
    ];
    ?>

<br>
<hr>

    <h1>Punto 4:</h1>
    <?php
    $ciudades = [ "Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
    print "La ciudad con el índice 0 tiene el nombre $ciudades[0].<br>";
    print "La ciudad con el índice 1 tiene el nombre $ciudades[1].<br>";
    print "La ciudad con el índice 2 tiene el nombre $ciudades[2].<br>";
    print "La ciudad con el índice 3 tiene el nombre $ciudades[3].<br>";
    print "La ciudad con el índice 4 tiene el nombre $ciudades[4].<br>";
    print "La ciudad con el índice 5 tiene el nombre $ciudades[5].";
    ?>

<br>
<hr>

    <h1>Punto 5:</h1>
    <?php
    $ciudades = [ 'MD'=>"Madrid",
    			  'BCL'=>"Barcelona",
    			  'LD'=>"Londres",
    			  'NY'=>"New York",
    			  'LA'=>"Los Ángeles",
    			  'CCG'=>"Chicago"
    			  ];

 foreach ($ciudades as $indice=>$valor){
 	print "El índice de $valor es $indice.<br>";
 }
?>
  </body>
</html>

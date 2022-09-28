<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
  </head>
  <body>
    <h1>Punto 1:</h1>
    <?php
    $i = 1;
        while ($i <= 100){
        print "<p>$i</p>\n";
        $i++;
        }
    ?>

    <hr>
    <br>

    <h1>Punto 2:</h1>

    <?php
    $i = 100;
        while ($i >= 1){
        print "<p>$i</p>\n";
        $i--;
        }
    ?>

    <hr>
    <br>

    <h1>Punto 3:</h1>

    <?php
    $i = 0;
        while ($i < 100){
        $i++;
        if (($i%2)==0)
         print "<p>$i</p>\n";
        }
    ?>

    <br>
    <hr>

    <h1>Punto 4:</h1>

    <?php
    $i = 1;
        while ($i < 100){
        $i++;
        if (($i%2)==1)
         print "<p>$i</p>\n";
        }
    ?>

    <br>
    <hr>

    <h1>Punto 5:</h1>

    <?php
    for ($i = 0; $i <= 19; $i++){
    	echo $i . " +";
    	if ($i == 19){
    		$i++;
    		print "<p>$i<p/>=";
    		$resultado = $i * ($i + 1)/2;
    		echo $resultado;
    	}
    }
        ?>

        <br>
        <hr>


    <h1>Punto 6:</h1>

    <?php
    $suma = 0;

    for ($i = 0; $i <= 20; $i++){
    	if ($i%2==0){
    		echo $i . " +";
        $suma = $suma + $i;
        if ($i == 20){
          echo " =".$suma;
        }
    	}
    }
     ?>

    <br>
    <hr>
  </body>
</html>

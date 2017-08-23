<!--Algoritmo que rellene un array con los 10 primeros numeros enteros y los muestre en pantalla en orden ascendente-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ejercicio 3</title>
  </head>
  <body>
    <h3>Los numeros en forma ascendente son:</h3>
    <?php

     foreach (range(0,10) as $números){
     echo "$números <br/>";
   }
     ?>



  </body>
</html>

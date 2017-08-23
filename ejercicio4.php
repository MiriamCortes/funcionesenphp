<!--Algoritmo rellene con los numeros pares comprendidos entre 1-10 y los muestre en pantalla en orden ascendente.-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Numeros pares de 2 en 2</title>
  </head>
  <body>
    <h3>Los numeros pares del 0 al 10 son:</h3>
    <?php
  foreach (range(0,10,2) as $numeros) {
  echo "$numeros </br>";  }
     ?>
  </body>
</html>

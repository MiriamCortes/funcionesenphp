<!--Algoritmo que lea 10 numeros por teclado, los almacene en un array y muestre la suma,resta,multiplicacion y division.-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Operaciones</title>
  </head>
  <body>
    <h3>1,2,3,4,5,6,7,8,9,10</h3>
    <?php
$numeros= array(1,2,3,4,5,6,7,8,9,10);
$suma=($numeros[0] + $numeros[1] + $numeros[2] + $numeros[3] + $numeros[4] + $numeros[5] + $numeros[6]+ $numeros[7]+$numeros[8]+$numeros[9]);
echo "La suma de todos los numeros es: $suma <br>";

$resta=($numeros[0] - $numeros[1] - $numeros[2]- $numeros[3] - $numeros[4] - $numeros[5] - $numeros[6] - $numeros[7] - $numeros[8] - $numeros[9]);
echo "La suma de todos los numeros es: $resta <br>";

$multiplicacion=($numeros[0] * $numeros[1] * $numeros[2] * $numeros[3] * $numeros[4] * $numeros[5] * $numeros[6] * $numeros[7] * $numeros[8] * $numeros[9]);
echo "La multiplicación de todos los numeros es: $multiplicacion <br>";

$division=($numeros[0] / $numeros[1] / $numeros[2] / $numeros[3] / $numeros[4] / $numeros[5] / $numeros[6] / $numeros[7] / $numeros[8] / $numeros[9]);
echo "La división de todos los numeros es: $division <br>";

     ?>

  </body>
</html>

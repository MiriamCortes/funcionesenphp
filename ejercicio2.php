<!--cree un array con los nombre: Mirna, Paula, Jose, Sebastian, Carlos, Maira. Muestre el numero de elementos que contiene en una lista no ordenada.-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ejercicio 2</title>
  </head>
  <body>
    <?php
    $nombre[0]="Mirna";
    $nombre[1]="Paula";
    $nombre[2]="Jose";
    $nombre[3]="Sebastian";
    $nombre[4]="Carlos";
    $nombre[5]="Maira";

    shuffle($nombre);
    $resultado=count($nombre);

    echo "los numeros de elementos que hay en el array son: $resultado";

    echo "los nombres ingresados son:<br/><br/>";
    echo "$nombre[0] <br/>";
    echo "$nombre[1]<br/>";
    echo "$nombre[2]<br/>";
    echo "$nombre[3]<br/>";
    echo "$nombre[4]<br/>";
    echo "$nombre[5]<br/><br/>";
    echo "los numeros de elementos que hay en el array son: $resultado";

     ?>


  </body>
</html>

<!--crear un array para introducir los datos de una persona: Nombre:Pedro torres Direccion: calle_20 telefono: 1425698-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ejercicio 1</title>
  </head>
  <body>
    <?php
    $datos=array('pedro torres', 'calle_20','145698');

    list($nombre, $direccion, $telefono)=$datos;
    echo("El nombre es $nombre <br/> Su dirección es $direccion <br/> Su numero de telefono es $telefono");


     ?>

  </body>
</html>

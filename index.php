<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    hola mundo chingon

<form method="post" action="registrar.php">

  <input type="text" name="nombre" placeholder="nombre"><br>
  <input type="text" name="apellido" placeholder="apellido"><br>
  <input type="submit" value="enviar">
</form>

<?php

include("registrar.php");
include("conexiondos.php");

 ?>

  </body>
</html>

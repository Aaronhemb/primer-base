<?php

$con = mysqli_connect("localhost", "3306", "root", "root", "bdlocal");

if($_POST){

  /* para mandar a llamar a todos los pos de la paguina
  foreach ($_POST as $c => $v) {
    echo "\${$c} = \$_POST['{$c}']; </br>";*/

    $nombre = $_POST["txtnombre"];
    $apellido = $_POST["txtapellido"];

    $sql = "INSERT INTO `registro` (`id`, `nombre`, `apellido`) VALUES ('{$nombre}', '{$apellido}')";

    mysqli_query($con, $sql);

    echo "
    <script> alert('datos guardados'); </script>
    ";
  }
 ?>

<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <form method="post" action="">
    <fieldset>
    <legend> Ingrese su consulta</legend>
    <div class="">
      <input type="text" name="txtnombre" placeholder="nombre" />
    </div>
    <div class="">
      <input type="text" name="txtapellido" placeholder="apellido"/>
    </div>
    <div class="">
      <button> Guadar </button>
    </div>
    </fieldset>
  </form>


  </body>
</html>

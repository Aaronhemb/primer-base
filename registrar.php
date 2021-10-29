<?php

include("conexiondos.php");

if ($conex) {
  echo "la conexion fue correcta";
} else {
  echo "no se puede conectar";
}

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
//Validamos que hayan llegado estas variables, y que no esten vacias:
if (isset($_POST["nombre"], $_POST["apellido"]) and $_POST["nombre"] !="" and $_POST["apellido"]!="" ){

  $consulta = "INSERT INTO registro (id,nombre,apellido) VALUES ('0','$nombre','$apellido')";

} else {

echo '<p>Por favor, complete el <a href="index.php">formulario</a></p>';
}


if (mysql_query($consulta) ){
echo "<p>Registro agregado.</p>";
} else {
echo "<p>No se agregó...</p>";
}

 ?>

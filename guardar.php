<?php

include 'conexion.php';

$ins = $con -> query("INSERT INTO alumnos (ID,nombre,paterno,materno) VALUES ('','roberto','lares','soto')");

if ($ins) {
  echo "Guardado";
}else{
  echo "no guardo";
}

 ?>

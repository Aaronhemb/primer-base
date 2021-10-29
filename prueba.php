<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

 $ins = $con -> query("INSERT INTO registro (id,nombre,paterno) VALUES ('','$nombre','$apellido')");

 if ($ins) {
   echo "Guardado";
 }else{
   echo "no guardo";
 }

  ?>

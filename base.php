<?php

$val1 = $_POST['valor1'];
$val2 = $_POST['valor2'];
$val3 = $_POST['valor3'];
$val4 = $_POST['valor4'];
$operador = $_POST['operador'];

function calcular($v1, $v2){
    $ope = $_POST['operador'];
    switch ($ope) {
      case 0:
      $res = $v1 + $v2;
        break;
      case 1:
      $res = $v1 - $v2;
        break;
      case 2:
      $res = $v1 * $v2;
        break;
      case 3:
      $res = $v1 / $v2;
        break;

    }
    return $res;
}

$operacion = array('SUMA','RESTA','MULTIPLICACION', 'DIVICION' );

echo "el resultado de la primera ".$operacion[$operador]. " ". "es ". calcular($val1, $val2);
echo "<br>";
echo "el resultado de la segunda ".$operacion[$operador]. " ". "es ". calcular($val3, $val4);

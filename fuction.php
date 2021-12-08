<?php

$data=json_decode(file_get_contents('php://input'),true);

if (strlen($data['dado']) == 2)
  $dado = intval(substr($data['dado'], -1));
else
  if (strlen($data['dado']) == 3)
  $dado = intval(substr($data['dado'], -2));
else
  $dado = intval(substr($data['dado'], -3));
$numero = intval($data['tiros']);
$contador = 0;
$resultado = array();
do {
  array_push($resultado,random_int(1, $dado));
  $contador++;
} while ($numero > $contador);
$json=json_encode($resultado,JSON_PRETTY_PRINT);

echo $json;
// Prueba enviando la data de forma directa
// $data=json_decode(file_get_contents('php://input'),true);

// if (strlen($_POST['dado']) == 2)
//   $dado = intval(substr($data['dado'], -1));
// else
//   if (strlen($_POST['dado']) == 3)
//   $dado = intval(substr($data['dado'], -2));
// else
//   $dado = intval(substr($_POST['dado'], -3));
// $numero = intval($_POST['tiros']);
// $contador = 0;
// $resultado = array();
// do {
//   $resultado+=["Tiro $contador"=>strval(random_int(1, $dado))];
//   $contador++;
// } while ($numero > $contador);
// $json=json_encode($resultado,JSON_PRETTY_PRINT);

// echo $json;
?>
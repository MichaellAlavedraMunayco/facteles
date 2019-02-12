<?php

$ruc = $_POST['ruc'];
$data = file_get_contents("https://api.sunat.cloud/ruc/" . $ruc);
$info = json_decode($data, true);

if($data==='[]' || $info['fecha_inscripcion']==='--'){
  $datos = array(0 => null);
  echo json_encode($datos);
}else{
    $datos = array(
    0 => $info['razon_social'],
    1 => $info['nombre_comercial'],
    2 => $info['representante_legal'],
    3 => $info['domicilio_fiscal'],
  );
  echo json_encode($datos);
}

?>

<?php
require 'simple_html_dom.php';
error_reporting(E_ALL ^ E_NOTICE);

$dni = $_POST['dni'];

$consulta = file_get_html('http://aplicaciones007.jne.gob.pe/srop_publico/consulta/afiliado/GetNombresCiudadano?DNI='.$dni)->plaintext;

$partes = explode('|', $consulta);

$datos = array(
  0 => $partes[0],
  1 => $partes[1],
  2 => $partes[2]
);

echo json_encode($datos);
 ?>

<?php
$trivial = $_POST['trivial'];
$nombre = $_POST['nombre'];
$participantes = $_POST['participantes'];
$telefono = $_POST['telefono'];
$comentarios = $_POST['comentarios'];

$archivo = fopen("datos.txt", "a");
fwrite($archivo, $trivial . " - " . $nombre . " - " . $participantes . " - " . $telefono . " - " . $comentarios . "\n");
fclose($archivo);

echo "Datos guardados correctamente";
?>
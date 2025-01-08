<?php

// Get data from the POST request
$data = json_decode(file_get_contents('php://input'), true);

// Access data
$trivial = $data['trivial'];	
$nombre = $data['nombre'];
$participantes = $data['participantes'];
$telefono = $data['telefono']; 
$comentarios = $data['comentarios'];
// ... access other fields

// **1. Store data (Example: in a text file)**
$archivo = fopen('inscripciones.html', 'a'); 
fwrite($archivo, json_encode($data) . "\n"); 
fclose($archivo);

// **2. Send email (Example using PHPMailer - requires installation)**
// require 'vendor/autoload.php'; // Include PHPMailer library
// $mail = new PHPMailer\PHPMailer\PHPMailer();
// // Configure and send email using $nombre, $telefono, etc.

// Send a success response
header('Content-Type: application/json');
echo json_encode(['message' => 'Datos guardados correctamente']);

?>
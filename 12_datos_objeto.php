<?php
// Recepción de los datos por el método del objeto JSON de Javascript

header("Content-Type: application-json; charset=utf-8" );

// Obtener el envío desde Javascript
$json_recibido = file_get_contents('php://input');

// Convertir el json (string) en un array asociativo
$datos = json_decode($json_recibido, true); // $datos equivale al $_POST

if (is_array($datos)) {

    // === Código de la aplicación
    // Sanitización (desactivar el posible codigo malicioso)
    // Validación (con expresiones regulares)
    // Guardar en base de datos
    echo json_encode([
        "envio" => true,
        "mensaje" => "Datos recibidos correctamente",
        "data" => $datos
    ]);
} else {
    echo json_encode([
        "envio" => false,
        "mensaje" => "Error en la recepción de los datos",
    ]);
}
 

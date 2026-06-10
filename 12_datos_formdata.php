<?php
// Recepción de los datos por el método FormData de Javascript

header("Content-Type: application-json" );

if ($_POST) {

    // === Código de la aplicación
    // Sanitización (desactivar el posible codigo malicioso)
    // Validación (con expresiones regulares)
    // Guardar en base de datos
    echo json_encode([
        "envio" => true,
        "mensaje" => "Datos recibidos correctamente",
        "data" => $_POST
    ]);
} else {
    echo json_encode([
        "envio" => false,
        "mensaje" => "Error en la recepción de los datos",
    ]);
}

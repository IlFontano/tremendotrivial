<?php
function guardar_datos_formulario($datos_formulario, $archivo_salida = "inscripciones.html") {
    $datos_formulario = array(
        "trivial" => $_POST["trivial"],
        "nombre" => $_POST["nombre"],
        "participantes" => $_POST["participantes"],
        "telefono" => $_POST["telefono"],
        "comentarios" => $_POST["comentarios"]
    );
    $archivo = fopen($archivo_salida, "a");
    if (!$archivo) {
        die("Error al abrir el archivo $archivo_salida");
    }
    $datos_json = json_encode($datos_formulario, JSON_PRETTY_PRINT);
    fwrite($archivo, $datos_json . "\n");
    fclose($archivo);
    echo "¡Gracias por inscribirte! Tus datos se han guardado correctamente.";
    }
?>
}
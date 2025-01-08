<!DOCTYPE html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $trivial = $_POST['trivial'];
    $nombre = $_POST['nombre'];
    $participantes = $_POST['participantes'];
    $telefono = $_POST['telefono'];
    $comentarios = $_POST['comentarios'];

    // Generar el contenido del nuevo documento HTML
    $htmlContent = "
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Inscripción Completa</title>
        <link rel='stylesheet' type='text/css' href='css/estilos.css'>
    </head>
    <body>
        <header>
            <div class='logo'>
                <a href='index.html'>
                    <img id='logo1' src='img/logo_trivial.png' alt='Tremendo Trivial' width='100' height='100'>
                    <h1>TREMENDO TRIVIAL</h1>
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href='index.html'>Inicio</a></li>
                    <li><a href='trivial.html'>El trivial</a></li>
                    <li><a href='proximos.html'>Próximos</a></li>
                    <li><a href='nosotros.html'>Sobre nosotros</a></li>
                    <li><a href='contacto.html'>Contacto</a></li>
                </ul>
            </nav>
        </header>
        <section id='inscripcion'>
            <h1>Inscripción Completa</h1>
            <hr>
            <p>Gracias por inscribirte. Aquí están los detalles de tu inscripción:</p>
            <p><strong>Trivial:</strong> " . htmlspecialchars($trivial) . "</p>
            <p><strong>Nombre del equipo:</strong> " . htmlspecialchars($nombre) . "</p>
            <p><strong>Nº de participantes:</strong> " . htmlspecialchars($participantes) . "</p>
            <p><strong>Telefono:</strong> " . htmlspecialchars($telefono) . "</p>
            <p><strong>Comentarios:</strong> " . htmlspecialchars($comentarios) . "</p>
        </section>
        <footer>
            <p>© 2025 Tremendo Trivial</p>
        </footer>
    </body>
    </html>";

    // Guardar el contenido en un nuevo archivo HTML
    $fileName = "inscripcion_" . time() . ".html";
    file_put_contents($fileName, $htmlContent);

    // Redirigir al nuevo archivo HTML
    header("Location: $fileName");
    exit();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta viewport="width=device-width, initial-scale=1.0">

        <title>Tremendo Trivial | Inicio</title>
        
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Changa+One:ital@0;1&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>

             <div class="logo">
                <a href="index.html">
                <img id="logo1" src="img/logo_trivial.png"
                    alt="Tremendo Trivial" width="100" height="100">
                <h1>TREMENDO TRIVIAL</h1>
             </a>
             </div>

             <nav>
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="trivial.html">El trivial</a></li>
                    <li><a href="proximos.html">Próximos</a></li>
                    <li><a href="nosotros.html">Sobre nosotros</a></li>
                    <li><a href="contacto.html">Contacto</a></li>
                </ul>
             </nav>
        </header>
        <section id="inscripcion">
            <h1>Inscripción</h1>
            <hr>
             <form action="inscripcion.php" method="post">
                 <label for="trivial">Trivial:</label>
                 <select id="trivial" name="trivial" required>
                     <option value="1">8 de enero</option>
                     <option value="2">22 de enero</option>
                 </select>
                 <br>
                 <label for="nombre">Nombre del equipo:</label>
                 <input type="text" id="nombre" name="nombre" required>
                 <br>
                 <label for="participantes">Nº de participantes:</label>
                 <select id="participantes" name="participantes" required>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                     <option value="6">6</option>
                 <br>
                 <label for="telefono">Telefono:</label>
                 <input type="text" id="telefono" name="telefono" required>
                 <br>
                 <label for="comentarios">Comentarios:</label>
                 <input type="text" id="comentarios" name="comentarios">
                 <br>
                 <button type="submit">Enviar.</button>
                </form>

        </section>
</html>
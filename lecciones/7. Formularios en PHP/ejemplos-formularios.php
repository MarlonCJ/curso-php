<?php

$nombre = "";
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombreRecibido = $_POST["nombre"] ?? "";
    $nombre = is_string($nombreRecibido) ? trim($nombreRecibido) : "";

    if ($nombre === "") {
        $mensaje = "Escribe tu nombre para continuar.";
    } else {
        $mensaje = "Hola, " . htmlspecialchars($nombre, ENT_QUOTES, "UTF-8") . ". El formulario se envió correctamente.";
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos de formularios en PHP</title>
</head>
<body>
    <h1>Formulario de saludo</h1>

    <?php if ($mensaje !== ""): ?>
        <p><?= $mensaje ?></p>
    <?php endif; ?>

    <form method="post">
        <label for="nombre">¿Cómo te llamas?</label>
        <input
            type="text"
            id="nombre"
            name="nombre"
            value="<?= htmlspecialchars($nombre, ENT_QUOTES, "UTF-8") ?>"
            required
        >
        <button type="submit">Enviar</button>
    </form>

    <h2>Ejemplo de búsqueda con GET</h2>
    <form method="get">
        <label for="buscar">Buscar una palabra:</label>
        <input type="text" id="buscar" name="buscar">
        <button type="submit">Buscar</button>
    </form>

    <?php if (isset($_GET["buscar"]) && is_string($_GET["buscar"])): ?>
        <p>
            Buscaste:
            <?= htmlspecialchars(trim($_GET["buscar"]), ENT_QUOTES, "UTF-8") ?>
        </p>
    <?php endif; ?>
</body>
</html>

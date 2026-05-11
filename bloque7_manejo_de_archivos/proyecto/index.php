<?php

$carpeta = __DIR__ . "/storage";

if (!is_dir($carpeta)) {

    mkdir($carpeta);
}

$archivo = $carpeta . "/notas.txt";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nota = trim($_POST["nota"]);

    if (!empty($nota)) {

        $registro = date("Y-m-d H:i:s") . " - " . $nota . "\n";

        file_put_contents($archivo, $registro, FILE_APPEND);
    }
}

$notas = [];

if (file_exists($archivo)) {

    $notas = file($archivo);
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Sistema de Notas</title>
</head>

<body>

    <h1>Sistema de Notas</h1>

    <form method="POST">

        <textarea name="nota"></textarea>

        <br><br>

        <button type="submit">
            Guardar Nota
        </button>

    </form>

    <hr>

    <h2>Historial</h2>

    <?php foreach ($notas as $nota): ?>

        <p><?= htmlspecialchars($nota) ?></p>

    <?php endforeach; ?>

</body>

</html>
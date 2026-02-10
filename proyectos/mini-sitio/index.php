<?php

// =========================
// Pagina publica del sitio
// BLOQUE 1
// =========================

require_once 'config/config.php';
require_once 'templates/header.php';

//Variables de la pagina

$mensajeBienvenida = 'Bienvenido al sitio construido con PHP desde cero';
$descripcion = 'Este proyecto utiliza PHP puro aplicando bloques de aprendizaje profesionales';

?>

<main> 
    <p><?php echo $mensajeBienvenida ?></p>
    <p><?php echo $descripcion ?></p>
</main>

<?php require_once 'templates/footer.php'; ?>

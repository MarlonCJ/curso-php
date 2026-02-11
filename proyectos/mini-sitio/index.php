<?php
require_once 'config/config.php';

// -------------------------------
// BLOQUE 2 - LÓGICA
// -------------------------------

// Hora actual del servidor
$horaActual = date('H');

// Mensajes por defecto
$mensajePrincipal = '';
$mensajeEstado    = '';

// Lógica de apertura del sitio
if ($horaActual >= SITE_OPEN_HOUR && $horaActual < SITE_CLOSE_HOUR) {
    $mensajePrincipal = 'Bienvenido, el sitio se encuentra ABIERTO.';
    $mensajeEstado    = 'Horario de atención activo.';
} else {
    $mensajePrincipal = 'El sitio se encuentra CERRADO.';
    $mensajeEstado    = 'Vuelve en nuestro horario de atención.';
}
?>

<?php require_once 'templates/header.php'; ?>

<main>
    <p><?= $mensajePrincipal ?></p>
    <p><?= $mensajeEstado ?></p>

    <section>
        <h2>Información</h2>
        <p>
            Nuestro horario de atención es de
            <?= SITE_OPEN_HOUR ?>:00 a <?= SITE_CLOSE_HOUR ?>:00 horas.
        </p>
    </section>
</main>

<?php require_once 'templates/footer.php'; ?>

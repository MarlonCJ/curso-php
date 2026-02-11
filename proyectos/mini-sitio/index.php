<?php
require_once 'bootstrap.php';

// -------------------------------
// BLOQUE 5 - ORQUESTACIÓN
// -------------------------------

$tituloSeccion = 'Listado de Usuarios';
$descripcion  = 'Proyecto estructurado usando includes y bootstrap.';
?>

<?php require_once 'templates/header.php'; ?>

<main>
    <section>
        <h2><?= $tituloSeccion ?></h2>
        <p><?= $descripcion ?></p>

        <?php foreach ($usuarios as $usuario): ?>
            <article>
                <p><strong>Nombre:</strong> <?= $usuario['nombre'] ?></p>
                <p><strong>Email:</strong> <?= $usuario['email'] ?></p>
                <p><strong>Edad:</strong> <?= formatearEdad($usuario['edad']) ?></p>
                <p><strong>Estado:</strong> <?= obtenerEstadoUsuario($usuario['estado']) ?></p>
                <hr>
            </article>
        <?php endforeach; ?>

    </section>
</main>

<?php require_once 'templates/footer.php'; ?>


<?php
require_once 'config/config.php';
require_once 'data/usuarios.php';

// -------------------------------
// BLOQUE 3 - ARRAYS
// -------------------------------

// Mensaje informativo
$tituloSeccion = 'Listado de Usuarios';
$descripcion  = 'Usuarios cargados desde un array en PHP.';
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
                <p><strong>Edad:</strong> <?= $usuario['edad'] ?></p>
                <p><strong>Estado:</strong> <?= $usuario['estado'] ?></p>
                <hr>
            </article>
        <?php endforeach; ?>

    </section>
</main>

<?php require_once 'templates/footer.php'; ?>

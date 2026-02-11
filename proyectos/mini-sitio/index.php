<?php
require_once 'bootstrap.php';

$tituloSeccion = 'Listado de Usuarios (POO)';
$descripcion  = 'Usuarios modelados como objetos PHP.';
?>

<?php require_once 'templates/header.php'; ?>

<main>
    <section>
        <h2><?= $tituloSeccion ?></h2>
        <p><?= $descripcion ?></p>

        <?php foreach ($usuarios as $usuario): ?>
            <article>
                <p><strong>Nombre:</strong> <?= $usuario->getNombre() ?></p>
                <p><strong>Email:</strong> <?= $usuario->getEmail() ?></p>
                <p><strong>Edad:</strong> <?= formatearEdad($usuario->getEdad()) ?></p>
                <p><strong>Estado:</strong> <?= obtenerEstadoUsuario($usuario->getEstado()) ?></p>
                <hr>
            </article>
        <?php endforeach; ?>

    </section>
</main>

<?php require_once 'templates/footer.php'; ?>

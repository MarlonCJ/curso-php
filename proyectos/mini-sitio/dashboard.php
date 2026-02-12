<?php
require_once 'bootstrap.php';

// Protección de ruta
if (!isset($_SESSION['auth'])) {
    header('Location: login.php');
    exit;
}
?>

<?php require_once 'templates/header.php'; ?>

<main>
    <h2>Panel privado</h2>

    <p>Usuario autenticado: <?= $_SESSION['user'] ?></p>

    <h3>Usuarios registrados</h3>

    <?php foreach ($usuarios as $usuario): ?>
        <article>
            <p><strong>Nombre:</strong> <?= $usuario->getNombre() ?></p>
            <p><strong>Email:</strong> <?= $usuario->getEmail() ?></p>
            <p><strong>Edad:</strong> <?= formatearEdad($usuario->getEdad()) ?></p>
            <p><strong>Estado:</strong> <?= obtenerEstadoUsuario($usuario->estaActivo()) ?></p>
            <hr>
        </article>
    <?php endforeach; ?>

    <a href="logout.php">Cerrar sesión</a>
</main>

<?php require_once 'templates/footer.php'; ?>

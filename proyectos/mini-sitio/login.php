<?php
require_once 'bootstrap.php';

if (isset($_SESSION['auth'])) {
    header('Location: dashboard.php');
    exit;
}
?>

<?php require_once 'templates/header.php'; ?>

<main>
    <h2>Iniciar sesión</h2>

    <?php if (isset($_GET['error'])): ?>
        <p style="color:red;">Credenciales incorrectas</p>
    <?php endif; ?>

    <form method="POST" action="process_login.php">
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Ingresar</button>
    </form>
</main>

<?php require_once 'templates/footer.php'; ?>

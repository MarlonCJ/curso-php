<?php
require_once 'includes/session.php';
require_once 'includes/auth.php';
?>

<h1>Dashboard</h1>

<p>Usuario: <?php echo $_SESSION['usuario']; ?></p>
<p>Rol: <?php echo $_SESSION['rol']; ?></p>

<?php if ($_SESSION['rol'] === 'admin'): ?>
    <a href="admin.php">Ir a panel de administrador</a>
<?php endif; ?>

<br><br>
<a href="logout.php">Cerrar sesión</a>

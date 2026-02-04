<?php

    require_once 'includes/session.php';
    require_once 'includes/auth.php';
    require_once 'includes/roles.php';

    require_rol('admin');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Admin VIP</title>
</head>
<body class="admin">
    <main class="vip">
        <header class="vip__header">
            <div>
                <p class="vip__badge">Acceso VIP</p>
                <h2>Panel de administradores</h2>
                <p class="vip__user">Bienvenido, <?php echo $_SESSION['user']; ?></p>
            </div>
            <div class="vip__seal" aria-hidden="true">VIP</div>
        </header>

        <section class="vip__grid">
            <article class="vip__card">
                <h3>Control total</h3>
                <p>Gestiona roles, permisos y configuraciones sensibles.</p>
            </article>
            <article class="vip__card">
                <h3>Seguridad</h3>
                <p>Monitoreo de accesos y alertas en tiempo real.</p>
            </article>
            <article class="vip__card">
                <h3>Reportes VIP</h3>
                <p>Metricas privadas de rendimiento y actividad.</p>
            </article>
        </section>

        <section class="vip__actions">
            <button class="btn">Crear usuario admin</button>
            <button class="btn btn--ghost">Revisar logs</button>
            <a class="btn" href="dashboard.php">Volver al dashboard</a>
        </section>

        <footer class="vip__footer">
            <p>Area restringida: solo administradores autorizados.</p>
            <a class="btn btn--ghost" href="logout.php">Cerrar sesion</a>
        </footer>
    </main>
</body>
</html>

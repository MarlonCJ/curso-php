<?php
    require_once 'includes/session.php';
    require_once 'includes/auth.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Dashboard</title>
</head>
<body class="dashboard">
    <div class="dash">
        <aside class="dash__sidebar">
            <div class="brand">
                <span class="brand__dot"></span>
                <span class="brand__text">Panel</span>
            </div>
            <nav class="menu">
                <a class="menu__item is-active" href="dashboard.php">Inicio</a>
                <?php if($_SESSION['rol'] === 'admin') : ?>
                    <a class="menu__item" href="admin.php">Admin</a>
                <?php endif; ?>
                <a class="menu__item" href="#">Usuarios</a>
                <a class="menu__item" href="#">Reportes</a>
                <a class="menu__item" href="#">Soporte</a>
            </nav>
        </aside>

        <main class="dash__main">
            <header class="dash__header">
                <div>
                    <p class="dash__label">Bienvenido</p>
                    <h2>Hola, <?php echo $_SESSION['user']; ?></h2>
                </div>
                <div class="dash__actions">
                    <button class="btn btn--ghost">Nuevo reporte</button>
                    <a class="btn" href="logout.php">Cerrar sesion</a>
                </div>
            </header>

            <section class="stats">
                <article class="stat">
                    <p class="stat__label">Visitas</p>
                    <p class="stat__value">1,245</p>
                    <p class="stat__meta">+12% este mes</p>
                </article>
                <article class="stat">
                    <p class="stat__label">Usuarios activos</p>
                    <p class="stat__value">312</p>
                    <p class="stat__meta">+5 nuevos hoy</p>
                </article>
                <article class="stat">
                    <p class="stat__label">Tickets</p>
                    <p class="stat__value">27</p>
                    <p class="stat__meta">8 por resolver</p>
                </article>
                <article class="stat">
                    <p class="stat__label">Conversiones</p>
                    <p class="stat__value">8.4%</p>
                    <p class="stat__meta">Meta: 10%</p>
                </article>
            </section>

            <section class="grid">
                <article class="card">
                    <h3>Actividad reciente</h3>
                    <ul class="list">
                        <li>Nuevo usuario registrado</li>
                        <li>Se genero un reporte semanal</li>
                        <li>Actualizacion de permisos</li>
                        <li>Backup completado</li>
                    </ul>
                </article>
                <article class="card">
                    <h3>Acciones rapidas</h3>
                    <div class="quick">
                        <button class="btn btn--small">Crear usuario</button>
                        <button class="btn btn--small">Enviar aviso</button>
                        <button class="btn btn--small btn--ghost">Ver logs</button>
                    </div>
                </article>
            </section>
        </main>
    </div>
</body>
</html>

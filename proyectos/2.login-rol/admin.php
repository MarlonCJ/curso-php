<?php
require_once 'includes/session.php';
require_once 'includes/auth.php';
require_once 'includes/roles.php';

require_role('admin');
?>

<h1>Panel de Administrador</h1>
<p>Solo admins pueden ver esto</p>

<a href="dashboard.php">Volver</a>

<?php
$nombreGuardado = $_COOKIE['usuario'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookies PHP</title>
</head>
<body>

<h2>Ejemplo real con Cookies</h2>

<?php if ($nombreGuardado): ?>
    <p>👋 Bienvenido de nuevo, <strong><?= htmlspecialchars($nombreGuardado) ?></strong></p>
<?php endif; ?>

<form method="post" action="guardar.php">
    <input 
        type="text" 
        name="usuario" 
        placeholder="Tu nombre"
        value="<?= htmlspecialchars($nombreGuardado) ?>"
    >
    <button type="submit">Guardar nombre</button>
</form>

<br>

<a href="borrar.php">Borrar cookie</a>

</body>
</html>

<!-- 
📌 Aquí:

Leemos la cookie
Si existe, la mostramos
La usamos para rellenar el input -->
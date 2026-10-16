<?php

function escapar(string $texto): string
{
    return htmlspecialchars($texto, ENT_QUOTES, "UTF-8");
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de formularios en PHP</title>
</head>
<body>
    <h1>Tema 7: Ejercicios para resolver - Formularios en PHP</h1>
    <p>
        Completa cada ejercicio en el bloque PHP indicado y prueba los formularios
        desde el navegador usando Apache en XAMPP. Comprueba el método de envío,
        valida los datos en PHP y usa escapar() para mostrar texto de usuario de forma segura.
        En los formularios POST, utiliza el campo accion para distinguir qué ejercicio se envió.
    </p>

    <hr>
    <h2>Ejercicio 1: Buscar con GET</h2>
    <p>Crea un formulario GET para buscar un producto. Al enviarlo, muestra el texto buscado de forma segura.</p>
    <form method="get">
        <label for="producto">Producto:</label>
        <input type="text" id="producto" name="producto">
        <button type="submit">Buscar</button>
    </form>
    <?php
    // Escribe tu solución aquí.

    ?>

    <hr>
    <h2>Ejercicio 2: Saludo con POST</h2>
    <p>Crea un formulario POST que reciba un nombre y muestre un saludo. Si está vacío, muestra un mensaje para pedirlo.</p>
    <form method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <button type="submit" name="accion" value="saludar">Saludar</button>
    </form>
    <?php
    // Escribe tu solución aquí.

    ?>

    <hr>
    <h2>Ejercicio 3: Validar una edad</h2>
    <p>Crea un formulario POST para recibir una edad. Valida que sea un número entero mayor o igual a 0 y muestra el resultado.</p>
    <form method="post">
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" min="0">
        <button type="submit" name="accion" value="validarEdad">Validar edad</button>
    </form>
    <?php
    // Escribe tu solución aquí.

    ?>

    <hr>
    <h2>Ejercicio 4: Calcular el total</h2>
    <p>
        Crea un formulario POST con los campos cantidad y precio unitario.
        Valida que ambos sean números válidos y no negativos; luego muestra
        el total (cantidad multiplicada por precio).
    </p>
    <form method="post">
        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" min="0">
        <label for="precio">Precio unitario:</label>
        <input type="number" id="precio" name="precio" min="0" step="0.01">
        <button type="submit" name="accion" value="calcularTotal">Calcular total</button>
    </form>
    <?php
    // Escribe tu solución aquí.

    ?>

    <hr>
    <h2>Reto final: Formulario de contacto</h2>
    <p>
        Crea un formulario POST con nombre, correo y mensaje. Comprueba que
        ningún campo esté vacío y muestra un resumen seguro de los datos.
        No necesitas enviar ni guardar el mensaje.
    </p>
    <form method="post">
        <label for="contacto-nombre">Nombre:</label>
        <input type="text" id="contacto-nombre" name="contacto_nombre">
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo">
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje"></textarea>
        <button type="submit" name="accion" value="contacto">Revisar datos</button>
    </form>
    <?php
    // Escribe tu solución aquí.

    ?>
</body>
</html>

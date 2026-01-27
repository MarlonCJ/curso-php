<?php

/*
🧭 BLOQUE 9.4 — VALIDACIÓN Y SANITIZACIÓN (SEGURIDAD BÁSICA)
🎯 OBJETIVO

Evitar:

Inyección de código

HTML malicioso

Datos sucios

Errores de seguridad

📌 Regla de oro:

❌ Nunca confíes en datos del usuario

1️⃣ VALIDAR vs SANITIZAR (MUY IMPORTANTE)
🔍 VALIDAR

👉 Comprobar si el dato es correcto

Ejemplo:

¿Está vacío?

¿Es un email válido?

¿Es un número?

🧼 SANITIZAR

👉 Limpiar el dato para que no sea peligroso

Ejemplo:

Quitar espacios

Convertir caracteres especiales

Eliminar HTML

2️⃣ FUNCIONES BÁSICAS QUE DEBES DOMINAR
🔹 trim()

Elimina espacios al inicio y al final

*/

$nombre = trim($_POST['nombre']);

/*
htmlspecialchars()

Evita ejecución de HTML / JS

*/

$nombreSeguro = htmlspecialchars($nombre);

// 📌 Convierte:

// <script>alert(1)</script>

// en texto plano

/*

🔹 filter_input()

Forma PROFESIONAL de obtener datos

$nombre = filter_input(INPUT_POST, 'nombre');

3️⃣ EJEMPLO REAL COMPLETO (PROFESIONAL)

📄 procesar.php

<?php

$nombre = filter_input(INPUT_POST, 'nombre');

if (isset($nombre) && !empty($nombre)) {

    $nombre = trim($nombre);
    $nombre = htmlspecialchars($nombre);

    echo 'Hola ' . $nombre;

} else {
    echo 'El nombre es obligatorio';
}


✔ Validado
✔ Sanitizado
✔ Seguro
✔ Sin warnings

4️⃣ VALIDAR EMAIL (CASO REAL)
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($email) {
    echo 'Email válido';
} else {
    echo 'Email inválido';
}

5️⃣ VALIDAR NÚMEROS
$edad = filter_input(INPUT_POST, 'edad', FILTER_VALIDATE_INT);

if ($edad !== false) {
    echo 'Edad válida: ' . $edad;
}

6️⃣ ERROR COMÚN (NO HAGAS ESTO)

❌

echo $_POST['nombre'];


❌

echo htmlspecialchars($_POST['nombre']);


👉 Si no validas antes, sigue siendo inseguro.

7️⃣ ¿ESTO SE USA EN WORDPRESS?

🔥 SÍ, TODO EL TIEMPO

WordPress usa:

sanitize_text_field()

esc_html()

esc_attr()

📌 Esto es la base para plugins profesionales.

🧠 RESUMEN PROFESIONAL
Paso	Acción
1	Recibir datos
2	Validar
3	Sanitizar
4	Usar

*/
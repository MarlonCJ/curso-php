<?php

/*

🔹 9.5 — SESSIONS

🎯 ¿PARA QUÉ SIRVEN LAS SESSIONS?

👉 Guardar información entre páginas.

Ejemplos reales:

    login de usuarios
    carrito de compras
    usuario autenticado

roles

📌 Sin sessions, no hay sistemas reales.

1️⃣ INICIAR SESSION (OBLIGATORIO)

*/

session_start();

// ⚠️ Debe ir SIEMPRE antes de cualquier HTML.

// 2️⃣ GUARDAR DATOS EN SESSION

$_SESSION['usuario'] = 'Marlon';
$_SESSION['rol'] = 'admin';

// 3️⃣ LEER DATOS DE SESSION

echo $_SESSION['usuario'];

// 4️⃣ EJEMPLO REAL SIMPLE

// 📄 login.php

/*
<?php

session_start();

$_SESSION['usuario'] = 'Marlon';

echo 'Sesión iniciada';


📄 dashboard.php

<?php

session_start();

echo 'Bienvenido ' . $_SESSION['usuario'];

📌 Aunque cambies de archivo, el dato sigue ahí.

5️⃣ VALIDAR SESSION (PROFESIONAL)

<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    echo 'Acceso denegado';
    exit;
}

6️⃣ CERRAR SESSION

session_start();
session_destroy();

*/
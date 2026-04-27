<?php

/*

TEMA 13 — Prevención Básica de Ataques Comunes en Formularios PHP

(XSS, CSRF, Manipulación de Datos)

🎯 Objetivo del tema

Aprender amenazas reales en formularios PHP y cómo proteger aplicaciones desde nivel inicial-profesional.

Un formulario no solo recibe datos: también es una puerta de entrada para ataques.

🧠 Concepto Profesional

Muchos principiantes creen:

Si el formulario funciona, ya está listo.

En empresa real falta:

Seguridad
Validación
Control de sesión
Protección contra ataques comunes

🔥 Ataques Más Comunes

Ataque	                    Qué intenta
XSS	                        Ejecutar scripts en navegador
CSRF	                    Enviar acciones sin permiso del usuario
Manipulación de datos	    Cambiar valores enviados manualmente
SQL Injection	            Alterar consultas SQL
Fuerza bruta	            Probar accesos repetidos

Hoy veremos base crítica.

1️⃣ XSS (Cross Site Scripting)

⚠️ Riesgo

Usuario envía:

<script>alert('hack')</script>

Si imprimes esto sin protección:

echo $_POST["nombre"];

Puede ejecutarse en navegador.

✅ Protección

echo htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8');
Regla Senior

Todo dato del usuario que se imprime en HTML debe escaparse.

2️⃣ CSRF (Cross Site Request Forgery)
⚠️ Riesgo

Usuario autenticado en tu sistema.
Otro sitio envía formulario oculto hacia tu web aprovechando su sesión.

Ejemplo:

Cambiar correo
Eliminar cuenta
Crear acción no autorizada

✅ Protección Básica con Token

$_SESSION["token"] = bin2hex(random_bytes(32));

En formulario:

<input type="hidden" name="token" value="...">

Luego validar token al enviar.

Regla Senior

Toda acción sensible con POST debe usar token CSRF.

3️⃣ Manipulación de Datos

⚠️ Riesgo

Formulario muestra:

<input type="hidden" name="precio" value="100000">

Usuario cambia manualmente a:

1

✅ Protección

Nunca confiar en valores críticos enviados por cliente.

Precio real debe venir desde servidor / base de datos.

4️⃣ SQL Injection (Base conceptual)

⚠️ Malo

$sql = "SELECT * FROM usuarios WHERE email = '$email'";

✅ Correcto

Usar consultas preparadas con PDO (lo veremos en Bloque 12).

✅ Código Base Seguro de Formulario

<?php

session_start();

if (empty($_SESSION["token"])) {
    $_SESSION["token"] = bin2hex(random_bytes(32));
}

$errores = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST["token"] !== $_SESSION["token"]) {
        $errores[] = "Solicitud inválida.";
    }

    $nombre = trim($_POST["nombre"] ?? "");

    if ($nombre == "") {
        $errores[] = "Nombre obligatorio.";
    }

    if (empty($errores)) {
        echo htmlspecialchars($nombre);
    }
}
?>

🧠 Checklist Profesional de Seguridad

✔ Validar campos
✔ Escapar salida
✔ Token CSRF
✔ HTTPS
✔ No confiar en hidden inputs
✔ Consultas preparadas
✔ Control de sesiones
✔ Logs de errores privados

❌ Errores Comunes

❌ Pensar que frontend protege

No.

❌ Confiar en hidden inputs

No.

❌ Mostrar datos sin escapar

Riesgoso.

❌ Formularios sensibles sin token

Mala práctica.

❌ Guardar passwords en texto plano

Grave.

🔥 Mentalidad Senior

Todo dato del navegador debe tratarse como:

No confiable hasta validarlo
📌 Lo que aprendiste hoy

✔ Qué es XSS
✔ Qué es CSRF
✔ Manipulación de datos cliente
✔ Principios básicos anti ataques
✔ Mentalidad de seguridad real

*/
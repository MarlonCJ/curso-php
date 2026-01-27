<?php

/*

isset() y empty() — FUNDAMENTOS CRÍTICOS DE PHP
1️⃣ ¿QUÉ ES isset()?

👉 Pregunta:

¿Esta variable EXISTE y NO es null?

📌 Sintaxis
isset($variable)

✅ Devuelve:

true → existe y tiene valor

false → no existe o es null

🧪 Ejemplo 1 — Variable definida
$nombre = 'Marlon';

var_dump(isset($nombre));


Resultado:

bool(true)

🧪 Ejemplo 2 — Variable NO definida
var_dump(isset($apellido));


Resultado:

bool(false)


⚠️ Sin error, PHP solo responde false.

🧪 Ejemplo 3 — Variable null
$email = null;

var_dump(isset($email));


Resultado:

bool(false)


📌 isset() considera null como no existente.

2️⃣ ¿PARA QUÉ SE USA isset() EN LA VIDA REAL?

👉 Para evitar errores como:

Undefined array key
Undefined variable

📌 Caso REAL (formularios)
if (isset($_POST['nombre'])) {
    echo $_POST['nombre'];
}

3️⃣ ¿QUÉ ES empty()?

👉 Pregunta:

¿Esta variable está vacía?

📌 Sintaxis
empty($variable)

🚨 Considera VACÍO:

'' (string vacío)

0

'0'

null

false

[] (array vacío)

variable no definida

🧪 Ejemplo 4 — String vacío
$nombre = '';

var_dump(empty($nombre));


Resultado:

bool(true)

🧪 Ejemplo 5 — Número cero
$edad = 0;

var_dump(empty($edad));


Resultado:

bool(true)


⚠️ Esto es importante:
0 es válido pero empty() lo considera vacío.

4️⃣ DIFERENCIA CLAVE ENTRE isset() Y empty()
Caso	isset	empty
Variable no existe	❌ false	✅ true
null	❌ false	✅ true
''	✅ true	✅ true
'Marlon'	✅ true	❌ false
0	✅ true	✅ true
5️⃣ USO PROFESIONAL CORRECTO (FORMULARIOS)
❌ MAL (riesgo de error)
echo $_POST['nombre'];

✅ BIEN (existencia)
if (isset($_POST['nombre'])) {
    echo $_POST['nombre'];
}

✅ MEJOR (existencia + contenido)
if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
    echo 'Hola ' . $_POST['nombre'];
}


📌 Esta línea es oro puro en PHP.

6️⃣ EJEMPLO REAL COMPLETO

📄 procesar.php

<?php

if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
    echo 'Bienvenido ' . $_POST['nombre'];
} else {
    echo 'Debes escribir tu nombre';
}

7️⃣ ERROR COMÚN DE PRINCIPIANTES

❌ Esto es peligroso:

if (!empty($_POST['nombre'])) {
    echo $_POST['nombre'];
}


👉 Si no existe nombre, PHP lanza warning.

8️⃣ REGLA PROFESIONAL (APÚNTALA)

🔒 SIEMPRE primero isset() y luego empty()

🧠 RESUMEN EN UNA FRASE

isset() → ¿existe?

empty() → ¿está vacío?

*/
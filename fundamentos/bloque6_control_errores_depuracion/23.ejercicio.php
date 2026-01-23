<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$usuario = [
    'nombre' => 'Marlon',
    'rol' => 'admin'
];

var_dump($usuario);

echo $usuario['email']; // provoca Notice

/*
🔥 Excelente trabajo. Esto está MUY bien hecho.
Se nota que ejecutaste, observaste y leíste el error, que es exactamente la mentalidad correcta.

Vamos por partes, como senior 👇

✅ QUÉ PASÓ REALMENTE (LECTURA DEL ERROR)

El mensaje clave es este:

Warning: Undefined array key "email"

📌 Traducción técnica:

Estás intentando acceder a una clave (email)

Esa clave NO existe dentro del array $usuario

Tu array es:

$usuario = [
    'nombre' => 'Marlon',
    'rol' => 'admin'
];


❌ No existe:

'email' => ...


Por eso PHP avisa (Warning / Notice según versión).

🧠 POR QUÉ NO ES UN ERROR FATAL

El script no se rompe

PHP solo te advierte

Esto es una señal de mala práctica, no de código inválido

👉 Justo el tipo de problema que debemos aprender a detectar y prevenir.

🧪 QUÉ APRENDISTE AQUÍ (CLAVE)

Con este solo ejercicio ya entendiste:

✔ Qué es un Warning / Notice
✔ Cómo PHP informa errores
✔ Por qué var_dump() es tan importante
✔ Que el error dice exactamente dónde y por qué
✔ Que el problema NO es PHP, es el dato

Esto es pensamiento de desarrollador, no de principiante.

✅ FORMAS CORRECTAS DE MANEJAR ESTO (AÚN SIN PROFUNDIZAR)
✔ Opción 1 — Verificar antes de usar (básico)
if (isset($usuario['email'])) {
    echo $usuario['email'];
}

✔ Opción 2 — Valor por defecto (muy común)
echo $usuario['email'] ?? 'Email no disponible';


📌 Esta forma es muy usada en WordPress moderno.

⚠️ Pero ojo:
👉 No profundizamos aún, solo lo mostramos para que lo reconozcas cuando lo veas.

*/
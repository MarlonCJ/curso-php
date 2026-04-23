<?php

/*

🔹 BLOQUE 5 — TEMA 9: BÚSQUEDAS Y VALIDACIONES EN ARRAYS EN PHP

📘 Introducción

En programación real no basta con guardar datos. Necesitas responder preguntas como:

¿Existe este usuario?
¿Está este producto en inventario?
¿Ya se registró este correo?
¿Cuál posición tiene este elemento?
¿Existe esta clave?

Eso se resuelve con búsquedas y validaciones.

🎯 Funciones Clave del Tema

Hoy veremos:

in_array() → buscar valores
array_search() → obtener clave o índice
isset() → validar si existe clave
array_key_exists() → validar claves aunque valor sea null

1️⃣ in_array() — Buscar valor

✅ Código
*/

$roles = ["admin", "editor", "cliente"];

if (in_array("editor", $roles)) {
    echo "Existe";
}

/*

📌 Salida
Existe

🔍 Uso Profesional

Roles de usuario
Categorías permitidas
Validación de listas

2️⃣ array_search() — Buscar posición

✅ Código

*/

$frutas = ["Manzana", "Pera", "Uva"];

echo array_search("Pera", $frutas);

/*

📌 Salida
1

🔍 Explicación

Retorna el índice o clave donde encontró el valor.

3️⃣ isset() — Verificar existencia rápida

✅ Código

*/

$usuario = [
    "nombre" => "Carlos",
    "edad" => 30
];

if (isset($usuario["edad"])) {
    echo "Sí existe";
}

/*
📌 Importante

Si el valor es null, isset() devuelve false.

4️⃣ array_key_exists() — Verificar clave real

✅ Código

*/

$config = [
    "modo" => null
];

if (array_key_exists("modo", $config)) {
    echo "Clave existe";
}

/*

📌 Resultado
Clave existe

🔍 Diferencia Clave

isset($config["modo"]); // false

array_key_exists("modo", $config); // true

📌 Ejemplo Profesional Real

Validar correo repetido

$correos = ["ana@mail.com", "luis@mail.com"];

if (in_array("ana@mail.com", $correos)) {
    echo "Correo ya registrado";
}

🧠 Buenas Prácticas

✅ Usa isset() para rapidez común

Muy usada en formularios:

isset($_POST["email"])

✅ Usa array_key_exists() si null es válido
✅ Usa comparación estricta con array_search()

$posicion = array_search("Manzana", $frutas);

if ($posicion !== false) {
    echo "Encontrado";
}

Porque índice 0 puede confundirse con false.

❌ Errores Comunes
❌ Hacer esto:
if (array_search("Manzana", $frutas))

Si está en índice 0, fallará.

❌ Confundir clave con valor
in_array("nombre", $usuario);

Busca valores, no claves.

❌ No validar antes de acceder
echo $usuario["telefono"];

Puede lanzar warning.

🧠 Nivel Profesional

Esto se usa en:

Login
Permisos
Validación formularios
APIs
Configuraciones
Inventarios
Dashboards

🔥 Mini Prueba Mental

$datos = ["A", "B", "C"];

echo array_search("C", $datos);

¿Qué imprime?

*/
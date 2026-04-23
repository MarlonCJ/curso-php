<?php

/*

🔹 BLOQUE 5 — TEMA 7: ELIMINAR ELEMENTOS CON unset() EN PHP

📘 Introducción

En sistemas reales no solo agregas o modificas datos. También necesitas:

Eliminar productos del carrito
Borrar usuarios temporales
Quitar permisos
Remover elementos duplicados
Limpiar datos innecesarios

Para eso usamos unset().

🎯 ¿Qué hace unset()?

Elimina una variable o un elemento específico de un array.

Sintaxis:

unset($array[indice_o_clave]);

1️⃣ Eliminar en Array Indexado

✅ Código

*/

$frutas = ["Manzana", "Pera", "Uva"];

unset($frutas[1]);

print_r($frutas);

/*
📌 Resultado
Array
(
    [0] => Manzana
    [2] => Uva
)

🔍 Explicación Técnica

Se eliminó el índice 1.

Antes:

0 => Manzana
1 => Pera
2 => Uva

Después:

0 => Manzana
2 => Uva

⚠️ PHP no reordena automáticamente los índices.

📌 Reindexar si lo necesitas

$frutas = array_values($frutas);

Resultado:

0 => Manzana
1 => Uva

2️⃣ Eliminar en Array Asociativo

✅ Código

*/

$usuario = [
    "nombre" => "Carlos",
    "edad" => 30,
    "ciudad" => "Villavicencio"
];

unset($usuario["edad"]);

print_r($usuario);

/*

📌 Resultado

Array
(
    [nombre] => Carlos
    [ciudad] => Villavicencio
)

3️⃣ Eliminar en Multidimensional

✅ Código

*/

$empleados = [
    ["nombre" => "Ana"],
    ["nombre" => "Luis"],
    ["nombre" => "Pedro"]
];

unset($empleados[1]);

print_r($empleados);

/*

Se elimina el segundo registro.

📌 Ejemplo Profesional Real

Eliminar producto del carrito

*/

$carrito = [
    101 => "Mouse",
    102 => "Teclado",
    103 => "Monitor"
];

unset($carrito[102]);

/*

🧠 Buenas Prácticas

✅ Verificar existencia

if (isset($usuario["edad"])) {
    unset($usuario["edad"]);
}

✅ Reindexar arrays numéricos si recorrerás luego

$datos = array_values($datos);

✅ Documentar intención

// eliminar item cancelado

unset($pedido[3]);

❌ Errores Comunes
❌ Pensar que deja valor vacío

No deja:

[1] => ""

Lo elimina completamente.

❌ Usar índice inexistente

unset($frutas[9]);

No falla grave, pero no hace nada útil.

❌ Olvidar huecos en índices

Después de:

unset($frutas[1]);

Puede afectar loops con for.

🧠 Nivel Profesional

unset() se usa mucho en:

$_SESSION

Carritos de compra
Filtros dinámicos
Cache temporal
Limpieza de arrays antes de guardar

Ejemplo:

unset($_SESSION["usuario"]);

Cerrar sesión parcial.

🔥 Mini Prueba Mental

$nums = [10, 20, 30];

unset($nums[1]);

print_r($nums);

¿Qué índices quedan?
*/
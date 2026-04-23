<?php

/*

🔹 BLOQUE 5 — TEMA 8: ORDENAMIENTO DE ARRAYS EN PHP (sort, asort, ksort)

📘 Introducción

En sistemas reales necesitas ordenar datos constantemente:

Productos por precio
Usuarios por nombre
Reportes alfabéticos
Configuraciones por clave
Rankings y listados

PHP ofrece funciones nativas para hacerlo eficientemente.

Hoy veremos:

sort() → ordena por valor y reinicia índices
asort() → ordena por valor conservando claves
ksort() → ordena por clave

1️⃣ sort() — Ordenar valores y reindexar

✅ Código

*/

$numeros = [30, 10, 20];

sort($numeros);

print_r($numeros);

/*
📌 Resultado
Array
(
    [0] => 10
    [1] => 20
    [2] => 30
)

🔍 Explicación

Ordena ascendente por defecto

Elimina orden original

Reasigna índices desde 0

2️⃣ asort() — Ordenar valores conservando claves

✅ Código

*/

$edades = [
    "Carlos" => 30,
    "Ana" => 25,
    "Luis" => 40
];

asort($edades);

print_r($edades);

/*

📌 Resultado
Array
(
    [Ana] => 25
    [Carlos] => 30
    [Luis] => 40
)
🔍 Explicación

Ordena por valores (25, 30, 40) pero mantiene las claves.

Muy útil cuando la clave representa identidad.

3️⃣ ksort() — Ordenar por clave

✅ Código

*/

$usuarios = [
    "zeta" => "Pedro",
    "beta" => "Luis",
    "alpha" => "Ana"
];

ksort($usuarios);

print_r($usuarios);

/*

📌 Resultado
Array
(
    [alpha] => Ana
    [beta] => Luis
    [zeta] => Pedro
)
📌 Ejemplo Profesional Real

Ordenar productos por precio

$precios = [
   "Mouse" => 50000,
   "Teclado" => 80000,
   "Cable" => 15000
];

asort($precios);

Ahora quedan del más barato al más caro.


🧠 Buenas Prácticas

✅ Usa la función correcta según necesidad

sort() → lista simple
asort() → mantener relación clave/valor
ksort() → ordenar por identificador

✅ Recuerda que modifican el array original

sort($datos);

No devuelve nuevo array; cambia el existente.

✅ Para descendente existen:

rsort()
arsort()
krsort()

❌ Errores Comunes
❌ Usar sort() en array asociativo importante
sort($usuarios);

Pierdes claves.

❌ Esperar retorno ordenado
$nuevo = sort($datos);

sort() devuelve true/false, no array nuevo.

❌ No saber que cambia índices

Después de sort(), índices empiezan desde cero.

🧠 Nivel Profesional

Se usa en:

Dashboards
Reportes administrativos
Rankings
Tablas HTML dinámicas
Estadísticas
Catálogos

🔥 Mini Prueba Mental

$datos = ["c", "a", "b"];

sort($datos);

echo $datos[0];

¿Qué imprime?

*/
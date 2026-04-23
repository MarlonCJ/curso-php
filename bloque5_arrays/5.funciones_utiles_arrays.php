<?php

/*

🔹 BLOQUE 5 — TEMA 5: FUNCIONES ÚTILES DE ARRAYS EN PHP

📘 Introducción

PHP trae muchas funciones internas para trabajar arrays.
Dominar estas funciones te ahorra tiempo, reduce errores y te hace programar como profesional.

Hoy veremos las más usadas:

count()
array_push()
in_array()
array_merge()

1️⃣ count() — Contar elementos

Devuelve cuántos elementos tiene un array.

✅ Código

*/

$frutas = ["Manzana", "Pera", "Uva"];

echo count($frutas);


/*

📌 Salida
3

🔍 Uso profesional

Saber cantidad de registros
Validar si hay datos
Mostrar totales

if (count($frutas) > 0) {
    echo "Hay datos";
}

2️⃣ array_push() — Agregar al final

Inserta uno o varios elementos al final del array.

✅ Código

*/

$frutas = ["Manzana", "Pera"];

array_push($frutas, "Uva");

print_r($frutas);

/*

Resultado interno:

Array
(
    [0] => Manzana
    [1] => Pera
    [2] => Uva
)

📌 Forma moderna recomendada

Más usada:

$frutas[] = "Uva";

3️⃣ in_array() — Buscar valor

Verifica si un valor existe dentro del array.

✅ Código

*/

$frutas = ["Manzana", "Pera", "Uva"];

if (in_array("Pera", $frutas)) {
    echo "Existe";
}

/*

📌 Salida

Existe

🔍 Uso real

Validar roles
Buscar categorías
Revisar permisos
Verificar datos enviados

4️⃣ array_merge() — Unir arrays

Combina arrays en uno nuevo.

✅ Código

*/

$a = ["Rojo", "Azul"];
$b = ["Negro", "Blanco"];

$resultado = array_merge($a, $b);

print_r($resultado);

/*

Resultado:

Array
(
    [0] => Rojo
    [1] => Azul
    [2] => Negro
    [3] => Blanco
)

🧠 Buenas Prácticas

✅ Usa funciones nativas antes de reinventar lógica

Incorrecto:

$contador = 0;

foreach ($datos as $x) {
   $contador++;
}

Correcto:

count($datos);

✅ Usa nombres claros

$totalUsuarios
$productosUnidos

✅ Lee documentación oficial

PHP tiene decenas de funciones útiles.

❌ Errores Comunes
❌ Confundir count() con último índice

$datos = ["A", "B", "C"];
count($datos); // 3

Último índice es 2, no 3.

❌ Pensar que in_array() busca claves

Busca valores, no claves.

❌ Creer que array_merge() modifica original automáticamente

Debes guardar resultado:

$nuevo = array_merge($a, $b);

🧠 Nivel Profesional

Estas funciones se usan constantemente en:

APIs
Backends
Formularios
Dashboards
Reportes
Sistemas administrativos

🔥 Mini Prueba Mental

$nums = [10, 20, 30];
echo count($nums);

¿Qué imprime?

2

*/
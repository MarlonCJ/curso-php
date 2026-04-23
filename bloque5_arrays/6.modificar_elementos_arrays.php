<?php

/*

🔹 BLOQUE 5 — TEMA 6: MODIFICAR ELEMENTOS DE ARRAYS EN PHP

📘 Introducción

Crear arrays no es suficiente.
En sistemas reales necesitas:

Actualizar nombres
Cambiar precios
Modificar estados
Reemplazar datos
Editar registros cargados

Eso se logra modificando elementos existentes.

🎯 Regla Base

Para modificar un valor:

$array[indice_o_clave] = nuevo_valor;

1️⃣ Modificar en Array Indexado

✅ Código

*/


$frutas = ["Manzana", "Pera", "Uva"];

$frutas[1] = "Mango";

print_r($frutas);

/*

📌 Resultado

Array
(
    [0] => Manzana
    [1] => Mango
    [2] => Uva
)

🔍 Explicación

Antes:

[1] => Pera

Después:

[1] => Mango

Se reemplazó el valor.

2️⃣ Modificar en Array Asociativo

✅ Código

*/

$usuario = [
    "nombre" => "Carlos",
    "edad" => 30
];

$usuario["edad"] = 31;

print_r($usuario);

/*

📌 Resultado

Array
(
    [nombre] => Carlos
    [edad] => 31
)

3️⃣ Modificar Array Multidimensional

✅ Código

*/


$empleados = [
    ["nombre" => "Ana", "cargo" => "Auxiliar"],
    ["nombre" => "Luis", "cargo" => "Vendedor"]
];

$empleados[1]["cargo"] = "Supervisor";

print_r($empleados);

/*

🔍 Explicación

$empleados[1]["cargo"]

Significa:

segundo registro

campo cargo

📌 Ejemplo Profesional Real

*/

$producto = [
    "nombre" => "Mouse",
    "precio" => 50000,
    "stock" => true
];

$producto["precio"] = 45000;
$producto["stock"] = false;

/*

Actualización típica de inventario.

🧠 Buenas Prácticas

✅ Validar existencia antes de modificar

if (isset($usuario["edad"])) {
    $usuario["edad"] = 31;
}

✅ Usar nombres claros

$productos[0]["precio"] = 90000;

✅ Centralizar cambios

Si cambias muchos datos, usa funciones luego (tema futuro).

❌ Errores Comunes
❌ Índice inexistente

$frutas[5] = "Kiwi";

No reemplaza uno existente: crea nuevo índice.

❌ Clave mal escrita

$usuario["Edad"] = 31;

No modifica "edad"; crea otra clave.

❌ Confundir = con ==

$usuario["edad"] == 31;

Eso compara, no modifica.

🧠 Nivel Profesional

Modificar arrays es la base de:

Carritos de compra
Sesiones
Datos temporales
Inventarios
Edición de usuarios
APIs antes de guardar en BD

🔥 Mini Prueba Mental

$datos = ["A", "B", "C"];

$datos[2] = "Z";

echo $datos[2];

¿Qué imprime?

*/
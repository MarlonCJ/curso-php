<?php

/*

BLOQUE 5 — TEMA 3: ARRAYS MULTIDIMENSIONALES EN PHP

📘 ¿Qué es un Array Multidimensional?

Un array multidimensional es un array que contiene otros arrays dentro de él.

En palabras simples:

Es una estructura de datos en niveles.

Ejemplo:

$usuarios = [
    ["Carlos", 30],
    ["Ana", 25],
    ["Luis", 40]
];

Aquí:

El array principal contiene 3 arrays internos.
Cada array interno representa un registro.

🎯 ¿Por qué es importante?

Porque en sistemas reales trabajas con:

Lista de usuarios
Productos
Pedidos
Facturas
Resultados SQL
Datos JSON
Tablas dinámicas

Todos suelen venir en forma multidimensional.

✅ Código Completo Funcional

*/

$usuarios = [
    ["Carlos", 30],
    ["Ana", 25],
    ["Luis", 40]
];

echo $usuarios[0][0] . PHP_EOL;
echo $usuarios[1][0] . PHP_EOL;
echo $usuarios[2][1];


/*

📌 Salida

Carlos
Ana
40

🔍 Explicación Técnica Detallada

Estructura Interna

$usuarios[0] = ["Carlos", 30];
$usuarios[1] = ["Ana", 25];
$usuarios[2] = ["Luis", 40];

Luego:

$usuarios[0][0]

Significa:

Primer array interno (0)
Primer dato dentro de ese array (0)

Resultado:

Carlos

📌 Ejemplo Profesional con Asociativos

Mucho más usado en empresas:

*/

$empleados = [
    [
        "nombre" => "Carlos",
        "cargo"  => "Analista"
    ],
    [
        "nombre" => "Laura",
        "cargo"  => "Diseñadora"
    ]
];

echo $empleados[1]["cargo"];

/*

Salida:
Diseñadora

🧠 Buenas Prácticas

✅ Usa arrays asociativos internos para claridad

Mejor:

$clientes = [
   ["nombre" => "Ana", "edad" => 20]
];

Peor:

$clientes = [
   ["Ana", 20]
];

Porque no sabes qué significa cada posición.

✅ Mantén estructura consistente

Todos los registros deben tener mismas claves:

[
  ["nombre"=>"Ana","edad"=>20],
  ["nombre"=>"Luis","edad"=>30]
]

✅ Ideal para tablas dinámicas

❌ Errores Comunes
❌ Índices mal ubicados

$usuarios[1][5];

No existe.

❌ Mezclar estructuras

[
 ["Ana",20],
 ["nombre"=>"Luis"]
]

Desordenado y poco profesional.

❌ No entender niveles

$usuarios[0];

Eso devuelve TODO el array interno:

["Carlos",30]

No solo un dato.

🧠 Nivel Profesional

Cuando haces una consulta SQL:

SELECT nombre, correo FROM usuarios

Muchas veces recibes algo así:

[
   ["nombre"=>"Ana","correo"=>"ana@mail.com"],
   ["nombre"=>"Luis","correo"=>"luis@mail.com"]
]

Eso es multidimensional.

🔥 Mini Prueba Mental

$datos = [
   ["Rojo", "Azul"],
   ["Negro", "Blanco"]
];

echo $datos[1][0];

¿Qué imprime?

blanco

*/


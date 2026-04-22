<?php

/*

🔹 BLOQUE 5 — TEMA 2: ARRAYS ASOCIATIVOS EN PHP

📘 ¿Qué es un Array Asociativo?

Un array asociativo almacena datos usando claves personalizadas en lugar de índices numéricos automáticos.

En vez de:

0 => "Marlon"
1 => 25
2 => "Colombia"

Usamos:

"nombre" => "Marlon"
"edad"   => 25
"pais"   => "Colombia"

Esto hace el código más claro y profesional.

🎯 ¿Por qué es importante?

Cuando manejas datos reales, no quieres recordar que:

índice 0 = nombre
índice 1 = edad
índice 2 = país

Quieres algo legible:

$usuario["nombre"]
$usuario["edad"]
$usuario["pais"]

Eso es exactamente lo que se usa en:

Bases de datos (fetch_assoc)
APIs JSON
Configuraciones
Usuarios
Productos
Facturas

✅ Código Completo Funcional

*/

$usuario = [
    "nombre" => "Carlos",
    "edad"   => 30,
    "ciudad" => "Villavicencio"
];

echo $usuario["nombre"] . PHP_EOL;
echo $usuario["edad"] . PHP_EOL;
echo $usuario["ciudad"];

/*

📌 Salida

Carlos
30
Villavicencio

🔍 Explicación Técnica Detallada

Esta estructura:

$usuario = [
   "nombre" => "Carlos"
];

Significa:

clave = "nombre"
valor = "Carlos"

Acceso al valor

$usuario["nombre"];

Busca la clave "nombre" y devuelve:

Carlos

📌 Ejemplo Real Profesional

*/

$producto = [
    "id"       => 1001,
    "nombre"   => "Mouse Gamer",
    "precio"   => 85000,
    "stock"    => true
];

echo $producto["nombre"];

/*

Salida:

Mouse Gamer

🧠 Buenas Prácticas

✅ Usa claves descriptivas

$cliente["telefono"];
$cliente["correo"];

No:

$cliente["x"];
$cliente["a1"];

✅ Mantén consistencia

Si usas:

"nombre"

No mezcles luego:

"Nombre"
"NOMBRE"

PHP diferencia mayúsculas y minúsculas en claves.

✅ Organiza datos relacionados

$empleado = [
   "nombre" => "Laura",
   "cargo"  => "Analista",
   "salario"=> 2500000
];

❌ Errores Comunes
❌ Clave inexistente

echo $usuario["telefono"];

Error:

Undefined array key "telefono"

❌ Duplicar claves

$datos = [
   "nombre" => "Ana",
   "nombre" => "Luis"
];

Resultado final:

nombre = Luis

La última sobrescribe.

❌ Usar índices numéricos cuando necesitas claridad

$persona = ["Carlos", 30, "Meta"];

Menos profesional que:

$persona = [
   "nombre" => "Carlos",
   "edad" => 30,
   "departamento" => "Meta"
];

🧠 Nivel Profesional

Cuando consultes MySQL con PDO muchas veces recibirás:

[
 "id" => 1,
 "nombre" => "Juan",
 "correo" => "juan@email.com"
]

Si no dominas arrays asociativos, no podrás trabajar backend real.

🔥 Mini Prueba Mental

$auto = [
   "marca" => "Toyota",
   "modelo" => "Corolla"
];

echo $auto["modelo"];

¿Qué imprime?

*/
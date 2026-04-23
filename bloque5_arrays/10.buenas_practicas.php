<?php

/*

🔹 BLOQUE 5 — TEMA 10: BUENAS PRÁCTICAS CON ARRAYS EN PHP

📘 Introducción

Saber crear arrays no te vuelve profesional.
Lo que diferencia a un desarrollador senior es cómo organiza, nombra y manipula los datos.

Dos personas pueden resolver lo mismo:

Una escribe código desordenado.
Otra escribe código limpio, mantenible y escalable.

Hoy veremos las buenas prácticas reales.

1️⃣ Usa nombres descriptivos

❌ Malo

$x = ["Ana", "Luis"];
$y = [50000, 70000];

✅ Profesional

$usuarios = ["Ana", "Luis"];
$salarios = [50000, 70000];

🎯 Regla

El nombre debe explicar qué contiene.

2️⃣ Usa arrays asociativos para datos reales

❌ Poco claro

$usuario = ["Carlos", 30, "Meta"];

✅ Profesional

$usuario = [
    "nombre" => "Carlos",
    "edad" => 30,
    "departamento" => "Meta"
];

3️⃣ Mantén estructura consistente

❌ Malo

$usuarios = [
   ["nombre" => "Ana"],
   ["edad" => 25]
];

✅ Correcto

$usuarios = [
   ["nombre" => "Ana", "edad" => 20],
   ["nombre" => "Luis", "edad" => 25]
];

4️⃣ Valida antes de acceder

❌ Riesgoso

echo $usuario["telefono"];

✅ Seguro

if (isset($usuario["telefono"])) {
    echo $usuario["telefono"];
}

5️⃣ Usa funciones nativas

❌ Reinventar lógica

$total = 0;

foreach ($datos as $x) {
   $total++;
}

✅ Profesional

count($datos);

6️⃣ No mezcles tipos sin necesidad

❌ Confuso

$datos = [10, "Hola", true, 4.5];

✅ Mejor

$edades = [18, 20, 25];

7️⃣ Usa indentación limpia

❌ Malo

$usuarios=[["nombre"=>"Ana"],["nombre"=>"Luis"]];

✅ Bien

$usuarios = [
    ["nombre" => "Ana"],
    ["nombre" => "Luis"]
];

8️⃣ Comenta solo cuando aporte valor

✅ Útil

$carrito = []; // productos seleccionados por usuario

❌ Errores Comunes Profesionales
❌ Variables genéricas

$a = [];
$b = [];

❌ No validar claves

Genera warnings innecesarios.

❌ Estructuras caóticas
[
 ["Ana",20],
 ["nombre"=>"Luis"]
]

❌ Repetir código manualmente

Usa loops y funciones.

🧠 Nivel Senior

Un backend profesional usa arrays en:

APIs JSON
Resultados SQL
Configuración sistema
Menús dinámicos
Inventarios
Reportes
Cache temporal

Si tus arrays están mal estructurados, todo el sistema se vuelve frágil.

📌 Fin del Bloque Teórico 5 — Arrays

Has visto:

Arrays indexados
Asociativos
Multidimensionales
foreach
Funciones útiles
Modificar elementos
unset()
Ordenamiento
Búsquedas
Buenas prácticas

*/
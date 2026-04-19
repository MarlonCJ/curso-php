<?php
/*

📘 BLOQUE 4 — TEMA 7: SCOPE DE VARIABLES (ALCANCE)

🎯 Definición Profesional

El scope (alcance) define dónde una variable existe y desde dónde puede usarse.

No toda variable está disponible en todo el programa.

Entender esto evita errores clásicos y es obligatorio para programar profesionalmente.

🧠 Tipos Principales de Scope en PHP

Local → vive dentro de una función.
Global → vive fuera de funciones.
Static → conserva valor entre llamadas.

Hoy veremos base sólida: local y global.

📌 Scope Local

Una variable creada dentro de una función solo existe allí.

*/

function prueba() {
    $nombre = "Carlos";
    echo $nombre;
}

prueba();

/*

Resultado:

Carlos

❌ Intentar usarla fuera
echo $nombre;

❌ Error / variable indefinida.

Porque $nombre nació dentro de la función.

📌 Scope Global

Variable creada fuera de función.

<?php

$empresa = "Tech SAS";

echo $empresa;
Resultado:
Tech SAS

❌ Problema Clásico

<?php

$empresa = "Tech SAS";

function mostrar() {
    echo $empresa;
}

mostrar();

❌ No funciona directamente.

La función tiene su propio entorno.

✅ Acceder Global con global

<?php

$empresa = "Tech SAS";

function mostrar() {
    global $empresa;
    echo $empresa;
}

mostrar();
Resultado:
Tech SAS

🔍 ¿Qué hace global?

Importa la variable global al scope local de la función.

📌 Mejor Práctica Profesional: Usar Parámetros

En vez de depender de globales:

❌ Menos recomendable

global $empresa;

✅ Mejor

function mostrar($empresa) {
    echo $empresa;
}

mostrar("Tech SAS");

Más limpio, testeable y mantenible.

🏢 Caso Empresarial Real

$config = "modo producción";

function iniciarSistema($config) {
    echo $config;
}

Pasar datos explícitamente evita dependencias ocultas.

📌 Scope Local Independiente

function uno() {
    $x = 10;
}

function dos() {
    $x = 50;
}

Cada $x vive solo en su función.

No chocan.

❌ Errores Comunes

1. Creer que una variable interna sale sola

function test() {
   $dato = 5;
}

echo $dato;

❌ No existe afuera.

2. Abusar de global

Mucho acoplamiento.

3. Reusar nombres sin entender contexto

$nombre = "Ana";
function x() { $nombre = "Luis"; }

Son variables distintas.

✅ Buenas Prácticas

Prefiere parámetros y return.
Usa global solo cuando sea muy necesario.
Mantén variables en el menor scope posible.
Nombres claros.

🧠 Mentalidad Senior

Mientras menor alcance tenga una variable, más control tienes.

Variables globales excesivas = sistemas frágiles.

📌 Ejemplo Profesional Limpio

<?php

function calcular($precio, $iva) {
    return $precio + $iva;
}

echo calcular(100, 19);

Sin globales, limpio y predecible.
*/
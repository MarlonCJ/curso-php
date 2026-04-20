<?php

/*

📘 BLOQUE 4 — TEMA 10: FUNCIONES ANÓNIMAS EN PHP

🎯 Definición Profesional

Una función anónima es una función sin nombre.

Se crea normalmente para:

Guardarla en una variable
Pasarla como argumento
Usarla una sola vez
Callbacks
Lógica temporal

También se conocen como closures cuando capturan variables externas.

🧠 Sintaxis Básica

$variable = function () {
    // código
};

✅ Ejemplo Básico

*/

$saludar = function () {
    echo "Hola usuario";
};

$saludar();

/*

Resultado:
Hola usuario

🔍 Explicación Técnica
Esta parte:

function () {
}

Crea la función sin nombre.

Esta parte:

$saludar =

Guarda la función en una variable.

Luego:

$saludar();

La ejecuta.

📌 Con Parámetros

*/

$sumar = function ($a, $b) {
    return $a + $b;
};

echo $sumar(5, 3);

/*

Resultado:
8

🏢 Uso Empresarial Real

Muy usadas en:

array_map()
array_filter()
usort()
Middlewares
Eventos

Configuración dinámica

✅ Ejemplo con array_map

*/

$numeros = [1, 2, 3];

$resultado = array_map(function ($n) {
    return $n * 2;
}, $numeros);

print_r($resultado);


/*

Resultado:

Array
(
    [0] => 2
    [1] => 4
    [2] => 6
)

📌 Closure con use

Permite usar variables externas.

<?php

$iva = 0.19;

$calcular = function ($precio) use ($iva) {
    return $precio * $iva;
};

echo $calcular(100);

Resultado:
19

❌ Errores Comunes

1. Olvidar punto y coma final

$hola = function () {
    echo "Hola";
}

❌ Falta ;

2. No guardar la función

function () {
 echo "Hola";
}

❌ Inválido en ese contexto.

3. Confundir variable con llamada

$hola;

No ejecuta.

Debe ser:

$hola();

✅ Buenas Prácticas

Úsalas para lógica puntual.

Si la función crecerá mucho, usa función nombrada.
Nombres claros en la variable contenedora.

🧠 Mentalidad Senior

Funciones anónimas son herramientas tácticas.
No reemplazan toda arquitectura, pero resuelven flujos modernos elegantemente.

📌 Ejemplo Profesional Limpio

<?php

$descuento = function ($precio) {
    return $precio * 0.9;
};

echo $descuento(100000);

Resultado:
90000

*/


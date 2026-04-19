<?php

/*

📘 BLOQUE 4 — TEMA 6: RETORNO DE VALORES CON return

🎯 Definición Profesional

Hasta ahora usamos funciones que muestran información con echo.

Pero en desarrollo profesional muchas funciones no imprimen nada:

calculan, procesan o generan un valor y lo devuelven.

Eso se hace con:

return

return entrega un resultado al lugar donde fue llamada la función.


🧠 Diferencia Clave

❌ Mostrar con echo

function sumar() {
    echo 5 + 3;
}

Imprime 8, pero no puedes reutilizar fácilmente ese valor.

✅ Retornar con return

function sumar() {
    return 5 + 3;
}

Ahora el valor puede guardarse, combinarse o evaluarse.

✅ Ejemplo Básico

*/

function obtenerNombre() {
    return "Carlos";
}

echo obtenerNombre();
echo "\n";

/*

📌 Resultado:

Carlos

🔍 ¿Qué pasó internamente?

Cuando PHP ejecuta:

obtenerNombre();

La función devuelve:

"Carlos"

Y luego echo imprime ese valor.

📌 Ejemplo con Parámetros

*/

function sumar($a, $b) {
    return $a + $b;
}

echo sumar(10, 5);
echo "\n";

/*

Resultado:

15

🏢 Uso Profesional Real


Calcular IVA

*/

function calcularIva($precio) {
    return $precio * 0.19;
}

$precioIva = calcularIva(10000);
echo $precioIva;
echo "\n";

/*

Validar edad

*/

function esMayor($edad) {
    return $edad >= 18;
}

echo esMayor(20);
echo "\n";

/*
Obtener nombre completo

*/

function nombreCompleto($n, $a) {
    return $n . " " . $a;
}

echo nombreCompleto('Marlon', 'Jara');
echo "\n";

/*

📌 Guardar Resultado

$total = sumar(20, 30);
echo $total;

Resultado:

50

📌 Usar Dentro de Otra Operación

echo sumar(5, 5) * 2;

Resultado:

20

❗ Regla Crítica

Cuando PHP encuentra return, la función termina inmediatamente.

function prueba() {
    return "Hola";
    echo "Nunca se ejecuta";
}

❌ Errores Comunes

1. Confundir echo con return

function sumar() {
    echo 10;
}

No retorna valor útil.

2. No usar el valor retornado

sumar(5, 5);

Se ejecuta, pero no se muestra ni guarda.

3. Código después de return

No se ejecutará.

✅ Buenas Prácticas

Usa return para resultados.
Usa echo solo para salida visual.
Mantén funciones enfocadas en producir datos.

🧠 Mentalidad Senior

Funciones profesionales devuelven datos, no solo imprimen texto.

Eso permite construir sistemas modulares.

📌 Ejemplo Profesional Limpio

*/

function calcularDescuento($precio) {
    return $precio * 0.9;
}

$final = calcularDescuento(100000);

echo $final;

/*
Resultado:
90000

*/
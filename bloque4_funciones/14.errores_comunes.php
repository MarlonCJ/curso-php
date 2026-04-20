<?php

/*

BLOQUE 4 — TEMA 14: ERRORES COMUNES EN FUNCIONES Y CÓMO EVITARLOS

🎯 Definición Profesional

Muchos errores en PHP no ocurren por falta de sintaxis, sino por mal diseño de funciones.

Un junior hace que funcione.
Un senior evita que falle mañana.

Hoy veremos los errores más comunes y cómo prevenirlos.

❌ ERROR 1: No llamar la función

<?php

function saludar() {
    echo "Hola";
}

Resultado:

Nada.

✅ Solución

saludar();

❌ ERROR 2: Confundir echo con return

function sumar($a, $b) {
    echo $a + $b;
}

$total = sumar(5, 3);

$total no tendrá el valor esperado.

✅ Correcto

function sumar($a, $b) {
    return $a + $b;
}

❌ ERROR 3: Parámetros insuficientes

function mostrar($nombre, $edad) {
}

mostrar("Carlos");

Faltan argumentos.

✅ Solución

Enviar todos los requeridos o usar defaults.

function mostrar($nombre, $edad = 0) {
}

❌ ERROR 4: Orden incorrecto de argumentos

function crear($nombre, $correo) {
}

crear("correo@mail.com", "Carlos");

Lógica incorrecta.

✅ Solución

Respetar orden esperado.

❌ ERROR 5: Variables globales innecesarias

$total = 100;

function ver() {
    global $total;
}

Acoplamiento alto.

✅ Solución

function ver($total) {
    return $total;
}

❌ ERROR 6: Funciones gigantes

function sistemaCompleto() {
   // 200 líneas
}

Difícil mantener.

✅ Solución

Dividir:

validar();
guardar();
notificar();

❌ ERROR 7: Nombres malos

function x1() {}
function dato() {}

✅ Mejor

function calcularTotal() {}
function validarUsuario() {}

❌ ERROR 8: Código después de return

function prueba() {
    return 5;
    echo "Hola";
}

Nunca se ejecuta.

❌ ERROR 9: Repetir lógica en vez de reutilizar

echo 5 * 0.19;
echo 10 * 0.19;
echo 20 * 0.19;

✅ Mejor

function iva($precio) {
    return $precio * 0.19;
}

❌ ERROR 10: No validar datos externos

sumar($_POST['a'], $_POST['b']);

Riesgo de tipos erróneos.

✅ Solución

Validar antes de usar.

🏢 Caso Real Empresarial

Mal código:

function procesarPedido() {
   // recibe datos
   // guarda
   // imprime html
   // manda correo
   // cobra
}

Buen diseño:

validarPedido();
guardarPedido();
procesarPago();
enviarCorreo();

✅ Buenas Prácticas Preventivas

Funciones pequeñas.
Parámetros claros.
Retornos útiles.
Nombres descriptivos.
Reutilización.
Sin dependencias ocultas.

🧠 Mentalidad Senior

Cada función debe ser tan clara que otro desarrollador la entienda en segundos.

Si genera dudas, se mejora.

📌 Ejemplo Profesional Limpio

<?php

function calcularDescuento(float $precio): float {
    return $precio * 0.9;
}

echo calcularDescuento(100);
Resultado:
90

*/
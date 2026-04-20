<?php

/*

📘 BLOQUE 4 — TEMA 13: BUENAS PRÁCTICAS PROFESIONALES CON FUNCIONES

🎯 Definición Profesional

Saber crear funciones no basta.
Un desarrollador profesional debe escribir funciones limpias, mantenibles, reutilizables y claras.

Las malas funciones funcionan hoy.
Las buenas funciones funcionan hoy y dentro de 2 años.

🧠 Regla #1: Una Función = Una Responsabilidad

✅ Correcto

function calcularIva($precio) {
    return $precio * 0.19;
}

❌ Incorrecto

function procesarTodo() {
    // calcula iva
    // guarda usuario
    // envía correo
    // imprime factura
}

Demasiadas tareas.

📌 Regla #2: Nombres Claros

✅ Bueno

crearUsuario()
enviarCorreo()
validarLogin()
calcularTotal()

❌ Malo

x()
dato()
hacer()
proceso1()

El nombre debe explicar intención.

📌 Regla #3: Parámetros Necesarios

❌ Exceso

function crear($a,$b,$c,$d,$e,$f)

✅ Mejor diseño

function crearUsuario($nombre, $correo)

Muchos parámetros suelen indicar mal diseño.

📌 Regla #4: Retorna Datos, No Mezcles Salida

Mejor:

function sumar($a, $b) {
    return $a + $b;
}

echo sumar(5,3);

Menos flexible:

function sumar($a,$b) {
    echo $a + $b;
}

📌 Regla #5: Evita Variables Globales

❌

$total = 100;

function ver() {
    global $total;
}

✅

function ver($total) {
    return $total;
}

📌 Regla #6: Tipado Cuando Sea Posible

function total(float $precio, int $cant): float {
    return $precio * $cant;
}

Más seguro y profesional.

📌 Regla #7: Funciones Cortas

Si una función ocupa 100 líneas, probablemente necesita dividirse.

Mejor:

validarDatos();
guardarUsuario();
enviarCorreo();

🏢 Caso Empresarial Real

function registrarCliente(array $datos): bool
function generarFactura(int $id): string
function calcularDescuento(float $total): float

Claras y orientadas al negocio.

❌ Errores Comunes

1. Funciones gigantes

Difíciles de mantener.

2. Nombres vagos

No comunican nada.

3. Mezclar lógica + HTML + base de datos en una sola función

Caos técnico.

4. Duplicar lógica en varias funciones

✅ Buenas Prácticas Senior Extra

Usa verbos en nombres.
Mantén consistencia.
Documenta si es compleja.
Reutiliza antes de duplicar.
Piensa en pruebas futuras.

🧠 Mentalidad Senior

Cuando escribes una función pregúntate:

¿Hace una sola cosa?
¿Su nombre se entiende?
¿Se puede reutilizar?
¿Es fácil mantenerla?
¿Romperá algo mañana?

Si falla varias → rediseñar.

📌 Ejemplo Profesional Limpio
<?php

function calcularTotal(float $precio, int $cantidad): float {
    return $precio * $cantidad;
}

$total = calcularTotal(19.9, 3);

echo $total;
Resultado:
59.7

*/
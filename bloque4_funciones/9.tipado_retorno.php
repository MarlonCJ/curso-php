<?php

/*

📘 BLOQUE 4 — TEMA 9: TIPADO DE RETORNO EN FUNCIONES

🎯 Definición Profesional

Así como puedes indicar qué recibe una función, también puedes indicar qué debe devolver.

Eso se llama tipado de retorno.

Sirve para garantizar consistencia y evitar errores lógicos.

🧠 Sintaxis

function nombreFuncion(): tipo {
}

El tipo va después de los paréntesis.

✅ Ejemplo con int

*/

function sumar(int $a, int $b): int {
    return $a + $b;
}

echo sumar(5, 3);

/*

Resultado:

8

🔍 Explicación Técnica

: int

Significa:

Esta función debe retornar un entero.

📌 Tipos Comunes de Retorno

int
function cantidad(): int

float
function precio(): float

string
function nombre(): string

bool
function acceso(): bool

array
function listar(): array

✅ Ejemplo Real

<?php

function obtenerSaludo(): string {
    return "Bienvenido";
}

echo obtenerSaludo();

Resultado:
Bienvenido

❌ Error de Retorno Incorrecto

function edad(): int {
    return "treinta";
}

❌ Devuelve string cuando prometió int.

📌 Caso Profesional

function usuarioAutenticado(): bool {
    return true;
}

Perfecto para condiciones:

if (usuarioAutenticado()) {
    echo "Acceso permitido";
}

🏢 Uso Empresarial

Obtener total

function totalVenta(): float

Buscar usuarios
function listarUsuarios(): array

Estado de pago
function pagoExitoso(): bool

📌 Strict Types + Retorno

declare(strict_types=1);

Hace más estricta la validación de tipos.

❌ Errores Comunes

1. No retornar nada

function nombre(): string {
}

❌ Si prometes retorno, debes devolver.

2. Tipo equivocado

function precio(): float {
    return "100";
}

3. Usar echo en vez de return

function dato(): string {
    echo "Hola";
}

❌ Imprime, no retorna correctamente.

✅ Buenas Prácticas

Tipar retorno en funciones críticas.
Cumplir exactamente el contrato.
Usar tipos claros según dominio del negocio.

🧠 Mentalidad Senior

Una función tipada dice:

“Esto recibo y esto entrego”.

Eso reduce bugs y mejora colaboración en equipos.

📌 Ejemplo Profesional Limpio

<?php

declare(strict_types=1);

function calcularIva(float $precio): float {
    return $precio * 0.19;
}

echo calcularIva(100000);

Resultado:
19000

*/
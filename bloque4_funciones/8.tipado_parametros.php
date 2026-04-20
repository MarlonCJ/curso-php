<?php

/*

📘 BLOQUE 4 — TEMA 8: TIPADO DE PARÁMETROS EN FUNCIONES

🎯 Definición Profesional

El tipado de parámetros permite indicar qué tipo de dato debe recibir una función.

Esto vuelve el código:

Más seguro
Más predecible
Más profesional
Más fácil de mantener

En sistemas reales, tipar reduce errores silenciosos.

🧠 Sintaxis Básica

function nombreFuncion(tipo $parametro) {
}

✅ Ejemplo con int

*/

function sumar(int $a, int $b) {
    echo $a + $b;
}

sumar(10, 5);

/*

Resultado:

15

🔍 ¿Qué significa?

int $a

PHP espera un número entero.

📌 Tipos Comunes

int
Enteros.
function edad(int $edad)

float
Decimales.
function precio(float $valor)

string
Texto.
function saludar(string $nombre)

bool
Verdadero/Falso.
function acceso(bool $activo)

array
Arreglos.
function listar(array $datos)

✅ Ejemplo Real

*/

function saludar(string $nombre) {
    echo "Hola $nombre";
}

saludar("Carlos");

/*

Resultado:

Hola Carlos

❌ Error Conceptual

saludar(50);

Si el sistema es estricto, dará error de tipo.

📌 Strict Types (Nivel Profesional)

declare(strict_types=1);

Esto obliga tipos exactos.

Ejemplo:

<?php

declare(strict_types=1);

function sumar(int $a, int $b) {
    return $a + $b;
}

🏢 Caso Empresarial

function registrarPago(float $monto, string $metodo) {
}

Evita enviar:

registrarPago("hola", []);

📌 Tipado con Varios Parámetros

function crearUsuario(string $nombre, int $edad, bool $activo) {
}

❌ Errores Comunes

1. No tipar en proyectos grandes

Genera caos de datos.

2. Elegir tipo incorrecto
float $edad

Edad suele ser int.

3. Confiar en datos externos

Datos de formularios llegan como string. Validar y convertir.

✅ Buenas Prácticas

Tipar funciones nuevas.
Usar strict_types en proyectos serios.
Elegir tipo semánticamente correcto.
Validar inputs externos.

🧠 Mentalidad Senior

Una función tipada comunica contrato:

“Para usarme, envíame esto correctamente”.

Eso mejora equipos y mantenimiento.

📌 Ejemplo Profesional Limpio

<?php

declare(strict_types=1);

function calcularTotal(float $precio, int $cantidad) {
    echo $precio * $cantidad;
}

calcularTotal(19.9, 3);
Resultado:
59.7

*/

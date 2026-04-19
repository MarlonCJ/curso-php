<?php

/*

📘 BLOQUE 4 — TEMA 5: VALORES POR DEFECTO EN PARÁMETROS

🎯 Definición Profesional

Un valor por defecto permite que un parámetro ya tenga un valor asignado si el usuario no envía uno al llamar la función.

Esto hace funciones más flexibles y evita errores por datos faltantes.

🧠 Sintaxis

function nombreFuncion($parametro = valor) {
    // código
}

✅ Ejemplo Básico

*/

function saludar($nombre = "Invitado") {
    echo "Hola " . $nombre;
}

saludar();
echo "\n";

/*

📌 Resultado:

Hola Invitado

🔍 ¿Qué pasó?

Como no se envió argumento:

saludar();

PHP usa automáticamente:

"Invitado"

✅ Si Sí Envío Valor

saludar("Carlos");

Resultado:

Hola Carlos

El argumento enviado reemplaza el valor por defecto.

📌 Ejemplo Profesional Real

*/

function crearAlerta($tipo = "info") {
    echo "Alerta tipo: $tipo";
}

crearAlerta();
echo "\n";

crearAlerta("error");
echo "\n";

/*

Resultado:

Alerta tipo: info
Alerta tipo: error

🏢 Uso Empresarial

Idioma por defecto

function traducir($idioma = "es")

Moneda por defecto

function mostrarPrecio($moneda = "COP")

Estado inicial

function crearUsuario($estado = "activo")

📌 Regla Importante de Orden

Los parámetros con valor por defecto deben ir después de los obligatorios.

✅ Correcto

function usuario($nombre, $rol = "cliente")

❌ Incorrecto
function usuario($rol = "cliente", $nombre)

Puede generar problemas.

❌ Errores Comunes

1. Pensar que siempre usa el default
saludar("Ana");

Usará "Ana", no "Invitado".

2. Default ilógico
function edad($edad = -500)

Mala decisión técnica.

3. No usar defaults cuando aplica

Funciones rígidas innecesariamente.

✅ Buenas Prácticas

Usa valores reales y útiles:

function paginar($limite = 10)
function moneda($tipo = "COP")
function tema($modo = "claro")

🧠 Mentalidad Senior

Valores por defecto reducen fricción y hacen APIs internas limpias.

Una buena función funciona con lo mínimo, pero acepta personalización.

📌 Ejemplo Profesional Limpio

*/

function bienvenida($usuario = "Visitante") {
    echo "Bienvenido $usuario";
}

bienvenida();
bienvenida("Marlonete");

/*
Resultado:
Bienvenido Visitante
Bienvenido Marlonete

*/
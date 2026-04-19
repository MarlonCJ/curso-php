<?php

/*
📘 BLOQUE 4 — TEMA 2: CREAR FUNCIONES PERSONALIZADAS CORRECTAMENTE

🎯 Definición Profesional

Crear una función personalizada significa diseñar tu propio bloque reutilizable para resolver una necesidad específica del sistema.

PHP trae funciones nativas como:

strlen()
date()
count()

Pero en proyectos reales tú crearás funciones propias constantemente.

🧠 Sintaxis Correcta

function nombreFuncion() {
    // código
}

✅ Ejemplo Básico Real

*/

function saludar() {
    echo "Hola, bienvenido al sistema";
}

saludar();

/*

📌 Resultado:

Hola, bienvenido al sistema

🔍 Desglose Técnico

function

Palabra reservada obligatoria.

saludar

Nombre identificador de la función.

()

Paréntesis donde luego irán parámetros.

{ }

Bloque ejecutable.

saludar();

Invocación de la función.

🏢 Ejemplos Reales Empresariales

Función para mostrar logo

function mostrarLogo() {
    echo "<img src='logo.png'>";
}

Función para pie de página

function footer() {
    echo "© 2026 Empresa";
}

Función para validar acceso

function verificarSesion() {
    echo "Sesión válida";
}

📌 Reglas Profesionales para Nombrar Funciones

✅ Usa verbos

crearUsuario()
guardarVenta()
calcularImpuesto()
enviarCorreo()

❌ Evita nombres basura

a()
dato()
funcion1()
x()

📌 Convención Recomendada

Usa camelCase

calcularTotalCompra()
registrarClienteNuevo()

❌ Errores Comunes

1. Olvidar paréntesis

function hola {
}

❌ Error de sintaxis

2. No cerrar llaves

function hola() {
 echo "Hola";

❌ Error grave

3. No ejecutar la función

function hola() {
 echo "Hola";
}

Si no haces:

hola();

No ocurre nada.

🧠 Mentalidad Senior

Antes de escribir código pregúntate:

¿Esto se repetirá?
¿Tiene una tarea específica?
¿Puede aislarse?

Si la respuesta es sí → función.

✅ Ejemplo Profesional Limpio

*/

function mostrarBienvenida() {
    echo "Bienvenido al panel administrativo";
}

mostrarBienvenida();

/*

📌 Buenas Prácticas

Una función = una tarea
Nombre claro
Código corto
Reutilizable
Sin mezclar responsabilidades

*/
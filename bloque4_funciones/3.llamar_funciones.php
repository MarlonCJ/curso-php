<?php

/*

📘 BLOQUE 4 — TEMA 3: LLAMAR FUNCIONES CORRECTAMENTE Y FLUJO DE EJECUCIÓN

🎯 Definición Profesional

Crear una función no la ejecuta automáticamente.

Una función solo se ejecuta cuando es llamada (invocada) usando su nombre seguido de paréntesis.

nombreFuncion();

Entender esto es clave para controlar el flujo real del programa.

🧠 Ejemplo Básico

*/

function saludar() {
    echo "Hola usuario";
}

saludar();

/*

📌 Resultado:

Hola usuario

🔍 ¿Qué pasó internamente?

Paso 1

PHP lee la definición:

function saludar()

La registra en memoria.

Paso 2

Cuando encuentra:

saludar();

Entra a la función y ejecuta:

echo "Hola usuario";

❌ Error Común: Crear y no llamar


function saludar() {
    echo "Hola";
}

Resultado:

Nada.

Porque nunca fue llamada.

✅ Llamar Varias Veces


function mensaje() {
    echo "Bienvenido <br>";
}

mensaje();
mensaje();
mensaje();
Resultado:
Bienvenido
Bienvenido
Bienvenido

📌 Flujo de Ejecución Real


echo "Inicio <br>";

function prueba() {
    echo "Dentro de función <br>";
}

echo "Antes de llamar <br>";

prueba();

echo "Fin";

Resultado exacto:

Inicio
Antes de llamar
Dentro de función
Fin

🧠 Interpretación Senior

El código no baja línea por línea siempre.

Cuando llamas una función:

Pausa flujo actual
Entra a la función
Ejecuta instrucciones internas
Regresa donde quedó

Eso es base de arquitectura real.

🏢 Caso Empresarial

validarLogin();
cargarPermisos();
mostrarDashboard();
registrarLog();

Cada llamada activa procesos separados.

📌 Buenas Prácticas

Llama funciones donde tenga sentido lógico

if ($usuarioValido) {
    mostrarPanel();
}

Mantén orden de lectura

iniciarSistema();
cargarConfig();
conectarDB();

❌ Errores Comunes

1. Llamar nombre incorrecto

saludo();

Si la función era:

saludar();

❌ Fatal error.

2. Olvidar paréntesis

saludar;

❌ Incorrecto.

3. Pensar que se ejecuta sola

Definir no es ejecutar.

🧠 Mentalidad Senior

Una función es una herramienta.
Hasta que no la llamas, no trabaja.

✅ Ejemplo Profesional

*/

function abrirCaja() {
    echo "Caja abierta";
}

echo "Sistema iniciado <br>";

abrirCaja();

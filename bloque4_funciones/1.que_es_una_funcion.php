<?php       

/*

📘 BLOQUE 4 — TEMA 1: ¿QUÉ ES UNA FUNCIÓN Y POR QUÉ SE USA?

🎯 Definición Profesional

Una función es un bloque de código reutilizable que ejecuta una tarea específica cuando es llamado.

En lugar de repetir instrucciones muchas veces, encapsulas esa lógica dentro de una función y la ejecutas cuando la necesites.

Esto convierte código desordenado en código profesional.

🧠 Ejemplo Real Sin Función

*/

echo "Bienvenido Carlos";
echo "\n";

echo "Bienvenido Ana";
echo "\n";

echo "Bienvenido Luis";
echo "\n";

/*


❌ Problema

Estás repitiendo la misma lógica varias veces.

Si mañana cambias el mensaje, debes modificar múltiples líneas.

✅ Solución Profesional Con Función

*/

function saludar() {
    echo "Bienvenido usuario";
}

saludar();
echo "\n";

saludar();
echo "\n";

saludar();
echo "\n";


/*

🔍 Explicación Técnica

function

Palabra reservada para declarar funciones.

saludar()

Nombre de la función.

{ }

Bloque de código que contiene instrucciones.

saludar();

Llamada o ejecución de la función.

🏢 ¿Por qué se usan en empresas?

Porque permiten:

✅ Reutilización

Una lógica escrita una vez se usa cientos de veces.

✅ Orden

Separan responsabilidades.

✅ Escalabilidad

Sistemas grandes dependen totalmente de funciones.

✅ Mantenimiento

Corriges una vez, impacta todo el sistema.

✅ Lectura Profesional

calcularTotal();
validarUsuario();
enviarCorreo();
guardarPedido();

Eso es mejor que 500 líneas mezcladas.

📌 Buenas Prácticas

Usa nombres claros

crearUsuario();

No:

x1();

Una función = una responsabilidad

Correcto:

validarEmail();

Incorrecto:

validarEmailYGuardarYEnviarCorreo();

❌ Errores Comunes

1. No llamar la función

function hola() {
 echo "Hola";
}

No mostrará nada hasta ejecutar:

hola();

2. Nombres confusos

abc();

3. Meter todo en una sola función

Código difícil de mantener.

🧠 Mentalidad Senior

Cuando ves repetición, piensas:

“Esto debe convertirse en función”.

📌 Mini Ejemplo Real

*/

function mostrarTitulo() {
    echo "<h1>Sistema de Ventas</h1>";
}

mostrarTitulo();

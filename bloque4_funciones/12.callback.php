<?php

/*

📘 BLOQUE 4 — TEMA 12: FUNCIONES COMO CALLBACK EN PHP

🎯 Definición Profesional

Un callback es una función que se pasa como argumento a otra función para que sea ejecutada después o durante un proceso.

En pocas palabras:

Una función recibe otra función.

Esto es muy usado en programación moderna.

🧠 ¿Por qué existe?

Permite que una función sea flexible.

En vez de decidir internamente qué hacer, recibe una función externa que define el comportamiento.

✅ Ejemplo Básico

*/

function saludar() {
    echo "Hola";
}

function ejecutar($callback) {
    $callback();
}

ejecutar('saludar');

/*

Resultado:
Hola


🔍 Explicación Técnica

ejecutar($callback)

Recibe una función.

$callback();

La ejecuta dinámicamente.

📌 Callback con Función Anónima

*/

function procesar($callback) {
    $callback();
}

procesar(function () {
    echo "Proceso completado";
});

/*

Resultado:

Proceso completado

📌 Callback con Arrow Function

<?php

function ejecutar($fn) {
    echo $fn(5);
}

ejecutar(fn($n) => $n * 2);

Resultado:
10

🏢 Uso Empresarial Real

Callbacks aparecen en:

array_map()
array_filter()
usort()
Eventos
Middlewares
Hooks
Sistemas extensibles

✅ Ejemplo con array_filter

*/

$nums = [1,2,3,4,5];

$resultado = array_filter($nums, fn($n) => $n > 3);

print_r($resultado);


/*

Resultado:

Array
(
    [3] => 4
    [4] => 5
)


📌 Ejemplo Real de Negocio

<?php

function registrarPago($callback) {
    echo "Pago guardado <br>";
    $callback();
}

registrarPago(function () {
    echo "Correo enviado";
});

Resultado:

Pago guardado
Correo enviado

❌ Errores Comunes

1. Pasar resultado en vez de función
ejecutar(saludar());

❌ Ejecuta antes de tiempo.

2. No validar callback

En sistemas robustos se usa:

is_callable($callback)

3. Código difícil de leer por exceso de callbacks

✅ Buenas Prácticas

Usa callbacks para personalizar comportamiento.
Mantén funciones pequeñas.
Valida callbacks externos.

🧠 Mentalidad Senior

Callbacks desacoplan procesos.

La función principal no necesita saber detalles; otra función define la acción.

Eso permite sistemas modulares.

📌 Ejemplo Profesional Limpio

<?php

function completar($accion) {
    echo "Tarea lista <br>";
    $accion();
}

completar(fn() => print("Notificación enviada"));

*/
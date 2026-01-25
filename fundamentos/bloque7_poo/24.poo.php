
<?php
/*
🔹 BLOQUE 7 — PROGRAMACIÓN ORIENTADA A OBJETOS (POO) EN PHP

Este bloque es un antes y un después.
Aquí pasas de “hacer scripts” a construir sistemas.
WordPress está escrito casi todo en POO, así que este bloque es obligatorio.

🎯 OBJETIVO DEL BLOQUE 7

Que entiendas:

    Qué es una clase
    Qué es un objeto
    Para qué sirve la POO
    Cómo se usa en PHP real (no teoría vacía)

👉 Sin frameworks
👉 Sin WordPress todavía
👉 POO pura y clara

1️⃣ ¿POR QUÉ EXISTE LA POO?

Hasta ahora has usado:

    Variables
    Arrays
    Funciones

Eso está bien… pero cuando el proyecto crece:

❌ Muchas variables sueltas
❌ Muchas funciones sin orden
❌ Difícil de mantener

La POO agrupa datos + comportamiento en una sola unidad.

2️⃣ ¿QUÉ ES UNA CLASE? (IDEA CLAVE)

📌 Una clase es un molde / plantilla

Ejemplo mental:

    Clase = Plano de una casa
    Objeto = Casa construida

3️⃣ TU PRIMERA CLASE EN PHP

*/

class Usuario {
    public $nombre;
    public $rol;
}

/*
Analicemos como senior:

    class Usuario → defines el molde
    $nombre, $rol → propiedades
    public → accesibles desde fuera (luego veremos esto bien)

👉 Aquí no pasa nada aún, solo definimos la clase.

4️⃣ CREAR UN OBJETO (INSTANCIAR)
*/

$usuario1 = new Usuario();

// 📌 Esto crea un objeto real basado en la clase.

// 5️⃣ ASIGNAR VALORES AL OBJETO

$usuario1 -> nombre = 'Marlon';
$usuario1 -> rol = 'admin';

// 👉 El operador -> se usa SIEMPRE con objetos.

// 6️⃣ LEER DATOS DEL OBJETO

echo $usuario1 -> nombre;
echo $usuario1 -> rol;

// EJEMPLO COMPLETO


class Producto {
    public $nombre;
    public $precio;
    public $stock;
}

$producto1 = new Producto();

$producto1 -> nombre = 'Television';
$producto1 -> precio = 2000000;
$producto1 -> stock = 20;

echo $producto1-> nombre;
echo "<br>";
echo $producto1 -> precio;
echo "<br>";
echo $producto1 -> stock;
echo "<br>";

/*
✔ Código válido
✔ Código limpio
✔ Código base de WordPress

🧠 CONCEPTO CLAVE QUE DEBES GRABAR

Una clase no hace nada sola
Un objeto es quien vive y trabaja

⚠️ ERRORES COMUNES (NO CAIGAS AQUÍ)

❌ Pensar que la clase es el objeto
❌ Usar $this sin entender (aún no toca)
❌ Mezclar funciones normales con clases sin orden

Todo eso lo veremos paso a paso.
*/
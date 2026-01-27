<?php

/*
🧭 FORMULARIOS CON GET — DESDE CERO
1️⃣ ¿QUÉ ES GET?

GET envía los datos por la URL

Se usa para:

búsquedas

filtros

datos no sensibles

procesar.php?nombre=Marlon


Ejemplo de URL real:

2️⃣ FORMULARIO USANDO GET

📄 formulario.php

<form method="get" action="procesar.php">
    <input type="text" name="nombre">
    <button type="submit">Enviar</button>
</form>
📌 CLAVE:

method="get"

name="nombre" → este nombre es la llave

3️⃣ ¿DÓNDE LLEGAN LOS DATOS?
PHP guarda los datos GET en:

$_GET
Es un array asociativo.

4️⃣ CAPTURAR EL VALOR EN procesar.php
📄 procesar.php

<?php

echo $_GET['nombre'];
Si escribes Marlon, se imprimirá:

Marlon
5️⃣ ¿POR QUÉ ESTO PUEDE FALLAR? (ERROR COMÚN)
Si entras a procesar.php sin pasar por el formulario, PHP lanza:

Notice: Undefined index: nombre
6️⃣ FORMA CORRECTA (PROFESIONAL) DE CAPTURAR GET
<?php

if (isset($_GET['nombre'])) {
    echo $_GET['nombre'];
} else {
    echo 'No se recibió el nombre';
}
✔ Evita errores
✔ Código profesional
✔ Buen hábito

7️⃣ MEJOR AÚN: VALIDAR QUE NO VENGA VACÍO
<?php

if (isset($_GET['nombre']) && $_GET['nombre'] !== '') {
    echo 'Hola ' . $_GET['nombre'];
} else {
    echo 'El nombre está vacío';
}
8️⃣ VER TODO LO QUE LLEGA (DEPURACIÓN)
Esto es clave para aprender:

<?php
var_dump($_GET);
Verás algo como:

array(1) {
  ["nombre"]=> string(6) "Marlon"
}
🧠 CONCEPTO CLAVE (QUÉ DEBES ENTENDER BIEN)
name del input = clave del array

GET → $_GET

POST → $_POST

Siempre usar isset()

Siempre validar

🔜 SIGUIENTE PASO EN LA GUÍA (SIN S


*/






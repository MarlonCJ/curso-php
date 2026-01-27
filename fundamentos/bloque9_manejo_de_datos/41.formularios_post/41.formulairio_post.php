<?php

/* 

🧭 FORMULARIOS CON POST 

1️⃣ ¿QUÉ ES POST?

POST NO muestra los datos en la URL

Se usa para:

formularios

login

registros

datos sensibles

Es el método más usado en PHP y WordPress

2️⃣ FORMULARIO USANDO POST

📄 formulario.php

<form method="post" action="procesar.php">
    <input type="text" name="nombre">
    <button type="submit">Enviar</button>
</form>


📌 Observa:

method="post"

name="nombre" (clave del array)

3️⃣ ¿DÓNDE LLEGAN LOS DATOS?

PHP los guarda en:

$_POST


Es un array asociativo, igual que $_GET.

4️⃣ CAPTURAR EL VALOR EN procesar.php

📄 procesar.php

<?php

echo $_POST['nombre'];


Si escribes Marlon, verás:

Marlon

5️⃣ ERROR COMÚN (Y MUY IMPORTANTE)

Si entras a procesar.php directamente:

Warning: Undefined array key "nombre"


👉 NUNCA accedas a $_POST sin validar.

6️⃣ FORMA CORRECTA (PROFESIONAL)
<?php

if (isset($_POST['nombre'])) {
    echo 'Hola ' . $_POST['nombre'];
} else {
    echo 'No se recibió el formulario';
}


✔ Evita errores
✔ Buenas prácticas
✔ Código limpio

7️⃣ VALIDAR QUE NO VENGA VACÍO
<?php

if (isset($_POST['nombre']) && $_POST['nombre'] !== '') {
    echo 'Hola ' . $_POST['nombre'];
} else {
    echo 'El nombre está vacío';
}

8️⃣ DEPURAR (VER TODO LO QUE LLEGA)

Esto es obligatorio cuando aprendes:

<?php
var_dump($_POST);


Ejemplo de salida:

array(1) {
  ["nombre"]=> string(6) "Marlon"
}

9️⃣ DIFERENCIA REAL ENTRE GET Y POST
GET	POST
Datos visibles en URL	Datos ocultos
Menos seguro	Más seguro
Búsquedas	Formularios
Limitado en tamaño	Soporta más datos

📌 WordPress usa POST en casi todo.

🧠 REGLAS DE ORO (GUÁRDALAS)

Nunca confiar en datos del usuario

Siempre usar isset()

Siempre validar

Siempre depurar

*/


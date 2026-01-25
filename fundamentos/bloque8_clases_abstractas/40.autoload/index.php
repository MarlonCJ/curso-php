
<?php

spl_autoload_register(function ($class) {

    $baseDir = __DIR__ . '/';

    $file = $baseDir . str_replace('\\', '/', $class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

use App\Mensajes\Email;
use App\Mensajes\SMS;
use App\Usuario\Usuario;


$email = new Email();
$sms = new SMS();
$user = new Usuario();

echo $email -> enviar() . '<br>';
echo $sms -> enviar() . '<br>';
echo $user -> saludar();

/*

🔍 CÓDIGO COMPLETO A EXPLICAR
spl_autoload_register(function ($class) {

    $baseDir = __DIR__ . '/';

    $file = $baseDir . str_replace('\\', '/', $class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

🧠 IDEA GENERAL (ANTES DE IR LÍNEA POR LÍNEA)

👉 Este código le dice a PHP:

“Cuando intentes usar una clase que aún no existe,
yo te diré dónde buscar el archivo para cargarla”.

Eso es autoload.

1️⃣ spl_autoload_register(...)
spl_autoload_register(function ($class) {

¿Qué hace?

Registra una función que PHP ejecutará automáticamente cuando:

new ClaseQueNoExisteAun();

spl significa:

Standard PHP Library

👉 PHP permite registrar varios autoloaders, no solo uno.

2️⃣ function ($class)
function ($class) {

¿Qué es $class?

Es el nombre COMPLETO de la clase que PHP está buscando.

Ejemplo:

new App\Mensajes\SMS();


Entonces:

$class === 'App\Mensajes\SMS'


⚠️ Incluye el namespace completo.

3️⃣ $baseDir = __DIR__ . '/';
$baseDir = __DIR__ . '/';

¿Qué es __DIR__?

👉 Es una constante mágica de PHP.

Devuelve:

Ruta absoluta del archivo actual


Ejemplo real:

C:/xampp/htdocs/mi_proyecto


Entonces:

$baseDir = 'C:/xampp/htdocs/mi_proyecto/'


📌 Esto hace que el autoload no dependa del sistema operativo.

4️⃣ str_replace('\\', '/', $class)
str_replace('\\', '/', $class)

¿Por qué esto?

Porque:

Namespaces usan \

Carpetas usan /

Ejemplo:

$class = 'App\Mensajes\SMS';


Resultado:

App/Mensajes/SMS

5️⃣ Construcción de la ruta final
$file = $baseDir . str_replace('\\', '/', $class) . '.php';

Paso a paso:
Parte	Resultado
$baseDir	C:/xampp/htdocs/mi_proyecto/
Namespace	App/Mensajes/SMS
.php	extensión

📌 Resultado final:

C:/xampp/htdocs/mi_proyecto/App/Mensajes/SMS.php


🎯 Exactamente donde está tu clase

6️⃣ file_exists($file)
if (file_exists($file)) {

¿Por qué se valida?

Para evitar:

Warnings

Fatal errors

Includes fallidos

👉 Autoload NO debe romper el sistema.

7️⃣ require $file;
require $file;

¿Qué hace?

Carga el archivo

Define la clase

PHP continúa ejecución

Si el archivo no existe, el autoload simplemente no hace nada.

🧠 RESUMEN MENTAL (IMPORTANTE)

Cuando escribes:

new App\Mensajes\SMS();


PHP hace esto:

1️⃣ Busca la clase
2️⃣ No la encuentra
3️⃣ Llama al autoload
4️⃣ Convierte namespace → ruta
5️⃣ Carga el archivo
6️⃣ Continúa ejecución

👉 Todo automático.

🚨 ERRORES QUE YA SABES EVITAR

❌ Namespace ≠ carpeta
❌ Archivo mal nombrado
❌ Mayúsculas inconsistentes
❌ <?php no en primera línea
❌ UTF-8 con BOM

🧭 CONCLUSIÓN PROFESIONAL

Este autoload:

Es simple

Es correcto

Sigue PSR-4 conceptual

Es la base de Composer

Es exactamente lo que WordPress moderno usa (internamente)

👉 Si entiendes este código, entiendes el 70% del backend moderno en PHP.

*/
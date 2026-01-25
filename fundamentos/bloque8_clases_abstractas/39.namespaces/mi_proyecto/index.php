
<?php

require 'App/Mensajes/Email.php';
require 'App/Mensajes/SMS.php';
require 'App/Usuario/Usuario.php';

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

🧠 QUÉ ACABA DE PASAR (ESTO ES LO IMPORTANTE)

1️⃣ PHP carga archivos manualmente (require)
2️⃣ Cada clase vive en su propio namespace
3️⃣ use crea un alias para no escribir rutas largas
4️⃣ No hay conflictos de nombres
5️⃣ Código escalable y profesional

🚨 ERROR COMÚN (MUY FRECUENTE)
new Email(); // ❌ sin use


💥 PHP no sabe qué Email es.

👉 Soluciones:

use App\Mensajes\Email;


O:

new App\Mensajes\Email();

🧭 LO QUE YA DOMINAS AHORA

✔ Qué es un namespace
✔ Cómo se conecta con carpetas
✔ Cómo se instancia
✔ Base para autoload
✔ Arquitectura profesional
*/
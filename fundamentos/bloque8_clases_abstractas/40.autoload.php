<?php

// AUTOLOAD (spl_autoload_register)

/*
🎯 OBJETIVO

Eliminar todos los require

Cargar clases automáticamente

Entender cómo funciona Composer y WordPress internamente

1️⃣ PROBLEMA ACTUAL (POR QUÉ EXISTE AUTOLOAD)

En tu index.php tenías algo así:

require 'App/Mensajes/Email.php';
require 'App/Mensajes/SMS.php';
require 'App/Usuario/Usuario.php';

❌ No escala
❌ Frágil
❌ Difícil de mantener

2️⃣ SOLUCIÓN: AUTOLOAD MANUAL

Vamos a crear un solo autoload, limpio y profesional.

3️⃣ ESTRUCTURA DEL PROYECTO (CONFIRMAMOS)
mi_proyecto/
│
├── index.php
│
└── App/
    ├── Mensajes/
    │   ├── Email.php
    │   └── SMS.php
    │
    └── Usuario/
        └── Usuario.php


4️⃣ AUTOLOAD EN index.php

📄 index.php

<?php

spl_autoload_register(function ($class) {

    $baseDir = __DIR__ . '/';

    $file = $baseDir . str_replace('\\', '/', $class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});


📌 Esto es CLAVE:

$class → App\Mensajes\SMS

\ → /

Resultado → App/Mensajes/SMS.php

5️⃣ USO NORMAL DE CLASES (SIN REQUIRE)
use App\Mensajes\Email;
use App\Mensajes\SMS;
use App\Usuario\Usuario;

$email = new Email();
$sms   = new SMS();
$user  = new Usuario();

echo $email->enviar() . '<br>';
echo $sms->enviar() . '<br>';
echo $user->saludar();


✔ Sin require
✔ Código limpio
✔ Autoload funcionando

6️⃣ QUÉ PASA INTERNAMENTE (IMPORTANTE)

Cuando PHP ve esto:

new SMS();


Hace:

Busca la clase

No la encuentra

Llama al autoload

Convierte el namespace en ruta

Incluye el archivo

Continúa ejecución

👉 Magia controlada

🚨 ERRORES COMUNES (REVISA SI PASA)

❌ Carpeta mal nombrada
❌ Archivo con minúscula
❌ Namespace no coincide
❌ <?php no es primera línea
❌ UTF-8 con BOM

🧠 FRASE CLAVE

Autoload carga clases bajo demanda,
no todo de golpe.

🧭 ESTADO ACTUAL

✔ Namespaces entendidos
✔ Convenciones claras
✔ Autoload implementado
✔ Nivel profesional activado
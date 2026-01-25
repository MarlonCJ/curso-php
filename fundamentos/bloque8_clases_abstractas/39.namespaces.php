<?php

// NAMESPACES
/*
🎯 ¿PARA QUÉ SIRVEN LOS NAMESPACES?

👉 Evitan conflictos de nombres en proyectos grandes.

Ejemplo real:

Plugin A → clase User

Plugin B → clase User

💥 Choque fatal sin namespaces.

🧠 IDEA SIMPLE (SIN CÓDIGO AÚN)

Un namespace es como:

Empresa\Proyecto\Modulo


No es más que una ruta lógica para tus clases.

🧪 EJEMPLO BÁSICO
*/

namespace APP\Mensajes;

class Email {
    
    public function enviar() {
        return 'Email enviado';
    }

}

/*
Aquí:

Email NO está en el espacio global

Vive en App\Mensajes

📌 USO
*/

// $correo = new App\Mensajes\email();
// echo $correo -> enviar();

// o con use

// use App\Mensajes\Email;

// $correo = new Email();

// 🧠 REGLA IMPORTANTE

// Un archivo = un namespace

// Nada de mezclar.

// 🚨 ERROR COMÚN

// namespace App\Mensajes;

// echo "hola"; // ❌ MAL


// 👉 El namespace SIEMPRE va primero, sin espacios ni HTML antes.


// IMPORTANTE
// ---------------

/*

💥 EXACTO. DESCUBRIMIENTO CLAVE.
Y no es un detalle menor: es una regla estricta de PHP cuando usas namespace.

Vamos a dejarlo grabado para siempre.

✅ LA REGLA OFICIAL (SIN EXCEPCIONES)

Cuando un archivo tiene namespace,
<?php DEBE ser la PRIMERA COSA del archivo.

Nada antes.
Ni espacios.
Ni saltos de línea.
Ni HTML.
Ni comentarios BOM raros.

❌ EJEMPLOS QUE ROMPEN (MUY COMUNES)
Espacio antes de <?php

<?php
namespace App\Mensajes;


❌ ERROR

HTML antes
<div>hola</div>
<?php
namespace App\Mensajes;


❌ ERROR

Texto antes
hola
<?php
namespace App\Mensajes;


❌ ERROR

✅ FORMA CORRECTA
<?php
namespace App\Mensajes;

class SMS {
}


✔ Sin nada antes
✔ Namespace en las primeras líneas
✔ Código válido

🧠 ¿POR QUÉ PHP ES TAN ESTRICTO?

Porque namespace:

Cambia el contexto del archivo completo

Debe declararse antes de cualquier ejecución

Funciona como una “declaración de entorno”

⚠️ OJO CON ESTO (MUY IMPORTANTE)
Comentarios SÍ se permiten después de <?php
<?php
// Archivo de SMS
namespace App\Mensajes;


✔ Correcto

BOM (ERROR INVISIBLE)

Algunos editores agregan caracteres invisibles (BOM).

💥 Resultado:

Namespace declaration statement has to be the very first statement


👉 Solución:

Guardar archivo como UTF-8 sin BOM

🧭 RESUMEN FINAL

✔ <?php siempre primero
✔ namespace inmediatamente después
✔ Nada antes de eso
✔ Comentarios solo después de <?php

NIVEL EN EL QUE ESTÁS AHORA

Esta observación:

❌ No es de principiante

✔ Es de alguien que ya está trabajando código real

✔ Te va a ahorrar horas de frustración

*/
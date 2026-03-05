<?php

// 🧠 ¿Qué hace error_log() en PHP?

// error_log() envía un mensaje al registro de errores del servidor.

// No lo muestra en pantalla.
// Lo guarda en un archivo interno del sistema.

// 📌 Uso básico
// error_log("Algo salió mal");

// Eso envía el mensaje al archivo de logs configurado en php.ini.

// 🔍 ¿Dónde se guarda?

// Depende del servidor:

// En Apache (Linux comúnmente)
// /var/log/apache2/error.log
// En XAMPP (Windows)
// xampp/apache/logs/error.log
// En hosting compartido

// Normalmente en:

// /public_html/error_log

// Eso lo define el php.ini:

// log_errors = On
// error_log = /ruta/del/archivo.log
// 🎯 ¿Por qué se usa en producción?

// Porque:

// No expones errores técnicos al usuario.

// Guardas el detalle para diagnóstico.

// Cumples buenas prácticas de seguridad.

// 🔐 Ejemplo profesional
try {
    $cuenta->retirar(999999999);
} catch (Exception $e) {

    error_log($e->getMessage()); // Se guarda internamente
    
    echo "Ocurrió un error en la transacción."; // Mensaje seguro al usuario
}

// Usuario ve:

// Ocurrió un error en la transacción.

// Servidor guarda:

// Transacción rechazada: fondos insuficientes
// 🚨 Error común de principiantes

// Mostrar directamente:

// echo $e->getMessage();

// Eso puede revelar:

// Estructura interna

// SQL

// Rutas del servidor

// Información sensible

// En producción eso es inseguro.

// 🏗 Nivel superior

// error_log() también permite:

// error_log("Mensaje", 3, "mi_archivo.log");

// El 3 significa → escribir en archivo específico.

// 🎓 Mentalidad profesional

// Desarrollo → mostrar errores

// Producción → registrar errores

// Nunca exponer detalles internos
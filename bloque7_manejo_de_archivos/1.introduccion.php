<?php

/*

TEMA 1 — INTRODUCCIÓN AL SISTEMA DE ARCHIVOS EN PHP

¿QUÉ ES EL SISTEMA DE ARCHIVOS?

El sistema de archivos es la estructura que utiliza el sistema operativo para:

Guardar archivos
Organizar carpetas
Administrar permisos
Leer y escribir información

Cuando PHP trabaja con archivos, realmente está interactuando directamente con el sistema operativo del servidor.

PHP puede:

Crear archivos
Leer contenido
Modificar información
Eliminar archivos
Crear carpetas
Recorrer directorios

CONCEPTO PROFESIONAL

Un desarrollador junior suele pensar:

“PHP solo imprime HTML”.

Un desarrollador profesional entiende:

“PHP es capaz de interactuar con recursos físicos del servidor”.

El manejo de archivos es uno de los pilares de:

Sistemas empresariales
Logs
Exportaciones Excel/CSV
Gestión documental
Carga de imágenes
Backups
Configuraciones
APIs
Sistemas de auditoría

TIPOS DE RUTAS

1. RUTA RELATIVA

Es relativa al archivo PHP actual.

Ejemplo:

*/

$archivo = "datos.txt";


/*

PHP buscará el archivo en el mismo directorio donde está el script.

2. RUTA ABSOLUTA

Es la ubicación completa dentro del sistema operativo.

Windows:

C:\xampp\htdocs\proyecto\datos.txt

Linux:

/var/www/html/proyecto/datos.txt

DIRECTORIOS

Un directorio es una carpeta dentro del sistema operativo.

Ejemplo:

proyecto/
│
├── index.php
├── datos/
│   ├── usuarios.txt
│   └── logs.txt

PHP puede acceder a cualquier directorio siempre que tenga permisos.

FUNCIÓN IMPORTANTE: __DIR__

Devuelve la ruta absoluta del archivo actual.

Ejemplo:

echo __DIR__;

Salida ejemplo:

C:\xampp\htdocs\mi_proyecto

¿POR QUÉ ES IMPORTANTE __DIR__?

Porque evita errores de rutas.

Mala práctica:

$archivo = "datos/usuarios.txt";

Buena práctica:

$archivo = __DIR__ . "/datos/usuarios.txt";

Esto garantiza que PHP encuentre el archivo correctamente sin importar desde dónde se ejecute el script.

SEPARADOR DE RUTAS

Windows usa:

\

Linux usa:

/

PHP acepta normalmente / en ambos sistemas.

Por eso profesionalmente se suele usar:

"/"

VERIFICAR SI UN ARCHIVO EXISTE

file_exists()

Permite validar si un archivo o carpeta existe.

CÓDIGO FUNCIONAL COMPLETO

<?php
*/

$archivo = __DIR__ . "/datos.txt";

if (file_exists($archivo)) {
    echo "El archivo existe";
} else {
    echo "El archivo NO existe";
}

/*

EXPLICACIÓN TÉCNICA DETALLADA

Línea 1

$archivo = __DIR__ . "/datos.txt";

Construye la ruta absoluta.

Línea 2

file_exists($archivo)

PHP consulta al sistema operativo:

“¿Existe este archivo?”

Retorna:

true
false

¿QUÉ PASA INTERNAMENTE?

PHP hace una llamada al sistema operativo.

El sistema operativo:

Busca la ruta
Verifica permisos
Comprueba existencia
Devuelve respuesta

BUENAS PRÁCTICAS

1. Usar siempre rutas absolutas

Correcto:

__DIR__ . "/archivo.txt"

Incorrecto:

"archivo.txt"

2. Verificar existencia antes de leer

Incorrecto:

$contenido = file_get_contents($archivo);

Sin validar existencia.

Correcto:

if (file_exists($archivo)) {
    $contenido = file_get_contents($archivo);
}

3. Organizar carpetas

Ejemplo profesional:

/storage
/logs
/uploads
/temp

ERRORES COMUNES

ERROR 1 — Rutas incorrectas

$archivo = "datos.txt";

Falla cuando cambia el contexto de ejecución.

ERROR 2 — No validar existencia

Genera warnings:

failed to open stream

ERROR 3 — Mezclar rutas Windows/Linux

Incorrecto:

"carpeta\archivo.txt"

Profesional:

"carpeta/archivo.txt"

EJEMPLO PROFESIONAL REAL

Sistema de logs:

<?php

$log = __DIR__ . "/logs/error.log";

if (file_exists($log)) {
    echo "Log encontrado";
} else {
    echo "No existe el log";
}

RESUMEN TÉCNICO

En este tema aprendiste:

Qué es el sistema de archivos

Diferencia entre rutas relativas y absolutas

Uso de __DIR__

Uso de file_exists()

Cómo PHP interactúa con el sistema operativo

Buenas prácticas profesionales

*/
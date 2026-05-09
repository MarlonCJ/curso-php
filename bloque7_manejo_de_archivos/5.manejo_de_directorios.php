<?php

/*

TEMA 5 — MANEJO DE DIRECTORIOS EN PHP

¿QUÉ ES UN DIRECTORIO?

Un directorio es una carpeta del sistema operativo.

Ejemplo:

proyecto/
│
├── index.php
├── usuarios/
├── logs/
└── uploads/

PHP puede:

crear carpetas
eliminar carpetas
recorrer carpetas
listar archivos
verificar existencia

¿POR QUÉ ES IMPORTANTE?

Los sistemas reales organizan información en directorios.

Ejemplos:

/uploads
/logs
/storage
/backups
/cache

Sin directorios, un proyecto sería un caos.

FUNCIONES PRINCIPALES

Función	Uso

is_dir()	Verificar si existe carpeta
mkdir()	Crear directorio
rmdir()	Eliminar directorio
scandir()	Leer contenido del directorio

FUNCIÓN 1 — is_dir()

¿QUÉ HACE?

Verifica si una carpeta existe.

EJEMPLO

<?php

$carpeta = __DIR__ . "/uploads";

if (is_dir($carpeta)) {

    echo "La carpeta existe";

} else {

    echo "La carpeta no existe";
}

DIFERENCIA IMPORTANTE

file_exists()

Verifica:

archivos
carpetas

is_dir()

Verifica SOLO carpetas.

FUNCIÓN 2 — mkdir()

¿QUÉ HACE?

Crea directorios.

EJEMPLO

<?php

$carpeta = __DIR__ . "/logs";

if (!is_dir($carpeta)) {

    mkdir($carpeta);

    echo "Carpeta creada";
}

EXPLICACIÓN TÉCNICA

!is_dir()

Significa:

si NO existe

IMPORTANTE

Nunca crear carpetas sin validar primero.

ERROR COMÚN

mkdir("logs");

Si ya existe:

Warning: File exists

CREAR DIRECTORIOS ANIDADOS

EJEMPLO

<?php

mkdir("storage/logs");

PROBLEMA

Falla si:

storage

no existe.

SOLUCIÓN PROFESIONAL

<?php

mkdir("storage/logs", 0777, true);

EXPLICACIÓN

0777

Permisos.

true

Permite crear carpetas intermedias automáticamente.

FUNCIÓN 3 — rmdir()

¿QUÉ HACE?

Elimina directorios VACÍOS.

EJEMPLO

<?php

$carpeta = __DIR__ . "/temp";

if (is_dir($carpeta)) {

    rmdir($carpeta);

    echo "Carpeta eliminada";
}

LIMITACIÓN IMPORTANTE

⚠️ rmdir() SOLO elimina carpetas vacías.

SI TIENE ARCHIVOS

Warning: Directory not empty

FUNCIÓN 4 — scandir()

¿QUÉ HACE?

Lee contenido de una carpeta.

EJEMPLO

Supón:

/documentos
    archivo1.txt
    archivo2.txt

    CÓDIGO

    <?php

$carpeta = __DIR__ . "/documentos";

$archivos = scandir($carpeta);

print_r($archivos);

SALIDA

Array
(
    [0] => .
    [1] => ..
    [2] => archivo1.txt
    [3] => archivo2.txt
)

¿QUÉ SIGNIFICAN?

.

Directorio actual.

..

Directorio padre.

RECORRER DIRECTORIOS

EJEMPLO PROFESIONAL

<?php

$carpeta = __DIR__ . "/documentos";

$archivos = scandir($carpeta);

foreach ($archivos as $archivo) {

    if ($archivo != "." && $archivo != "..") {

        echo $archivo . "<br>";
    }
}

SALIDA

archivo1.txt
archivo2.txt

EXPLICACIÓN TÉCNICA

scandir() devuelve array.

Luego:

foreach

recorre archivos.

¿PARA QUÉ SE USA ESTO?

Muchísimo.

CASOS REALES

Sistema de imágenes

/uploads

listar imágenes subidas.

Sistema de logs

/logs

listar archivos log.

Sistema documental

/documentos

mostrar PDFs disponibles.


EJEMPLO PROFESIONAL COMPLETO

SISTEMA SIMPLE DE ARCHIVOS

<?php

$carpeta = __DIR__ . "/uploads";

if (!is_dir($carpeta)) {

    mkdir($carpeta);

    echo "Carpeta creada <br>";
}

$archivos = scandir($carpeta);

foreach ($archivos as $archivo) {

    if ($archivo != "." && $archivo != "..") {

        echo $archivo . "<br>";
    }
}

¿QUÉ HACE?

1.

Verifica si existe carpeta.

2.

Si no existe → la crea.

3.

Lee contenido.

4.

Muestra archivos.

PROBLEMAS REALES

1. PERMISOS

Error típico:

Permission denied

2. RUTAS INVÁLIDAS

Carpetas inexistentes.

3. DIRECTORIOS NO VACÍOS

rmdir() falla.

4. EXPONER ARCHIVOS SENSIBLES

Muy grave.

BUENAS PRÁCTICAS

1. Usar rutas absolutas

Correcto:

__DIR__ . "/uploads"

2. Validar existencia

Correcto:

is_dir()

3. Filtrar . y ..

Obligatorio con scandir().

4. Separar carpetas

Ejemplo profesional:

/uploads
/logs
/storage
/cache

5. No permitir acceso directo a carpetas críticas

Muy importante en seguridad.

ERRORES COMUNES

ERROR 1 — Crear carpetas repetidas

Sin validar.

ERROR 2 — Eliminar carpetas no vacías

rmdir() falla.

ERROR 3 — Mostrar archivos sensibles

Muy grave.

ERROR 4 — No validar rutas

Puede romper el sistema.

RESUMEN TÉCNICO

Aprendiste:

is_dir()
mkdir()
rmdir()
scandir()
Crear carpetas
Eliminar carpetas
Recorrer directorios
Leer archivos de una carpeta
Buenas prácticas profesionales

*/
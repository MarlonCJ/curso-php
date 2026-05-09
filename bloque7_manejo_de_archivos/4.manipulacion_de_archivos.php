<?php
/*

TEMA 4 — MANIPULACIÓN DE ARCHIVOS EN PHP

¿QUÉ ES LA MANIPULACIÓN DE ARCHIVOS?

Manipular archivos significa realizar operaciones sobre ellos después de existir.

PHP puede:

Renombrar archivos
Copiarlos
Eliminarlos
Verificar tamaño
Validar existencia
Mover archivos
Consultar información

ESCENARIOS REALES

Estas operaciones son esenciales en:

Sistemas de uploads
Gestión documental
Backups
Generación de reportes
Procesamiento de imágenes
Logs
Auditorías
Sistemas empresariales

FUNCIONES PRINCIPALES

Función	Uso

file_exists()	Verificar existencia
rename()	    Renombrar o mover
copy()	        Copiar archivos
unlink()	    Eliminar archivo
filesize()	    Obtener tamaño

FUNCIÓN 1 — file_exists()

¿QUÉ HACE?

Verifica si un archivo o carpeta existe.

EJEMPLO

<?php

$archivo = __DIR__ . "/datos.txt";

if (file_exists($archivo)) {
    echo "El archivo existe";
} else {
    echo "El archivo no existe";
}

IMPORTANCIA PROFESIONAL

Nunca debes:

Leer
Copiar
Eliminar
Renombrar

sin validar existencia primero.

ERROR PROFESIONAL GRAVE

unlink($archivo);

Sin validar.

Puede producir:

No such file or directory

FUNCIÓN 2 — rename()

¿QUÉ HACE?

Permite:

Renombrar archivos
Mover archivos

EJEMPLO — RENOMBRAR

Archivo original:

datos.txt

CÓDIGO

<?php

$original = __DIR__ . "/datos.txt";

$nuevo = __DIR__ . "/usuarios.txt";

if (file_exists($original)) {

    rename($original, $nuevo);

    echo "Archivo renombrado";
}

RESULTADO

usuarios.txt

¿QUÉ PASA INTERNAMENTE?

El sistema operativo:

Cambia referencia del archivo
Mantiene contenido
Actualiza nombre
MOVER ARCHIVOS

rename() también mueve archivos.

EJEMPLO

<?php

$origen = __DIR__ . "/datos.txt";

$destino = __DIR__ . "/backup/datos.txt";

rename($origen, $destino);

RESULTADO

Archivo movido a:

/backup

IMPORTANTE

La carpeta destino debe existir.

FUNCIÓN 3 — copy()

¿QUÉ HACE?

Duplica un archivo.

EJEMPLO
<?php

$original = __DIR__ . "/reporte.txt";

$copia = __DIR__ . "/reporte_backup.txt";

if (file_exists($original)) {

    copy($original, $copia);

    echo "Archivo copiado";
}

DIFERENCIA PROFESIONAL

rename()
Mueve

copy()
Duplica

CASO REAL

Backups automáticos:

/reportes
/reportes_backup

FUNCIÓN 4 — unlink()

¿QUÉ HACE?

Elimina un archivo.

EJEMPLO

<?php

$archivo = __DIR__ . "/temp.txt";

if (file_exists($archivo)) {

    unlink($archivo);

    echo "Archivo eliminado";
}

IMPORTANTE

⚠️ unlink() NO envía a papelera.

El archivo desaparece directamente.

RIESGO PROFESIONAL

Error peligroso:

unlink("usuarios.db");

Puede destruir información real.

BUENA PRÁCTICA

Validar:

Existencia
Ruta
Tipo de archivo

antes de eliminar.

FUNCIÓN 5 — filesize()

¿QUÉ HACE?

Obtiene tamaño del archivo en bytes.

EJEMPLO

<?php

$archivo = __DIR__ . "/video.mp4";

if (file_exists($archivo)) {

    echo filesize($archivo);
}

SALIDA EJEMPLO
5242880

¿QUÉ SIGNIFICA?

5 MB aproximadamente

USOS REALES

Validaciones de:

Uploads
Videos
PDFs
Imágenes
Logs

VALIDACIÓN PROFESIONAL

if (filesize($archivo) > 5000000) {
    echo "Archivo demasiado grande";
}

EJEMPLO PROFESIONAL INTEGRADO

SISTEMA DE BACKUP

<?php

$archivo = __DIR__ . "/datos.txt";

$backup = __DIR__ . "/backup/datos_backup.txt";

if (file_exists($archivo)) {

    copy($archivo, $backup);

    echo "Backup realizado";

} else {

    echo "Archivo no encontrado";
}

EXPLICACIÓN TÉCNICA

Flujo profesional
Validar existencia
Ejecutar operación
Confirmar resultado

IMPORTANTE — OPERACIONES DEL SISTEMA OPERATIVO

Estas funciones NO son simuladas.

PHP realmente:

Modifica disco
Cambia archivos
Consume recursos físicos
PROBLEMAS REALES

1. FALTA DE PERMISOS

Error típico:

Permission denied

2. ARCHIVOS BLOQUEADOS

Otro proceso puede estar usándolo.

3. RUTAS INVÁLIDAS

Carpetas inexistentes.

4. ELIMINACIÓN ACCIDENTAL

Muy común en sistemas mal diseñados.

BUENAS PRÁCTICAS

1. Validar siempre existencia

Correcto:

file_exists($archivo)

2. Usar rutas absolutas

Correcto:

__DIR__ . "/archivo.txt"

3. Confirmar resultados

Nunca asumir éxito.

4. Separar carpetas críticas

Ejemplo profesional:

/storage
/uploads
/backups
/temp

5. Evitar eliminar directamente

Sistemas reales usan:

soft delete

o carpetas temporales.

ERRORES COMUNES

ERROR 1 — Eliminar sin validar

Muy grave.

ERROR 2 — Confundir copy() con rename()

Uno duplica.
Otro mueve.

ERROR 3 — Usar rutas relativas

Provoca fallos inconsistentes.

ERROR 4 — Manipular archivos críticos

Sin backups.

RESUMEN TÉCNICO

Aprendiste:

file_exists()
rename()
copy()
unlink()
filesize()
Renombrar archivos
Mover archivos
Copiar archivos
Eliminar archivos
Validar tamaños
Riesgos profesionales reales

*/
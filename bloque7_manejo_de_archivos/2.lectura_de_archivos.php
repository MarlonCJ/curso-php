<?php

/*

TEMA 2 — LECTURA DE ARCHIVOS EN PHP

¿QUÉ SIGNIFICA LEER UN ARCHIVO?

Leer un archivo significa obtener información almacenada físicamente en el disco del servidor.

PHP puede leer:

Archivos .txt
.csv
.json
Logs
Configuraciones
Archivos generados por usuarios
Datos exportados por otros sistemas

ESCENARIOS REALES

La lectura de archivos se utiliza en:

Sistemas de logs
Importación de datos
Lectura de configuraciones
Procesamiento de reportes
Motores de plantillas
Sistemas de caché
Lectura de APIs almacenadas
Archivos temporales

FORMAS PRINCIPALES DE LEER ARCHIVOS

PHP tiene múltiples métodos profesionales.

Métodos principales:

Función	Uso

file_get_contents()	Leer archivo completo
fopen()	Abrir archivo
fread()	Leer cantidad específica
fgets()	Leer línea por línea
feof()	Detectar final del archivo

MÉTODO 1 — file_get_contents()

¿QUÉ HACE?

Lee TODO el contenido del archivo y lo devuelve como string.

EJEMPLO BÁSICO

Supón este archivo:

datos.txt

Hola mundo
PHP es potente

CÓDIGO
<?php

$archivo = __DIR__ . "/datos.txt";

if (file_exists($archivo)) {

    $contenido = file_get_contents($archivo);

    echo $contenido;

} else {

    echo "Archivo no encontrado";
}

SALIDA

Hola mundo
PHP es potente
EXPLICACIÓN TÉCNICA

Línea 1
$contenido = file_get_contents($archivo);

PHP:

Abre el archivo
Lee TODO el contenido
Lo carga en memoria
Lo devuelve como string
Cierra automáticamente el archivo

IMPORTANTE

file_get_contents() es simple y potente, PERO:

⚠️ No es ideal para archivos gigantes.

Porque carga todo en memoria RAM.

CASO PELIGROSO

$contenido = file_get_contents("video.zip");

Si el archivo pesa 4GB:

Puede consumir toda la memoria
Puede bloquear el servidor
Puede lanzar fatal error

USO CORRECTO

Ideal para:

Configuraciones

JSON
TXT pequeños
HTML
XML
CSV pequeños

MÉTODO 2 — fopen()

¿QUÉ HACE?

Abre un archivo manualmente.

Devuelve un recurso de archivo.

CONCEPTO IMPORTANTE

Cuando usas fopen():

PHP NO lee automáticamente.

Solo abre una conexión con el archivo.

EJEMPLO

<?php

$archivo = __DIR__ . "/datos.txt";

$handle = fopen($archivo, "r");

if ($handle) {

    echo "Archivo abierto correctamente";

} else {

    echo "Error al abrir archivo";
}

EXPLICACIÓN

"r"

Modo lectura.

¿QUÉ ES $handle?

Es un recurso interno que representa el archivo abierto.

Ejemplo conceptual:

Archivo físico ←→ Handle ←→ PHP

IMPORTANTE

Cuando usas fopen():

Debes cerrar el archivo manualmente.

CIERRE CORRECTO

fclose($handle);

ERROR COMÚN GRAVE

Abrir archivos y no cerrarlos.

Esto produce:

Fugas de recursos
Bloqueos
Consumo innecesario
Problemas de concurrencia

MÉTODO 3 — fread()

¿QUÉ HACE?

Lee una cantidad específica de bytes.

EJEMPLO

<?php

$archivo = __DIR__ . "/datos.txt";

$handle = fopen($archivo, "r");

if ($handle) {

    $contenido = fread($handle, filesize($archivo));

    echo $contenido;

    fclose($handle);
}

EXPLICACIÓN TÉCNICA

filesize($archivo)

Obtiene tamaño del archivo en bytes.

fread($handle, tamaño)

Lee exactamente esa cantidad.

¿POR QUÉ ES MÁS PROFESIONAL?

Porque tienes control total:

Cuánto leer
Cuándo leer
Cómo procesar
Flujo de memoria

MÉTODO 4 — fgets() + feof()

LECTURA LÍNEA POR LÍNEA

Este es el método profesional para archivos grandes.

EJEMPLO

Archivo:

Juan
Pedro
Ana
Carlos
CÓDIGO

<?php

$archivo = __DIR__ . "/usuarios.txt";

$handle = fopen($archivo, "r");

if ($handle) {

    while (!feof($handle)) {

        $linea = fgets($handle);

        echo $linea . "<br>";
    }

    fclose($handle);
}

EXPLICACIÓN TÉCNICA

feof()

Significa:

File End Of File

Pregunta:

“¿Llegamos al final del archivo?”

fgets()

Lee UNA línea por iteración.

¿POR QUÉ ES EL MÉTODO MÁS PROFESIONAL?

Porque:

✅ Consume poca memoria
✅ Escala mejor
✅ Ideal para logs enormes
✅ Procesa datos progresivamente


DIFERENCIA PROFESIONAL

file_get_contents()
Lee TODO el archivo

fgets()
Lee línea por línea

COMPARACIÓN REAL

Método	                Memoria	Escalabilidad
file_get_contents()	    Alta	Baja
fgets()	                Baja	Alta

BUENAS PRÁCTICAS

1. Validar existencia
file_exists($archivo)

2. Cerrar siempre el archivo
fclose($handle);

3. Usar lectura progresiva en archivos grandes

Correcto:

while (!feof($handle))

4. Manejar errores

Incorrecto:

$handle = fopen($archivo, "r");

Correcto:

if ($handle) {

ERRORES COMUNES

ERROR 1 — No cerrar archivo

fopen(...)

Sin fclose().

ERROR 2 — Leer archivo inexistente

Produce warnings.

ERROR 3 — Usar file_get_contents() en archivos enormes

Puede romper el servidor.

ERROR 4 — No validar fopen()

fopen() puede devolver:

false

EJEMPLO PROFESIONAL REAL

Lectura de logs:

<?php

$log = __DIR__ . "/logs/error.log";

if (file_exists($log)) {

    $handle = fopen($log, "r");

    while (!feof($handle)) {

        echo fgets($handle);
    }

    fclose($handle);
}

RESUMEN TÉCNICO

Aprendiste:

file_get_contents()
fopen()
fread()
fgets()
feof()
fclose()

Lectura completa vs progresiva

Manejo eficiente de memoria
Buenas prácticas profesionales

*/
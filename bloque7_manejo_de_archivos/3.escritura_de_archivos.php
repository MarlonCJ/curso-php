<?php

/*

TEMA 3 — ESCRITURA DE ARCHIVOS EN PHP

¿QUÉ SIGNIFICA ESCRIBIR UN ARCHIVO?

Escribir un archivo significa:

Crear contenido
Modificar información existente
Guardar datos persistentes en disco

PHP puede:

Crear archivos automáticamente
Sobrescribir contenido
Agregar información al final
Generar logs
Exportar reportes
Guardar configuraciones
Persistir datos temporales

ESCENARIOS REALES

La escritura de archivos se utiliza en:

Logs del sistema
Exportaciones CSV
Reportes automáticos
Backups
Configuración dinámica
Caché
Subida de archivos
Auditorías
Sistemas de tracking

MÉTODOS PRINCIPALES DE ESCRITURA

Función	Uso
file_put_contents()	Escritura rápida
fopen() + fwrite()	Control manual profesional

MÉTODO 1 — file_put_contents()

¿QUÉ HACE?

Permite:

Crear archivos
Sobrescribir contenido
Escribir texto rápidamente

EJEMPLO BÁSICO

<?php

$archivo = __DIR__ . "/datos.txt";

$contenido = "Hola desde PHP";

file_put_contents($archivo, $contenido);

echo "Archivo creado";

¿QUÉ PASA INTERNAMENTE?

PHP:

Busca el archivo
Si no existe → lo crea
Si existe → sobrescribe contenido
Escribe datos
Cierra automáticamente

RESULTADO

Archivo generado:

Hola desde PHP
COMPORTAMIENTO IMPORTANTE
SOBRESCRITURA

Por defecto:

file_put_contents()

ELIMINA el contenido anterior.

EJEMPLO

Archivo original:

Texto viejo

Código:

file_put_contents($archivo, "Texto nuevo");

Resultado:

Texto nuevo

El contenido viejo desaparece.

APPEND — AGREGAR SIN BORRAR
BANDERA FILE_APPEND

Permite agregar contenido al final.

EJEMPLO

<?php

$archivo = __DIR__ . "/log.txt";

$nuevoLog = "Nuevo acceso\n";

file_put_contents($archivo, $nuevoLog, FILE_APPEND);

echo "Log agregado";

RESULTADO

Nuevo acceso
Nuevo acceso
Nuevo acceso
EXPLICACIÓN TÉCNICA
FILE_APPEND

Le indica a PHP:

“No sobrescribas. Agrega al final.”

IMPORTANTE — \n

"\n"

Representa salto de línea.

PROFESIONALMENTE

Los logs casi siempre usan:

FILE_APPEND

MÉTODO 2 — fopen() + fwrite()

¿POR QUÉ EXISTE?

Porque file_put_contents() es limitado.

fopen() ofrece:

✅ Mayor control
✅ Mejor manejo de archivos grandes
✅ Escritura progresiva
✅ Manipulación avanzada

APERTURA DEL ARCHIVO

$handle = fopen($archivo, "w");

MODOS IMPORTANTES

Modo	Significado
"w"	    Escritura sobrescribiendo
"a"	    Append
"r"	    Solo lectura
"x"	    Crear solo si NO existe

EJEMPLO PROFESIONAL

<?php

$archivo = __DIR__ . "/usuarios.txt";

$handle = fopen($archivo, "w");

if ($handle) {

    fwrite($handle, "Juan\n");
    fwrite($handle, "Pedro\n");
    fwrite($handle, "Ana\n");

    fclose($handle);

    echo "Datos guardados";
}

EXPLICACIÓN TÉCNICA

fwrite()

Escribe bytes en el archivo.

DIFERENCIA PROFESIONAL

file_put_contents()

Escribe todo de una vez

fwrite()

Permite escritura controlada

IMPORTANTE — CIERRE DEL ARCHIVO

fclose($handle);

OBLIGATORIO.

¿QUÉ PASA SI NO CIERRAS?

Problemas reales:

Archivo bloqueado
Datos corruptos
Pérdida parcial
Consumo de recursos
Inconsistencias
ESCRITURA SEGURA
VALIDAR RESULTADO

$resultado = file_put_contents($archivo, $contenido);

if ($resultado !== false) {
    echo "Escritura correcta";
}

¿QUÉ DEVUELVE?

Devuelve:

Cantidad de bytes escritos

O:

false

si falla.

PROBLEMAS REALES DE ESCRITURA

1. FALTA DE PERMISOS

Error típico:

Permission denied

2. RUTA INCORRECTA

__DIR__ . "/carpeta/archivo.txt"

Si la carpeta no existe → falla.

3. DISCO LLENO

El servidor puede quedarse sin espacio.

4. ARCHIVO BLOQUEADO

Otro proceso puede estar usándolo.

BUENAS PRÁCTICAS

1. Usar rutas absolutas

Correcto:

__DIR__ . "/logs/app.log"

2. Validar resultado

Correcto:

if ($resultado !== false)

3. Cerrar archivos manuales

Correcto:

fclose($handle);

4. Separar logs por líneas

Correcto:

"Error detectado\n"

5. Organizar carpetas

Ejemplo profesional:

/storage
/logs
/uploads
/cache
ERRORES COMUNES

ERROR 1 — Sobrescribir accidentalmente

file_put_contents()

sin FILE_APPEND.

ERROR 2 — No validar escritura

Nunca asumir éxito.

ERROR 3 — No cerrar archivos

Muy grave en servidores reales.

ERROR 4 — Escribir rutas relativas

Puede fallar dependiendo del contexto.

EJEMPLO PROFESIONAL REAL

Sistema de auditoría:

<?php

$log = __DIR__ . "/logs/accesos.log";

$mensaje = date("Y-m-d H:i:s") . " - Usuario inició sesión\n";

file_put_contents($log, $mensaje, FILE_APPEND);

ANÁLISIS PROFESIONAL

date()

Genera timestamp.

FILE_APPEND

Mantiene historial.

Logs reales

Los sistemas empresariales generan miles de líneas así.

RESUMEN TÉCNICO

Aprendiste:

file_put_contents()
FILE_APPEND
fopen()
fwrite()
Modos "w" y "a"
Escritura segura
Validación de resultados
Riesgos reales de escritura
Buenas prácticas profesionales

*/

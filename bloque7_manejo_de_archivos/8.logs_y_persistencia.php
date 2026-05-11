<?php

/*

TEMA 8 — LOGS Y PERSISTENCIA EN PHP

¿QUÉ ES UN LOG?

Un log es un registro de eventos del sistema.

Los sistemas reales registran información constantemente.

Ejemplos:

errores
inicios de sesión
compras
modificaciones
accesos
fallos
actividades sospechosas

EJEMPLO REAL

Archivo:

error.log

Contenido:

2026-05-11 10:30:20 - Usuario inició sesión
2026-05-11 10:32:10 - Error en login
2026-05-11 10:35:02 - Compra realizada

¿POR QUÉ SON TAN IMPORTANTES?

Porque cuando algo falla:

los logs son la evidencia

LOS LOGS AYUDAN A:

detectar errores
auditar usuarios
rastrear actividad
encontrar ataques
monitorear sistemas
depurar aplicaciones

¿QUÉ ES PERSISTENCIA?

Persistencia significa:

guardar datos permanentemente

EJEMPLO

Si una variable desaparece al cerrar el programa:

NO es persistente

SI SE GUARDA EN:
archivo
base de datos
sesión

entonces:

sí hay persistencia

LOGS EN PHP

La forma más simple:

file_put_contents()

EJEMPLO BÁSICO

<?php

$log = __DIR__ . "/logs/app.log";

$mensaje = "Usuario inició sesión\n";

file_put_contents($log, $mensaje, FILE_APPEND);

echo "Log registrado";

¿QUÉ PASA AQUÍ?

1.

Se define archivo log.

2.

Se crea mensaje.

3.

FILE_APPEND

agrega línea sin borrar contenido anterior.

RESULTADO

Usuario inició sesión
Usuario inició sesión
Usuario inició sesión

PROBLEMA

No sabemos:

fecha
hora
usuario
SOLUCIÓN PROFESIONAL

Agregar timestamps.

date()

EJEMPLO

<?php

echo date("Y-m-d H:i:s");

SALIDA

2026-05-11 15:30:45

SIGNIFICADO

Formato	Significado

Y	Año
m	Mes
d	Día
H	Hora
i	Minutos
s	Segundos

LOG PROFESIONAL

<?php

$log = __DIR__ . "/logs/app.log";

$mensaje = date("Y-m-d H:i:s") . " - Usuario inició sesión\n";

file_put_contents($log, $mensaje, FILE_APPEND);

RESULTADO

2026-05-11 15:30:45 - Usuario inició sesión

¿POR QUÉ ES PROFESIONAL?

Porque ahora puedes saber:

cuándo ocurrió
qué ocurrió
en qué momento exacto
EJEMPLO REAL DE AUDITORÍA

<?php

$usuario = "Juan";

$accion = "Eliminó un producto";

$mensaje = date("Y-m-d H:i:s") . " - $usuario - $accion\n";

file_put_contents(
    __DIR__ . "/logs/auditoria.log",
    $mensaje,
    FILE_APPEND
);

RESULTADO

2026-05-11 16:00:00 - Juan - Eliminó un producto

ESTO YA ES BACKEND REAL

Los sistemas empresariales hacen esto constantemente.

ORGANIZACIÓN DE LOGS

Profesionalmente:

/logs
    app.log
    error.log
    access.log
    security.log

    TIPOS DE LOGS

    1. ACCESS LOG

Registra accesos.

2. ERROR LOG

Registra errores.

3. SECURITY LOG

Intentos sospechosos.

4. AUDIT LOG

Acciones importantes de usuarios.

EJEMPLO PROFESIONAL COMPLETO
SISTEMA SIMPLE DE LOGS

<?php

$carpetaLogs = __DIR__ . "/logs";

if (!is_dir($carpetaLogs)) {

    mkdir($carpetaLogs);
}

$archivoLog = $carpetaLogs . "/app.log";

$mensaje = date("Y-m-d H:i:s") . " - Sistema iniciado\n";

file_put_contents($archivoLog, $mensaje, FILE_APPEND);

echo "Evento registrado";
¿QUÉ HACE?

1.

Verifica carpeta logs.

2.

La crea si no existe.

3.

Construye archivo log.

4.

Agrega mensaje.

RESULTADO

2026-05-11 16:10:00 - Sistema iniciado

PERSISTENCIA REAL

EJEMPLO SIN PERSISTENCIA

$contador = 1;

Cuando termina el script:

desaparece

EJEMPLO CON PERSISTENCIA

Guardar en archivo:

file_put_contents()

La información permanece incluso después de cerrar el sistema.

CASOS REALES DE PERSISTENCIA

configuraciones
logs
sesiones
caché
backups
datos temporales

PROBLEMAS REALES

1. LOGS GIGANTES

Un servidor puede generar:

millones de líneas

2. DISCO LLENO

Logs mal administrados llenan almacenamiento.

3. INFORMACIÓN SENSIBLE

Nunca guardar:

contraseñas
tokens
datos críticos

4. PERMISOS

PHP necesita permisos de escritura.

BUENAS PRÁCTICAS

1. Usar carpeta exclusiva
/logs

2. Agregar timestamps

OBLIGATORIO.

3. Usar FILE_APPEND

Para no perder historial.

4. Separar logs por propósito

Muy profesional.

5. No guardar información sensible

Regla crítica.

ERRORES COMUNES

ERROR 1 — Sobrescribir logs

Sin FILE_APPEND.

ERROR 2 — No usar fechas

Logs inútiles.

ERROR 3 — Guardar contraseñas

Muy grave.

ERROR 4 — No controlar tamaño

Logs gigantes.

RESUMEN TÉCNICO

Aprendiste:

Qué es un log
Qué es persistencia
date()
Generación de logs
Auditoría básica
Timestamps
Organización profesional
Persistencia de datos
Riesgos reales
Buenas prácticas

*/
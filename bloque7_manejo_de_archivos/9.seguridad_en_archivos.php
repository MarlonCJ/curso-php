<?php

/*

TEMA 9 — SEGURIDAD EN ARCHIVOS EN PHP

¿POR QUÉ LA SEGURIDAD EN ARCHIVOS ES TAN IMPORTANTE?

Porque el manejo de archivos es una de las áreas más atacadas en aplicaciones web.

Un error aquí puede permitir:

robo de información
ejecución de código malicioso
destrucción de archivos
acceso no autorizado
control del servidor

CONCEPTO PROFESIONAL

Un archivo NO es solo texto.

Puede ser:

una imagen
un PDF
un ejecutable
un script malicioso
malware

Por eso:

NUNCA debes confiar en archivos enviados por usuarios

RIESGO 1 — SUBIR ARCHIVOS .php

ATAQUE REAL

Un atacante puede subir:

virus.php

Contenido:

<?php

system($_GET['cmd']);

¿QUÉ PASA SI EL SERVIDOR LO EJECUTA?

El atacante podría ejecutar comandos del sistema operativo.

Eso es extremadamente grave.

SOLUCIÓN

Nunca permitir extensiones peligrosas.

VALIDAR EXTENSIONES

<?php

$permitidas = ["jpg", "png", "pdf"];

$extension = pathinfo(
    $_FILES["archivo"]["name"],
    PATHINFO_EXTENSION
);

if (!in_array($extension, $permitidas)) {

    echo "Archivo no permitido";
}

EXPLICACIÓN TÉCNICA

pathinfo()

Obtiene información del archivo.

PATHINFO_EXTENSION

Extrae extensión.

in_array()

Verifica si existe en lista permitida.

IMPORTANTE

Profesionalmente:

se validan extensiones PERMITIDAS

NO extensiones prohibidas.

MAL ENFOQUE

if ($extension != "php")

Porque pueden existir:

.exe
.bat
.sh
.js
.phtml

BUEN ENFOQUE

Whitelist:

solo permitir lo seguro

RIESGO 2 — MIME FALSO

PROBLEMA

El usuario puede renombrar:

virus.php → foto.jpg

SOLUCIÓN

Validar MIME.

EJEMPLO

<?php

$permitidos = ["image/jpeg", "image/png"];

$tipo = $_FILES["archivo"]["type"];

if (!in_array($tipo, $permitidos)) {

    echo "Tipo inválido";
}

IMPORTANTE

La extensión NO es suficiente.

VALIDACIÓN PROFESIONAL

Se valida:

✅ extensión
✅ MIME
✅ contenido real

RIESGO 3 — PATH TRAVERSAL

Muy importante.

ATAQUE REAL

Usuario envía:

../../../config.php

¿QUÉ INTENTA HACER?

Salir de carpetas permitidas.

SI EL SISTEMA ES INSEGURO

Puede acceder a:

archivos privados
configuraciones
credenciales
archivos del servidor
EJEMPLO PELIGROSO

<?php

$archivo = $_GET["archivo"];

echo file_get_contents($archivo);

ATAQUE

?archivo=../../../config.php

CONSECUENCIA

Robo de información crítica.

SOLUCIÓN

Nunca usar rutas controladas directamente por usuarios.

VALIDAR RUTAS

Correcto:

$base = __DIR__ . "/documentos/";

$archivo = basename($_GET["archivo"]);

$ruta = $base . $archivo;

¿QUÉ HACE basename()?

Elimina rutas peligrosas.

EJEMPLO

Entrada:

../../../config.php

Resultado:

config.php

RIESGO 4 — SOBRESCRIBIR ARCHIVOS

PROBLEMA

Dos usuarios suben:

foto.jpg

Uno sobrescribe el otro.

SOLUCIÓN

Generar nombres únicos.

EJEMPLO

$nombre = time() . "_" . $_FILES["archivo"]["name"];

RESULTADO

1715200000_foto.jpg

RIESGO 5 — ARCHIVOS GIGANTES

ATAQUE

Subir archivos enormes.

CONSECUENCIAS

disco lleno
servidor lento
caída del sistema
VALIDAR TAMAÑO

<?php

if ($_FILES["archivo"]["size"] > 2000000) {

    echo "Archivo demasiado grande";
}

RIESGO 6 — MOSTRAR ARCHIVOS SENSIBLES

EJEMPLOS CRÍTICOS

Nunca exponer:

.env
config.php
backups.sql

IMPORTANTE

Los uploads deben estar separados.

ESTRUCTURA PROFESIONAL

/public
/uploads
/storage
/logs

¿POR QUÉ?

Para evitar acceso directo desde navegador.

EJEMPLO PROFESIONAL COMPLETO

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $permitidas = ["jpg", "png"];

    $archivo = $_FILES["archivo"];

    $extension = pathinfo(
        $archivo["name"],
        PATHINFO_EXTENSION
    );

    if (!in_array($extension, $permitidas)) {

        die("Extensión inválida");
    }

    if ($archivo["size"] > 2000000) {

        die("Archivo muy grande");
    }

    $nombre = time() . "_" . basename($archivo["name"]);

    $destino = __DIR__ . "/uploads/" . $nombre;

    if (move_uploaded_file($archivo["tmp_name"], $destino)) {

        echo "Archivo seguro";
    }
}

¿QUÉ HACE ESTE SISTEMA?

1.

Valida extensión.

2.

Valida tamaño.

3.

Genera nombre único.

4.

Usa basename().

5.

Mueve archivo seguro.

PROBLEMAS REALES EN EMPRESAS

Muchos sistemas son hackeados por:

uploads inseguros
validaciones malas
permisos incorrectos
rutas vulnerables

BUENAS PRÁCTICAS

1. Validar TODO

Nunca confiar en usuario.

2. Usar whitelist

Permitir solo tipos seguros.

3. Renombrar archivos

Muy importante.

4. Validar tamaño

Obligatorio.

5. Usar basename()

Evita path traversal.

6. Separar uploads

Nunca junto al código fuente.

7. No ejecutar archivos subidos

Regla crítica.

ERRORES COMUNES

ERROR 1 — Confiar en extensión

Muy inseguro.

ERROR 2 — No validar MIME

Error profesional grave.

ERROR 3 — Usar nombres originales

Provoca sobrescrituras.

ERROR 4 — Permitir .php

Crítico.

ERROR 5 — Rutas controladas por usuario

Muy peligroso.

RESUMEN TÉCNICO

Aprendiste:

Seguridad en uploads
Validación de extensiones
Validación MIME
basename()
Path Traversal
Riesgos reales
Archivos maliciosos
Validación de tamaño
Renombrado seguro
Buenas prácticas backend


*/
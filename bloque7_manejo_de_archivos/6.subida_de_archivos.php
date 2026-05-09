<?php

/*

TEMA 6 — SUBIDA DE ARCHIVOS EN PHP

¿QUÉ ES LA SUBIDA DE ARCHIVOS?

La subida de archivos permite que un usuario envíe archivos desde su computador hacia el servidor.

Ejemplos reales:

Fotos de perfil
PDFs
Hojas de vida
Imágenes de productos
Videos
Facturas
Documentos médicos

¿QUÉ PASA REALMENTE?

Cuando un usuario selecciona un archivo:

mi_foto.jpg

el navegador envía el archivo al servidor.

PHP lo recibe temporalmente.

Luego PHP debe:

Validar archivo
Mover archivo
Guardarlo correctamente

CONCEPTO IMPORTANTE

Los archivos NO llegan automáticamente a tu carpeta.

PHP primero los guarda en una carpeta temporal del servidor.

Después tú decides:

dónde moverlos

VARIABLE GLOBAL $_FILES

Toda la información del archivo llega en:

$_FILES

ESTRUCTURA BÁSICA HTML

FORMULARIO

<form method="POST" enctype="multipart/form-data">

    <input type="file" name="archivo">

    <button type="submit">
        Subir
    </button>

</form>

IMPORTANTE — enctype

Esto es OBLIGATORIO:

enctype="multipart/form-data"

SI LO OLVIDAS

El archivo NO llegará.

$_FILES estará vacío.

RECIBIR EL ARCHIVO EN PHP

CÓDIGO

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    print_r($_FILES);
}

RESULTADO EJEMPLO

Array
(
    [archivo] => Array
        (
            [name] => foto.jpg
            [type] => image/jpeg
            [tmp_name] => C:\xampp\tmp\php123.tmp
            [error] => 0
            [size] => 204800
        )
)

EXPLICACIÓN TÉCNICA

name

Nombre original.

foto.jpg

type

Tipo MIME.

image/jpeg

tmp_name

Ruta temporal.

error

Código de error.

size

Tamaño en bytes.

¿POR QUÉ EXISTE tmp_name?

Por seguridad.

PHP NO mueve automáticamente el archivo final.

Primero lo guarda temporalmente.

FUNCIÓN CRÍTICA — move_uploaded_file()

¿QUÉ HACE?

Mueve el archivo temporal a una carpeta definitiva.

EJEMPLO FUNCIONAL COMPLETO

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $archivo = $_FILES["archivo"];

    $rutaTemporal = $archivo["tmp_name"];

    $nombre = $archivo["name"];

    $destino = __DIR__ . "/uploads/" . $nombre;

    if (move_uploaded_file($rutaTemporal, $destino)) {

        echo "Archivo subido correctamente";

    } else {

        echo "Error al subir archivo";
    }
}
¿QUÉ PASA AQUÍ?

1.

PHP recibe archivo temporal.

2.

Obtiene nombre.

3.

Construye ruta destino.

4.

Mueve archivo.

RESULTADO

Archivo termina en:

/uploads/foto.jpg

VALIDACIONES PROFESIONALES

MUY IMPORTANTES.

VALIDAR EXISTENCIA

if (isset($_FILES["archivo"]))

VALIDAR ERRORES
if ($_FILES["archivo"]["error"] == 0)

VALIDAR TAMAÑO

EJEMPLO

if ($_FILES["archivo"]["size"] > 2000000) {

    echo "Archivo demasiado grande";
}

¿CUÁNTO ES?

2 MB aproximadamente

VALIDAR EXTENSIÓN

EJEMPLO

$nombre = $_FILES["archivo"]["name"];

$extension = pathinfo($nombre, PATHINFO_EXTENSION);

if ($extension != "jpg") {

    echo "Solo imágenes JPG";
}

¿POR QUÉ ES IMPORTANTE?

Por seguridad.

ATAQUE REAL

Un atacante puede subir:

virus.php

Si el servidor lo ejecuta:

⚠️ El sistema puede ser comprometido.

VALIDAR TIPOS MIME

EJEMPLO

$tipo = $_FILES["archivo"]["type"];

if ($tipo != "image/jpeg") {

    echo "Tipo inválido";
}

IMPORTANTE

Los sistemas profesionales validan:

✅ extensión
✅ MIME
✅ tamaño
✅ nombre
✅ contenido real

RENOMBRAR ARCHIVOS

MUY recomendado.

PROBLEMA

Dos usuarios suben:

foto.jpg

Uno sobrescribe al otro.

SOLUCIÓN

Generar nombre único.

EJEMPLO

$nombreUnico = time() . "_" . $nombre;

RESULTADO

1715200000_foto.jpg

EJEMPLO PROFESIONAL COMPLETO

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_FILES["archivo"])) {

        $archivo = $_FILES["archivo"];

        if ($archivo["error"] == 0) {

            if ($archivo["size"] <= 2000000) {

                $extension = pathinfo($archivo["name"], PATHINFO_EXTENSION);

                if ($extension == "jpg") {

                    $nombre = time() . "_" . $archivo["name"];

                    $destino = __DIR__ . "/uploads/" . $nombre;

                    if (move_uploaded_file($archivo["tmp_name"], $destino)) {

                        echo "Archivo subido";

                    } else {

                        echo "Error al mover archivo";
                    }

                } else {

                    echo "Solo JPG";
                }

            } else {

                echo "Archivo muy grande";
            }

        } else {

            echo "Error en upload";
        }
    }
}

PROBLEMAS REALES

1. SUBIR VIRUS

Muy común.

2. ARCHIVOS GIGANTES

Pueden llenar disco.

3. EJECUCIÓN MALICIOSA

Subir .php.

4. SOBRESCRITURA

Archivos con mismo nombre.

5. RUTAS INSEGURAS

Muy peligroso.

BUENAS PRÁCTICAS

1. Validar extensión

OBLIGATORIO.

2. Validar tamaño

OBLIGATORIO.

3. Renombrar archivos

Muy importante.

4. Usar carpeta exclusiva

Ejemplo:

/uploads

5. Nunca confiar en el usuario

Regla crítica.

6. Validar MIME

Profesionalmente obligatorio.

ERRORES COMUNES

ERROR 1 — Olvidar enctype

El upload falla.

ERROR 2 — No validar tamaño

Puede romper almacenamiento.

ERROR 3 — Permitir .php

Muy grave.

ERROR 4 — Usar nombres originales

Puede sobrescribir archivos.

ERROR 5 — No validar errores

$_FILES["error"]

RESUMEN TÉCNICO

Aprendiste:

$_FILES

move_uploaded_file()
Uploads
Validación de tamaño
Validación de extensión
Validación MIME
Seguridad en uploads
Archivos temporales
Renombrado seguro

*/
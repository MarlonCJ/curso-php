<?php   

/*

TEMA 10 — PROYECTO PRÁCTICO INTEGRADOR

SISTEMA DE NOTAS CON ARCHIVOS EN PHP

OBJETIVO DEL PROYECTO

Construir un mini sistema real utilizando:

formularios
lectura de archivos
escritura de archivos
persistencia
validaciones
manejo básico de directorios

Este proyecto une TODO lo aprendido en el bloque.

¿QUÉ HARÁ EL SISTEMA?

El usuario podrá:

✅ escribir una nota
✅ guardarla en un archivo
✅ leer notas guardadas
✅ mantener persistencia
✅ visualizar historial

ESTRUCTURA DEL PROYECTO

proyecto/
│
├── index.php
├── storage/
│   └── notas.txt

FLUJO DEL SISTEMA

1.

Usuario escribe nota.

2.

PHP recibe formulario.

3.

PHP guarda nota en archivo.

4.

PHP lee archivo.

5.

PHP muestra historial.

CÓDIGO COMPLETO FUNCIONAL

<?php

$carpeta = __DIR__ . "/storage";

if (!is_dir($carpeta)) {

    mkdir($carpeta);
}

$archivo = $carpeta . "/notas.txt";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nota = trim($_POST["nota"]);

    if (!empty($nota)) {

        $registro = date("Y-m-d H:i:s") . " - " . $nota . "\n";

        file_put_contents($archivo, $registro, FILE_APPEND);
    }
}

$notas = [];

if (file_exists($archivo)) {

    $notas = file($archivo);
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Sistema de Notas</title>
</head>

<body>

    <h1>Sistema de Notas</h1>

    <form method="POST">

        <textarea name="nota"></textarea>

        <br><br>

        <button type="submit">
            Guardar Nota
        </button>

    </form>

    <hr>

    <h2>Historial</h2>

    <?php foreach ($notas as $nota): ?>

        <p><?= htmlspecialchars($nota) ?></p>

    <?php endforeach; ?>

</body>

</html>

EXPLICACIÓN PROFESIONAL PASO A PASO

CREAR CARPETA

if (!is_dir($carpeta)) {

    mkdir($carpeta);
}

¿POR QUÉ?

Garantiza existencia de:

/storage

CONSTRUIR ARCHIVO

$archivo = $carpeta . "/notas.txt";

RECIBIR FORMULARIO

$_SERVER["REQUEST_METHOD"] == "POST"

OBTENER NOTA

trim($_POST["nota"])

¿QUÉ HACE trim()?

Elimina espacios innecesarios.

VALIDAR VACÍO

!empty($nota)

GENERAR REGISTRO

date("Y-m-d H:i:s")

Agrega fecha y hora.

GUARDAR EN ARCHIVO

file_put_contents(
    $archivo,
    $registro,
    FILE_APPEND
);

¿POR QUÉ FILE_APPEND?

Para NO borrar historial.

LEER HISTORIAL

$notas = file($archivo);

¿QUÉ HACE file()?

Lee archivo y devuelve array por líneas.

MOSTRAR NOTAS

foreach ($notas as $nota)

SEGURIDAD — htmlspecialchars()

htmlspecialchars($nota)

¿POR QUÉ ES IMPORTANTE?

Evita inyección HTML/JavaScript.

EJEMPLO DE ATAQUE

Usuario escribe:

<script>alert('hack')</script>

Sin protección:

⚠️ el navegador ejecuta código.

CON htmlspecialchars()

Se muestra como texto normal.

¿QUÉ APRENDISTE EN ESTE PROYECTO?

FORMULARIOS
POST
ARCHIVOS
file_put_contents()
file()

DIRECTORIOS

mkdir()
is_dir()

VALIDACIONES
empty()
trim()

SEGURIDAD

htmlspecialchars()

PERSISTENCIA

Las notas quedan guardadas incluso si cierras navegador.

ESTO YA ES DESARROLLO REAL

Aunque sea pequeño.

Aquí ya estás:

✅ recibiendo datos
✅ procesando información
✅ guardando persistencia
✅ mostrando historial
✅ organizando estructura

CÓMO PIENSA UN DESARROLLADOR

Este proyecto parece simple.

Pero el mismo patrón se usa en:

sistemas empresariales

ERPs
CRMs
LMS
aplicaciones SaaS

Solo cambia complejidad.

MEJORAS FUTURAS

Este proyecto podría evolucionar a:

eliminar notas
editar notas
usuarios
login
base de datos
categorías
búsqueda
uploads

CONCLUSIÓN DEL BLOQUE

Terminaste el bloque de:

MANEJO DE ARCHIVOS EN PHP

Ya comprendes:

lectura
escritura
directorios
uploads
CSV
logs
persistencia
seguridad
proyectos reales
SIGUIENTE FASE DEL SISTEMA

Ahora corresponde:

EVALUACIÓN OFICIAL DEL BLOQUE 7

Debes resolver EXACTAMENTE 10 ejercicios.

La evaluación medirá:

lógica
sintaxis
buenas prácticas
claridad
uso del concepto

Nota mínima:

8.5 / 10

No se regalan puntos.

*/

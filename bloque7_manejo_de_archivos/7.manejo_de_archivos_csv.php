<?php

/* 

TEMA 7 — MANEJO DE ARCHIVOS CSV EN PHP

¿QUÉ ES UN ARCHIVO CSV?

CSV significa:

Comma Separated Values

Es un formato utilizado para almacenar datos tabulares.

Muy parecido a Excel.

EJEMPLO DE CSV

Archivo:

usuarios.csv

Contenido:

Juan,25,Colombia
Ana,30,México
Pedro,28,Perú

¿QUÉ REPRESENTA?

Nombre	Edad	País
Juan	25	Colombia
Ana	    30	México
Pedro	28	Perú

¿POR QUÉ ES TAN IMPORTANTE?

Los CSV se usan muchísimo en:

Excel
Bancos
ERPs
Sistemas contables
Inventarios
Importaciones masivas
Reportes
Exportaciones empresariales

ESCENARIOS REALES

IMPORTAR PRODUCTOS
productos.csv

EXPORTAR CLIENTES
clientes.csv

REPORTES EMPRESARIALES
ventas_2026.csv

PHP Y LOS CSV

PHP tiene funciones especiales para trabajar con CSV.

Las principales:

Función	    Uso
fgetcsv()	Leer CSV
fputcsv()	Escribir CSV

LEER UN CSV

ARCHIVO

usuarios.csv

Contenido:

Juan,25,Colombia
Ana,30,México
Pedro,28,Perú

CÓDIGO COMPLETO

<?php

$archivo = __DIR__ . "/usuarios.csv";

if (file_exists($archivo)) {

    $handle = fopen($archivo, "r");

    while (($datos = fgetcsv($handle)) !== false) {

        echo "Nombre: " . $datos[0] . "<br>";
        echo "Edad: " . $datos[1] . "<br>";
        echo "País: " . $datos[2] . "<br>";

        echo "<hr>";
    }

    fclose($handle);
}

EXPLICACIÓN TÉCNICA

fopen()

Abre archivo.

fgetcsv()

Lee UNA línea CSV.

¿QUÉ DEVUELVE?

Devuelve array.

EJEMPLO

Línea:

Juan,25,Colombia

se convierte en:

[
   "Juan",
   "25",
   "Colombia"
]

POR ESO FUNCIONA

$datos[0]

RESULTADO
Nombre: Juan
Edad: 25
País: Colombia

¿POR QUÉ ES TAN ÚTIL?

Porque permite importar datos masivos.

EJEMPLO REAL

Una empresa puede importar:

10.000 productos

desde Excel usando CSV.

ESCRIBIR CSV

FUNCIÓN fputcsv()

Permite generar archivos CSV.

EJEMPLO

<?php

$archivo = __DIR__ . "/clientes.csv";

$handle = fopen($archivo, "w");

fputcsv($handle, ["Juan", 25, "Colombia"]);
fputcsv($handle, ["Ana", 30, "México"]);
fputcsv($handle, ["Pedro", 28, "Perú"]);

fclose($handle);

echo "CSV generado";

RESULTADO

Archivo generado:

Juan,25,Colombia
Ana,30,México
Pedro,28,Perú

¿QUÉ HACE fputcsv()?

Convierte arrays automáticamente en formato CSV.

DIFERENCIA IMPORTANTE

SIN fputcsv()

Tendrías que hacer:

"Juan,25,Colombia"

manual.

CON fputcsv()

PHP construye CSV automáticamente.

USO PROFESIONAL

Muy usado para:

exportaciones Excel
reportes administrativos
reportes contables
integración entre sistemas
EJEMPLO PROFESIONAL REAL
EXPORTAR USUARIOS

<?php

$usuarios = [

    ["Juan", "juan@email.com", 25],
    ["Ana", "ana@email.com", 30],
    ["Pedro", "pedro@email.com", 28]
];

$archivo = __DIR__ . "/usuarios.csv";

$handle = fopen($archivo, "w");

foreach ($usuarios as $usuario) {

    fputcsv($handle, $usuario);
}

fclose($handle);

echo "Exportación completada";

¿QUÉ PASA AQUÍ?
1.

Array de usuarios.

2.

Abrir archivo.

3.

Recorrer datos.

4.

Escribir cada línea CSV.

RESULTADO

Juan,juan@email.com,25
Ana,ana@email.com,30
Pedro,pedro@email.com,28
IMPORTAR CSV PROFESIONALMENTE

Muy común.

EJEMPLO REAL

Empresa recibe:

inventario.csv

PHP lo procesa automáticamente.

VALIDACIONES IMPORTANTES

1. VALIDAR EXISTENCIA
file_exists()

2. VALIDAR APERTURA
if ($handle)

3. CERRAR ARCHIVO
fclose()

4. VALIDAR ESTRUCTURA

Algunas líneas pueden venir dañadas.

PROBLEMAS REALES

1. ARCHIVOS MAL FORMATEADOS

Comas incorrectas.

2. CODIFICACIÓN

Problemas UTF-8.

3. ARCHIVOS GIGANTES

Miles de registros.

4. DATOS INCOMPLETOS

Columnas faltantes.

5. CARACTERES ESPECIALES

Tildes y ñ.

BUENAS PRÁCTICAS

1. Leer línea por línea

Nunca cargar CSV gigantes completos.

2. Validar cantidad de columnas

Ejemplo:

count($datos)

3. Manejar codificación UTF-8

Muy importante.

4. Validar datos antes de importar

Nunca confiar en CSV externo.

5. Cerrar archivos

Obligatorio.

ERRORES COMUNES

ERROR 1 — No cerrar archivo

Mala práctica grave.

ERROR 2 — Suponer estructura correcta

Los CSV reales vienen dañados muchas veces.

ERROR 3 — Leer archivos enormes en memoria

Muy peligroso.

ERROR 4 — No validar encoding

Produce caracteres corruptos.

RESUMEN TÉCNICO

Aprendiste:

Qué es un CSV

fgetcsv()
fputcsv()
Leer CSV
Escribir CSV
Convertir líneas en arrays
Exportaciones
Importaciones
Validaciones profesionales
Problemas reales de CSV

*/
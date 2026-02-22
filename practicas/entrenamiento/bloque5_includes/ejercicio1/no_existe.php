<?php

// ejercicio 4

/*
    Cuando se intenta abrir un archivo con include aparece un mensaje de advertencia que no se pudo abrir el archivo
    pero la ejecucion sigue funcionando cuando se utiliza include
*/
include 'operaciones2.php';

$saludo = 'Hola estoy practicando php';
echo $saludo;

// ------------------------

// ejercicio 5

/* 
    Con require este comportamiento es diferente, al no encontrar un archivo con ese nombre genera un error fatal
    que cierra y bloque el flujo de codigo
*/

require 'operaciones3.php';

$saludo = 'Hola estoy practicando php';
echo $saludo;


<?php

// NOMBRE,EDAD,MENSAJEEDD, MENSAJEPAIS, MENSAJPAISDEORIGIEN

// ==============================
// ======LOGICA CONDICIONAL======
// ==============================


// VARIABLES

$nombre = 'Marlon';
$edad = 32;
$pais = 'colombia';


if($edad >= 18){
    $mensajeEdad = 'Eres mayor de edad';
}else{
    $mensajeEdad = 'Eres menor de edad';
}

if($edad >= 18 && $pais === 'colombia'){
    $mensajePais = 'Puedes registrarte legalmente en Colombia';
}else{
    $mensajePais = 'No cumples los requisitos para registrarte';
}

switch($pais){
    case 'colombia':
        $mensajePaisOrigen = 'Tu país es Colombia';
    break;

    case 'mexico':
        $mensajePaisOrigen = 'Tu país es México';
    break;

    case 'argentina':
        $mensajePaisOrigen = 'Tu país es Argentina';
    break;

    default:
        $mensajePaisOrigen = 'País no reconocido';
    break;

}

// SALIDA HTML


echo '<!DOCTYPE html>';
echo '<head>';
echo '  <meta lang="es">';
echo '  <meta charset="UTF-8">';
echo '  <title>bloque 2</title>';
echo '</head>';
echo '<body>';
echo '  <h1>Validación de datos</h1>';
echo '  <p><strong>Nombre: </strong>'. $nombre . '</p>';
echo '  <p><strong>Edad: </strong>'.$edad.'</p>';
echo '  <p><strong>Resultado: </strong>'.$mensajeEdad.'</p>';
echo '  <p><strong>Registro: </strong>'.$mensajePais.'</p>';
echo '  <p><strong>Pais: </strong>'.$mensajePaisOrigen.'</p>';
echo '</body>';
echo '</html>';

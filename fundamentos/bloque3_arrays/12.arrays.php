<?php

/*
¿Qué es un array?

Un array es una estructura que permite almacenar multiples valores en una sola variable

sin arrays

No hay formularios
No hay Usuarios
No hay wordpress
No hay bases de datos
*/

// ARRAY INDEXADO

$frutas = ['manzana','pera','banana'];

/* Cada valor tiene un indice numerico

| Índice | Valor   |
| ------ | ------- |
| 0      | manzana |
| 1      | pera    |
| 2      | banana  |

Acceder a un valor

*/


echo $frutas[0];


// CREAR ARRAY PASO A PASO

$colores = [];

$colores[] = 'rojo';
$colores[] = 'azul';
$colores[] = 'amarillo';

/*
Muy usado cuando:

- Recibes datos dinámicos
- Procesos resultados
*/

// Print_r y var_dump (para aprender)

print_r($frutas);

// solo para debug, nunca para produccion


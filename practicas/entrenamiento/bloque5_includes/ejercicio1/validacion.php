<?php

function numeroPositivo($num){
    $result = '';

    if(!is_numeric($num)){
        $result = 'Ingrese un número';
    }elseif($num === 0){
        $result = 'Su Número es 0';
    }elseif($num > 0){
        $result = "Número Positivo";
    }else{
        $result = 'Número Negativo';
    }

    return $result;
}
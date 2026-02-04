<?php

function require_rol($rol){

    if(!isset($_SESSION['rol'])){
        header('Location: index.php');
        exit;
    }

    if($_SESSION['rol'] !== $rol){
        header('Location: index.php');
        exit;
    }


}



?>
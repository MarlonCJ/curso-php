<?php

function roles($rol){
    
    if(!isset($_SESSION['rol'])){
        header('Location: index.php');
        exit;
    }

    if($_SESSION['rol'] !== $rol){
        header('Location: dashboard.php');
        exit;
    }

}
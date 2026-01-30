<?php

require_once 'includes/session.php';

if(!isset($_SESSION['usuario'])){
    header('Location: index.php');
    exit;
}
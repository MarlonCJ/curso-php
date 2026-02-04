<?php

require_once 'session.php';

if(!isset($_SESSION['user'])){
    header('Location: index.php');
    exit;
}

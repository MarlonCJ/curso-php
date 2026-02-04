<?php

if(isset($_POST['username']) && !empty($_POST['username'])){
    $nombre = $_POST['username'];
    echo 'Hola ' . $nombre;
}
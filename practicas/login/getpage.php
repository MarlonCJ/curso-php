<?php

if(isset($_GET['username']) && !empty($_GET['username'])){
    $nombre = $_GET['username'];
    echo 'Si existe' . $nombre;
}


?>
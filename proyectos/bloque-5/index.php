<?php


require 'data.php';
require 'data.php';
require_once 'functions.php';
require_once 'functions.php';
require 'header.php';

foreach($usuarios as $usuario) {
    mostrarUsuario($usuario);
}

require 'footer.php';
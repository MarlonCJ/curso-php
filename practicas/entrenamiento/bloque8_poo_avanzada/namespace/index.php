<?php

require_once 'App/Admin/Usuario.php';
require_once 'App/Cliente/Usuario.php';

$admin = new \App\Admin\Usuario();
$cliente = new \App\Cliente\Usuario();

echo $admin->tipo();
echo $cliente->tipo();
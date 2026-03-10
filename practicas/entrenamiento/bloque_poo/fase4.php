<?php

// declare(strict_types=1);

// error_reporting(E_ALL);
// ini_set('display_errors',1);


// class NombreInvalidoException extends Exception{

// }

// class EmailInvalidoException extends Exception{

// }


// class UsuarioSeguro {
//     private string $nombre;
//     private string $email;

//     public function __construct(string $nombre, string $email){

//         if(trim($nombre)=== ''){
//             throw new NombreInvalidoException('El nombre no puede estar vacio');
//         }

//         if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
//             throw new EmailInvalidoException('El Email no es valido');
//         }

//         $this->nombre = $nombre;
//         $this->email = $email;

//     }

//     public function getEmail():string{
//         return $this->email;
//     }

//     public function cambiarEmail(string $nuevoEmail): void{

//         if(!filter_var($nuevoEmail,FILTER_VALIDATE_EMAIL)){
//             throw new EmailInvalidoException('Email invalido');
//         }

//         $this->email = $nuevoEmail;
//     }


// }


// try{
//     $usuario = new UsuarioSeguro('Marlon','marlon.edinsoncjgmail.com');
//     echo $usuario->getEmail().PHP_EOL;

//     $usuario->cambiarEmail('marlon@gmail.com');
//     echo $usuario->getEmail().PHP_EOL;

// }catch(NombreInvalidoException $e){
//     echo "Error en el nombre: " . $e->getMessage().PHP_EOL;
// }catch(EmailInvalidoException $e){
//     echo "Error en el email: " . $e->getMessage().PHP_EOL;
// }catch(Exception $e){
//     echo "Error general: " . $e->getMessage().PHP_EOL;
// }

// ----------------------------------

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors',1);

class EmailInvalidoException extends Exception {
}

class NombreInvalidoException extends Exception{
}


class Usuario {

    protected string $nombre;
    protected string $email;

    public function __construct(string $nombre, string $email)
    {   
        
        $this->validarNombre($nombre);
        $this->validarEmail($email);

        $this->nombre = $nombre;
        $this->email = $email;
    }

    public function validarEmail($email):void{
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            throw new EmailInvalidoException('Email invalido');
        }
    }

    public function validarNombre($nombre):void{
        if(trim($nombre) === ""){
            throw new NombreInvalidoException('El nombre no puede estar vacio');
        }
    }

    public function getNombre():string{
        return $this->nombre;
    }

    public function getEmail():string{
        return $this->email;
    }

    public function setNombre($nombre):void{
        
        $this->validarNombre($nombre);
        $this->nombre = $nombre;
    }

    public function setEmail($email):void{

        $this->validarEmail($email);
        $this->email=$email;

    }

    public function mostrarInfo():string{
        return "Nombre: {$this->nombre} Email: {$this->email}";
    }

}

class UsuarioCliente extends Usuario {

    public function comprarProducto():string{
        return "{$this->nombre} Compraste un producto";
    }

}

class UsuarioAdmin extends Usuario {

    public function eliminarUsuario():string{
        return "Se a eliminado un usuario";
    }
}

try{

    $usuario = new UsuarioCliente('Marlon','marlon.edinsoncj@gmail.com');
    echo $usuario->getNombre().PHP_EOL;

    $usuario->setNombre('edinson');
    echo $usuario->getNombre().PHP_EOL;

    echo $usuario->mostrarInfo().PHP_EOL;

    echo $usuario->comprarProducto().PHP_EOL;


    $cliente = new UsuarioCliente('camila','camila@gmail.com');
    echo $cliente->mostrarInfo().PHP_EOL;
    echo $cliente->comprarProducto().PHP_EOL;

    $admin = new UsuarioAdmin('andres','andres@gmail.com');
    echo $admin->mostrarInfo().PHP_EOL;
    echo $admin->eliminarUsuario().PHP_EOL;
}
catch(NombreInvalidoException $e){
    echo "Error nombre: ". $e->getMessage().PHP_EOL;
}
catch(EmailInvalidoException $e){
    echo "Error email: ". $e->getMessage().PHP_EOL;
}
catch(Exception $e){
    echo "Error general: ". $e->getMessage().PHP_EOL;
}


// try{

//     $usuario = new UsuarioCliente('Marlon','marlon.edinsoncj@gmail.com');
//     echo $usuario->getNombre().PHP_EOL;

//     $usuario->setNombre('edinson');
//     echo $usuario->getNombre().PHP_EOL;

//     echo $usuario->mostrarInfo().PHP_EOL;

//     echo $usuario->comprarProducto().PHP_EOL;

//     $usuario2 = new UsuarioAdmin('carlos','marlon@gmail.com');

//     echo $usuario2->eliminarUsuario().PHP_EOL;
// }
// catch(NombreInvalidoException $e){
//     echo "Error nombre: ". $e->getMessage().PHP_EOL;
// }
// catch(EmailInvalidoException $e){
//     echo "Error email: ". $e->getMessage().PHP_EOL;
// }
// catch(Exception $e){
//     echo "Error general: ". $e->getMessage().PHP_EOL;
// }



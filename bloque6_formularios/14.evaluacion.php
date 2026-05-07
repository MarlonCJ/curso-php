<?php

/*

🧪 EVALUACIÓN OFICIAL — BLOQUE 6: FORMULARIOS PHP (GET / POST)

📌 Instrucciones Generales

Debes resolver EXACTAMENTE 10 ejercicios.

✔ Código PHP limpio y ejecutable
✔ Sin soluciones parciales
✔ No se regalan puntos
✔ Nota mínima para aprobar: 8.5 / 10
✔ Evaluación tipo empresa real

Se evaluará:

Lógica (25%)
Sintaxis (15%)
Buenas prácticas (20%)
Claridad (15%)
Uso del concepto (25%)

🔟 EJERCICIOS OFICIALES

Ejercicio 1 — GET Básico

Objetivo:

Recibir un nombre por URL y mostrar saludo.

Contexto:

Sistema de bienvenida simple.

Instrucciones:

Usa $_GET para leer nombre.

Entrada:
archivo.php?nombre=Marlon
Salida esperada EXACTA:
Hola Marlon
Reglas técnicas:

Usar isset().

*/

$nombre = $_GET['nombre'];
echo $nombre;

?>

<h2>Ejercicio 1</h2>
<form action="" method="get">

    <input type="text" name="nombre" placeholder="nombre">
    <button type="submit">Enviar</button>

</form>

<hr>

<?php
/*
Ejercicio 2 — POST Básico
Objetivo:

Procesar formulario POST con campo nombre.

Instrucciones:

Si fue enviado, mostrar:

Nombre recibido: [valor]
Entrada:

Nombre = Carlos

Salida esperada:
Nombre recibido: Carlos
Reglas:

Usar $_SERVER["REQUEST_METHOD"].

*/

$errores2 =[];
$nombre2 = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $nombre2 = trim($_POST['nombre2']);

    if(empty($nombre2)){
        $errores2[] = "El nombre es obligatorio";
    }

    if(empty($errores2)){
        echo "Nombre recibido: " . $nombre2;
    }

}

if(!empty($errores2)){
    foreach($errores2 as $error){
        echo $error . "<br>";
    }
}

?>

<h2>Ejercicio 2</h2>
<form action="" method="post">
    <input type="text" name="nombre2" placeholder="nombre">
    <button type="submit">Enviar</button>
</form>
<hr>
<?php

/*

Ejercicio 3 — Campo Obligatorio
Objetivo:

Validar nombre obligatorio.

Entrada:

Vacío

Salida esperada:
El nombre es obligatorio.
Regla:

Usar trim().

*/

$errores3 = [];
$nombre3 = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nombre3 = trim($_POST['nombre3']);

    if(empty($nombre3)){
        $errores3[] = "El nombre es obligatorio";
    }

    if(empty($errores3)){
        echo "Nombre: " . $nombre3 . "<br>";
    }

}

if(!empty($errores3)){
    foreach($errores3 as $error){
        echo $error . "<br>";
    }
}


?>

<h2>Ejercicio 3</h2>
<form action="" method="post">
    <input type="text" name="nombre3" placeholder="nombre">
    <button type="submit">Enviar</button>
</form>
<hr>

<?php

/*
Ejercicio 4 — Dos Campos Obligatorios
Campos:
nombre
correo
Si ambos vacíos:
El nombre es obligatorio.
El correo es obligatorio.
Regla:

Guardar errores en array.
*/

$errores4 = [];
$nombre4 = "";
$email4 = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nombre4 = trim($_POST['nombre4']);
    $email4 = trim($_POST['email4']);

    if(empty($nombre4)){
        $errores4[] = "EL nombre es obligatorio";
    }
    
    if(empty($email4)){
        $errores4[] = "El email es obligatorio";
    }

    if(empty($errores4)){
        echo "Nombre: " . $nombre4 . "<br>";
        echo "Correo Electrónico: " . $email4 . "<br>";
    }
}

if(!empty($errores4)){
    foreach($errores4 as $error){
        echo $error . "<br>";
    }
}


?>
<h2>Ejercicio 4</h2>
<form action="" method="post">
    <input type="text" name="nombre4" placeholder="nombre">
    <input type="email" name="email4" placeholder="correo">
    <button type="submit">Enviar</button>
</form>
<hr>
<?php
/*
Ejercicio 5 — Sanitización
Entrada:
<b>Marlon</b>
Debes mostrar salida segura como texto.
Regla:

Usar htmlspecialchars().
*/

$errores5 = [];
$nombre5 = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nombre5 = trim($_POST['nombre5']);

    if(empty($nombre5)){
        $errores5[] = "El nombre es obligatorio";
    }

    if(empty($errores5)){
        echo "Nombre: " . htmlspecialchars($nombre5) . "<br>";
    }

}

if(!empty($errores5)){
    foreach($errores5 as $error){
        echo $error . "<br>";
    }
}

?>

<h2>Ejercicio 5</h2>
<form action="" method="post">
    <input type="text" name="nombre5" placeholder="nombre">
    <button type="submit">Enviar</button>
</form>
<hr>
<?php

/*
Ejercicio 6 — Select
Campo ciudad con opciones:
Bogotá
Medellín
Villavicencio
Entrada:

Villavicencio

Salida:
Ciudad seleccionada: Villavicencio

*/

$ciudad = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $ciudad = $_POST['ciudad'];

    if(!empty($ciudad)){
        echo "Ciudad: " . $ciudad . "<br>";
    }

    
}


?>

<h2>Ejercicio 6</h2>
<form action="" method="post">
    <select name="ciudad">
        <option value="">Selecciona</option>
        <option value="bogota">Bogotá</option>
        <option value="medellin">Medellín</option>
        <option value="villavicencio">Villavicencio</option>
    </select>
    <button type="submit">Enviar</button>
</form>
<hr>


<?php

/*
Ejercicio 7 — Radio Button
Campo género:
Masculino
Femenino
Entrada:

Masculino

Salida:
Genero: Masculino

*/

$errores7 = [];
$genero = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $genero = trim($_POST['genero']);

    if(empty($genero)){
        $errores7[] = "El genero es obligatorio";
    }

    if(empty($errores7)){
        echo "Genero: " . $genero . "<br>";
    }
}

if(!empty($errores7)){
    foreach($errores7 as $error){
        echo $error . "<br>";
    }
}


?>
<h2>Ejercicio 7</h2>
<form action="" method="post">
    <input type="radio" name="genero" value="femenino">Femenino <br>
    <input type="radio" name="genero" value="masculino">Masculino <br><br>
    <button type="submit">Seleccionar</button><br>
</form>
<hr>
<?php

/*
Ejercicio 8 — Checkbox Múltiple
Campo habilidades[]:
PHP
CSS
JavaScript
Entrada:

PHP y CSS

Salida EXACTA:
Habilidades:
PHP
CSS
*/

$errores8 = [];
$habilidades = [];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $habilidades = $_POST['habilidades'];

    if(empty($habilidades)){
        $errores8[] = "Selecciones habilidades";
    }


    if(empty($errores8)){
        foreach($habilidades as $habilidad){
            echo $habilidad . "<br>";
        }
    }
}

if(!empty($errores8)){
    foreach($errores8 as $error){
        echo $error;
    }
}

?>

<h2>Ejercicio 8 </h2>
<form action="" method="post">

    <input type="checkbox" name="habilidades[]" value="PHP">PHP <br>
    <input type="checkbox" name="habilidades[]" value="CSS">CSS <br>
    <input type="checkbox" name="habilidades[]" value="JAVASCRIPT">JAVASCRIPT <br><br>
    
    <button type="submit">Seleccionar</button>

</form>
<hr>

<?php

/*
Ejercicio 9 — Mantener Valor
Objetivo:

Si correo viene vacío, mostrar error y conservar nombre escrito.

Entrada:
Nombre: Marlon
Correo:
Salida:
El correo es obligatorio.

Y el input nombre debe quedar con valor Marlon.

*/

$nombre9 = "";
$correo9 = "";
$errores9 = [];

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nombre9 = trim($_POST['nombre']);
    $correo9 = trim($_POST['correo']);

    if(empty($nombre9)){
        $errores9[] = "El nombre es obligatorio";
    }

    if(empty($correo9)){
        $errores9[] = "El correo es obligatorio";
    }

    if(empty($errores9)){
        echo "Nombre: " . $nombre9 . "<br>";
        echo "Correo Electrónico: " . $correo9 . "<br>";
    }

}

if(!empty($errores9)){
    foreach($errores9 as $error){
        echo $error . "<br>";
    }
}   

?>

<h2>Ejercicio 9</h2>
<form action="" method="post">
    <input type="text" name="nombre" placeholder="nombre"><br><br>
    <input type="email" name="correo" placeholder="correo"><br><br>
    <button type="submit">Enviar</button>
</form>
<hr>
<?php

/*
Ejercicio 10 — Formulario Profesional Completo
Campos:
nombre
correo
Reglas:
validar obligatorios
sanitizar salida
mostrar errores
si todo correcto mostrar:
Formulario enviado correctamente.

*/

$nombre10 = "";
$correo10 = "";
$errores10 = [];

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $nombre10 = trim($_POST['nombre10']);
    $correo10 = trim($_POST['correo10']);

    if(empty($nombre10)){
        $errores10[] = "El nombre es obligatorio";
    }

    if(empty($correo10)){
        $errores10[] = "El correo es obligatorio";
    }

    if(empty($errores10)){
        echo "Nombre: " . htmlspecialchars($nombre10) . "<br>";
        echo "Correo: " . htmlspecialchars($correo10) . "<br>";
    }

}

if(!empty($errores10)){
    foreach($errores10 as $error){
        echo $error . "<br>";
    }
}


?>

<h2>Ejercicio 10</h2>
<form action="" method="post">

    <input type="text" name="nombre10" placeholder="nombre">
    <input type="email" name="correo10" placeholder="correo">
    <button type="submit">Enviar</button>

</form>
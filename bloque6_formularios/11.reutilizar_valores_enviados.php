<?php

/*

TEMA 11 — Reutilizar Valores Enviados (Mantener Datos Tras Errores)

🎯 Objetivo del tema

Aprender a conservar lo que el usuario escribió cuando el formulario tiene errores.

Esto evita que la persona deba llenar todo nuevamente y mejora mucho la experiencia de uso.

🧠 Concepto Profesional

Mal sistema:

Usuario llena 10 campos
↓
Envía formulario
↓
Hay 1 error
↓
Todo se borra

Buen sistema:

Usuario llena 10 campos
↓
Hay 1 error
↓
Se mantienen los valores correctos
↓
Solo corrige el error

Eso es estándar profesional.

🔥 ¿Dónde se aplica?

Registro de usuarios
Formularios de contacto
Checkout ecommerce
Solicitudes laborales
Paneles administrativos
Cualquier formulario real

✅ Código Completo Funcional

<?php

*/

$errores = [];
$nombre = "";
$email = "";
$ciudad = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"] ?? "");
    $email  = trim($_POST["email"] ?? "");
    $ciudad = $_POST["ciudad"] ?? "";

    if ($nombre == "") {
        $errores[] = "El nombre es obligatorio.";
    }

    if ($email == "") {
        $errores[] = "El correo es obligatorio.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Reutilizar Valores</title>
</head>
<body>

<h2>Formulario</h2>

<?php foreach ($errores as $error): ?>
<p><?php echo $error; ?></p>
<?php endforeach; ?>

<form method="POST">

<input 
type="text" 
name="nombre" 
placeholder="Nombre"
value="<?php echo htmlspecialchars($nombre); ?>">

<br><br>

<input 
type="text" 
name="email" 
placeholder="Correo"
value="<?php echo htmlspecialchars($email); ?>">

<br><br>

<select name="ciudad">
    <option value="">Seleccione</option>
    <option value="Villavicencio" <?php if($ciudad=="Villavicencio") echo "selected"; ?>>
        Villavicencio
    </option>
    <option value="Bogotá" <?php if($ciudad=="Bogotá") echo "selected"; ?>>
        Bogotá
    </option>
</select>

<br><br>

<button type="submit">Enviar</button>

</form>

</body>
</html>

<?php
/*


🔍 Explicación Técnica
1️⃣ Mantener input text
value="<?php echo htmlspecialchars($nombre); ?>"

Si el usuario escribió:

Marlon

Después del error seguirá visible.

2️⃣ Mantener select
if($ciudad=="Bogotá") echo "selected";

Marca la opción elegida previamente.

3️⃣ Datos cargados desde POST
$nombre = $_POST["nombre"] ?? "";

Si no existe, queda vacío.

🧠 Flujo Profesional
Usuario llena formulario
↓
Envía
↓
PHP valida
↓
Hay error
↓
Formulario vuelve lleno con datos previos
⚠️ Regla Importante con Password

Normalmente no se repuebla contraseña por seguridad.

<input type="password">

Se deja vacío otra vez.

✅ Buenas Prácticas Profesionales
✔ Mantener campos largos

Muy importante si hay muchos inputs.

✔ Escapar valores siempre
htmlspecialchars()
✔ Reutilizar también radios y checkbox

Lo veremos aplicado igual.

✔ Mostrar errores junto al campo idealmente

UX superior.

❌ Errores Comunes
❌ Borrar todo tras error

Mala experiencia.

❌ No escapar valores en value

Riesgo XSS.

❌ Repoblar password automáticamente

No recomendado.

❌ Perder select seleccionado

Frustrante.

🧪 Resultado Esperado
Entrada:
Nombre: Marlon
Correo:
Ciudad: Bogotá
Salida:
El correo es obligatorio.

Y el formulario sigue con:

Nombre: Marlon
Ciudad: Bogotá
📌 Lo que aprendiste hoy

✔ Mantener datos tras errores
✔ Reutilizar inputs text
✔ Reutilizar select
✔ UX profesional
✔ Seguridad al imprimir valores

*/
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en HTML</title>
</head>
<body>
    <h1>Registro de usuario</h1>

    <form action="#" method="post">
        <fieldset>
            <legend>Datos personales</legend>

            <label for="nombre">Nombre completo:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre" required>

            <br><br>

            <label for="correo">Correo electronico:</label>
            <input type="email" id="correo" name="correo" placeholder="correo@ejemplo.com" required>

            <br><br>

            <label for="password">Contrasena:</label>
            <input type="password" id="password" name="password" required>

            <br><br>

            <label for="fecha">Fecha de nacimiento:</label>
            <input type="date" id="fecha" name="fecha">
        </fieldset>

        <br>

        <fieldset>
            <legend>Informacion adicional</legend>

            <label for="ciudad">Ciudad:</label>
            <select id="ciudad" name="ciudad">
                <option value="">Selecciona una ciudad</option>
                <option value="bogota">Bogota</option>
                <option value="medellin">Medellin</option>
                <option value="cali">Cali</option>
                <option value="barranquilla">Barranquilla</option>
            </select>

            <br><br>

            <p>Genero:</p>
            <input type="radio" id="masculino" name="genero" value="masculino">
            <label for="masculino">Masculino</label>

            <input type="radio" id="femenino" name="genero" value="femenino">
            <label for="femenino">Femenino</label>

            <input type="radio" id="otro" name="genero" value="otro">
            <label for="otro">Otro</label>

            <br><br>

            <input type="checkbox" id="terminos" name="terminos" required>
            <label for="terminos">Acepto los terminos y condiciones</label>

            <br><br>

            <label for="comentarios">Comentarios:</label>
            <br>
            <textarea id="comentarios" name="comentarios" rows="5" cols="40" placeholder="Escribe tus comentarios"></textarea>
        </fieldset>

        <br>

        <button type="submit">Enviar formulario</button>
        <button type="reset">Limpiar</button>
    </form>
</body>
</html>

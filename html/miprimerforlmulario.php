<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>mi primer formulario</h1>
    <form action="procesaFormulario.php">
        <div>
            Inroduce tu nombre<input type="text" name="nombre" id="nombre">
            </div>

        <div>
        Introduce tu apellido<input type="text" name="apellido" id="apellido">

        </div>
        <div>
        Introduce tu edad<input type="number" name="edad" id="edad" step="1">

        </div>

        <div><input type="submit"    value="Enviar"></div>
    </form>
</body>
</html>
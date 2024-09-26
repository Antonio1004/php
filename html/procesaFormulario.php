<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo"Bienvenido " . htmlspecialchars($_GET["nombre"]) . htmlspecialchars($_GET["apellido"]);
    
    $edad=$_GET["edad"];
    var_dump(value: $edad);
    if($edad>=18){
        echo "Es mayor de edad";
    }
    else{
    echo "Es menor de edad";
    } 
    
    ?>
</body>
</html>
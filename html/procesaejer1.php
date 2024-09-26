<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            // Aquí se procesan los datos del formulario
            }
        if(!empty($_GET["text"] || !empty($_GET["edad"]))){
            print("Bienvenido " . htmlspecialchars($_GET["text"]) . htmlspecialchars($_GET["text1"]));
        }
    ?>
</body>
</html>
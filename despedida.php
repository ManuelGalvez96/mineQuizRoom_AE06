<!-- congratulations.php -->
<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Felicidades!</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="suelo"></div>
    <div class="hierba"></div>
    <div class="nube nube1"></div>
    <div class="nube nube2"></div>
    <div class="arbol arbol1"></div>
    <div class="arbol arbol2"></div>
    <div class="container minecraft-style">
        <h1>¡Felicidades!</h1>
        <p>Has completado el Escape Room de Minecraft.</p>
        <a href="index.php" class="btn">Volver al inicio</a>
    </div>
</body>
</html>
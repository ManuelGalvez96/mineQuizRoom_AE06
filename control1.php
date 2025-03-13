<!-- controlador1.php -->
<?php
session_start();
$_SESSION['reto1_superado'] = false;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 1: Cocinar una chuleta</title>
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
        <h1>Reto 1: Cocinar una chuleta</h1>
        <p>Para cocinar una chuleta, necesitas dos cosas clave. ¿Cuáles son?</p>
        <form method="post" action="reto1.php">
            <label>¿Dónde puedes cocinarla?</label>
            <input type="text" name="respuesta1" required>
            <label>¿Qué necesitas como combustible?</label>
            <input type="text" name="respuesta2" required>
            <button type="submit">Enviar</button>
        </form>
        <?php if (isset($_GET['error'])) echo "<p class='error'>{$_GET['error']}</p>"; ?>
    </div>
</body>
</html>
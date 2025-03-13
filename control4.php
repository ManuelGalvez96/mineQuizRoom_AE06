<!-- controlador4.php -->
<?php
session_start();
if (!isset($_SESSION['reto3_superado']) || $_SESSION['reto3_superado'] !== true) {
    header("Location: control3.php?error=Debes completar el reto anterior antes de continuar.");
    exit();
}
$_SESSION['reto4_superado'] = false;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 4: Historia</title>
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
        <h1>Reto 4: ¿Cual fue el primer servidor de toda la hostoria de Minecraft? y ¿Quien fue su creador?</h1>
        <form method="post" action="reto4.php">
            <label>¿Qué nombre tiene el servidor?</label>
            <input type="text" name="respuesta1" required>
            <label>¿Quién lo creó?</label>
            <input type="text" name="respuesta2" required>
            <button type="submit">Enviar</button>
        </form>
        <?php if (isset($_GET['error'])) echo "<p class='error'>{$_GET['error']}</p>"; ?>
    </div>
</body>
</html>
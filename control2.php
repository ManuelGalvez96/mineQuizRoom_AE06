<!-- controlador2.php -->
<?php
session_start();
if (!isset($_SESSION['reto1_superado']) || $_SESSION['reto1_superado'] !== true) {
    header("Location: control1.php?error=Debes completar el reto anterior antes de continuar.");
    exit();
}
$_SESSION['reto2_superado'] = false;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 2: Crafteo de un Cubo</title>
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
        <h1>Reto 2: Arreglar una herramienta</h1>
        <p>Para craftear un cubo de hierro, ¿Qué material necesitas, y que forma hay que darle en la mesa de  trabajo?</p>
        <form method="post" action="reto2.php">
            <label>¿Qué material necesitas?</label>
            <input type="text" name="respuesta1" required>
            <label>¿Qué forma hay que darle?</label>
            <input type="text" name="respuesta2" required>
            <button type="submit">Enviar</button>
        </form>
        <?php if (isset($_GET['error'])) echo "<p class='error'>{$_GET['error']}</p>"; ?>
    </div>
</body>
</html>
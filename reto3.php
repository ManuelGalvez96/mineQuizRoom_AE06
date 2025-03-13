<!-- reto3.php -->
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respuesta1 = ($_POST['respuesta1']);
    $respuesta2 = ($_POST['respuesta2']);
    
    if ($respuesta1 == "polvo de blaze" && $respuesta2 == "perla de ender") {
        $_SESSION['reto3_superado'] = true;
        header("Location: control4.php");
        exit();
    } else {
        header("Location: control3.php?error=Pista: El primer material se consigue en el infierno y el segundo se consigue matando un monstruo.");
        exit();
    }
}
?>
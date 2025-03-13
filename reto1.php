<!-- reto1.php -->
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respuesta1 = ($_POST['respuesta1']);
    $respuesta2 = ($_POST['respuesta2']);
    
    if ($respuesta1 == "horno" && $respuesta2 == "carbón") {
        $_SESSION['reto1_superado'] = true;
        header("Location: control2.php");
        exit();
    } else {
        header("Location: control1.php?error=Pista: Necesitas un bloque de color gris, donde se cocinan cosas y una fuente de calor.");
        exit();
    }
}
?>
<!-- reto2.php -->
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respuesta1 = ($_POST['respuesta1']);
    $respuesta2 = ($_POST['respuesta2']);
    
    if ($respuesta1 == "hierro" && $respuesta2 == "forma de v") {
        $_SESSION['reto2_superado'] = true;
        header("Location: control3.php");
        exit();
    } else {
        header("Location: control2.php?error=Pista: Necesitas un material duro y para la forma piensa en la 13ª letra del abecedario.");
        exit();
    }
}
?>
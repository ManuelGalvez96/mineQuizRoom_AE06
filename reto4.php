<!-- reto4.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respuesta1 = ($_POST['respuesta1']);
    $respuesta2 = ($_POST['respuesta2']);
    
    if ($respuesta1 == "2b2t" && $respuesta2 == "housemaster") {
        header("Location: despedida.php");
        exit();
    } else {
        header("Location: control4.php?error=Pista: Es un servidor donde reina el caos y se lanzó en 2010.");
        exit();
    }
}
?>
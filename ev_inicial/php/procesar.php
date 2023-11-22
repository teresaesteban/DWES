<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $nombre = $_GET["nombre"];
    $apellidos = $_GET["apellidos"];
    print "
    <p>Bienvenido, $nombre $apellidos.</p>
    ";
    $respuesta1 = $_GET["pregunta1"];
    // Respuestas correctas
    $respuesta_correcta1 = "respuesta1";
    // Evaluar las respuestas
    if ($respuesta1 === $respuesta_correcta1) {
        print"<p>Respuesta a pregunta 1 correcta .</p>";

    } else {
        print"<p>Respuesta a pregunta 1 incorrecta .</p>";
    }

    if(isset($_GET['pregunta2B'],$_GET['pregunta2D'])&&
    !isset($_GET['pregunta2A'])&& !isset($_GET['pregunta2C'])){
        print"<p>Respuesta a pregunta 2 correcta .</p>";

    }else{
        print"<p>Respuesta a pregunta 2 inscorrecta .</p>";
    }

?>
<p><a href="formulario.html"><br>Volver al cuestionario</br></a></p>
</body>
</html>
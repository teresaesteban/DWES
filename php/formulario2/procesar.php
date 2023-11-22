<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$cantidad = $_GET["cantidad"];
$divisa = $_GET["divisa"];
    print "
    <p>Quiere convetir, $cantidad euros a  $divisa.</p>
    ";
    if($divisa=="dolaresUSA"){
      $cantidadfinal=$cantidad*1.0543;
    }
    else{
        $cantidadfinal=$cantidad*0.8678;
    }
    print"
    La cantidad final son $cantidadfinal $divisa"


?>
<p><a href="formulario.html"><br>Volver a realizar la conversión</br></a></p>
</body>
</html>
<!DOCTYPE html>
<!--⦁	⦁	Hacer una página web  que calcule la longitud de la circunferencia y el área del círculo a partir de su  radio.  -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evaluacion inicial</title>
</head>
<body>
  <?php

  $rd=$_GET["radio1"];
  $Pi=PI[];
  echo
  "La longitud del circulo es ",$rd*($Pi*$Pi);
echo
"El area del círculo es",$rd*2*$Pi;


?>
</body>
</html>

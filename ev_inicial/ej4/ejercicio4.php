<!DOCTYPE html>
<!--⦁	Hacer una página web que a partir de un valor contenido en una variable entera, cuyo valor debe estar entre 1 y 7, muestre el nombre del día de la semana correspondiente (lunes=1, martes=2  …)
 También otra versión que indique si el nº corresponde a un día laborable o a un festivo.
 -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evaluacion inicial</title>
</head>
<body>
  <?php

$diaSemana=rand(1,7);

          switch ($diaSemana) {
     case 1:
echo $dia="Lunes";
break;
     case 2:
echo $dia="Martes";
break;
      case 3:
echo $dia="Miércoles";
break;
      case 4:
echo $dia="Jueves";
break;
      case 5:
echo $dia="Viernes";
break;
      case 6:
echo $dia="Sábado";
break;
      case 7:
echo $dia="Domingo";
break;

}

switch ($diaSemana) {
  case 1:
  case 2:
   case 3:
   case 4:
   case 5:
echo $f1="Laboral";
break;
   case 6:
   case 7:
echo $f2="Festivo";
break;

}


?>
</body>
</html>

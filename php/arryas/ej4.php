<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   <?php
   // Paso 1: Generar un array de números enteros del 1 al 20
   $numbers = range(1, 20);

   // Paso 2: Filtrar los números pares
   $evenNumbers = array_filter($numbers, function ($number) {
       return $number % 2 === 0;
   });

   // Paso 3: Elevar al cuadrado cada número par
   $squaredNumbers = array_map(function ($number) {
       return $number ** 2;
   }, $evenNumbers);

   // Paso 4: Calcular la suma de los números al cuadrado
   $sumOfSquaredNumbers = array_reduce($squaredNumbers, function ($carry, $number) {
       return $carry + $number;
   }, 0);

   // Paso 5: Ordenar el array original de mayor a menor
   arsort($numbers);

   // Mostrar los resultados en la página web
   echo "Números pares originales: " . implode(", ", $evenNumbers) . "<br>";
   echo "Números al cuadrado: " . implode(", ", $squaredNumbers) . "<br>";
   echo "Suma de los cuadrados: " . $sumOfSquaredNumbers . "<br>";
   echo "Lista de números ordenada descendentemente: " . implode(", ", $numbers) . "<br>";
   ?>

?>
</body>
</html>

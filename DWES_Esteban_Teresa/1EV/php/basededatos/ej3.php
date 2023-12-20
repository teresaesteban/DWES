<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$conexion=mysqli_connect("localhost", "root","","jardineria") or die ("No se puede conectar con el servidor");



$instruccion = 'SELECT gamasproductos.Gama, gamasproductos.DescripcionTexto,COUNT(productos.CodigoProducto) FROM gamasproductos INNER JOIN productos ON gamasproductos.Gama=productos.Gama GROUP BY gamasproductos.Gama';
$resulconsulta = mysqli_query ($conexion,$instruccion) or die ("Fallo en la consulta");



$nfilas = mysqli_num_rows ($resulconsulta);
if ($nfilas > 0)   {
    print ("<TABLE border='1'>");
print ("<TR>");
print ("<TH>Codigo Producto</TH>");  print ("<TH>Producto</TH>");
print ("<TH>Cantidad en Stock</TH>");
print ("</TR>");

for ($i=0; $i<$nfilas; $i++)  {
    $resultado = $resultado = mysqli_fetch_row($resulconsulta);
    print ("<TR>");
    foreach  ($resultado as $valor)  {print ("<TD>" . $valor. "</TD>");  }
    print ("</TR>");
}
// Mostrar resultados de la consulta
print ("</TABLE>\n");
}
else{
   print ("No hay articulos disponibles");

}
    ?>
</body>
</html>
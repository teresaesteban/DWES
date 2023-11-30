<!DOCTYPE HTML>
<html lang="es">
<head>
   <meta charset="utf-8" />
   <title>ej3</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="stylesheet" type="text/css" href="estilosimple.css">
</head>

<body>
    <header>
        <h1>CONSULTA DE PRODUCTOS</h1>
    </header>
    <section>
        <nav></nav>
        <main>
<?php
   // Conectar con el servidor de base de datos
   $conexion = mysqli_connect ("localhost", "root", "")
      or die ("No se puede conectar con el servidor");

   // Seleccionar base de datos
   mysqli_select_db ($conexion,"jardineria")
      or die ("No se puede seleccionar la base de datos");

   if (isset($_REQUEST['provedor']))
   {
      $provedor=$_REQUEST['provedor'];
      // Enviar consulta
      $instruccion = "SELECT CodigoProducto, Nombre, CantidadEnStock FROM  productos WHERE provedor='$provedor' ORDER BY Nombre";
      $resconsulta = mysqli_query ($conexion,$instruccion)
         or die ("Fallo en la consulta");

      // Mostrar resultados de la consulta
      $fecha=date("d-m-Y");
	   echo "<h1>Productos de la provedor $provedor - Fecha: $fecha </h1><br>";
	   $numreg=mysqli_num_rows ($resconsulta);
	   if ($numreg==0)
	   {	echo "<h1>Actualmente no existe ningún producto dado de alta en esta provedor</h1>"; }
	   else
      {  print ("<table>");
         print ("<tr>");
         print ("<th>Código producto</th>");
         print ("<th>Nombre</th>");
         print ("<th>CantidadEnStock</th>");
         print ("</tr>");

         while ($resultado = mysqli_fetch_row ($resconsulta))  //Otra forma de recorrer todos los registros hasta que mysqli_fetch_row devuelva 'false'
         {
		   	print ("<tr>");
            for ($i=0;$i<=2;$i++)   //Sabiendo que hay 3 campos por registro se pueden imprimir las 3 celdas de cada fila con un bucle
			   {   print ("<td>" .$resultado[$i]. "</td>");}
            print ("</tr>");
         }

         print ("</table>");
      }
      echo "<br><p><a href='ej3.php'>Realizar nueva consulta</a></p>";
   }
   else
   {
      echo "<h1>Consulta de productos por provedor</h1><br>";

	   $instruccion = "SELECT Proveedor FROM productos ORDER BY Nombre";
      $resconsulta = mysqli_query ($conexion,$instruccion)
         or die ("Fallo en la consulta");

	   echo "<form action='ej3.php' method='GET'>";
	   echo "<p>Selecione provedor &nbsp;";
	   echo "<select name='Proveedor'>";

	   $nfilas = mysqli_num_rows ($resconsulta);
      if ($nfilas > 0)
	   {
         for ($i=1; $i<=$nfilas; $i++)
         {
            $resultado = mysqli_fetch_row ($resconsulta);
		   	echo "<option value='$resultado[0]'>". $resultado[0]."</option>";
		   }
      }
	   echo "</select></p><br>";
	   echo "<p><input type='submit' name='enviar' value='Enviar consulta'></p>";
	   echo "</form>";
   }
   // Cerrar conexión
   mysqli_close ($conexion);
?>
      </main>
      <aside></aside>
   </section>
   <footer></footer>
</body>
</html>
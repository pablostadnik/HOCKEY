<html>
<head>
<title>FIXTURE</title>
</head>
<body>
<?php
$conn= mysql_connect("localhost", "root", "") or die("No fue posible conectar con el servidor");
mysql_select_db("hockey") or die("No fue posible selecionar la base de datos");
$tabla1 = mysql_query( "SELECT * FROM `fecha 1` WHERE id=1" );
$fila1 = mysql_fetch_array( $tabla1 );
$tabla2 = mysql_query( "SELECT * FROM `fecha 1` WHERE id=2" );
$fila2 = mysql_fetch_array( $tabla2 );
$tabla3 = mysql_query( "SELECT * FROM `fecha 1` WHERE id=3" );
$fila3 = mysql_fetch_array( $tabla3 );
$tabla12 = mysql_query( "SELECT * FROM `fecha 2` WHERE id=1" );
$fila12 = mysql_fetch_array( $tabla1 );
$tabla22 = mysql_query( "SELECT * FROM `fecha 2` WHERE id=2" );
$fila22 = mysql_fetch_array( $tabla2 );
$tabla32 = mysql_query( "SELECT * FROM `fecha 2` WHERE id=3" );
$fila32 = mysql_fetch_array( $tabla3 );
?>
<form id = "1" METHOD="POST" ACTION="actualizar.php">
Fecha<input type="text" name="fecha1"></br></br>
Hora<input type="text" name="hora1" value= '<?php echo $fila1["hora"]; ?>' >Local<input type="text" name="local1" value= '<?php echo $fila1["local"]; ?>'>Visitante<input type="text" name="visitante1" value= '<?php echo $fila1["visitante"]; ?>'></br></br> 
Hora<input type="text" name="hora2">Local<input type="text" name="local2">Visitante<input type="text" name="visitante2"></br></br> 
Hora<input type="text" name="hora3">Local<input type="text" name="local3">Visitante<input type="text" name="visitante3"></br></br> 
Fecha<input type="text" name="fecha2"></br></br>
Hora<input type="text" name="hora4">Local<input type="text" name="local4">Visitante<input type="text" name="visitante4"></br></br> 
Hora<input type="text" name="hora5">Local<input type="text" name="local5">Visitante<input type="text" name="visitante5"></br></br> 
Hora<input type="text" name="hora6">Local<input type="text" name="local6">Visitante<input type="text" name="visitante6"></br></br> 
<input type="submit" name="actualizar" value="Actualizar">
</form>
</body>
</html>
<html>
<head>
<title>ACTUALIZAR</title>
</head>
<body>
<?php
$conn= mysql_connect("localhost", "root", "") or die("No fue posible conectar con el servidor");
mysql_select_db("hockey") or die("No fue posible selecionar la base de datosss");
echo "conexion ok;";
 if (isset($_POST['actualizar']))
 {	
 	$fecha=$_POST['fecha1'];
    $hora=$_POST['hora1'];
    $local=$_POST['local1'];
    $visitante=$_POST['visitante1'];
    $query="UPDATE `fecha 1` SET `hora`='$hora',`local`='$local',`visitante`='$visitante',`fecha`='$fecha' WHERE id=1";
    mysql_query ($query) or die ('error no puede actualizar datos1'); 
    
	$fecha=$_POST['fecha1'];
    $hora=$_POST['hora2'];
    $local=$_POST['local2'];
    $visitante=$_POST['visitante2'];
    $query="UPDATE `fecha 1` SET `hora`='$hora',`local`='$local',`visitante`='$visitante',`fecha`='$fecha' WHERE id=2";
    mysql_query ($query) or die ('error no puede actualizar datos2'); 
    $fecha=$_POST['fecha1'];
    $hora=$_POST['hora3'];
    $local=$_POST['local3'];
    $visitante=$_POST['visitante3'];
    $query="UPDATE `fecha 1` SET `hora`='$hora',`local`='$local',`visitante`='$visitante',`fecha`='$fecha' WHERE id=3";
    mysql_query ($query) or die ('error no puede actualizar datos3'); 
    $fecha=$_POST['fecha2'];
    $hora=$_POST['hora1'];
    $local=$_POST['local1'];
    $visitante=$_POST['visitante1'];
    $query="UPDATE `fecha 2` SET `hora`='$hora',`local`='$local',`visitante`='$visitante',`fecha`='$fecha' WHERE id=1";
    mysql_query ($query) or die ('error no puede actualizar datos4'); 
    $fecha=$_POST['fecha2'];
    $hora=$_POST['hora2'];
    $local=$_POST['local2'];
    $visitante=$_POST['visitante2'];
    $query="UPDATE `fecha 2` SET `hora`='$hora',`local`='$local',`visitante`='$visitante',`fecha`='$fecha' WHERE id=2";
    mysql_query ($query) or die ('error no puede actualizar datos5'); 
    $fecha=$_POST['fecha2'];
    $hora=$_POST['hora3'];
    $local=$_POST['local3'];
    $visitante=$_POST['visitante3'];
    $query="UPDATE `fecha 2` SET `hora`='$hora',`local`='$local',`visitante`='$visitante',`fecha`='$fecha' WHERE id=3";
    mysql_query ($query) or die ('error no puede actualizar datos6'); 
    echo "<script type='text/javascript'>
				alert ('Los datos se han ingresado correctamente');
				window.location='ingresofixture.php';
				</script>";
}
 ?>
</body>
</html>
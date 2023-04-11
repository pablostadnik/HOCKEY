<?php
require_once("class/class.php");
$tra=new Trabajo();
		

?>
<html>
<head>
<title>Corralon Carlos Casares</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/funciones.js"></script>
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/estilos.css" rel="stylesheet" media="screen">
</head>
<body>
						<?php 

				echo $tra->menu1();
				
				

	$pro=$tra->get_equipos1();
	$pro2=$tra->get_puntos1();
	$j=sizeof($pro2)/2;
	
		?>
		<div class="container contenido">
			<h2>Ingresar puntos</h2>
			<form name="form" class="form-horizontal" method="POST" action="">
				<label style="width:80px;position:relative; left:75px;" name="" class="control-label">Equipo</label>
				<label style="width:80px;position:relative; left:75px;" name="" class="control-label">Pts</label>
				<label style="width:80px;position:relative; left:75px;" name="" class="control-label">J</label>
				<label style="width:80px;position:relative; left:75px;" name="" class="control-label">G</label>
				<label style="width:80px;position:relative; left:75px;" name="" class="control-label">E</label>
				<label style="width:80px;position:relative; left:75px;" name="" class="control-label">P</label>
				<label style="width:80px;position:relative; left:75px;" name="" class="control-label">GF</label>
				<label style="width:80px;position:relative; left:75px;" name="" class="control-label">GC</label>
				<label style="width:80px;position:relative; left:75px;" name="" class="control-label">Dif</label></br></br>
				<?php 
				//for ($k=1;$k<3;$k++) {
				for ($i=0;$i<sizeof($pro);$i++) { ?>
				<div class="control-group">
					<label name="label[]" class="control-label"><?php echo $pro[$i]["local"]; ?></label>
					<div class="controls">
						<input style="width:70px;" type="text" class="input-xlarge" size="20" maxlength="40" name="local[]" value="<?php echo $pro[$i]['puntos'];?>"/>
						<input style="width:70px;" type="text" class="input-xlarge" size="20" maxlength="40" name="j[]" value="<?php echo $pro[$i]['j'];?>"/>
						<input style="width:70px;" type="text" class="input-xlarge" size="20" maxlength="40" name="g[]" value="<?php echo $pro[$i]['g'];?>"/>
						<input style="width:70px;" type="text" class="input-xlarge" size="20" maxlength="40" name="e[]" value="<?php echo $pro[$i]['p'];?>"/>
						<input style="width:70px;" type="text" class="input-xlarge" size="20" maxlength="40" name="p[]" value="<?php echo $pro[$i]['e'];?>"/>
						<input style="width:70px;" type="text" class="input-xlarge" size="20" maxlength="40" name="gf[]" value="<?php echo $pro[$i]['gf'];?>"/>
						<input style="width:70px;" type="text" class="input-xlarge" size="20" maxlength="40" name="gc[]" value="<?php echo $pro[$i]['gc'];?>"/>
						<input style="width:70px;" type="text" class="input-xlarge" size="20" maxlength="40" name="dif[]" value="<?php echo $pro[$i]['dif'];?>"/>

					</div>
					<?php } //}?>
				<div class="control-group">
					<div class="controls">	
						<input type="hidden" name="" value="" />
						<input style="" type="submit" class="btn btn-large btn-primary" value="Cargar puntos" title="cargar puntos" name="boton" />
						
					</div>
				</div>
						</div>

			</form>
<?php 


if(isset($_POST["boton"]))
{
	
	$sql="DELETE FROM `equipos` WHERE 1";
	$res=mysql_query($sql, Conectar::con());
	//for ($k=1;$k<3;$k++) {
	for ($i=0;$i<sizeof($pro);$i++) {
	
	$valor=$pro[$i]['local'];
	$sql="INSERT INTO `equipos`(`equipo`,`id`) VALUES ('$valor',$i)";
	$res=mysql_query($sql, Conectar::con());
		

	}//}
	$tra->cargar_puntos($_POST['local'],$_POST['j'],$_POST['g'],$_POST['e'],$_POST['p'],$_POST['gf'],$_POST['gc'],$_POST['dif']);
}
?>
</body>
</html>

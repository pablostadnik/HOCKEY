<?php
require_once("class/class.php");

$tra=new Trabajo();
if ($_GET["cat"]=="cuarta")
{
$reg=$tra->get_partido1($_GET["id_partido"]);
}
if ($_GET["cat"]=="quinta")
{
$reg=$tra->get_partido2($_GET["id_partido"]);
}
if ($_GET["cat"]=="sexta")
{
$reg=$tra->get_partido3($_GET["id_partido"]);
}
if(isset($_POST["grabar"]) and $_POST["grabar"]=="si")
{	
	if ($_GET["cat"]=="cuarta")
	{
	$tra->edit_partido1($_POST["hora"], $_POST["local"], $_POST["visitante"],$_POST["fecha"],$_GET["id_partido"],$_POST["goll"],$_POST["golv"]);
	}
	if ($_GET["cat"]=="quinta")
	{
	$tra->edit_partido2($_POST["hora"], $_POST["local"], $_POST["visitante"],$_POST["fecha"],$_GET["id_partido"],$_POST["goll"],$_POST["golv"]);
	}
	if ($_GET["cat"]=="sexta")
	{
	$tra->edit_partido3($_POST["hora"], $_POST["local"], $_POST["visitante"],$_POST["fecha"],$_GET["id_partido"],$_POST["goll"],$_POST["golv"]);
	}
}
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
		

				
		?>
		<div class="container contenido">
			<h2>Editar partido</h2>
			<form name="form" class="form-horizontal" method="post">
				<div class="control-group">
					<label class="control-label">Hora</label>
					<div class="controls">
						<input type="text" class="input-xlarge" name="hora" value="<?php echo $reg[0]['hora']; ?>" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Local</label>
					<div class="controls">
						<input type="text" class="input-xlarge" name="local" value="<?php echo $reg[0]['local']; ?>" />
						<input style="width:50px;" type="text" value="<?php echo $reg[0]['goll']; ?>" class="input-xlarge" name="goll" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Visitante</label>
					<div class="controls">
						<input type="text" class="input-xlarge" name="visitante" value="<?php echo $reg[0]['visitante']; ?>" />
						<input style="width:50px;" type="text" value="<?php echo $reg[0]['golv']; ?>" class="input-xlarge" name="golv" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Fecha</label>
					<div class="controls">
						<input type="text" class="input-xlarge" name="fecha" value="<?php echo $reg[0]['fecha']; ?>" />
					</div>
				</div>
				
				<div class="control-group">
					<div class="controls">	
						<input type="hidden" name="grabar" value="si" />
						<input type="hidden" name="id_partido" value="<?php echo $reg[0]['id_partido']; ?>" />
						<input style="position:relative; left:45px;" type="button" class="btn btn-large btn-primary" value="Modificar partido" title="Modificar producto" onclick="validar_partido();" />
					</div>
				</div>
			</form>
		</div>


</body>
</html>

<?php
require_once("class/class.php");
$tra=new Trabajo();

if(isset($_POST["grabar"]) and $_POST["grabar"]=="si")
{
	
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
			<h2>Ingresar resultados</h2>
			<form name="form" class="form-horizontal" method="post">
				<div class="control-group">
					<div style="width:400px;"class="controls">
						<label style="width:50px;"class="control-label">Fecha</label>
						<label style="width:100px;"class="control-label">Local</label>
						<input style="width:50px; position: relative; left:20px;" type="text" class="input-xlarge" name="goll" />
					</div>
					<div style="width:400px;"class="controls">
						<label class="control-label">Visitante</label>
						<input style="width:50px;" type="text" class="input-xlarge" name="golv" />
					</div>
				</div>
				<div class="control-group">
					
					<div class="controls">
						<input type="text" class="input-xlarge" name="visitante" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Hora</label>
					<div class="controls">
						<input type="text" class="input-xlarge" name="hora" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Fecha</label>
					<div class="controls">
						<input type="text" class="input-xlarge" name="fecha" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Categoria</label>
				<div class="controls">
				<select style="width:270px;"name="categoria">
				<option value="Cuarta">Cuarta</option>
				<option value="Quinta">Quinta</option>
				<option value="Sexta">Sexta</option>
				</select></br></br>
				<div class="control-group">
					<div class="controls">	
						<input type="hidden" name="grabar" value="si" />
						<input style="position:relative;right:130px;" type="button" class="btn btn-large btn-primary" value="Ingresar resultados" title="Ingresar resultados" onclick="validar_partido();" />
					</div>
				</div>
				
			</form>
		</div>


</body>
</html>

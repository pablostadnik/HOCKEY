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
			


		?>
		<div class="container contenido">
			<h2>Eliminar partido</h2>
		</div>
</body>
</html>

<?php

	$pro=$tra->get_partidos2();
	?>
	<div class="container contenido">
	<table class="table table-bordered table-hover" cellspacing="0">
		
			<tr valign="top" align="center">
				<th>Hora</th>
				<th>Local</th>
				<th>G</th>
				<th>Visitante</th>
				<th>G</th>
				<th>Fecha</th>
			</tr>
			<?php 
			for ($i=0;$i<sizeof($pro);$i++){ ?>
				<tr valign="top" align="center">
					<td valign="top" align="left"><?php echo $pro[$i]["hora"]; ?></td>
					<td valign="top" align="left"><?php echo ' '.$pro[$i]["local"]; ?></td>
					<td valign="top" align="left"><?php echo ' '.$pro[$i]["goll"]; ?></td>
					<td valign="top" align="left"><?php echo $pro[$i]["visitante"]; ?></td>
					<td valign="top" align="left"><?php echo ' '.$pro[$i]["golv"]; ?></td>
					<td valign="top" align="left"><?php echo $pro[$i]["fecha"]; ?></td>
					<td valign="top" align="center" width="25">
						<a href="delete_partido.php?id_partido=<?php echo $pro[$i]["id_partido"];?>&cat=quinta"><img src="images/eliminar.png"></img></a>
					</td>
				</tr>
			<?php 
			} 
			?>
		
	</table>
	</div>

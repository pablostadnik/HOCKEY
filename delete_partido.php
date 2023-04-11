<?php
require_once("class/class.php");

$tra=new Trabajo();
$tra->delete_partido($_GET["id_partido"],$_GET["cat"]);
echo"
		<script>
			alert('El partido ha sido eliminado');
			window.location='home.php';
		</script>
";
?>
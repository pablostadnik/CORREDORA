<?php
require_once("class/class.php");

$tra=new Trabajo();
$tra->delete_informe($_GET["id_informe"]);
echo"
		<script>
			alert('El informe ha sido eliminado');
			window.location='borrarinforme.php';
		</script>
";


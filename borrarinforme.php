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
			<h2>Eliminar informe</h2>
		</div>
</body>
</html>

<?php

	$pro=$tra->get_informes();
	?>
	<div class="container contenido">
	<table class="table table-bordered table-hover" cellspacing="0">
		
			<tr valign="top" align="center">
				<th>Titulo</th>
				<th>Fecha</th>
				<th></th>
			</tr>
			<?php 
			for ($i=0;$i<sizeof($pro);$i++){ ?>
				<tr valign="top" align="center">
					<td valign="top" align="left"><?php echo $pro[$i]["titulo"]; ?></td>
					<td valign="top" align="left"><?php echo $pro[$i]["fecha"]; ?></td>
					<td valign="top" align="center" width="25">
						<a href="delete_informe.php?id_informe=<?php echo $pro[$i]["id_informe"];?>"><img src="images/eliminar.png"></img></a>
					</td>
				</tr>
			<?php
			} 
			?>
		
	</table>
	</div>


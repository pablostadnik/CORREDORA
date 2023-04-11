<?php
require_once("class/class.php");

$tra=new Trabajo();

if(isset($_POST["grabar"]) and $_POST["grabar"]=="si")
{
	$ruta = "images/" . $_FILES['rutaimg']['name'];
	if (!file_exists($ruta)){
				$resultado = @move_uploaded_file($_FILES["rutaimg"]["tmp_name"], $ruta);
				if ($resultado){
        		echo "el archivo ha sido movido exitosamente";
      			}else {
        		echo "ocurrio un error al mover el archivo.";
      			}
    }else {
      			echo $_FILES['rutaimg']['name'] . ", este archivo existe";
  				}
	$tra->add_informe($_POST["titulo"], $_POST["descripcion"], $_FILES['rutaimg']['name'],$_POST["fecha"]);
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
			<h2>Ingresar datos Nota</h2>
			<form name="form" class="form-horizontal" method="post" enctype="multipart/form-data" action="agregarinforme.php">

				<div class="control-group">
					<label class="control-label">Titulo</label>
					<div class="controls">
						<input type="text" class="input-xlarge" name="titulo" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Descripción</label>
					<div class="controls">
						<textarea style="resize: none;width:400px;" cols="5" rows="20" class="input-xlarge" name="descripcion"></textarea>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Imagen</label>
					<div class="controls">
						<input type="file" name="rutaimg" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Fecha</label>
					<div class="controls">
						<input type="text" class="input-xlarge" name="fecha" />
					</div>
				</div>

				<div class="control-group">
					<div class="controls">	
						<input type="hidden" name="grabar" value="si" />
						<input type="button" class="btn btn-large btn-primary" value="Ingresar informe" title="Ingresar informe" onclick="validar_informe();" />
					</div>
				</div>
			</form>
		</div>


</body>
</html>
<?php


?>
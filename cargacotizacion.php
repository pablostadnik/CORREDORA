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
				
				


	$pro1=$tra->get_valores();
	$pro2=$tra->get_valores2();

		?>
		<div class="container contenido">
			<form name="form" class="form-horizontal" method="POST" action="">
			<h2>Ingresar valores cotizacion de cambio</h2>
			<table class="table table-hover" style="background-color: white; width: 600px; position: relative; left: 200px;">
      <thead>
        <tr>
          <th></th>
          <th></th>
          <th><input style="width:90px;" type="text" class="input-xlarge" size="40" maxlength="40" name="valor1" value="<?php echo $pro1[0]['fecha'];?>"/>
          </th>
       
        </tr>
      </thead>
      <tbody>
        <tr>
          <td rowspan="2">Libre</td>
          <td>Compra</td>
          <td><input style="width:90px;" type="text" class="input-xlarge" size="20" maxlength="40" name="valor2" value="<?php echo $pro1[1]['valor'];?>"/>
          </td>
      
        </tr>
        <tr>
          
          <td>Venta</td>
          <td><input style="width:90px;" type="text" class="input-xlarge" size="20" maxlength="40" name="valor3" value="<?php echo $pro1[2]['valor'];?>"/>
          </td>
          
        </tr>
        <tr>
          <td rowspan="2">Nación</td>
          <td >Compra</td>
         <td ><input style="width:90px;" type="text" class="input-xlarge" size="20" maxlength="40" name="valor4" value="<?php echo $pro1[3]['valor'];?>"/>
          </td>
        <tr>
          
          <td >Venta</td>
          <td ><input style="width:90px;" type="text" class="input-xlarge" size="20" maxlength="40" name="valor5" value="<?php echo $pro1[4]['valor'];?>"/>
          </td>
        </tr>
        <tr>
          <td>Itau</td>
          <td ></td>
          <td ><input style="width:90px;" type="text" class="input-xlarge" size="20" maxlength="40" name="valor6" value="<?php echo $pro1[5]['valor'];?>"/>
          </td>
        </tr>
      </tbody>
    </table>
			<h2>Ingresar dolar futuro rofex</h2>
				
				<label style="width:80px;position:relative; left:170px;" name="fecha" class="control-label">Posicion</label>
				<label style="width:80px;position:relative; left:170px;" name="" class="control-label">Cotizacion</label>
				<label style="width:80px;position:relative; left:170px;" name="" class="control-label">Variacion</label>
				</br></br>
				
				<?php 
				//for ($k=1;$k<3;$k++) {
				for ($i=0;$i<10;$i++) { ?>
				
				<div class="control-group">
					
					
					
					<div class="controls">
						<input style="width:70px;" type="text" class="input-xlarge" size="20" maxlength="40" name="posicion[]" value="<?php echo $pro2[$i]['posicion'];?>"/>
						<input style="width:70px;" type="text" class="input-xlarge" size="20" maxlength="40" name="cotizacion[]" value="<?php echo $pro2[$i]['cotizacion'];?>"/>
						<input style="width:70px;" type="text" class="input-xlarge" size="20" maxlength="40" name="variacion[]" value="<?php echo $pro2[$i]['variacion'];?>"/>
						
						

					</div>
					
					<?php } //}?>
					</br></br>
				<div class="control-group">
					<div class="controls">	
						<input type="hidden" name="" value="" />
						<input style="" type="submit" class="btn btn-large btn-primary" value="Cargar valores" title="cargar valores" name="boton" />
						
					</div>
				</div>
						</div>

			</form>
<?php 


if(isset($_POST["boton"]))
{
	
	
	$tra->actualizar_valores2($_POST['posicion'],$_POST['cotizacion'],$_POST['variacion'],$_POST['valor1'],$_POST['valor2'],$_POST['valor3'],$_POST['valor4'],$_POST['valor5'],$_POST['valor6']);
}
?>
</body>
</html>

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
				
				


	$pro=$tra->get_pizarra();
	
	
		?>
		<div class="container contenido">
			<h2>Ingresar valores cotizacion de cambio</h2>
			<table class="table table-hover" style="background-color: gray; width: 600px; position: relative; left: 200px;">
      <thead>
        <tr>
          <th></th>
          <th></th>
          <th><input style="width:70px;" type="text" class="input-xlarge" size="20" maxlength="40" name="rosario[]" value=""/>
          </th>
       
        </tr>
      </thead>
      <tbody>
        <tr>
          <td rowspan="2">Libre</td>
          <td>Compra</td>
          <td><input style="width:70px;" type="text" class="input-xlarge" size="20" maxlength="40" name="rosario[]" value=""/>
          </td>
      
        </tr>
        <tr>
          
          <td>Venta</td>
          <td><input style="width:70px;" type="text" class="input-xlarge" size="20" maxlength="40" name="rosario[]" value=""/>
          </td>
          
        </tr>
        <tr>
          <td rowspan="2">Nación</td>
          <td >Compra</td>
         <td ><input style="width:70px;" type="text" class="input-xlarge" size="20" maxlength="40" name="rosario[]" value=""/>
          </td>
        <tr>
          
          <td >Venta</td>
          <td ><input style="width:70px;" type="text" class="input-xlarge" size="20" maxlength="40" name="rosario[]" value=""/>
          </td>
        </tr>
        <tr>
          <td>Itau</td>
          <td ></td>
          <td ><input style="width:70px;" type="text" class="input-xlarge" size="20" maxlength="40" name="rosario[]" value=""/>
          </td>
        </tr>
      </tbody>
    </table>
			<h2>Ingresar valores pizarra</h2>
			<form name="form" class="form-horizontal" method="POST" action="">
				<label style="width:80px;position:relative; left:75px;" name="fecha" class="control-label">Fecha</label>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input style="width:100px;" type="text" class="input-xlarge" size="" maxlength="" name="fecha" value="<?php echo $pro[0]['fecha'];?>"/></br></br>
				<label style="width:80px;position:relative; left:75px;" name="" class="control-label">Especie</label>
				<label style="width:80px;position:relative; left:75px;" name="" class="control-label">Rosario</label>
				<label style="width:80px;position:relative; left:75px;" name="" class="control-label">Darsena</label>
				<label style="width:80px;position:relative; left:75px;" name="" class="control-label">Necochea</label>
				<label style="width:80px;position:relative; left:75px;" name="" class="control-label">Bahia Blanca</label></br></br></br>
				
				<?php 
				//for ($k=1;$k<3;$k++) {
				for ($i=0;$i<6;$i++) { ?>
				
				<div class="control-group">
					<?php if ($i==0)  {   ?>
					<label name="trigo" class="control-label">Trigo</label>
					<?php }
					if ($i==1)  {   ?>
					<label name="trigo1.2" class="control-label">Trigo Art. 1.2</label>
					<?php }
					if ($i==2)  {   ?>
					<label name="maiz" class="control-label">Maíz</label>
					<?php }
					if ($i==3)  {   ?>
					<label name="sorgo" class="control-label">Sorgo</label>
					<?php }
					if ($i==4)  {   ?>
					<label name="girasol" class="control-label">Girasol</label>
					<?php }
					if ($i==5)  {   ?>
					<label name="soja" class="control-label">Soja</label>
					<?php }    ?>
					
					
					<div class="controls">
						<input style="width:70px;" type="text" class="input-xlarge" size="20" maxlength="40" name="rosario[]" value="<?php echo $pro[$i]['rosario'];?>"/>
						<input style="width:70px;" type="text" class="input-xlarge" size="20" maxlength="40" name="darsena[]" value="<?php echo $pro[$i]['darsena'];?>"/>
						<input style="width:70px;" type="text" class="input-xlarge" size="20" maxlength="40" name="necochea[]" value="<?php echo $pro[$i]['necochea'];?>"/>
						<input style="width:70px;" type="text" class="input-xlarge" size="20" maxlength="40" name="bahia_blanca[]" value="<?php echo $pro[$i]['bahia_blanca'];?>"/>
						

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
	
	
	$tra->actualizar_valores($_POST['rosario'],$_POST['darsena'],$_POST['necochea'],$_POST['bahia_blanca'],$_POST['fecha']);
}
?>
</body>
</html>

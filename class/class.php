<?php
session_start();
class Conectar
{
	public static function con()
	{
		$con=mysql_connect("localhost","root","");
		mysql_query("SET NAMES 'utf8'");
		mysql_select_db("corredora");
		return $con;
	}
}
	
class Trabajo
{
	private $usuario=array();
	private $usuario2=array();
	private $empleado=array();
	private $empleados=array();
	private $cliente=array();
	private $proveedor=array();
	private $licencia=array();
	private $horas_extra=array();
	private $ausentismos=array();
	private $producto=array();
	private $producto2=array();
	

	



	





	



	

		

	
	
	

		public function get_pedido_producto($id_pedido)
	{
		$sql="SELECT pe.id_pedido , pp.id_producto, pp.cantidad , pr.descripcion, pr.precio FROM pedido pe INNER JOIN pedido_producto pp ON pe.id_pedido = pp.id_pedido INNER JOIN producto pr ON pp.id_producto = pr.id_producto WHERE pe.id_pedido = $id_pedido";
		$res=mysql_query($sql,Conectar::con());
		while ($reg=mysql_fetch_assoc($res))
		{
			$this->pedido2[]=$reg;
		}
		return $this->pedido2;
	}

	

		public function add_informe($titulo, $descripcion, $rutaimg,$fecha)
	{
		$sql="INSERT INTO `informes`(`titulo`, `descripcion`, `rutaimg`, `fecha`) VALUES ('$titulo','$descripcion','$rutaimg','$fecha')";
		$res=mysql_query($sql, Conectar::con());
		echo "<script type='text/javascript'>
			alert('El informe fue ingresado correctamente ');
			window.location='agregarinforme.php';
		</script>";
	}

	

	public function get_informes()
	{
		$query = "SELECT `id_informe`, `titulo`, `descripcion`, `rutaimg` , `fecha` FROM `informes` WHERE 1";
		$result = mysql_query($query, Conectar::con()); 
		while($row = mysql_fetch_assoc($result))
		{
			$this->producto[]=$row;
		}
		return $this->producto;
    }
    public function get_pizarra()
	{
		$query = "SELECT * FROM `pizarra` WHERE 1";
		$result = mysql_query($query, Conectar::con()); 
		while($row = mysql_fetch_assoc($result))
		{
			$this->producto[]=$row;
		}
		return $this->producto;
    }
    public function get_valores()
	{
		$query = "SELECT * FROM `dolar_actual` WHERE 1";
		$result = mysql_query($query, Conectar::con()); 
		while($row = mysql_fetch_assoc($result))
		{
			$this->producto[]=$row;
		}
		return $this->producto;
    }
    public function get_valores2()
	{
		$query = "SELECT * FROM `dolar_futuro` WHERE 1";
		$result = mysql_query($query, Conectar::con()); 
		while($row = mysql_fetch_assoc($result))
		{
			$this->producto2[]=$row;
		}
		return $this->producto2;
    }
    public function get_algunas()
	{
		$query = "SELECT * FROM `informes` WHERE 1 ORDER BY id_informe DESC LIMIT 6 ";
		$result = mysql_query($query, Conectar::con()); 
		while($row = mysql_fetch_assoc($result))
		{
			$this->producto[]=$row;
		}
		return $this->producto;
    }
   
	public function get_partido1($id_partido)
	{	
		
			$sql="SELECT `hora` , `local` , `visitante` , `fecha` , `id_partido`, `goll`, `golv` FROM `cuarta categoria` WHERE id_partido =$id_partido";
		
		
		$res=mysql_query($sql, Conectar::con());
		if ($reg=mysql_fetch_assoc($res))
		{
			$this->producto[]=$reg;
		}
		return $this->producto;
	}
	public function get_partido2($id_partido)
	{	
		
			$sql="SELECT `hora` , `local` , `visitante` , `fecha` , `id_partido`, `goll`, `golv` FROM `quinta categoria` WHERE id_partido =$id_partido";
		
		
		$res=mysql_query($sql, Conectar::con());
		if ($reg=mysql_fetch_assoc($res))
		{
			$this->producto[]=$reg;
		}
		return $this->producto;
	}
	public function get_partido3($id_partido)
	{	
		
			$sql="SELECT `hora` , `local` , `visitante` , `fecha` , `id_partido`, `goll`, `golv` FROM `sexta categoria` WHERE id_partido =$id_partido";
		
		
		$res=mysql_query($sql, Conectar::con());
		if ($reg=mysql_fetch_assoc($res))
		{
			$this->producto[]=$reg;
		}
		return $this->producto;
	}
		public function get_equipos1()
	{
		//$query = "SELECT `local` FROM `cuarta categoria` GROUP BY local UNION SELECT `visitante` FROM `cuarta categoria` GROUP BY visitante ORDER BY local ASC ";
		$query = "SELECT * FROM vista_equipos LEFT JOIN equipos ON vista_equipos.local = equipos.equipo ORDER BY puntos DESC";
		$result = mysql_query($query, Conectar::con()); 
		while($row = mysql_fetch_assoc($result))
		{
			$this->producto[]=$row;
		}
		return $this->producto;
    }
    public function get_equipos2()
	{
		$query = "SELECT * FROM vista_equipos2 LEFT JOIN equipos2 ON vista_equipos2.local = equipos2.equipo ORDER BY puntos DESC";
		
		$result = mysql_query($query, Conectar::con()); 
		while($row = mysql_fetch_assoc($result))
		{
			$this->producto[]=$row;
		}
		return $this->producto;
    }
    public function get_equipos3()
	{
		$query = "SELECT * FROM vista_equipos3 LEFT JOIN equipos3 ON vista_equipos3.local = equipos3.equipo ORDER BY puntos DESC";
		
		$result = mysql_query($query, Conectar::con()); 
		while($row = mysql_fetch_assoc($result))
		{
			$this->producto[]=$row;
		}
		return $this->producto;
    }
    public function get_puntos1()
    {		
    	$query = "SELECT * FROM `equipos` WHERE 1";
    	$result = mysql_query($query, Conectar::con()); 
		while($row = mysql_fetch_assoc($result))
		{
			$this->producto[]=$row;
		}
		return $this->producto;

    }
    public function get_puntos2()
    {		
    	$query = "SELECT * FROM `equipos2` WHERE 1";
    	$result = mysql_query($query, Conectar::con()); 
		while($row = mysql_fetch_assoc($result))
		{
			$this->producto[]=$row;
		}
		return $this->producto;

    }
    public function get_puntos3()
    {		
    	$query = "SELECT * FROM `equipos3` WHERE 1";
    	$result = mysql_query($query, Conectar::con()); 
		while($row = mysql_fetch_assoc($result))
		{
			$this->producto[]=$row;
		}
		return $this->producto;

    }

	public function edit_partido1($hora, $local, $visitante,$fecha,$id_partido,$goll,$golv)
	{
		
			$sql="UPDATE `cuarta categoria` SET `hora`='$hora',`local`='$local',`visitante`='$visitante',`fecha`='$fecha',`goll`='$goll',`golv`='$golv' WHERE id_partido=$id_partido";
	
		
		$res=mysql_query($sql, Conectar::con());
		echo "<script type='text/javascript'>
			alert('El partido fue modificado correctamente');
			window.location='editar_partido2.php';
		</script>";
	}

	public function edit_partido2($hora, $local, $visitante,$fecha,$id_partido,$goll,$golv)
	{
		
			$sql="UPDATE `quinta categoria` SET `hora`='$hora',`local`='$local',`visitante`='$visitante',`fecha`='$fecha',`goll`='$goll',`golv`='$golv' WHERE id_partido=$id_partido";
	
		
		$res=mysql_query($sql, Conectar::con());
		echo "<script type='text/javascript'>
			alert('El partido fue modificado correctamente');
			window.location='editar_partido2.php';
		</script>";
	}
	public function edit_partido3($hora, $local, $visitante,$fecha,$id_partido,$goll,$golv)
	{
		
			$sql="UPDATE `sexta categoria` SET `hora`='$hora',`local`='$local',`visitante`='$visitante',`fecha`='$fecha',`goll`='$goll',`golv`='$golv' WHERE id_partido=$id_partido";
	
		
		$res=mysql_query($sql, Conectar::con());
		echo "<script type='text/javascript'>
			alert('El partido fue modificado correctamente');
			window.location='editar_partido2.php';
		</script>";
	}
	public function actualizar_valores($rosario,$darsena,$necochea,$bahia_blanca,$fecha)
	{
				
				$sql2="UPDATE `pizarra` SET `fecha`='$fecha'  WHERE id=1";
				for ($i=0;$i<6;$i++) {
				$sql="UPDATE `pizarra` SET `rosario`='$rosario[$i]'' , `darsena`='$darsena[$i]', `necochea`='$necochea[$i]', `bahia_blanca`='$bahia_blanca[$i]' WHERE id=($i+1)";
				$res=mysql_query($sql, Conectar::con());
				
			}
			$res2=mysql_query($sql2, Conectar::con());

			echo "<script type='text/javascript'>
			alert('los valores fueron cargados corectamente');
			window.location='cargapizarra.php';
			</script>";
	}
	public function actualizar_valores2($posicion,$cotizacion,$variacion,$valor1,$valor2,$valor3,$valor4,$valor5,$valor6)
	{
				
				$sql2="UPDATE `dolar_actual` SET `fecha`='$valor1'  WHERE id=1";
				$sql3="UPDATE `dolar_actual` SET `valor`='$valor2'  WHERE id=2";
				$sql4="UPDATE `dolar_actual` SET `valor`='$valor3'  WHERE id=3";
				$sql5="UPDATE `dolar_actual` SET `valor`='$valor4'  WHERE id=4";
				$sql6="UPDATE `dolar_actual` SET `valor`='$valor5'  WHERE id=5";
				$sql7="UPDATE `dolar_actual` SET `valor`='$valor6'  WHERE id=6";

				
				for ($i=0;$i<15;$i++) {
				$sql="UPDATE `dolar_futuro` SET `posicion`=$posicion[$i] , `cotizacion`=$cotizacion[$i], `variacion`=$variacion[$i] WHERE id=($i+1)";
				$res=mysql_query($sql, Conectar::con());
			}
			
			$res2=mysql_query($sql2, Conectar::con());
			$res3=mysql_query($sql3, Conectar::con());
			$res4=mysql_query($sql4, Conectar::con());
			$res5=mysql_query($sql5, Conectar::con());
			$res6=mysql_query($sql6, Conectar::con());
			$res7=mysql_query($sql7, Conectar::con());
			echo "<script type='text/javascript'>
			alert('los valores fueron cargados corectamente');
			window.location='cargacotizacion.php';
			</script>";
	}
	public function cargar_puntos2($local,$j,$g,$e,$p,$gf,$gc,$dif)
	{
				
				for ($i=0;$i<sizeof($local);$i++) {
				$sql="UPDATE `equipos2` SET `puntos`=$local[$i] , `j`=$j[$i], `g`=$g[$i], `e`=$e[$i], `p`=$p[$i] ,`gf`=$gf[$i],`gc`=$gc[$i], `dif`=$dif[$i] WHERE id=$i.";
				$res=mysql_query($sql, Conectar::con());
			}
			
			echo "<script type='text/javascript'>
			alert('los puntos fueron cargados corectamente');
			window.location='quinta_puntos.php';
			</script>";
	}
	public function cargar_puntos3($local,$j,$g,$e,$p,$gf,$gc,$dif)
	{
				
				for ($i=0;$i<sizeof($local);$i++) {
				$sql="UPDATE `equipos3` SET `puntos`=$local[$i] , `j`=$j[$i], `g`=$g[$i], `e`=$e[$i], `p`=$p[$i] ,`gf`=$gf[$i],`gc`=$gc[$i], `dif`=$dif[$i] WHERE id=$i.";
				$res=mysql_query($sql, Conectar::con());
			}
			
			echo "<script type='text/javascript'>
			alert('los puntos fueron cargados corectamente');
			window.location='sexta_puntos.php';
			</script>";
	}
	
		
		
	

	public function delete_informe($id_informe)
	{
		
		$sql="DELETE FROM `informes` WHERE id_informe=$id_informe";
	
		$res=mysql_query($sql, Conectar::con());
	}
	

	function fechaphp($fecha)
	{

		$dia=substr($fecha,8,2);
		$mes=substr($fecha,5,2);
		$año=substr($fecha,0,4);
		$this->fechaphp=$dia."-".$mes."-".$año;

		return $this->fechaphp;
	} 

	function fechabd($fecha)
	{

		$año=substr($fecha,6,4);
		$mes=substr($fecha,3,2);
		$dia=substr($fecha,0,2);
		$this->fechabd=$año."-".$mes."-".$dia;

		return $this->fechabd;
	} 

	function salir($id_usuario)
	{
		unset($id_usuario);
		session_destroy();
		header("Location: index.php");
	}

	public function menu1()
	{
		echo '
		<div class="navbar navbar-inverse navbar-fixed-top">
		      <div class="navbar-inner">
		        <div class="container">
		          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="brand" href="home.php">Inicio</a>
		          <div class="nav-collapse collapse">
		            <ul class="nav">
		              <li><a href="agregarinforme.php">Agregar informe</a></li>
		              
		             <li><a href="borrarinforme.php">Borrar informe</a></li>
		           
		            <li class="dropdown">
		                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cargar tablas<b class="caret"></b></a>
		                <ul class="dropdown-menu">
			                  <li><a href="cargapizarra.php">Pizarra</a></li>
			                  <li><a href="cargacotizacion.php">Cotizaciones de cambio</a></li>
			                  
		                </ul>
		              </li>

		              
		             
		              	 </ul>

		          </div>
		        </div>
		      </div>
		    </div>
		    ';
	}

	}
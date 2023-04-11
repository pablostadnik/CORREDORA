<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CastleBox</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>

</head>
<style>
th{
  text-align: center;
}
td {
  font-size: 1.4em;
}

</style>
<body>
<?php
require_once("class/class.php");
$tra=new Trabajo();
$pro=$tra->get_pizarra();
?>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
           <li class="active"><a href="index.php"><span>Inicio</span></a></li>
          <li><a href="pizarras.php"><span>Pizarras</span></a></li>
          <li><a href="nosotros.php"><span>Nosotros</span></a></li>
          <li><a href="utiles.php"><span>Utiles</span></a></li>
          <li><a href="contacto.php"><span>Contactenos</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
      <div class="logo">
        <h1 style="padding: 6px;"><a href="index.php">B&H<span></span></a></h1>
        <h2 style="text-align: center;margin:0px; padding:0px;"><a class="subtitulo" href="index.php">Ascesoramiento comercial<span></span></a></h2>     </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/soja.jpg" width="960" height="360" alt="" /> </a> <a href="#"><img src="images/maíz.jpg" width="960" height="360" alt="" /> </a> <a href="#"><img src="images/trigo.jpg" width="960" height="360" alt="" /> </a> </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div id="barra">
    Pizarra del día <?php  echo $pro[0]['fecha']; ?>
    </div>
      <table style="position: relative; top: 100px; width: 650px; height: 300px;border:black 1px solid;" class="table table-hover">
         <thead>
        <tr style="color:#2B3035; font-family:'Cabin',sans-serif;font-size:1.3em;background-color:gray;">
      <th >Especie</th>
      <th >Rosario</th>
      <th >Darsena</th>
      <th >Necochea</th>
      <th >Bahia blanca</th>
      </tr>
         </thead>
          <tbody>
      <tr style="background-color:#E5E5E5;">
      <td><?php echo $pro[0]['especie'];?></td>
      <td><?php echo $pro[0]['rosario'];?></td>
      <td><?php echo $pro[0]['darsena'];?></td>
      <td><?php echo $pro[0]['necochea'];?></td>
      <td><?php echo $pro[0]['bahia_blanca'];?></td>
        </tr>
 
        <tr style="background-color:gray;">
      <td><?php echo $pro[1]['especie'];?></td>
      <td><?php echo $pro[1]['rosario'];?></td>
       <td><?php echo $pro[1]['darsena'];?></td>
       <td><?php echo $pro[1]['necochea'];?></td>
       <td><?php echo $pro[1]['bahia_blanca'];?></td>
        </tr>
 
        <tr style="background-color:#E5E5E5;">
        <td><?php echo $pro[2]['especie'];?></td>
        <td><?php echo $pro[2]['rosario'];?></td>
        <td><?php echo $pro[2]['darsena'];?></td>
        <td><?php echo $pro[2]['necochea'];?></td>
        <td><?php echo $pro[2]['bahia_blanca'];?></td>
      </tr>
      <tr  style="background-color:gray;">
        <td><?php echo $pro[3]['especie'];?></td>
        <td><?php echo $pro[3]['rosario'];?></td>
        <td><?php echo $pro[3]['darsena'];?></td>
        <td><?php echo $pro[3]['necochea'];?></td>
        <td><?php echo $pro[3]['bahia_blanca'];?></td>
      </tr>
      <tr style="background-color:#E5E5E5;">
        <td><?php echo $pro[4]['especie'];?></td>
        <td><?php echo $pro[4]['rosario'];?></td>
        <td><?php echo $pro[4]['darsena'];?></td>
        <td><?php echo $pro[4]['necochea'];?></td>
        <td><?php echo $pro[4]['bahia_blanca'];?></td>
      </tr>
       </tbody>
      </table>
      <div class="sidebar" style="position:relative; bottom:330px;">
        <div class="searchform">
          <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
            </span>
            <input name="button_search" src="images/search.gif" class="button_search" type="image" />
          </form>
        </div>
        <div class="clr"></div>
        <div class="gadget">
          <h2 class="star"><span></span> Otros</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="cotizaciones.php">Cotizaciones de cambio</a></li>
            <li><a href="utiles.php">Útiles</a></li>
            <li><a href="links.php">Link de interes</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>

          </ul>
        </div>
       
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      
    <div class="col c2">
        <h2><span>Servicios</span> Ofrecidos</h2>
        <p>Ascesoramiento en comercializacion de granos, rindes, compra y venta de campos, arrendamientos, etc.</p>
       
      </div>
      <div class="col c3" style="float:rigth;">
        <h2><span>Contactenos</span> </h2>
        <p>Para contactar con nosotros, por favor complete nuestro formulario de <a href="contacto.php" style="color:white;">Contacto</a> y enseguida nos comunicaremos con usted</p>
        
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">www.dfd.com.ar</a>.</p>
      <p class="rf">Desarrollado por <a href="http://www.dreamtemplate.com/">Pablo Stadnik</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
<div align=center><a href='http://all-free-download.com/free-website-templates/'></a></div></body>
</html>

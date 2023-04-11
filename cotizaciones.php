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
<body>
<style>
tr {
  border: white 0.3px solid;
}
</style>
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
      <div id="contabla" style ="position:relative;right:250px;top:100px;">
      <?php
      require_once("class/class.php");
      $tra=new Trabajo();
    
      $pro1=$tra->get_valores();
      $pro2=$tra->get_valores2();
      //$data = file_get_contents("http://www.ggsa.com.ar/precios/precios-dolar.html");
      //$data2 =  file_get_contents("http://www.ggsa.com.ar/precios/futuros-dolar.html");
      ?>
      <h2 style="display: inline; position: relative; left: 300px; bottom: 40px;">Cierre de dolar al <?php
      echo $pro1[0]['fecha'];
      //if ( preg_match('|<th style="border-left:1px solid #c4c5b6">(.*?)</th>|is' , $data , $cap ) )
          //  {
        //  echo $cap[1];
       // }?>
      </h2>
      <table class="table table-hover" style="background-color: gray; width: 600px; position: relative; left: 200px;">
      <thead>
        <tr>
          <th></th>
          <th></th>
          <th><?php
            echo $pro1[0]['fecha'];
           // if ( preg_match('|<th style="border-left:1px solid #c4c5b6">(.*?)</th>|is' , $data , $cap ) )
            //{
            //echo $cap[1];
            //}?>
          </th>
       
        </tr>
      </thead>
      <tbody>
        <tr>
          <td rowspan="2">Libre</td>
          <td>Compra</td>
          <td><?php
            
           echo $pro1[1]['valor'];
 
            //if ( preg_match('|<td class="odd">Compra</td>\s+<td class="odd" style="border-left:1px solid #c4c5b6">(.*?)</td>|is' , $data , $cap ) )
            //{
            //echo $cap[1];
            //}?>
          </td>
      
        </tr>
        <tr>
          
          <td>Venta</td>
          <td><?php
         
           
            echo $pro1[2]['valor'];
            //if ( preg_match('|<td style="border-bottom:1px solid #c4c5b6;border-left:1px solid #c4c5b6">(.*?)</td>|is' , $data , $cap ) )
            //{
            //echo $cap[1];
            //}?>
          </td>
          
        </tr>
        <tr>
          <td rowspan="2">Nación</td>
          <td >Compra</td>
         <td ><?php
            
            echo $pro1[3]['valor'];
            //$pos = strpos($data, '7.800');
            //echo $pos;
            //echo substr($data, 15761, 5);
            ?>
          </td>
        <tr>
          
          <td >Venta</td>
          <td ><?php
            echo $pro1[4]['valor'];
            //$pos = strpos($data, '7.9000');
            //echo $pos;
            //echo substr($data, 15936, 5);
            ?>
          </td>
        </tr>
        <tr>
          <td>Itau</td>
          <td ></td>
          <td ><?php
            
          echo $pro1[5]['valor'];
           //if ( preg_match('|<td class="odd" style="border-left:1px solid #c4c5b6;border-left:1px solid #c4c5b6">(.*?)</td>|is' , $data , $cap ) )
           //{
           //echo $cap[1];
           //}?>
          </td>
        </tr>
      </tbody>
    </table>

    <h2 style="display: inline; position: relative; top: 110px; left: 300px;">Dolar futuro ROFEX</h2>
    <table class="table table-hover" style="position: relative; top: 140px; background-color: gray; width: 600px; left: 200px;">
      <?php
      //if ( preg_match('|<tr class="title"><th colspan="3" style="text-align:left;padding:8px 5px 1px;border-left:1px solid #c4c5b6"><h3>(.*?)</h3></th></tr><tr class="odd"><td style="border-left:1px solid #c4c5b6">(.*?)</td><td style="border-left:1px solid #c4c5b6">(.*?)</td><td>(.*?)</td></tr><tr class="even"><td style="border-left:1px solid #c4c5b6">(.*?)</td><td style="border-left:1px solid #c4c5b6">(.*?)</td><td>(.*?)</td></tr><tr class="odd"><td style="border-left:1px solid #c4c5b6">(.*?)</td><td style="border-left:1px solid #c4c5b6">(.*?)</td><td>(.*?)</td></tr><tr class="even"><td style="border-left:1px solid #c4c5b6">(.*?)</td><td style="border-left:1px solid #c4c5b6">(.*?)</td><td>(.*?)</td></tr><tr class="odd"><td style="border-left:1px solid #c4c5b6">(.*?)</td><td style="border-left:1px solid #c4c5b6">(.*?)</td><td>(.*?)</td></tr><tr class="even"><td style="border-left:1px solid #c4c5b6">(.*?)</td><td style="border-left:1px solid #c4c5b6">(.*?)</td><td>(.*?)</td></tr><tr class="odd"><td style="border-left:1px solid #c4c5b6">(.*?)</td><td style="border-left:1px solid #c4c5b6">(.*?)</td><td>(.*?)</td></tr><tr class="even"><td style="border-left:1px solid #c4c5b6">(.*?)</td><td style="border-left:1px solid #c4c5b6">(.*?)</td><td>(.*?)</td></tr><tr class="odd"><td style="border-left:1px solid #c4c5b6">(.*?)</td><td style="border-left:1px solid #c4c5b6">(.*?)</td><td>(.*?)</td></tr><tr class="even"><td style="border-left:1px solid #c4c5b6">(.*?)</td><td style="border-left:1px solid #c4c5b6">(.*?)</td><td>(.*?)</td></tr>  </table>|is' , $data2 , $cap ) )
        //    {
            ?>
        <thead>
        <tr>
          
          <th>Posicion</th>
          <th>Cotizacion</th>
          <th>Variacion</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $pro1[0]['fecha'];//echo $cap[1];?></td>
          <td></td>
          <td></td>
         
        </tr>
        <tr>
          <td><?php echo $pro2[0]['posicion'];//echo $cap[2];?></td>
          <td><?php echo $pro2[0]['cotizacion'];//echo $cap[3];?></td>
          <td><?php echo $pro2[0]['variacion'];//echo $cap[4];?></td>
    
        </tr>
        <tr>
         <td><?php echo $pro2[1]['posicion']//echo $cap[5];?></td>
          <td><?php echo $pro2[1]['cotizacion'];//echo $cap[6];?></td>
          <td><?php echo $pro2[1]['variacion'];//echo $cap[7];?></td>
        </tr>
        <tr>
         <td><?php echo $pro2[2]['posicion'];//echo $cap[8];?></td>
          <td><?php echo $pro2[2]['cotizacion'];//echo $cap[9];?></td>
          <td><?php echo $pro2[2]['variacion'];//echo $cap[10];?></td>
        </tr>
        <tr>
         <td><?php echo $pro2[3]['posicion'];//echo $cap[11];?></td>
          <td><?php echo $pro2[3]['cotizacion'];//echo $cap[12];?></td>
          <td><?php echo $pro2[3]['variacion'];//echo $cap[13];?></td>
        </tr>
        <tr>
         <td><?php echo $pro2[4]['posicion'];//echo $cap[14];?></td>
          <td><?php echo $pro2[4]['cotizacion'];//echo $cap[15];?></td>
          <td><?php echo $pro2[4]['variacion'];//echo $cap[16];?></td>
        </tr>
        <tr>
         <td><?php echo $pro2[5]['posicion'];//echo $cap[17];?></td>
          <td><?php echo $pro2[5]['cotizacion'];//echo $cap[18];?></td>
          <td><?php echo $pro2[5]['variacion'];//echo $cap[19];?></td>
        </tr>
        <tr>
         <td><?php echo $pro2[6]['posicion'];//echo $cap[20];?></td>
          <td><?php echo $pro2[6]['cotizacion'];//echo $cap[21];?></td>
          <td><?php echo $pro2[6]['variacion'];//echo $cap[22];?></td>
        </tr>
        <tr>
         <td><?php echo $pro2[7]['posicion'];//echo $cap[23];?></td>
          <td><?php echo $pro2[7]['cotizacion'];//echo $cap[24];?></td>
          <td><?php echo $pro2[7]['variacion'];//echo $cap[25];?></td>
        </tr>
        <tr>
         <td><?php echo $pro2[8]['posicion'];//echo $cap[26];?></td>
          <td><?php echo $pro2[8]['cotizacion'];//echo $cap[27];?></td>
          <td><?php echo $pro2[8]['variacion'];//echo $cap[28];?></td>
        </tr>
        <tr>
         <td><?php echo $pro2[9]['posicion'];//echo $cap[29];?></td>
          <td><?php echo $pro2[9]['cotizacion'];//echo $cap[30];?></td>
          <td><?php echo $pro2[9]['variacion'];//echo $cap[31];?></td>
        </tr>
      </tbody>
    </table>
            <?php
            //}
      ?>
      
  </div>

      <div class="sidebar" style="position:relative;bottom:700px;">
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
  <div class="fbg" style="margin-top:200px;">
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

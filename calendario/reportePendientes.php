 <?
  mysql_connect('localhost','sgghost_userglo','portal123456');
  include ("cambiar_fecha.php");
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Solicitud Condecoraciones Otorgadas hasta el 2009</title>
<style type="text/css">
<!--
.Estilo24 {font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 11px; color: #996600; font-weight: bold; }
.Estilo11 {color: #FFFFFF}
.Estilo25 {font-family: Geneva, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 11px; color: #FFFFFF; }
.Estilo26 {
	color: #000000;
	font-family: Tahoma;
	font-size: 23px;
}
.Estilo27 {font-size: medium; font-weight: bold; font-family: Arial, Helvetica, sans-serif; color: #000000; }
.Estilo28 {
	font-size: 9px;
	font-family: Tahoma;
}
body {
	background-image: url();
}
.Estilo30 {font-size: 11px}
.Estilo31 {
	color: #993300;
	font-weight: bold;
}
.Estilo33 {
	font-family: Tahoma;
	font-size: 12px;
	color: #000000;
	font-weight: bold;
}
.Estilo35 {font-family: Tahoma; font-size: 12px; color: #0033CC; font-weight: bold; }
-->
</style>
</head>

<body>
<table width="780" border="0" align="center">
  <tr>
    <td width="199" bordercolor="#0000CC" bgcolor="#FFFFFF"><div align="center" class="Estilo11">
      <p align="center" class="Estilo27"><span class="Estilo28">Rep&uacute;blica Bolivariana de Venezuela </span><br />
        <a href="siguiente1.php"><img src="images/escudo blanco y negro carabobo.jpg" width="95" height="90" border="0" /></a><br />
        <span class="Estilo28">Gobernaci&oacute;n Estado Carabobo<br />
        <span class="Estilo30">Condecoraci&oacute;n &quot;Sol de Carabobo&quot;</span></span></p>
      </div></td>
    <td width="571" bordercolor="#0000CC" bgcolor="#FFFFFF"><div align="center"><span class="Estilo27"><span class="Estilo26">Total Solicitudes Pendientes  </span></span><span class="Estilo11">hghggggggg</span><br />
    </div></td>
  </tr>
</table>
<tr>
  <td>
  <td></td>
</tr>
<div id="content">
  <div class="post">
    <div align="center">
      <?php $sql="SELECT * FROM sgghost_solcarabob.pendientes".$criterio;
$res=mysql_query($sql);
$numeroRegistros=mysql_num_rows($res);
if($numeroRegistros<=0)
{
    echo "<div align='center'>";
    echo "<font face='verdana' size='-2'>No se encontraron resultados</font>";
    echo "</div>";
}else{
    //////////elementos para el orden
    if(!isset($orden))
    {
       $orden="id";
    }
    //////////fin elementos de orden

    //////////calculo de elementos necesarios para paginacion
    //tamano de la pagina
    $tamPag=5;

    //pagina actual si no esta definida y limites
    if(!isset($_GET["pagina"]))
    {
       $pagina=1;
       $inicio=1;
       $final=$tamPag;
    }else{
       $pagina = $_GET["pagina"];
    }
    //calculo del limite inferior
    $limitInf=($pagina-1)*$tamPag;

    //calculo del numero de paginas
    $numPags=ceil($numeroRegistros/$tamPag);
    if(!isset($pagina))
    {
       $pagina=1;
       $inicio=1;
       $final=$tamPag;
    }else{
       $seccionActual=intval(($pagina-1)/$tamPag);
       $inicio=($seccionActual*$tamPag)+1;

       if($pagina<$numPags)
       {
          $final=$inicio+$tamPag-1;
       }else{
          $final=$numPags;
       }

       if ($final>$numPags){
          $final=$numPags;
       }
    }

//////////fin de dicho calculo



?><span class="Estilo35"><a href="ReporteGeneraldeSolicitudesPendientes.pdf">Imprimible Formato PDF </a></span>
      <img src="images/imprimir.jpg" width="22" height="22" /></div>
    <form id="searchform" method="get" action="listadospendientes.php"><div>
      <p align="center"><span class="Estilo31">Total</span>: <span class="Estilo33"><?php echo $numeroRegistros."  Solicitudes"; }
?></span><br />
          <?
//inicializo el criterio y recibo cualquier cadena que se desee buscar
$criterio = ""; 
$txt_criterio = ""; echo $txt_criterio;
if ($_GET["criterio"]!=""){
  $txt_criterio = $_GET["criterio"];
   $criterio = " where nombres like '%" . $txt_criterio. "%'";
  

}


$sql="SELECT * FROM sgghost_solcarabob.pendientes".$criterio;
$res=mysql_query($sql);
$numeroRegistros=mysql_num_rows($res);
if($numeroRegistros<=0)
{
    echo "<div align='center'>";
    echo "<font face='verdana' size='-2'></font>";
    echo "</div>";
}else{
    //////////elementos para el orden
    if(!isset($orden))
    {
       $orden="id";
    }
    //////////fin elementos de orden

    //////////calculo de elementos necesarios para paginacion
    //tamano de la pagina
    $tamPag=11;

    //pagina actual si no esta definida y limites
    if(!isset($_GET["pagina"]))
    {
       $pagina=1;
       $inicio=1;
       $final=$tamPag;
    }else{
       $pagina = $_GET["pagina"];
    }
    //calculo del limite inferior
    $limitInf=($pagina-1)*$tamPag;

    //calculo del numero de paginas
    $numPags=ceil($numeroRegistros/$tamPag);
    if(!isset($pagina))
    {
       $pagina=1;
       $inicio=1;
       $final=$tamPag;
    }else{
       $seccionActual=intval(($pagina-1)/$tamPag);
       $inicio=($seccionActual*$tamPag)+1;

       if($pagina<$numPags)
       {
          $final=$inicio+$tamPag-1;
       }else{
          $final=$numPags;
       }

       if ($final>$numPags){
          $final=$numPags;
       }
    }

//////////fin de dicho calculo

//////////creacion de la consulta con limites
$sql="select * from pendientes where (fecha >='2010-01-01' AND fecha <= '2010-03-01')".$criterio." ORDER BY ".$orden.",id ASC LIMIT ".$limitInf.",".$tamPag;
$res=mysql_query($sql);

//////////fin consulta con limites
echo "<div align='center'>";
if(isset($txt_criterio)){ 

    }?>
      </p>
      </div>
    </form>
  </div>
  <table width="739" border="2" align="center" bordercolor="#996600">
    <tr>
      <td width="124" bgcolor="#A98F5C"><div align="center" class="Estilo25">Nombre y Apellido</div></td>
      <td width="164" bgcolor="#A98F5C"><div align="center" class="Estilo25">Merecimientos</div></td>
      <td width="146" bgcolor="#A98F5C"><div align="center" class="Estilo25">Proponente</div></td>
      <td width="153" bgcolor="#A98F5C"><div align="center" class="Estilo25">Oficio Solicitud  </div></td>
      <td width="116" bgcolor="#A98F5C"><div align="center" class="Estilo25">Fecha Solicitud </div></td>
    </tr>
    <tr>
      <?php 
{

    //$registro = mysql_query ("select * from tabla where (fecha >='2010-01-01' AND fecha <= '2010-03-01')");
     while($registro=mysql_fetch_array($res))
?>
      <td><span class="Estilo24"><? echo $registro["nombres"];?></span></td>
      <td><span class="Estilo24"><? echo $registro["merecimientos"]; ?></span></td>
      <td><span class="Estilo24"><? echo $registro["proponent"]; ?></span></td>
      <td><span class="Estilo24"><? echo $registro["oficiosolic"];?></span></td>
      <td><span class="Estilo24"><? echo cambiaf_a_normal($registro["fecha"]); ?></span></td>
    </tr>
    <?
}//fin while
echo "</table>";
}//fin if
//////////a partir de aqui viene la paginacion
?>
    <br />
    <table border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
        <td align="center" valign="top"><?
    if($pagina>1)
    {
       echo "<a class='p' href='".$_SERVER["PHP_SELF"]."?pagina=".($pagina-1)."&orden=".$orden."&criterio=".$txt_criterio."'>";
       echo "<font face='verdana' size='-2'>anterior</font>";
       echo "</a> ";
    }

    for($i=$inicio;$i<=$final;$i++)
    {
       if($i==$pagina)
       {
          echo "<font face='verdana' size='-2'><b>".$i."</b> </font>";
       }else{
          echo "<a class='p' href='".$_SERVER["PHP_SELF"]."?pagina=".$i."&orden=".$orden."&criterio=".$txt_criterio."'>";
          echo "<font face='verdana' size='-2'>".$i."</font></a> ";
       }
    }
    if($pagina<$numPags)
   {
       echo " <a class='p' href='".$_SERVER["PHP_SELF"]."?pagina=".($pagina+1)."&orden=".$orden."&criterio=".$txt_criterio."'>";
       echo "<font face='verdana' size='-2'>siguiente</font></a>";
   }
//////////fin de la paginacion
?>        </td>
      </tr>
    </table>
    <hr noshade="noshade" style="color:CC6666;height:1px" />
    <div align="center"><font face="verdana" size="-2"><a class="p" href="reporteOtorgados.php">::Regresar principal::</a></font></div>
    <?
    mysql_close();
?>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="23"><div align="center"></div></td>
    </tr>
  </table>
  <form id="form1" name="form1" method="post" action="">
    <label>
      <div align="center">
        <input type="button" name="Submit" value="Imprimir" onclick="window.print();"/>
    </div>
    </label>
    <div align="center">
    </div>
  </form>
  <p>&nbsp;</p>
</div>
<tr>
  <td bgcolor="#A98F5C"></td>
  <td height="31" bgcolor="#A98F5C"></td>
</tr>
</body>
</html>

<link href="estilo.css" rel="stylesheet" type="text/css">
<?php
include_once("funciones.php");
$fecha = $_POST['fecha'];
$evento = $_POST['evento'];
if($fecha != "" && $evento != ""){
    $conexion = conectar();
    $sql = "insert into eventos(fecha,evento) values('$fecha','$evento')";
    $res = query($sql);
    if($res){
        echo "Evento grabado";
        redireccionar('3','mostrar.php');
    }else{
        echo "Error al grabar evento: ".mysql_error($res);
    }
    desconectar($conexion);
}else{
?>

<form action="agregar.php" method="post" name="f1">
<table border=0 cellspacing="0">
<tr><td colspan="2">[AGREGAR EVENTO]</td></tr>
<tr><td>Fecha</td><td><input type="text" name="fecha" value="<? echo date("Y-m-d"); ?>"<i>Por favor respete el formato</i></td></tr>
<tr><td valign="TOP">Evento</td><td><TEXTAREA rows="5" cols="20" name="evento">Ingrese aqui su evento</TEXTAREA></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Enviar"></td></tr>
</table>
</form>

<?
}
?>

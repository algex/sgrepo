<link href="estilo.css" rel="stylesheet" type="text/css">
<table width="100%">
<?
include_once("funciones.php");
$evento = $_GET['evento'];
if(!isset($evento)){
    $evento = date("Y-m-d");
}
$conexion = conectar();
$sql = "select * from eventos where fecha = '$evento'";
$res = query($sql);
if(mysql_num_rows($res) > 0){
    while($fila = mysql_fetch_array($res)){
        echo "<tr><td class='tdfecha'>".$fila['fecha']."</td><td class='tdevento'>".$fila['evento']."</td><td><a href='borrar.php?id=".$fila['eventoid']."'  alt='Borrar'><img src='delete.gif' alt='Borrar' border=0></a></td></tr>";
    }
}else{
    echo "<tr><td>no hay eventos cargados en este dia.</td></tr>";
}
desconectar($conexion);
?>
</table>

<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$id=$_POST['id'];
$modelo=$_POST['modelo'];
$serial=$_POST['serial'];

$sql="SELECT * FROM canaimas WHERE id_alumno=".$id."";
$result = mysql_query($sql);
$num= mysql_num_rows($result);

if($num==0){
$sql="INSERT INTO canaimas(id_alumno, serial_canaima, modelo_canaima) VALUES (".$id.", '".$serial."', ".$modelo.")";
}elseif($num>0){
$sql="UPDATE canaimas SET serial_canaima='".$serial."', modelo_canaima=".$modelo." WHERE id_alumno=".$id."";
}
$result = mysql_query($sql);
echo mysql_error();
mysql_close();
?>
 <script languaje="javascript">
  alert("\u00A1Canaima Registrada\u0021");
  location.href = "../vista/agregar_alumno.php";
</script>
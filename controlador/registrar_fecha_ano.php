<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$ano_escolar=$_POST['id'];
$desde1=$_POST['desde1'];
$hasta1=$_POST['hasta1'];
$desde2=$_POST['desde2'];
$hasta2=$_POST['hasta2'];
$desde3=$_POST['desde3'];
$hasta3=$_POST['hasta3'];
$desde4=$_POST['desde4'];
$hasta4=$_POST['hasta4'];
$desde5=$_POST['desde5'];
$hasta5=$_POST['hasta5'];

$sql="SELECT id_ano_escolar FROM fecha_momentos WHERE id_ano_escolar='$ano_escolar'";
$result = mysql_query($sql);
$num= mysql_num_rows($result);

if($num>0){
$result = mysql_query("");
echo mysql_error();
mysql_close();
?>
<script languaje="javascript">
alert("\u00A1A\u00F1o Escolar ya se encuentra registrado\u0021");
location.href = "../vista/registrar_ano_escolar.php";
</script>
<?php
}else{
$result = mysql_query("INSERT INTO fecha_momentos(id_ano_escolar, fecha_momento1, fecha_momento2, fecha_momento3, fecha_momento4, fecha_momento5) VALUES (".$ano_escolar.",'".$desde1." - ".$hasta1."','".$desde2." - ".$hasta2."','".$desde3." - ".$hasta3."','".$desde4." - ".$hasta4."','".$desde5." - ".$hasta5."')");
echo mysql_error();
mysql_close();
?>
 <script languaje="javascript">
  alert("\u00A1A\u00F1o Registrado\u0021");
  location.href = "../vista/registrar_ano_escolar.php";
 </script>
<?php
}
?>
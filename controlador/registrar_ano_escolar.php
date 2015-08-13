<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$ano_escolar1=$_POST['ano_escolar1'];
$ano_escolar2=$_POST['ano_escolar2'];
$ano_escolar=$ano_escolar1."-".$ano_escolar2;

$sql="SELECT id_ano_escolar FROM ano_escolar WHERE ano_escolar='$ano_escolar'";
$result = mysql_query($sql);
$num= mysql_num_rows($result);

if($num>0){
?>
 <script languaje="javascript">
  alert("\u00A1A\u00F1o Escolar ya se encuentra registrado\u0021");
  location.href = "../vista/registrar_ano_escolar.php";
 </script>
 <?php
}else{
$result = mysql_query("INSERT INTO ano_escolar(ano_escolar) VALUES ('$ano_escolar')");
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
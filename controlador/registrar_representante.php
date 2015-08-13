<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$id=$_POST['id'];
$tipo_representante=$_POST['tipo_representante'];
$nombre_representante=$_POST['nombre_representante'];
$ci_representante=$_POST['cedula_representante'];
$nacionalidad_representante=$_POST['nacionalidad_representante'];
$edad_representante=$_POST['edad_representante'];
$tlfn1_representante=$_POST['tlfn1_representante'];
$tlfn2_representante=$_POST['tlfn2_representante'];
$representante_legal=$_POST['representante_legal'];
$ocupacion_representante=$_POST['ocupacion_representante'];
$lugar_trabajo_representante=$_POST['lugar_trabajo_representante'];
$tlfn_lugar_trabajo_representante=$_POST['tlfn_lugar_trabajo_representante'];
$vive_con_alumno=$_POST['vive_con_alumno'];
$observacion_vive_con_alumno=$_POST['observacion_vive_con_alumno'];
$sueldo_representante=$_POST['sueldo_representante'];

$sql="SELECT id_representante FROM representantes WHERE ci_representante='$ci_representante' AND id_alumno=$id";
$result = mysql_query($sql);
$num= mysql_num_rows($result);

if($num>0){
?>
 <script languaje="javascript">
  alert("\u00A1Representante ya se encuentra registrado con este Alumno\u0021");
  location.href = "../vista/agregar_alumno.php";
 </script>
 <?php
}else{
$result = mysql_query("INSERT INTO representantes(id_alumno, tipo_representante, nombre_representante, ci_representante, nacionalidad_representante, edad_representante, tlfn1_representante, tlfn2_representante, ocupacion_representante, lugar_trabajo_representante, tlfn_lugar_trabajo_representante, sueldo_representante, vive_con_alumno, observacion_vive_con_alumno) VALUES ($id,'$tipo_representante','$nombre_representante','$ci_representante','$nacionalidad_representante','$edad_representante','$tlfn1_representante','$tlfn2_representante','$ocupacion_representante','$lugar_trabajo_representante','$tlfn_lugar_trabajo_representante','$sueldo_representante','$vive_con_alumno','$observacion_vive_con_alumno')");
echo mysql_error();
mysql_close();
?>
 <script languaje="javascript">
  alert("\u00A1Representante Registrado\u0021");
  location.href = "../vista/agregar_alumno.php";
 </script>
 <?php
}
?>
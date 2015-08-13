<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$nombre_docente=$_POST['nombre_docente'];
$ci_docente=$_POST['ci_docente'];

$sql="SELECT id_docente FROM docentes WHERE ci_docente='$ci_docente'";
$result = mysql_query($sql);
$num= mysql_num_rows($result);

if($num>0){
?>
 <script languaje="javascript">
  alert("\u00A1Docente ya se encuentra registrado\u0021");
  location.href = "../vista/agregar_docente.php";
 </script>
 <?php
}else{
$result = mysql_query("INSERT INTO docentes(ci_docente, nombre_docente) VALUES ('$ci_docente','$nombre_docente')");
echo mysql_error();
mysql_close();
?>
 <script languaje="javascript">
  alert("\u00A1Docente Registrado\u0021");
  location.href = "../vista/agregar_docente.php";
 </script>
 <?php
}
?>
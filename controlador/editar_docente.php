<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$id=$_POST['id'];
$nombre_docente=$_POST['nombre_docente'];
$ci_docente=$_POST['ci_docente'];
$correo_docente=$_POST['correo_docente'];
$tlfn_docente=$_POST['tlfn_docente'];

$result = mysql_query("UPDATE docentes SET ci_docente='$ci_docente',nombre_docente='$nombre_docente', correo_docente='$correo_docente', tlfn_docente='$tlfn_docente'  WHERE id_docente=$id");
echo mysql_error();
mysql_close();
?>
 <script languaje="javascript">
  alert("\u00A1Docente Modificado\u0021");
  location.href = "../vista/agregar_docente.php";
 </script>
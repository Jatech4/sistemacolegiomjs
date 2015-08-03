<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$nombre_docente=$_POST['nombre_docente'];
$ci_docente=$_POST['ci_docente'];

$result = mysql_query("INSERT INTO docentes(ci_docente, nombre_docente) VALUES ('$ci_docente','$nombre_docente')");
echo mysql_error();
mysql_close();
?>
 <script languaje="javascript">
  alert("\u00A1Docente Registrado\u0021");
  location.href = "../vista/agregar_docente.php";
 </script>
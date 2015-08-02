<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$id=$_GET['alumno'];

$result = mysql_query("DELETE FROM representantes WHERE id_alumno=$id");
$result = mysql_query("DELETE FROM procedencia_alumno WHERE id_alumno=$id");
$result = mysql_query("DELETE FROM documentos_presentados WHERE id_alumno=$id");
$result = mysql_query("DELETE FROM situacion_economica WHERE id_alumno=$id");
$result = mysql_query("DELETE FROM salud_alumno WHERE id_alumno=$id");
$result = mysql_query("DELETE FROM alumnos WHERE id_alumno=$id");
echo mysql_error();
mysql_close();
?>
 <script languaje="javascript">
  alert("\u00A1Alumno Eliminado\u0021");
  location.href = "../vista/agregar_alumno.php";
 </script>
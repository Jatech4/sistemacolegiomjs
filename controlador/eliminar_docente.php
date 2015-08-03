<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$id=$_GET['docente'];

$result = mysql_query("DELETE FROM docentes WHERE id_docente=$id");
echo mysql_error();
mysql_close();
?>
 <script languaje="javascript">
  alert("\u00A1Docente Eliminado\u0021");
  location.href = "../vista/agregar_docente.php";
 </script>
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$id=$_GET['boletin'];

$result = mysql_query("DELETE FROM boletines WHERE id_boletin=$id");
echo mysql_error();
mysql_close();
?>
 <script languaje="javascript">
  alert("\u00A1Boletin Eliminado\u0021");
  location.href = "../vista/crear_boletin.php";
 </script>
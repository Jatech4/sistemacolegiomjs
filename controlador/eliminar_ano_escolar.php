<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$id=$_GET['ano'];

$result = mysql_query("DELETE FROM ano_escolar WHERE id_ano_escolar=$id");
echo mysql_error();
mysql_close();
?>
 <script languaje="javascript">
  alert("\u00A1A\u00F1o Eliminado\u0021");
  location.href = "../vista/registrar_ano_escolar.php";
 </script>
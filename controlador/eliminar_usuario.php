<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$id=$_GET['usuario'];

$result = mysql_query("DELETE FROM usuarios WHERE id_usuario=$id");
mysql_close();
?>
 <script languaje="javascript">
  alert("\u00A1Usuario Eliminado\u0021");
  location.href = "../vista/agregar_usuario.php";
 </script>
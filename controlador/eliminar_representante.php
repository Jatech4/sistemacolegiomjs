<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$id=$_GET['representante'];
$id_alumno=$_GET['alumno'];

$result = mysql_query("DELETE FROM representantes WHERE id_representante=$id");
echo mysql_error();
mysql_close();
?>
 <script languaje="javascript">
  var alumno="<?php echo $id_alumno; ?>";
  alert("\u00A1Representante Eliminado\u0021");
  location.href = "../vista/editar_alumno.php?alumno="+alumno;
 </script>
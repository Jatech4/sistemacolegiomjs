<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$login=$_POST['login'];
$password=$_POST['password'];
$perfil=$_POST['perfil'];

$result = mysql_query("UPDATE usuarios SET cedula_usuario='$cedula', nombre_usuario='$nombre', login_usuario='$login', pass_usuario='$password', status_usuario=1, perfil_usuario=$perfil WHERE id_usuario=$id");
mysql_close();
?>
 <script languaje="javascript">
  alert("\u00A1Usuario Modificado\u0021");
  location.href = "../vista/agregar_usuario.php";
 </script>
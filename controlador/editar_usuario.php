<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$login=$_POST['login'];
$password=$_POST['password'];
$perfil=$_POST['perfil'];
$status=$_POST['status'];
$email_usuario=$_POST['email_usuario'];

$result = mysql_query("UPDATE usuarios SET cedula_usuario='$cedula', nombre_usuario='$nombre', login_usuario='$login', pass_usuario='$password', status_usuario=$status, perfil_usuario=$perfil, email_usuario='$email_usuario' WHERE id_usuario=$id");
echo mysql_error();
mysql_close();
?>
 <script languaje="javascript">
  alert("\u00A1Usuario Modificado\u0021");
  location.href = "../vista/agregar_usuario.php";
 </script>
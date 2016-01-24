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
$sexo_usuario=$_POST['sexo_usuario'];

$sql="UPDATE usuarios SET cedula_usuario='$cedula', nombre_usuario='$nombre', login_usuario='$login', pass_usuario='$password', status_usuario=$status, perfil_usuario=$perfil, email_usuario='$email_usuario', sexo_usuario='$sexo_usuario' WHERE id_usuario=$id";
$result = mysql_query($sql);
echo mysql_error();
mysql_close();
?>
 <script languaje="javascript">
  alert("\u00A1Usuario Modificado\u0021");
  location.href = "../vista/index.php";
 </script>
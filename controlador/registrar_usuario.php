<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$login=$_POST['login'];
$password=$_POST['password'];
$perfil=$_POST['perfil'];
$status=$_POST['status'];

$result = mysql_query("INSERT INTO usuarios(cedula_usuario, nombre_usuario, login_usuario, pass_usuario, status_usuario, perfil_usuario) VALUES ('$cedula','$nombre','$login','$password',$status,$perfil)");
echo mysql_error();
mysql_close();
?>
 <script languaje="javascript">
  alert("\u00A1Usuario Registrado\u0021");
  location.href = "../vista/agregar_usuario.php";
 </script>
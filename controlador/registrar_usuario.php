<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$login=$_POST['login'];
$password=$_POST['password'];
$perfil=$_POST['perfil'];
$status=$_POST['status'];
$email_usuario=$_POST['email_usuario'];
$sexo_usuario=$_POST['sexo_usuario'];

$sql="SELECT id_usuario FROM usuarios WHERE cedula_usuario='$cedula'";
$result = mysql_query($sql);
$num= mysql_num_rows($result);

$sql2="SELECT id_usuario FROM usuarios WHERE login_usuario='$login'";
$result2 = mysql_query($sql2);
$num2= mysql_num_rows($result2);

if($num>0){
?>
 <script languaje="javascript">
  alert("\u00A1Usuario ya se encuentra registrado\u0021");
  location.href = "../vista/agregar_usuario.php";
 </script>
 <?php
}elseif($num2>0){
?>
 <script languaje="javascript">
  alert("\u00A1Ya existe un Usuario con ese Login\u0021");
  location.href = "../vista/agregar_usuario.php";
 </script>
 <?php
}else{
$result = mysql_query("INSERT INTO usuarios(cedula_usuario, nombre_usuario, login_usuario, pass_usuario, status_usuario, perfil_usuario, email_usuario, sexo_usuario) VALUES ('$cedula','$nombre','$login','$password',$status,$perfil, '$email_usuario', '$sexo_usuario')");
echo mysql_error();
mysql_close();
?>
 <script languaje="javascript">
  alert("\u00A1Usuario Registrado\u0021");
  location.href = "../vista/agregar_usuario.php";
 </script>
  <?php
}
?>
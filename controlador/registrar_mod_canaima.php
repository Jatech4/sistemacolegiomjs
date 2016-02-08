<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$nombre_modelo=$_POST['nombre_modelo'];
$serial_modelo=$_POST['serial_modelo'];

$sql="SELECT id_modelo FROM modelos_canaimas WHERE serial_modelo='$serial_modelo'";
$result = mysql_query($sql);
$num= mysql_num_rows($result);

if($num>0){
?>
 <script languaje="javascript">
  alert("Modelo ya se encuentra registrado\u0021");
  location.href = "../vista/registrar_mod_canaima.php";
 </script>
 <?php
}else{
$result = mysql_query("INSERT INTO modelos_canaimas(nombre_modelo, serial_modelo) VALUES ('$nombre_modelo', '$serial_modelo')");
echo mysql_error();
mysql_close();
?>
 <script languaje="javascript">
  alert("Modelo Registrado\u0021");
  location.href = "../vista/registrar_mod_canaima.php";
 </script>
   <?php
}
?>
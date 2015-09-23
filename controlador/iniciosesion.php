<?php
include_once "../modelo/conexion.php";

$usuario = $_POST["usuario_id"];
$password = $_POST["password"];

$result = mysql_query("SELECT * FROM usuarios WHERE login_usuario = '$usuario'");

//Validamos si el nombre del usuario existe en la base de datos o es correcto
if($row = mysql_fetch_array($result))
{
 if($row["status_usuario"]==2)
 {
  ?>
  <script languaje="javascript">
   location.href = "../vista/login.php";
   alert("\u00A1Su Usuario se encuentra Inactivo, comuniquese con el Administrador\u0021");
  </script>
  <?php
 }
 elseif($row["pass_usuario"] == $password)
 {
  session_start();
  $_SESSION['login'] = $usuario;
  $_SESSION['usuario']=$row["nombre_usuario"];
  $_SESSION['perfilusuario']=$row["perfil_usuario"];
  $_SESSION['id_usuario']=$row["id_usuario"];
  $hora_inicio=date("d-m-Y H:i:s");
  $sql="INSERT INTO bitacora (id_usuario, fecha) VALUES (".$row['id_usuario'].",'".$hora_inicio."')";
  $result = mysql_query($sql);
  ?>
  <script languaje="javascript">
   location.href = "../vista/index.php";
   alert("\u00A1Bienvenido\u0021");
  </script>
  <?php

 }
 else
 {
  //En caso que la contraseña sea incorrecta enviamos un msj y redireccionamos a login.php
  ?>
   <script languaje="javascript">
    alert("Contrase\u00F1a Incorrecta \n Int\u00E9ntalo de nuevo.");
    location.href = "../vista/login.php";
   </script>
  <?php

 }
}
else
{
 //en caso que el nombre de administrador es incorrecto enviamos un msj y redireccionamos a login.php
?>
 <script languaje="javascript">
  alert("\u00A1El nombre de usuario es incorrecto\u0021 \n Int\u00E9ntalo de nuevo.");
  location.href = "../vista/login.php";
 </script>
<?php

}
//mysql_free_result($result);
mysql_close();
?>
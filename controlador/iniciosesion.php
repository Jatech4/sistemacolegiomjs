<?php
include_once "../modelo/conexion.php";

$usuario = $_POST["usuario_id"];
$password = $_POST["password"];

$result = mysql_query("SELECT * FROM usuarios WHERE login_usuario = '$usuario'");

//Validamos si el nombre del usuario existe en la base de datos o es correcto
if($row = mysql_fetch_array($result))
{     
 if($row["pass_usuario"] == $password)
 {
  session_start();  
  $_SESSION['login'] = $usuario;
  $_SESSION['usuario']=$row["nombre_usuario"];
  $_SESSION['perfilusuario']=$row["perfil_usuario"];
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
mysql_free_result($result);
mysql_close();
?>
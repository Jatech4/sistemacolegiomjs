<?php
//error_reporting(E_ALL);
error_reporting(E_ALL & ~E_NOTICE);
@session_start();
if ($_SESSION['usuario']==""){
echo "<script language='javascript'>
alert('Sesi\u00F3n no iniciada, Favor inicie sesi\u00F3n');
parent.location.href = '../vista/login.php';
</script>";
}
?>
<?php
session_start();
session_destroy();
header('Location: ../vista/login.php');
mysql_close();
?>
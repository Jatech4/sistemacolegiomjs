<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '123456';
$dbname='martinjsanabria';
$link=mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname,$link) OR DIE ("Error: No es posible establecer la conexión");
mysql_query ("SET NAMES 'utf8'");
//error_reporting(E_ALL);
error_reporting(E_ALL & ~E_NOTICE);
?>
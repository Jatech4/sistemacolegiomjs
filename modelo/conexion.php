<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname='martinjsanabria';
error_reporting(0);
$link=mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname,$link) OR DIE ("Error: No es posible establecer la conexión");
mysql_query ("SET NAMES 'utf8'");

?>
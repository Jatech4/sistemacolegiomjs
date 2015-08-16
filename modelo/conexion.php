<?php
$link=mysql_connect("localhost", "root", '');
mysql_select_db("martinjsanabria",$link) OR DIE ("Error: No es posible establecer la conexión");
mysql_query ("SET NAMES 'utf8'");
?>
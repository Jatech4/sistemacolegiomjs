<?php
//MySQL connection parameters
include_once "../modelo/conexion.php";
//Set encoding
mysql_query("SET CHARSET utf8");
mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
//Includes class
require_once('../mysqldump/FKMySQLDump.php');
//Creates a new instance of FKMySQLDump: it exports without compress and base-16 file
$archivo = $dbname . "_" . date("Y-m-d_H-i-s").".sql";
$dumper = new FKMySQLDump($dbname,$archivo,false,false);
$params = array(
    //'skip_structure' => TRUE,
    //'skip_data' => TRUE,
);
//Make dump
$dumper->doFKDump($params);
header("Content-disposition: attachment; filename=$archivo");
header("Content-type: application/octet-stream");
readfile($archivo);
unlink($archivo);
?>
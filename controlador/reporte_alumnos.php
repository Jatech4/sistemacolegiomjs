<?php
//include_once "validasesion.php";
include_once "../modelo/conexion.php";
require_once "../dompdf/dompdf_config.inc.php";
$sql=$_POST['consulta'];
$result=mysql_query($sql);
$fecha=date("d-m-Y H:i:s");

$html='
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style>
.page { page-break-before:always; }
</style>
<title>Reporte</title>
</head>
<body>
<table width=100%>
<tr>
<td width=20%><img src="../vista/img/logo_escuela.png" alt="Mart&iacute;n Jos&eacute; Sanabria" height="125" width="125"></td>
<td width=50% align="center">
<p align="center" style="font-size:24px">
Reporte de Alumnos<br>
</p>
</td>
<td width=30%>Fecha: '.$fecha.'</td>
</tr>
</table>

<table width=100%>
<tr>
<th>N°</th>
<th>Cédula</th>
<th>Nombres</th>
<th>Apellidos</th>
</tr>';
while ($row = mysql_fetch_array($result)){
$html.='
<tr>
<td align="center">'.$row['id_alumno'].'</td>
<td align="center">'.$row['cedula_alumno'].'</td>
<td align="center">'.$row['nombres_alumno'].'</td>
<td align="center">'.$row['apellidos_alumno'].'</td>
</tr>
';}
$html.='
</table>
</body>
</html>';
$html = mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8');

# Instanciamos un objeto de la clase DOMPDF.
$mipdf = new DOMPDF();

# Definimos el tamaño y orientación del papel que queremos.
# O por defecto cogerá el que está en el fichero de configuración.
$mipdf ->set_paper("letter", "portrait");

# Cargamos el contenido HTML.
$mipdf ->load_html(utf8_decode($html));

# Renderizamos el documento PDF.
$mipdf ->render();

# Enviamos el fichero PDF al navegador.
$mipdf ->stream('Reporte Alumnos.pdf');
?>
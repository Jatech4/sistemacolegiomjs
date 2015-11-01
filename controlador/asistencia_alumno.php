<?php
include_once "../modelo/conexion.php";
require_once "../dompdf/dompdf_config.inc.php";
$sql=$_POST['consulta'];
$result=mysql_query($sql);

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
<p align="center" style="font-size:24px">
Reporte de Asistencias e Inasistencias<br>
</p>
<table width=100%>
<tr>
<th>Nombre</th>
<th>Año Escolar</th>
<th>Momento</th>
<th>Asistencias</th>
<th>Inasistencias</th>
</tr>';
while ($row = mysql_fetch_array($result)){
$html.='
<tr>
<td rowspan="4" style="vertical-align:middle" align="center">'.$row["nombres_alumno"].' '.$row["apellidos_alumno"].'</td>
<td rowspan="4" style="vertical-align:middle" align="center">'.$row['ano_escolar'].'</td>
<td align="center">I</td>
<td align="center">'.$row["asistencias_momento1"].'</td>
<td align="center">'.$row["inasistencias_momento1"].'</td>
</tr>
<tr>
<td align="center">II</td>
<td align="center">'.$row["asistencias_momento2"].'</td>
<td align="center">'.$row["inasistencias_momento2"].'</td>
</tr>
<tr>
<td align="center">III</td>
<td align="center">'.$row["asistencias_momento3"].'</td>
<td align="center">'.$row["inasistencias_momento3"].'</td>
</tr>
<tr>
<td align="center">IV</td>
<td align="center">'.$row["asistencias_momento4"].'</td>
<td align="center">'.$row["inasistencias_momento4"].'</td>
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
$mipdf ->stream('Reporte Asistencia Alumnos.pdf');
?>
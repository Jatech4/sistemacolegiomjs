<?php
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
Reporte Asistencias / Inasistencias<br>
</p>
</td>
<td width=30%>Fecha: '.$fecha.'</td>
</tr>
</table>
<table width=100%>
<tr>
<th>N°</th>
<th>Nombres y Apellidos</th>
<th>Momento</th>
<th>Asistencias</th>
<th>Inasistencias</th>
</tr>';
$i=1;
while ($row = mysql_fetch_array($result)){
$html.='
<tr>
<td>'.$i.'</td>
<td rowspan="4" style="vertical-align:middle" align="center">'.$row["nombres_alumno"].' '.$row["apellidos_alumno"].'</td>
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
';
$i++;
}
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
<?php
include_once "validasesion.php";
include_once "../modelo/conexion.php";
require_once '../dompdf/dompdf_config.inc.php';
$id=$_GET['boletin'];

if(isset($_GET['boletin'])) 
{
$result_boletin_select=mysql_query("SELECT * FROM boletines a, alumnos b, ano_escolar c, docentes d, representantes e WHERE a.id_alumno=b.id_alumno AND a.id_representante=e.id_representante AND a.id_docente=d.id_docente AND a.ano_escolar=c.id_ano_escolar AND a.id_boletin=".$id."");
$row_boletin=mysql_fetch_array($result_boletin_select);
//$fec_nac_alumno=date_format($row_boletin['fecha_nac_alumno'], 'd-m-Y');
}
$html='
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Ejemplo de Documento en PDF.</title>
</head>
<body>

<table width=100%>
<tr>
<td width=15% valign="top"><img src="../vista/img/logo_escuela.png" alt="Mart&iacute;n Jos&eacute; Sanabria" height="125" width="125"></td>
<td width=70%><p align="center">
Rep&uacute;blica Bolivariana de Venezuela<br>
Ministerio del Poder Popular para la Educaci&oacute;n<br>
Unidad Educativa Integral Bolivariana<br>
"Mart&iacute;n Jos&eacute; Sanabria"<br>
Zona Educativa N&deg;1 / Distrito Capital<br>
Distrito Escolar N&deg;5 / Parroquia 23 de Enero<br>
C&oacute;digo DEA: 0D03570105<br>
Blog: martinjosesanabria.blogspot.com<br>
Telf. 0212-7416353<br>
Caracas - Venezuela<br>
</p></td>
<td width=15%></td>
<td></td>
</tr>
<tr>
<td><br style="line-height:150px" />&nbsp;</td>
</tr>
<tr>
<th colspan="3">
<p align="center" style="font-size:24px">
Bolet&iacute;n Informativo<br>
A&ntilde;o Escolar '.$row_boletin['ano_escolar'].'
</p>
</th>
</tr>
</table>

<table border="1" width="20%" align="center">
<tr>
<td><br style="line-height:120px" />&nbsp;</td>
</tr>
</table>

<p align="center">Foto</p>

<table width=100%>
<tr>
<td><br style="line-height:20px" />&nbsp;</td>
</tr>
<tr>
<th align="left" colspan="2">Estudiante:</th>
</tr>
<tr>
<th align="left">Nombres:</th><td>'.$row_boletin['nombres_alumno'].'</td>
<th align="left">Apellidos:</th><td>'.$row_boletin['apellidos_alumno'].'</td>
</tr>
<tr>
<td align="left" colspan="2"><b>Grado: </b>'.$row_boletin['grado'].' <b>Secci&oacute;n: </b>'.$row_boletin['seccion'].'</td>
</tr>
<tr>
<td align="left" colspan="2"><b>Edad: </b>'.$row_boletin['edad_alumno'].' <b>Sexo: </b>'.$row_boletin['sexo_alumno'].'</td>
</tr>
<tr>
<td align="left" colspan="2"><b>Lugar y Fecha de Nacimiento: </b>'.$row_boletin['lugar_nac_alumno'].' '.$row_boletin['fecha_nac_alumno'].'</td>
</tr>
<tr>
<td align="left" colspan="2"><b>Turno: </b>'.$row_boletin['turno_alumno'].'</td>
</tr>
<tr>
<td align="left" colspan="2"><b>Docente: </b>'.$row_boletin['nombre_docente'].'</td>
</tr>
<tr>
<td align="left"><b>Representante: </b>'.$row_boletin['nombre_representante'].'</td>
<td align="left"><b>C.I: </b>'.$row_boletin['ci_representante'].'</td>
</tr>
</table

</body>
</html>';
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
$mipdf ->stream('FicheroEjemplo.pdf');
?>
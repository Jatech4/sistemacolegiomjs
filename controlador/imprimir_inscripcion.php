<?php
include_once "validasesion.php";
include_once "../modelo/conexion.php";
require_once '../dompdf/dompdf_config.inc.php';
$id=$_GET['alumno'];

if(isset($_GET['alumno']))
{
$result_boletin_select=mysql_query("SELECT * FROM boletines a, alumnos b, ano_escolar c, docentes d, representantes e WHERE a.id_alumno=b.id_alumno AND a.id_representante=e.id_representante AND a.id_docente=d.id_docente AND a.ano_escolar=c.id_ano_escolar AND a.id_boletin=".$id."");
$row_boletin=mysql_fetch_array($result_boletin_select);
//$fec_nac_alumno=date_format($row_boletin['fecha_nac_alumno'], 'd-m-Y');
}
$html='
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style>
.page { page-break-before:always; }
</style>
<title>Inscripcion Alumno</title>
</head>
<body>

<!-- Pagina 1 del PDF-->
<div class="page-first">
<table width=100% cellspacing=15>
<tr>
<td align="left" width="70%" height="80">
REP&Uacute;BLICA BOLIVARIANA DE VENEZUELA <br>
MINISTERIO DEL PODER POPULAR PARA LA EDUCACI&Oacute;N <br>
U.E.N.I.B "MART&Iacute;N J SANABRIA" <br>
PARROQUIA 23 DE ENERO <br>
</td>
<td style="border-width: 1px;border: solid; border-color: black;"  width="15%"></td>
<td style="border-width: 1px;border: solid; border-color: black;"  width="15%"></td>
</tr>
<tr>
<td></td>
<td align="center"><b>Alumno</b></td>
<td align="center"><b>Representante</b></td>
</tr>
</table>

<table width=100% border=0>
<tr>
<td align="center" colspan="3"><b>Ficha de Inscripci&oacute;n</b></td>
</tr>
<tr>
<td align="left" colspan="3"><b>N&uacute;mero de Socio: </b></td>
</tr>
<tr>
<td colspan="3"><b>A.- Datos Personales del Alumno: </b></td>
</tr>
<tr>
<td colspan="3">Apellidos y Nombres: </td>
</tr>
<tr>
<td>C. I.: </td><td colspan="2">Fecha de Nacimiento: </td>
</tr>
<tr>
<td>Lugar de Nacimiento: </td><td>Edad: </td><td>Sexo: </td>
</tr>
<tr>
<td colspan="3">Direcci&oacute;n: </td
</tr>
<tr>
<td>Tlfn. 1: </td>
<td>Tlfn. 2: </td>
<td>Tlfn. 3: </td>
</tr>
<tr>
<td colspan="3"><b>B.- Datos de Procedencia: </b></td>
</tr>
<tr>
<td colspan="3">Condicion Academica:</td>
</tr>
<tr>
<td>Ultimo Grado Cursado: </td>
<td>Aprobado:  ( ) Aplazado:  ( ) </td>
<td>Literal Alcanzado: ( )</td>
</tr>
<tr>
<td colspan="3">Documentos Presentados: </td>
</tr>
<tr>
<td>Boleta / Promoci&oacute;n: ( )</td>
<td>Carta / Buena Conducta:  ( )</td>
<td>Copia / Partida Nacimiento ( )</td>
</tr>
<tr>
<td>3 Fotos / Alumno: ( )</td>
<td>2 Fotos / Representante: ( )</td>
<td>C. I. Representante: ( )</td>
</tr>
<tr>
<td colspan="3"><b>C.- Datos del Representante: </b></td>
</tr>
<tr>
<td colspan="3">Parentesco: </td>
</tr>
<tr>
<td colspan="2">Nombre y Apellido: </td>
<td>C. I.: </td>
</tr>
<tr>
<td>Nacionalidad: </td>
<td colspan="2">Edad: </td>
</tr>
<tr>
<td>Tlfn. 1: </td>
<td colspan="2">Tlfn. 2: </td>
</tr>
<tr>
<td colspan="3">Condici&oacute;n Socio Econ&oacute;mica: </td>
</tr>
<tr>
<td colspan="3">Ocupaci&oacute;n: </td>
</tr>
<tr>
<td>Lugar de Trabajo </td>
<td>Tlfn. :</td>
<td>Sueldo: </td>
</tr>
<tr>
<td>Vive con el Alumno: Si ( )  No ( )</td>
<td colspan="2">En caso negativo explique: </td>
</tr>
<tr>
<td colspan="3"><b>D.- Situaci&oacute;n  Econ&oacute;mica Del N&uacute;cleo Familiar Del Alumno: </b></td>
</tr>
<tr>
<td>Tipo de Vivienda: </td><td>Condici&oacute;n de la Vivienda</td><td>Personas que conviven con el Alumno: </td>
</tr>
<tr>
<td>Ingreso Aproximado al Hogar: </td>
<td>Hermanos:  Hermanas:  </td>
<td>Lugar que ocupa entre ellos: </td>
</tr>
<tr>
<td colspan="3">&iquest;Estudian en el Plantel?: </td>
</tr>
<tr>
<td colspan="3"><b>E.- Aspectos de Salud del Alumno: </b></td>
</tr>
<tr>
<td>Vacunas que posee: </td>
<td colspan="2">Triple ( ) Bcg ( ) Polio ( ) Hepatitis B ( ) Meningitis ( )</td>
</tr>
<tr>
<td>&iquest;Es Asm&aacute;tico?:  &iquest;Es Diab&eacute;tico?: </td>
<td colspan="2">&iquest;Es Al&eacute;rgico?:   A: </td>
</tr>
<tr>
<td colspan="2">&iquest;Tiene Control M&eacute;dico Peri&oacute;dico?:  </td><td>&iquest;Donde? </td>
</tr>
<tr>
<td colspan="3">&iquest;Medicamento que le suministra en caso de fiebre?: </td>
</tr>
<tr>
<td colspan="3">&iquest;Posee Alguna Dificultad?: </td>
</tr>
<tr>
<td>&iquest;Ha sido intervenido Quir&uacute;rgicamente? </td><td colspan="2">&iquest;Alguna vez ha sido referido al Psic&oacute;logo?</td>
</tr>
<tr>
<td colspan="3">Razones &mdash; Referencias:</td>
</tr>
<tr>
<td colspan="3">&iquest;Tiene Impedimento Para Realizar Educ. Física Y Deportes?: </td>
</tr>
</table

</div>
<!-- Fin Pagina 1 del PDF-->
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
$mipdf ->stream('Inscripcion.pdf');
?>
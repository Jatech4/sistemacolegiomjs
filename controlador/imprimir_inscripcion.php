<?php
//include_once "validasesion.php";
include_once "../modelo/conexion.php";
require_once '../dompdf/dompdf_config.inc.php';
$id=$_GET['alumno'];
mysql_set_charset('utf8');
if(isset($_GET['alumno']))
{
$result_inscripcion_select=mysql_query("SELECT * FROM alumnos a, procedencia_alumno b, documentos_presentados c, situacion_economica d, salud_alumno e WHERE a.id_alumno=b.id_alumno AND a.id_alumno=c.id_alumno AND a.id_alumno=d.id_alumno AND a.id_alumno=e.id_alumno AND a.id_alumno=".$id."");
$row_inscripcion=mysql_fetch_array($result_inscripcion_select);
$result_representantes_select=mysql_query("SELECT * FROM representantes WHERE id_alumno=".$id."");

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
<td align="left" colspan="3"><b>N&uacute;mero de Socio: </b> '.$id.' </td>
</tr>
<tr>
<td colspan="3"><b>A.- Datos Personales del Alumno: </b></td>
</tr>
<tr>
<td colspan="3">Apellidos y Nombres: '.$row_inscripcion["apellidos_alumno"].' '.$row_inscripcion["nombres_alumno"].'</td>
</tr>
<tr>
<td>C. I.: '.$row_inscripcion["cedula_alumno"].'</td><td colspan="2">Fecha de Nacimiento: '.$row_inscripcion["fecha_nac_alumno"].'</td>
</tr>
<tr>
<td>Lugar de Nacimiento: '.$row_inscripcion["lugar_nac_alumno"].'</td><td>Edad: '.$row_inscripcion["edad_alumno"].'</td><td>Sexo: '.$row_inscripcion["sexo_alumno"].'</td>
</tr>
<tr>
<td colspan="3">Direcci&oacute;n: '.$row_inscripcion["direccion_alumno"].'</td
</tr>
<tr>
<td>Tlfn. 1: '.$row_inscripcion["tlf1_alumno"].'</td>
<td>Tlfn. 2: '.$row_inscripcion["tlf2_alumno"].'</td>
<td>Tlfn. 3: '.$row_inscripcion["tlf3_alumno"].'</td>
</tr>
<tr>
<td colspan="3"><b>B.- Datos de Procedencia: </b></td>
</tr>
<tr>
<td colspan="3">Plantel de Procedencia: '.$row_inscripcion["plantel_procedencia"].'</td>
</tr>
<tr>
<td>Ultimo Grado Cursado: '.$row_inscripcion["ultimo_grado"].'</td>
<td>&iquest;Aprobado?:  '.$row_inscripcion["aprobado"].'</td>
<td>Literal Alcanzado: ( )</td>
</tr>
<tr>
<td colspan="3">Documentos Presentados: </td>
</tr>
<tr>
<td>Boleta / Promoci&oacute;n: '.$row_inscripcion["boleta_promocion"].'</td>
<td>Carta / Buena Conducta: '.$row_inscripcion["carta_conducta"].'</td>
<td>Copia / Partida Nacimiento '.$row_inscripcion["partida_nacimiento"].'</td>
</tr>
<tr>
<td>3 Fotos / Alumno: '.$row_inscripcion["fotos_alumno"].'</td>
<td>2 Fotos / Representante: '.$row_inscripcion["fotos_representante"].'</td>
<td>C. I. Representante: '.$row_inscripcion["ci_representante"].'</td>
</tr>
<tr>
<td colspan="3"><b>C.- Datos del Representante(s): </b></td>
</tr>';
$i=1;
while ($row = mysql_fetch_array($result_representantes_select)){
$html.='<tr>
<td colspan="3">'.$i.'.-Parentesco: '.$row["tipo_representante"].'</td>
</tr>
<tr>
<td colspan="2">Nombre y Apellido: '.$row["nombre_representante"].'</td>
<td>C. I.: </td>
</tr>
<tr>
<td>Nacionalidad: '.$row["nacionalidad_representante"].'</td>
<td colspan="2">Edad: '.$row["edad_representante"].'</td>
</tr>
<tr>
<td>Tlfn. 1: '.$row["tlfn1_representante"].'</td>
<td colspan="2">Tlfn. 2: '.$row["tlfn2_representante"].'</td>
</tr>
<tr>
<td colspan="3">Condici&oacute;n Socio Econ&oacute;mica:</td>
</tr>
<tr>
<td colspan="3">Ocupaci&oacute;n: '.$row["ocupacion_representante"].'</td>
</tr>
<tr>
<td>Lugar de Trabajo '.$row["lugar_trabajo_representante"].'</td>
<td>Tlfn. : '.$row["tlfn_lugar_trabajo_representante"].'</td>
<td>Sueldo: '.$row["sueldo_representante"].'</td>
</tr>
<tr>
<td>Vive con el Alumno: '.$row["vive_con_alumno"].'</td>
<td colspan="2">En caso negativo explique: '.$row["observacion_vive_con_alumno"].'</td>
</tr><br>';
$i++;
}

$html.='<tr>
<td colspan="3"><b>D.- Situaci&oacute;n  Econ&oacute;mica Del N&uacute;cleo Familiar Del Alumno: </b></td>
</tr>
<tr>
<td>Tipo de Vivienda: '.$row_inscripcion["tipo_vivienda"].'</td><td>Condici&oacute;n de la Vivienda: '.$row_inscripcion["condicion_vivienda"].'</td><td>Personas que conviven con el Alumno: '.$row_inscripcion["personas_vivienda"].'</td>
</tr>
<tr>
<td>Ingreso Aproximado al Hogar: '.$row_inscripcion["ingreso_vivienda"].'</td>
<td>Hermanos: '.$row_inscripcion["cantidad_hermanos"].' Hermanas: '.$row_inscripcion["cantidad_hermanas"].'</td>
<td>Lugar que ocupa entre ellos: '.$row_inscripcion["lugar_hermanos"].'</td>
</tr>
<tr>
<td colspan="3">&iquest;Estudian en el Plantel?: '.$row_inscripcion["estudian_hermanos"].'</td>
</tr>
<tr>
<td colspan="3"><b>E.- Aspectos de Salud del Alumno: </b></td>
</tr>
<tr>
<td>Vacunas que posee: </td>
<td colspan="2">Triple: '.$row_inscripcion["vacuna_triple"].' Bcg: '.$row_inscripcion["vacuna_bcg"].' Polio: '.$row_inscripcion["vacuna_polio"].' Hepatitis B: '.$row_inscripcion["vacuna_hepab"].' Meningitis: '.$row_inscripcion["vacuna_meningitis"].'</td>
</tr>
<tr>
<td>&iquest;Es Asm&aacute;tico?: '.$row_inscripcion["asmatico"].' &iquest;Es Diab&eacute;tico?: '.$row_inscripcion["diabetico"].'</td>
<td colspan="2">&iquest;Es Al&eacute;rgico?: '.$row_inscripcion["alergico"].'  A: '.$row_inscripcion["observacion_alergia"].'</td>
</tr>
<tr>
<td colspan="2">&iquest;Tiene Control M&eacute;dico Peri&oacute;dico?:  '.$row_inscripcion["control_medico"].'</td><td>&iquest;Donde? '.$row_inscripcion["observacion_control"].'</td>
</tr>
<tr>
<td colspan="3">&iquest;Medicamento que le suministra en caso de fiebre?: '.$row_inscripcion["suministro_fiebre"].'</td>
</tr>
<tr>
<td colspan="3">&iquest;Posee Alguna Dificultad?: '.$row_inscripcion["tipo_dificultad"].'</td>
</tr>
<tr>
<td>&iquest;Ha sido intervenido Quir&uacute;rgicamente?: '.$row_inscripcion["operacion"].'</td><td colspan="2">&iquest;Alguna vez ha sido referido al Psic&oacute;logo?: '.$row_inscripcion["psicologo"].'</td>
</tr>
<tr>
<td colspan="3">Razones &mdash; Referencias: '.$row_inscripcion["observaciones_psicopedagogo"].'</td>
</tr>
<tr>
<td colspan="3">&iquest;Tiene Impedimento Para Realizar Educ. Física Y Deportes?: '.$row_inscripcion["impedimento_fisico"].'</td>
</tr>
</table

</div>
<!-- Fin Pagina 1 del PDF-->
<!-- Pagina 2 del PDF-->
<div class="page">
<table>
<tr>
<td colspan="3"><b>Compromisos y Otros:</b></td>
</tr>
<tr>
<td colspan="3">
<p align="justify">
Yo, __________________________________________ Titular De La Cedula De Identidad Nº ____________________________, Como Representante Del Alumno: <b>'.$row_inscripcion["apellidos_alumno"].' '.$row_inscripcion["nombres_alumno"].'</b>, Me Comprometo A Cumplir Y Respetar Las Siguientes Normas Que Establece La Escuela Bolivariana “Martín J Sanabria”.
<br>
1.-La jornada escolar  es de 7:30 am hasta las 3:30 pm  el alumno (a) debe cumplirla en caso de no poder, el representante debe envía previamente una autorización por escrito al docente
<br>
2.- Velar porque su representado (a) asista a la institución con el uniforme escolar: camisa o chemisse blanca con su insignia, pantalón azul marino, zapatos negros para Educ. Física  la franela blanca con el logo de la institución y mono azul de educación física
<br>
3.-Evitar que el alumno (a) asista a la institución con zapatos de marca, chaquetas, botas, gorras, tacones, maquillaje, tintes,  piercing, celular y otros objeto de valor <b>(La institución no se hace responsable por la pérdida de los objetos de valor)</b>  Los Varones  no deben asistir con cabello largo.
<br>
4 Los retardos serán tomados a partir de las 7:40  en la hora de entrada  y en  la  hora de salida 3:45pm será  responsabilidad  de su representante.
<br>
5.-Los Alumnos y Alumnas que incurra en falta leve o grave su representante debe venir a la citación y firmar el libro de vida del alumnos de lo contrario no será recibido
<br>
6.-  De las sanciones se ejercerá de acuerdo a la LOPNA
<br>
7.- Responsabilizarse de dejar a su representado (a) en la puerta de la institución a fin de informarle de cualquier eventualidad que suceda.
<br>
8.- Entrevistarse periódicamente con el docente de su representado para mantenerse informado de su actuación escolar, asegurándose de asistir cuando al grupo le correspondan las actividades de educ. Física, música, taller, folklore, otros o cuando sea citado por el docente evitando así perturbar las actividades regulares del aula.
<br>
9.- Los Representante deben atender a las citaciones, reuniones que les realicen los docentes y el personal Directivo del plantel, así como presentar los recaudos que se le soliciten.
<br>
10.- Subsanar los daños al mobiliario (mesas, sillas, libros, otros, rayar paredes, daño a las instalaciones sanitarias, romper vidrios y lámparas) que ocasione su representado por hacer uso indebido de los mismos.
<br>
11.- Los  alumnos que sea remitidos a exámenes  por parte del Departamento de Psicopedagogía debe notificar por escrito los resultados y atender a las observaciones  realizadas por los docentes.
<br>
12.- Los niños que presente conducta no acorde con los establecido en la Normativa de convivencia, debe ser remitido al órgano ejecutor (Defensora de los Derechos del Niños, niñas y Adolescentes)  PARA SU REPECTIVA SANCION.
<br>
13.- Todo niños y niñas inscripto en escuela Bolivariana debe ingerir los alimento suministrados en la institución, en caso de no poder traer por dirección su justificativo
</p>
</td>
</tr>
</table>
<table align="center">
<tr>
<td><br style="line-height:50px" />&nbsp;</td>
</tr>
<tr>
<td align="center">'.$id.'</td>
<td align="center">________________</td>
<td align="center">________________</td>
<td align="center">________________</td>
<td align="center">___________</td>
</tr>
<tr>
<td align="center">N° de Socio</td>
<td align="center">Año Escolar</td>
<td align="center">Firma del Representante</td>
<td align="center">Firma del Docente</td>
<td align="center">Grado</td>
</tr>
</table
</div>
<!-- Fin Pagina 2 del PDF-->
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
$mipdf ->stream('Inscripcion.pdf');
?>
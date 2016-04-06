<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";

$sql="SELECT id_alumno FROM alumnos WHERE cedula_alumno='$cedula_alumno'";

//Datos¨Personales del Alumno
$nombres_alumno=$_POST['nombres_alumno'];
$apellidos_alumno=$_POST['apellidos_alumno'];
$nacionalidad=$_POST['nacionalidad'];
$cedula_alumno=$_POST['cedula_alumno'];
$cedula_propia=$_POST['cedula_propia'];
$edad_alumno=$_POST['edad_alumno'];
$sexo_alumno=$_POST['sexo_alumno'];
$lugar_nac_alumno=$_POST['lugar_nac_alumno'];
$fecha_nac_alumno=$_POST['fecha_nac_alumno'];
$direccion_alumno=$_POST['direccion_alumno'];
$tlf1_alumno=$_POST['tlf1_alumno'];
$tlf2_alumno=$_POST['tlf2_alumno'];
$tlf3_alumno=$_POST['tlf3_alumno'];
$tlf3_alumno=$_POST['tlf3_alumno'];
$rec_medico=$_POST['rec_medico'];

$sql="SELECT id_alumno FROM alumnos WHERE cedula_alumno='$cedula_alumno'";
$result = mysql_query($sql);
$num= mysql_num_rows($result);

if($num>0){
?>
 <script languaje="javascript">
  alert("\u00A1Alumno ya se encuentra registrado\u0021");
  location.href = "../vista/agregar_alumno.php";
 </script>
 <?php
}else{
$sql="INSERT INTO alumnos(nacionalidad, cedula_alumno, cedula_propia, nombres_alumno, apellidos_alumno, edad_alumno, sexo_alumno, lugar_nac_alumno, fecha_nac_alumno, direccion_alumno, tlf1_alumno, tlf2_alumno, tlf3_alumno, rec_medico) VALUES ('$nacionalidad', '$cedula_alumno','$cedula_propia','$nombres_alumno','$apellidos_alumno','$edad_alumno','$sexo_alumno','$lugar_nac_alumno','$fecha_nac_alumno','$direccion_alumno','$tlf1_alumno','$tlf2_alumno','$tlf3_alumno', '$rec_medico')";
$result = mysql_query($sql);
echo mysql_error();

//Ubicamos el ID del alumno
$sql="SELECT id_alumno FROM alumnos WHERE cedula_alumno='$cedula_alumno'";
$result = mysql_query($sql);
echo mysql_error();
$row = mysql_fetch_array($result);
$id_alumno=$row['id_alumno'];

//Datos Procedencia
$plantel_procedencia=$_POST['plantel_procedencia'];
$ultimo_grado=$_POST['ultimo_grado'];
$status_ult_plantel=$_POST['status_ult_plantel'];

$sql="INSERT INTO procedencia_alumno(id_alumno, plantel_procedencia, ultimo_grado, aprobado) VALUES ($id_alumno,'$plantel_procedencia','$ultimo_grado','$status_ult_plantel')";
$result = mysql_query($sql);
echo mysql_error();

//Documentos Presentados
$carta_conducta=$_POST['carta_conducta'];
$boleta_promocion=$_POST['boleta_promocion'];
$fotos_alumno=$_POST['fotos_alumno'];
$fotos_representante=$_POST['fotos_representante'];
$ci_representante=$_POST['ci_representante'];
$partida_nacimiento=$_POST['partida_nacimiento'];

$sql="INSERT INTO documentos_presentados(id_alumno, boleta_promocion, carta_conducta, fotos_alumno, fotos_representante, ci_representante,partida_nacimiento) VALUES ($id_alumno,'$boleta_promocion','$carta_conducta','$fotos_alumno','$fotos_representante','$ci_representante','$partida_nacimiento')";
$result = mysql_query($sql);
echo mysql_error();

//Situacion Economica
$tipo_vivienda=$_POST['tipo_vivienda'];
$condicion_vivienda=$_POST['condicion_vivienda'];
$personas_vivienda=$_POST['personas_vivienda'];
$abuelos_vivienda=$_POST['abuelos_vivienda'];
$ingreso_vivienda=$_POST['ingreso_vivienda'];
$cantidad_hermanas=$_POST['cantidad_hermanas'];
$cantidad_hermanos=$_POST['cantidad_hermanos'];
$lugar_ocu_alumno=$_POST['lugar_ocu_alumno'];
$estudian_hermanos=$_POST['estudian_hermanos'];

$sql="INSERT INTO situacion_economica(id_alumno, tipo_vivienda, condicion_vivienda, personas_vivienda, abuelos_vivienda, ingreso_vivienda, cantidad_hermanas, cantidad_hermanos, lugar_hermanos, estudian_hermanos) VALUES ($id_alumno,'$tipo_vivienda','$condicion_vivienda','$personas_vivienda','$abuelos_vivienda','$ingreso_vivienda','$cantidad_hermanas','$cantidad_hermanos','$lugar_ocu_alumno','$estudian_hermanos')";
$result = mysql_query($sql);
echo mysql_error();

//Aspectos de Salud del Alumno
$vacuna_triple=$_POST['vacuna_triple'];
$vacuna_bcg=$_POST['vacuna_bcg'];
$vacuna_polio=$_POST['vacuna_polio'];
$vacuna_hepab=$_POST['vacuna_hepab'];
$vacuna_meningitis=$_POST['vacuna_meningitis'];
$asmatico=$_POST['asmatico'];
$diabetico=$_POST['diabetico'];
$alergico=$_POST['alergico'];
$observacion_alergia=$_POST['observacion_alergia'];
$control_medico=$_POST['control_medico'];
$observacion_control=$_POST['observacion_control'];
$suministro_fiebre=$_POST['suministro_fiebre'];
$tipo_dificultad=$_POST['tipo_dificultad'];
$operacion=$_POST['operacion'];
$psicologo=$_POST['psicologo'];
$psicopedagogo=$_POST['psicopedagogo'];
$observaciones_psicopedagogo=$_POST['observaciones_psicopedagogo'];
$impedimento_fisico=$_POST['impedimento_fisico'];
$observacion_impedimento=$_POST['observacion_impedimento'];

$sql="INSERT INTO salud_alumno(id_alumno, vacuna_triple, vacuna_bcg, vacuna_polio, vacuna_hepab, vacuna_meningitis, asmatico, diabetico, alergico, observacion_alergia, control_medico, observacion_control, suministro_fiebre, tipo_dificultad, operacion, psicologo, psicopedagogo, observaciones_psicopedagogo, impedimento_fisico, observacion_impedimento) VALUES ($id_alumno,'$vacuna_triple','$vacuna_bcg','$vacuna_polio','$vacuna_hepab','$vacuna_meningitis','$asmatico','$diabetico','$alergico','$observacion_alergia','$control_medico','$observacion_control','$suministro_fiebre','$tipo_dificultad','$operacion','$psicologo','$psicopedagogo','$observaciones_psicopedagogo','$impedimento_fisico','$observacion_impedimento')";
$result = mysql_query($sql);
echo mysql_error();
mysql_close();
?>
 <script languaje="javascript">
  alert("\u00A1Alumno Registrado\u0021");
  location.href = "../vista/agregar_alumno.php";
 </script>
 <?php
 }
 ?>
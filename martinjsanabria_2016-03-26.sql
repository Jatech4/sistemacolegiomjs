-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2016 at 03:50 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `martinjsanabria`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `id_alumno` int(11) NOT NULL AUTO_INCREMENT,
  `cedula_alumno` varchar(10) NOT NULL,
  `cedula_propia` varchar(2) NOT NULL COMMENT 'Indica si la celdula pertenece al alumno o al representante',
  `nombres_alumno` varchar(50) NOT NULL,
  `apellidos_alumno` varchar(50) NOT NULL,
  `edad_alumno` varchar(2) NOT NULL,
  `sexo_alumno` varchar(1) NOT NULL,
  `lugar_nac_alumno` varchar(50) NOT NULL,
  `fecha_nac_alumno` date NOT NULL,
  `direccion_alumno` varchar(255) NOT NULL,
  `tlf1_alumno` varchar(15) NOT NULL,
  `tlf2_alumno` varchar(15) NOT NULL,
  `tlf3_alumno` varchar(15) NOT NULL,
  `rec_medico` varchar(2) NOT NULL COMMENT 'Si el alumno posee registro medico',
  PRIMARY KEY (`id_alumno`),
  KEY `id_alumno` (`id_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ano_escolar`
--

CREATE TABLE IF NOT EXISTS `ano_escolar` (
  `id_ano_escolar` int(11) NOT NULL AUTO_INCREMENT,
  `ano_escolar` varchar(9) NOT NULL,
  PRIMARY KEY (`id_ano_escolar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bitacora`
--

CREATE TABLE IF NOT EXISTS `bitacora` (
  `id_bitacora` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  PRIMARY KEY (`id_bitacora`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bitacora`
--

INSERT INTO `bitacora` (`id_bitacora`, `id_usuario`, `fecha`) VALUES
(1, 1, '22-03-2016 17:29:57'),
(2, 1, '27-03-2016 01:42:48'),
(3, 1, '27-03-2016 03:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `boletines`
--

CREATE TABLE IF NOT EXISTS `boletines` (
  `id_boletin` int(11) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(11) NOT NULL,
  `id_representante` int(11) NOT NULL,
  `id_docente` int(11) NOT NULL,
  `ano_escolar` int(11) NOT NULL,
  `grado` varchar(3) NOT NULL,
  `seccion` varchar(3) NOT NULL,
  `fecha_desde_momento1` date NOT NULL,
  `fecha_hasta_momento1` date NOT NULL,
  `observaciones_gen_momento1` text NOT NULL,
  `recomendaciones_doc_momento1` text NOT NULL,
  `observaciones_alumno_momento1` text NOT NULL,
  `observaciones_rep_momento1` text NOT NULL,
  `dias_hab_momento1` varchar(3) NOT NULL,
  `asistencias_momento1` varchar(3) NOT NULL,
  `inasistencias_momento1` varchar(3) NOT NULL,
  `fecha_momento1` date NOT NULL,
  `fecha_desde_momento2` date NOT NULL,
  `fecha_hasta_momento2` date NOT NULL,
  `proyecto_momento2` text NOT NULL,
  `informe_glob_momento2` text NOT NULL,
  `recomendaciones_doc_momento2` text NOT NULL,
  `observaciones_alumno_momento2` text NOT NULL,
  `observaciones_rep_momento2` text NOT NULL,
  `dias_hab_momento2` varchar(3) NOT NULL,
  `asistencias_momento2` varchar(3) NOT NULL,
  `inasistencias_momento2` varchar(3) NOT NULL,
  `fecha_momento2` date NOT NULL,
  `fecha_desde_momento3` date NOT NULL,
  `fecha_hasta_momento3` date NOT NULL,
  `proyecto_momento3` text NOT NULL,
  `informe_glob_momento3` text NOT NULL,
  `recomendaciones_doc_momento3` text NOT NULL,
  `observaciones_alumno_momento3` text NOT NULL,
  `observaciones_rep_momento3` text NOT NULL,
  `dias_hab_momento3` varchar(3) NOT NULL,
  `asistencias_momento3` varchar(3) NOT NULL,
  `inasistencias_momento3` varchar(3) NOT NULL,
  `fecha_momento3` date NOT NULL,
  `fecha_desde_momento4` date NOT NULL,
  `fecha_hasta_momento4` date NOT NULL,
  `proyecto_momento4` text NOT NULL,
  `informe_glob_momento4` text NOT NULL,
  `recomendaciones_doc_momento4` text NOT NULL,
  `observaciones_alumno_momento4` text NOT NULL,
  `observaciones_rep_momento4` text NOT NULL,
  `dias_hab_momento4` varchar(3) NOT NULL,
  `asistencias_momento4` varchar(3) NOT NULL,
  `inasistencias_momento4` varchar(3) NOT NULL,
  `fecha_momento4` date NOT NULL,
  `literal` varchar(10) NOT NULL,
  `expresa` text NOT NULL,
  `promovido` varchar(2) NOT NULL,
  `grado_superior` varchar(10) NOT NULL,
  `nota_momento1` varchar(1) NOT NULL,
  `nota_momento2` varchar(1) NOT NULL,
  `nota_momento3` varchar(1) NOT NULL,
  `nota_momento4` varchar(1) NOT NULL,
  PRIMARY KEY (`id_boletin`),
  KEY `id_boletin` (`id_boletin`),
  KEY `id_alumno` (`id_alumno`),
  KEY `id_docente` (`id_docente`),
  KEY `id_alumno_boletin` (`id_alumno`),
  KEY `id_docente_boletin` (`id_docente`),
  KEY `id_representante` (`id_representante`),
  KEY `ano_escolar` (`ano_escolar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `canaimas`
--

CREATE TABLE IF NOT EXISTS `canaimas` (
  `id_canaima` int(11) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(11) NOT NULL,
  `serial_canaima` varchar(100) NOT NULL,
  `modelo_canaima` int(11) NOT NULL,
  PRIMARY KEY (`id_canaima`),
  KEY `id_alumno` (`id_alumno`),
  KEY `modelo_canaima` (`modelo_canaima`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `docentes`
--

CREATE TABLE IF NOT EXISTS `docentes` (
  `id_docente` int(11) NOT NULL AUTO_INCREMENT,
  `ci_docente` varchar(10) NOT NULL,
  `nombre_docente` varchar(50) NOT NULL,
  `correo_docente` varchar(25) NOT NULL,
  `tlfn_docente` varchar(15) NOT NULL,
  PRIMARY KEY (`id_docente`),
  KEY `id_docente` (`id_docente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `documentos_presentados`
--

CREATE TABLE IF NOT EXISTS `documentos_presentados` (
  `id_doc_presentados` int(11) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(11) NOT NULL,
  `boleta_promocion` varchar(2) NOT NULL,
  `carta_conducta` varchar(2) NOT NULL,
  `fotos_alumno` varchar(2) NOT NULL,
  `fotos_representante` varchar(2) NOT NULL,
  `ci_representante` varchar(2) NOT NULL,
  `partida_nacimiento` varchar(2) NOT NULL,
  PRIMARY KEY (`id_doc_presentados`),
  KEY `id_doc_presentados` (`id_doc_presentados`),
  KEY `id_alumno` (`id_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fecha_momentos`
--

CREATE TABLE IF NOT EXISTS `fecha_momentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'clave primaria',
  `id_ano_escolar` int(11) NOT NULL COMMENT 'Clave foranea del año escolar',
  `fecha_momento1` varchar(20) NOT NULL COMMENT 'Fecha Momento 1',
  `fecha_momento2` varchar(20) NOT NULL,
  `fecha_momento3` varchar(20) NOT NULL,
  `fecha_momento4` varchar(20) NOT NULL,
  `fecha_momento5` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_ano_escolar` (`id_ano_escolar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Almacena las fecha de cada momento' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `grados`
--

CREATE TABLE IF NOT EXISTS `grados` (
  `id_grado` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave Primaria',
  `grado` varchar(3) NOT NULL,
  PRIMARY KEY (`id_grado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Grados Del Colegio' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `grados`
--

INSERT INTO `grados` (`id_grado`, `grado`) VALUES
(1, '1ro'),
(2, '2do'),
(3, '3ro'),
(4, '4to'),
(5, '5to'),
(6, '6to');

-- --------------------------------------------------------

--
-- Table structure for table `modelos_canaimas`
--

CREATE TABLE IF NOT EXISTS `modelos_canaimas` (
  `id_modelo` int(11) NOT NULL AUTO_INCREMENT,
  `serial_modelo` varchar(100) NOT NULL,
  `nombre_modelo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_modelo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `observaciones_generales`
--

CREATE TABLE IF NOT EXISTS `observaciones_generales` (
  `id_obs` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave Primartia',
  `observacion` varchar(255) NOT NULL,
  PRIMARY KEY (`id_obs`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `observaciones_generales`
--

INSERT INTO `observaciones_generales` (`id_obs`, `observacion`) VALUES
(1, 'Identifica juegos escolares'),
(2, 'Fechas patriotas de nuestro país'),
(3, 'Muestra compromiso en las actividades'),
(4, 'Conoce las normas de higiene en la alimentación');

-- --------------------------------------------------------

--
-- Table structure for table `perfil_usuario`
--

CREATE TABLE IF NOT EXISTS `perfil_usuario` (
  `id_perfil` int(1) NOT NULL,
  `descripcion_perfil` varchar(15) NOT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perfil_usuario`
--

INSERT INTO `perfil_usuario` (`id_perfil`, `descripcion_perfil`) VALUES
(1, 'Administrador'),
(2, 'Profesor');

-- --------------------------------------------------------

--
-- Table structure for table `procedencia_alumno`
--

CREATE TABLE IF NOT EXISTS `procedencia_alumno` (
  `id_procedencia` int(11) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(11) NOT NULL,
  `plantel_procedencia` varchar(50) NOT NULL,
  `ultimo_grado` varchar(15) NOT NULL,
  `aprobado` varchar(2) NOT NULL,
  PRIMARY KEY (`id_procedencia`),
  KEY `id_procedencia` (`id_procedencia`),
  KEY `id_alumno` (`id_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `recomendaciones_estudiante`
--

CREATE TABLE IF NOT EXISTS `recomendaciones_estudiante` (
  `id_rec` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave Primartia',
  `recomendacion` varchar(255) NOT NULL,
  PRIMARY KEY (`id_rec`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `recomendaciones_estudiante`
--

INSERT INTO `recomendaciones_estudiante` (`id_rec`, `recomendacion`) VALUES
(1, 'Se le requiere  continuar realizando dictado y lectura'),
(2, 'Debe mejorar tu comportamiento y bajar el tono de voz'),
(3, 'Debe realizar caligrafía'),
(4, 'Debe reforzar las operaciones básicas y números  naturales'),
(5, 'Debe mostrar interés en las actividades escolares'),
(6, 'Debe continuar mejorando tu comportamiento');

-- --------------------------------------------------------

--
-- Table structure for table `representantes`
--

CREATE TABLE IF NOT EXISTS `representantes` (
  `id_representante` int(11) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(11) NOT NULL,
  `tipo_representante` varchar(20) NOT NULL,
  `nombre_representante` varchar(50) NOT NULL,
  `ci_representante` varchar(10) NOT NULL,
  `nacionalidad_representante` varchar(20) NOT NULL,
  `edad_representante` varchar(3) NOT NULL,
  `fecha_nac_representante` date NOT NULL,
  `tlfn1_representante` varchar(15) NOT NULL,
  `tlfn2_representante` varchar(15) NOT NULL,
  `ocupacion_representante` varchar(50) NOT NULL,
  `lugar_trabajo_representante` varchar(50) NOT NULL,
  `tlfn_lugar_trabajo_representante` varchar(15) NOT NULL,
  `sueldo_representante` varchar(20) NOT NULL,
  `vive_con_alumno` varchar(2) NOT NULL,
  `observacion_vive_con_alumno` varchar(50) NOT NULL,
  PRIMARY KEY (`id_representante`),
  KEY `id_representante` (`id_representante`),
  KEY `id_alumno` (`id_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `salud_alumno`
--

CREATE TABLE IF NOT EXISTS `salud_alumno` (
  `id_salud` int(11) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(11) NOT NULL,
  `vacuna_triple` varchar(2) NOT NULL,
  `vacuna_bcg` varchar(2) NOT NULL,
  `vacuna_polio` varchar(2) NOT NULL,
  `vacuna_hepab` varchar(2) NOT NULL,
  `vacuna_meningitis` varchar(2) NOT NULL,
  `asmatico` varchar(2) NOT NULL,
  `diabetico` varchar(2) NOT NULL,
  `alergico` varchar(2) NOT NULL,
  `observacion_alergia` varchar(50) NOT NULL,
  `control_medico` varchar(2) NOT NULL,
  `observacion_control` varchar(50) NOT NULL,
  `suministro_fiebre` varchar(50) NOT NULL,
  `tipo_dificultad` varchar(15) NOT NULL,
  `operacion` varchar(2) NOT NULL,
  `psicologo` varchar(2) NOT NULL,
  `psicopedagogo` varchar(2) NOT NULL,
  `observaciones_psicopedagogo` varchar(50) NOT NULL,
  `impedimento_fisico` varchar(2) NOT NULL,
  `observacion_impedimento` varchar(50) NOT NULL,
  PRIMARY KEY (`id_salud`),
  KEY `id_salud` (`id_salud`),
  KEY `id_alumno` (`id_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `situacion_economica`
--

CREATE TABLE IF NOT EXISTS `situacion_economica` (
  `id_situacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(11) NOT NULL,
  `tipo_vivienda` varchar(20) NOT NULL,
  `condicion_vivienda` varchar(20) NOT NULL,
  `personas_vivienda` int(2) NOT NULL,
  `abuelos_vivienda` int(1) NOT NULL,
  `ingreso_vivienda` varchar(10) NOT NULL,
  `cantidad_hermanas` int(1) NOT NULL,
  `cantidad_hermanos` int(1) NOT NULL,
  `lugar_hermanos` varchar(20) NOT NULL,
  `estudian_hermanos` varchar(2) NOT NULL,
  PRIMARY KEY (`id_situacion`),
  KEY `id_situacion` (`id_situacion`),
  KEY `id_alumno` (`id_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `status_usuario`
--

CREATE TABLE IF NOT EXISTS `status_usuario` (
  `id_status` int(1) NOT NULL,
  `descripcion_status` varchar(15) NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_usuario`
--

INSERT INTO `status_usuario` (`id_status`, `descripcion_status`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Table structure for table `telefonos_alumno`
--

CREATE TABLE IF NOT EXISTS `telefonos_alumno` (
  `id_telefono` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave Primaria',
  `id_alumno` int(11) NOT NULL COMMENT 'Clave Foranea',
  `telefono` varchar(20) NOT NULL COMMENT 'Numero de telefono del alumno',
  PRIMARY KEY (`id_telefono`),
  KEY `id_alumno` (`id_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Almacena los números de teléfono del alumno' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `telefonos_representantes`
--

CREATE TABLE IF NOT EXISTS `telefonos_representantes` (
  `id_telefono` int(11) NOT NULL COMMENT 'Clave Primaria',
  `id_representante` int(11) NOT NULL COMMENT 'Clave foranea',
  `telefono` varchar(20) NOT NULL COMMENT 'Numero de telefono del prepresentante',
  PRIMARY KEY (`id_telefono`),
  KEY `id_representante` (`id_representante`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Almacena los numeros de telefono de los representante';

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `cedula_usuario` varchar(10) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `login_usuario` varchar(15) NOT NULL,
  `pass_usuario` varchar(15) NOT NULL,
  `status_usuario` int(1) NOT NULL,
  `perfil_usuario` int(1) NOT NULL,
  `email_usuario` varchar(50) NOT NULL,
  `sexo_usuario` varchar(1) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_usuario` (`id_usuario`),
  KEY `perfil_usuario` (`perfil_usuario`),
  KEY `status_usuario` (`status_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `cedula_usuario`, `nombre_usuario`, `login_usuario`, `pass_usuario`, `status_usuario`, `perfil_usuario`, `email_usuario`, `sexo_usuario`) VALUES
(1, '1234567890', 'Administrador', 'admin', 'admin', 1, 1, 'elessar303@gmail.com', 'M');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `boletines`
--
ALTER TABLE `boletines`
  ADD CONSTRAINT `boletines_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `boletines_ibfk_2` FOREIGN KEY (`id_docente`) REFERENCES `docentes` (`id_docente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `boletines_ibfk_3` FOREIGN KEY (`id_representante`) REFERENCES `representantes` (`id_representante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `boletines_ibfk_4` FOREIGN KEY (`ano_escolar`) REFERENCES `ano_escolar` (`id_ano_escolar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `canaimas`
--
ALTER TABLE `canaimas`
  ADD CONSTRAINT `canaimas_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `canaimas_ibfk_2` FOREIGN KEY (`modelo_canaima`) REFERENCES `modelos_canaimas` (`id_modelo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `documentos_presentados`
--
ALTER TABLE `documentos_presentados`
  ADD CONSTRAINT `documentos_presentados_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fecha_momentos`
--
ALTER TABLE `fecha_momentos`
  ADD CONSTRAINT `fecha_momentos_ibfk_1` FOREIGN KEY (`id_ano_escolar`) REFERENCES `ano_escolar` (`id_ano_escolar`);

--
-- Constraints for table `procedencia_alumno`
--
ALTER TABLE `procedencia_alumno`
  ADD CONSTRAINT `procedencia_alumno_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `representantes`
--
ALTER TABLE `representantes`
  ADD CONSTRAINT `representantes_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salud_alumno`
--
ALTER TABLE `salud_alumno`
  ADD CONSTRAINT `salud_alumno_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `situacion_economica`
--
ALTER TABLE `situacion_economica`
  ADD CONSTRAINT `situacion_economica_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `telefonos_alumno`
--
ALTER TABLE `telefonos_alumno`
  ADD CONSTRAINT `id_alumnos_fk` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `telefonos_representantes`
--
ALTER TABLE `telefonos_representantes`
  ADD CONSTRAINT `id_representate_fk` FOREIGN KEY (`id_representante`) REFERENCES `representantes` (`id_representante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`perfil_usuario`) REFERENCES `perfil_usuario` (`id_perfil`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`status_usuario`) REFERENCES `status_usuario` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

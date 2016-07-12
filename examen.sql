-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2016 a las 01:30:10
-- Versión del servidor: 5.7.9
-- Versión de PHP: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caso`
--

DROP TABLE IF EXISTS `caso`;
CREATE TABLE IF NOT EXISTS `caso` (
  `id_caso` int(10) NOT NULL,
  `estado_caso` varchar(20) NOT NULL,
  PRIMARY KEY (`id_caso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comuna`
--

DROP TABLE IF EXISTS `comuna`;
CREATE TABLE IF NOT EXISTS `comuna` (
  `id_comuna` int(11) NOT NULL,
  `comuna` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id_comuna`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comuna`
--

INSERT INTO `comuna` (`id_comuna`, `comuna`) VALUES
(82, 'Colina'),
(83, 'Lampa'),
(84, 'Tiltil'),
(85, 'Pirque'),
(86, 'Puente Alto'),
(87, 'San José de Maipo'),
(88, 'Buin'),
(89, 'Calera de Tango'),
(90, 'Paine'),
(91, 'San Bernardo'),
(92, 'Alhué'),
(93, 'Curacaví'),
(94, 'María Pinto'),
(95, 'Melipilla'),
(96, 'San Pedro'),
(97, 'Cerrillos'),
(98, 'Cerro Navia'),
(99, 'Conchalí'),
(100, 'El Bosque'),
(101, 'Estación Central'),
(102, 'Huechuraba'),
(103, 'Independencia'),
(104, 'La Cisterna'),
(105, 'La Granja'),
(106, 'La Florida'),
(107, 'La Pintana'),
(108, 'La Reina'),
(109, 'Las Condes'),
(110, 'Lo Barnechea'),
(111, 'Lo Espejo'),
(112, 'Lo Prado'),
(113, 'Macul'),
(114, 'Maipú'),
(115, 'Ñuñoa'),
(116, 'Pedro Aguirre Cerda'),
(117, 'Peñalolén'),
(118, 'Providencia'),
(119, 'Pudahuel'),
(120, 'Quilicura'),
(121, 'Quinta Normal'),
(122, 'Recoleta'),
(123, 'Renca'),
(124, 'San Miguel'),
(125, 'San Joaquín'),
(126, 'San Ramón'),
(127, 'Santiago'),
(128, 'Vitacura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulante`
--

DROP TABLE IF EXISTS `postulante`;
CREATE TABLE IF NOT EXISTS `postulante` (
  `rut_post` varchar(10) NOT NULL,
  `nombre_post` varchar(30) NOT NULL,
  `apepaterno_post` varchar(30) NOT NULL,
  `apematerno_post` varchar(30) NOT NULL,
  `fechanac_post` varchar(10) NOT NULL,
  `sexo_post` char(1) NOT NULL,
  `telefono_post` int(9) NOT NULL,
  `email_post` varchar(50) NOT NULL,
  `direccion_post` varchar(50) NOT NULL,
  `comuna` varchar(50) NOT NULL,
  `educacion_post` varchar(50) NOT NULL,
  `experiencia_post` varchar(50) NOT NULL,
  `modalidad_post` varchar(50) NOT NULL,
  `curso_post` varchar(50) NOT NULL,
  PRIMARY KEY (`rut_post`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `postulante`
--

INSERT INTO `postulante` (`rut_post`, `nombre_post`, `apepaterno_post`, `apematerno_post`, `fechanac_post`, `sexo_post`, `telefono_post`, `email_post`, `direccion_post`, `comuna`, `educacion_post`, `experiencia_post`, `modalidad_post`, `curso_post`) VALUES
('15445719-4', 'SEBASTIAN', 'ROJAS', 'IBAÃ‘EZ', '04/03/1983', 'H', 76702960, 'sebastian193@gmail.com', 'PIELAGOS DEL SUR 1878', 'La Florida', 'TÃ©cnico', 'si', 'Vespertina', 'PHP'),
('15448129-K', 'REM', 'ROJ', 'INEZ', '11/11/1986', 'H', 954160717, 'sebastian193@gmail.com', 'PIELAGOS DEL SUR 1878', 'La Pintana', 'Profecional', 'si', 'Diurna', 'Net');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `rut_usuario` varchar(10) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `apepaterno_usuario` varchar(50) NOT NULL,
  `apematerno_usuario` varchar(50) DEFAULT NULL,
  `pass_user` varchar(10) NOT NULL,
  `reppass_user` varchar(10) NOT NULL,
  `nivel_acceso` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`rut_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`rut_usuario`, `nombre_usuario`, `apepaterno_usuario`, `apematerno_usuario`, `pass_user`, `reppass_user`, `nivel_acceso`) VALUES
('10252676-7', 'BLANCA', 'TOELEDO', 'TOLEDO', '123456', '1234', NULL),
('15445719-4', 'SEBASTIAN', 'ROJAS', 'IBAÑEZ', '123456', '123456', 'ADM'),
('15448129-K', 'LUIS', 'GALVEZ', 'GONZALEZ', '123', '1234556', NULL),
('16385870-3', 'LUIS', 'MARDONES', 'JARA', 'admin', 'admin', 'ESC'),
('18885827-9', 'WILSON', 'MONTOYA', 'CID', '123456', '1234', NULL),
('19227153-3', 'EDUARDO', 'OLIVARES', 'CISTERNA', '123456', '12343', NULL),
('7688259-2', 'JULIA', 'IBANEZ', 'SALAS', '123456', '123456', 'ESC');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

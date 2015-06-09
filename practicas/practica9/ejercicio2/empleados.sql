-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2015 a las 19:22:36
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `empleados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `nombre` varchar(128) DEFAULT NULL,
  `apellido` varchar(128) DEFAULT NULL,
  `fechanacimiento` varchar(15) DEFAULT NULL,
  `direccion` varchar(128) DEFAULT NULL,
  `telefono` varchar(128) DEFAULT NULL,
  `estadocivil` varchar(128) DEFAULT NULL,
  `departamento` varchar(128) DEFAULT NULL,
`id` int(10) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`nombre`, `apellido`, `fechanacimiento`, `direccion`, `telefono`, `estadocivil`, `departamento`, `id`) VALUES
('Gustavo', 'Fabian', '01/02/1979', 'Solanda', '098629233', 'Casado', 'Sistemas', 1),
('Aitana', 'Guijarro', '04/07/2013', 'La Internacional', '2733295', 'Soltera', 'Comercial', 3),
('Roberto', 'Arboleda', '01/03/1989', 'la Comunna', '0987654353', 'Soltero', 'Soporte ', 12),
('Vilma ', 'Briones', '24/12/1979', 'La Michelena', '6005682', 'Casada', 'MÃ©dico', 13);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

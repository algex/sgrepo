-- version 2.7.0-pl1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-05-2006 a las 03:36:20
-- Versión del servidor: 5.0.18
-- Versión de PHP: 5.1.1
--
-- Base de datos: `calendario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `eventoid` int(11) NOT NULL auto_increment,
  `fecha` date NOT NULL,
  `evento` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`eventoid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=6 ;

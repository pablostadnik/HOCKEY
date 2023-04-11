-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-04-2014 a las 15:47:01
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `hockey`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuarta categoria`
--

CREATE TABLE IF NOT EXISTS `cuarta categoria` (
  `hora` varchar(10) NOT NULL,
  `local` varchar(40) NOT NULL,
  `visitante` varchar(40) NOT NULL,
  `fecha` varchar(40) NOT NULL,
  `id_partido` int(30) NOT NULL AUTO_INCREMENT,
  `goll` varchar(2) NOT NULL DEFAULT '--',
  `golv` varchar(2) NOT NULL DEFAULT '--',
  PRIMARY KEY (`id_partido`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `cuarta categoria`
--

INSERT INTO `cuarta categoria` (`hora`, `local`, `visitante`, `fecha`, `id_partido`, `goll`, `golv`) VALUES
('17:00', 'boca                       ', 'estudiante                       ', '26/05/2010', 6, '1', '0'),
('14:40', 'juventus', 'moscow', '12/05/2011', 8, '0', '0'),
('16:30', 'banfield', 'almagro', '16/02/55', 13, '0', '0'),
('12:00', 'independiente', 'boca', '12/05/2011', 19, '2', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE IF NOT EXISTS `equipos` (
  `id` int(3) NOT NULL,
  `equipo` varchar(50) NOT NULL,
  `puntos` int(4) NOT NULL,
  `j` int(2) NOT NULL,
  `g` int(2) NOT NULL,
  `e` int(2) NOT NULL,
  `p` int(2) NOT NULL,
  `gf` int(3) NOT NULL,
  `gc` int(3) NOT NULL,
  `dif` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `equipo`, `puntos`, `j`, `g`, `e`, `p`, `gf`, `gc`, `dif`) VALUES
(0, 'dafdfa', 0, 0, 0, 0, 0, 0, 0, 0),
(1, 'nose', 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'fddsfs', 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'carancho', 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'fdsdfsds', 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'daadssda', 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'sdadsa', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos2`
--

CREATE TABLE IF NOT EXISTS `equipos2` (
  `id` int(3) NOT NULL,
  `equipo` varchar(50) NOT NULL,
  `puntos` int(4) NOT NULL,
  `j` int(2) NOT NULL,
  `g` int(2) NOT NULL,
  `e` int(2) NOT NULL,
  `p` int(2) NOT NULL,
  `gf` int(3) NOT NULL,
  `gc` int(3) NOT NULL,
  `dif` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos2`
--

INSERT INTO `equipos2` (`id`, `equipo`, `puntos`, `j`, `g`, `e`, `p`, `gf`, `gc`, `dif`) VALUES
(0, 'dafdfa', 1, 1, 1, 1, 1, 1, 1, 1),
(1, 'nose', 2, 2, 2, 2, 2, 2, 2, 2),
(2, 'fddsfs', 3, 3, 3, 3, 3, 3, 3, 3),
(3, 'fdsdfsds', 4, 4, 4, 4, 4, 4, 4, 4),
(4, 'daadssda', 5, 5, 55, 5, 5, 5, 5, 5),
(5, 'carancho', 6, 6, 6, 6, 6, 6, 6, 6),
(6, 'sdadsa', 1, 1, 1, 11, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos3`
--

CREATE TABLE IF NOT EXISTS `equipos3` (
  `id` int(3) NOT NULL,
  `equipo` varchar(50) NOT NULL,
  `puntos` int(4) NOT NULL,
  `j` int(2) NOT NULL,
  `g` int(2) NOT NULL,
  `e` int(2) NOT NULL,
  `p` int(2) NOT NULL,
  `gf` int(3) NOT NULL,
  `gc` int(3) NOT NULL,
  `dif` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos3`
--

INSERT INTO `equipos3` (`id`, `equipo`, `puntos`, `j`, `g`, `e`, `p`, `gf`, `gc`, `dif`) VALUES
(0, 'san antonio', 9, 9, 9, 9, 9, 9, 9, 9),
(1, 'villa', 5, 5, 5, 5, 5, 5, 5, 5),
(2, 'buenos aires', 4, 4, 4, 4, 4, 4, 4, 4),
(3, 'sarmiento', 3, 3, 3, 3, 3, 3, 3, 3),
(4, 'moscow', 2, 2, 2, 2, 2, 2, 2, 2),
(5, 'juventus', 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quinta categoria`
--

CREATE TABLE IF NOT EXISTS `quinta categoria` (
  `hora` varchar(15) NOT NULL,
  `local` varchar(40) NOT NULL,
  `visitante` varchar(40) NOT NULL,
  `fecha` varchar(15) NOT NULL,
  `id_partido` int(30) NOT NULL AUTO_INCREMENT,
  `goll` varchar(2) NOT NULL,
  `golv` varchar(2) NOT NULL,
  PRIMARY KEY (`id_partido`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `quinta categoria`
--

INSERT INTO `quinta categoria` (`hora`, `local`, `visitante`, `fecha`, `id_partido`, `goll`, `golv`) VALUES
('adadsda', 'carancho', 'daadssda', 'adssadsda', 1, '0', '0'),
('153', 'fdsdfsds', 'fddsfs', '155353', 13, '0', '0'),
('nose', 'nose', 'nose', 'nose', 14, '7', '8'),
('adsads', 'dafdfa', 'sdadsa', 'dasdsa', 15, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexta categoria`
--

CREATE TABLE IF NOT EXISTS `sexta categoria` (
  `hora` varchar(10) NOT NULL,
  `local` varchar(40) NOT NULL,
  `visitante` varchar(40) NOT NULL,
  `fecha` varchar(15) NOT NULL,
  `id_partido` int(30) NOT NULL AUTO_INCREMENT,
  `goll` varchar(2) NOT NULL,
  `golv` varchar(2) NOT NULL,
  PRIMARY KEY (`id_partido`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `sexta categoria`
--

INSERT INTO `sexta categoria` (`hora`, `local`, `visitante`, `fecha`, `id_partido`, `goll`, `golv`) VALUES
('15:30', 'villa', 'sarmiento', '26/05/2010', 4, '0', '0'),
('14:40', 'juventus', 'moscow', '12/05/2011', 5, '0', '0'),
('14:25', 'buenos aires', 'san antonio', '12/05/2011', 7, '0', '0');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_equipos`
--
CREATE TABLE IF NOT EXISTS `vista_equipos` (
`local` varchar(40)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_equipos2`
--
CREATE TABLE IF NOT EXISTS `vista_equipos2` (
`local` varchar(40)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_equipos3`
--
CREATE TABLE IF NOT EXISTS `vista_equipos3` (
`local` varchar(40)
);
-- --------------------------------------------------------

--
-- Estructura para la vista `vista_equipos`
--
DROP TABLE IF EXISTS `vista_equipos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`a6263477_polarko`@`mysql10.000webhost.com` SQL SECURITY DEFINER VIEW `vista_equipos` AS select `cuarta categoria`.`local` AS `local` from `cuarta categoria` group by `cuarta categoria`.`local` union select `cuarta categoria`.`visitante` AS `visitante` from `cuarta categoria` group by `cuarta categoria`.`visitante`;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_equipos2`
--
DROP TABLE IF EXISTS `vista_equipos2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_equipos2` AS select `quinta categoria`.`local` AS `local` from `quinta categoria` group by `quinta categoria`.`local` union select `quinta categoria`.`visitante` AS `visitante` from `quinta categoria` group by `quinta categoria`.`visitante`;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_equipos3`
--
DROP TABLE IF EXISTS `vista_equipos3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_equipos3` AS select `sexta categoria`.`local` AS `local` from `sexta categoria` group by `sexta categoria`.`local` union select `sexta categoria`.`visitante` AS `visitante` from `sexta categoria` group by `sexta categoria`.`visitante`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

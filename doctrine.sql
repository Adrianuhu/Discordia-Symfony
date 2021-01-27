-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-01-2021 a las 11:23:38
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `doctrine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `employee`
--

INSERT INTO `employee` (`id`, `name`, `surname`, `salary`) VALUES
(1, 'Antonio', 'Luna', 2000),
(2, 'Ana', 'Puertas', 2000),
(3, 'Juan', 'Sevilla', 2000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employee_projects`
--

DROP TABLE IF EXISTS `employee_projects`;
CREATE TABLE IF NOT EXISTS `employee_projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee` int(11) NOT NULL,
  `project` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empleado` (`employee`,`project`),
  KEY `proyecto` (`project`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `employee_projects`
--

INSERT INTO `employee_projects` (`id`, `employee`, `project`) VALUES
(5, 1, 1),
(2, 1, 2),
(1, 2, 2),
(4, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matches`
--

DROP TABLE IF EXISTS `matches`;
CREATE TABLE IF NOT EXISTS `matches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `local` int(11) NOT NULL,
  `visitor` int(11) NOT NULL,
  `goals_local` int(11) NOT NULL,
  `goals_visitor` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `local` (`local`),
  KEY `visitante` (`visitor`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `matches`
--

INSERT INTO `matches` (`id`, `local`, `visitor`, `goals_local`, `goals_visitor`, `date`) VALUES
(1, 1, 2, 1, 1, '2018-01-01'),
(2, 1, 3, 2, 2, '2018-12-17'),
(3, 1, 2, 2, 2, '2018-12-02'),
(4, 3, 2, 4, 4, '2018-06-13'),
(5, 2, 3, 0, 0, '2019-01-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `player`
--

DROP TABLE IF EXISTS `player`;
CREATE TABLE IF NOT EXISTS `player` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `team` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Equipo` (`team`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `player`
--

INSERT INTO `player` (`Id`, `name`, `surname`, `age`, `team`) VALUES
(1, 'Manuel', 'Luna', 12, 2),
(2, 'Juan', 'Puertas', 25, 2),
(3, 'Pedro', 'Linares', 22, 3),
(4, 'Jordi', 'Abreu', 2, 2),
(5, 'Alberto', 'Peine', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `budget` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `project`
--

INSERT INTO `project` (`id`, `name`, `budget`) VALUES
(1, 'Tunel Burgos', 10000),
(2, 'Puente Madrid', 50000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `founded` int(11) NOT NULL,
  `members` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `founded` (`founded`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `team`
--

INSERT INTO `team` (`id`, `name`, `founded`, `members`, `city`) VALUES
(1, 'Real Madrid', 1900, 80000, 'Madrid'),
(2, 'Barcelona', 1899, 50000, 'Barcelona\r\n'),
(3, 'Sevilla F. C. ', 1910, 10000, 'Sevilla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`cod`, `username`, `password`, `role`) VALUES
(1, 'adri', '1234', 0);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `employee_projects`
--
ALTER TABLE `employee_projects`
  ADD CONSTRAINT `employee_projects_ibfk_1` FOREIGN KEY (`employee`) REFERENCES `employee` (`id`),
  ADD CONSTRAINT `employee_projects_ibfk_2` FOREIGN KEY (`project`) REFERENCES `project` (`id`);

--
-- Filtros para la tabla `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `matches_ibfk_1` FOREIGN KEY (`local`) REFERENCES `team` (`id`),
  ADD CONSTRAINT `matches_ibfk_2` FOREIGN KEY (`visitor`) REFERENCES `team` (`id`);

--
-- Filtros para la tabla `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`team`) REFERENCES `team` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

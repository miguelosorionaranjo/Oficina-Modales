-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-11-2020 a las 20:03:41
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pesv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pesv`
--

CREATE TABLE IF NOT EXISTS `pesv` (
  `id` int(11) NOT NULL,
  `vehiculo` varchar(50) NOT NULL,
  `conductor` varchar(50) NOT NULL,
  `clicencia` text,
  `csoat` text,
  `crtm` text,
  `crc` text,
  `cdelanteras` text,
  `ctraseras` text,
  `caltass` text,
  `cbajass` text,
  `cstop` text,
  `creversa` text,
  `cparqueo` text,
  `cdia` text,
  `cprincipal` text,
  `cemergencia` text,
  `cddelanteras` text,
  `cttraseras` text,
  `crepuesto` text,
  `cderecho` text,
  `cizquierdo` text,
  `cretrovisor` text,
  `cbocina` text,
  `cfrenos` text,
  `caceite` text,
  `crefrigerante` text,
  `cdelan` text,
  `ctras` text,
  `ccinturones` text,
  `ca` date DEFAULT NULL,
  `sincronizacion` date DEFAULT NULL,
  `ab` date DEFAULT NULL,
  `cll` date DEFAULT NULL,
  `rtmecanica` date DEFAULT NULL,
  `casoat` date DEFAULT NULL,
  `fv` date DEFAULT NULL,
  `ecapacidad` int(11) DEFAULT NULL,
  `calicates` text,
  `cdestorni` text,
  `cle` text,
  `clf` text,
  `ccruceta` text,
  `cgh` text,
  `ctaco` text,
  `csenal` text,
  `cchaleco` text,
  `cbotiquin` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-11-2020 a las 17:37:55
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
  `o_documentos` varchar(200) NOT NULL,
  `cdelanteras` text,
  `ctraseras` text,
  `o_direccionales` varchar(200) NOT NULL,
  `caltass` text,
  `cbajass` text,
  `cstop` text,
  `creversa` text,
  `cparqueo` text,
  `o_luces` varchar(200) NOT NULL,
  `cdia` text,
  `o_limpiabrisas` varchar(200) NOT NULL,
  `cprincipal` text,
  `cemergencia` text,
  `o_frenos` varchar(200) NOT NULL,
  `cddelanteras` text,
  `cttraseras` text,
  `crepuesto` text,
  `o_llantas` varchar(200) NOT NULL,
  `cderecho` text,
  `cizquierdo` text,
  `cretrovisor` text,
  `o_espejos` varchar(200) NOT NULL,
  `cbocina` text,
  `o_bocina` varchar(200) NOT NULL,
  `cfrenos` text,
  `caceite` text,
  `crefrigerante` text,
  `o_nf` varchar(200) NOT NULL,
  `cdelan` text,
  `ctras` text,
  `o_apoya` varchar(200) NOT NULL,
  `ccinturones` text,
  `o_cs` varchar(200) NOT NULL,
  `ca` date DEFAULT NULL,
  `sincronizacion` date DEFAULT NULL,
  `ab` date DEFAULT NULL,
  `cll` date DEFAULT NULL,
  `o_fm` varchar(200) NOT NULL,
  `rtmecanica` date DEFAULT NULL,
  `casoat` date DEFAULT NULL,
  `o_fv` varchar(200) NOT NULL,
  `fv` date DEFAULT NULL,
  `ecapacidad` int(11) DEFAULT NULL,
  `o_ext` varchar(200) NOT NULL,
  `calicates` text,
  `cdestorni` text,
  `cle` text,
  `clf` text,
  `o_herr` varchar(200) NOT NULL,
  `ccruceta` text,
  `o_cru` varchar(200) NOT NULL,
  `cgh` text,
  `o_gh` varchar(200) NOT NULL,
  `ctaco` text,
  `o_taco` varchar(200) NOT NULL,
  `csenal` text,
  `o_senal` varchar(200) NOT NULL,
  `cchaleco` text,
  `o_cr` varchar(200) NOT NULL,
  `cbotiquin` text,
  `o_boti` varchar(200) NOT NULL,
  `o_general` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

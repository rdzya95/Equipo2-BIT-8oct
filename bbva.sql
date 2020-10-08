-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2020 a las 19:00:27
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bbva`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` varchar(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidoPaterno` varchar(255) NOT NULL,
  `apellidoMaterno` varchar(255) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `sexo` varchar(255) DEFAULT NULL,
  `segmento` int(11) DEFAULT NULL,
  `nacionalidad` varchar(255) DEFAULT NULL,
  `rfc` varchar(13) NOT NULL,
  `tipoID` int(11) NOT NULL,
  `numeroID` varchar(2) NOT NULL,
  `cuenta` varchar(24) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(255) NOT NULL,
  `auth` varchar(255) NOT NULL,
  `nombreCompleto` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `segmento` int(11) NOT NULL,
  `perfil` varchar(255) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `auth`, `nombreCompleto`, `area`, `ubicacion`, `segmento`, `perfil`, `ID`) VALUES
('AndArt', 'qwerty', 'Andrea Arteaga González', 'Comercial\r\n', 'Querétaro', 0, 'Manager', 1),
('EduardoE', 'ABC123\r\n', 'Eduardo Emmanuel López Contreras', 'Sucursales', 'Monterrey', 1, 'Manager', 2),
('Gustavo_Moreno', '456098', 'Gustavo Moreno Rayón', 'Datos', 'Guadalajara', 2, 'Manager', 3),
('ENM', 'nkdk3C', 'Elisa Navarro Martinez', 'Banca Digital', 'CDMX', 0, 'Validador', 6),
('augusto', 'password', 'Augusto Sánchez Contreras', 'Control', 'Veracruz', 1, 'Validador', 7),
('pacoG', 'franK', 'Francisco Gamboa Cárdenas', 'Auditoria', 'Puebla', 2, 'Validador', 8),
('RaVen_1', 'pass123', 'Raymundo Venegas Rangel', 'Sucursales', 'Tlaxcala', 0, 'Restringido', 9),
('katy', 'KatiaFlores', 'Katia Flores Estrada', 'Ventas', 'SLP', 1, 'Restringido', 10),
('angelperea', '4ng3lPer', 'Angel Perea Lin', 'Cajeros', 'Nayarit', 2, 'Restringido', 11);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

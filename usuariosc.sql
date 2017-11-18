-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2017 a las 18:58:28
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosc`
--

CREATE TABLE IF NOT EXISTS `usuariosc` (
  `email` varchar(30) NOT NULL DEFAULT '',
  `nombre` varchar(100) NOT NULL DEFAULT '',
  `apellido` varchar(16) NOT NULL DEFAULT '',
  `codigo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuariosc`
--

INSERT INTO `usuariosc` (`email`, `nombre`, `apellido`, `codigo`) VALUES
('juan0@loquesea.com', 'Juan', 'Perez', 3),
('juan11@loquesea.com', 'Juan', 'Perez', 2),
('juan12@loquesea.com', 'Juan', '', 2),
('juan15@loquesea.com', 'Juan', 'Perez', 2),
('juan234@loquesea.com', 'Juan', '', 1),
('juan2@loquesea.com', 'Juan', 'Perez', 3),
('juan324@loquesea.com', 'Juan', 'Perz', 1),
('juan3@loquesea.com', 'Juan', '', 1),
('juan4@loquesea.com', 'AndrÃ©s', 'Perez', 4),
('juan5@loquesea.com', 'Pedro', 'Perez', 1),
('juan6@loquesea.com', 'Juan', 'Perez', 3),
('juan7@loquesea.com', 'Juan', '', 1),
('juan8@loquesea.com', 'Juan', 'Perez', 3),
('juan9@loquesea.com', 'JuliÃ¡n', 'Perez', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuariosc`
--
ALTER TABLE `usuariosc`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

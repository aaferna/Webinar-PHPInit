-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-03-2021 a las 22:03:02
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phptest`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alma`
--

CREATE TABLE `alma` (
  `id` int(11) NOT NULL,
  `nombreSitio` text NOT NULL,
  `facebook` text NOT NULL,
  `instagram` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alma`
--

INSERT INTO `alma` (`id`, `nombreSitio`, `facebook`, `instagram`) VALUES
(1, 'asd', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `ids` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `contenido` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`ids`, `titulo`, `contenido`) VALUES
(1, 'Principal', 'Hey! Hola!'),
(2, 'sasdasd', 'adsasd'),
(3, '123', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alma`
--
ALTER TABLE `alma`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`ids`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alma`
--
ALTER TABLE `alma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `seccion`
--
ALTER TABLE `seccion`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2021 a las 21:47:55
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbblog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `id` int(11) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `fecha` datetime NOT NULL,
  `comentario` text NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`id`, `titulo`, `fecha`, `comentario`, `imagen`) VALUES
(2, 'Ejemplo de entrada', '2021-08-06 16:35:48', 'esto es un ejemplo de entrada lorem lorem lorem..', 'Ehao9h1XkAoCCDC.jpg'),
(3, 'Ejemplo de entrada', '2021-08-06 16:36:21', 'esto es un ejemplo de entrada lorem lorem lorem..', 'Ehao9h1XkAoCCDC.jpg'),
(4, 'Segunda Entrada Prueba', '2021-08-06 16:49:09', 'mensaje mensaje mensaje scscsdsa', 'cocoacodo.gif'),
(5, 'Ejemplo de entrada', '2021-08-06 17:25:46', 'dfvffdvdfvfdvfd', 'river.jpg'),
(6, 'Ejemplo de entrada POO', '2021-08-07 03:58:20', 'Entrada con comentarios para probar blog con POO', 'river.jpg'),
(7, 'Ejemplo de entrada POO 2', '2021-08-07 04:00:59', 'LOREM LOREM POO LO', 'river.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfilusuarios`
--

CREATE TABLE `perfilusuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `perfil` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `perfilusuarios`
--

INSERT INTO `perfilusuarios` (`id`, `usuario`, `password`, `perfil`) VALUES
(1, 'Ayelen', '14', 'administrador'),
(2, 'Comi', '1234', 'usuario'),
(3, 'Pokso', '4321', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfilusuarios`
--
ALTER TABLE `perfilusuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `perfilusuarios`
--
ALTER TABLE `perfilusuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

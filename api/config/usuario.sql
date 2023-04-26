-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2023 a las 18:35:32
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `accion` varchar(200) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `log`
--

INSERT INTO `log` (`id`, `usuario`, `accion`, `fecha`) VALUES
(1, 'Ale132402', 'Creacion de Usuario', '2023-04-25 16:32:38'),
(2, 'Ale132402', 'Inicio de sesión', '2023-04-25 16:33:22'),
(3, 'Ale132402', 'Sesion Cerrada Por Inactividad', '2023-04-25 16:33:52'),
(4, 'Ale132402', 'Inicio de sesión', '2023-04-25 16:35:40'),
(5, 'Ale132402', 'Sesion Cerrada Por Inactividad', '2023-04-25 16:36:46'),
(6, 'Ale132402', 'Inicio de sesión', '2023-04-25 16:38:59'),
(7, 'Ale132402', 'Sesion Cerrada Por Inactividad', '2023-04-25 16:39:30'),
(8, 'Ale132402', 'Inicio de sesión', '2023-04-25 16:41:25'),
(9, 'Ale132402', 'Sesion Cerrada Por Inactividad', '2023-04-25 16:42:02'),
(10, 'Ale132402', 'Inicio de sesión', '2023-04-25 16:42:41'),
(11, 'Ale132402', 'Sesion Cerrada Por Inactividad', '2023-04-25 16:43:18'),
(12, 'Ale132402', 'Inicio de sesión', '2023-04-25 16:51:36'),
(13, 'Ale132402', 'Cerró sesión', '2023-04-25 16:51:45'),
(14, 'Ale132402', 'Inicio de sesión', '2023-04-25 17:01:52'),
(15, 'Ale132402', 'Cierre forzado', '2023-04-25 17:02:34'),
(16, 'Ale132402', 'Inicio de sesión', '2023-04-25 17:25:07'),
(17, 'Ale132402', 'Cerró sesión', '2023-04-25 17:25:26');

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `password`) VALUES
(1, 'Ale132402', 'MTMyNDAy');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logser`
--
ALTER TABLE `logser`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `logser`
--
ALTER TABLE `logser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

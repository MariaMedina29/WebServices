-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2023 a las 15:11:35
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_register`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `nombre_completo`, `correo`, `contrasena`) VALUES
(11, 'Juan', 'juanes@gmail.com', '42422'),
(15, 'Mafe', 'mariafer0329@gmail.com', '1234'),
(20, 'Santiago', 'santiago@gmail.com', '1234'),
(23, '', '', ''),
(24, 'Roberto', 'roberto@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posgrado`
--

CREATE TABLE `posgrado` (
  `id` int(11) NOT NULL,
  `nom_pos` text NOT NULL,
  `cod_pos` int(50) NOT NULL,
  `correo_pos` varchar(50) NOT NULL,
  `pos` text NOT NULL,
  `pos_1` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pos_2` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pos_3` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pos_4` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pos_5` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pos_6` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pos_7` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pos_8` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pos_9` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pos_10` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pos_11` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pos_12` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pos_13` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pos_14` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pos_15` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pos_16` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `aprobado_denegado_pos1` int(1) NOT NULL,
  `aprobado_denegado_pos2` int(1) NOT NULL,
  `aprobado_denegado_pos3` int(1) NOT NULL,
  `aprobado_denegado_pos4` int(1) NOT NULL,
  `aprobado_denegado_pos5` int(11) NOT NULL,
  `aprobado_denegado_pos6` int(11) NOT NULL,
  `aprobado_denegado_pos7` int(11) NOT NULL,
  `aprobado_denegado_pos8` int(11) NOT NULL,
  `aprobado_denegado_pos9` int(11) NOT NULL,
  `aprobado_denegado_pos10` int(11) NOT NULL,
  `aprobado_denegado_pos11` int(11) NOT NULL,
  `aprobado_denegado_pos12` int(11) NOT NULL,
  `aprobado_denegado_pos13` int(11) NOT NULL,
  `aprobado_denegado_pos14` int(11) NOT NULL,
  `aprobado_denegado_pos15` int(11) NOT NULL,
  `aprobado_denegado_pos16` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `posgrado`
--

INSERT INTO `posgrado` (`id`, `nom_pos`, `cod_pos`, `correo_pos`, `pos`, `pos_1`, `pos_2`, `pos_3`, `pos_4`, `pos_5`, `pos_6`, `pos_7`, `pos_8`, `pos_9`, `pos_10`, `pos_11`, `pos_12`, `pos_13`, `pos_14`, `pos_15`, `pos_16`, `aprobado_denegado_pos1`, `aprobado_denegado_pos2`, `aprobado_denegado_pos3`, `aprobado_denegado_pos4`, `aprobado_denegado_pos5`, `aprobado_denegado_pos6`, `aprobado_denegado_pos7`, `aprobado_denegado_pos8`, `aprobado_denegado_pos9`, `aprobado_denegado_pos10`, `aprobado_denegado_pos11`, `aprobado_denegado_pos12`, `aprobado_denegado_pos13`, `aprobado_denegado_pos14`, `aprobado_denegado_pos15`, `aprobado_denegado_pos16`) VALUES
(26, '', 0, 'santi20@gmail.com', '', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 1, 2, 1, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 'Maria', 1236, 'mafe@gmail.com', 'ing', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregrado`
--

CREATE TABLE `pregrado` (
  `id` int(11) NOT NULL,
  `nom_pre` text NOT NULL,
  `cod_pre` int(50) NOT NULL,
  `correo_pre` varchar(50) NOT NULL,
  `pre` text NOT NULL,
  `pre_1` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pre_2` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pre_3` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pre_4` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pre_5` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pre_6` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pre_7` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pre_8` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pre_9` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pre_10` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pre_11` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `pre_12` varchar(150) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `aprobado_denegado_pre1` int(11) NOT NULL,
  `aprobado_denegado_pre2` int(1) NOT NULL,
  `aprobado_denegado_pre3` int(1) NOT NULL,
  `aprobado_denegado_pre4` int(1) NOT NULL,
  `aprobado_denegado_pre5` int(1) NOT NULL,
  `aprobado_denegado_pre6` int(1) NOT NULL,
  `aprobado_denegado_pre7` int(1) NOT NULL,
  `aprobado_denegado_pre8` int(1) NOT NULL,
  `aprobado_denegado_pre9` int(1) NOT NULL,
  `aprobado_denegado_pre10` int(1) NOT NULL,
  `aprobado_denegado_pre11` int(1) NOT NULL,
  `aprobado_denegado_pre12` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `pregrado`
--

INSERT INTO `pregrado` (`id`, `nom_pre`, `cod_pre`, `correo_pre`, `pre`, `pre_1`, `pre_2`, `pre_3`, `pre_4`, `pre_5`, `pre_6`, `pre_7`, `pre_8`, `pre_9`, `pre_10`, `pre_11`, `pre_12`, `aprobado_denegado_pre1`, `aprobado_denegado_pre2`, `aprobado_denegado_pre3`, `aprobado_denegado_pre4`, `aprobado_denegado_pre5`, `aprobado_denegado_pre6`, `aprobado_denegado_pre7`, `aprobado_denegado_pre8`, `aprobado_denegado_pre9`, `aprobado_denegado_pre10`, `aprobado_denegado_pre11`, `aprobado_denegado_pre12`) VALUES
(16, 'Juan', 1256, 'juan1@gmail.com', '', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 'Paula', 1256, 'paula1@gmail.com', 'ing', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 1, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'Maria', 1233, 'maria@gmail.com', 'ing', 'archivos/Hola.pdf', 'archivos/Hola - copia.pdf', 'archivos/Hola - copia (2).pdf', 'archivos/Hola - copia (3).pdf', 'archivos/Hola - copia (4).pdf', 'archivos/Hola - copia (5).pdf', 'archivos/Hola - copia (6).pdf', 'archivos/Hola - copia (7).pdf', 'archivos/Hola - copia (8).pdf', 'archivos/Hola - copia (9).pdf', 'archivos/Hola - copia (10).pdf', 'archivos/Hola - copia (11).pdf', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 'Juan', 1535, 'juan10@gmail.com', 'ing', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 'archivos/Hola.pdf', 1, 2, 1, 2, 1, 0, 0, 0, 0, 0, 0, 0),
(23, 'Maria', -11, 'maria2@gmail.com', 'ing', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posgrado`
--
ALTER TABLE `posgrado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pregrado`
--
ALTER TABLE `pregrado`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `posgrado`
--
ALTER TABLE `posgrado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `pregrado`
--
ALTER TABLE `pregrado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

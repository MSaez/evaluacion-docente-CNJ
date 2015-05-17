-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2015 a las 16:45:52
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cnj`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE IF NOT EXISTS `asignatura` (
`asi_id` int(11) unsigned NOT NULL,
  `asi_nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`asi_id`, `asi_nombre`) VALUES
(1, 'Historia'),
(2, 'Lenguaje y Comunicación'),
(3, 'Ciencias Naturales'),
(4, 'Matemáticas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) COLLATE utf8_spanish2_ci NOT NULL,
  `userid` varchar(64) COLLATE utf8_spanish2_ci NOT NULL,
  `bizrule` text COLLATE utf8_spanish2_ci,
  `data` text COLLATE utf8_spanish2_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) COLLATE utf8_spanish2_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_spanish2_ci,
  `bizrule` text COLLATE utf8_spanish2_ci,
  `data` text COLLATE utf8_spanish2_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) COLLATE utf8_spanish2_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
`cur_id` int(11) NOT NULL,
  `cur_nombre` varchar(128) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`cur_id`, `cur_nombre`) VALUES
(1, '1° A'),
(2, '2° A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imparte`
--

CREATE TABLE IF NOT EXISTS `imparte` (
`imp_id` int(11) NOT NULL,
  `asi_id` int(11) unsigned NOT NULL,
  `pro_rut` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `cur_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `imparte`
--

INSERT INTO `imparte` (`imp_id`, `asi_id`, `pro_rut`, `cur_id`) VALUES
(1, 1, '16.818.192-2', 1),
(2, 2, '14.616.949-k', 1),
(3, 4, '16.818.192-2', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE IF NOT EXISTS `nota` (
`id` bigint(20) unsigned NOT NULL,
  `im_id` int(11) NOT NULL,
  `ev_anio` int(4) NOT NULL,
  `a1i1` int(11) NOT NULL,
  `a1i2` int(11) NOT NULL,
  `a1i3` int(11) NOT NULL,
  `a1i4` int(11) NOT NULL,
  `a1i5` int(11) NOT NULL,
  `a1i6` int(11) NOT NULL,
  `a1i7` int(11) NOT NULL,
  `a2i1` int(11) NOT NULL,
  `a2i2` int(11) NOT NULL,
  `a2i3` int(11) NOT NULL,
  `a2i4` int(11) NOT NULL,
  `a2i5` int(11) NOT NULL,
  `a2i6` int(11) NOT NULL,
  `a2i7` int(11) NOT NULL,
  `a2i8` int(11) NOT NULL,
  `a2i9` int(11) NOT NULL,
  `a2i10` int(11) NOT NULL,
  `a2i11` int(11) NOT NULL,
  `a3i1` int(11) NOT NULL,
  `a3i2` int(11) NOT NULL,
  `a3i3` int(11) NOT NULL,
  `a3i4` int(11) NOT NULL,
  `a3i5` int(11) NOT NULL,
  `a3i6` int(11) NOT NULL,
  `a3i7` int(11) NOT NULL,
  `a3i8` int(11) NOT NULL,
  `a3i9` int(11) NOT NULL,
  `a3i10` int(11) NOT NULL,
  `fecha_ev` date NOT NULL,
  `pro_evaluador` int(12) NOT NULL,
  `total_ambito1` int(11) NOT NULL,
  `total_ambito2` int(11) NOT NULL,
  `total_ambito3` int(11) NOT NULL,
  `total_logros` int(11) NOT NULL,
  `porcentaje_logro` int(11) NOT NULL,
  `observacion` int(11) NOT NULL,
  `clasificacion` varchar(16) COLLATE utf8_spanish2_ci NOT NULL,
  `obs01` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs02` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs03` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs04` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs05` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs06` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs07` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs08` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs09` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs10` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs11` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs12` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs13` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs14` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs15` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs16` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs17` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs18` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs19` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs20` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs21` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs22` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs23` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs24` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs25` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs26` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs27` text COLLATE utf8_spanish2_ci NOT NULL,
  `obs28` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `nota`
--

INSERT INTO `nota` (`id`, `im_id`, `ev_anio`, `a1i1`, `a1i2`, `a1i3`, `a1i4`, `a1i5`, `a1i6`, `a1i7`, `a2i1`, `a2i2`, `a2i3`, `a2i4`, `a2i5`, `a2i6`, `a2i7`, `a2i8`, `a2i9`, `a2i10`, `a2i11`, `a3i1`, `a3i2`, `a3i3`, `a3i4`, `a3i5`, `a3i6`, `a3i7`, `a3i8`, `a3i9`, `a3i10`, `fecha_ev`, `pro_evaluador`, `total_ambito1`, `total_ambito2`, `total_ambito3`, `total_logros`, `porcentaje_logro`, `observacion`, `clasificacion`, `obs01`, `obs02`, `obs03`, `obs04`, `obs05`, `obs06`, `obs07`, `obs08`, `obs09`, `obs10`, `obs11`, `obs12`, `obs13`, `obs14`, `obs15`, `obs16`, `obs17`, `obs18`, `obs19`, `obs20`, `obs21`, `obs22`, `obs23`, `obs24`, `obs25`, `obs26`, `obs27`, `obs28`) VALUES
(32, 1, 2014, 0, 0, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, '2014-09-08', 23, 20, 44, 40, 104, 95, 1, 'Insatisfactorio', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4'),
(33, 1, 2014, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, '2014-09-08', 23, 21, 33, 30, 84, 75, 2, 'Insatisfactorio', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3'),
(34, 1, 2014, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, '2014-09-08', 23, 28, 44, 40, 112, 100, 3, 'Básico', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4'),
(35, 1, 2014, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, '2014-09-08', 23, 21, 33, 30, 84, 75, 4, 'Insatisfactorio', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3'),
(36, 1, 2014, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '2014-09-08', 23, 14, 22, 20, 56, 50, 5, 'Insatisfactorio', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2'),
(37, 2, 2014, 2, 4, 3, 0, 0, 2, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 0, 0, '2014-09-11', 23, 13, 33, 24, 70, 72, 1, 'Básico', '3', '2', '4', '0', '0', '2', '2', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '0', '0'),
(38, 2, 2014, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '2014-09-11', 23, 14, 22, 20, 56, 50, 2, 'Insatisfactorio', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2'),
(39, 2, 2014, 0, 0, 0, 0, 0, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, '2014-09-23', 23, 8, 44, 40, 92, 100, 1, 'Competente', '04', '04', '04', '04', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE IF NOT EXISTS `profesor` (
  `pro_rut` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `pro_nombres` varchar(256) COLLATE utf8_spanish2_ci NOT NULL,
  `pro_paterno` varchar(256) COLLATE utf8_spanish2_ci NOT NULL,
  `pro_materno` varchar(256) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`pro_rut`, `pro_nombres`, `pro_paterno`, `pro_materno`) VALUES
('14.616.949-k', 'Paula Andrea', 'Sáez', 'Tapia'),
('16.818.192-2', 'Marcelo Alexis', 'Sáez', 'Tapia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`id` int(12) NOT NULL,
  `username` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `ev_nombres` varchar(256) COLLATE utf8_spanish2_ci NOT NULL,
  `ev_paterno` varchar(256) COLLATE utf8_spanish2_ci NOT NULL,
  `ev_materno` varchar(256) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `ev_nombres`, `ev_paterno`, `ev_materno`) VALUES
(23, '16.818.192-2', 'ba78ec8d4cc02c3458db61eabb247614', 'Marcelo Alexis', 'Sáez ', 'Tapia'),
(24, '1-9', 'd9b1d7db4cd6e70935368a1efb10e377', 'Pedro', 'Perez', 'Jara');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
 ADD PRIMARY KEY (`asi_id`);

--
-- Indices de la tabla `authassignment`
--
ALTER TABLE `authassignment`
 ADD PRIMARY KEY (`itemname`,`userid`);

--
-- Indices de la tabla `authitem`
--
ALTER TABLE `authitem`
 ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `authitemchild`
--
ALTER TABLE `authitemchild`
 ADD PRIMARY KEY (`parent`,`child`), ADD KEY `child` (`child`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
 ADD PRIMARY KEY (`cur_id`);

--
-- Indices de la tabla `imparte`
--
ALTER TABLE `imparte`
 ADD PRIMARY KEY (`imp_id`), ADD KEY `imparte_ibfk_1` (`asi_id`), ADD KEY `imparte_ibfk_2` (`pro_rut`), ADD KEY `imparte_ibfk_3` (`cur_id`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`), ADD KEY `nota_ibfk_2` (`pro_evaluador`), ADD KEY `nota_ibfk_3` (`im_id`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
 ADD PRIMARY KEY (`pro_rut`);

--
-- Indices de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
MODIFY `asi_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
MODIFY `cur_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `imparte`
--
ALTER TABLE `imparte`
MODIFY `imp_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `nota`
--
ALTER TABLE `nota`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `authassignment`
--
ALTER TABLE `authassignment`
ADD CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `authitemchild`
--
ALTER TABLE `authitemchild`
ADD CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `imparte`
--
ALTER TABLE `imparte`
ADD CONSTRAINT `imparte_ibfk_1` FOREIGN KEY (`asi_id`) REFERENCES `asignatura` (`asi_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `imparte_ibfk_2` FOREIGN KEY (`pro_rut`) REFERENCES `profesor` (`pro_rut`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `imparte_ibfk_3` FOREIGN KEY (`cur_id`) REFERENCES `curso` (`cur_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
ADD CONSTRAINT `nota_ibfk_2` FOREIGN KEY (`pro_evaluador`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `nota_ibfk_3` FOREIGN KEY (`im_id`) REFERENCES `imparte` (`imp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2022 a las 17:00:22
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(10) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `documento` int(15) NOT NULL,
  `id_lista` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `Nombre`, `documento`, `id_lista`) VALUES
(8, 'Ariel', 123213, 15),
(9, 'celeste', 121313, 15),
(10, 'monica', 12312, 15),
(11, 'Pedro', 312312, 15),
(12, 'Catalino', 123123, 15),
(13, 'Fernando', 123123, 15),
(14, 'Luis', 12312, 15),
(15, 'Ariel', 123213, 16),
(16, 'celeste', 121313, 16),
(17, 'monica', 12312, 16),
(18, 'Pedro', 312312, 16),
(19, 'Catalino', 123123, 16),
(20, 'Fernando', 123123, 16),
(21, 'Luis', 12312, 16),
(22, 'Ariel', 123213, 17),
(23, 'celeste', 121313, 17),
(24, 'monica', 12312, 17),
(25, 'Pedro', 312312, 17),
(26, 'Catalino', 123123, 17),
(27, 'Fernando', 123123, 17),
(28, 'Fernando', 123123, 17),
(29, 'Fernando', 123123, 17),
(30, 'Fernando', 123123, 17),
(31, 'Fernando', 123123, 17),
(32, 'Fernando', 123123, 17),
(33, 'Fernando', 123123, 17),
(34, 'Fernando', 123123, 17),
(35, 'Ariel', 123213, 18),
(36, 'celeste', 121313, 18),
(37, 'monica', 12312, 18),
(38, 'Pedro', 312312, 18),
(39, 'Catalino', 123123, 18),
(40, 'Fernando', 123123, 18),
(41, 'Fernando', 123123, 18),
(42, 'Fernando', 123123, 18),
(43, 'Fernando', 123123, 18),
(44, 'Fernando', 123123, 18),
(45, 'Fernando', 123123, 18),
(46, 'Fernando', 123123, 18),
(47, 'Fernando', 123123, 18),
(48, 'Ariel', 123213, 19),
(49, 'celeste', 121313, 19),
(50, 'monica', 12312, 19),
(51, 'Pedro', 312312, 19),
(52, 'Catalino', 123123, 19),
(53, 'Fernando', 123123, 19),
(54, 'Fernando', 123123, 19),
(55, 'Fernando', 123123, 19),
(56, 'Fernando', 123123, 19),
(57, 'Fernando', 123123, 19),
(58, 'Fernando', 123123, 19),
(59, 'Fernando', 123123, 19),
(60, 'Fernando', 123123, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listas`
--

CREATE TABLE `listas` (
  `id` int(10) NOT NULL,
  `id_modulo` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `semestre` varchar(15) NOT NULL,
  `fecha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `listas`
--

INSERT INTO `listas` (`id`, `id_modulo`, `nombre`, `semestre`, `fecha`) VALUES
(15, 1, 'Lista 21', 'I (Primer)', '07/11/22'),
(16, 3, 'Lista 21', 'I (Primer)', '07/11/22'),
(17, 6, 'isaias', 'X (Decimo)', '15/11/22'),
(18, 1, 'semestre grupo 2', 'IV (Cuarto)', '15/11/22'),
(19, 6, 'Lista 21', 'IV (Cuarto)', '16/11/22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `id` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`id`, `nombre`) VALUES
(1, 'Promoción y prevención'),
(2, 'Actividades basicas'),
(3, 'Cuidado medico'),
(4, 'Cuidado materno infantil'),
(5, 'Practicas administracion'),
(6, 'Adulto mayor'),
(7, 'Practica integral'),
(8, 'Fundamentos socioeducativo IV'),
(9, 'Fundamentos socioeducativo V');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo_nota`
--

CREATE TABLE `modulo_nota` (
  `id` int(10) NOT NULL,
  `id_estudiante` int(10) NOT NULL,
  `id_pregubta` int(10) NOT NULL,
  `nota` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(10) NOT NULL,
  `id_modulo` int(10) NOT NULL,
  `id_docente` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` int(10) DEFAULT NULL,
  `pregunta` varchar(255) NOT NULL,
  `id_modulo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `ultima_sesion` varchar(69) NOT NULL,
  `documento` int(15) NOT NULL,
  `fecha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `clave`, `ultima_sesion`, `documento`, `fecha`) VALUES
(1, 'Ariel', 'Caraballo', 'ariel@gmail.com', '123456', '25/10/2022', 1001903378, '25/10/2022'),
(2, 'JUAN', 'Caraballo', 'juan@gmail.com', '123456', '25/10/2022', 12345678, '25/10/2022'),
(3, 'roberto', 'caraballo', 'roberto@gmail.com', '123456', '25/10/2022', 1001903378, '25/10/2022');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_lista` (`id_lista`);

--
-- Indices de la tabla `listas`
--
ALTER TABLE `listas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modulo_nota`
--
ALTER TABLE `modulo_nota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_estudiante` (`id_estudiante`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_docentes` (`id_docente`),
  ADD KEY `fk_modulos` (`id_modulo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `listas`
--
ALTER TABLE `listas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `modulo_nota`
--
ALTER TABLE `modulo_nota`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `fk_docentes` FOREIGN KEY (`id_docente`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_modulos` FOREIGN KEY (`id_modulo`) REFERENCES `modulos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

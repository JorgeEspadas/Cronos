-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2019 a las 06:46:45
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `flamingo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `ubicacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `matricula_alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `nombre`, `apellidos`, `correo`, `password`, `ubicacion`, `id_empleado`, `matricula_alumno`) VALUES
(32486, 'Mariana', 'Gutiérrez', 'al032486@uacam.mx', 'password', 'CIC', 36478, 52369);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `matricula_alumno` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `licenciatura` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `semestre` int(11) NOT NULL,
  `grupo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `id_horario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`matricula_alumno`, `nombre`, `apellidos`, `correo`, `password`, `licenciatura`, `semestre`, `grupo`, `estado`, `id_horario`) VALUES
(46952, 'Diana', 'Avila', 'al046952@uacam.mx', '1234', 'Sistemas Computacionales.', 7, 'A', 'Ausente', 1),
(49738, 'José Luis', 'Villanueva Pech', 'al049738@uacam.mx', '1234', 'Ing. Sistemas Computacionales', 7, 'A', 'activo', 1),
(50610, 'Jorge', 'Espadas', 'al050610@uacam.mx', '1234', 'Sistemas Computacionales.', 7, 'A', 'Ausente', 2),
(51426, 'Alfonso', 'Sánchez Pérez', 'al051426@uacam.mx', '11111', 'Médico Cirujano', 4, 'C', 'activo', 2),
(52185, 'Pedro', 'Balam', 'al052185@uacam.mx', 'pedro124', 'ing. Mecatrónica', 5, 'A', 'ausente', 1),
(52369, 'miguel', 'hernadez', 'al052369@uacam.mx', 'password', 'Psicología', 3, 'B', 'ausente', 1),
(56494, 'Maria', 'Gonzalez', 'al056494@uacam.mx', '1234', 'Sistemas Computacionales.', 7, 'A', 'Ausente', 1),
(56513, 'José', 'Sanchez', 'al056513@uacam.mx', '1234', 'Sistemas Computacionales.', 7, 'A', 'Ausente', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesor`
--

CREATE TABLE `asesor` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `ubicacion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `matricula_alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asesor`
--

INSERT INTO `asesor` (`id_empleado`, `nombre`, `apellidos`, `correo`, `password`, `ubicacion`, `matricula_alumno`) VALUES
(13587, 'Susana', 'Duarte', 'al013587@uacam.mx', '12345', 'CIC', 50610),
(36478, 'Francisco', 'Morales ', 'al036478@uacam.mx', 'password', 'CIC', 51426),
(45219, 'Ángel', 'Morán', 'al045219@uacam.mx', '12345', 'CIC', 52185),
(64987, 'Gerardo', 'Fernandez', 'al064987@uacam.mx', '1234', 'CIC', 51426);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id_horario` int(11) NOT NULL,
  `dia` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `hora_inicio` timestamp NOT NULL DEFAULT current_timestamp(),
  `hora_fin` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id_horario`, `dia`, `hora_inicio`, `hora_fin`) VALUES
(1, 'Lunes', '2019-10-22 12:00:00', '2019-10-22 19:00:00'),
(2, 'Martes', '2019-10-23 12:00:00', '2019-10-23 19:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_empleado` (`id_empleado`),
  ADD KEY `matricula_alumno` (`matricula_alumno`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`matricula_alumno`),
  ADD KEY `id_horario` (`id_horario`);

--
-- Indices de la tabla `asesor`
--
ALTER TABLE `asesor`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `matricula_alumno` (`matricula_alumno`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45935;

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `matricula_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56514;

--
-- AUTO_INCREMENT de la tabla `asesor`
--
ALTER TABLE `asesor`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64988;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `asesor` (`id_empleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`matricula_alumno`) REFERENCES `alumno` (`matricula_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`id_horario`) REFERENCES `horario` (`id_horario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asesor`
--
ALTER TABLE `asesor`
  ADD CONSTRAINT `asesor_ibfk_1` FOREIGN KEY (`matricula_alumno`) REFERENCES `alumno` (`matricula_alumno`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

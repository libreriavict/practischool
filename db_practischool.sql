-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2022 a las 04:34:51
-- Versión del servidor: 8.0.21
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_practischool`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estudiante`
--

CREATE TABLE `tbl_estudiante` (
  `idEstudiante` int NOT NULL,
  `estCedula` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `estNombres` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `estApellidos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `estFechaNacimiento` date NOT NULL,
  `estTelefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `estCorreo` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estRepresentantePadres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estDireccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_estudiante`
--

INSERT INTO `tbl_estudiante` (`idEstudiante`, `estCedula`, `estNombres`, `estApellidos`, `estFechaNacimiento`, `estTelefono`, `estCorreo`, `estRepresentantePadres`, `estDireccion`) VALUES
(1, '1234567890', 'Victor', 'Rivera', '2012-04-01', '0929023278', 'victor_r@correo.com', 'Rebeca Peralta', 'Chillogallo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_periodolectivo`
--

CREATE TABLE `tbl_periodolectivo` (
  `idPeriodoLectivo` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_profesor`
--

CREATE TABLE `tbl_profesor` (
  `idProfesor` int NOT NULL,
  `profCedula` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `profNombres` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `proApellidos` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `profFechaNacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_estudiante`
--
ALTER TABLE `tbl_estudiante`
  ADD PRIMARY KEY (`idEstudiante`);

--
-- Indices de la tabla `tbl_periodolectivo`
--
ALTER TABLE `tbl_periodolectivo`
  ADD PRIMARY KEY (`idPeriodoLectivo`);

--
-- Indices de la tabla `tbl_profesor`
--
ALTER TABLE `tbl_profesor`
  ADD PRIMARY KEY (`idProfesor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_estudiante`
--
ALTER TABLE `tbl_estudiante`
  MODIFY `idEstudiante` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_periodolectivo`
--
ALTER TABLE `tbl_periodolectivo`
  MODIFY `idPeriodoLectivo` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_profesor`
--
ALTER TABLE `tbl_profesor`
  MODIFY `idProfesor` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

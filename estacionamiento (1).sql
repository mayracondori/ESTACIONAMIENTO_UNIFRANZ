-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2021 a las 17:04:12
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estacionamiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigoqr_est`
--

CREATE TABLE `codigoqr_est` (
  `Id_codigoqr` int(10) NOT NULL,
  `Foto_codigoqr` varchar(20) DEFAULT NULL,
  `Desc_codigoqr` varchar(20) DEFAULT NULL,
  `Estado_codigoqr` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `codigoqr_est`
--

INSERT INTO `codigoqr_est` (`Id_codigoqr`, `Foto_codigoqr`, `Desc_codigoqr`, `Estado_codigoqr`) VALUES
(1, 'FOTO', '12345678', 1),
(2, 'FOTO', '12345678', 1),
(3, 'FOTO', '12345678', 1),
(4, 'FOTO', '12345678', 1),
(5, 'FOTO', '12345678', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condicion_usu`
--

CREATE TABLE `condicion_usu` (
  `Id_condicion` int(10) NOT NULL,
  `Desc_condicion` varchar(20) DEFAULT NULL,
  `Estado_condicion` int(20) DEFAULT NULL,
  `Id_tipousu` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `condicion_usu`
--

INSERT INTO `condicion_usu` (`Id_condicion`, `Desc_condicion`, `Estado_condicion`, `Id_tipousu`) VALUES
(1, 'Espacio habilitado 2', 1, 1),
(2, 'Confirmar uso del es', 1, 2),
(3, 'Tolerancia de llegad', 1, 3),
(4, 'Tolerancia de llegad', 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `Id_hora` int(10) NOT NULL,
  `Entrada_hora` varchar(20) DEFAULT NULL,
  `Salida_hora` varchar(20) DEFAULT NULL,
  `SalidaEst_hora` varchar(20) DEFAULT NULL,
  `Estado_hora` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`Id_hora`, `Entrada_hora`, `Salida_hora`, `SalidaEst_hora`, `Estado_hora`) VALUES
(1, '7:00', '17:00', '17:00', 1),
(2, '7:00', '22:00', '20:00', 1),
(3, '9:00', '16:30', '16:00', 1),
(4, '7:30', '12:00', '11:00', 1),
(5, '10:00', '17:30', '18:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `Id_reserva` int(10) NOT NULL,
  `Fecha_reserva` date DEFAULT NULL,
  `HoraEntrada_reserva` int(20) DEFAULT NULL,
  `HoraSalida_reserva` int(20) DEFAULT NULL,
  `Estado_reserva` int(20) NOT NULL,
  `Id_usu` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`Id_reserva`, `Fecha_reserva`, `HoraEntrada_reserva`, `HoraSalida_reserva`, `Estado_reserva`, `Id_usu`) VALUES
(1, '2021-09-25', 8, 8, 1, 1),
(2, '2021-09-24', 7, 22, 1, 2),
(3, '2021-09-20', 9, 14, 1, 3),
(4, '2021-08-18', 8, 19, 1, 4),
(5, '2021-08-15', 10, 20, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usu`
--

CREATE TABLE `tipo_usu` (
  `Id_tipousu` int(10) NOT NULL,
  `Nombre_tipousu` varchar(20) DEFAULT NULL,
  `Estado_tipousu` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usu`
--

INSERT INTO `tipo_usu` (`Id_tipousu`, `Nombre_tipousu`, `Estado_tipousu`) VALUES
(1, 'Decanatura', 1),
(2, 'Jefatura de carrera', 1),
(3, 'Personal administrat', 1),
(4, 'Docente', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uso_estac`
--

CREATE TABLE `uso_estac` (
  `Id_usoestac` int(10) NOT NULL,
  `Estado_usoestac` int(20) DEFAULT NULL,
  `Id_usuario` int(20) DEFAULT NULL,
  `Id_horario` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `uso_estac`
--

INSERT INTO `uso_estac` (`Id_usoestac`, `Estado_usoestac`, `Id_usuario`, `Id_horario`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 2),
(3, 1, 3, 3),
(4, 1, 4, 4),
(5, 1, 5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_usu` int(10) NOT NULL,
  `Nombre_usu` varchar(20) DEFAULT NULL,
  `App_usu` varchar(20) DEFAULT NULL,
  `Apm_usu` varchar(20) DEFAULT NULL,
  `CI_usu` int(20) DEFAULT NULL,
  `Telf_usu` int(20) DEFAULT NULL,
  `Correo_usu` varchar(20) DEFAULT NULL,
  `Pass_usu` varchar(20) DEFAULT NULL,
  `Estado_usu` int(20) DEFAULT NULL,
  `HoraEntrada_usu` varchar(20) DEFAULT NULL,
  `HoraSalida_usu` varchar(20) DEFAULT NULL,
  `FechaInicio_usu` date DEFAULT NULL,
  `FechaFin_usu` date DEFAULT NULL,
  `Id_tipousuario` int(10) DEFAULT NULL,
  `Id_codigoqr` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_usu`, `Nombre_usu`, `App_usu`, `Apm_usu`, `CI_usu`, `Telf_usu`, `Correo_usu`, `Pass_usu`, `Estado_usu`, `HoraEntrada_usu`, `HoraSalida_usu`, `FechaInicio_usu`, `FechaFin_usu`, `Id_tipousuario`, `Id_codigoqr`) VALUES
(1, 'Denice', 'Chuquimia', 'Escobar', 10097725, 78777435, 'Den2000@gmail.com', 'Chuquimia12345', 1, '8:00', '22:00', '2021-11-01', '2022-01-02', 1, 1),
(2, 'Juan Carlos', 'Cuellar', 'Sonco', 9196562, 72532145, 'Cuellar1000@gmail.co', 'cuellar12345', 1, '8:00', '22:00', '2021-07-12', '2022-01-02', 2, 2),
(3, 'Wanda', 'Flores', 'Hilari', 10195421, 65561034, 'wanda1000@gmail.com', 'flores12345', 1, '8:30', '19:30', '2021-01-11', '2022-01-02', 3, 3),
(4, 'Milenka', 'Flores', 'Jemio', 9874187, 61227021, 'milenka@gmail.com', 'milenka1234', 1, '7:00', '9:30', '2021-07-26', '2022-01-02', 4, 4),
(5, 'Reynaldo', 'Lima', 'Paiva', 9755485, 69779142, 'Rey1000@gmail.com', 'lima12345', 1, '18:30', '21:00', '2021-07-26', '2022-01-02', 4, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `codigoqr_est`
--
ALTER TABLE `codigoqr_est`
  ADD PRIMARY KEY (`Id_codigoqr`);

--
-- Indices de la tabla `condicion_usu`
--
ALTER TABLE `condicion_usu`
  ADD PRIMARY KEY (`Id_condicion`),
  ADD KEY `Id_tipousu` (`Id_tipousu`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`Id_hora`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`Id_reserva`),
  ADD KEY `Id_usu` (`Id_usu`);

--
-- Indices de la tabla `tipo_usu`
--
ALTER TABLE `tipo_usu`
  ADD PRIMARY KEY (`Id_tipousu`);

--
-- Indices de la tabla `uso_estac`
--
ALTER TABLE `uso_estac`
  ADD PRIMARY KEY (`Id_usoestac`),
  ADD KEY `Id_usuario` (`Id_usuario`),
  ADD KEY `Id_horario` (`Id_horario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_usu`),
  ADD KEY `Id_tipousuario` (`Id_tipousuario`),
  ADD KEY `Id_codigoqr` (`Id_codigoqr`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `codigoqr_est`
--
ALTER TABLE `codigoqr_est`
  MODIFY `Id_codigoqr` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `condicion_usu`
--
ALTER TABLE `condicion_usu`
  MODIFY `Id_condicion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `Id_hora` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `Id_reserva` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_usu`
--
ALTER TABLE `tipo_usu`
  MODIFY `Id_tipousu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `uso_estac`
--
ALTER TABLE `uso_estac`
  MODIFY `Id_usoestac` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id_usu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `condicion_usu`
--
ALTER TABLE `condicion_usu`
  ADD CONSTRAINT `condicion_usu_ibfk_1` FOREIGN KEY (`Id_tipousu`) REFERENCES `tipo_usu` (`Id_tipousu`);

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`Id_usu`) REFERENCES `usuario` (`Id_usu`);

--
-- Filtros para la tabla `uso_estac`
--
ALTER TABLE `uso_estac`
  ADD CONSTRAINT `uso_estac_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuario` (`Id_usu`),
  ADD CONSTRAINT `uso_estac_ibfk_2` FOREIGN KEY (`Id_horario`) REFERENCES `horario` (`Id_hora`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`Id_tipousuario`) REFERENCES `tipo_usu` (`Id_tipousu`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`Id_codigoqr`) REFERENCES `codigoqr_est` (`Id_codigoqr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

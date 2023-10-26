-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2023 a las 07:08:08
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_depar`
--

CREATE TABLE `tbl_depar` (
  `id` int(11) NOT NULL,
  `descrip` varchar(100) NOT NULL,
  `numEmpl` int(12) NOT NULL,
  `pres` int(10) NOT NULL,
  `direc` varchar(255) NOT NULL,
  `gerente` enum('Edgar Meraz','Valdez Martinez','Irvin Moreno','Reyna Molina','Alonso Rivas','Uriel Rivas') NOT NULL,
  `cel` varchar(20) NOT NULL,
  `numDep` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_depar`
--

INSERT INTO `tbl_depar` (`id`, `descrip`, `numEmpl`, `pres`, `direc`, `gerente`, `cel`, `numDep`) VALUES
(1, 'Edificio Morado de 1 piso', 43, 234534420, 'Calle Uva Colonia Nueva Zelanda', 'Edgar Meraz', '6569025432', 2341),
(4, 'Casa de carton', 21, 312676842, 'Calle independencia', 'Irvin Moreno', '656 981 3312', 3241),
(5, 'Caja de carton mojada', 123, 4234232, 'Calle Itler', 'Reyna Molina', '656 889 3332', 4231);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_depar`
--
ALTER TABLE `tbl_depar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NIM_unique` (`numEmpl`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_depar`
--
ALTER TABLE `tbl_depar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

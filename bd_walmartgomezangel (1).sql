-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2023 a las 21:09:55
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_walmartgomezangel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_proveedores`
--

CREATE TABLE `tbl_proveedores` (
  `id_proveedor` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `num_tel` int(10) DEFAULT NULL,
  `productos` int(10) DEFAULT NULL,
  `correo_elect` varchar(60) NOT NULL,
  `sector` int(5) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `codigo_p` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_proveedores`
--

INSERT INTO `tbl_proveedores` (`id_proveedor`, `nombre`, `num_tel`, `productos`, `correo_elect`, `sector`, `direccion`, `codigo_p`) VALUES
(3, 'Jorge Ceniceros', 2147483647, 12, 'jorgixkanye_uwu@gmail.com', 1, 'Su casa 1234-12', 32809),
(4, 'Angel Gomez ', 656901377, 13, 'angelgohe007@gmail.com', 12, 'Portal de commodo 8222-15 ', 32696),
(5, 'Alberto', 2147483647, 1, 'albertitopvp@gmail.com', 9, 'Lacasadelalberto 4321-43', 13564),
(6, 'Yadier Gonzalezz', 2147483647, 56, 'yadiergg@gmail.com', 5, 'Puerto de palos 5623-89', 20683);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_proveedores`
--
ALTER TABLE `tbl_proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_proveedores`
--
ALTER TABLE `tbl_proveedores`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

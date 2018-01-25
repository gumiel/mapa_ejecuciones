-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-01-2018 a las 15:44:40
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mapa_ejecuciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`) VALUES
(1, 'Caminos'),
(2, 'Infraestructura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `sigla` varchar(10) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `nombre_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `nombre`, `sigla`, `fecha_creacion`, `nombre_url`) VALUES
(1, 'cochabamba', 'CBBA', '2018-01-07 21:31:42', 'cochabamba'),
(2, 'la paz', 'LP', '0000-00-00 00:00:00', 'la-paz'),
(3, 'santa cruz', 'SC', '0000-00-00 00:00:00', 'santa-cruz'),
(6, 'oruro', 'OR', '2018-01-15 00:00:00', 'oruro'),
(7, 'beni', 'BN', '2018-01-15 00:00:00', 'beni'),
(8, 'pando', 'PN', '2018-01-15 00:00:00', 'pando'),
(9, 'tarija', 'TJ', '2018-01-15 00:00:00', 'tarija'),
(10, 'potosi', 'PT', '2018-01-15 00:00:00', 'potosi'),
(11, 'chuquisaca', 'CH', '2018-01-15 00:00:00', 'chuquisaca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(11) NOT NULL,
  `nombre_imagen` varchar(500) NOT NULL,
  `nombre_imagen_min` varchar(500) NOT NULL,
  `fecha_creacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id_proyecto` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `latitud` varchar(50) NOT NULL,
  `longitud` varchar(50) NOT NULL,
  `img_miniatura` varchar(200) NOT NULL,
  `zoom` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `titulo_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id_proyecto`, `titulo`, `descripcion`, `fecha_creacion`, `latitud`, `longitud`, `img_miniatura`, `zoom`, `id_categoria`, `id_departamento`, `titulo_url`) VALUES
(10, 'cochabamba', '<p>Esto es el contenido de cochabamba</p>', '0000-00-00 00:00:00', '-17.418001450624175', '-66.188506744802', '', 12, 1, 1, 'titulo-cochabamba'),
(11, 'Titulo santa cruz', '<p>Este es el contenido desde la ciudad de santa cruz&nbsp;<span style="font-size: 1rem;">Este es el contenido desde la ciudad de santa cruz&nbsp;</span><span style="font-size: 1rem;">Este es el contenido desde la ciudad de santa cruz&nbsp;</span><span style="font-size: 1rem;">Este es el contenido desde la ciudad de santa cruz&nbsp;</span><span style="font-size: 1rem;">Este es el contenido desde la ciudad de santa cruz&nbsp;</span><span style="font-size: 1rem;">Este es el contenido desde la ciudad de santa cruz&nbsp;</span><span style="font-size: 1rem;">Este es el contenido desde la ciudad de santa cruz&nbsp;</span><span style="font-size: 1rem;">Este es el contenido desde la ciudad de santa cruz&nbsp;</span><span style="font-size: 1rem;">Este es el contenido desde la ciudad de santa cruz&nbsp;</span><span style="font-size: 1rem;">Este es el contenido desde la ciudad de santa cruz&nbsp;</span></p>', '0000-00-00 00:00:00', '-17.920465612646318', '-63.156280182302', '', 14, 2, 3, 'titulo-santa-cruz'),
(12, 'Titulo La pa', '<p>Este es el contenido desde la ciudad de la paz&nbsp;&nbsp;<span style="font-size: 1rem;">Este es el contenido desde la ciudad de la paz&nbsp;</span><span style="font-size: 1rem;">Este es el contenido desde la ciudad de la paz&nbsp;</span><span style="font-size: 1rem;">Este es el contenido desde la ciudad de la paz&nbsp;</span><span style="font-size: 1rem;">Este es el contenido desde la ciudad de la paz&nbsp;</span><span style="font-size: 1rem;">Este es el contenido desde la ciudad de la paz&nbsp;</span><span style="font-size: 1rem;">Este es el contenido desde la ciudad de la paz&nbsp;</span><span style="font-size: 1rem;">Este es el contenido desde la ciudad de la paz&nbsp;</span><span style="font-size: 1rem;">Este es el contenido desde la ciudad de la paz&nbsp;</span><span style="font-size: 1rem;">Este es el contenido desde la ciudad de la paz&nbsp;</span><span style="font-size: 1rem;">Este es el contenido desde la ciudad de la paz&nbsp;</span></p>', '0000-00-00 00:00:00', '-16.496371450322773', '-68.1372606754303', '', 13, 1, 2, 'titulo-la-paz'),
(13, 'titulo pando', '<p>Esta es la descripcion del contenido de pando&nbsp;<span style="font-size: 1rem;">Esta es la descripcion del contenido de pando&nbsp;</span><span style="font-size: 1rem;">Esta es la descripcion del contenido de pando&nbsp;</span><span style="font-size: 1rem;">Esta es la descripcion del contenido de pando&nbsp;</span><span style="font-size: 1rem;">Esta es la descripcion del contenido de pando&nbsp;</span><span style="font-size: 1rem;">Esta es la descripcion del contenido de pando&nbsp;</span><span style="font-size: 1rem;">Esta es la descripcion del contenido de pando&nbsp;</span><span style="font-size: 1rem;">Esta es la descripcion del contenido de pando&nbsp;</span><span style="font-size: 1rem;">Esta es la descripcion del contenido de pando&nbsp;</span><span style="font-size: 1rem;">Esta es la descripcion del contenido de pando v</span><span style="font-size: 1rem;">Esta es la descripcion del contenido de pando&nbsp;</span><span style="font-size: 1rem;">Esta es la descripcion del contenido de pando&nbsp;</span></p>', '0000-00-00 00:00:00', '-11.011500847808103', '-66.0718309879303', '', 13, 1, 8, 'titulo-pando'),
(14, 'titulo oruro', '<p>Esto es la descripcion de ORURO&nbsp;<span style="font-size: 1rem;">Esto es la descripcion de ORURO&nbsp;</span><span style="font-size: 1rem;">Esto es la descripcion de ORURO&nbsp;</span><span style="font-size: 1rem;">Esto es la descripcion de ORURO&nbsp;</span><span style="font-size: 1rem;">Esto es la descripcion de ORURO&nbsp;</span><span style="font-size: 1rem;">Esto es la descripcion de ORURO&nbsp;</span><span style="font-size: 1rem;">Esto es la descripcion de ORURO&nbsp;</span><span style="font-size: 1rem;">Esto es la descripcion de ORURO&nbsp;</span><span style="font-size: 1rem;">Esto es la descripcion de ORURO&nbsp;</span><span style="font-size: 1rem;">Esto es la descripcion de ORURO&nbsp;</span><span style="font-size: 1rem;">Esto es la descripcion de ORURO&nbsp;</span><span style="font-size: 1rem;">Esto es la descripcion de ORURO&nbsp;</span><span style="font-size: 1rem;">Esto es la descripcion de ORURO&nbsp;</span><span style="font-size: 1rem;">Esto es la descripcion de ORURO&nbsp;</span><span style="font-size: 1rem;">Esto es la descripcion de ORURO&nbsp;</span><span style="font-size: 1rem;">Esto es la descripcion de ORURO&nbsp;</span><span style="font-size: 1rem;">Esto es la descripcion de ORURO&nbsp;</span><span style="font-size: 1rem;">Esto es la descripcion de ORURO&nbsp;</span><span style="font-size: 1rem;">Esto es la descripcion de ORURO&nbsp;</span><span style="font-size: 1rem;">Esto es la descripcion de ORURO&nbsp;</span><span style="font-size: 1rem;">Esto es la descripcion de ORURO&nbsp;</span><span style="font-size: 1rem;">Esto es la descripcion de ORURO&nbsp;</span><span style="font-size: 1rem;">Esto es la descripcion de ORURO&nbsp;</span><span style="font-size: 1rem;">Esto es la descripcion de ORURO&nbsp;</span></p>', '0000-00-00 00:00:00', '-17.980953776414825', '-67.08595275878906', '', 9, 1, 6, 'titulo-oruro');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id_proyecto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

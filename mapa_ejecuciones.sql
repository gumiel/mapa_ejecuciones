-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-01-2018 a las 04:06:26
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mapa_ejecuciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE IF NOT EXISTS `proyecto` (
  `id_proyecto` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `latitud` varchar(50) NOT NULL,
  `longitud` varchar(50) NOT NULL,
  `img_miniatura` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id_proyecto`, `titulo`, `descripcion`, `fecha_creacion`, `latitud`, `longitud`, `img_miniatura`) VALUES
(1, 'Camino doble via La Paz Oruro', 'El presidente Evo Morales participó este miércoles en la inauguración de la piscina semiolímpica y recreacional del municipio de Sacaba que fue construida con Bs 12.563,106,00 (millones).  Además se realizó la firma de contrato para la construcción del hospital de segundo nivel Solomón Klein - distrito 2 que beneficiará a 66.628 familias.\n\n"Felizmente se ha culminado esta obra plenamente. Habiendo tantos campos deportivos, no es posible que no podamos practicarlo. El deporte no es salud e integración solamente, sino un derecho humano", expresó el Jefe de Estado.\n\nEn este marco, sugirió al municipio de Sacaba se dé un buen uso de los campos e instalaciones deportivas con los que cuenta. "No conviertan en un negocio los campos deportivos. Es obligación de las alcaldías hacer el mantenimiento y equipamiento, una vez entregadas las infraestructuras", puntualizó.\n\nPor su parte, el Gobernador de Cochabamba, Edmundo Novillo, destacó que el Gobierno nacional, a diferencia de los previos, cuenta con tres características distintivas y proactivas: gobierna con el pueblo, es liderado por un campesino originario y es antiimperialista.\n\n"Estas políticas gubernamentales han hecho que Bolivia se convierta en un referente internacional", sostuvo Novillo.\n\nEl acto se realizó en instalaciones de la nueva infraestructura, ubicada en la OTB Miraflores Norte donde participaron el Gobernador, el alcalde de, Humberto Sánchez, autoridades locales, y la población en general.\n\nEl alcalde de Sacaba, Humberto Sánchez, explicó que  durante los gobiernos neoliberales los municipios rurales no recibían dinero para la construcción de obras.  Por el contrario eran los propios pobladores quienes tenían que acotarse para cualquier edificación, por muy pequeña que esta sea.\n\nEl municipio de Sacaba cuenta con  169.000 habitantes y 12 distritos, de los cuales seis son urbanos y seis son rurales. Entre sus distritos urbanos están: Sacaba, Pacata, Quintanilla, Huayani, El Abra , Villa Obrajes y entre los rurales están Lauca, Aguirre, Chiñata, Ucuchi, Palcal y Larati.', '2017-12-06 00:00:00', '3423423', '4234234', 'evo_garcia_azucareraeconomiabolivia.jpg'),
(2, 'obras de impacto social en el municipio de Jesús de Machaca', 'el presidente Evo Morales entregó el jueves obras de impacto social, entre ellas: tinglados, sistemas de agua potable, riego y electrificación para el municipio de Jesús de Machaca, ubicado al suroeste de la ciudad de La Paz.\r\n\r\n''Mi respeto y admiración estamos entregando esa linda obra que es el edificio más grande de Jesús de Machaca, quedan inaugurados también los tinglados, el sistema de agua potable, la electrificación'', señaló en un masivo acto realizado en la plaza principal ''7 de Mayo'' de esa localidad, con la presencia de las autoridades locales y representantes de organizaciones indígena originarias campesinas de Jesús de Machaca. \r\n\r\nSegún datos oficiales, entre los proyectos entregados, están los tres tinglados para los polifuncionales de las comunidades de Corpa Marka, Sullkatiti y Chama, que fueron construidos con una inversión total de 1.178.364 bolivianos del programa ''Bolivia Cambia, Evo Cumple''.\r\n\r\nMorales también inauguró cinco obras del programa ''MiAgua'' tres de ellas para las comunidades de Santa Ana, Jesús de Machaca y Cama Bajo con una cobertura de agua potable de más del 50% de una población de casi 15 mil habitantes.\r\n\r\nOtras dos obras entregadas del programa ''Mi Agua'' fueron los sistemas de riego menor para las comunidades de Calla Cupuhuta y Jilatiti Seko, las que permitirán ampliar las hectáreas de producción de forraje, alfa alfa y pasto para el ganado, principalmente. \r\n\r\nAsimismo, el Presidente entregó la red de distribución primaria de energía eléctrica que permitirá interconectar a las comunidades de Ayllu Chijcha zona A y zona B, beneficiando a unas 230 familias, que contarán con luz las 24 horas del día.\r\n\r\nLa obra fue ejecutada en concurrencia con el Gobierno Departamental de La Paz, con una inversión de 1.398.795 bolivianos. \r\n\r\nAdemás, el Jefe de Estado anunció que en enero próximo el Gobierno financiará la construcción de un coliseo, graderías y césped sintético.\r\n\r\n''Nuestro compromiso es ejecutar tres proyectos, el coliseo, el campo deportivo con césped sintético y una unidad educativa'', finalizó.', '2017-12-30 00:00:00', '', '', '0025_7.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id_proyecto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

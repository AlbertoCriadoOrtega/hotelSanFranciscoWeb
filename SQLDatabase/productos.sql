-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2024 a las 02:01:12
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `productos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiencias`
--

CREATE TABLE `experiencias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` float NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `experiencias`
--

INSERT INTO `experiencias` (`id`, `nombre`, `precio`, `descripcion`, `cantidad`) VALUES
(1, 'Experiencia culinaria', 50, '¿Te gustaría disfrutar de una experiencia gastronómica única en Madrid? Ven al restaurante Aquí Santoña, donde podrás degustar las mejores conservas cántabras, acompañadas de vinos de calidad y tapas gourmet. Un lugar acogedor y auténtico, donde te sentirás como en casa. Reserva ya tu mesa y descubre los sabores del norte en el corazón de la capital. Aquí Santoña, el restaurante que te hará viajar con el paladar.', 50),
(2, 'Tour cultural', 100, '¿Quieres descubrir la riqueza cultural y artística de Madrid? Te invitamos a un tour guiado por los lugares más emblemáticos de la ciudad, como el Museo del Prado, el Palacio Real y la Plaza Mayor. Acompañado por un experto, conocerás la historia, las leyendas y los secretos de estos monumentos. Además, disfrutarás de un ambiente animado y acogedor, con opciones para todos los gustos. No te pierdas esta oportunidad de vivir Madrid de una forma diferente y divertida.', 53),
(3, 'Experiencias hotel\r\n', 200, '¿Te gustaría disfrutar de una estancia inolvidable en un hotel de lujo? En nuestro hotel de 5 estrellas, te ofrecemos experiencias únicas y personalizadas para que vivas momentos mágicos. Podrás relajarte en nuestro spa, degustar nuestra gastronomía, explorar nuestro entorno natural, o simplemente descansar en nuestras habitaciones con todas las comodidades. No lo dudes más y reserva ya tu escapada de ensueño con nosotros. Te esperamos con los brazos abiertos.\r\n', 200),
(4, 'Relajación en Spa\r\n', 150, '¿Te apetece desconectar de la realidad y sumergirte en un oasis de paz y armonía? En nuestro hotel con spa, te ofrecemos experiencias que te harán sentir como nuevo. Podrás elegir entre una variedad de servicios, como nuestro jacuzzi, nuestra sauna, nuestro baño turco, o nuestra piscina climatizada. También podrás mimarte con nuestros productos naturales, como nuestras cremas, nuestros aceites, o nuestros aromas. Y para completar tu estancia, podrás alojarte en nuestras acogedoras habitaciones y probar nuestra cocina tradicional. No lo dudes más y reserva ya tu experiencia de spa con nosotros. Te aseguramos que no te arrepentirás.\r\n', 50),
(5, 'Experiencia Deportes\r\n', 300, '¿Te gustaría combinar tu estancia en un hotel de 5 estrellas con la práctica de tu deporte favorito? En nuestro hotel con deportes, te ofrecemos experiencias que te harán disfrutar de la actividad física y el ocio. Podrás elegir entre una variedad de opciones, como golf, tenis, fútbol, esquí, o ciclismo. También podrás acceder a nuestro gimnasio, nuestras clases dirigidas, o nuestra piscina. Y para completar tu experiencia, podrás alojarte en nuestras modernas habitaciones y degustar nuestra cocina saludable. No lo pienses más y reserva ya tu experiencia de deportes con nosotros. Te prometemos que te divertirás.\r\n', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `experiencias`
--
ALTER TABLE `experiencias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `experiencias`
--
ALTER TABLE `experiencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

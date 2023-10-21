-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2023 a las 09:49:27
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `&_mixed_up`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `names` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `price` float NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `category` enum('vinyl','cd','cassette','minidisc','repplay') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `names`, `price`, `stock`, `image`, `category`) VALUES
(101, 'Tally Hall - Good & Evil Circular Design (Picture Disc) LP', 775, 48, '101.jpg', 'vinyl'),
(102, 'Lemon Demon – View-Monster Between The Frames (Picture Disc) LP', 680, 50, '102.jpg', 'vinyl'),
(103, 'The Scary Jokes – April Fools Candy Coated LP', 545, 50, '103.jpg', 'vinyl'),
(104, 'Tally Hall – Marvin’s Marvelous Mechanical Museum Reappears Into Chalk LP', 680, 50, '104.jpg', 'vinyl'),
(105, 'Lemon Demon – Nature Tapes BRODYQUEST (Picture Disc) LP', 500, 50, '105.jpg', 'vinyl'),
(106, 'Kawai Sprite – Friday Night Funkin’ OST Vol. 1 Girlfriend LP', 540, 50, '106.jpg', 'vinyl'),
(201, 'Lemon Demon – Spirit Phone Deluxe 2-CD Set', 290, 50, '201.jpg', 'cd'),
(202, 'Lemon Demon – I Am Become Christmas CD', 190, 50, '202.jpg', 'cd'),
(203, 'The Scary Jokes – Burn Pygmalion!!! A Better Guide to Romance CD', 230, 50, '203.jpg', 'cd'),
(204, 'Lemon Demon – Dinosaurchestra Deluxe 2-CD Set', 290, 50, '204.jpg', 'cd'),
(205, 'Tally Hall – Good & Evil CD', 230, 50, '205.jpg', 'cd'),
(206, 'Lemon Demon – View-Monster Deluxe 2-CD Set', 290, 50, '206.jpg', 'cd'),
(301, 'Tally Hall – Marvin’s Marvelous Mechanical Museum Cassette', 230, 50, '301.jpg', 'cassette'),
(302, 'Lemon Demon – Nature Tapes Cassette', 190, 50, '302.jpg', 'cassette'),
(303, 'The Scary Jokes – Burn Pygmalion!!! A Better Guide to Romance Cassette', 230, 50, '303.jpg', 'cassette'),
(304, 'Tally Hall – Good & Evil Cassette', 230, 50, '304.jpg', 'cassette'),
(305, 'Kawai Sprite – Friday Night Funkin’ OST Vol. 1 Cassette', 230, 50, '305.jpg', 'cassette'),
(306, 'The Scary Jokes – April Fools Cassette', 230, 50, '306.jpg', 'cassette'),
(401, 'Lemon Demon – Spirit Phone MiniDisc', 290, 50, '401.jpg', 'minidisc'),
(402, 'Tally Hall – Marvin’s Marvelous Mechanical Museum MiniDisc', 310, 50, '402.jpg', 'minidisc'),
(403, 'Lemon Demon – View-Monster MiniDisc', 290, 50, '403.jpg', 'minidisc'),
(404, 'Tally Hall – Good & Evil MiniDisc', 310, 50, '404.jpg', 'minidisc'),
(405, 'Lemon Demon – Dinosaurchestra MiniDisc', 290, 50, '405.jpg', 'minidisc'),
(406, 'Trust Fund Ozu – Tribute Summon MiniDisc', 250, 50, '406.jpg', 'minidisc'),
(501, 'BYRONSTATICS Reproductor de Discos de Vinilo, Tocadiscos de 3 velocidades con 2 Altavoces estéreo Integrados', 1447, 50, '501.jpg', 'repplay'),
(502, 'Victrola VSC-550BT-BK VSC-550BT-BK Tornamesa Bluetooth Portable Modelo Suitcase Color Negro, Una Talla', 1763, 50, '502.jpg', 'repplay'),
(503, 'Reproductor de CD portátil con Bluetooth, control remoto, montaje pared, bocinas HiFi integradas', 1383, 50, '503.jpg', 'repplay'),
(504, 'Sony CD Cassette Radio CFD-S70 B', 1772, 50, '504.jpg', 'repplay'),
(505, 'ByronStatics Reproductores de casete portátiles grabadoras FM AM Radio Walkman', 430, 50, '505.jpg', 'repplay'),
(506, 'Convertidor de casete USB a MP3, casete Walkman portátil, reproductor de música', 598, 50, '506.jpg', 'repplay');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `id_art` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `name_art` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `quantity` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `direction` text COLLATE utf8_spanish_ci NOT NULL,
  `zip` text COLLATE utf8_spanish_ci NOT NULL,
  `city` text COLLATE utf8_spanish_ci NOT NULL,
  `o_state` text COLLATE utf8_spanish_ci NOT NULL,
  `country` text COLLATE utf8_spanish_ci NOT NULL,
  `names` text COLLATE utf8_spanish_ci NOT NULL,
  `l_names` text COLLATE utf8_spanish_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('pendiente','pagado','','') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `names` text COLLATE utf8_spanish_ci NOT NULL,
  `l_names` text COLLATE utf8_spanish_ci NOT NULL,
  `tel` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `user` text COLLATE utf8_spanish_ci NOT NULL,
  `passname` text COLLATE utf8_spanish_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `names`, `l_names`, `tel`, `email`, `user`, `passname`, `date`) VALUES
(1, 'Yahir Hiram', 'Hernández', '656-456-8878', 'ejemplo@gmail.com', 'Admin', '1234', '2022-10-15 22:35:30'),
(2, 'Estefanía', 'Sánchez', '656-788-6778', 'ejemplo@gmail.com', 'Fanny', '12345', '2022-10-15 23:09:02'),
(3, 'Yahir Hiram', 'Hernández', '656-788-6778', 'ejemplo@gmail.com', 'yaya', '12345', '2022-10-26 04:17:40'),
(4, 'Daisy ', 'Gonzalez', '656-333-2817', 'kaisoo@gmail.com', 'Kaisoo', 'daisy1115.', '2022-11-19 19:34:29');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=507;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

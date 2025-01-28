-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-01-2025 a las 12:03:59
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `equipo_jugador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id_equipo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `socios` int(11) DEFAULT NULL,
  `fundacion` int(4) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id_equipo`, `nombre`, `socios`, `fundacion`, `ciudad`) VALUES
(1, 'Real Ávila', 639, 1923, 'Ávila'),
(2, 'FC Barcelona', 137514, 1898, 'Barcelona'),
(3, 'Real Madrid', 95612, 1902, 'Madrid'),
(4, 'Atlético de Madrid', 145638, 1903, 'Madrid'),
(5, 'Sevilla FC', 45000, 1890, 'Sevilla'),
(6, 'Valencia CF', 50000, 1919, 'Valencia'),
(7, 'Villarreal CF', 25000, 1923, 'Villarreal'),
(8, 'Real Betis', 60000, 1907, 'Sevilla'),
(9, 'Athletic Club', 50000, 1898, 'Bilbao'),
(10, 'Real Sociedad', 40000, 1909, 'San Sebastián'),
(11, 'Celta de Vigo', 30000, 1923, 'Vigo'),
(12, 'RCD Espanyol', 25000, 1900, 'Barcelona'),
(13, 'Getafe CF', 15000, 1983, 'Getafe'),
(14, 'Granada CF', 20000, 1931, 'Granada'),
(15, 'Levante UD', 18000, 1909, 'Valencia'),
(16, 'CA Osasuna', 22000, 1920, 'Pamplona'),
(17, 'Deportivo Alavés', 19000, 1921, 'Vitoria'),
(18, 'SD Eibar', 10000, 1940, 'Eibar'),
(19, 'Real Valladolid', 25000, 1928, 'Valladolid'),
(20, 'Elche CF', 23000, 1923, 'Elche'),
(21, 'Cádiz CF', 15000, 1910, 'Cádiz'),
(22, 'Rayo Vallecano', 18000, 1924, 'Madrid'),
(23, 'Girona FC', 12000, 1930, 'Girona'),
(24, 'UD Las Palmas', 20000, 1949, 'Las Palmas'),
(25, 'Málaga CF', 25000, 1904, 'Málaga'),
(26, 'Real Zaragoza', 30000, 1932, 'Zaragoza'),
(27, 'CD Leganés', 12000, 1928, 'Leganés'),
(28, 'SD Huesca', 8000, 1960, 'Huesca'),
(29, 'UD Almería', 10000, 1989, 'Almería'),
(30, 'Real Oviedo', 15000, 1926, 'Oviedo'),
(31, 'CD Tenerife', 20000, 1912, 'Santa Cruz de Tenerife'),
(32, 'Racing de Santander', 12000, 1913, 'Santander'),
(33, 'CD Numancia', 5000, 1945, 'Soria'),
(34, 'AD Alcorcón', 4000, 1971, 'Alcorcón'),
(35, 'CD Lugo', 3000, 1953, 'Lugo'),
(36, 'Real Murcia', 10000, 1908, 'Murcia'),
(37, 'Gimnàstic de Tarragona', 8000, 1914, 'Tarragona'),
(38, 'CE Sabadell', 6000, 1903, 'Sabadell'),
(39, 'CF Reus Deportiu', 3000, 1909, 'Reus'),
(40, 'CD Mirandés', 2000, 1927, 'Miranda de Ebro'),
(41, 'Cultural Leonesa', 5000, 1923, 'León'),
(42, 'Ponferradina', 4000, 1922, 'Ponferrada'),
(43, 'Albacete Balompié', 7000, 1940, 'Albacete'),
(44, 'Extremadura UD', 3000, 1924, 'Almendralejo'),
(45, 'UD Logroñés', 2000, 1940, 'Logroño'),
(46, 'Lleida Esportiu', 4000, 1939, 'Lleida'),
(47, 'FC Cartagena', 6000, 1995, 'Cartagena'),
(48, 'CD Castellón', 5000, 1922, 'Castellón de la Plana'),
(49, 'Hércules CF', 8000, 1922, 'Alicante'),
(50, 'UD Salamanca', 3000, 1923, 'Salamanca'),
(51, 'Xerez CD', 2000, 1947, 'Jerez de la Frontera'),
(52, 'Córdoba CF', 10000, 1954, 'Córdoba'),
(53, 'Recreativo de Huelva', 5000, 1889, 'Huelva'),
(54, 'UE Llagostera', 1000, 1947, 'Llagostera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `id_jugador` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `edad` int(2) DEFAULT NULL,
  `equipo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `jugador`
--

INSERT INTO `jugador` (`id_jugador`, `nombre`, `apellidos`, `edad`, `equipo`) VALUES
(1, 'Castolo', 'Conçeisao', 25, 3),
(2, 'Mario', 'Rivas', 27, 1),
(3, 'Natan', 'Blanco', 30, 2),
(4, 'Lionel', 'Messi', 36, 2),
(5, 'Cristiano', 'Ronaldo', 38, 3),
(6, 'Antoine', 'Griezmann', 32, 4),
(7, 'Sergio', 'Ramos', 37, 3),
(8, 'Gerard', 'Piqué', 36, 2),
(9, 'Karim', 'Benzema', 35, 3),
(10, 'Luis', 'Suárez', 36, 2),
(11, 'Jan', 'Oblak', 30, 4),
(12, 'Marc-André', 'ter Stegen', 31, 2),
(13, 'Thibaut', 'Courtois', 31, 3),
(14, 'Jordi', 'Alba', 34, 2),
(15, 'Dani', 'Carvajal', 31, 3),
(16, 'Koke', 'Resurrección', 31, 4),
(17, 'Saúl', 'Ñíguez', 28, 4),
(18, 'Frenkie', 'de Jong', 26, 2),
(19, 'Pedri', 'González', 20, 2),
(20, 'Gavi', 'Páez', 19, 2),
(21, 'Ansu', 'Fati', 20, 2),
(22, 'Yeremy', 'Pino', 20, 7),
(23, 'Pau', 'Torres', 26, 7),
(24, 'Gerard', 'Moreno', 31, 7),
(25, 'Nabil', 'Fekir', 29, 8),
(26, 'Sergio', 'Canales', 32, 8),
(27, 'Iñaki', 'Williams', 29, 9),
(28, 'Unai', 'Simón', 26, 9),
(29, 'Mikel', 'Oyarzabal', 26, 10),
(30, 'Alexander', 'Isak', 23, 10),
(31, 'Iago', 'Aspas', 35, 11),
(32, 'Brais', 'Méndez', 26, 11),
(33, 'Raúl', 'de Tomás', 28, 12),
(34, 'Dídac', 'Vilà', 33, 12),
(35, 'Enes', 'Ünal', 26, 13),
(36, 'Dakonam', 'Djené', 31, 13),
(37, 'Jorge', 'Molina', 40, 14),
(38, 'Luis', 'Millá', 29, 14),
(39, 'José Luis', 'Morales', 35, 15),
(40, 'Roger', 'Martí', 31, 15),
(41, 'Chimy', 'Ávila', 28, 16),
(42, 'David', 'García', 29, 16),
(43, 'Manu', 'García', 25, 17),
(44, 'Luis', 'Rioja', 29, 17),
(45, 'Sergi', 'Enrich', 33, 18),
(46, 'Quique', 'González', 28, 18),
(47, 'Sergio', 'León', 34, 19),
(48, 'Shon', 'Weissman', 27, 19),
(49, 'Lucas', 'Pérez', 34, 20),
(50, 'Fidel', 'Chaves', 32, 20),
(51, 'Álex', 'Fernández', 31, 21),
(52, 'Anthony', 'Lozano', 30, 21),
(53, 'Isi', 'Palazón', 28, 22),
(54, 'Randy', 'Nteka', 25, 22),
(55, 'Cristhian', 'Stuani', 36, 23),
(56, 'Yangel', 'Herrera', 25, 23),
(57, 'Jonathan', 'Viera', 33, 24),
(58, 'Sandro', 'Ramírez', 28, 24),
(59, 'Luis', 'Hernández', 30, 25),
(60, 'Jozabed', 'Sánchez', 32, 25),
(61, 'Alberto', 'Soro', 24, 26),
(62, 'Sergio', 'Bermudo', 22, 26),
(63, 'Miguel', 'De la Fuente', 21, 27),
(64, 'José', 'Arnáiz', 27, 27),
(65, 'Rafa', 'Mir', 25, 28),
(66, 'Dani', 'Escriche', 22, 28),
(67, 'Largie', 'Ramazani', 22, 29),
(68, 'Lucas', 'Robertone', 26, 29),
(69, 'Borja', 'Sánchez', 30, 30),
(70, 'Sergio', 'Tejera', 33, 30),
(71, 'Ángel', 'Montoro', 34, 31),
(72, 'Enric', 'Gallego', 36, 31),
(73, 'Matías', 'Nieto', 30, 32),
(74, 'Aritz', 'López Garai', 24, 32),
(75, 'Higinio', 'Marín', 29, 33),
(76, 'Dani', 'Ojeda', 28, 33),
(77, 'Álvaro', 'Giménez', 32, 34),
(78, 'Cristian', 'Gutiérrez', 25, 34),
(79, 'Joselu', 'Moreno', 33, 35),
(80, 'Claudio', 'Mendes', 28, 35),
(81, 'Juanma', 'García', 29, 36),
(82, 'Javi', 'Márquez', 36, 36),
(83, 'Jordi', 'Figueras', 35, 37),
(84, 'Pol', 'Lozano', 24, 37),
(85, 'Ferran', 'Corominas', 40, 38),
(86, 'Javi', 'López', 37, 38),
(87, 'Marc', 'Martínez', 27, 39),
(88, 'Álex', 'Carbonell', 29, 39),
(89, 'Álvaro', 'Peña', 23, 40),
(90, 'Álex', 'Pascual', 25, 40),
(91, 'Yeray', 'González', 27, 41),
(92, 'Sergio', 'Molina', 30, 41),
(93, 'Yuri', 'de Souza', 39, 42),
(94, 'Dani', 'Aguirre', 28, 42),
(95, 'Rubén', 'Cruz', 29, 43),
(96, 'Juanma', 'Díaz', 30, 43),
(97, 'Javi', 'Sánchez', 25, 44),
(98, 'Álex', 'Gallar', 29, 44),
(99, 'Javi', 'Mújica', 32, 45),
(100, 'Iván', 'Martos', 30, 45),
(101, 'Marc', 'Valiente', 35, 46),
(102, 'Jordi', 'Calsamiglia', 28, 46),
(103, 'Alfredo', 'Ortuño', 30, 47),
(104, 'Javi', 'Jiménez', 27, 47),
(105, 'Sergio', 'Mantecón', 33, 48),
(106, 'Javi', 'Gálvez', 29, 48),
(107, 'Juan Carlos', 'Real', 34, 49),
(108, 'Javi', 'Vázquez', 28, 49),
(109, 'Javi', 'Narváez', 26, 50),
(110, 'Javi', 'Ros', 30, 50),
(111, 'Javi', 'Gómez', 28, 51),
(112, 'Javi', 'Caballero', 27, 51),
(113, 'Javi', 'Méndez', 29, 52),
(114, 'Javi', 'López', 28, 52),
(115, 'Javi', 'Carrillo', 26, 53),
(116, 'Javi', 'Pérez', 27, 53),
(117, 'Javi', 'García', 25, 54),
(118, 'Javi', 'Ruiz', 24, 54),
(119, 'Adrián', 'López', 28, 1),
(120, 'Alberto', 'Toril', 29, 2),
(121, 'Alejandro', 'Pozuelo', 31, 3),
(122, 'Álex', 'Moreno', 29, 4),
(123, 'Álvaro', 'Negredo', 37, 5),
(124, 'Andrés', 'Iniesta', 39, 6),
(125, 'Antonio', 'Luna', 32, 7),
(126, 'Borja', 'Iglesias', 30, 8),
(127, 'Carlos', 'Soler', 26, 9),
(128, 'Dani', 'Parejo', 34, 10),
(129, 'David', 'Silva', 37, 11),
(130, 'Diego', 'Costa', 34, 12),
(131, 'Éver', 'Banega', 35, 13),
(132, 'Fernando', 'Torres', 39, 14),
(133, 'Gabriel', 'Paulista', 32, 15),
(134, 'Gerard', 'Deulofeu', 29, 16),
(135, 'Gonzalo', 'Higuaín', 35, 17),
(136, 'Héctor', 'Bellerín', 28, 18),
(137, 'Iker', 'Muniain', 30, 19),
(138, 'Isco', 'Alarcón', 31, 20),
(139, 'Jesús', 'Navas', 37, 21),
(140, 'Joaquín', 'Sánchez', 41, 22),
(141, 'José', 'Callejón', 36, 23),
(142, 'Juan', 'Mata', 35, 24),
(143, 'Julián', 'Alvarez', 23, 25),
(144, 'Kiko', 'Casilla', 36, 26),
(145, 'Lucas', 'Vázquez', 31, 27),
(146, 'Marcos', 'Alonso', 32, 28),
(147, 'Mario', 'Gaspar', 31, 29),
(148, 'Nolito', 'Agudo', 36, 30),
(149, 'Pablo', 'Fornals', 27, 31),
(150, 'Raúl', 'Albiol', 37, 32),
(151, 'Roberto', 'Soldado', 37, 33),
(152, 'Rodri', 'Hernández', 26, 34),
(153, 'Rubén', 'Castro', 41, 35),
(154, 'Santi', 'Cazorla', 38, 36),
(155, 'Sergio', 'Agüero', 35, 37),
(156, 'Thiago', 'Alcántara', 32, 38),
(157, 'Víctor', 'Ruiz', 34, 39),
(158, 'Xabi', 'Prieto', 39, 40),
(159, 'Yeremi', 'Pino', 20, 41),
(160, 'Zouhair', 'Feddal', 33, 42),
(161, 'Adama', 'Traoré', 27, 43),
(162, 'Aitor', 'Ruibal', 26, 44),
(163, 'Aleix', 'García', 25, 45),
(164, 'Álvaro', 'García', 26, 46),
(165, 'Ander', 'Guevara', 25, 47),
(166, 'Antonio', 'Raíllo', 30, 48),
(167, 'Brais', 'Méndez', 26, 49),
(168, 'Carlos', 'Clerc', 30, 50),
(169, 'Dani', 'Vivian', 23, 51),
(170, 'David', 'López', 33, 52),
(171, 'Edu', 'Expósito', 26, 53),
(172, 'Enric', 'Gallego', 36, 54),
(173, 'Fede', 'Valverde', 24, 1),
(174, 'Fernando', 'Pacheco', 30, 2),
(175, 'Fran', 'Beltran', 23, 3),
(176, 'Gonzalo', 'Villar', 24, 4),
(177, 'Hugo', 'Mallo', 31, 5),
(178, 'Iago', 'Aspas', 35, 6),
(179, 'Iván', 'Alejo', 27, 7),
(180, 'Javi', 'Galán', 28, 8),
(181, 'Jesús', 'Areso', 23, 9),
(182, 'Jorge', 'Cuenca', 23, 10),
(183, 'José', 'Gaya', 27, 11),
(184, 'Juan', 'Foyth', 25, 12),
(185, 'Kike', 'García', 33, 13),
(186, 'Lucas', 'Olaza', 28, 14),
(187, 'Manu', 'Trigueros', 31, 15),
(188, 'Marc', 'Roca', 26, 16),
(189, 'Marcos', 'Acuña', 31, 17),
(190, 'Mikel', 'Merino', 26, 18),
(191, 'Nemanja', 'Gudelj', 31, 19),
(192, 'Nicolás', 'Tagliafico', 30, 20),
(193, 'Óscar', 'Rodríguez', 24, 21),
(194, 'Pape', 'Cissé', 32, 22),
(195, 'Pau', 'Torres', 26, 23),
(196, 'Pedro', 'Porro', 23, 24),
(197, 'Rafa', 'Mir', 25, 25),
(198, 'Raúl', 'García', 36, 26),
(199, 'Reinildo', 'Mandava', 29, 27),
(200, 'Renan', 'Lodi', 24, 28),
(201, 'Rodrigo', 'Moreno', 31, 29),
(202, 'Rubén', 'Sobrino', 30, 30),
(203, 'Sergio', 'Escudero', 33, 31),
(204, 'Sergio', 'Canales', 32, 32),
(205, 'Sergio', 'Rico', 29, 33),
(206, 'Sergio', 'Reguilón', 26, 34),
(207, 'Thomas', 'Partey', 29, 35),
(208, 'Unai', 'Simón', 26, 36),
(209, 'Víctor', 'Campos', 23, 37),
(210, 'Víctor', 'Díaz', 30, 38),
(211, 'Víctor', 'García', 28, 39),
(212, 'Víctor', 'López', 27, 40),
(213, 'Víctor', 'Molina', 26, 41),
(214, 'Víctor', 'Navas', 35, 42),
(215, 'Víctor', 'Pérez', 29, 43),
(216, 'Víctor', 'Ruiz', 34, 44),
(217, 'Víctor', 'Sánchez', 35, 45),
(218, 'Víctor', 'Vázquez', 36, 46),
(219, 'Víctor', 'Álvarez', 30, 47),
(220, 'Víctor', 'Fernández', 29, 48),
(221, 'Víctor', 'Gómez', 23, 49),
(222, 'Víctor', 'Laguardia', 33, 50),
(223, 'Víctor', 'Machín', 28, 51),
(224, 'Víctor', 'Morales', 27, 52),
(225, 'Víctor', 'Núñez', 26, 53),
(226, 'Víctor', 'Rodríguez', 34, 54),
(227, 'Xavi', 'Hernández', 43, 1),
(228, 'Yannick', 'Carrasco', 29, 2),
(229, 'Yeremi', 'Pino', 20, 3),
(230, 'Youssef', 'En-Nesyri', 25, 4),
(231, 'Zouhair', 'Feddal', 33, 5),
(232, 'Adrián', 'San Miguel', 36, 6),
(233, 'Aitor', 'Fernández', 31, 7),
(234, 'Álvaro', 'Odriozola', 27, 8),
(235, 'Ander', 'Capa', 30, 9),
(236, 'Antonio', 'Adán', 35, 10),
(237, 'Aritz', 'Elustondo', 29, 11),
(238, 'Asier', 'Villalibre', 25, 12),
(239, 'Brais', 'Méndez', 26, 13),
(240, 'Carlos', 'Fernández', 26, 14),
(241, 'Dani', 'Ceballos', 26, 15),
(242, 'David', 'García', 29, 16),
(243, 'Eduardo', 'Camavinga', 20, 17),
(244, 'Ferland', 'Mendy', 27, 18),
(245, 'Francisco', 'Román', 30, 19),
(246, 'Gerard', 'Piqué', 36, 20),
(247, 'Gonçalo', 'Guedes', 26, 21),
(248, 'Héctor', 'Herrera', 32, 22),
(249, 'Iñigo', 'Martínez', 31, 23),
(250, 'Javi', 'Martínez', 34, 24),
(251, 'Jesús', 'Vallejo', 26, 25),
(252, 'Jorge', 'Molina', 40, 26),
(253, 'José', 'Giménez', 28, 27),
(254, 'Juan', 'Bernat', 29, 28),
(255, 'Koke', 'Resurrección', 31, 29),
(256, 'Lucas', 'Hernández', 27, 30),
(257, 'Marc', 'Bartra', 32, 31),
(258, 'Marcos', 'Llorente', 28, 32),
(259, 'Mario', 'Hermoso', 27, 33),
(260, 'Mikel', 'Oyarzabal', 26, 34),
(261, 'Nahuel', 'Molina', 24, 35),
(262, 'Nemanja', 'Maksimović', 28, 36),
(263, 'Nicolás', 'Otamendi', 35, 37),
(264, 'Pablo', 'Maffeo', 25, 38),
(265, 'Pau', 'Torres', 26, 39),
(266, 'Raúl', 'García', 36, 40),
(267, 'Reinier', 'Jesus', 21, 41),
(268, 'Rodrygo', 'Goes', 22, 42),
(269, 'Ronald', 'Araújo', 23, 43),
(270, 'Sergio', 'Busquets', 34, 44),
(271, 'Thiago', 'Alcántara', 32, 45),
(272, 'Unai', 'Núñez', 25, 46),
(273, 'Víctor', 'Chust', 22, 47),
(274, 'Yeray', 'Álvarez', 27, 48),
(275, 'Zidane', 'Fernández', 20, 49),
(276, 'Adrián', 'Marín', 26, 50),
(277, 'Aitor', 'Bunuel', 24, 51),
(278, 'Álvaro', 'Aguirre', 23, 52),
(279, 'Ander', 'Barrenetxea', 21, 53),
(280, 'Antonio', 'Sivera', 26, 54);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`id_jugador`),
  ADD KEY `jugador_FK` (`equipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `jugador`
--
ALTER TABLE `jugador`
  MODIFY `id_jugador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD CONSTRAINT `jugador_FK` FOREIGN KEY (`equipo`) REFERENCES `equipo` (`id_equipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

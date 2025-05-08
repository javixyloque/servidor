-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2025 at 12:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_alumnos`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumno` int(11) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido1` varchar(20) NOT NULL,
  `apellido2` varchar(20) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `dni`, `nombre`, `apellido1`, `apellido2`, `email`, `telefono`, `curso`) VALUES
(11, '41069326D', 'Ana', 'Gómez', 'Sánchez', 'ana.gómez@correo.com', '679752825', 2),
(12, '55631441B', 'Carlos', 'Gómez', 'Pérez', 'carlos.gómez@email.net', '683183588', 5),
(13, '60073491V', 'Luis', 'García', 'Pérez', 'luis.garcía@correo.com', '642540732', 2),
(14, '95883943V', 'Lucía', 'López', 'Martínez', 'lucía.lópez@correo.com', '626637101', 3),
(15, '62457902D', 'Ana', 'Rodríguez', 'Gómez', 'ana.rodríguez@correo.com', '677112223', 1),
(16, '64858660W', 'Lucía', 'Fernández', 'Sánchez', 'lucía.fernández@email.net', '668105974', 5),
(17, '90449524M', 'Laura', 'García', 'Sánchez', 'laura.garcía@example.com', '659449657', 1),
(18, '62847704B', 'Sofía', 'García', 'Pérez', 'sofía.garcía@example.com', '683754628', 3),
(19, '84171408F', 'Carlos', 'Fernández', 'López', 'carlos.fernández@correo.com', '636620161', 4),
(20, '19082594H', 'María', 'Rodríguez', 'Rodríguez', 'maría.rodríguez@correo.com', '665726326', 1),
(21, '38550127N', 'Pedro', 'Pérez', 'Sánchez', 'pedro.pérez@email.net', '679235788', 3),
(22, '76218008K', 'María', 'Martínez', 'Gómez', 'maría.martínez@email.net', '622354326', 3),
(23, '92632613I', 'Miguel', 'Fernández', 'García', 'miguel.fernández@email.net', '632971192', 1),
(24, '19920677J', 'María', 'Martínez', 'Pérez', 'maría.martínez@example.com', '631047506', 4),
(25, '19831568Y', 'Laura', 'García', 'Sánchez', 'laura.garcía@email.net', '662368312', 4),
(26, '80731194S', 'Juan', 'Rodríguez', 'López', 'juan.rodríguez@example.com', '617458376', 5),
(27, '83963556U', 'Luis', 'Pérez', 'García', 'luis.pérez@correo.com', '600682772', 3),
(28, '66488193C', 'Luis', 'Sánchez', 'López', 'luis.sánchez@example.com', '661994960', 3),
(29, '85819202R', 'Carlos', 'López', 'Sánchez', 'carlos.lópez@email.net', '691119227', 3),
(30, '22322597C', 'Ana', 'Fernández', 'Rodríguez', 'ana.fernández@example.com', '677112456', 2),
(31, '45660840O', 'Carlos', 'Rodríguez', 'Rodríguez', 'carlos.rodríguez@email.net', '656565872', 2),
(32, '87424899S', 'Lucía', 'García', 'García', 'lucía.garcía@example.com', '614737764', 3),
(33, '75562135S', 'Luis', 'Pérez', 'Martínez', 'luis.pérez@correo.com', '637187023', 1),
(34, '73456557T', 'María', 'García', 'Pérez', 'maría.garcía@correo.com', '673161454', 4),
(35, '65584653S', 'Juan', 'Rodríguez', 'Pérez', 'juan.rodríguez@example.com', '692707995', 3),
(36, '80746040W', 'Juan', 'Pérez', 'Rodríguez', 'juan.pérez@example.com', '666832039', 2),
(37, '16408353B', 'Sofía', 'García', 'López', 'sofía.garcía@correo.com', '629882058', 2),
(38, '44480977M', 'Laura', 'Rodríguez', 'López', 'laura.rodríguez@email.net', '678781426', 2),
(39, '25933692S', 'Laura', 'Martínez', 'Fernández', 'laura.martínez@email.net', '600466460', 2),
(40, '31805909H', 'Laura', 'Pérez', 'García', 'laura.pérez@example.com', '618139056', 3),
(41, '86802878K', 'María', 'Martínez', 'López', 'maría.martínez@example.com', '686689509', 2),
(42, '37208389B', 'Carlos', 'Rodríguez', 'Sánchez', 'carlos.rodríguez@example.com', '616062411', 2),
(43, '99906210B', 'Carlos', 'García', 'Fernández', 'carlos.garcía@email.net', '661915513', 4),
(44, '59440582K', 'María', 'Gómez', 'Sánchez', 'maría.gómez@example.com', '607630892', 2),
(45, '74188893H', 'Miguel', 'Martínez', 'López', 'miguel.martínez@example.com', '668581426', 3),
(46, '63838797W', 'María', 'García', 'Martínez', 'maría.garcía@example.com', '678061633', 1),
(47, '24862629S', 'Carlos', 'López', 'Gómez', 'carlos.lópez@correo.com', '605819345', 1),
(48, '56177486T', 'Juan', 'Pérez', 'López', 'juan.pérez@example.com', '632159315', 2),
(49, '89125476C', 'Miguel', 'Rodríguez', 'Pérez', 'miguel.rodríguez@email.net', '610402488', 2),
(50, '54174143Y', 'Carlos', 'Gómez', 'Sánchez', 'carlos.gómez@email.net', '669143548', 3);

-- --------------------------------------------------------

--
-- Table structure for table `proyecto`
--

CREATE TABLE `proyecto` (
  `id_proyecto` int(11) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `periodo` varchar(100) DEFAULT NULL,
  `curso` varchar(100) DEFAULT NULL,
  `fecha_presentacion` varchar(100) DEFAULT NULL,
  `nota` int(11) DEFAULT NULL,
  `logotipo` blob DEFAULT NULL,
  `pdf_proyecto` varchar(100) DEFAULT NULL,
  `alumno` int(11) DEFAULT NULL,
  `tutor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proyecto`
--

INSERT INTO `proyecto` (`id_proyecto`, `titulo`, `descripcion`, `periodo`, `curso`, `fecha_presentacion`, `nota`, `logotipo`, `pdf_proyecto`, `alumno`, `tutor`) VALUES
(1, 'Proyecto 1', 'Descripción del proyecto 1', 'Periodo 2024', '3', '2024-02-01', 90, NULL, NULL, 11, 1),
(2, 'Proyecto 2', 'Descripción del proyecto 2', 'Periodo 2024', '4', '2024-03-01', 85, NULL, NULL, 12, 2),
(3, 'Proyecto 3', 'Descripción del proyecto 3', 'Periodo 2024', '5', '2024-04-01', 88, NULL, NULL, 13, 3),
(4, 'Proyecto 4', 'Descripción del proyecto 4', 'Periodo 2023', '2', '2024-05-10', 75, NULL, NULL, 14, 2),
(5, 'Proyecto 5', 'Descripción del proyecto 5', 'Periodo 2023', '3', '2024-06-15', 82, NULL, NULL, 15, 3),
(6, 'Proyecto 6', 'Descripción del proyecto 6', 'Periodo 2022', '4', '2024-07-20', 89, NULL, NULL, 16, 4),
(7, 'Proyecto 7', 'Descripción del proyecto 7', 'Periodo 2024', '1', '2024-08-25', 92, NULL, NULL, 17, 7),
(8, 'Proyecto 8', 'Descripción del proyecto 8', 'Periodo 2021', '5', '2024-09-30', 88, NULL, NULL, 18, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `id_tutor` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `nomTutor` varchar(20) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `tipo_usu` int(1) NOT NULL,
  `baja` tinyint(1) NOT NULL,
  `activar` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id_tutor`, `login`, `password`, `correo`, `nomTutor`, `apellidos`, `tipo_usu`, `baja`, `activar`) VALUES
(1, 'admin', 'admin123', 'admin@admin.es', 'Administrador', 'Del SGBD', 1, 0, 'activo'),
(2, 'tutor1', 'pass1', 'tutor1@example.com', 'TutorNombre1', 'TutorApellido1', 2, 0, 'inactivo'),
(3, 'tutor2', 'pass2', 'tutor2@example.com', 'TutorNombre2', 'TutorApellido2', 2, 0, 'inactivo'),
(4, 'tutor3', 'pass3', 'tutor3@example.com', 'TutorNombre3', 'TutorApellido3', 2, 0, 'inactivo'),
(5, 'tutor4', 'pass4', 'tutor4@example.com', 'TutorNombre4', 'TutorApellido4', 2, 0, 'inactivo'),
(6, 'tutor5', 'pass5', 'tutor5@example.com', 'TutorNombre5', 'TutorApellido5', 2, 0, 'inactivo'),
(7, 'tutor6', 'pass6', 'tutor6@example.com', 'TutorNombre6', 'TutorApellido6', 2, 0, 'inactivo'),
(8, 'tutor7', 'pass7', 'tutor7@example.com', 'TutorNombre7', 'TutorApellido7', 2, 0, 'inactivo'),
(9, 'tutor8', 'pass8', 'tutor8@example.com', 'TutorNombre8', 'TutorApellido8', 2, 0, 'inactivo'),
(10, 'tutor9', 'pass9', 'tutor9@example.com', 'TutorNombre9', 'TutorApellido9', 2, 0, 'inactivo'),
(11, 'tutor10', 'pass10', 'tutor10@example.com', 'TutorNombre10', 'TutorApellido10', 2, 0, 'inactivo'),
(13, 'josefina57', '1234', 'josefa@lajefa', 'Josefina', 'Fina Filipina', 2, 0, 'inactivo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indexes for table `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id_proyecto`),
  ADD KEY `fk_alumno` (`alumno`),
  ADD KEY `fk_tutor` (`tutor`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id_tutor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id_tutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `fk_alumno` FOREIGN KEY (`alumno`) REFERENCES `alumnos` (`id_alumno`),
  ADD CONSTRAINT `fk_tutor` FOREIGN KEY (`tutor`) REFERENCES `tutor` (`id_tutor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

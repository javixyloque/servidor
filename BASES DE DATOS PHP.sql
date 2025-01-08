-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-01-2025 a las 13:57:00
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `302_modeloer`
--
CREATE DATABASE IF NOT EXISTS `302_modeloer` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `302_modeloer`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

CREATE TABLE `editorial` (
  `id_editorial` int(11) NOT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`id_editorial`, `nombre`, `direccion`, `telefono`) VALUES
(1, 'alfaguara', 'Calle Velázquez', '+34675345643'),
(2, 'trinity', 'Calle del caño', '+34655345643'),
(3, 'carbon', 'Calle salsipuedes', '+34665345643'),
(4, 'marron', 'Calle Velázquez', '+34675345643'),
(5, 'copas', 'Calle Osmundo Margareto', '+34685345643'),
(6, 'omorodion', NULL, '645821563'),
(7, 'jose manuel', NULL, '645821563'),
(8, 'isadfasiogdihaershgoghaeg', NULL, '645821563234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `id_libro` int(11) NOT NULL,
  `autor` varchar(60) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `isbn` varchar(30) DEFAULT NULL,
  `id_editorial` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id_libro`, `autor`, `titulo`, `isbn`, `id_editorial`) VALUES
(1, 'Lewis Carroll', 'Alicia en el pais de las maravillas', '34908578932475', 1),
(2, 'Maurice Sendak', 'Donde viven los monstruos', '33908578432475', 2),
(3, 'Pippi calzaslargas', 'Astrid Lindgren', '31208765932345', 1),
(4, 'Astrid Lindgren', 'Pippi calzaslargas', '12906734232555', 4),
(5, 'JRR Tolkien', 'Alicia en el pais de las maravillas', '34908578932475', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`id_editorial`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id_libro`),
  ADD KEY `libro_fk` (`id_editorial`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `editorial`
--
ALTER TABLE `editorial`
  MODIFY `id_editorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `libro_fk` FOREIGN KEY (`id_editorial`) REFERENCES `editorial` (`id_editorial`);
--
-- Base de datos: `gestion_alumnos`
--
CREATE DATABASE IF NOT EXISTS `gestion_alumnos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gestion_alumnos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
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
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `dni`, `nombre`, `apellido1`, `apellido2`, `email`, `telefono`, `curso`) VALUES
(11, '41069326D', 'Ana', 'Gómez', 'Sánchez', 'ana.gómez@correo.com', '679752825', 2),
(13, '60073491V', 'Luis', 'García', 'Pérez', 'luis.garcía@correo.com', '642540732', 2),
(14, '95883943V', 'Lucía', 'López', 'Martínez', 'lucía.lópez@correo.com', '626637101', 3),
(15, '62457902D', 'Ana', 'Rodríguez', 'Gómez', 'ana.rodríguez@correo.com', '677112223', 1),
(17, '90449524M', 'Laura', 'García', 'Sánchez', 'laura.garcía@example.com', '659449657', 1),
(18, '62847704B', 'Sofía', 'García', 'Pérez', 'sofía.garcía@example.com', '683754628', 3),
(19, '84171408F', 'Carlos', 'Fernández', 'López', 'carlos.fernández@correo.com', '636620161', 4),
(20, '19082594H', 'María', 'Rodríguez', 'Rodríguez', 'maría.rodríguez@correo.com', '665726326', 1),
(21, '38550127N', 'Pedro', 'Pérez', 'Sánchez', 'pedro.pérez@email.net', '679235788', 3),
(22, '76218008K', 'María', 'Martínez', 'Gómez', 'maría.martínez@email.net', '622354326', 3),
(23, '92632613I', 'Miguel', 'Fernández', 'García', 'miguel.fernández@email.net', '632971192', 1),
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
-- Estructura de tabla para la tabla `proyecto`
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
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id_proyecto`, `titulo`, `descripcion`, `periodo`, `curso`, `fecha_presentacion`, `nota`, `logotipo`, `pdf_proyecto`, `alumno`, `tutor`) VALUES
(1, 'Proyecto 1', 'Descripción del proyecto 1', 'Periodo 2024', '3', '2024-02-01', 90, NULL, NULL, 11, 1),
(2, 'Proyecto 2', 'Descripción del proyecto 2', 'Periodo 2024', '4', '2024-03-01', 85, NULL, NULL, NULL, 2),
(3, 'Proyecto 3', 'Descripción del proyecto 3', 'Periodo 2024', '5', '2024-04-01', 88, NULL, NULL, 13, 3),
(4, 'Proyecto 4', 'Descripción del proyecto 4', 'Periodo 2023', '2', '2024-05-10', 75, NULL, NULL, 14, 2),
(5, 'Proyecto 5', 'Descripción del proyecto 5', 'Periodo 2023', '3', '2024-06-15', 82, NULL, NULL, 15, 3),
(6, 'Proyecto 6', 'Descripción del proyecto 6', 'Periodo 2022', '4', '2024-07-20', 89, NULL, NULL, NULL, 4),
(7, 'Proyecto 7', 'Descripción del proyecto 7', 'Periodo 2024', '1', '2024-08-25', 92, NULL, NULL, 17, 7),
(8, 'Proyecto 8', 'Descripción del proyecto 8', 'Periodo 2021', '5', '2024-09-30', 88, NULL, NULL, 18, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutor`
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
-- Volcado de datos para la tabla `tutor`
--

INSERT INTO `tutor` (`id_tutor`, `login`, `password`, `correo`, `nomTutor`, `apellidos`, `tipo_usu`, `baja`, `activar`) VALUES
(1, 'admin', 'admin123', 'admin@admin.es', 'Administrador', 'Del SGBD', 1, 0, 'activo'),
(2, 'tutor1', 'pass1', 'tutor1@example.com', 'TutorNombre1', 'TutorApellido1', 2, 1, 'inactivo'),
(3, 'tutor2', 'pass2', 'tutor2@example.com', 'TutorNombre2', 'TutorApellido2', 2, 0, 'activo'),
(4, 'tutor3', 'pass3', 'tutor3@example.com', 'TutorNombre3', 'TutorApellido3', 2, 0, 'inactivo'),
(5, 'tutor4', 'pass4', 'tutor4@example.com', 'TutorNombre4', 'TutorApellido4', 2, 0, 'inactivo'),
(6, 'tutor5', 'pass5', 'tutor5@example.com', 'TutorNombre5', 'TutorApellido5', 2, 0, 'inactivo'),
(7, 'tutor6', 'pass6', 'tutor6@example.com', 'TutorNombre6', 'TutorApellido6', 2, 0, 'inactivo'),
(8, 'tutor7', 'pass7', 'tutor7@example.com', 'TutorNombre7', 'TutorApellido7', 2, 0, 'inactivo'),
(9, 'tutor8', 'pass8', 'tutor8@example.com', 'TutorNombre8', 'TutorApellido8', 2, 0, 'inactivo'),
(10, 'tutor9', 'pass9', 'tutor9@example.com', 'TutorNombre9', 'TutorApellido9', 2, 0, 'inactivo'),
(11, 'tutor10', 'pass10', 'tutor10@example.com', 'TutorNombre10', 'TutorApellido10', 2, 0, 'inactivo'),
(13, 'josefina57', '1234', 'josefa@lajefa', 'Josefina', 'Fina Filipina', 2, 1, 'activo'),
(14, 'juancar', '123', 'juancar@hola.es', 'Juan Carlos', 'Perez Galdós', 2, 0, 'activo'),
(15, 'juancar', '123', 'juancar@hola.es', 'Juan Carlos', 'Perez Galdós', 2, 0, 'activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id_proyecto`),
  ADD KEY `fk_alumno` (`alumno`),
  ADD KEY `fk_tutor` (`tutor`);

--
-- Indices de la tabla `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id_tutor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id_tutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `fk_alumno` FOREIGN KEY (`alumno`) REFERENCES `alumnos` (`id_alumno`),
  ADD CONSTRAINT `fk_tutor` FOREIGN KEY (`tutor`) REFERENCES `tutor` (`id_tutor`);
--
-- Base de datos: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Volcado de datos para la tabla `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2019-10-21 13:37:09', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indices de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indices de la tabla `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indices de la tabla `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indices de la tabla `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indices de la tabla `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indices de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indices de la tabla `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indices de la tabla `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indices de la tabla `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indices de la tabla `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indices de la tabla `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Base de datos: `pruebas`
--
CREATE DATABASE IF NOT EXISTS `pruebas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pruebas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `usuario` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tipo_usu` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`usuario`, `password`, `tipo_usu`) VALUES
('admin', '$2y$10$1LE3c8ASAvjGlRNPGgs8B.YlyShOGX7hZI7lj5N2g1OI4OMb5rE4.', 1),
('usuario_normal', '$2y$10$fjf071ByPOuveg623IY4Gu0ZBVZ9T.4cY85IZPPJRsZN.Hly88ai.', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usuario`);
--
-- Base de datos: `supermoda_javier`
--
CREATE DATABASE IF NOT EXISTS `supermoda_javier` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `supermoda_javier`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rebajas_javier`
--

CREATE TABLE `rebajas_javier` (
  `id_prenda` int(11) NOT NULL,
  `prenda` varchar(100) DEFAULT NULL,
  `foto` blob DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `rebajada` tinyint(1) DEFAULT NULL,
  `rebaja` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `rebajas_javier`
--
ALTER TABLE `rebajas_javier`
  ADD PRIMARY KEY (`id_prenda`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `rebajas_javier`
--
ALTER TABLE `rebajas_javier`
  MODIFY `id_prenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Base de datos: `tareas_javier`
--
CREATE DATABASE IF NOT EXISTS `tareas_javier` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tareas_javier`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `titulo` varchar(30) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `fecha` varchar(15) DEFAULT NULL,
  `prioridad` int(11) DEFAULT NULL,
  `img_tarea` blob DEFAULT NULL,
  `realizada` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(20) DEFAULT NULL,
  `PIN` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `PIN`) VALUES
('james_bon', '007');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`titulo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`PIN`);
--
-- Base de datos: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

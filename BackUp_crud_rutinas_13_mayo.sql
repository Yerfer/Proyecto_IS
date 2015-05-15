-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2015 a las 03:23:34
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `crud_rutinas`
--
CREATE DATABASE IF NOT EXISTS `crud_rutinas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `crud_rutinas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deportista`
--
-- Creación: 12-05-2015 a las 21:28:00
--

DROP TABLE IF EXISTS `deportista`;
CREATE TABLE IF NOT EXISTS `deportista` (
`id` int(10) unsigned NOT NULL,
  `Cedula` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(11) DEFAULT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `deportista`
--

INSERT INTO `deportista` (`id`, `Cedula`, `nombre`, `apellido`, `telefono`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 123456789, 'Yérfer', 'Kage', 6000000, 'yerfer@gmail.com', '$2y$10$fnAbL9cUibtKvuQEp6cy6ui3QqNoSLJRivQPHUv6u6ey7AglleRES', NULL, '2015-05-13 02:35:01', '2015-05-13 02:35:01'),
(2, 85048163, 'Maryse', 'Carroll', 6445845, 'Rath.Sean@hotmail.com', '$2y$10$Vy52EoM5vp5ohFbF0LEYO.O6RjMHELTPgZoWVRUp0bxMF7BXdGJpG', NULL, '2015-05-13 02:35:01', '2015-05-13 02:35:01'),
(3, 24771858, 'Brielle', 'Jacobi', 6718721, 'aCollins@hotmail.com', '$2y$10$zUELtj8a1ON6b1weBLaIXedEOBlkne9QrWikxkISmYZkRz89Mh8rO', NULL, '2015-05-13 02:35:02', '2015-05-13 02:35:02'),
(4, 47275799, 'Judah', 'Carroll', 6309462, 'Thompson.Isac@yahoo.com', '$2y$10$CzP0B1LuOhd5.OLoM3rFcek.8pkPRKlIKOPNqjnpG5XlvtD/M2gJm', NULL, '2015-05-13 02:35:02', '2015-05-13 02:35:02'),
(5, 95975532, 'Ida', 'Muller', 6642011, 'Klein.Jasen@gmail.com', '$2y$10$vLuLsYY1p.34PWbaSNbx2.x8zuZH/WG/lAnH.uMSAfpiZ6k0jTEAm', NULL, '2015-05-13 02:35:02', '2015-05-13 02:35:02'),
(6, 18257303, 'Andreanne', 'Lueilwitz', 6797533, 'Vesta.Schaden@gmail.com', '$2y$10$6YOMQFmghAaJ9TMNXcq6F.Vdfh.noKtRDzHKPo2XzKgB.SVpU1.6a', NULL, '2015-05-13 02:35:02', '2015-05-13 02:35:02'),
(7, 96328776, 'Ozella', 'Cruickshank', 6439058, 'Wilderman.Joanie@hotmail.com', '$2y$10$IBw90.PHAodWdFE69oeo4udqbValzD8otX57S.tAj5bre26za1spy', NULL, '2015-05-13 02:35:02', '2015-05-13 02:35:02'),
(8, 39620986, 'Catherine', 'Schaefer', 6026874, 'sHirthe@gmail.com', '$2y$10$wxMx3Ox5YWLZJ1xlVhrmNevBjTcJ/PPjpdMsOtijjqjaA7D3tv0Ze', NULL, '2015-05-13 02:35:03', '2015-05-13 02:35:03'),
(9, 31023765, 'Rachael', 'Hickle', 6745501, 'kWiza@hotmail.com', '$2y$10$qxA0FRlJryMUWYmYwYrQQuehoeVb0ZmjZTZuGxFh25ibluz1w5vL2', NULL, '2015-05-13 02:35:03', '2015-05-13 02:35:03'),
(10, 36921746, 'Julia', 'Von', 6905119, 'oWalsh@hotmail.com', '$2y$10$OprFXGrVCQ6a1pHnzBK9ee6IO/bMNQb9imY9lo0qUS30OHztJEjnG', NULL, '2015-05-13 02:35:03', '2015-05-13 02:35:03'),
(11, 11392380, 'Maia', 'Bauch', 6287586, 'lLebsack@gmail.com', '$2y$10$y7s.wzHA7es59mhiAiQMU.08ofSpY.Gd7R0LZjMCA3nXBPg4oqqme', NULL, '2015-05-13 02:35:03', '2015-05-13 02:35:03'),
(12, 62811749, 'Austen', 'Rutherford', 6677223, 'uPaucek@yahoo.com', '$2y$10$PALYgDVstxf5B1KsjKel1eaocLtQWFJ6R8P2ll8PhUfMgzz32YeBO', NULL, '2015-05-13 02:35:03', '2015-05-13 02:35:03'),
(13, 54816127, 'Kyler', 'Kiehn', 6955906, 'Leuschke.Anibal@gmail.com', '$2y$10$ysBOlIRRn2o9xw1P6P6tQ.iMbgn0Au3dkDEeG3q14e/d89z1AqiCa', NULL, '2015-05-13 02:35:03', '2015-05-13 02:35:03'),
(14, 83005458, 'Nettie', 'Bogan', 6091054, 'Cole.Clark@yahoo.com', '$2y$10$ijsjoVxuH37zQB39554UtuAgnvFboG3yYWw2HSx/96vxxiPS6.ALe', NULL, '2015-05-13 02:35:03', '2015-05-13 02:35:03'),
(15, 66158382, 'Frank', 'Hammes', 6933135, 'Abner.Kutch@hotmail.com', '$2y$10$QQ.3PTm9o9RQATFse8WTZ.ljhOapj/K3/H8yEbqmTaKxeR3/i9sBy', NULL, '2015-05-13 02:35:03', '2015-05-13 02:35:03'),
(16, 32337604, 'Sydnee', 'Rippin', 6208096, 'Delores.Douglas@yahoo.com', '$2y$10$b6qL1YmSpErw5f9BmvURb.Prc06UPR04gi1WVKMn6BA4UmzCiv4MC', NULL, '2015-05-13 02:35:03', '2015-05-13 02:35:03'),
(17, 47648764, 'Diego', 'Macejkovic', 6583484, 'Keebler.Sherman@yahoo.com', '$2y$10$pQMVmWFHGka2QV/50Ma4iOzKXEVWR9kzq2lZovpWJeED3xW1.ctmq', NULL, '2015-05-13 02:35:04', '2015-05-13 02:35:04'),
(18, 90388943, 'Orin', 'Schimmel', 6096250, 'Russel.Goldner@gmail.com', '$2y$10$Ur/kL.1v49vHeK/pyYg65O5MsKz1c/i5xulrDVJnV6biJgYcX9LRe', NULL, '2015-05-13 02:35:04', '2015-05-13 02:35:04'),
(19, 42388882, 'Rashawn', 'Jones', 6952390, 'Ransom74@hotmail.com', '$2y$10$nOsdDvOWj8KgIUY1clgrlefy30Pq3SqDpPozvebLkMloIgzf4.ICS', NULL, '2015-05-13 02:35:04', '2015-05-13 02:35:04'),
(20, 29932962, 'Russel', 'Carter', 6616079, 'Schumm.Sim@gmail.com', '$2y$10$dQwHgWDTertwE/5u70Mx1.w9O5jO0VQby8/JduyFrm/7sphU2e9uG', NULL, '2015-05-13 02:35:04', '2015-05-13 02:35:04'),
(21, 29168817, 'Dulce', 'Upton', 6652646, 'wMann@gmail.com', '$2y$10$KVnDO3.MoEqwsHxmqOeN4OO2LG43YlZauHp1cR3uSmAbPs60giP0q', NULL, '2015-05-13 02:35:04', '2015-05-13 02:35:04'),
(22, 2872000, 'Drew', 'Williamson', 6910433, 'hSatterfield@hotmail.com', '$2y$10$3SkuX/GCIn8DG/QzaUue3.yWAtEcKuzDCb/BQoZckm6o2GvaGSGqm', NULL, '2015-05-13 02:35:04', '2015-05-13 02:35:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deportistarutina`
--
-- Creación: 12-05-2015 a las 21:28:02
--

DROP TABLE IF EXISTS `deportistarutina`;
CREATE TABLE IF NOT EXISTS `deportistarutina` (
`id` int(10) unsigned NOT NULL,
  `id_deportista` int(10) unsigned NOT NULL,
  `id_rutina` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `deportistarutina`
--

INSERT INTO `deportistarutina` (`id`, `id_deportista`, `id_rutina`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2015-05-13 02:35:05', '2015-05-13 02:35:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dia`
--
-- Creación: 12-05-2015 a las 21:28:00
--

DROP TABLE IF EXISTS `dia`;
CREATE TABLE IF NOT EXISTS `dia` (
`id` int(10) unsigned NOT NULL,
  `dia` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `dia`
--

INSERT INTO `dia` (`id`, `dia`, `created_at`, `updated_at`) VALUES
(1, 'lunes', '2015-05-13 02:35:05', '2015-05-13 02:35:05'),
(2, 'martes', '2015-05-13 02:35:05', '2015-05-13 02:35:05'),
(3, 'miercoles', '2015-05-13 02:35:05', '2015-05-13 02:35:05'),
(4, 'jueves', '2015-05-13 02:35:05', '2015-05-13 02:35:05'),
(5, 'viernes', '2015-05-13 02:35:05', '2015-05-13 02:35:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio`
--
-- Creación: 12-05-2015 a las 21:28:02
--

DROP TABLE IF EXISTS `ejercicio`;
CREATE TABLE IF NOT EXISTS `ejercicio` (
`id` int(10) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tiempo` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `repeticiones` int(11) DEFAULT NULL,
  `series` int(11) DEFAULT NULL,
  `peso` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ejercicio`
--

INSERT INTO `ejercicio` (`id`, `nombre`, `tiempo`, `repeticiones`, `series`, `peso`, `created_at`, `updated_at`) VALUES
(1, 'Cardio Nivel I', '30 mins', NULL, NULL, NULL, '2015-05-13 02:35:04', '2015-05-13 02:35:04'),
(2, 'Cardio Nivel II', '40 mins', NULL, NULL, NULL, '2015-05-13 02:35:04', '2015-05-13 02:35:04'),
(3, 'Cardio Nivel III', '60 mins', NULL, NULL, NULL, '2015-05-13 02:35:04', '2015-05-13 02:35:04'),
(4, 'Cardio Extremo Nivel I', '30 mins', NULL, NULL, NULL, '2015-05-13 02:35:04', '2015-05-13 02:35:04'),
(5, 'Cardio Extremo Nivel II', '40 mins', NULL, NULL, NULL, '2015-05-13 02:35:05', '2015-05-13 02:35:05'),
(6, 'Cardio Extremo Nivel III', '60 mins', NULL, NULL, NULL, '2015-05-13 02:35:05', '2015-05-13 02:35:05'),
(7, 'Biceps Nivel I', NULL, 30, 3, '25 Kg', '2015-05-13 02:35:05', '2015-05-13 02:35:05'),
(8, 'Biceps Nivel II', NULL, 40, 3, '25 Kg', '2015-05-13 02:35:05', '2015-05-13 02:35:05'),
(9, 'Biceps Nivel III', NULL, 60, 3, '25 Kg', '2015-05-13 02:35:05', '2015-05-13 02:35:05'),
(10, 'Aumento Biceps Nivel I', NULL, 30, 3, '40 Kg', '2015-05-13 02:35:05', '2015-05-13 02:35:05'),
(11, 'Aumento Biceps Nivel II', NULL, 40, 3, '40 Kg', '2015-05-13 02:35:05', '2015-05-13 02:35:05'),
(12, 'Aumento Biceps Nivel III', NULL, 60, 3, '40 Kg', '2015-05-13 02:35:05', '2015-05-13 02:35:05'),
(13, 'Biceps Sobre Naturales Nivel I', NULL, 30, 3, '80 Kg', '2015-05-13 02:35:05', '2015-05-13 02:35:05'),
(14, 'Biceps Sobre Naturales Nivel II', NULL, 40, 3, '80 Kg', '2015-05-13 02:35:05', '2015-05-13 02:35:05'),
(15, 'Biceps Sobre Naturales Nivel III', NULL, 60, 3, '80 Kg', '2015-05-13 02:35:05', '2015-05-13 02:35:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--
-- Creación: 12-05-2015 a las 21:26:53
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_05_02_000000_crear_tabla_deportista', 1),
('2015_05_02_125402_crear_tabla_dia', 1),
('2015_05_02_132816_crear_tabla_ejercicio', 1),
('2015_05_02_133312_crear_tabla_rutina', 1),
('2015_05_02_141344_crear_tabla_deportistaRutina', 1),
('2015_05_02_145323_crear_tabla_rutinaEjercicioDia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--
-- Creación: 12-05-2015 a las 21:28:00
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina`
--
-- Creación: 12-05-2015 a las 21:28:02
--

DROP TABLE IF EXISTS `rutina`;
CREATE TABLE IF NOT EXISTS `rutina` (
`id` int(10) unsigned NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `rutina`
--

INSERT INTO `rutina` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Quemar Grasa', 'Rutina especializada en la quema de la grasa corporal', '2015-05-13 02:35:05', '2015-05-13 02:35:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutinaejerciciodia`
--
-- Creación: 12-05-2015 a las 21:28:04
--

DROP TABLE IF EXISTS `rutinaejerciciodia`;
CREATE TABLE IF NOT EXISTS `rutinaejerciciodia` (
`id` int(10) unsigned NOT NULL,
  `id_rutina` int(10) unsigned NOT NULL,
  `id_ejercicio` int(10) unsigned NOT NULL,
  `id_dia` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `rutinaejerciciodia`
--

INSERT INTO `rutinaejerciciodia` (`id`, `id_rutina`, `id_ejercicio`, `id_dia`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2015-05-13 02:35:05', '2015-05-13 02:35:05'),
(2, 1, 4, 2, '2015-05-13 02:35:05', '2015-05-13 02:35:05'),
(3, 1, 1, 3, '2015-05-13 02:35:05', '2015-05-13 02:35:05'),
(4, 1, 7, 4, '2015-05-13 02:35:06', '2015-05-13 02:35:06'),
(5, 1, 7, 5, '2015-05-13 02:35:06', '2015-05-13 02:35:06');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `deportista`
--
ALTER TABLE `deportista`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `deportista_cedula_unique` (`Cedula`);

--
-- Indices de la tabla `deportistarutina`
--
ALTER TABLE `deportistarutina`
 ADD PRIMARY KEY (`id`), ADD KEY `deportistarutina_id_deportista_foreign` (`id_deportista`), ADD KEY `deportistarutina_id_rutina_foreign` (`id_rutina`);

--
-- Indices de la tabla `dia`
--
ALTER TABLE `dia`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `dia_dia_unique` (`dia`);

--
-- Indices de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `rutina`
--
ALTER TABLE `rutina`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rutinaejerciciodia`
--
ALTER TABLE `rutinaejerciciodia`
 ADD PRIMARY KEY (`id`), ADD KEY `rutinaejerciciodia_id_rutina_foreign` (`id_rutina`), ADD KEY `rutinaejerciciodia_id_ejercicio_foreign` (`id_ejercicio`), ADD KEY `rutinaejerciciodia_id_dia_foreign` (`id_dia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `deportista`
--
ALTER TABLE `deportista`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `deportistarutina`
--
ALTER TABLE `deportistarutina`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `dia`
--
ALTER TABLE `dia`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `rutina`
--
ALTER TABLE `rutina`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `rutinaejerciciodia`
--
ALTER TABLE `rutinaejerciciodia`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `deportistarutina`
--
ALTER TABLE `deportistarutina`
ADD CONSTRAINT `deportistarutina_id_deportista_foreign` FOREIGN KEY (`id_deportista`) REFERENCES `deportista` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `deportistarutina_id_rutina_foreign` FOREIGN KEY (`id_rutina`) REFERENCES `rutina` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `rutinaejerciciodia`
--
ALTER TABLE `rutinaejerciciodia`
ADD CONSTRAINT `rutinaejerciciodia_id_dia_foreign` FOREIGN KEY (`id_dia`) REFERENCES `dia` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `rutinaejerciciodia_id_ejercicio_foreign` FOREIGN KEY (`id_ejercicio`) REFERENCES `ejercicio` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `rutinaejerciciodia_id_rutina_foreign` FOREIGN KEY (`id_rutina`) REFERENCES `rutina` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

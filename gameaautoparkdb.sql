-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2019 a las 22:11:36
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gameaautoparkdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacions`
--

CREATE TABLE `asignacions` (
  `asignacion_id` bigint(20) UNSIGNED NOT NULL,
  `coord_asig` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coord_devo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `identificador_memorandum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `archivo_memorandum` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_asignacion` date NOT NULL,
  `ci` bigint(20) NOT NULL,
  `placa_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_conductor_chofer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `asignacions`
--

INSERT INTO `asignacions` (`asignacion_id`, `coord_asig`, `coord_devo`, `identificador_memorandum`, `archivo_memorandum`, `fecha_asignacion`, `ci`, `placa_id`, `tipo_conductor_chofer`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'A1', 'D4', 'IDE111111', '1000249_1147DEK_formulario_ddjj_identificacion_del_cliente_personas_juridicas_page-0004.jpg', '2016-03-08', 1000249, '1147DEK', 'CONDUCTOR', '2019-11-04 04:19:51', '2019-11-04 04:24:28', '2019-11-04 04:24:28'),
(2, 'A2', 'D5', 'IDE222222', '4752189_2720RKF_gastosmedicos_page-0001_(1).jpg', '2018-01-01', 4752189, '2720RKF', 'CHOFER', '2019-11-04 04:20:28', '2019-11-04 04:25:17', '2019-11-04 04:25:17'),
(3, 'A3', NULL, 'IDE333333', '10037191_2911PHC_geo-life-enrollment_page-0003.jpg', '2018-01-02', 10037191, '2911PHC', 'CONDUCTOR', '2019-11-04 04:21:06', '2019-11-04 04:21:06', NULL),
(4, 'A4', NULL, 'IDE44444', '10242587_3520TIC_medmal_-_cuestionario-medico-individual_page-0004.jpg', '2018-01-10', 10242587, '3520TIC', 'CHOFER', '2019-11-04 04:21:50', '2019-11-04 04:21:50', NULL),
(5, 'A5', NULL, 'IDEMEMO123', '1000249_1147DEK_img121.jpg', '2019-01-15', 1000249, '1147DEK', 'CONDUCTOR', '2019-11-04 04:26:33', '2019-11-04 04:26:33', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_licencias`
--

CREATE TABLE `categoria_licencias` (
  `categoria_licencia_id` bigint(20) UNSIGNED NOT NULL,
  `categoria_licencia_descripcion` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categoria_licencias`
--

INSERT INTO `categoria_licencias` (`categoria_licencia_id`, `categoria_licencia_descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'A', '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(2, 'B', '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(3, 'C', '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(4, 'M', '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(5, 'P', '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(6, 'OTRO', '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_expedido_ens`
--

CREATE TABLE `ci_expedido_ens` (
  `ci_exped_en_id` bigint(20) UNSIGNED NOT NULL,
  `ci_exped_en_descripcion` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ci_expedido_ens`
--

INSERT INTO `ci_expedido_ens` (`ci_exped_en_id`, `ci_exped_en_descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'LP', '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(2, 'CH', '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(3, 'CB', '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(4, 'OR', '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(5, 'PT', '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(6, 'TJ', '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(7, 'SC', '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(8, 'BN', '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(9, 'PN', '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `clase_id` bigint(20) UNSIGNED NOT NULL,
  `clase_descripcion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`clase_id`, `clase_descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'AUTOMOVIL', '2019-11-03 18:19:05', '2019-11-03 18:19:05', NULL),
(2, 'CAMIONETA', '2019-11-03 18:19:39', '2019-11-03 18:19:39', NULL),
(3, 'VAGONETA', '2019-10-24 05:13:14', '2019-10-24 05:13:14', NULL),
(4, 'JEEP', '2019-10-24 05:13:21', '2019-10-24 05:13:21', NULL),
(5, 'CAMION', '2019-10-24 05:13:30', '2019-10-24 05:13:30', NULL),
(6, 'BUS', '2019-10-24 05:13:42', '2019-10-24 05:13:42', NULL),
(7, 'CUADRATRACK', '2019-10-24 05:13:49', '2019-10-24 05:13:49', NULL),
(8, 'TRIMOVIL', '2019-10-24 05:13:56', '2019-10-24 05:13:56', NULL),
(10, 'MOTOCICLETA', '2019-10-24 05:14:04', '2019-10-24 05:14:04', NULL),
(11, 'MINIBUS', '2019-10-24 05:14:04', '2019-10-24 05:14:04', NULL),
(12, 'CLASE 0', '2019-11-03 18:21:59', '2019-11-03 18:22:24', '2019-11-03 18:22:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `departamento_id` bigint(20) UNSIGNED NOT NULL,
  `departamento_nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `depende_id` bigint(20) DEFAULT NULL,
  `jefe_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`departamento_id`, `departamento_nombre`, `depende_id`, `jefe_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'DESPACHO ALCALDESA', NULL, NULL, '2019-11-03 18:31:38', '2019-11-03 18:32:22', NULL),
(2, 'SECRETARIA MUNICIPAL DE ATENCION CIUDADANAY GUBERNAMENTAL', 1, NULL, '2019-10-28 00:55:12', '2019-10-28 03:45:08', NULL),
(3, 'SECRETARÍA MUNICIPAL DE ADMINISTRACIÓN Y FINANZAS', 1, NULL, '2019-10-28 00:55:27', '2019-10-28 00:55:27', NULL),
(4, 'SECRETARÍA MUNICIPAL DE DESARROLLO HUMANO', 1, NULL, '2019-10-28 00:55:38', '2019-10-28 00:55:38', NULL),
(5, 'SECRETARÍA MUNICIPAL DE SALUD Y DEPORTES', 1, NULL, '2019-10-28 00:55:50', '2019-10-28 00:55:50', NULL),
(6, 'SECRETARÍA MUNICIPAL DE DESARROLLO SOCIAL', 1, NULL, '2019-10-28 00:56:08', '2019-10-28 00:56:08', NULL),
(7, 'SECRETARÍA MUNICIPAL  PARA EL DESARROLLO TERRITORIAL', 1, NULL, '2019-10-28 00:56:20', '2019-10-28 00:56:20', NULL),
(8, 'SECRETARÍA MUNICIPAL DE PLANIFICACION E INFRAESTRUCTURA  URBANA', 1, NULL, '2019-10-28 00:56:31', '2019-10-28 00:56:31', NULL),
(9, 'SECRETARÍA MUNICIPAL DE SEGURIDAD CIUDADANA', 1, NULL, '2019-10-28 00:56:49', '2019-10-28 00:56:49', NULL),
(10, 'SECRETARÍA MUNICIPAL DE AGUA, SANEAMIENTO, GESTIÓN AMBIENTAL Y RIESGOS', 1, NULL, '2019-10-28 00:57:03', '2019-10-28 00:57:03', NULL),
(11, 'SECRETARÍA MUNICIPAL DE MOVILIDAD URBANA SOSTENIBLE', 1, NULL, '2019-10-28 00:57:16', '2019-10-28 00:57:16', NULL),
(12, 'SECRETARÍA MUNICIPAL DE DESARROLLO ECONÓMICO', 1, NULL, '2019-10-28 00:57:39', '2019-10-28 00:57:39', NULL),
(13, 'DIRECCIÓN DE ADMINISTRACIÓN DOCUMENTAL', 2, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(14, 'DIRECCIÓN DE GOBERNANZA', 2, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(15, 'DIRECCIÓN DE COMUNICACIÓN', 2, NULL, '2019-10-28 04:57:39', '2019-11-03 18:33:13', NULL),
(16, 'UNIDAD DE ARCHIVO CENTRAL', 13, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(17, 'UNIDAD SISTEMA ÚNICO DE TRÁMITES', 13, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(18, 'UNIDAD DE COORDINACIÓN CON SUBALCALDIAS', 14, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(19, 'UNIDAD DE PREVENCIÓN DE CONFLICTOS', 14, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(20, 'UNIDAD DE IMAGEN INSTITUCIONAL', 15, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(21, 'UNIDAD DE PRENSA', 15, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(22, 'COORDINACIÓN SMAF', 3, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(23, 'DIRECCIÓN DEL TESORO MUNICIPAL', 3, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(24, 'DIRECCIÓN DE RECAUDACIONES Y POLÍTICAS TRIBUTARIAS', 3, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(25, 'DIRECCIÓN ADMINISTRATIVA', 3, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(26, 'DIRECCIÓN DE CONTRATACIONES', 3, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(27, 'DIRECCIÓN DE TALENTO HUMANO', 3, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(28, 'UNIDAD DE TESORERÍA', 23, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(29, 'UNIDAD DE PRESUPUESTO', 23, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(30, 'UNIDAD DE CONTABILIDAD', 23, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(31, 'UNIDAD DE CRÉDITO PÚBLICO Y GESTIÓN DE FINANCIAMIENTO', 23, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(32, 'UNIDAD DE INGRESOS Y CONTROL TRIBUTARIO', 24, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(33, 'UNIDAD DE ASESORÍA JURÍDICA Y COBRANZA COACTIVA', 24, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(34, 'UNIDAD DE FISCALIZACIÓN Y RECAUDACIONES', 24, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(35, 'UNIDAD DE ACTIVOS FIJOS', 25, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(36, 'UNIDAD DE SERVICIOS GENERALES Y  MANTENIMIENTO ', 25, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(37, 'UNIDAD DE ALMACENES', 25, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(38, 'UNIDAD DE SISTEMAS', 25, NULL, '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devolucions`
--

CREATE TABLE `devolucions` (
  `devolucion_id` bigint(20) UNSIGNED NOT NULL,
  `coord_devo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coord_asig` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `identificador_acta_devolucion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `archivo_acta_devolucion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_devolucion` date NOT NULL,
  `ci` bigint(20) NOT NULL,
  `placa_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motivo_devolucion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `devolucions`
--

INSERT INTO `devolucions` (`devolucion_id`, `coord_devo`, `coord_asig`, `identificador_acta_devolucion`, `archivo_acta_devolucion`, `fecha_devolucion`, `ci`, `placa_id`, `motivo_devolucion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'D4', 'A1', 'ACTA54321', '1000249_1147DEK_small_6.jpg', '2017-03-01', 1000249, '1147DEK', 'YA NO QUIERE CONDUCIR.', '2019-11-04 04:24:28', '2019-11-04 04:24:28', NULL),
(5, 'D5', 'A2', 'ACTA9876', '4752189_2720RKF_Solicitud_Colectivo_de_Vida_y_Accidentes_Personales_tcm664-90397_page-0001.jpg', '2018-07-16', 4752189, '2720RKF', 'NADA MAS', '2019-11-04 04:25:16', '2019-11-04 04:25:16', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_propiedad_vehiculos`
--

CREATE TABLE `documentos_propiedad_vehiculos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `archivo_subido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_documento_propiedad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `documentos_propiedad_vehiculos`
--

INSERT INTO `documentos_propiedad_vehiculos` (`id`, `archivo_subido`, `nombre_documento_propiedad`, `placa_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1147DEK0005.jpg', '0005.jpg', '1147DEK', '2019-11-03 18:54:43', '2019-11-03 18:54:43', NULL),
(2, '1147DEK0009.jpg', '0009.jpg', '1147DEK', '2019-11-03 18:54:43', '2019-11-03 18:54:43', NULL),
(3, '1147DEK0010.jpg', '0010.jpg', '1147DEK', '2019-11-03 18:54:44', '2019-11-03 18:54:44', NULL),
(4, '1147DEK0013.jpg', '0013.jpg', '1147DEK', '2019-11-03 18:54:44', '2019-11-03 18:54:44', NULL),
(5, '1147DEK0015.jpg', '0015.jpg', '1147DEK', '2019-11-03 18:54:44', '2019-11-03 18:54:44', NULL),
(6, '1147DEK0016.jpg', '0016.jpg', '1147DEK', '2019-11-03 18:54:44', '2019-11-03 18:54:44', NULL),
(7, '2720RKF0017.jpg', '0017.jpg', '2720RKF', '2019-11-03 19:03:54', '2019-11-03 19:03:54', NULL),
(8, '2720RKF0023.jpg', '0023.jpg', '2720RKF', '2019-11-03 19:03:54', '2019-11-03 19:03:54', NULL),
(9, '2720RKF0026.jpg', '0026.jpg', '2720RKF', '2019-11-03 19:03:54', '2019-11-03 19:03:54', NULL),
(10, '2720RKF0042.jpg', '0042.jpg', '2720RKF', '2019-11-03 19:03:54', '2019-11-03 19:03:54', NULL),
(11, '2720RKF0048.jpg', '0048.jpg', '2720RKF', '2019-11-03 19:03:55', '2019-11-03 19:03:55', NULL),
(12, '2720RKF0051.jpg', '0051.jpg', '2720RKF', '2019-11-03 19:03:55', '2019-11-03 19:03:55', NULL),
(13, '2911PHC0052.jpg', '0052.jpg', '2911PHC', '2019-11-03 19:13:02', '2019-11-03 19:13:02', NULL),
(14, '2911PHC0060.jpg', '0060.jpg', '2911PHC', '2019-11-03 19:13:02', '2019-11-03 19:13:02', NULL),
(15, '2911PHC0061.jpg', '0061.jpg', '2911PHC', '2019-11-03 19:13:02', '2019-11-03 19:13:02', NULL),
(16, '2911PHC0062.jpg', '0062.jpg', '2911PHC', '2019-11-03 19:13:02', '2019-11-03 19:13:02', NULL),
(17, '2911PHC0064.jpg', '0064.jpg', '2911PHC', '2019-11-03 19:13:02', '2019-11-03 19:13:02', NULL),
(18, '2911PHC0066.jpg', '0066.jpg', '2911PHC', '2019-11-03 19:13:02', '2019-11-03 19:13:02', NULL),
(19, '3520TIC0067.jpg', '0067.jpg', '3520TIC', '2019-11-03 19:21:49', '2019-11-03 19:21:49', NULL),
(20, '3520TIC0068.jpg', '0068.jpg', '3520TIC', '2019-11-03 19:21:49', '2019-11-03 19:21:49', NULL),
(21, '3520TIC0070.jpg', '0070.jpg', '3520TIC', '2019-11-03 19:21:49', '2019-11-03 19:21:49', NULL),
(22, '3520TIC0071.jpg', '0071.jpg', '3520TIC', '2019-11-03 19:21:49', '2019-11-03 19:21:49', NULL),
(23, '3520TIC0072.jpg', '0072.jpg', '3520TIC', '2019-11-03 19:21:50', '2019-11-03 19:21:50', NULL),
(24, '4045PIB0015.jpg', '0015.jpg', '4045PIB', '2019-11-03 19:26:03', '2019-11-03 19:26:03', NULL),
(25, '4045PIB0016.jpg', '0016.jpg', '4045PIB', '2019-11-03 19:26:03', '2019-11-03 19:26:03', NULL),
(26, '4045PIB0048.jpg', '0048.jpg', '4045PIB', '2019-11-03 19:26:03', '2019-11-03 19:26:03', NULL),
(27, '4045PIB0051.jpg', '0051.jpg', '4045PIB', '2019-11-03 19:26:03', '2019-11-03 19:26:03', NULL),
(28, '4045PIB0064.jpg', '0064.jpg', '4045PIB', '2019-11-03 19:26:04', '2019-11-03 19:26:04', NULL),
(29, '4045PIB0066.jpg', '0066.jpg', '4045PIB', '2019-11-03 19:26:04', '2019-11-03 19:26:04', NULL),
(30, '4045PIB0072.jpg', '0072.jpg', '4045PIB', '2019-11-03 19:26:04', '2019-11-03 19:26:04', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_ronovable_vehiculos`
--

CREATE TABLE `documentos_ronovable_vehiculos` (
  `archivero_id` bigint(20) UNSIGNED NOT NULL,
  `gestion` int(11) NOT NULL,
  `fecha_fin_cobertura_soat` date NOT NULL,
  `bsisa` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `inspeccion_vehicular` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `documentos_ronovable_vehiculos`
--

INSERT INTO `documentos_ronovable_vehiculos` (`archivero_id`, `gestion`, `fecha_fin_cobertura_soat`, `bsisa`, `inspeccion_vehicular`, `placa_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2019, '2020-01-09', '0', '1', '1147DEK', '2019-11-03 18:55:44', '2019-11-03 18:55:44', NULL),
(2, 2019, '2020-02-12', '1', '1', '2720RKF', '2019-11-03 19:04:41', '2019-11-03 19:04:41', NULL),
(3, 2019, '2020-02-11', '1', '1', '2911PHC', '2019-11-03 19:14:11', '2019-11-03 19:14:11', NULL),
(4, 2019, '2020-02-18', '1', '1', '3520TIC', '2019-11-03 19:22:29', '2019-11-03 19:22:29', NULL),
(5, 2019, '2019-04-17', '1', '1', '4045PIB', '2019-11-03 19:26:49', '2019-11-07 01:07:00', NULL),
(6, 2016, '2017-01-01', '1', '1', '1147DEK', '2019-11-05 22:22:33', '2019-11-05 22:22:33', NULL),
(7, 2017, '2018-01-02', '1', '1', '1147DEK', '2019-11-05 22:22:48', '2019-11-05 22:22:48', NULL),
(8, 2018, '2019-01-03', '1', '1', '1147DEK', '2019-11-05 22:23:05', '2019-11-05 22:23:05', NULL),
(9, 2017, '2018-01-02', '1', '1', '2720RKF', '2019-11-05 23:14:36', '2019-11-05 23:15:26', NULL),
(10, 2018, '2019-02-01', '1', '1', '2720RKF', '2019-11-05 23:14:55', '2019-11-05 23:14:55', NULL),
(11, 2016, '2017-02-08', '1', '1', '2720RKF', '2019-11-06 23:19:38', '2019-11-06 23:19:38', NULL),
(12, 2016, '2017-02-15', '1', '1', '2911PHC', '2019-11-06 23:20:29', '2019-11-06 23:20:29', NULL),
(13, 2017, '2018-02-13', '1', '1', '2911PHC', '2019-11-06 23:20:37', '2019-11-06 23:20:37', NULL),
(14, 2018, '2019-02-27', '1', '1', '2911PHC', '2019-11-06 23:20:48', '2019-11-06 23:20:48', NULL),
(15, 2016, '2017-11-15', '1', '0', '3520TIC', '2019-11-06 23:21:27', '2019-11-06 23:21:27', NULL),
(16, 2017, '2018-03-14', '1', '1', '3520TIC', '2019-11-06 23:21:40', '2019-11-06 23:21:40', NULL),
(17, 2018, '2018-03-20', '1', '1', '3520TIC', '2019-11-06 23:21:53', '2019-11-06 23:21:53', NULL),
(18, 2016, '2017-03-07', '1', '1', '4045PIB', '2019-11-06 23:22:24', '2019-11-06 23:22:24', NULL),
(19, 2017, '2018-03-14', '1', '1', '4045PIB', '2019-11-06 23:22:32', '2019-11-06 23:22:32', NULL),
(20, 2018, '2019-03-27', '1', '1', '4045PIB', '2019-11-06 23:22:41', '2019-11-06 23:22:41', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_funcs`
--

CREATE TABLE `estado_funcs` (
  `estado_func_id` bigint(20) UNSIGNED NOT NULL,
  `estado_func_descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estado_funcs`
--

INSERT INTO `estado_funcs` (`estado_func_id`, `estado_func_descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ACTIVO', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(2, 'INACTIVO', '2019-10-28 16:42:24', '2019-10-28 16:42:24', NULL),
(3, 'DESPEDIDO', '2019-10-28 16:42:30', '2019-10-28 16:42:30', NULL),
(4, 'CONTRATO FINALIZADO', '2019-10-28 16:42:42', '2019-10-28 16:42:42', NULL),
(5, 'ESTADO 0', '2019-11-03 18:38:25', '2019-11-03 18:38:25', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_services`
--

CREATE TABLE `estado_services` (
  `est_id` bigint(20) UNSIGNED NOT NULL,
  `est_descripcion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estado_services`
--

INSERT INTO `estado_services` (`est_id`, `est_descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'EN SERVICIO', '2019-11-03 18:29:56', '2019-11-03 18:30:20', NULL),
(2, 'FUERA DE SERVICIO', '2019-11-03 18:30:09', '2019-11-03 18:30:29', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_servicio_vehiculos`
--

CREATE TABLE `estado_servicio_vehiculos` (
  `est_serv_vehiculo_id` bigint(20) UNSIGNED NOT NULL,
  `fecha_inicio` date NOT NULL,
  `motivo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `est_id` bigint(20) NOT NULL,
  `placa_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estado_servicio_vehiculos`
--

INSERT INTO `estado_servicio_vehiculos` (`est_serv_vehiculo_id`, `fecha_inicio`, `motivo`, `est_id`, `placa_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2016-02-10', 'Inicio de actividades', 1, '1147DEK', '2019-11-03 18:54:14', '2019-11-03 18:54:14', NULL),
(2, '2016-02-09', 'Inicio de actividades', 1, '2720RKF', '2019-11-03 19:03:35', '2019-11-03 19:03:35', NULL),
(3, '2017-02-09', 'Inicio de actividades', 1, '2911PHC', '2019-11-03 19:12:41', '2019-11-03 19:12:41', NULL),
(4, '2017-03-07', 'Inicio de actividades', 1, '3520TIC', '2019-11-03 19:21:25', '2019-11-03 19:21:25', NULL),
(5, '2017-03-30', 'Inicio de actividades', 1, '4045PIB', '2019-11-03 19:25:40', '2019-11-03 19:25:40', NULL),
(6, '2017-11-19', 'VIAJE DE PASEO', 2, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(7, '2019-05-06', 'CAMBIO DE ACEITE', 1, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(8, '2017-02-18', 'MANTENIMIENTO PREVENTIVO', 1, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(9, '2017-03-22', 'CAMBIO DE ESTADO', 2, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(10, '2018-11-27', 'CAMBIO DE ESTADO', 1, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(11, '2018-08-25', 'MANTENIMIENTO CORRECTIVO', 1, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(12, '2018-07-15', 'VIAJE DE PASEO', 1, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(13, '2019-02-10', 'CAMBIO DE ACEITE', 2, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(14, '2017-04-18', 'MANTENIMIENTO PREVENTIVO', 1, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(15, '2019-06-02', 'CAMBIO DE ESTADO', 1, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(16, '2017-01-16', 'CAMBIO DE ESTADO', 1, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(17, '2018-12-06', 'MANTENIMIENTO CORRECTIVO', 1, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(18, '2018-12-17', 'VIAJE DE PASEO', 1, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(19, '2018-04-03', 'CAMBIO DE ACEITE', 1, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(20, '2018-04-16', 'MANTENIMIENTO PREVENTIVO', 2, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(21, '2019-09-18', 'CAMBIO DE ESTADO', 2, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(22, '2019-08-10', 'CAMBIO DE ESTADO', 2, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(23, '2019-04-25', 'MANTENIMIENTO CORRECTIVO', 1, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(24, '2017-05-24', 'VIAJE DE PASEO', 2, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(25, '2017-09-03', 'CAMBIO DE ACEITE', 1, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(26, '2018-11-12', 'MANTENIMIENTO PREVENTIVO', 1, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(27, '2018-07-09', 'CAMBIO DE ESTADO', 1, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(28, '2019-02-18', 'CAMBIO DE ESTADO', 1, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(29, '2018-07-08', 'MANTENIMIENTO CORRECTIVO', 2, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(30, '2019-04-10', 'VIAJE DE PASEO', 1, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(31, '2018-11-03', 'CAMBIO DE ACEITE', 2, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(32, '2017-12-20', 'MANTENIMIENTO PREVENTIVO', 2, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(33, '2019-02-02', 'CAMBIO DE ESTADO', 1, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(34, '2017-12-13', 'CAMBIO DE ESTADO', 2, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(35, '2018-11-21', 'MANTENIMIENTO CORRECTIVO', 1, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(36, '2019-10-03', 'VIAJE DE PASEO', 1, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(37, '2019-05-10', 'CAMBIO DE ACEITE', 1, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(38, '2019-07-21', 'MANTENIMIENTO PREVENTIVO', 2, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(39, '2017-06-22', 'CAMBIO DE ESTADO', 2, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(40, '2019-01-19', 'CAMBIO DE ESTADO', 1, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(41, '2019-04-09', 'MANTENIMIENTO CORRECTIVO', 2, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(42, '2018-02-11', 'VIAJE DE PASEO', 1, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(43, '2019-09-16', 'CAMBIO DE ACEITE', 2, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(44, '2017-01-28', 'MANTENIMIENTO PREVENTIVO', 2, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(45, '2017-11-27', 'CAMBIO DE ESTADO', 2, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(46, '2018-01-30', 'CAMBIO DE ESTADO', 2, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(47, '2017-11-29', 'MANTENIMIENTO CORRECTIVO', 2, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(48, '2017-05-18', 'VIAJE DE PASEO', 1, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(49, '2018-04-18', 'CAMBIO DE ACEITE', 2, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(50, '2019-07-02', 'MANTENIMIENTO PREVENTIVO', 2, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(51, '2019-07-16', 'CAMBIO DE ESTADO', 1, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(52, '2017-03-06', 'CAMBIO DE ESTADO', 2, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(53, '2019-03-03', 'MANTENIMIENTO CORRECTIVO', 2, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(54, '2017-01-18', 'VIAJE DE PASEO', 1, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(55, '2017-11-05', 'CAMBIO DE ACEITE', 2, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(56, '2019-03-12', 'MANTENIMIENTO PREVENTIVO', 1, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(57, '2018-12-12', 'CAMBIO DE ESTADO', 2, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(58, '2018-05-09', 'CAMBIO DE ESTADO', 1, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(59, '2018-11-04', 'MANTENIMIENTO CORRECTIVO', 2, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(60, '2017-06-25', 'VIAJE DE PASEO', 2, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(61, '2017-10-18', 'CAMBIO DE ACEITE', 1, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(62, '2019-03-13', 'MANTENIMIENTO PREVENTIVO', 2, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(63, '2017-07-11', 'CAMBIO DE ESTADO', 1, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(64, '2019-03-10', 'CAMBIO DE ESTADO', 2, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(65, '2019-10-25', 'MANTENIMIENTO CORRECTIVO', 1, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(66, '2018-07-18', 'VIAJE DE PASEO', 2, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(67, '2018-07-17', 'CAMBIO DE ACEITE', 1, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(68, '2017-01-24', 'MANTENIMIENTO PREVENTIVO', 1, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(69, '2017-03-07', 'CAMBIO DE ESTADO', 2, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(70, '2019-06-27', 'CAMBIO DE ESTADO', 2, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(71, '2018-03-23', 'MANTENIMIENTO CORRECTIVO', 2, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(72, '2019-04-22', 'VIAJE DE PASEO', 1, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(73, '2018-09-23', 'CAMBIO DE ACEITE', 2, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(74, '2018-06-12', 'MANTENIMIENTO PREVENTIVO', 1, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(75, '2018-04-09', 'CAMBIO DE ESTADO', 2, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(76, '2017-03-06', 'CAMBIO DE ESTADO', 1, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(77, '2017-03-22', 'MANTENIMIENTO CORRECTIVO', 1, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(78, '2019-06-09', 'VIAJE DE PASEO', 2, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(79, '2017-11-05', 'CAMBIO DE ACEITE', 2, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(80, '2019-06-15', 'MANTENIMIENTO PREVENTIVO', 2, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(81, '2017-11-30', 'CAMBIO DE ESTADO', 2, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(82, '2017-12-31', 'CAMBIO DE ESTADO', 1, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(83, '2019-01-06', 'MANTENIMIENTO CORRECTIVO', 1, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(84, '2018-04-16', 'VIAJE DE PASEO', 2, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(85, '2019-03-31', 'CAMBIO DE ACEITE', 2, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(86, '2017-09-06', 'MANTENIMIENTO PREVENTIVO', 2, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(87, '2017-12-09', 'CAMBIO DE ESTADO', 1, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(88, '2018-02-19', 'CAMBIO DE ESTADO', 2, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(89, '2019-01-23', 'MANTENIMIENTO CORRECTIVO', 2, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(90, '2018-08-04', 'VIAJE DE PASEO', 1, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(91, '2019-04-14', 'CAMBIO DE ACEITE', 1, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(92, '2018-05-13', 'MANTENIMIENTO PREVENTIVO', 1, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(93, '2017-03-17', 'CAMBIO DE ESTADO', 2, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(94, '2018-08-27', 'CAMBIO DE ESTADO', 1, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(95, '2019-05-26', 'MANTENIMIENTO CORRECTIVO', 1, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(96, '2017-06-15', 'VIAJE DE PASEO', 2, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(97, '2017-06-29', 'CAMBIO DE ACEITE', 1, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(98, '2018-07-09', 'MANTENIMIENTO PREVENTIVO', 2, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(99, '2018-04-27', 'CAMBIO DE ESTADO', 1, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(100, '2018-08-14', 'CAMBIO DE ESTADO', 2, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(101, '2018-08-11', 'MANTENIMIENTO CORRECTIVO', 2, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(102, '2018-08-08', 'VIAJE DE PASEO', 1, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(103, '2017-06-01', 'CAMBIO DE ACEITE', 2, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(104, '2017-10-28', 'MANTENIMIENTO PREVENTIVO', 1, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(105, '2017-08-03', 'CAMBIO DE ESTADO', 1, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(106, '2018-03-07', 'CAMBIO DE ESTADO', 2, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(107, '2018-01-11', 'MANTENIMIENTO CORRECTIVO', 2, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(108, '2017-05-19', 'VIAJE DE PASEO', 2, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(109, '2018-02-27', 'CAMBIO DE ACEITE', 2, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(110, '2018-06-22', 'MANTENIMIENTO PREVENTIVO', 1, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(111, '2017-01-26', 'CAMBIO DE ESTADO', 2, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(112, '2017-06-01', 'CAMBIO DE ESTADO', 1, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(113, '2017-01-09', 'MANTENIMIENTO CORRECTIVO', 2, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(114, '2018-08-19', 'VIAJE DE PASEO', 1, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(115, '2019-04-03', 'CAMBIO DE ACEITE', 1, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(116, '2019-04-12', 'MANTENIMIENTO PREVENTIVO', 1, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(117, '2018-01-08', 'CAMBIO DE ESTADO', 1, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(118, '2017-10-22', 'CAMBIO DE ESTADO', 1, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(119, '2017-01-25', 'MANTENIMIENTO CORRECTIVO', 1, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(120, '2017-11-15', 'VIAJE DE PASEO', 1, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(121, '2017-04-05', 'CAMBIO DE ACEITE', 1, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(122, '2018-09-24', 'MANTENIMIENTO PREVENTIVO', 1, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(123, '2017-09-05', 'CAMBIO DE ESTADO', 2, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(124, '2018-01-12', 'CAMBIO DE ESTADO', 1, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(125, '2019-09-19', 'MANTENIMIENTO CORRECTIVO', 1, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(126, '2018-07-11', 'VIAJE DE PASEO', 1, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(127, '2018-02-25', 'CAMBIO DE ACEITE', 2, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(128, '2018-06-25', 'MANTENIMIENTO PREVENTIVO', 2, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(129, '2017-01-05', 'CAMBIO DE ESTADO', 1, '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(130, '2019-06-09', 'CAMBIO DE ESTADO', 1, '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(131, '2018-02-24', 'MANTENIMIENTO CORRECTIVO', 2, '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(132, '2018-08-19', 'VIAJE DE PASEO', 1, '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos_users`
--

CREATE TABLE `fotos_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionarios`
--

CREATE TABLE `funcionarios` (
  `ci` bigint(20) NOT NULL,
  `ci_exped_en` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nac` date DEFAULT NULL,
  `categoria_licencia` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_licencia` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_expedicion_licencia` date DEFAULT NULL,
  `fecha_vencimiento_licencia` date DEFAULT NULL,
  `numero_accidentes` int(11) DEFAULT NULL,
  `contacto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen_perfil` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado_func_descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departamento_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `funcionarios`
--

INSERT INTO `funcionarios` (`ci`, `ci_exped_en`, `apellidos`, `nombres`, `fecha_nac`, `categoria_licencia`, `numero_licencia`, `fecha_expedicion_licencia`, `fecha_vencimiento_licencia`, `numero_accidentes`, `contacto`, `imagen_perfil`, `estado_func_descripcion`, `departamento_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1000249, 'OR', 'MAMANI ARUQUIPA', 'MERY ROSA', '1994-01-20', 'M', '987654321', '2018-08-06', '2022-11-17', 1, '777433212', '1000249_14232389_641294102705959_7797114330515860933_n.jpg', 'INACTIVO', 23, '2019-11-03 19:36:41', '2019-11-03 19:36:41', NULL),
(4752189, 'CB', 'CONDORI APAZA', 'CARMEN ROSA', '1993-05-15', 'P', '5432678', '2019-11-01', '2023-11-14', 2, 'carmenrosita21@gmail,com', '4752189_Camara1.jpg', 'DESPEDIDO', 6, '2019-11-03 19:39:03', '2019-11-03 19:39:03', NULL),
(10037191, 'LP', 'VALERO CALLE', 'ROMAN FRANCO', '1995-10-07', 'B', '123456789', '2017-02-28', '2021-02-28', 1, '76723248', '10037191_Cajita_Azulito.jpg', 'ACTIVO', 38, '2019-11-03 19:30:50', '2019-11-05 13:09:21', NULL),
(10242587, 'TJ', 'CONTRERAS RADA', 'JESUS FERNANDO', '1992-04-23', 'C', '1239876456', '2006-07-16', '2019-11-04', 3, '65512842, contreras123jesus@gmail.com', '10242587_Spotify.jpg', 'ACTIVO', 17, '2019-11-03 19:43:20', '2019-11-03 21:32:32', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_perfil_vehiculos`
--

CREATE TABLE `imagenes_perfil_vehiculos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `archivo_subido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_imagen_perfil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `imagenes_perfil_vehiculos`
--

INSERT INTO `imagenes_perfil_vehiculos` (`id`, `archivo_subido`, `nombre_imagen_perfil`, `placa_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1147DEKnegro_1.jpg', 'negro_1.jpg', '1147DEK', '2019-11-03 18:55:07', '2019-11-03 18:55:07', NULL),
(2, '1147DEKnegro_2.png', 'negro_2.png', '1147DEK', '2019-11-03 18:55:07', '2019-11-03 18:55:07', NULL),
(4, '1147DEKnegro_4.jpg', 'negro_4.jpg', '1147DEK', '2019-11-03 18:55:08', '2019-11-03 18:55:08', NULL),
(5, '1147DEKnegro_5.jpg', 'negro_5.jpg', '1147DEK', '2019-11-03 18:55:08', '2019-11-03 18:55:08', NULL),
(6, '1147DEKnegro_6.jpg', 'negro_6.jpg', '1147DEK', '2019-11-03 18:55:08', '2019-11-03 18:55:08', NULL),
(7, '1147DEKnegro_7.jpg', 'negro_7.jpg', '1147DEK', '2019-11-03 18:55:09', '2019-11-03 18:55:09', NULL),
(8, '1147DEKnegro_8.jpg', 'negro_8.jpg', '1147DEK', '2019-11-03 18:55:09', '2019-11-03 18:55:09', NULL),
(9, '1147DEKtablero_6.jpg', 'tablero_6.jpg', '1147DEK', '2019-11-03 18:55:09', '2019-11-03 18:55:09', NULL),
(10, '2720RKFrojo_1.jpg', 'rojo_1.jpg', '2720RKF', '2019-11-03 19:04:21', '2019-11-03 19:04:21', NULL),
(11, '2720RKFrojo_2.jpg', 'rojo_2.jpg', '2720RKF', '2019-11-03 19:04:21', '2019-11-03 19:04:21', NULL),
(12, '2720RKFrojo_4.jpg', 'rojo_4.jpg', '2720RKF', '2019-11-03 19:04:22', '2019-11-03 19:04:22', NULL),
(13, '2720RKFrojo_3.jpg', 'rojo_3.jpg', '2720RKF', '2019-11-03 19:04:22', '2019-11-03 19:04:22', NULL),
(14, '2720RKFrojo_5.jpg', 'rojo_5.jpg', '2720RKF', '2019-11-03 19:04:22', '2019-11-03 19:04:22', NULL),
(15, '2720RKFrojo_6.jpg', 'rojo_6.jpg', '2720RKF', '2019-11-03 19:04:22', '2019-11-03 19:04:22', NULL),
(16, '2720RKFrojo_7.jpg', 'rojo_7.jpg', '2720RKF', '2019-11-03 19:04:22', '2019-11-03 19:04:22', NULL),
(17, '2720RKFrojo_8.jpg', 'rojo_8.jpg', '2720RKF', '2019-11-03 19:04:23', '2019-11-03 19:04:23', NULL),
(18, '2720RKFrojo_9.jpg', 'rojo_9.jpg', '2720RKF', '2019-11-03 19:04:23', '2019-11-03 19:04:23', NULL),
(19, '2720RKFtablero_5.jpg', 'tablero_5.jpg', '2720RKF', '2019-11-03 19:04:23', '2019-11-03 19:04:23', NULL),
(20, '2911PHC1024_684.jpg', '1024_684.jpg', '2911PHC', '2019-11-03 19:13:46', '2019-11-03 19:13:46', NULL),
(21, '2911PHC2880_1800.jpg', '2880_1800.jpg', '2911PHC', '2019-11-03 19:13:46', '2019-11-03 19:13:46', NULL),
(22, '2911PHCAZUL3.jpg', 'AZUL3.jpg', '2911PHC', '2019-11-03 19:13:46', '2019-11-03 19:13:46', NULL),
(23, '2911PHCAZUL2.jpg', 'AZUL2.jpg', '2911PHC', '2019-11-03 19:13:46', '2019-11-03 19:13:46', NULL),
(24, '2911PHCAZUL4.jpg', 'AZUL4.jpg', '2911PHC', '2019-11-03 19:13:47', '2019-11-03 19:13:47', NULL),
(25, '2911PHCAZUL5.jpg', 'AZUL5.jpg', '2911PHC', '2019-11-03 19:13:47', '2019-11-03 19:13:47', NULL),
(26, '2911PHCAZUL6.jpg', 'AZUL6.jpg', '2911PHC', '2019-11-03 19:13:47', '2019-11-03 19:13:47', NULL),
(27, '2911PHCAZUL7_1200.jpg', 'AZUL7_1200.jpg', '2911PHC', '2019-11-03 19:13:47', '2019-11-03 19:13:47', NULL),
(31, '2911PHCMercedes-Benz_2017_E_3001920x1080.jpg', 'Mercedes-Benz_2017_E_3001920x1080.jpg', '2911PHC', '2019-11-03 19:13:48', '2019-11-03 19:13:48', NULL),
(33, '2911PHCmercedes-mercedes-benz-s-class1920x1080.jpg', 'mercedes-mercedes-benz-s-class1920x1080.jpg', '2911PHC', '2019-11-03 19:13:48', '2019-11-03 19:13:48', NULL),
(34, '2911PHCtablero_8.jpg', 'tablero_8.jpg', '2911PHC', '2019-11-03 19:13:49', '2019-11-03 19:13:49', NULL),
(35, '3520TICAmarrillo_1.jpg', 'Amarrillo_1.jpg', '3520TIC', '2019-11-03 19:22:11', '2019-11-03 19:22:11', NULL),
(36, '3520TICAmarrillo_2.jpg', 'Amarrillo_2.jpg', '3520TIC', '2019-11-03 19:22:11', '2019-11-03 19:22:11', NULL),
(37, '3520TICAmarrillo_4.jpg', 'Amarrillo_4.jpg', '3520TIC', '2019-11-03 19:22:12', '2019-11-03 19:22:12', NULL),
(38, '3520TICAmarrillo_3.jpg', 'Amarrillo_3.jpg', '3520TIC', '2019-11-03 19:22:12', '2019-11-03 19:22:12', NULL),
(39, '3520TICAmarrillo_5.jpg', 'Amarrillo_5.jpg', '3520TIC', '2019-11-03 19:22:12', '2019-11-03 19:22:12', NULL),
(40, '3520TICAmarrillo_6.jpg', 'Amarrillo_6.jpg', '3520TIC', '2019-11-03 19:22:12', '2019-11-03 19:22:12', NULL),
(41, '3520TICAmarrillo_7.jpg', 'Amarrillo_7.jpg', '3520TIC', '2019-11-03 19:22:12', '2019-11-03 19:22:12', NULL),
(42, '3520TICAmarrillo_8.jpg', 'Amarrillo_8.jpg', '3520TIC', '2019-11-03 19:22:12', '2019-11-03 19:22:12', NULL),
(43, '3520TICAmarrillo_9.jpg', 'Amarrillo_9.jpg', '3520TIC', '2019-11-03 19:22:13', '2019-11-03 19:22:13', NULL),
(44, '3520TICtablero_7.jpg', 'tablero_7.jpg', '3520TIC', '2019-11-03 19:22:13', '2019-11-03 19:22:13', NULL),
(45, '4045PIBCeleste_1.jpg', 'Celeste_1.jpg', '4045PIB', '2019-11-03 19:26:33', '2019-11-03 19:26:33', NULL),
(46, '4045PIBCeleste_2.jpg', 'Celeste_2.jpg', '4045PIB', '2019-11-03 19:26:33', '2019-11-03 19:26:33', NULL),
(47, '4045PIBCeleste_3.jpg', 'Celeste_3.jpg', '4045PIB', '2019-11-03 19:26:34', '2019-11-03 19:26:34', NULL),
(48, '4045PIBCeleste_4.jpg', 'Celeste_4.jpg', '4045PIB', '2019-11-03 19:26:34', '2019-11-03 19:26:34', NULL),
(49, '4045PIBCeleste_5.jpg', 'Celeste_5.jpg', '4045PIB', '2019-11-03 19:26:34', '2019-11-03 19:26:34', NULL),
(50, '4045PIBCeleste_6.jpg', 'Celeste_6.jpg', '4045PIB', '2019-11-03 19:26:34', '2019-11-03 19:26:34', NULL),
(51, '4045PIBCeleste_7.jpg', 'Celeste_7.jpg', '4045PIB', '2019-11-03 19:26:34', '2019-11-03 19:26:34', NULL),
(52, '4045PIBCeleste_8.jpg', 'Celeste_8.jpg', '4045PIB', '2019-11-03 19:26:34', '2019-11-03 19:26:34', NULL),
(53, '4045PIBCeleste_9.jpg', 'Celeste_9.jpg', '4045PIB', '2019-11-03 19:26:35', '2019-11-03 19:26:35', NULL),
(54, '4045PIBtablero_2.jpg', 'tablero_2.jpg', '4045PIB', '2019-11-03 19:26:35', '2019-11-03 19:26:35', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `image_uploads`
--

CREATE TABLE `image_uploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias`
--

CREATE TABLE `incidencias` (
  `incidencia_id` bigint(20) UNSIGNED NOT NULL,
  `placa_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ci` bigint(20) NOT NULL,
  `tipo_incidencia_descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_incidencia` date NOT NULL,
  `vehiculo_en_movimiento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lugar_incidencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `incidencias`
--

INSERT INTO `incidencias` (`incidencia_id`, `placa_id`, `ci`, `tipo_incidencia_descripcion`, `fecha_incidencia`, `vehiculo_en_movimiento`, `lugar_incidencia`, `descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2720RKF', 1000249, 'ROBO', '2017-07-26', 'SI', 'LUGAR 1', 'DESCRIPCION 1', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(2, '2911PHC', 10037191, 'ACCIDENTE', '2017-01-09', 'NO', 'LUGAR 2', 'DESCRIPCION 2', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(3, '1147DEK', 4752189, 'ROBO', '2017-08-11', 'SI', 'LUGAR 4', 'DESCRIPCION 3', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(4, '4045PIB', 10242587, 'ACCIDENTE', '2019-09-20', 'SI', 'LUGAR 1', 'DESCRIPCION 4', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(5, '2720RKF', 1000249, 'ROBO', '2019-07-08', 'NO', 'LUGAR 2', 'DESCRIPCION 5', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(6, '2911PHC', 10037191, 'ACCIDENTE', '2017-10-06', 'SI', 'LUGAR 4', 'DESCRIPCION 6', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(7, '1147DEK', 4752189, 'ROBO', '2018-10-30', 'NO', 'LUGAR 1', 'DESCRIPCION 7', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(8, '4045PIB', 1000249, 'ACCIDENTE', '2019-07-20', 'SI', 'LUGAR 2', 'DESCRIPCION 8', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(9, '2720RKF', 10037191, 'ROBO', '2017-07-26', 'SI', 'LUGAR 4', 'DESCRIPCION 9', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(10, '2911PHC', 4752189, 'ACCIDENTE', '2018-01-12', 'NO', 'LUGAR 1', 'DESCRIPCION 10', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(11, '1147DEK', 10242587, 'ROBO', '2019-04-22', 'SI', 'LUGAR 2', 'DESCRIPCION 11', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(12, '4045PIB', 1000249, 'ACCIDENTE', '2017-10-13', 'NO', 'LUGAR 4', 'DESCRIPCION 12', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(13, '2720RKF', 10037191, 'ROBO', '2017-12-03', 'SI', 'LUGAR 1', 'DESCRIPCION 13', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(14, '2911PHC', 4752189, 'ACCIDENTE', '2017-12-09', 'SI', 'LUGAR 2', 'DESCRIPCION 14', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(15, '1147DEK', 10242587, 'ROBO', '2017-09-12', 'NO', 'LUGAR 4', 'DESCRIPCION 15', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(16, '4045PIB', 10242587, 'ACCIDENTE', '2017-03-20', 'SI', 'LUGAR 1', 'DESCRIPCION 16', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(17, '2720RKF', 1000249, 'ROBO', '2019-03-03', 'NO', 'LUGAR 2', 'DESCRIPCION 17', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(18, '2911PHC', 10037191, 'ACCIDENTE', '2018-08-02', 'SI', 'LUGAR 4', 'DESCRIPCION 18', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(19, '1147DEK', 4752189, 'ROBO', '2017-05-28', 'SI', 'LUGAR 1', 'DESCRIPCION 19', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(20, '4045PIB', 1000249, 'ACCIDENTE', '2018-04-10', 'NO', 'LUGAR 2', 'DESCRIPCION 20', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(21, '2720RKF', 10037191, 'ROBO', '2019-09-01', 'SI', 'LUGAR 4', 'DESCRIPCION 21', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(22, '2911PHC', 4752189, 'ACCIDENTE', '2018-09-23', 'NO', 'LUGAR 1', 'DESCRIPCION 22', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(23, '1147DEK', 10242587, 'ROBO', '2018-05-31', 'SI', 'LUGAR 2', 'DESCRIPCION 23', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(24, '4045PIB', 1000249, 'ACCIDENTE', '2018-01-30', 'SI', 'LUGAR 4', 'DESCRIPCION 24', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(25, '2720RKF', 10037191, 'ROBO', '2019-03-10', 'NO', 'LUGAR 1', 'DESCRIPCION 25', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(26, '2911PHC', 4752189, 'ACCIDENTE', '2017-07-08', 'SI', 'LUGAR 2', 'DESCRIPCION 26', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(27, '1147DEK', 10242587, 'ROBO', '2018-10-18', 'NO', 'LUGAR 4', 'DESCRIPCION 27', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(28, '4045PIB', 1000249, 'ACCIDENTE', '2017-03-14', 'SI', 'LUGAR 1', 'DESCRIPCION 28', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(29, '2720RKF', 10037191, 'ROBO', '2019-06-06', 'SI', 'LUGAR 2', 'DESCRIPCION 29', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(30, '2911PHC', 4752189, 'ACCIDENTE', '2019-05-23', 'NO', 'LUGAR 4', 'DESCRIPCION 30', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(31, '1147DEK', 1000249, 'ROBO', '2019-01-18', 'SI', 'LUGAR 1', 'DESCRIPCION 31', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(32, '4045PIB', 10037191, 'ACCIDENTE', '2019-02-02', 'NO', 'LUGAR 2', 'DESCRIPCION 32', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(33, '2720RKF', 4752189, 'ROBO', '2018-10-17', 'SI', 'LUGAR 4', 'DESCRIPCION 33', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(34, '2911PHC', 10242587, 'ACCIDENTE', '2019-02-05', 'SI', 'LUGAR 1', 'DESCRIPCION 34', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(35, '1147DEK', 1000249, 'ROBO', '2019-09-04', 'NO', 'LUGAR 2', 'DESCRIPCION 35', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(36, '4045PIB', 10037191, 'ACCIDENTE', '2017-03-15', 'SI', 'LUGAR 4', 'DESCRIPCION 36', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(37, '2720RKF', 4752189, 'ROBO', '2017-01-20', 'NO', 'LUGAR 1', 'DESCRIPCION 37', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(38, '2911PHC', 10242587, 'ACCIDENTE', '2018-04-20', 'SI', 'LUGAR 2', 'DESCRIPCION 38', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(39, '1147DEK', 10242587, 'ROBO', '2018-01-11', 'SI', 'LUGAR 4', 'DESCRIPCION 39', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(40, '4045PIB', 1000249, 'ACCIDENTE', '2018-11-19', 'NO', 'LUGAR 1', 'DESCRIPCION 40', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(41, '2720RKF', 10037191, 'ROBO', '2018-05-08', 'SI', 'LUGAR 2', 'DESCRIPCION 41', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(42, '2911PHC', 4752189, 'ACCIDENTE', '2017-08-17', 'NO', 'LUGAR 4', 'DESCRIPCION 42', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(43, '1147DEK', 10242587, 'ROBO', '2017-09-17', 'SI', 'LUGAR 1', 'DESCRIPCION 43', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(44, '4045PIB', 1000249, 'ACCIDENTE', '2019-05-31', 'SI', 'LUGAR 2', 'DESCRIPCION 44', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(45, '2720RKF', 10037191, 'ROBO', '2017-11-18', 'NO', 'LUGAR 4', 'DESCRIPCION 45', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(46, '2911PHC', 4752189, 'ACCIDENTE', '2019-03-04', 'SI', 'LUGAR 1', 'DESCRIPCION 46', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(47, '1147DEK', 1000249, 'ROBO', '2019-07-11', 'NO', 'LUGAR 2', 'DESCRIPCION 47', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(48, '4045PIB', 10037191, 'ACCIDENTE', '2019-08-17', 'SI', 'LUGAR 4', 'DESCRIPCION 48', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(49, '2720RKF', 4752189, 'ROBO', '2017-09-03', 'SI', 'LUGAR 1', 'DESCRIPCION 49', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(50, '2911PHC', 10242587, 'ACCIDENTE', '2017-02-17', 'NO', 'LUGAR 2', 'DESCRIPCION 50', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(51, '1147DEK', 1000249, 'ROBO', '2018-12-03', 'SI', 'LUGAR 4', 'DESCRIPCION 51', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(52, '4045PIB', 10037191, 'ACCIDENTE', '2019-06-17', 'NO', 'LUGAR 1', 'DESCRIPCION 52', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(53, '2720RKF', 4752189, 'ROBO', '2018-11-08', 'SI', 'LUGAR 2', 'DESCRIPCION 53', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(54, '2911PHC', 10242587, 'ACCIDENTE', '2017-04-02', 'SI', 'LUGAR 4', 'DESCRIPCION 54', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(55, '1147DEK', 10242587, 'ROBO', '2018-12-06', 'NO', 'LUGAR 1', 'DESCRIPCION 55', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(56, '4045PIB', 1000249, 'ACCIDENTE', '2019-01-07', 'SI', 'LUGAR 2', 'DESCRIPCION 56', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(57, '2720RKF', 10037191, 'ROBO', '2018-02-23', 'NO', 'LUGAR 4', 'DESCRIPCION 57', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(58, '2911PHC', 1000249, 'ACCIDENTE', '2019-08-16', 'SI', 'LUGAR 1', 'DESCRIPCION 58', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(59, '1147DEK', 10037191, 'ROBO', '2019-05-19', 'SI', 'LUGAR 2', 'DESCRIPCION 59', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(60, '4045PIB', 4752189, 'ACCIDENTE', '2018-06-27', 'NO', 'LUGAR 4', 'DESCRIPCION 60', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(61, '2720RKF', 10242587, 'ROBO', '2017-04-07', 'SI', 'LUGAR 1', 'DESCRIPCION 61', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(62, '2911PHC', 1000249, 'ACCIDENTE', '2019-03-19', 'NO', 'LUGAR 2', 'DESCRIPCION 62', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(63, '1147DEK', 10037191, 'ROBO', '2019-09-07', 'SI', 'LUGAR 4', 'DESCRIPCION 63', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(64, '4045PIB', 4752189, 'ACCIDENTE', '2017-04-03', 'SI', 'LUGAR 1', 'DESCRIPCION 64', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(65, '2720RKF', 1000249, 'ROBO', '2018-07-07', 'NO', 'LUGAR 2', 'DESCRIPCION 65', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(66, '2911PHC', 10037191, 'ACCIDENTE', '2018-04-26', 'SI', 'LUGAR 4', 'DESCRIPCION 66', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(67, '1147DEK', 4752189, 'ROBO', '2019-03-18', 'NO', 'LUGAR 1', 'DESCRIPCION 67', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(68, '4045PIB', 10242587, 'ACCIDENTE', '2018-01-24', 'SI', 'LUGAR 2', 'DESCRIPCION 68', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(69, '2720RKF', 1000249, 'ROBO', '2018-01-17', 'SI', 'LUGAR 4', 'DESCRIPCION 69', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(70, '2911PHC', 10037191, 'ACCIDENTE', '2018-09-09', 'NO', 'LUGAR 1', 'DESCRIPCION 70', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(71, '1147DEK', 4752189, 'ROBO', '2018-11-05', 'SI', 'LUGAR 2', 'DESCRIPCION 71', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(72, '4045PIB', 10242587, 'ACCIDENTE', '2017-07-17', 'NO', 'LUGAR 4', 'DESCRIPCION 72', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(73, '2720RKF', 10242587, 'ROBO', '2018-12-25', 'SI', 'LUGAR 1', 'DESCRIPCION 73', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(74, '2911PHC', 1000249, 'ACCIDENTE', '2019-09-20', 'SI', 'LUGAR 2', 'DESCRIPCION 74', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(75, '1147DEK', 10037191, 'ROBO', '2018-02-14', 'NO', 'LUGAR 4', 'DESCRIPCION 75', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(76, '4045PIB', 4752189, 'ACCIDENTE', '2019-06-23', 'SI', 'LUGAR 1', 'DESCRIPCION 76', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(77, '2720RKF', 1000249, 'ROBO', '2017-11-04', 'NO', 'LUGAR 2', 'DESCRIPCION 77', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(78, '2911PHC', 10037191, 'ACCIDENTE', '2017-03-04', 'SI', 'LUGAR 4', 'DESCRIPCION 78', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(79, '1147DEK', 4752189, 'ROBO', '2017-06-01', 'SI', 'LUGAR 1', 'DESCRIPCION 79', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(80, '4045PIB', 1000249, 'ACCIDENTE', '2017-02-21', 'NO', 'LUGAR 2', 'DESCRIPCION 80', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(81, '2720RKF', 10037191, 'ROBO', '2019-08-15', 'SI', 'LUGAR 4', 'DESCRIPCION 81', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(82, '2911PHC', 4752189, 'ACCIDENTE', '2019-03-06', 'NO', 'LUGAR 1', 'DESCRIPCION 82', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(83, '1147DEK', 10242587, 'ROBO', '2018-02-20', 'SI', 'LUGAR 2', 'DESCRIPCION 83', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(84, '4045PIB', 1000249, 'ACCIDENTE', '2017-07-12', 'SI', 'LUGAR 4', 'DESCRIPCION 84', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(85, '2720RKF', 10037191, 'ROBO', '2018-04-21', 'NO', 'LUGAR 1', 'DESCRIPCION 85', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(86, '2911PHC', 4752189, 'ACCIDENTE', '2019-07-21', 'SI', 'LUGAR 2', 'DESCRIPCION 86', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(87, '1147DEK', 1000249, 'ROBO', '2018-04-06', 'NO', 'LUGAR 4', 'DESCRIPCION 87', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(88, '4045PIB', 10037191, 'ACCIDENTE', '2018-02-18', 'SI', 'LUGAR 1', 'DESCRIPCION 88', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(89, '2720RKF', 4752189, 'ROBO', '2017-04-07', 'SI', 'LUGAR 2', 'DESCRIPCION 89', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(90, '2911PHC', 10242587, 'ACCIDENTE', '2018-01-25', 'NO', 'LUGAR 4', 'DESCRIPCION 90', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(91, '1147DEK', 1000249, 'ROBO', '2019-10-05', 'SI', 'LUGAR 1', 'DESCRIPCION 91', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(92, '4045PIB', 10037191, 'ACCIDENTE', '2017-04-14', 'NO', 'LUGAR 2', 'DESCRIPCION 92', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(93, '2720RKF', 4752189, 'ROBO', '2019-07-09', 'SI', 'LUGAR 4', 'DESCRIPCION 93', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(94, '2911PHC', 10242587, 'ACCIDENTE', '2019-09-24', 'SI', 'LUGAR 1', 'DESCRIPCION 94', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(95, '1147DEK', 10242587, 'ROBO', '2018-09-01', 'NO', 'LUGAR 2', 'DESCRIPCION 95', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(96, '4045PIB', 1000249, 'ACCIDENTE', '2019-08-21', 'SI', 'LUGAR 4', 'DESCRIPCION 96', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(97, '2720RKF', 10037191, 'ROBO', '2017-11-10', 'NO', 'LUGAR 1', 'DESCRIPCION 97', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(98, '2911PHC', 4752189, 'ACCIDENTE', '2018-01-13', 'SI', 'LUGAR 2', 'DESCRIPCION 98', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(99, '1147DEK', 1000249, 'ROBO', '2017-07-30', 'SI', 'LUGAR 4', 'DESCRIPCION 99', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(100, '4045PIB', 10037191, 'ACCIDENTE', '2019-01-20', 'NO', 'LUGAR 1', 'DESCRIPCION 100', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(101, '2720RKF', 4752189, 'ROBO', '2019-05-13', 'SI', 'LUGAR 2', 'DESCRIPCION 101', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(102, '2911PHC', 10242587, 'ACCIDENTE', '2017-05-27', 'NO', 'LUGAR 4', 'DESCRIPCION 102', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(103, '1147DEK', 4752189, 'ROBO', '2017-07-07', 'SI', 'LUGAR 1', 'DESCRIPCION 103', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(104, '4045PIB', 1000249, 'ACCIDENTE', '2018-11-27', 'SI', 'LUGAR 2', 'DESCRIPCION 104', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(105, '2720RKF', 10037191, 'ROBO', '2018-02-04', 'NO', 'LUGAR 4', 'DESCRIPCION 105', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(106, '2911PHC', 4752189, 'ACCIDENTE', '2019-07-26', 'SI', 'LUGAR 1', 'DESCRIPCION 106', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(107, '1147DEK', 1000249, 'ROBO', '2017-05-22', 'NO', 'LUGAR 2', 'DESCRIPCION 107', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(108, '4045PIB', 4752189, 'ACCIDENTE', '2018-10-22', 'SI', 'LUGAR 4', 'DESCRIPCION 108', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(109, '2720RKF', 1000249, 'ROBO', '2018-01-15', 'SI', 'LUGAR 1', 'DESCRIPCION 109', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(110, '2911PHC', 10037191, 'ACCIDENTE', '2018-12-24', 'NO', 'LUGAR 2', 'DESCRIPCION 110', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(111, '1147DEK', 4752189, 'ROBO', '2018-11-18', 'SI', 'LUGAR 4', 'DESCRIPCION 111', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(112, '4045PIB', 1000249, 'ACCIDENTE', '2017-01-12', 'NO', 'LUGAR 1', 'DESCRIPCION 112', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(113, '2720RKF', 10037191, 'ROBO', '2019-07-22', 'SI', 'LUGAR 2', 'DESCRIPCION 113', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(114, '2911PHC', 4752189, 'ACCIDENTE', '2017-10-22', 'SI', 'LUGAR 4', 'DESCRIPCION 114', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(115, '1147DEK', 10242587, 'ROBO', '2018-01-20', 'NO', 'LUGAR 1', 'DESCRIPCION 115', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(116, '4045PIB', 1000249, 'ACCIDENTE', '2017-08-22', 'SI', 'LUGAR 2', 'DESCRIPCION 116', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(117, '2720RKF', 10037191, 'ROBO', '2018-02-13', 'NO', 'LUGAR 4', 'DESCRIPCION 117', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(118, '2911PHC', 4752189, 'ACCIDENTE', '2017-10-25', 'SI', 'LUGAR 1', 'DESCRIPCION 118', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(119, '1147DEK', 1000249, 'ROBO', '2017-04-15', 'SI', 'LUGAR 2', 'DESCRIPCION 119', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(120, '4045PIB', 10037191, 'ACCIDENTE', '2017-05-07', 'NO', 'LUGAR 4', 'DESCRIPCION 120', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(121, '2720RKF', 4752189, 'ROBO', '2017-09-22', 'SI', 'LUGAR 1', 'DESCRIPCION 121', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(122, '2911PHC', 10242587, 'ACCIDENTE', '2019-10-12', 'NO', 'LUGAR 2', 'DESCRIPCION 122', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(123, '1147DEK', 1000249, 'ROBO', '2019-07-23', 'SI', 'LUGAR 4', 'DESCRIPCION 123', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(124, '4045PIB', 10037191, 'ACCIDENTE', '2018-11-29', 'SI', 'LUGAR 1', 'DESCRIPCION 124', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(125, '2720RKF', 4752189, 'ROBO', '2017-08-19', 'NO', 'LUGAR 2', 'DESCRIPCION 125', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(126, '2911PHC', 10242587, 'ACCIDENTE', '2017-06-21', 'SI', 'LUGAR 4', 'DESCRIPCION 126', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(127, '1147DEK', 10242587, 'ROBO', '2017-02-25', 'NO', 'LUGAR 1', 'DESCRIPCION 127', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(128, '4045PIB', 1000249, 'ACCIDENTE', '2017-02-10', 'SI', 'LUGAR 2', 'DESCRIPCION 128', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(129, '2720RKF', 10037191, 'ROBO', '2017-03-24', 'SI', 'LUGAR 4', 'DESCRIPCION 129', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(130, '2911PHC', 10242587, 'ACCIDENTE', '2019-01-17', 'NO', 'LUGAR 1', 'DESCRIPCION 130', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(131, '1147DEK', 1000249, 'ROBO', '2017-06-07', 'SI', 'LUGAR 2', 'DESCRIPCION 131', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(132, '4045PIB', 10037191, 'ACCIDENTE', '2019-04-12', 'NO', 'LUGAR 4', 'DESCRIPCION 132', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(133, '2720RKF', 4752189, 'ROBO', '2018-03-26', 'SI', 'LUGAR 1', 'DESCRIPCION 133', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(134, '2911PHC', 10242587, 'ACCIDENTE', '2018-08-13', 'SI', 'LUGAR 2', 'DESCRIPCION 134', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(135, '1147DEK', 10242587, 'ROBO', '2018-12-05', 'NO', 'LUGAR 4', 'DESCRIPCION 135', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(136, '4045PIB', 1000249, 'ACCIDENTE', '2018-01-13', 'SI', 'LUGAR 1', 'DESCRIPCION 136', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(137, '2720RKF', 10037191, 'ROBO', '2017-05-15', 'NO', 'LUGAR 2', 'DESCRIPCION 137', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(138, '2911PHC', 4752189, 'ACCIDENTE', '2017-08-15', 'SI', 'LUGAR 4', 'DESCRIPCION 138', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(139, '1147DEK', 1000249, 'ROBO', '2019-07-08', 'SI', 'LUGAR 1', 'DESCRIPCION 139', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(140, '4045PIB', 10037191, 'ACCIDENTE', '2017-06-27', 'NO', 'LUGAR 2', 'DESCRIPCION 140', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(141, '2720RKF', 4752189, 'ROBO', '2019-07-12', 'SI', 'LUGAR 4', 'DESCRIPCION 141', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(142, '2911PHC', 1000249, 'ACCIDENTE', '2019-10-21', 'NO', 'LUGAR 1', 'DESCRIPCION 142', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(143, '1147DEK', 10037191, 'ROBO', '2017-10-25', 'SI', 'LUGAR 2', 'DESCRIPCION 143', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(144, '4045PIB', 4752189, 'ACCIDENTE', '2018-05-16', 'SI', 'LUGAR 4', 'DESCRIPCION 144', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(145, '2720RKF', 10242587, 'ROBO', '2019-04-18', 'NO', 'LUGAR 1', 'DESCRIPCION 145', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(146, '2911PHC', 1000249, 'ACCIDENTE', '2019-10-22', 'SI', 'LUGAR 2', 'DESCRIPCION 146', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(147, '1147DEK', 10037191, 'ROBO', '2017-06-07', 'NO', 'LUGAR 4', 'DESCRIPCION 147', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(148, '4045PIB', 4752189, 'ACCIDENTE', '2018-11-06', 'SI', 'LUGAR 1', 'DESCRIPCION 148', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(149, '2720RKF', 1000249, 'ROBO', '2017-03-06', 'SI', 'LUGAR 2', 'DESCRIPCION 149', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(150, '2911PHC', 10037191, 'ACCIDENTE', '2017-10-13', 'NO', 'LUGAR 4', 'DESCRIPCION 150', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(151, '1147DEK', 4752189, 'ROBO', '2017-04-28', 'SI', 'LUGAR 1', 'DESCRIPCION 151', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(152, '4045PIB', 10242587, 'ACCIDENTE', '2017-07-12', 'NO', 'LUGAR 2', 'DESCRIPCION 152', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(153, '2720RKF', 1000249, 'ROBO', '2017-01-09', 'SI', 'LUGAR 4', 'DESCRIPCION 153', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(154, '2911PHC', 10037191, 'ACCIDENTE', '2018-11-13', 'SI', 'LUGAR 1', 'DESCRIPCION 154', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(155, '1147DEK', 4752189, 'ROBO', '2017-03-14', 'NO', 'LUGAR 2', 'DESCRIPCION 155', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(156, '4045PIB', 10242587, 'ACCIDENTE', '2019-02-28', 'SI', 'LUGAR 4', 'DESCRIPCION 156', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(157, '2720RKF', 10242587, 'ROBO', '2018-11-30', 'NO', 'LUGAR 1', 'DESCRIPCION 157', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(158, '2911PHC', 4752189, 'ACCIDENTE', '2017-04-18', 'SI', 'LUGAR 2', 'DESCRIPCION 158', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(159, '1147DEK', 1000249, 'ROBO', '2017-05-27', 'SI', 'LUGAR 4', 'DESCRIPCION 159', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(160, '4045PIB', 10037191, 'ACCIDENTE', '2017-01-18', 'NO', 'LUGAR 1', 'DESCRIPCION 160', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(161, '2720RKF', 4752189, 'ROBO', '2018-04-19', 'SI', 'LUGAR 2', 'DESCRIPCION 161', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(162, '2911PHC', 1000249, 'ACCIDENTE', '2018-11-24', 'NO', 'LUGAR 4', 'DESCRIPCION 162', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(163, '1147DEK', 10037191, 'ROBO', '2019-06-28', 'SI', 'LUGAR 1', 'DESCRIPCION 163', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infraccions`
--

CREATE TABLE `infraccions` (
  `infraccion_id` bigint(20) UNSIGNED NOT NULL,
  `placa_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gestion` int(11) NOT NULL,
  `fecha_infraccion` date NOT NULL,
  `serie` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boleta` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condigo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monto` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `infraccions`
--

INSERT INTO `infraccions` (`infraccion_id`, `placa_id`, `gestion`, `fecha_infraccion`, `serie`, `boleta`, `condigo`, `descripcion`, `monto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '2911PHC', 2019, '2019-06-26', 'A2', '123457', '381.41', 'NO OBSERVAR LAS SENALES DE TRANSITO', 354.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(3, '1147DEK', 2017, '2016-12-10', 'A3', '123458', '381.42', 'NO PRESENTARSE A LAS INSPECCIONES EN PERIODOS ESTABLECIDOS', 383.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(4, '4045PIB', 2017, '2018-02-24', 'A4', '123459', '381.43', 'NO PRESENTARSE A LAS INSPECCIONES EN PERIODOS ESTABLECIDOS', 320.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(5, '2720RKF', 2019, '2018-12-07', 'A5', '123460', '381.44', 'DISTRAERSE PELIGROSAMENTE AL CONDUCIR UN VEHICULO', 305.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(6, '2911PHC', 2018, '2018-06-04', 'A6', '123461', '381.45', 'CONDUCIR VEHICULO SIN LICENCIA (BREVET) O PERMISO', 179.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(7, '1147DEK', 2019, '2017-11-05', 'A7', '123462', '381.46', 'NO OBSERVAR LAS SENALES DE TRANSITO', 343.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(8, '4045PIB', 2019, '2016-08-24', 'A8', '123463', '381.47', 'NO PRESENTARSE A LAS INSPECCIONES EN PERIODOS ESTABLECIDOS', 271.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(9, '2720RKF', 2019, '2019-09-25', 'A9', '123464', '381.48', 'DISTRAERSE PELIGROSAMENTE AL CONDUCIR UN VEHICULO', 391.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(10, '2911PHC', 2018, '2016-03-15', 'A10', '123465', '381.49', 'CONDUCIR VEHICULO SIN LICENCIA (BREVET) O PERMISO', 207.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(11, '1147DEK', 2017, '2017-04-25', 'A11', '123466', '381.50', 'NO OBSERVAR LAS SENALES DE TRANSITO', 230.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(12, '4045PIB', 2018, '2019-03-22', 'A12', '123467', '381.51', 'NO PRESENTARSE A LAS INSPECCIONES EN PERIODOS ESTABLECIDOS', 27.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(13, '2720RKF', 2017, '2016-12-05', 'A13', '123468', '381.52', 'NO PRESENTARSE A LAS INSPECCIONES EN PERIODOS ESTABLECIDOS', 341.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(14, '2911PHC', 2017, '2017-07-27', 'A14', '123469', '381.53', 'INSPECCION TECNICA VEHICULAR', 41.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(15, '1147DEK', 2017, '2019-09-05', 'A15', '123470', '381.54', 'DISTRAERSE PELIGROSAMENTE AL CONDUCIR UN VEHICULO', 185.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(16, '4045PIB', 2019, '2018-01-20', 'A16', '123471', '381.55', 'CONDUCIR VEHICULO SIN LICENCIA (BREVET) O PERMISO', 105.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(17, '2720RKF', 2018, '2018-08-07', 'A17', '123472', '381.56', 'NO OBSERVAR LAS SENALES DE TRANSITO', 62.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(18, '2911PHC', 2019, '2018-07-03', 'A18', '123473', '381.57', 'NO PRESENTARSE A LAS INSPECCIONES EN PERIODOS ESTABLECIDOS', 45.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(19, '1147DEK', 2018, '2017-05-16', 'A19', '123474', '381.58', 'NO PRESENTARSE A LAS INSPECCIONES EN PERIODOS ESTABLECIDOS', 342.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(20, '4045PIB', 2018, '2017-10-31', 'A20', '123475', '381.59', 'INSPECCION TECNICA VEHICULAR', 277.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(21, '2720RKF', 2018, '2018-10-28', 'A21', '123476', '381.60', 'DISTRAERSE PELIGROSAMENTE AL CONDUCIR UN VEHICULO', 146.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(22, '2911PHC', 2018, '2019-04-17', 'A22', '123477', '381.61', 'CONDUCIR VEHICULO SIN LICENCIA (BREVET) O PERMISO', 289.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(23, '1147DEK', 2018, '2018-07-18', 'A23', '123478', '381.62', 'NO OBSERVAR LAS SENALES DE TRANSITO', 361.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(24, '4045PIB', 2017, '2016-05-30', 'A24', '123479', '381.63', 'NO PRESENTARSE A LAS INSPECCIONES EN PERIODOS ESTABLECIDOS', 13.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(25, '2720RKF', 2018, '2017-11-13', 'A25', '123480', '381.64', 'NO PRESENTARSE A LAS INSPECCIONES EN PERIODOS ESTABLECIDOS', 227.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(26, '2911PHC', 2019, '2018-08-24', 'A26', '123481', '381.65', 'INSPECCION TECNICA VEHICULAR', 151.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(27, '1147DEK', 2019, '2016-09-14', 'A27', '123482', '381.66', 'DISTRAERSE PELIGROSAMENTE AL CONDUCIR UN VEHICULO', 360.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(28, '4045PIB', 2017, '2017-10-23', 'A28', '123483', '381.67', 'CONDUCIR VEHICULO SIN LICENCIA (BREVET) O PERMISO', 266.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(29, '2720RKF', 2019, '2016-07-08', 'A29', '123484', '381.68', 'NO OBSERVAR LAS SENALES DE TRANSITO', 135.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(30, '2911PHC', 2017, '2018-07-17', 'A30', '123485', '381.69', 'NO PRESENTARSE A LAS INSPECCIONES EN PERIODOS ESTABLECIDOS', 216.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(31, '1147DEK', 2017, '2016-12-28', 'A31', '123486', '381.70', 'NO PRESENTARSE A LAS INSPECCIONES EN PERIODOS ESTABLECIDOS', 296.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(32, '4045PIB', 2019, '2018-10-13', 'A32', '123487', '381.71', 'NO PRESENTARSE A LAS INSPECCIONES EN PERIODOS ESTABLECIDOS', 358.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(33, '2720RKF', 2017, '2018-11-30', 'A33', '123488', '381.72', 'INSPECCION TECNICA VEHICULAR', 367.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(34, '2911PHC', 2019, '2018-01-21', 'A34', '123489', '381.73', 'DISTRAERSE PELIGROSAMENTE AL CONDUCIR UN VEHICULO', 220.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(35, '1147DEK', 2019, '2016-06-05', 'A35', '123490', '381.74', 'CONDUCIR VEHICULO SIN LICENCIA (BREVET) O PERMISO', 43.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(36, '4045PIB', 2017, '2016-04-12', 'A36', '123491', '381.75', 'NO OBSERVAR LAS SENALES DE TRANSITO', 23.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(37, '2720RKF', 2017, '2017-02-20', 'A37', '123492', '381.76', 'NO PRESENTARSE A LAS INSPECCIONES EN PERIODOS ESTABLECIDOS', 285.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(38, '2911PHC', 2017, '2018-04-17', 'A38', '123493', '381.77', 'NO PRESENTARSE A LAS INSPECCIONES EN PERIODOS ESTABLECIDOS', 358.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(39, '1147DEK', 2017, '2018-05-29', 'A39', '123494', '381.78', 'NO PRESENTARSE A LAS INSPECCIONES EN PERIODOS ESTABLECIDOS', 362.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(40, '4045PIB', 2019, '2016-02-29', 'A40', '123495', '381.79', 'INSPECCION TECNICA VEHICULAR', 227.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(41, '2720RKF', 2018, '2018-06-13', 'A41', '123496', '381.80', 'DISTRAERSE PELIGROSAMENTE AL CONDUCIR UN VEHICULO', 335.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(42, '2911PHC', 2019, '2019-03-15', 'A42', '123497', '381.81', 'CONDUCIR VEHICULO SIN LICENCIA (BREVET) O PERMISO', 363.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(43, '1147DEK', 2018, '2019-04-13', 'A43', '123498', '381.82', 'NO OBSERVAR LAS SENALES DE TRANSITO', 136.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(44, '4045PIB', 2018, '2016-08-19', 'A44', '123499', '381.83', 'NO PRESENTARSE A LAS INSPECCIONES EN PERIODOS ESTABLECIDOS', 400.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(45, '2720RKF', 2019, '2019-10-17', 'A45', '123500', '381.84', 'NO PRESENTARSE A LAS INSPECCIONES EN PERIODOS ESTABLECIDOS', 289.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(46, '2911PHC', 2017, '2017-01-19', 'A46', '123501', '381.85', 'INSPECCION TECNICA VEHICULAR', 352.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(47, '1147DEK', 2019, '2016-08-29', 'A47', '123502', '381.86', 'DISTRAERSE PELIGROSAMENTE AL CONDUCIR UN VEHICULO', 53.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(48, '4045PIB', 2019, '2016-07-06', 'A48', '123503', '381.87', 'NO PRESENTARSE A LAS INSPECCIONES EN PERIODOS ESTABLECIDOS', 122.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(49, '2720RKF', 2018, '2016-09-24', 'A49', '123504', '381.88', 'NO PRESENTARSE A LAS INSPECCIONES EN PERIODOS ESTABLECIDOS', 189.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(50, '2911PHC', 2019, '2018-08-31', 'A50', '123505', '381.89', 'INSPECCION TECNICA VEHICULAR', 170.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(51, '1147DEK', 2019, '2017-12-18', 'A51', '123506', '381.90', 'DISTRAERSE PELIGROSAMENTE AL CONDUCIR UN VEHICULO', 166.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(52, '4045PIB', 2019, '2017-08-16', 'A52', '123507', '381.91', 'CONDUCIR VEHICULO SIN LICENCIA (BREVET) O PERMISO', 267.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(53, '2720RKF', 2017, '2017-05-17', 'A53', '123508', '381.92', 'NO OBSERVAR LAS SENALES DE TRANSITO', 58.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(54, '2911PHC', 2017, '2017-04-10', 'A54', '123509', '381.93', 'NO PRESENTARSE A LAS INSPECCIONES EN PERIODOS ESTABLECIDOS', 77.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(55, '1147DEK', 2019, '2017-09-16', 'A55', '123510', '381.94', 'NO PRESENTARSE A LAS INSPECCIONES EN PERIODOS ESTABLECIDOS', 114.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(56, '4045PIB', 2019, '2017-06-17', 'A56', '123511', '381.95', 'INSPECCION TECNICA VEHICULAR', 349.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(57, '2720RKF', 2019, '2019-06-17', 'A57', '123512', '381.96', 'DISTRAERSE PELIGROSAMENTE AL CONDUCIR UN VEHICULO', 139.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(58, '2911PHC', 2019, '2016-02-16', 'A58', '123513', '381.97', 'CONDUCIR VEHICULO SIN LICENCIA (BREVET) O PERMISO', 369.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(59, '1147DEK', 2018, '2016-02-26', 'A59', '123514', '381.98', 'NO OBSERVAR LAS SENALES DE TRANSITO', 300.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(60, '4045PIB', 2019, '2016-12-30', 'A60', '123515', '381.99', 'NO PRESENTARSE A LAS INSPECCIONES EN PERIODOS ESTABLECIDOS', 298.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(61, '2720RKF', 2018, '2016-10-02', 'A61', '123516', '381.100', 'NO PRESENTARSE A LAS INSPECCIONES EN PERIODOS ESTABLECIDOS', 384.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(62, '2911PHC', 2019, '2019-06-05', 'A62', '123517', '381.101', 'INSPECCION TECNICA VEHICULAR', 138.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(63, '1147DEK', 2018, '2018-06-20', 'A63', '123518', '381.102', 'DISTRAERSE PELIGROSAMENTE AL CONDUCIR UN VEHICULO', 117.00, '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(64, '1147DEK', 2019, '2019-10-07', 'AS-1', 'fffff', 'DE2', 'POR NO VER EL SEMAFORO', 191.00, '2019-11-03 23:04:21', '2019-11-03 23:04:21', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimientos`
--

CREATE TABLE `mantenimientos` (
  `mantenimiento_id` bigint(20) UNSIGNED NOT NULL,
  `mant_id_ini_asign` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_inicio_mant` date DEFAULT NULL,
  `placa_id_mant` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detalle_mant` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_mant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa_encargada_mant` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mant_id_fin_asign` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_fin_mant` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mantenimientos`
--

INSERT INTO `mantenimientos` (`mantenimiento_id`, `mant_id_ini_asign`, `fecha_inicio_mant`, `placa_id_mant`, `detalle_mant`, `tipo_mant`, `empresa_encargada_mant`, `mant_id_fin_asign`, `fecha_fin_mant`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'M1', '2017-02-15', '1147DEK', 'CAMBIO DE LLANTAS', 'PREVENTIVO', 'SAMCAR', NULL, NULL, '2019-11-03 21:08:39', '2019-11-03 21:08:39', NULL),
(2, 'M2', '2017-01-11', '1147DEK', 'CAMBIO DE FRENOS', 'PREVENTIVO', 'SAMCAR', NULL, NULL, '2019-11-03 21:12:00', '2019-11-03 21:12:01', NULL),
(3, 'M3', '2017-03-07', '1147DEK', 'CAMBIO DE BALATAS', 'PREVENTIVO', 'SAMCAR', NULL, NULL, '2019-11-03 21:12:50', '2019-11-03 21:12:50', NULL),
(4, 'M4', '2017-03-07', '1147DEK', 'CAMBIO DE SILLAS', 'CORRECTIVO', 'SAMCAR', NULL, NULL, '2019-11-03 21:14:08', '2019-11-03 21:24:21', '2019-11-03 21:24:21'),
(5, 'M5', '2018-08-20', '2720RKF', 'REPARACION DE MOTOR', 'PREVENTIVO', 'MECANICA SIMO BOLIVAR', 'MF5', '2018-08-21', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(6, 'M6', '2019-06-28', '2911PHC', 'CAMBIO DE SILLAS, CAMBIO DE TORNILLO, CAMBIO DE REPUESTOS', 'CORRECTIVO', 'SAMCAR', 'MF6', '2019-06-29', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(7, 'M7', '2018-01-14', '1147DEK', 'VERIFICACION CAMBIO TANQUE DE GAS', 'PREVENTIVO', 'LUBRICANTES TERRAN', 'MF7', '2018-01-15', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(8, 'M8', '2018-11-25', '4045PIB', 'CAMBIO DE ACEITE', 'CORRECTIVO', 'TALLER MECANICO MAR', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(9, 'M9', '2019-08-19', '2720RKF', 'CAMBIO DE REPUESTOS', 'PREVENTIVO', 'CHAPERIA Y PINTURA CARLOS', 'MF9', '2019-08-20', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(10, 'M10', '2018-01-04', '2911PHC', 'CAMBIO DE SILLAS', 'CORRECTIVO', 'MECANICA SIMO BOLIVAR', 'MF10', '2018-01-05', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(11, 'M11', '2017-06-11', '1147DEK', 'CAMBIO DE LLANTAS', 'PREVENTIVO', 'SAMCAR', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(12, 'M12', '2018-08-18', '4045PIB', 'REPARACION DE MOTOR', 'CORRECTIVO', 'LUBRICANTES TERRAN', 'MF12', '2018-08-19', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(13, 'M13', '2019-10-22', '2720RKF', 'CAMBIO DE SILLAS, CAMBIO DE TORNILLO, CAMBIO DE REPUESTOS', 'PREVENTIVO', 'TALLER MECANICO MAR', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(14, 'M14', '2019-01-12', '2911PHC', 'VERIFICACION CAMBIO TANQUE DE GAS', 'CORRECTIVO', 'CHAPERIA Y PINTURA CARLOS', 'MF14', '2019-01-13', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(15, 'M15', '2017-06-19', '1147DEK', 'CAMBIO DE ACEITE', 'PREVENTIVO', 'MECANICA SIMO BOLIVAR', 'MF15', '2017-06-20', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(16, 'M16', '2019-09-14', '4045PIB', 'CAMBIO DE REPUESTOS', 'CORRECTIVO', 'SAMCAR', 'MF16', '2019-09-15', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(17, 'M17', '2017-07-25', '2720RKF', 'CAMBIO DE SILLAS', 'PREVENTIVO', 'LUBRICANTES TERRAN', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(18, 'M18', '2017-08-06', '2911PHC', 'CAMBIO DE LLANTAS', 'CORRECTIVO', 'TALLER MECANICO MAR', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(19, 'M19', '2019-05-07', '1147DEK', 'REPARACION DE MOTOR', 'PREVENTIVO', 'CHAPERIA Y PINTURA CARLOS', 'MF19', '2019-05-08', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(20, 'M20', '2018-10-03', '4045PIB', 'CAMBIO DE SILLAS, CAMBIO DE TORNILLO, CAMBIO DE REPUESTOS', 'CORRECTIVO', 'MECANICA SIMO BOLIVAR', 'MF20', '2018-10-04', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(21, 'M21', '2018-02-24', '2720RKF', 'VERIFICACION CAMBIO TANQUE DE GAS', 'PREVENTIVO', 'SAMCAR', 'MF21', '2018-02-25', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(22, 'M22', '2017-08-17', '2911PHC', 'CAMBIO DE ACEITE', 'CORRECTIVO', 'LUBRICANTES TERRAN', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(23, 'M23', '2018-01-21', '1147DEK', 'CAMBIO DE REPUESTOS', 'PREVENTIVO', 'TALLER MECANICO MAR', 'MF23', '2018-01-22', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(24, 'M24', '2018-08-06', '4045PIB', 'CAMBIO DE SILLAS', 'CORRECTIVO', 'CHAPERIA Y PINTURA CARLOS', 'MF24', '2018-08-07', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(25, 'M25', '2017-08-10', '2720RKF', 'CAMBIO DE LLANTAS', 'PREVENTIVO', 'MECANICA SIMO BOLIVAR', 'MF25', '2017-08-11', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(26, 'M26', '2017-06-06', '2911PHC', 'REPARACION DE MOTOR', 'CORRECTIVO', 'SAMCAR', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(27, 'M27', '2019-01-26', '1147DEK', 'CAMBIO DE SILLAS, CAMBIO DE TORNILLO, CAMBIO DE REPUESTOS', 'PREVENTIVO', 'LUBRICANTES TERRAN', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(28, 'M28', '2017-03-28', '4045PIB', 'VERIFICACION CAMBIO TANQUE DE GAS', 'CORRECTIVO', 'TALLER MECANICO MAR', 'MF28', '2017-03-29', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(29, 'M29', '2017-04-16', '2720RKF', 'CAMBIO DE ACEITE', 'PREVENTIVO', 'CHAPERIA Y PINTURA CARLOS', 'MF29', '2017-04-17', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(30, 'M30', '2017-04-25', '2911PHC', 'CAMBIO DE REPUESTOS', 'CORRECTIVO', 'MECANICA SIMO BOLIVAR', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(31, 'M31', '2017-03-08', '1147DEK', 'CAMBIO DE SILLAS', 'PREVENTIVO', 'SAMCAR', 'MF31', '2017-03-09', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(32, 'M32', '2017-08-07', '4045PIB', 'CAMBIO DE LLANTAS', 'CORRECTIVO', 'LUBRICANTES TERRAN', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(33, 'M33', '2018-08-21', '2720RKF', 'REPARACION DE MOTOR', 'PREVENTIVO', 'TALLER MECANICO MAR', 'MF33', '2018-08-22', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(34, 'M34', '2017-08-09', '2911PHC', 'CAMBIO DE SILLAS, CAMBIO DE TORNILLO, CAMBIO DE REPUESTOS', 'CORRECTIVO', 'CHAPERIA Y PINTURA CARLOS', 'MF34', '2017-08-10', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(35, 'M35', '2018-12-19', '1147DEK', 'VERIFICACION CAMBIO TANQUE DE GAS', 'PREVENTIVO', 'MECANICA SIMO BOLIVAR', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(36, 'M36', '2017-12-23', '4045PIB', 'CAMBIO DE ACEITE', 'CORRECTIVO', 'SAMCAR', 'MF36', '2017-12-24', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(37, 'M37', '2017-04-11', '2720RKF', 'CAMBIO DE REPUESTOS', 'PREVENTIVO', 'LUBRICANTES TERRAN', 'MF37', '2017-04-12', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(38, 'M38', '2017-10-22', '2911PHC', 'CAMBIO DE SILLAS', 'CORRECTIVO', 'TALLER MECANICO MAR', 'MF38', '2017-10-23', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(39, 'M39', '2019-06-26', '1147DEK', 'CAMBIO DE LLANTAS', 'PREVENTIVO', 'CHAPERIA Y PINTURA CARLOS', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(40, 'M40', '2017-03-19', '4045PIB', 'REPARACION DE MOTOR', 'CORRECTIVO', 'MECANICA SIMO BOLIVAR', 'MF40', '2017-03-20', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(41, 'M41', '2019-05-04', '2720RKF', 'CAMBIO DE SILLAS, CAMBIO DE TORNILLO, CAMBIO DE REPUESTOS', 'PREVENTIVO', 'SAMCAR', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(42, 'M42', '2017-03-25', '2911PHC', 'VERIFICACION CAMBIO TANQUE DE GAS', 'CORRECTIVO', 'LUBRICANTES TERRAN', 'MF42', '2017-03-26', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(43, 'M43', '2017-11-25', '1147DEK', 'CAMBIO DE ACEITE', 'PREVENTIVO', 'TALLER MECANICO MAR', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(44, 'M44', '2017-09-18', '4045PIB', 'CAMBIO DE REPUESTOS', 'CORRECTIVO', 'CHAPERIA Y PINTURA CARLOS', 'MF44', '2017-09-19', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(45, 'M45', '2017-11-16', '2720RKF', 'CAMBIO DE SILLAS', 'PREVENTIVO', 'MECANICA SIMO BOLIVAR', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(46, 'M46', '2019-05-13', '2911PHC', 'CAMBIO DE LLANTAS', 'CORRECTIVO', 'SAMCAR', 'MF46', '2019-05-14', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(47, 'M47', '2017-08-19', '1147DEK', 'REPARACION DE MOTOR', 'PREVENTIVO', 'LUBRICANTES TERRAN', 'MF47', '2017-08-20', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(48, 'M48', '2017-02-07', '4045PIB', 'CAMBIO DE SILLAS, CAMBIO DE TORNILLO, CAMBIO DE REPUESTOS', 'CORRECTIVO', 'TALLER MECANICO MAR', 'MF48', '2017-02-08', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(49, 'M49', '2017-07-04', '2720RKF', 'VERIFICACION CAMBIO TANQUE DE GAS', 'PREVENTIVO', 'CHAPERIA Y PINTURA CARLOS', 'MF49', '2017-07-05', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(50, 'M50', '2017-03-01', '2911PHC', 'CAMBIO DE ACEITE', 'CORRECTIVO', 'MECANICA SIMO BOLIVAR', 'MF50', '2017-03-02', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(51, 'M51', '2017-09-22', '1147DEK', 'CAMBIO DE REPUESTOS', 'PREVENTIVO', 'SAMCAR', 'MF51', '2017-09-23', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(52, 'M52', '2017-05-15', '4045PIB', 'CAMBIO DE SILLAS', 'CORRECTIVO', 'LUBRICANTES TERRAN', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(53, 'M53', '2017-12-27', '2720RKF', 'CAMBIO DE LLANTAS', 'PREVENTIVO', 'TALLER MECANICO MAR', 'MF53', '2017-12-28', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(54, 'M54', '2017-10-12', '2911PHC', 'REPARACION DE MOTOR', 'CORRECTIVO', 'CHAPERIA Y PINTURA CARLOS', 'MF54', '2017-10-13', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(55, 'M55', '2017-05-18', '1147DEK', 'CAMBIO DE SILLAS, CAMBIO DE TORNILLO, CAMBIO DE REPUESTOS', 'PREVENTIVO', 'MECANICA SIMO BOLIVAR', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(56, 'M56', '2019-06-01', '4045PIB', 'VERIFICACION CAMBIO TANQUE DE GAS', 'CORRECTIVO', 'SAMCAR', 'MF56', '2019-06-02', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(57, 'M57', '2017-12-05', '2720RKF', 'CAMBIO DE ACEITE', 'PREVENTIVO', 'LUBRICANTES TERRAN', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(58, 'M58', '2019-03-12', '2911PHC', 'CAMBIO DE REPUESTOS', 'CORRECTIVO', 'TALLER MECANICO MAR', 'MF58', '2019-03-13', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(59, 'M59', '2019-09-08', '1147DEK', 'CAMBIO DE SILLAS', 'PREVENTIVO', 'CHAPERIA Y PINTURA CARLOS', 'MF59', '2019-09-09', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(60, 'M60', '2018-10-18', '4045PIB', 'CAMBIO DE LLANTAS', 'CORRECTIVO', 'MECANICA SIMO BOLIVAR', 'MF60', '2018-10-19', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(61, 'M61', '2019-09-06', '2720RKF', 'REPARACION DE MOTOR', 'PREVENTIVO', 'SAMCAR', 'MF61', '2019-09-07', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(62, 'M62', '2018-12-25', '2911PHC', 'CAMBIO DE SILLAS, CAMBIO DE TORNILLO, CAMBIO DE REPUESTOS', 'CORRECTIVO', 'LUBRICANTES TERRAN', 'MF62', '2018-12-26', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(63, 'M63', '2017-04-18', '1147DEK', 'VERIFICACION CAMBIO TANQUE DE GAS', 'PREVENTIVO', 'TALLER MECANICO MAR', 'MF63', '2017-04-19', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(64, 'M64', '2018-08-09', '4045PIB', 'CAMBIO DE ACEITE', 'CORRECTIVO', 'CHAPERIA Y PINTURA CARLOS', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(65, 'M65', '2017-03-24', '2720RKF', 'CAMBIO DE REPUESTOS', 'PREVENTIVO', 'MECANICA SIMO BOLIVAR', 'MF65', '2017-03-25', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(66, 'M66', '2018-03-27', '2911PHC', 'CAMBIO DE SILLAS', 'CORRECTIVO', 'SAMCAR', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(67, 'M67', '2017-03-17', '1147DEK', 'CAMBIO DE LLANTAS', 'PREVENTIVO', 'LUBRICANTES TERRAN', 'MF67', '2017-03-18', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(68, 'M68', '2018-04-28', '4045PIB', 'REPARACION DE MOTOR', 'CORRECTIVO', 'TALLER MECANICO MAR', 'MF68', '2018-04-29', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(69, 'M69', '2017-11-04', '2720RKF', 'CAMBIO DE SILLAS, CAMBIO DE TORNILLO, CAMBIO DE REPUESTOS', 'PREVENTIVO', 'CHAPERIA Y PINTURA CARLOS', 'MF69', '2017-11-05', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(70, 'M70', '2018-09-04', '2911PHC', 'VERIFICACION CAMBIO TANQUE DE GAS', 'CORRECTIVO', 'MECANICA SIMO BOLIVAR', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(71, 'M71', '2017-08-31', '1147DEK', 'CAMBIO DE ACEITE', 'PREVENTIVO', 'SAMCAR', 'MF71', '2017-09-01', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(72, 'M72', '2018-10-16', '4045PIB', 'CAMBIO DE REPUESTOS', 'CORRECTIVO', 'LUBRICANTES TERRAN', 'MF72', '2018-10-17', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(73, 'M73', '2018-09-03', '2720RKF', 'CAMBIO DE SILLAS', 'PREVENTIVO', 'TALLER MECANICO MAR', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(74, 'M74', '2017-04-19', '2911PHC', 'CAMBIO DE LLANTAS', 'CORRECTIVO', 'CHAPERIA Y PINTURA CARLOS', 'MF74', '2017-04-20', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(75, 'M75', '2018-03-19', '1147DEK', 'REPARACION DE MOTOR', 'PREVENTIVO', 'MECANICA SIMO BOLIVAR', 'MF75', '2018-03-20', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(76, 'M76', '2017-08-25', '4045PIB', 'CAMBIO DE SILLAS, CAMBIO DE TORNILLO, CAMBIO DE REPUESTOS', 'CORRECTIVO', 'SAMCAR', 'MF76', '2017-08-26', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(77, 'M77', '2019-07-13', '2720RKF', 'VERIFICACION CAMBIO TANQUE DE GAS', 'PREVENTIVO', 'LUBRICANTES TERRAN', 'MF77', '2019-07-14', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(78, 'M78', '2017-12-17', '2911PHC', 'CAMBIO DE ACEITE', 'CORRECTIVO', 'TALLER MECANICO MAR', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(79, 'M79', '2019-10-18', '1147DEK', 'CAMBIO DE REPUESTOS', 'PREVENTIVO', 'CHAPERIA Y PINTURA CARLOS', 'MF79', '2019-10-19', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(80, 'M80', '2017-12-01', '4045PIB', 'CAMBIO DE SILLAS', 'CORRECTIVO', 'MECANICA SIMO BOLIVAR', 'MF80', '2017-12-02', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(81, 'M81', '2019-09-04', '2720RKF', 'CAMBIO DE LLANTAS', 'PREVENTIVO', 'SAMCAR', 'MF81', '2019-09-05', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(82, 'M82', '2019-07-25', '2911PHC', 'REPARACION DE MOTOR', 'CORRECTIVO', 'LUBRICANTES TERRAN', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(83, 'M83', '2019-09-30', '1147DEK', 'CAMBIO DE SILLAS, CAMBIO DE TORNILLO, CAMBIO DE REPUESTOS', 'PREVENTIVO', 'TALLER MECANICO MAR', 'MF83', '2019-10-01', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(84, 'M84', '2019-08-19', '4045PIB', 'VERIFICACION CAMBIO TANQUE DE GAS', 'CORRECTIVO', 'CHAPERIA Y PINTURA CARLOS', '', '0000-00-00', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(85, 'M85', '2017-06-17', '2720RKF', 'CAMBIO DE ACEITE', 'PREVENTIVO', 'MECANICA SIMO BOLIVAR', 'MF85', '2017-06-18', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `marca_id` bigint(20) UNSIGNED NOT NULL,
  `marca_descripcion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`marca_id`, `marca_descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'TOYOTA', '2019-11-03 18:23:04', '2019-11-03 18:23:04', NULL),
(2, 'NISSAN', '2019-10-24 05:18:14', '2019-10-24 05:18:14', NULL),
(3, 'FORD', '2019-10-24 05:18:20', '2019-10-24 05:18:20', NULL),
(4, 'VOLKSWAGEN', '2019-10-24 05:18:29', '2019-10-24 05:18:29', NULL),
(5, 'MAZDA', '2019-10-24 05:18:37', '2019-10-24 05:18:37', NULL),
(6, 'SUZUKI', '2019-10-24 05:18:43', '2019-10-24 05:18:43', NULL),
(7, 'VOLVO', '2019-10-24 05:18:50', '2019-10-24 05:18:50', NULL),
(8, 'TESLA', '2019-10-24 05:18:56', '2019-10-24 05:18:56', NULL),
(9, 'QUANTUM', '2019-10-24 05:19:01', '2019-10-24 05:19:01', NULL),
(10, 'HONDA', '2019-10-24 05:19:07', '2019-10-24 05:19:07', NULL),
(11, 'HYUDAI', '2019-10-24 05:19:13', '2019-10-24 05:19:13', NULL),
(12, 'CHEVROLET', '2019-10-24 05:19:18', '2019-10-24 05:19:18', NULL),
(13, 'ISUZU', '2019-10-24 05:19:24', '2019-10-24 05:19:24', NULL),
(14, 'MARCA 1', '2019-11-03 18:23:47', '2019-11-03 18:24:20', '2019-11-03 18:24:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2019_10_04_145818_create_clases_table', 1),
(5, '2019_10_04_150051_create_marcas_table', 1),
(6, '2019_10_04_150105_create_tipos_table', 1),
(7, '2019_10_04_150148_create_tipo_combustibles_table', 1),
(8, '2019_10_04_150213_create_tipo_usos_table', 1),
(9, '2019_10_04_150215_create_estado_services_table', 1),
(10, '2019_10_04_150336_create_vehiculos_table', 1),
(11, '2019_10_04_150411_create_documentos_propiedad_vehiculos_table', 1),
(12, '2019_10_04_150433_create_documentos_ronovable_vehiculos_table', 1),
(13, '2019_10_04_150556_create_seguros_table', 1),
(14, '2019_10_09_223649_create_image_uploads_table', 1),
(15, '2019_10_10_111614_create_imagenes_perfil_vehiculos_table', 1),
(16, '2019_10_14_175050_create_estado_servicio_vehiculos_table', 1),
(17, '2019_10_27_122323_create_departamentos_table', 1),
(18, '2019_10_27_195431_create_estado_funcs_table', 1),
(19, '2019_10_27_195538_create_categoria_licencias_table', 1),
(20, '2019_10_27_195558_create_ci_expedido_ens_table', 1),
(21, '2019_10_27_195610_create_funcionarios_table', 1),
(22, '2019_10_28_235611_create_tipo_c_c_s_table', 1),
(23, '2019_10_28_235711_create_asignacions_table', 1),
(24, '2019_10_28_235726_create_devolucions_table', 1),
(25, '2019_10_29_151436_create_vales_de_combustibles_table', 1),
(26, '2019_10_29_151439_create_tipo_mantenimientos_table', 1),
(27, '2019_10_29_151601_create_mantenimientos_table', 1),
(28, '2019_10_30_141531_create_infraccions_table', 1),
(29, '2019_11_03_193943_create_tipo_incidencias_table', 1),
(31, '2019_11_03_202451_create_tipo_r_d_s_table', 1),
(32, '2019_11_03_202532_create_reclamo_denuncias_table', 1),
(33, '2019_11_03_194042_create_incidencias_table', 2),
(35, '2014_10_12_100000_create_password_resets_table', 3),
(36, '2019_08_19_000000_create_failed_jobs_table', 3),
(37, '2014_10_12_000000_create_users_table', 4),
(38, '2019_11_04_201242_create_fotos_users_table', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('romanfranco767@gmail.com', '$2y$10$LGbPkAStgS2h1piN9.W2auB5yLt3uCcgf.fq5tdO2boQXVGAZXKjy', '2019-11-05 12:36:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamo_denuncias`
--

CREATE TABLE `reclamo_denuncias` (
  `reclamo_denuncia_id` bigint(20) UNSIGNED NOT NULL,
  `ante_quien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_r_d_descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_resolucion_inicio_proceso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_r_d_inicio` date NOT NULL,
  `archivo_inicio_proceso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_resolucion_fin_proceso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_r_d_fin` date NOT NULL,
  `archivo_fin_proceso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguros`
--

CREATE TABLE `seguros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gestion` int(11) NOT NULL,
  `texto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa_aseguradora` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_vigencia` date NOT NULL,
  `archivo_subido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `seguros`
--

INSERT INTO `seguros` (`id`, `gestion`, `texto`, `empresa_aseguradora`, `fecha_vigencia`, `archivo_subido`, `placa_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2019, 'SEGURO DE VIDA', 'InSeg', '2020-01-07', '1147DEKAlianza_Seguros_Familiar_page-0001.jpg', '1147DEK', '2019-11-03 18:58:00', '2019-11-03 18:58:00', NULL),
(2, 2019, 'SEGURO CONTRA ACCIDENTES', 'UNSEG', '2020-01-15', '1147DEKformulario_ddjj_identificacion_del_cliente_personas_juridicas_page-0001.jpg', '1147DEK', '2019-11-03 18:58:00', '2019-11-03 18:58:00', NULL),
(3, 2019, 'SEGURO VEHICULAR', 'LBIC', '2020-01-22', '1147DEKformulario_de_reintegro_de_gastos_page-0001.jpg', '1147DEK', '2019-11-03 18:58:00', '2019-11-03 18:58:00', NULL),
(4, 2019, 'SEGURO DE VIDA', 'UNSEG', '2019-12-07', '2720RKFAlianza_Seguros_Manos_page-0001.jpg', '2720RKF', '2019-11-03 19:06:11', '2019-11-03 19:06:11', NULL),
(5, 2019, 'SEGURO', 'SEGURIDAD PEN', '2019-12-25', '2720RKFformulario_ddjj_identificacion_del_cliente_personas_juridicas_page-0002.jpg', '2720RKF', '2019-11-03 19:06:11', '2019-11-03 19:06:11', NULL),
(6, 2019, 'SEGURO GENERAL', 'UNIV', '2019-12-09', '2720RKFformulario_reclamo_3ro_materiales_page-0001.jpg', '2720RKF', '2019-11-03 19:06:11', '2019-11-03 19:06:11', NULL),
(7, 2019, 'SEGURO VITAL', 'VITAL', '2020-01-10', '2911PHCAlianza_Seguros_Maquinaria_Pesada_page-0001.jpg', '2911PHC', '2019-11-03 19:16:31', '2019-11-03 19:16:31', NULL),
(8, 2019, 'SEGURO PERSONAL', 'FERNANDEZ SEG', '2019-12-05', '2911PHCgeo-life-enrollment_page-0001.jpg', '2911PHC', '2019-11-03 19:16:31', '2019-11-03 19:16:31', NULL),
(9, 2019, 'SEGURO INDEFINIDO', 'INDEF', '2020-01-07', '2911PHCformulario_reclamo_3ro_materiales_page-0002.jpg', '2911PHC', '2019-11-03 19:16:31', '2019-11-03 19:16:31', NULL),
(10, 2019, 'SEGURO VITAL', 'VITAL', '2019-12-02', '3520TICsmall_1.jpg', '3520TIC', '2019-11-03 19:23:27', '2019-11-03 19:23:27', NULL),
(11, 2019, 'SEGURO', 'SEGURIDAD PEN', '2019-12-07', '3520TICmedmal_-_cuestionario-medico-individual_page-0001.jpg', '3520TIC', '2019-11-03 19:23:27', '2019-11-03 19:23:27', NULL),
(12, 2019, 'SEGURO DE VIDA', 'VITAL', '2019-12-04', '4045PIBformulario-asistencia-medica-final_page-0001.jpg', '4045PIB', '2019-11-03 19:27:35', '2019-11-03 19:27:35', NULL),
(13, 2019, 'SEGURO', 'VITAL', '2019-12-03', '4045PIBsmall_5.jpg', '4045PIB', '2019-11-03 19:27:35', '2019-11-03 19:27:35', NULL),
(14, 2016, 'SEGURO 1', 'EMPRESA 1', '2020-01-01', '1147DEKvida_colectivo_-_formulario_denuncia_por_desempleo_involuntario.jpg', '1147DEK', '2019-11-05 23:06:35', '2019-11-05 23:06:35', NULL),
(15, 2016, 'SEGURO 2', 'EMPRESA 2', '2020-01-08', '1147DEKsolicitud_convenio_caucion_page-0002.jpg', '1147DEK', '2019-11-05 23:06:35', '2019-11-05 23:06:35', NULL),
(16, 2017, 'SEGURO 3', 'EMPRESA 3', '2019-01-22', '1147DEKsolicitud_convenio_caucion_page-0001.jpg', '1147DEK', '2019-11-05 23:06:35', '2019-11-05 23:06:35', NULL),
(17, 2017, 'SEGURO 4', 'EMPRESA 4', '2020-01-07', '1147DEKSolicitud_de_Seguro_Auto_Veterano_tcm664-131194_page-0001.jpg', '1147DEK', '2019-11-05 23:10:06', '2019-11-05 23:10:06', NULL),
(18, 2017, 'SEGURO 5', 'EMPRESA 5', '2020-01-08', '1147DEKSolicitud_Colectivo_de_Vida_y_Accidentes_Personales_tcm664-90397_page-0002.jpg', '1147DEK', '2019-11-05 23:10:06', '2019-11-05 23:10:06', NULL),
(19, 2018, 'SEGURO 6', 'EMPRESA 6', '2020-01-09', '1147DEKSolicitud_Colectivo_de_Vida_y_Accidentes_Personales_tcm664-90397_page-0001.jpg', '1147DEK', '2019-11-05 23:10:06', '2019-11-05 23:10:06', NULL),
(20, 2018, 'SEGURO 7', 'EMPRESA 7', '2020-01-20', '1147DEKsmall_7.jpg', '1147DEK', '2019-11-05 23:10:06', '2019-11-05 23:10:06', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `tipo_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_descripcion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`tipo_id`, `tipo_descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'LAND CRUISER', '2019-11-03 18:25:13', '2019-11-03 18:25:28', NULL),
(2, 'TIPO 1', '2019-10-24 05:24:29', '2019-10-24 05:24:29', NULL),
(3, 'TIPO 2', '2019-10-24 05:24:34', '2019-10-24 05:24:34', NULL),
(4, 'TIPO 4', '2019-10-24 05:24:41', '2019-10-24 05:24:41', NULL),
(5, 'TIPO 5', '2019-10-24 05:24:46', '2019-10-24 05:24:46', NULL),
(6, 'TIPO 6', '2019-10-24 05:24:52', '2019-10-24 05:24:52', NULL),
(7, 'TIPO 7', '2019-10-24 05:24:56', '2019-10-24 05:24:56', NULL),
(8, 'TIPO 8', '2019-10-24 05:25:01', '2019-10-24 05:25:01', NULL),
(9, 'TIPO 9', '2019-10-24 05:25:06', '2019-10-24 05:25:06', NULL),
(10, 'TIPO 10', '2019-10-24 05:25:19', '2019-10-24 05:25:19', NULL),
(11, 'TIPO 11', '2019-10-24 05:25:28', '2019-10-24 05:25:28', NULL),
(12, 'TIPO 12', '2019-10-24 05:25:36', '2019-10-24 05:25:36', NULL),
(13, 'tipo0', '2019-11-03 18:26:31', '2019-11-03 18:26:37', '2019-11-03 18:26:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_combustibles`
--

CREATE TABLE `tipo_combustibles` (
  `tipo_combustible_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_combustible_descripcion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_combustibles`
--

INSERT INTO `tipo_combustibles` (`tipo_combustible_id`, `tipo_combustible_descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'GASOLINA', '2019-11-03 18:27:08', '2019-11-03 18:27:08', NULL),
(2, 'DIESEL', '2019-10-24 05:29:33', '2019-10-24 05:29:33', NULL),
(3, 'ENERGIA ELECTRICA', '2019-10-24 05:29:38', '2019-10-24 05:29:38', NULL),
(4, 'ETANOL', '2019-10-24 05:29:47', '2019-10-24 05:29:47', NULL),
(5, 'GAS NATURAL VEHICULAR (GNV)', '2019-10-24 05:29:50', '2019-10-24 05:29:50', NULL),
(6, 'COMBUSTIBLE 1', '2019-11-03 18:27:57', '2019-11-03 18:28:11', '2019-11-03 18:28:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_c_c_s`
--

CREATE TABLE `tipo_c_c_s` (
  `tipo_c_c_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_c_c_descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_c_c_s`
--

INSERT INTO `tipo_c_c_s` (`tipo_c_c_id`, `tipo_c_c_descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'CONDUCTOR', '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL),
(2, 'CHOFER', '2019-10-28 04:57:39', '2019-10-28 04:57:39', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_incidencias`
--

CREATE TABLE `tipo_incidencias` (
  `tipo_incidencia_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_incidencia_descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_incidencias`
--

INSERT INTO `tipo_incidencias` (`tipo_incidencia_id`, `tipo_incidencia_descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ROBO', '2019-11-01 04:00:00', NULL, NULL),
(2, 'ACCIDENTE', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_mantenimientos`
--

CREATE TABLE `tipo_mantenimientos` (
  `tipo_mantenimiento_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_mantenimiento_descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_mantenimientos`
--

INSERT INTO `tipo_mantenimientos` (`tipo_mantenimiento_id`, `tipo_mantenimiento_descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PREVENTIVO', '2019-10-09 08:00:00', '2019-10-09 08:00:00', NULL),
(2, 'CORRECTIVO', '2019-10-22 08:00:00', '2019-10-16 08:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_r_d_s`
--

CREATE TABLE `tipo_r_d_s` (
  `tipo_r_d_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_r_d_descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_r_d_s`
--

INSERT INTO `tipo_r_d_s` (`tipo_r_d_id`, `tipo_r_d_descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'RECLAMO', NULL, NULL, NULL),
(2, 'DENUNCIA', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usos`
--

CREATE TABLE `tipo_usos` (
  `tipo_uso_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_uso_descripcion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_usos`
--

INSERT INTO `tipo_usos` (`tipo_uso_id`, `tipo_uso_descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'OFICIAL', '2019-11-03 18:28:37', '2019-11-03 18:29:19', NULL),
(2, 'OPERATIVO - ADMINISTRATIVO', '2019-11-03 18:28:49', '2019-11-03 18:28:49', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `imagen`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'Sistema Control Vehicular', 'admin@admin.com', NULL, '$2y$10$NQVf/x1IRzvv9r8RvmzVRewbTxTX7c9pFw..flCEs.o/59EDk6vEa', NULL, NULL, '2019-11-07 14:24:42', '2019-11-07 14:24:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vales_de_combustibles`
--

CREATE TABLE `vales_de_combustibles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha_entrega` date NOT NULL,
  `placa_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vales_de_combustibles`
--

INSERT INTO `vales_de_combustibles` (`id`, `fecha_entrega`, `placa_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2018-01-03', '2720RKF', '2019-11-03 21:35:35', '2019-11-03 22:49:51', NULL),
(2, '2018-01-03', '1147DEK', '2019-11-03 21:37:09', '2019-11-03 21:38:23', '2019-11-03 21:38:23'),
(3, '2018-01-04', '1147DEK', '2019-11-03 21:37:57', '2019-11-03 21:38:18', '2019-11-03 21:38:18'),
(4, '2018-01-01', '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(5, '2018-02-01', '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(6, '2018-03-01', '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(7, '2018-04-01', '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(8, '2018-05-01', '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(9, '2018-06-01', '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(10, '2018-07-01', '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(11, '2018-08-01', '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(12, '2018-09-01', '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(13, '2018-10-01', '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(14, '2018-11-01', '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(15, '2018-12-01', '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(16, '2019-01-01', '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(17, '2019-02-01', '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(18, '2019-03-01', '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(19, '2019-04-01', '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(20, '2019-05-01', '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(21, '2019-06-01', '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(22, '2019-07-01', '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(23, '2019-08-01', '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(24, '2019-09-01', '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(25, '2019-10-01', '2720RKF', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(26, '2017-10-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(27, '2017-11-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(28, '2017-12-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(29, '2018-01-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(30, '2018-02-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(31, '2018-03-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(32, '2018-04-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(33, '2018-05-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(34, '2018-06-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(35, '2018-07-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(36, '2018-08-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(37, '2018-09-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(38, '2018-10-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(39, '2018-11-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(40, '2018-12-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(41, '2019-01-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(42, '2019-02-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(43, '2019-03-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(44, '2019-04-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(45, '2019-05-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(46, '2019-06-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(47, '2019-07-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(48, '2019-08-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(49, '2019-09-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(50, '2019-10-01', '2911PHC', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(51, '2017-10-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(52, '2017-11-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(53, '2017-12-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(54, '2018-01-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(55, '2018-02-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(56, '2018-03-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(57, '2018-04-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(58, '2018-05-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(59, '2018-06-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(60, '2018-07-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(61, '2018-08-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(62, '2018-09-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(63, '2018-10-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(64, '2018-11-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(65, '2018-12-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(66, '2019-01-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(67, '2019-02-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(68, '2019-03-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(69, '2019-04-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(70, '2019-05-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(71, '2019-06-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(72, '2019-07-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(73, '2019-08-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(74, '2019-09-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(75, '2019-10-01', '1147DEK', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(76, '2017-10-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(77, '2017-11-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(78, '2017-12-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(79, '2018-01-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(80, '2018-02-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(81, '2018-03-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(82, '2018-04-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(83, '2018-05-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(84, '2018-06-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(85, '2018-07-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(86, '2018-08-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(87, '2018-09-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(88, '2018-10-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(89, '2018-11-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(90, '2018-12-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(91, '2019-01-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(92, '2019-02-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(93, '2019-03-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(94, '2019-04-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(95, '2019-05-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(96, '2019-06-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(97, '2019-07-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(98, '2019-08-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(99, '2019-09-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL),
(100, '2019-10-01', '4045PIB', '2019-10-28 16:42:16', '2019-10-28 16:42:16', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `placa_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_crpva` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_chasis` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_motor` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documento_importacion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_documento_importacion` bigint(20) NOT NULL,
  `plazas` int(11) NOT NULL,
  `ruedas` int(11) NOT NULL,
  `traccion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clase_id` bigint(20) NOT NULL,
  `marca_id` bigint(20) NOT NULL,
  `tipo_id` bigint(20) NOT NULL,
  `tipo_combustible_id` bigint(20) NOT NULL,
  `tipo_uso_id` bigint(20) NOT NULL,
  `fecha_incorporacion_institucion` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`placa_id`, `numero_crpva`, `numero_chasis`, `numero_motor`, `documento_importacion`, `numero_documento_importacion`, `plazas`, `ruedas`, `traccion`, `color`, `clase_id`, `marca_id`, `tipo_id`, `tipo_combustible_id`, `tipo_uso_id`, `fecha_incorporacion_institucion`, `created_at`, `updated_at`, `deleted_at`) VALUES
('1147DEK', '4714AAFK-1', 'RZJ950025764', '3RZ2059927', 'POLIZA DE IMPORTACION', 20909916, 7, 4, 'CUATRUPLE', 'NEGRO', 3, 13, 1, 1, 1, '2016-02-01', '2019-10-31 12:38:49', '2019-10-31 12:38:49', NULL),
('2720RKF', 'NUMEROCRPVA2720RKF', 'CHASIS2720RKF', 'NUMEROMOTOR2720RKF', 'POLIZA DE IMPORTACION C', 123456781, 5, 4, 'DOBLE', 'ROJO', 1, 2, 2, 5, 1, '2016-01-15', '2019-10-31 09:23:00', '2019-10-31 12:08:18', NULL),
('2911PHC', 'NUMEROCRPVA2911PHC', 'CHASIS2911PHC', 'NUMEROMOTOR2911PHC', 'POLIZA DE IMPORTACION B', 123456782, 6, 4, 'TRIPLE', 'AZUL', 2, 1, 4, 2, 2, '2016-01-16', '2019-10-31 10:59:36', '2019-11-02 04:26:56', NULL),
('3520TIC', 'NUMEROCRPVA3520TIC', 'CHASIS3520TIC', 'NUMEROMOTOR3520TIC', 'POLIZA DE IMPORTACION', 123456785, 4, 4, 'TRIPLE', 'AMARRILLO', 6, 5, 5, 3, 1, '2018-01-03', '2019-11-02 09:05:51', '2019-11-02 09:05:51', NULL),
('4045PIB', 'NUMEROCRPVA4045PIB', 'CHASIS4045PIB', 'NUMEROMOTOR4045PIB', 'POLIZA DE IMPORTACION', 123456784, 8, 4, 'QUINTUPLE', 'CELESTE', 5, 4, 6, 3, 2, '2016-01-18', '2019-10-31 13:28:14', '2019-11-02 04:25:45', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignacions`
--
ALTER TABLE `asignacions`
  ADD PRIMARY KEY (`asignacion_id`);

--
-- Indices de la tabla `categoria_licencias`
--
ALTER TABLE `categoria_licencias`
  ADD PRIMARY KEY (`categoria_licencia_id`);

--
-- Indices de la tabla `ci_expedido_ens`
--
ALTER TABLE `ci_expedido_ens`
  ADD PRIMARY KEY (`ci_exped_en_id`);

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`clase_id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`departamento_id`);

--
-- Indices de la tabla `devolucions`
--
ALTER TABLE `devolucions`
  ADD PRIMARY KEY (`devolucion_id`);

--
-- Indices de la tabla `documentos_propiedad_vehiculos`
--
ALTER TABLE `documentos_propiedad_vehiculos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documentos_ronovable_vehiculos`
--
ALTER TABLE `documentos_ronovable_vehiculos`
  ADD PRIMARY KEY (`archivero_id`);

--
-- Indices de la tabla `estado_funcs`
--
ALTER TABLE `estado_funcs`
  ADD PRIMARY KEY (`estado_func_id`);

--
-- Indices de la tabla `estado_services`
--
ALTER TABLE `estado_services`
  ADD PRIMARY KEY (`est_id`);

--
-- Indices de la tabla `estado_servicio_vehiculos`
--
ALTER TABLE `estado_servicio_vehiculos`
  ADD PRIMARY KEY (`est_serv_vehiculo_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fotos_users`
--
ALTER TABLE `fotos_users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`ci`);

--
-- Indices de la tabla `imagenes_perfil_vehiculos`
--
ALTER TABLE `imagenes_perfil_vehiculos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `image_uploads`
--
ALTER TABLE `image_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD PRIMARY KEY (`incidencia_id`);

--
-- Indices de la tabla `infraccions`
--
ALTER TABLE `infraccions`
  ADD PRIMARY KEY (`infraccion_id`);

--
-- Indices de la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  ADD PRIMARY KEY (`mantenimiento_id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`marca_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `reclamo_denuncias`
--
ALTER TABLE `reclamo_denuncias`
  ADD PRIMARY KEY (`reclamo_denuncia_id`);

--
-- Indices de la tabla `seguros`
--
ALTER TABLE `seguros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`tipo_id`);

--
-- Indices de la tabla `tipo_combustibles`
--
ALTER TABLE `tipo_combustibles`
  ADD PRIMARY KEY (`tipo_combustible_id`);

--
-- Indices de la tabla `tipo_c_c_s`
--
ALTER TABLE `tipo_c_c_s`
  ADD PRIMARY KEY (`tipo_c_c_id`);

--
-- Indices de la tabla `tipo_incidencias`
--
ALTER TABLE `tipo_incidencias`
  ADD PRIMARY KEY (`tipo_incidencia_id`);

--
-- Indices de la tabla `tipo_mantenimientos`
--
ALTER TABLE `tipo_mantenimientos`
  ADD PRIMARY KEY (`tipo_mantenimiento_id`);

--
-- Indices de la tabla `tipo_r_d_s`
--
ALTER TABLE `tipo_r_d_s`
  ADD PRIMARY KEY (`tipo_r_d_id`);

--
-- Indices de la tabla `tipo_usos`
--
ALTER TABLE `tipo_usos`
  ADD PRIMARY KEY (`tipo_uso_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `vales_de_combustibles`
--
ALTER TABLE `vales_de_combustibles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignacions`
--
ALTER TABLE `asignacions`
  MODIFY `asignacion_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `categoria_licencias`
--
ALTER TABLE `categoria_licencias`
  MODIFY `categoria_licencia_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ci_expedido_ens`
--
ALTER TABLE `ci_expedido_ens`
  MODIFY `ci_exped_en_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `clase_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `departamento_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `devolucions`
--
ALTER TABLE `devolucions`
  MODIFY `devolucion_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `documentos_propiedad_vehiculos`
--
ALTER TABLE `documentos_propiedad_vehiculos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `documentos_ronovable_vehiculos`
--
ALTER TABLE `documentos_ronovable_vehiculos`
  MODIFY `archivero_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `estado_funcs`
--
ALTER TABLE `estado_funcs`
  MODIFY `estado_func_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estado_services`
--
ALTER TABLE `estado_services`
  MODIFY `est_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado_servicio_vehiculos`
--
ALTER TABLE `estado_servicio_vehiculos`
  MODIFY `est_serv_vehiculo_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fotos_users`
--
ALTER TABLE `fotos_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagenes_perfil_vehiculos`
--
ALTER TABLE `imagenes_perfil_vehiculos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `image_uploads`
--
ALTER TABLE `image_uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  MODIFY `incidencia_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT de la tabla `infraccions`
--
ALTER TABLE `infraccions`
  MODIFY `infraccion_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  MODIFY `mantenimiento_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `marca_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `reclamo_denuncias`
--
ALTER TABLE `reclamo_denuncias`
  MODIFY `reclamo_denuncia_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `seguros`
--
ALTER TABLE `seguros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `tipo_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tipo_combustibles`
--
ALTER TABLE `tipo_combustibles`
  MODIFY `tipo_combustible_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_c_c_s`
--
ALTER TABLE `tipo_c_c_s`
  MODIFY `tipo_c_c_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_incidencias`
--
ALTER TABLE `tipo_incidencias`
  MODIFY `tipo_incidencia_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_mantenimientos`
--
ALTER TABLE `tipo_mantenimientos`
  MODIFY `tipo_mantenimiento_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_r_d_s`
--
ALTER TABLE `tipo_r_d_s`
  MODIFY `tipo_r_d_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_usos`
--
ALTER TABLE `tipo_usos`
  MODIFY `tipo_uso_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `vales_de_combustibles`
--
ALTER TABLE `vales_de_combustibles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

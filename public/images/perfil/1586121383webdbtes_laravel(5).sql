-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-04-2020 a las 23:21:10
-- Versión del servidor: 5.7.23-23
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webdbtes_laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id`, `created_at`, `updated_at`, `nombre`) VALUES
(1, NULL, NULL, 'Dirección General'),
(2, NULL, NULL, 'Dirección Académica y de vinculación'),
(3, NULL, NULL, 'Subdirección Académica'),
(4, NULL, NULL, 'División de ISC'),
(5, NULL, NULL, 'Laboratorios'),
(6, NULL, NULL, 'Docentes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campo_laborals`
--

CREATE TABLE `campo_laborals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vineta` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `elemento` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `campo_laborals`
--

INSERT INTO `campo_laborals` (`id`, `vineta`, `elemento`, `created_at`, `updated_at`, `slug`) VALUES
(1, '*', 'Analizar, desarrollar y aplicar herramientas de modelos matemáticos, estadísticos y de simulación', '2020-03-26 05:00:00', '2020-03-26 05:00:00', 'CAMP1'),
(2, '*', 'Desarrollar, implementar y administrar software de sistemas o de aplicación que cumpla con los estándares de calidad con el fin de apoyar la productividad y competitividad de las organizaciones.', '2020-03-26 05:00:00', '2020-03-26 05:00:00', 'CAMP2'),
(3, '*', 'Diseñar, desarrollar y administrar bases de datos conforme a requerimientos definidos, normas organizacionales de manejo y seguridad de la información, utilizando tecnologías emergentes.', '2020-03-26 05:00:00', '2020-03-26 05:00:00', 'CAMP3'),
(4, '*', 'Diseño, gestión y administración en Redes Computacionales.', '2020-03-26 05:00:00', '2020-03-26 05:00:00', 'CAMP4'),
(5, '*', 'Analista programador, Ingeniero de Soporte Técnico, comercializador del sistema de cómputo; y una vez que haya adquirido experiencia, director de centro de cómputo; así como el puesto de una gerencia, administrador de desarrollo de software, consultor, instructor e investigador.', '2020-03-26 05:00:00', '2020-03-31 23:30:14', '1585693814');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuerpos_academicos`
--

CREATE TABLE `cuerpos_academicos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `grado` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idCA` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `clave` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `integrantes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cuerpos_academicos`
--

INSERT INTO `cuerpos_academicos` (`id`, `created_at`, `updated_at`, `nombre`, `grado`, `idCA`, `clave`, `integrantes`, `slug`) VALUES
(3, '2020-03-26 22:30:33', '2020-04-04 10:27:38', 'Virtualización', 'Consolidado', '3456', '55-DF-HJKHJ-54', 'MTE. Noemi Guadalupe Castillo Sosa, ISC. Cintia Isabel Arceo Fuentes, MC. Arizbe Del Socorro Arana Kantun, ISC. Paloma Gongora Sabido', '1585261833n'),
(5, '2020-03-27 21:15:55', '2020-03-27 21:15:55', 'Virtualización 2', 'Consolidado', '345', 'ISC-ER-434-7788', 'Noemi Guadalupe Castillo Sosa, Pedro Salas', '1585340155Virtualización 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `textColor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `title`, `descripcion`, `color`, `textColor`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, 'Vailongo', 'HardBass dancing time', '#000000', '#FFFFFF', '2020-02-25 08:30:00', '2020-02-25 12:30:00', '2020-03-29 18:55:39', '2020-03-29 18:55:39'),
(2, 'Semana académica', 'Nuevos cursos', '#80ffff', '#FFFFFF', '2020-02-26 08:30:00', '2020-02-28 12:30:00', '2020-03-29 19:24:02', '2020-03-29 19:24:02'),
(3, 'Limpieza de ulas', 'Alumnos limpian aulas por CoVid-19', '#e9161c', '#FFFFFF', '2020-03-01 08:30:00', '2020-03-06 12:30:00', '2020-03-29 21:43:08', '2020-03-29 21:43:08'),
(4, 'Entrega  Iteración 2', 'entrega final de iteración 2', '#ff80ff', '#FFFFFF', '2020-03-31 08:30:00', '2020-04-02 12:30:00', '2020-03-31 23:58:12', '2020-03-31 23:58:12'),
(5, 'Inicio de Iteración 3', 'Iniciando con infraestructura', '#b939d9', '#FFFFFF', '2020-03-31 08:30:00', '2020-04-04 12:30:00', '2020-04-01 00:00:32', '2020-04-01 00:00:32');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `index`
--

CREATE TABLE `index` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noticia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion-carrera`
--

CREATE TABLE `informacion-carrera` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categoria` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `informacion-carrera`
--

INSERT INTO `informacion-carrera` (`id`, `created_at`, `updated_at`, `categoria`, `descripcion`, `slug`) VALUES
(1, NULL, '2020-03-27 05:00:36', 'Misión', 'Formar profesionistas competitivos con sentido humanístico e integral, capaces de aplicar de forma creativa e innovadora los conocimientos científicos y tecnológicos que les permita integrarse al desarrollo de su entorno de manera sustentable, promoviendo la igualdad de oportunidades y fortaleciendo su identidad cultural.', 'Mision'),
(2, NULL, '2020-03-27 05:04:29', 'Visión', 'Ser una institución de excelencia y de vanguardia, con prestigio regional, nacional e internacional, con liderazgo en la generación y aplicación del conocimiento científico-tecnológico, en un marco de valores y principios éticos, que permitan a sus egresados contribuir de manera significativa al desarrollo sustentable del Estado y del país.', 'Vision'),
(3, NULL, '2020-03-25 10:36:51', 'Objetivo de la carrera', 'Formar a los jóvenes del Municipio de Felipe Carrillo Puerto como profesionistas competitivos con sentido humanístico e integral, capaces de aplicar de forma creativa e innovadora los conocimientos científicos y tecnológicos que les permite integrarse al desarrollo de su entorno de manera sustentable.', 'ObjetivoCarrera'),
(4, '2020-03-26 06:00:00', '2020-03-26 06:00:00', 'Objetivo General', 'Formar profesionistas líderes con visión estratégica y amplio sentido ético; capaz de diseñar, desarrollar, implementar y administrar tecnología computacional para aportar soluciones innovadoras en beneficio de la sociedad; en un contexto global, multidisciplinario y sostenible.', 'ObjetivoGeneral');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infraestructuras`
--

CREATE TABLE `infraestructuras` (
  `id` int(10) UNSIGNED NOT NULL,
  `imgInicio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsable` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img6` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `infraestructuras`
--

INSERT INTO `infraestructuras` (`id`, `imgInicio`, `descripcion`, `responsable`, `correo`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `created_at`, `updated_at`, `slug`) VALUES
(1, '1585867421gHkiBKr.jpg', 'Laboratorio especializado en el desarrollo de aplicaciones móviles', 'Basilio Edilio Mateo Pedro', '161k0020@itscarrillopuerto.edu.mx', '1585973817W-200x200-300dpi.png', '1585973817Show-200x200.png', '1585973817W-200x200-300dpi.png', '1585973817Show-200x200.png', '1585973817W-200x200-300dpi.png', '1585973817Show-200x200.png', '2020-04-03 04:43:41', '2020-04-04 10:16:57', 'celula');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas_investigacions`
--

CREATE TABLE `lineas_investigacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `programa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linea` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clave` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `lineas_investigacions`
--

INSERT INTO `lineas_investigacions` (`id`, `programa`, `linea`, `clave`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'Ingeniería en Sistemas Computacionales', 'Redes, Gestión de Datos y Conectividad', 'LGAC-2017-SFCP-ISCO-10', '2020-03-25 05:00:00', '2020-03-27 01:51:14', '1585270274'),
(2, 'Ingeniería en Sistemas Computacionales', 'Tecnología Aplicada a la Educación', 'LGAC-2017-SFCP-ISCO-11', '2020-03-25 05:00:00', '2020-03-27 01:51:01', '1585270261'),
(3, 'Ingeniería en Sistemas Computacionales', 'Tecnologías de Desarrollo Web Y Móvil', 'LGAC-2017-SFCP-ISCO-12', '2020-03-25 05:00:00', '2020-03-27 01:50:50', '1585270250');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_03_07_100544_create_index_table', 1),
(5, '2020_03_07_100951_create_slider_table', 1),
(6, '2020_03_23_212410_create_perfil_ingresos_table', 1),
(7, '2020_03_23_212447_create_perfil_egresos_table', 1),
(8, '2020_03_24_140115_reticula', 1),
(9, '2020_03_23_203712_create_informacions_table', 2),
(10, '2020_03_24_215546_add_slug_to_infromacion-carrera', 2),
(12, '2020_03_26_000434_create_lineas_investigacions_table', 3),
(13, '2020_03_26_154020_create_campo_laborals_table', 4),
(14, '2020_03_26_043811_create_cuerpos_academicos_table', 5),
(15, '2020_03_26_062224_add_slug_field_to_cuerpos_academicos', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `newimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `redaccion` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `newimage`, `slug`, `created_at`, `updated_at`, `redaccion`) VALUES
(9, 'Las noticias fueron eliminadas', '1585865551N01.png', '1585865551', '2020-04-01 01:04:34', '2020-04-03 04:12:31', 'La eliminación anual es funcional, con redireccionamiento y mensaje de éxito, ps. se hán borrado todas las noticias XD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organigramas`
--

CREATE TABLE `organigramas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `area_id` bigint(20) UNSIGNED NOT NULL,
  `puesto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `integrante` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` enum('H','M') COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `organigramas`
--

INSERT INTO `organigramas` (`id`, `created_at`, `updated_at`, `area_id`, `puesto`, `integrante`, `genero`, `correo`, `foto`, `slug`) VALUES
(8, '2020-03-30 19:09:19', '2020-04-03 04:13:48', 6, 'Profesor', 'Paloma Gongora Sabido', 'M', 'p.gongora@gmail.com', '1585865628-Foto03.png', '1585595359Paloma Gongora Sabido'),
(9, '2020-03-30 19:24:47', '2020-04-03 04:14:02', 1, 'Director General', 'Diego Ramon Briseño Dominguez', 'H', 'd.dominguez@gmail.com', '1585865642-Foto02.png', '1585596287Diego Ramon Briseño Dominguez'),
(13, '2020-04-03 04:23:06', '2020-04-03 04:23:06', 2, 'Dirección Académica y de Vinculación', 'Cesar Pérez', 'H', 'c.perez@itscarrillopuerto.edu.mx', '1585866186DiaMommyTec.jpg', '1585866186Cesar Pérez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_egresos`
--

CREATE TABLE `perfil_egresos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vineta` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `elemento` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `perfil_egresos`
--

INSERT INTO `perfil_egresos` (`id`, `vineta`, `elemento`, `created_at`, `updated_at`, `slug`) VALUES
(3, '*', 'Implementa aplicaciones computacionales para solucionar problemas de diversos contextos, integrando diferentes tecnologías, plataformas o dispositivos.', '2020-03-24 22:16:54', '2020-03-26 19:33:12', '1585251192'),
(4, '*', 'Diseña, desarrolla y aplica modelos computacionales para solucionar problemas, mediante la selección y uso de herramientas matemáticas.', '2020-03-24 22:17:16', '2020-03-26 19:33:22', '1585251202'),
(5, '*', 'Diseña e implementa interfaces para la automatización de sistemas de hardware y desarrollo del software asociado.', '2020-03-24 22:17:38', '2020-03-26 19:33:28', '1585251208'),
(6, '*', 'Coordina y participa en equipos multidisciplinarios para la aplicación de soluciones innovadoras en diferentes contextos.', '2020-03-24 22:18:06', '2020-03-26 19:33:34', '1585251214'),
(7, '*', 'Diseña, implementa y administra bases de datos optimizando los recursos disponibles, conforme a las normas vigentes de manejo y seguridad de la información.', '2020-03-24 22:18:23', '2020-03-26 19:33:42', '1585251222'),
(8, '*', 'Desarrolla y administra software para apoyar la productividad y competitividad de las organizaciones cumpliendo con estándares de calidad.', '2020-03-24 22:18:44', '2020-03-26 19:33:55', '1585251235'),
(9, '*', 'Evalúa tecnologías de hardware para soportar aplicaciones de manera efectiva.', '2020-03-24 22:19:03', '2020-03-26 19:34:15', '1585251255'),
(10, '*', 'Detecta áreas de oportunidad empleando una visión empresarial para crear proyectos aplicando las Tecnologías de la Información y Comunicación.', '2020-03-24 22:19:38', '2020-03-26 19:34:23', '1585251263'),
(11, '*', 'Diseña, configura y administra redes de computadoras para crear soluciones de conectividad en la organización, aplicando las normas y estándares vigentes.', '2020-03-24 22:19:58', '2020-03-26 19:34:31', '1585251271');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_ingresos`
--

CREATE TABLE `perfil_ingresos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vineta` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `elemento` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `perfil_ingresos`
--

INSERT INTO `perfil_ingresos` (`id`, `vineta`, `elemento`, `created_at`, `updated_at`, `slug`) VALUES
(7, '*', 'Generara sistemas de información', '2020-03-24 23:37:42', '2020-03-31 23:13:04', '1585692784'),
(8, '*', 'Elemento Perfil 2', '2020-03-24 23:37:52', '2020-03-26 19:25:16', '1585250716'),
(9, '*', 'Elemento Perfil 3', '2020-03-24 23:38:04', '2020-03-26 19:25:26', '1585250726'),
(10, '*', 'Elemento Perfil 4', '2020-03-24 23:38:16', '2020-03-26 19:25:35', '1585250735'),
(11, '*', 'Elemento Perfil 5', '2020-03-24 23:38:28', '2020-03-26 19:25:44', '1585250744'),
(14, '*', 'Elemento Perfil 6', '2020-03-26 08:43:19', '2020-03-26 19:25:52', '1585250752');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reticulas`
--

CREATE TABLE `reticulas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `programa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `especialidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reticulas`
--

INSERT INTO `reticulas` (`id`, `titulo`, `programa`, `plan`, `especialidad`, `documento`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'Retícula Generación 2016-2020 - Actual', 'Ingeniería En Sistemas Computacionales', 'ISIC-2010-224', 'Tecnologías de la información ISIE-TIN-2016-01', '1585692936-Reticula Ingenieria en Sistemas Computacionales.pdf', '2020-03-24 10:00:00', '2020-03-31 23:15:36', '1585692936'),
(2, 'Retícula Generación 2014-2018 - Anterior', 'Ingeniería En Sistemas Computacionales', 'ISIC-2008-223', 'Inteligencia De Negocios-ISIE-TIN', '1585263867-Reticula Ingenieria en Sistemas Computacionales.pdf', '2020-03-24 10:00:00', '2020-03-31 19:59:29', '1585681169');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contenido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `contenido`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'ITSFCP Cambia su nombre a TecNM Campus Felipe Carrillo Puerto', '1585865430Slider01.png', '1585865430', '2020-03-28 02:40:59', '2020-04-03 04:10:30'),
(3, 'El director general adquiere nuevo equipo de cómputo', '1585865442Slider02.png', '1585865442', '2020-03-28 04:45:12', '2020-04-03 04:10:42'),
(4, 'Alumnos desarrollan página web para la acreditacion CACEI', '1585865453Slider03.png', '1585865453', '2020-03-28 04:49:53', '2020-04-03 04:10:53'),
(5, 'Proyecto OceanMind estará presente en kazajistán', '158586548304.png', '1585865483', '2020-03-28 04:51:10', '2020-04-03 04:11:23');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `perfil_img` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `perfil_img`) VALUES
(2, 'Armando Mora', 'ar-mora1@hotmail.com', NULL, '$2y$10$O3sScJ3c6uLwmZ7YzeSWm.HiOKHki0qQnXJmvNXsLW.93s3K4KVvq', 'CrLnmBZxTvS1Tr5sCo3VeAqakODpxlJ1xPlybUxxv6kLK8kupNtYmNdDsHyv', '2020-04-01 15:42:04', '2020-04-04 10:45:32', '1585975532Show-200x200.png'),
(15, 'WesterlyJoker', '161k0004@itscarrillopuerto.edu.mx', NULL, '$2y$10$1H4nLb/AUncWnonQ8sXd3e879E8QPaLgEHpb947cAXtVz/wDRJoIm', NULL, '2020-04-04 10:30:36', '2020-04-04 10:30:36', '1585974636IMG-20200403-WA0073.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `campo_laborals`
--
ALTER TABLE `campo_laborals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `campo_laborals_slug_unique` (`slug`);

--
-- Indices de la tabla `cuerpos_academicos`
--
ALTER TABLE `cuerpos_academicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `index`
--
ALTER TABLE `index`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `informacion-carrera`
--
ALTER TABLE `informacion-carrera`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `informacion_carrera_slug_unique` (`slug`);

--
-- Indices de la tabla `infraestructuras`
--
ALTER TABLE `infraestructuras`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `infraestructuras_slug_unique` (`slug`);

--
-- Indices de la tabla `lineas_investigacions`
--
ALTER TABLE `lineas_investigacions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lineas_investigacions_slug_unique` (`slug`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `noticias_titulo_unique` (`titulo`),
  ADD UNIQUE KEY `noticias_slug_unique` (`slug`);

--
-- Indices de la tabla `organigramas`
--
ALTER TABLE `organigramas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `organigramas_slug_unique` (`slug`),
  ADD KEY `organigramas_area_id_foreign` (`area_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `perfil_egresos`
--
ALTER TABLE `perfil_egresos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `perfil_egresos_slug_unique` (`slug`);

--
-- Indices de la tabla `perfil_ingresos`
--
ALTER TABLE `perfil_ingresos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `perfil_ingresos_slug_unique` (`slug`);

--
-- Indices de la tabla `reticulas`
--
ALTER TABLE `reticulas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reticulas_slug_unique` (`slug`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `campo_laborals`
--
ALTER TABLE `campo_laborals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `cuerpos_academicos`
--
ALTER TABLE `cuerpos_academicos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `index`
--
ALTER TABLE `index`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `informacion-carrera`
--
ALTER TABLE `informacion-carrera`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `infraestructuras`
--
ALTER TABLE `infraestructuras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `lineas_investigacions`
--
ALTER TABLE `lineas_investigacions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `organigramas`
--
ALTER TABLE `organigramas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `perfil_egresos`
--
ALTER TABLE `perfil_egresos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `perfil_ingresos`
--
ALTER TABLE `perfil_ingresos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `reticulas`
--
ALTER TABLE `reticulas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `organigramas`
--
ALTER TABLE `organigramas`
  ADD CONSTRAINT `organigramas_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

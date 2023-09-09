-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2023 a las 23:08:25
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `casas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesores`
--

CREATE TABLE `asesores` (
  `idasesor` int(11) NOT NULL,
  `userasesor` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asesores`
--

INSERT INTO `asesores` (`idasesor`, `userasesor`, `status`, `created_at`) VALUES
(1, '1', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casas`
--

CREATE TABLE `casas` (
  `id` int(5) NOT NULL,
  `tituloCasa` text NOT NULL,
  `tagCasa` text NOT NULL,
  `introCasa` text NOT NULL,
  `botonCasaCel` text NOT NULL,
  `tituloDescCasa` text NOT NULL,
  `descCasa` text NOT NULL,
  `descJardin` text NOT NULL,
  `footerCasa` text NOT NULL,
  `infoCasa` text NOT NULL,
  `categoriaCasa` text NOT NULL,
  `adminCasa` text NOT NULL,
  `fotosfechaCasa` text NOT NULL,
  `ligafotosCasa` text NOT NULL,
  `personas` text NOT NULL,
  `mascotas` text NOT NULL,
  `cuartos` text NOT NULL,
  `camas` text NOT NULL,
  `sofacama` text NOT NULL,
  `baños` text NOT NULL,
  `cocina` text NOT NULL,
  `microondas` text NOT NULL,
  `cafetera` text NOT NULL,
  `estufa` text NOT NULL,
  `gas` text NOT NULL,
  `refrigerador` text NOT NULL,
  `sala` text NOT NULL,
  `comedor` text NOT NULL,
  `tv` text NOT NULL,
  `internet` text NOT NULL,
  `campañia` text NOT NULL,
  `cable` text NOT NULL,
  `casasola` text NOT NULL,
  `horaentrada` text NOT NULL,
  `horasalida` text NOT NULL,
  `jacuzzi` text NOT NULL,
  `alberca` text NOT NULL,
  `asador` text NOT NULL,
  `palapa` text NOT NULL,
  `camastros` text NOT NULL,
  `estacionamiento` text NOT NULL,
  `toallas` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `casas`
--

INSERT INTO `casas` (`id`, `tituloCasa`, `tagCasa`, `introCasa`, `botonCasaCel`, `tituloDescCasa`, `descCasa`, `descJardin`, `footerCasa`, `infoCasa`, `categoriaCasa`, `adminCasa`, `fotosfechaCasa`, `ligafotosCasa`, `personas`, `mascotas`, `cuartos`, `camas`, `sofacama`, `baños`, `cocina`, `microondas`, `cafetera`, `estufa`, `gas`, `refrigerador`, `sala`, `comedor`, `tv`, `internet`, `campañia`, `cable`, `casasola`, `horaentrada`, `horasalida`, `jacuzzi`, `alberca`, `asador`, `palapa`, `camastros`, `estacionamiento`, `toallas`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Casa Naranja', 'casa_naranja', '<p style=\"text-align:center\">Disfruta de la una quinta casa privada en Chinconcuac, Xochitepec.<br />\r\nEl costo es para 7 personas y la capacidad m&aacute;xima es de 10.<br />\r\nDeseas reservar, lo puedes hacer con $1000 y el resto al estar instalado dentro de la casa.</p>', 'Me interesa, deseo mas información de la <i>Casa Naranja</i> y fechas disponibles.', '<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><em>Ubicada en Chinconcuac Xochitepec, casa privada con c&aacute;maras de seguridad, cerca elecrificada para su seguridad. &nbsp;Cuenta con alberca, Jacuzzi, camastros, regadera, ba&ntilde;o en area verde,palapa con ventilador, mesa en palapa, iluminaci&oacute;n en palapa, area de asador con tarja. &nbsp;</em></p>\r\n', '<p>&nbsp;</p>\n\n<p style=\"text-align:justify\"><u><em><strong>Casa para 7 personas (M&aacute;ximo 10 personas)</strong></em></u></p>\n\n<ul>\n	<li style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Capacidad para 4 autos</li>\n	<li style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Se aceptan mascotas sin costo</li>\n	<li style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; La casa no tiene capacidad para eventos&lt;br&gt;</li>\n	<li style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hora de entrada desde 9 am&nbsp; y salida 2 pm (**Se puede ampliar hora salida)</li>\n	<li style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cocina cuenta (Cafetera,Estufa,Refrigerador,Sartens,Platos,Vasos)</li>\n	<li style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Incluye un Garrafon nuevo</li>\n	<li style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Incluye Un rollo nuevo por cada Ba&ntilde;o</li>\n	<li style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Incluye Bolsas de Basura</li>\n	<li style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No cuenta con Horno de Microondas</li>\n	<li style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No incluye Toallas de Ba&ntilde;o</li>\n	<li style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cuenta con un cuarto Privado, con Ba&ntilde;o.</li>\n	<li style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; En la parte superior hay dos camas matrimoniales con sofa cama, con ba&ntilde;o completo.</li>\n</ul>\n', '<p>Cuenta con:</p>\r\n\r\n<ul>\r\n	<li>Alberca</li>\r\n	<li>Jacuzzi</li>\r\n	<li>Camastros</li>\r\n	<li>Regadera</li>\r\n	<li>Ba&ntilde;o en area verde</li>\r\n	<li>Palapa con ventilador</li>\r\n	<li>Mesa en palapa</li>\r\n	<li>Iluminaci&oacute;n en palapa</li>\r\n	<li>Area de asador con tarja.</li>\r\n</ul>\r\n', '<p style=\"text-align:center\"><em>La casa se encuentra constantemente en mantenimiento para darte el mejor servicio.</em></p>\r\n\r\n<p style=\"text-align:center\"><em>La casa se encuentra en el Chinconcuac, Xochitepec.</em></p>\r\n', 'kj 9877 h j', '****', 'Marco A.', 'Agosto 2023', 'jh s', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-23 23:24:36', '2023-08-23 23:24:36', '2023-08-23 23:24:36'),
(2, 'Casa Verde', 'casa_verde', 'oiuoui', 'oiuui', 'iuooiu', 'ouiiou', 'uioui', 'uiooiu', 'ouiuoi', 'iouiu', 'iouuoioiu', 'iouui', 'ouioui', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-26 21:18:54', '2023-08-26 21:18:54', '2023-08-26 21:18:54'),
(3, 'casa_miramar', 'casa_miramar', '466565', 'jlkljkjlk', 'jklljklkj', 'jlkjlkkj jkl j', ' lkjjkl iuiou', 'nm,n8789nn', '87897987 hghjg', 'jkhjhjh ghjgj', 'jkhkh8978', ',mnjkjk554', '45hhuhu', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-26 23:57:54', '2023-08-26 23:57:54', '2023-08-26 23:57:54'),
(4, 'casa_xochi', 'casa_xochi', 'casa_xochi', 'casa_xochi', 'casa_xochi', 'casa_xochi', 'casa_xochi', 'casa_xochi', 'casa_xochi', 'casa_xochi', 'casa_xochi', 'casa_xochi', 'casa_xochi', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023-08-27 00:12:14', '2023-08-27 00:12:14', '2023-08-27 00:12:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casausuario`
--

CREATE TABLE `casausuario` (
  `id` int(11) NOT NULL,
  `idAsesor` int(11) NOT NULL,
  `idCasa` varchar(200) NOT NULL,
  `status` varchar(1) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `casausuario`
--

INSERT INTO `casausuario` (`id`, `idAsesor`, `idCasa`, `status`, `created_at`) VALUES
(1, 1, '1', '0', '2023-09-05 14:23:24'),
(2, 1, '2', '0', '2023-09-06 13:54:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(5) UNSIGNED NOT NULL,
  `user` varchar(20) NOT NULL,
  `nombreCliente` varchar(200) NOT NULL,
  `nombreCasa` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `celular` int(9) NOT NULL,
  `status` varchar(1) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `user`, `nombreCliente`, `nombreCasa`, `email`, `celular`, `status`, `created_at`) VALUES
(1, 'marco', 'Marco An valerio', 'ggfd', 'gfdfdg', 46546, '0', '2023-09-07 14:40:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asesores`
--
ALTER TABLE `asesores`
  ADD PRIMARY KEY (`idasesor`);

--
-- Indices de la tabla `casausuario`
--
ALTER TABLE `casausuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `casausuario`
--
ALTER TABLE `casausuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

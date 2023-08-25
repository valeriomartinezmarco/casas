-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2023 a las 18:16:35
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
-- Base de datos: `prueba`
--

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
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `casas`
--

INSERT INTO `casas` (`id`, `tituloCasa`, `tagCasa`, `introCasa`, `botonCasaCel`, `tituloDescCasa`, `descCasa`, `descJardin`, `footerCasa`, `infoCasa`, `categoriaCasa`, `adminCasa`, `fotosfechaCasa`, `ligafotosCasa`, `created_at`, `updated_at`, `deleted_at`) VALUES
(0, 'Casa Naranja', 'casa_naranja', '<p style=\"text-align:center\">Disfruta de la una quinta casa privada en Chinconcuac, Xochitepec.<br />\r\nEl costo es para 7 personas y la capacidad m&aacute;xima es de 10.<br />\r\nDeseas reservar, lo puedes hacer con $1000 y el resto al estar instalado dentro de la casa.</p>', 'Me interesa, deseo mas información de la <i>Casa Naranja</i> y fechas disponibles.', '<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><em>Ubicada en Chinconcuac Xochitepec, casa privada con c&aacute;maras de seguridad, cerca elecrificada para su seguridad. &nbsp;Cuenta con alberca, Jacuzzi, camastros, regadera, ba&ntilde;o en area verde,palapa con ventilador, mesa en palapa, iluminaci&oacute;n en palapa, area de asador con tarja. &nbsp;</em></p>\r\n', '<p>&nbsp;</p>\n\n<p style=\"text-align:justify\"><u><em><strong>Casa para 7 personas (M&aacute;ximo 10 personas)</strong></em></u></p>\n\n<ul>\n	<li style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Capacidad para 4 autos</li>\n	<li style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Se aceptan mascotas sin costo</li>\n	<li style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; La casa no tiene capacidad para eventos&lt;br&gt;</li>\n	<li style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hora de entrada desde 9 am&nbsp; y salida 2 pm (**Se puede ampliar hora salida)</li>\n	<li style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cocina cuenta (Cafetera,Estufa,Refrigerador,Sartens,Platos,Vasos)</li>\n	<li style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Incluye un Garrafon nuevo</li>\n	<li style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Incluye Un rollo nuevo por cada Ba&ntilde;o</li>\n	<li style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Incluye Bolsas de Basura</li>\n	<li style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No cuenta con Horno de Microondas</li>\n	<li style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No incluye Toallas de Ba&ntilde;o</li>\n	<li style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cuenta con un cuarto Privado, con Ba&ntilde;o.</li>\n	<li style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; En la parte superior hay dos camas matrimoniales con sofa cama, con ba&ntilde;o completo.</li>\n</ul>\n', '<p style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\">El &aacute;rea verde cuenta con lo siguiente:</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\">2 Camastros</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Palapa (Tiene Ventilador y bote basura)</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Asador</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\">2 mesas</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Regadera</span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Ba&ntilde;o </span></li>\r\n	<li style=\"text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Estacionamiento para 4 autos</span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', 'Casas de Fin de semana', 'Casa Naranja Chinconcuac', '4 ****', 'Marco Antonio', '23 Agosto 2023', 'jh s', '2023-08-23 23:24:36', '2023-08-23 23:24:36', '2023-08-23 23:24:36');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `casas`
--
ALTER TABLE `casas`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

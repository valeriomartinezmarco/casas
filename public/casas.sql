-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-08-2023 a las 07:50:19
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

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

INSERT INTO `casas` (`id`, `tituloCasa`, `introCasa`, `botonCasaCel`, `tituloDescCasa`, `descCasa`, `descJardin`, `footerCasa`, `infoCasa`, `categoriaCasa`, `adminCasa`, `fotosfechaCasa`, `ligafotosCasa`, `created_at`, `updated_at`, `deleted_at`) VALUES
(0, 'Casa Naranja', '<p style=\"text-align:center\">Disfruta de la una quinta casa privada en Chinconcuac, Xochitepec.<br />\r\nEl costo es para 7 personas y la capacidad m&aacute;xima es de 10.<br />\r\nDeseas reservar, lo puedes hacer con $1000 y el resto al estar instalado dentro de la casa.</p>', 'Me interesa, deseo mas información de la <i>Casa Naranja</i> y fechas disponibles.', 'bbbb', '88hkjh', '9jjkbjk bjkbjk', 'jkhkj jk', 'kj 9877 h j', '8897 hhh', 'hhj877 ', '87hjh jh jh', 'jh s', '2023-08-23 23:24:36', '2023-08-23 23:24:36', '2023-08-23 23:24:36');

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

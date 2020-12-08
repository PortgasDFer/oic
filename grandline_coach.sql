-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 24-11-2020 a las 04:02:58
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `grandline`
--
CREATE DATABASE IF NOT EXISTS `grandline` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `grandline`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) NOT NULL,
  `descripcion` varchar(191) NOT NULL,
  `baja` int(11) NOT NULL,
  `header` varchar(191) DEFAULT NULL,
  `slu` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `baja`, `header`, `slu`, `created_at`, `updated_at`) VALUES
(9, 'Categoria prueba 1', 'Probando', 0, NULL, 'categoria-prueba-1', '2020-09-17 19:36:33', '2020-09-17 19:36:33'),
(10, 'Categoria prueba 2', 'Otra', 0, NULL, 'categoria-prueba-2', '2020-09-17 19:36:48', '2020-09-17 19:36:48'),
(11, 'Categoria 3', 'Una más', 0, NULL, 'categoria-3', '2020-09-17 19:37:01', '2020-09-17 19:37:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chatter_categories`
--

DROP TABLE IF EXISTS `chatter_categories`;
CREATE TABLE IF NOT EXISTS `chatter_categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `chatter_categories`
--

INSERT INTO `chatter_categories` (`id`, `parent_id`, `order`, `name`, `color`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 5, 'Presentación', '#3498db', 'presentacion', NULL, '2020-09-11 21:06:15'),
(2, NULL, 2, 'General', '#2ECC71', 'general', NULL, NULL),
(3, NULL, 3, 'Feedback', '#9B59B6', 'feedback', NULL, NULL),
(4, NULL, 4, 'Random', '#E67E22', 'random', NULL, NULL),
(5, 1, 5, 'Reglas', '#227ab5', 'reglas', NULL, '2020-09-11 21:06:41'),
(6, 5, 1, 'Basics', '#195a86', 'basics', NULL, NULL),
(7, 5, 2, 'Contribution', '#195a86', 'contribution', NULL, NULL),
(8, 1, 2, 'About', '#227ab5', 'about', NULL, NULL),
(9, NULL, 5, 'Tema', '#532fba', 'tema', '2020-09-11 20:25:52', '2020-09-11 21:07:21'),
(10, NULL, 5, 'Etiqueta prueba', '#db387c', 'etiqueta-prueba', '2020-09-14 19:27:44', '2020-09-14 19:27:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chatter_discussion`
--

DROP TABLE IF EXISTS `chatter_discussion`;
CREATE TABLE IF NOT EXISTS `chatter_discussion` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `chatter_category_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `sticky` tinyint(1) NOT NULL DEFAULT '0',
  `views` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `answered` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT '#232629',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `last_reply_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `chatter_discussion_slug_unique` (`slug`),
  KEY `chatter_discussion_chatter_category_id_foreign` (`chatter_category_id`),
  KEY `chatter_discussion_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `chatter_discussion`
--

INSERT INTO `chatter_discussion` (`id`, `chatter_category_id`, `title`, `user_id`, `sticky`, `views`, `answered`, `created_at`, `updated_at`, `slug`, `color`, `deleted_at`, `last_reply_at`) VALUES
(3, 1, 'Hello Everyone, This is my Introduction', 1, 0, 5, 0, '2016-08-18 19:27:56', '2020-09-19 03:13:50', 'hello-everyone-this-is-my-introduction', '#239900', NULL, '2020-09-11 02:12:38'),
(6, 2, 'Login Information for Chatter', 1, 0, 4, 0, '2016-08-18 19:39:36', '2020-09-09 16:29:56', 'login-information-for-chatter', '#1a1067', NULL, '2020-09-09 00:52:32'),
(7, 3, 'Leaving Feedback', 1, 0, 0, 0, '2016-08-18 19:42:29', '2016-08-18 19:42:29', 'leaving-feedback', '#8e1869', NULL, '2020-09-09 00:52:32'),
(8, 4, 'Just a random post', 1, 0, 2, 0, '2016-08-18 19:46:38', '2020-09-09 16:30:26', 'just-a-random-post', '', NULL, '2020-09-09 00:52:32'),
(9, 2, 'Welcome to the Chatter Laravel Forum Package', 1, 0, 1, 0, '2016-08-18 19:59:37', '2020-09-09 02:35:23', 'welcome-to-the-chatter-laravel-forum-package', '', NULL, '2020-09-09 00:52:32'),
(12, 9, 'Probando las categorias', 3, 0, 6, 0, '2020-09-11 21:09:13', '2020-09-21 14:37:07', 'probando-las-categorias', NULL, NULL, '2020-09-11 21:09:13'),
(13, 4, 'Probando las categorias', 3, 0, 6, 0, '2020-09-21 14:38:07', '2020-09-22 01:50:45', 'probando-las-categorias-1', NULL, NULL, '2020-09-21 14:42:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chatter_post`
--

DROP TABLE IF EXISTS `chatter_post`;
CREATE TABLE IF NOT EXISTS `chatter_post` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `chatter_discussion_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `markdown` tinyint(1) NOT NULL DEFAULT '0',
  `locked` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `chatter_post_chatter_discussion_id_foreign` (`chatter_discussion_id`),
  KEY `chatter_post_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `chatter_post`
--

INSERT INTO `chatter_post` (`id`, `chatter_discussion_id`, `user_id`, `body`, `created_at`, `updated_at`, `markdown`, `locked`, `deleted_at`) VALUES
(1, 3, 1, '<p>My name is Tony and I\'m a developer at <a href=\"https://devdojo.com\" target=\"_blank\">https://devdojo.com</a> and I also work with an awesome company in PB called The Control Group: <a href=\"http://www.thecontrolgroup.com\" target=\"_blank\">http://www.thecontrolgroup.com</a></p>\n        <p>You can check me out on twitter at <a href=\"http://www.twitter.com/tnylea\" target=\"_blank\">http://www.twitter.com/tnylea</a></p>\n        <p>or you can subscribe to me on YouTube at <a href=\"http://www.youtube.com/devdojo\" target=\"_blank\">http://www.youtube.com/devdojo</a></p>', '2016-08-18 19:27:56', '2016-08-18 19:27:56', 0, 0, NULL),
(5, 6, 1, '<p>Hey!</p>\n        <p>Thanks again for checking out chatter. If you want to login with the default user you can login with the following credentials:</p>\n        <p><strong>email address</strong>: tony@hello.com</p>\n        <p><strong>password</strong>: password</p>\n        <p>You\'ll probably want to delete this user, but if for some reason you want to keep it... Go ahead :)</p>', '2016-08-18 19:39:36', '2016-08-18 19:39:36', 0, 0, NULL),
(6, 7, 1, '<p>If you would like to leave some feedback or have any issues be sure to visit the github page here: <a href=\"https://github.com/thedevdojo/chatter\" target=\"_blank\">https://github.com/thedevdojo/chatter</a>&nbsp;and I\'m sure I can help out.</p>\n        <p>Let\'s make this package the go to Laravel Forum package. Feel free to contribute and share your ideas :)</p>', '2016-08-18 19:42:29', '2016-08-18 19:42:29', 0, 0, NULL),
(7, 8, 1, '<p>This is just a random post to show you some of the formatting that you can do in the WYSIWYG editor. You can make your text <strong>bold</strong>, <em>italic</em>, or <span style=\"text-decoration: underline;\">underlined</span>.</p>\n        <p style=\"text-align: center;\">Additionally, you can center align text.</p>\n        <p style=\"text-align: right;\">You can align the text to the right!</p>\n        <p>Or by default it will be aligned to the left.</p>\n        <ul>\n        <li>We can also</li>\n        <li>add a bulleted</li>\n        <li>list</li>\n        </ul>\n        <ol>\n        <li><span style=\"line-height: 1.6;\">or we can</span></li>\n        <li><span style=\"line-height: 1.6;\">add a numbered list</span></li>\n        </ol>\n        <p style=\"padding-left: 30px;\"><span style=\"line-height: 1.6;\">We can choose to indent our text</span></p>\n        <p><span style=\"line-height: 1.6;\">Post links: <a href=\"https://devdojo.com\" target=\"_blank\">https://devdojo.com</a></span></p>\n        <p><span style=\"line-height: 1.6;\">and add images:</span></p>\n        <p><span style=\"line-height: 1.6;\"><img src=\"https://media.giphy.com/media/o0vwzuFwCGAFO/giphy.gif\" alt=\"\" width=\"300\" height=\"300\" /></span></p>', '2016-08-18 19:46:38', '2016-08-18 19:46:38', 0, 0, NULL),
(8, 8, 1, '<p>Haha :) Cats!</p>\n        <p><img src=\"https://media.giphy.com/media/5Vy3WpDbXXMze/giphy.gif\" alt=\"\" width=\"250\" height=\"141\" /></p>\n        <p><img src=\"https://media.giphy.com/media/XNdoIMwndQfqE/200.gif\" alt=\"\" width=\"200\" height=\"200\" /></p>', '2016-08-18 19:55:42', '2016-08-18 20:45:13', 0, 0, NULL),
(9, 9, 1, '<p>Hey There!</p>\n        <p>My name is Tony and I\'m the creator of this package that you\'ve just installed. Thanks for checking out it out and if you have any questions or want to contribute be sure to checkout the repo here: <a href=\"https://github.com/thedevdojo/chatter\" target=\"_blank\">https://github.com/thedevdojo/chatter</a></p>\n        <p>Happy programming!</p>', '2016-08-18 19:59:37', '2016-08-18 19:59:37', 0, 0, NULL),
(10, 9, 1, '<p>Hell yeah Bro Sauce!</p>\n        <p><img src=\"https://media.giphy.com/media/j5QcmXoFWl4Q0/giphy.gif\" alt=\"\" width=\"366\" height=\"229\" /></p>', '2016-08-18 20:01:25', '2016-08-18 20:01:25', 0, 0, NULL),
(13, 3, 3, '<p>Si puedo responder y editar respuestaas</p>', '2020-09-11 02:12:38', '2020-09-11 02:12:54', 0, 0, NULL),
(14, 12, 3, '<p>Parece que si sirvio</p>\r\n<p><em>Y también edita.</em></p>', '2020-09-11 21:09:13', '2020-09-11 21:09:41', 0, 0, NULL),
(15, 13, 3, '<p>1234567891011</p>', '2020-09-21 14:38:07', '2020-09-21 16:03:00', 0, 0, NULL),
(16, 13, 3, '<p>&nbsp;646545642132</p>', '2020-09-21 14:42:24', '2020-09-21 14:42:31', 0, 0, '2020-09-21 14:42:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chatter_user_discussion`
--

DROP TABLE IF EXISTS `chatter_user_discussion`;
CREATE TABLE IF NOT EXISTS `chatter_user_discussion` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `discussion_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`user_id`,`discussion_id`),
  KEY `chatter_user_discussion_user_id_index` (`user_id`),
  KEY `chatter_user_discussion_discussion_id_index` (`discussion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `chatter_user_discussion`
--

INSERT INTO `chatter_user_discussion` (`user_id`, `discussion_id`) VALUES
(3, 10),
(3, 11),
(3, 12),
(3, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

DROP TABLE IF EXISTS `contactos`;
CREATE TABLE IF NOT EXISTS `contactos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) CHARACTER SET latin1 NOT NULL,
  `email` varchar(191) CHARACTER SET latin1 NOT NULL,
  `curso` varchar(191) CHARACTER SET latin1 NOT NULL,
  `dudas` varchar(191) CHARACTER SET latin1 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `nombre`, `email`, `curso`, `dudas`, `created_at`, `updated_at`) VALUES
(1, 'Daniel Isai Vela Hernandez', 'daniel29isai@gmail.com', 'Curso Energy Body in training', 'Consectetur adipiscing elit incididunt ut labore et dolore magna aliqua. Risus commodo viverra maecenas.', '2020-09-22 02:24:54', '2020-09-22 02:24:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

DROP TABLE IF EXISTS `eventos`;
CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) CHARACTER SET latin1 NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` text CHARACTER SET latin1 NOT NULL,
  `imagen` varchar(191) CHARACTER SET latin1 NOT NULL,
  `slug` varchar(191) CHARACTER SET latin1 NOT NULL,
  `baja` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `titulo`, `fecha`, `descripcion`, `imagen`, `slug`, `baja`, `created_at`, `updated_at`) VALUES
(1, 'Prueba webp', '2020-09-18', '<p>Ingresa descripci&oacute;n del evento. o pon algo mas</p>', '1600465062legia_varsovia_guess-whos_back-1440x808.jpg.webp', 'prueba-webp', 0, '2020-09-18 21:11:07', '2020-09-19 00:35:56'),
(2, 'evento num2 tiene que ser un titulo largo', '2020-09-19', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '1600477001about-pic.jpg.webp', 'evento-num2-tiene-que-ser-un-titulo-largo', 0, '2020-09-18 21:55:45', '2020-09-19 01:21:40'),
(3, 'evento 3 Lorem ipsum dolor sit amet', '2020-09-25', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>', '1600478431png.webp', 'evento-3-lorem-ipsum-dolor-sit-amet', 0, '2020-09-19 01:20:33', '2020-09-19 01:21:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_05_102159_create_roles_table', 1),
(4, '2019_12_05_102236_create_role_user_table', 1),
(5, '2014_01_07_073615_create_tagged_table', 2),
(6, '2014_01_07_073615_create_tags_table', 2),
(7, '2016_06_29_073615_create_tag_groups_table', 2),
(8, '2016_06_29_073615_update_tags_table', 2),
(9, '2020_09_03_162226_create_eventos_table', 3),
(10, '2016_07_29_171118_create_chatter_categories_table', 4),
(11, '2016_07_29_171118_create_chatter_discussion_table', 4),
(12, '2016_07_29_171118_create_chatter_post_table', 4),
(13, '2016_07_29_171128_create_foreign_keys', 4),
(14, '2016_08_02_183143_add_slug_field_for_discussions', 4),
(15, '2016_08_03_121747_add_color_row_to_chatter_discussions', 4),
(16, '2017_01_16_121747_add_markdown_and_lock_to_chatter_posts', 4),
(17, '2017_01_16_121747_create_chatter_user_discussion_pivot_table', 4),
(18, '2017_08_07_165345_add_chatter_soft_deletes', 4),
(19, '2017_10_10_221227_add_chatter_last_reply_at_discussion', 4),
(20, '2020_09_21_205246_create_contactos_table', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

DROP TABLE IF EXISTS `publicaciones`;
CREATE TABLE IF NOT EXISTS `publicaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(191) NOT NULL,
  `subtitulo` varchar(191) NOT NULL,
  `fecha` date NOT NULL,
  `cabecera` varchar(191) NOT NULL,
  `contenido` text NOT NULL,
  `slug` varchar(191) NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `baja` int(11) NOT NULL,
  `visitas` bigint(20) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usersposts_fk` (`id_user`),
  KEY `id_categoria_fk` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `titulo`, `subtitulo`, `fecha`, `cabecera`, `contenido`, `slug`, `id_user`, `baja`, `visitas`, `id_categoria`, `updated_at`, `created_at`) VALUES
(6, 'Probando con categorias', 'Hola esta es una prueba más', '2020-09-17', '1600371721wallhaven-nrlyyj.jpg', '<div data-oembed-url=\"https://www.youtube.com/watch?v=97dkzVU4p-M&amp;ab_channel=CrunchyrollCollection\">\r\n<div style=\"left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.25%;\"><iframe allow=\"encrypted-media; accelerometer; gyroscope; picture-in-picture\" allowfullscreen=\"\" scrolling=\"no\" src=\"https://www.youtube.com/embed/97dkzVU4p-M?rel=0\" style=\"border: 0; top: 0; left: 0; width: 100%; height: 100%; position: absolute;\" tabindex=\"-1\"></iframe></div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1>Esto es un encabezado.</h1>\r\n\r\n<h2 style=\"font-style:italic\">Esto es un subtitulo.</h2>\r\n\r\n<h3>The standard Lorem Ipsum passage, used since the 1500s</h3>\r\n\r\n<p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>\r\n\r\n<h3>Section 1.10.32 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC</h3>\r\n\r\n<p>&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;</p>\r\n\r\n<h3>1914 translation by H. Rackham</h3>\r\n\r\n<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;</p>', 'probando-con-categorias', 3, 0, 1, 9, '2020-09-19 01:19:02', '2020-09-17 19:42:01'),
(7, 'Probando etiquetas', 'Hola esta es una prueba más', '2020-09-21', 'probando-etiquetasjpg.webp', '<div class=\"image-align-center\">\r\n<figure class=\"image\"><img alt=\"Charizard dragón\" height=\"338\" src=\"https://images.wikidexcdn.net/mwuploads/wikidex/thumb/4/41/latest/20190811112248/EP803_Charizard_de_Ash.png/1200px-EP803_Charizard_de_Ash.png\" width=\"600\" />\r\n<figcaption>Charizard no es drag&oacute;n</figcaption>\r\n</figure>\r\n</div>\r\n\r\n<h1>Por qu&eacute; la gente piensa que charizard es un drag&oacute;n?</h1>\r\n\r\n<h3>The standard Lorem Ipsum passage, used since the 1500s</h3>\r\n\r\n<p>&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>\r\n\r\n<h3>Section 1.10.32 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC</h3>\r\n\r\n<p>&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;</p>\r\n\r\n<h3>1914 translation by H. Rackham</h3>\r\n\r\n<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;</p>', 'probando-etiquetas', 3, 0, 0, 10, '2020-09-21 18:48:58', '2020-09-17 20:39:16'),
(8, 'Prueba webp', 'Prueba webp en las publicaciones', '2020-09-21', '1600713654png.webp', '<h1>Prueba WEBP</h1>', 'prueba-webp', 3, 0, 0, 9, '2020-09-21 18:40:59', '2020-09-21 18:40:59'),
(9, 'Esta será una imagen webp', 'Probando aun', '2020-09-21', 'esta-sera-una-imagen-webpjpg.webp', '<p>&iquest;Qu&eacute; est&aacute; pasando el mundo deportivo?</p>', 'esta-sera-una-imagen-webp', 3, 0, 0, 9, '2020-09-21 18:46:49', '2020-09-21 18:46:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-12-05 16:39:23', '2019-12-05 16:39:23'),
(2, 'mod', 'Moderator', '2019-12-05 16:39:23', '2019-12-05 16:39:23'),
(3, 'user', 'User', '2019-12-05 16:39:23', '2019-12-05 16:39:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user_fk` (`user_id`),
  KEY `id_role_fk` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '2019-12-05 16:39:23', '2019-12-05 16:39:23'),
(2, 2, 2, '2019-12-05 16:39:24', '2019-12-05 16:39:24'),
(3, 1, 3, '2019-12-05 16:39:24', '2019-12-05 16:39:24'),
(4, 3, 4, '2020-09-14 18:57:28', '2020-09-14 18:57:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tagging_tagged`
--

DROP TABLE IF EXISTS `tagging_tagged`;
CREATE TABLE IF NOT EXISTS `tagging_tagged` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `taggable_id` int(10) UNSIGNED NOT NULL,
  `taggable_type` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_slug` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tagging_tagged_taggable_id_index` (`taggable_id`),
  KEY `tagging_tagged_taggable_type_index` (`taggable_type`),
  KEY `tagging_tagged_tag_slug_index` (`tag_slug`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tagging_tagged`
--

INSERT INTO `tagging_tagged` (`id`, `taggable_id`, `taggable_type`, `tag_name`, `tag_slug`) VALUES
(27, 4, 'LaGranLinea\\Publicacion', 'Probando', 'probando'),
(28, 5, 'LaGranLinea\\Publicacion', 'Prueba', 'prueba'),
(29, 6, 'LaGranLinea\\Publicacion', 'Etiqueta 1', 'etiqueta-1'),
(30, 6, 'LaGranLinea\\Publicacion', 'Etiqueta 2', 'etiqueta-2'),
(31, 6, 'LaGranLinea\\Publicacion', 'Tag3', 'tag3'),
(32, 7, 'LaGranLinea\\Publicacion', 'Etiqueta 1', 'etiqueta-1'),
(33, 7, 'LaGranLinea\\Publicacion', 'Etiqueta 2', 'etiqueta-2'),
(34, 8, 'LaGranLinea\\Publicacion', 'Hello World!', 'hello-world'),
(35, 9, 'LaGranLinea\\Publicacion', 'Hello World!', 'hello-world');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tagging_tags`
--

DROP TABLE IF EXISTS `tagging_tags`;
CREATE TABLE IF NOT EXISTS `tagging_tags` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `slug` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suggest` tinyint(1) NOT NULL DEFAULT '0',
  `count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tag_group_id` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tagging_tags_slug_index` (`slug`),
  KEY `tagging_tags_tag_group_id_foreign` (`tag_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tagging_tags`
--

INSERT INTO `tagging_tags` (`id`, `slug`, `name`, `suggest`, `count`, `tag_group_id`) VALUES
(26, 'probando', 'Probando', 0, 1, NULL),
(27, 'etiqueta-1', 'Etiqueta 1', 0, 2, NULL),
(28, 'etiqueta-2', 'Etiqueta 2', 0, 2, NULL),
(29, 'tag3', 'Tag3', 0, 1, NULL),
(30, 'hello-world', 'Hello World!', 0, 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tagging_tag_groups`
--

DROP TABLE IF EXISTS `tagging_tag_groups`;
CREATE TABLE IF NOT EXISTS `tagging_tag_groups` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `slug` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tagging_tag_groups_slug_index` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `baja` int(11) DEFAULT NULL,
  `slug_user` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `apellido`, `email`, `email_verified_at`, `password`, `bio`, `avatar`, `baja`, `slug_user`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Portgas', 'D. Ace', 'user@example.com', NULL, '$2y$10$jhUT79o2ZRioGmb9vha3d.AR2y7glXPcdC0jYFi2RFJbG4Nf7ywau', '', '1599848160118993784_1684143668427611_5689617081741418849_o.jpg', 0, 'portgas-d.-ace', NULL, '2019-12-05 16:39:23', '2020-09-11 18:16:00'),
(2, 'Luis ángel', 'López Romero', 'mod@example.com', NULL, '$2y$10$E400sPA2CgepZ5a/IcXDH.0JlTXNn3jN1TXa8Gmmjyy/s8l9B2tc.', '', '158163543771690023_375000956778388_6827415567184429056_n.jpg', 0, 'luis-angel-lopez-romero', NULL, '2019-12-05 16:39:24', '2020-02-13 23:10:37'),
(3, 'Admin', 'Istrador', 'admin@example.com', NULL, '$2y$10$Y7vWUB64lP.Sb6VfRdzVOuHF5J3So07zbBy96VGqDQ3pHqo0iS7P.', '', '15998495967922cf53d88e74b24a42287ee0f68f43.jpg', 0, 'admin-istrador', NULL, '2019-12-05 16:39:24', '2020-09-11 18:39:56'),
(4, 'Fernando', NULL, 'fernando_ls96@hotmail.com', NULL, '$2y$10$MI8T27KB5paT5qn843mXneuyvANIjFxvFTkVjNGrYf.a7nNAJOwl6', 'Mi historia', '160011010415380639_1823142017932238_8171631417154005018_n.jpg', 0, NULL, NULL, '2020-09-14 18:57:28', '2020-09-14 19:01:44');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `id_categoria_fk` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `id_usersposts_fk` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `id_role_fk` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `id_user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

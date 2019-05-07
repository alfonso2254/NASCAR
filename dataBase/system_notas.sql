-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-05-2019 a las 06:33:21
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `system_notas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

DROP TABLE IF EXISTS `contacto`;
CREATE TABLE IF NOT EXISTS `contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `mensaje` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `correo`, `asunto`, `mensaje`) VALUES
(1, 'Luis Alfonso Alarcon', 'alfonso22542254@gmail.com', 'Excelenete', 'Excelente sistema amigo'),
(2, 'Luis Alfonso Alarcon', 'alfonso22542254@gmail.com', 'Excelenete', 'Excelente sistema amigo'),
(3, 'Luis Alfonso Alarcon', 'alfonso22542254@gmail.com', 'Excelenete', 'Perfecto'),
(4, 'Luis Alfonso Alarcon', 'megafox@gmail.com', 'Excelenete', '   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(5, 'Luis Alfonso Alarcon', 'megafox@gmail.com', 'Excelenete', ''),
(6, 'Luis Alfonso Alarcon', 'megafox@gmail.com', 'Excelenete', ''),
(7, 'Luis Alfonso Alarcon', 'megafox@gmail.com', 'Excelenete', ''),
(17, 'Luis Alfonso Alarcon', 'megafox@gmail.com', 'Excelenete', ''),
(18, 'Luis Alfonso Alarcon', 'megafox@gmail.com', 'Excelenete', ''),
(19, 'Luis Alfonso Alarcon', 'megafox@gmail.com', 'Excelenete', 'a'),
(20, 'Luis Alfonso Alarcon', 'megafox@gmail.com', 'Excelenete', 's'),
(21, '', '', '', ''),
(22, '', '', '', ''),
(23, 'Luis Alfonso Alarcon', 'megafox@gmail.com', 'Excelenete', 'pefecto'),
(24, 'Luis Alfonso Alarcon', 'megafox@gmail.com', 'Excelenete', 'loem');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

DROP TABLE IF EXISTS `notas`;
CREATE TABLE IF NOT EXISTS `notas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `texto` varchar(5000) NOT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `usuario_id_2` (`usuario_id`),
  KEY `usuario_id_3` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id`, `titulo`, `texto`, `fecha`, `usuario_id`) VALUES
(66, 'Historia de Venezuela', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-05-06 19:59:03', 19),
(67, 'Historia de Venezuela', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-05-06 19:59:07', 19),
(68, 'Historia de Venezuela', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-05-07 02:07:41', 19),
(69, 'Historia de Venezuela', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-05-07 02:07:45', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `img` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `correo`, `usuario`, `password`, `img`) VALUES
(19, 'Luis Alfonso Alarcon', 'admin@admin.com', 'admin', 'admin', 'perfil_avatar.jpg');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `notas_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

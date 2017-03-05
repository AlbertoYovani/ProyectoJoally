-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         6.0.0-alpha-community-nt-debug - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para joally
CREATE DATABASE IF NOT EXISTS `joally` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `joally`;

-- Volcando estructura para tabla joally.arreglo
CREATE TABLE IF NOT EXISTS `arreglo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `imagen` tinytext NOT NULL,
  `precio` double NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla joally.arreglo: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `arreglo` DISABLE KEYS */;
INSERT INTO `arreglo` (`id`, `nombre`, `imagen`, `precio`, `categoria_id`, `descripcion`) VALUES
	(1, 'Cocholate en piña', 'img\\arreglos/img2.png', 120, 1, 'Es un arreglo muy bonito para cualquier ocasion especial'),
	(2, 'Piñas Con Chocolate', 'img\\arreglos/img2.png', 120, 2, 'Todos los arreglos son muy bonitos para cualquier ocasion especial'),
	(4, 'Piñas Con Chocolate', 'img\\arreglos/img2.png', 120, 2, 'Todos los arreglos son muy bonitos para cualquier ocasion especial'),
	(5, 'Piñas Con Chocolate', 'img\\arreglos/img2.png', 120, 1, 'Es un arreglo muy bonito para cualquier ocasion especial'),
	(6, 'Piñas con uvas', 'img\\arreglos/img2.png', 120, 1, 'Es un arreglo muy bonito para cualquier ocasion especial'),
	(7, 'Uvas Dulces', 'img\\arreglos/img2.png', 120, 2, 'Todos los arreglos son muy bonitos para cualquier ocasion especial'),
	(8, 'Piñas Con Chocolate', 'img/arreglos/img2.png', 120, 2, 'Todos los arreglos son muy bonitos para cualquier ocasion especial');
/*!40000 ALTER TABLE `arreglo` ENABLE KEYS */;

-- Volcando estructura para tabla joally.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla joally.categoria: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`categoria_id`, `categoria_nombre`) VALUES
	(1, 'BODA'),
	(2, 'XV AÑOS'),
	(3, 'BAUTIZOS');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Volcando estructura para tabla joally.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `telefono` varchar(60) DEFAULT NULL,
  `fechanac` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla joally.cliente: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`id`, `nombre`, `correo`, `telefono`, `fechanac`) VALUES
	(1, 'alberto yovani', 'aypp1996@hotmail.com', '9191222708', '2017-02-05'),
	(37, 'alberto yovani', 'aypp1996@hotmail.com', '9191222708', '2017-02-05'),
	(38, 'alberto yovani', 'aypp1996@hotmail.com', '9191222708', '2017-02-05'),
	(39, 'alberto yovani', 'aypp1996@hotmail.com', '9191222708', '2017-02-05'),
	(40, 'Alberto Yovani Perez Perez', 'aypp1996@hotmail.com', '919183732377', '1998-09-11'),
	(41, 'juan bomes', 'aypp1996@hotmail.com', '9198218212', '1900-01-11'),
	(42, 'Alberto Yovani Perez Perez', 'aypp1996@hotmail.com', '919183732377', '1999-11-11'),
	(43, 'Alberto Yovani Perez Perez', 'aypp1996@hotmail.com', '919183732377', '1999-11-11'),
	(44, 'Jan gomez', 'aypp1996@hotmail.comita', '9121213213', '1992-11-11'),
	(45, 'Jan gomez', 'aypp1996@hotmail.comita', '9121213213', '1992-11-11'),
	(46, 'Alberto Yovani Perez Perez', 'aypp1996@hotmail.com', '919183732377', '0199-11-11'),
	(47, 'Alberto Yovani Perez Perez', 'aypp1996@hotmail.com', '919183732377', '1999-11-11'),
	(48, '', '', '919183732377', ''),
	(49, '', '', '919183732377', '');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Volcando estructura para tabla joally.compra
CREATE TABLE IF NOT EXISTS `compra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `insumos` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `inversion` double NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla joally.compra: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `compra` DISABLE KEYS */;
/*!40000 ALTER TABLE `compra` ENABLE KEYS */;

-- Volcando estructura para tabla joally.cuenta
CREATE TABLE IF NOT EXISTS `cuenta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCliente` int(11) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `ClPassword1` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_cuenta_cliente` (`idCliente`),
  CONSTRAINT `FK_cuenta_cliente` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla joally.cuenta: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `cuenta` DISABLE KEYS */;
INSERT INTO `cuenta` (`id`, `idCliente`, `usuario`, `ClPassword1`) VALUES
	(1, 1, 'alberto', 'alberto'),
	(35, 1, 'xgfdv', '123'),
	(36, 1, 'xgfdv', '123'),
	(37, 37, 'alberto', ''),
	(38, 1, 'alberto', 'alberto'),
	(39, 1, 'albnertito', 'juanitoper'),
	(40, 38, 'alberto', ''),
	(41, 41, 'alberto', ''),
	(42, 44, '44', ''),
	(43, 45, '45', ''),
	(44, 46, '46', ''),
	(45, 47, '47', 'qwerty'),
	(46, 48, '48', 'qwerty'),
	(47, 49, '49', 'qwerty');
/*!40000 ALTER TABLE `cuenta` ENABLE KEYS */;

-- Volcando estructura para tabla joally.entrega_pedido
CREATE TABLE IF NOT EXISTS `entrega_pedido` (
  `entrega_id` int(11) NOT NULL AUTO_INCREMENT,
  `pedido_id` int(11) NOT NULL DEFAULT '0',
  `fechaEntrega` date NOT NULL,
  `recibe` varchar(50) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `datoextra` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`entrega_id`),
  KEY `FK__pedido` (`pedido_id`),
  CONSTRAINT `FK__pedido` FOREIGN KEY (`pedido_id`) REFERENCES `pedido` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla joally.entrega_pedido: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `entrega_pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `entrega_pedido` ENABLE KEYS */;

-- Volcando estructura para tabla joally.jy_arreglo_clasificacion
CREATE TABLE IF NOT EXISTS `jy_arreglo_clasificacion` (
  `ac_id` int(11) NOT NULL AUTO_INCREMENT,
  `arreglo_id` int(11) NOT NULL DEFAULT '0',
  `clasificacion_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ac_id`),
  KEY `FK__arreglo` (`arreglo_id`),
  KEY `FK__jy_clasificacion` (`clasificacion_id`),
  CONSTRAINT `FK__arreglo` FOREIGN KEY (`arreglo_id`) REFERENCES `arreglo` (`id`),
  CONSTRAINT `FK__jy_clasificacion` FOREIGN KEY (`clasificacion_id`) REFERENCES `jy_clasificacion` (`clasificacion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla joally.jy_arreglo_clasificacion: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `jy_arreglo_clasificacion` DISABLE KEYS */;
INSERT INTO `jy_arreglo_clasificacion` (`ac_id`, `arreglo_id`, `clasificacion_id`) VALUES
	(1, 2, 1),
	(2, 2, 2),
	(3, 2, 3),
	(4, 5, 3),
	(5, 6, 2);
/*!40000 ALTER TABLE `jy_arreglo_clasificacion` ENABLE KEYS */;

-- Volcando estructura para tabla joally.jy_clasificacion
CREATE TABLE IF NOT EXISTS `jy_clasificacion` (
  `clasificacion_id` int(11) NOT NULL AUTO_INCREMENT,
  `clasificacion_nombre` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`clasificacion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla joally.jy_clasificacion: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `jy_clasificacion` DISABLE KEYS */;
INSERT INTO `jy_clasificacion` (`clasificacion_id`, `clasificacion_nombre`) VALUES
	(1, 'Sin Chocolate'),
	(2, 'Con Chocolate'),
	(3, 'Con Extra Chocolate');
/*!40000 ALTER TABLE `jy_clasificacion` ENABLE KEYS */;

-- Volcando estructura para tabla joally.jy_pedidos_tmp
CREATE TABLE IF NOT EXISTS `jy_pedidos_tmp` (
  `pedidos_id` int(11) NOT NULL AUTO_INCREMENT,
  `pedidos_fecha` text NOT NULL,
  `pedidos_hora` text NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `cliente_tmp` text NOT NULL,
  `arreglo_id` int(11) NOT NULL,
  `clasificacion_id` int(11) NOT NULL,
  `tamanio_id` int(11) NOT NULL,
  `dedicatoria` varchar(100) NOT NULL,
  PRIMARY KEY (`pedidos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla joally.jy_pedidos_tmp: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `jy_pedidos_tmp` DISABLE KEYS */;
INSERT INTO `jy_pedidos_tmp` (`pedidos_id`, `pedidos_fecha`, `pedidos_hora`, `cliente_id`, `cliente_tmp`, `arreglo_id`, `clasificacion_id`, `tamanio_id`, `dedicatoria`) VALUES
	(1, '11/12/2017', '09:02', 23, '1232', 5, 0, 0, ''),
	(3, '04/03/2017', '16:51', 0, '30709', 2, 2, 0, ''),
	(4, '04/03/2017', '16:57', 0, '30709', 2, 0, 0, ''),
	(5, '04/03/2017', '16:57', 0, '30709', 2, 0, 0, ''),
	(6, '04/03/2017', '17:03', 0, '23879', 4, 1, 6, ''),
	(7, '04/03/2017', '17:03', 0, '23879', 4, 0, 7, 'hola'),
	(8, '04/03/2017', '17:17', 0, '27018', 2, 0, 0, ''),
	(9, '04/03/2017', '17:17', 0, '27018', 2, 0, 0, ''),
	(10, '04/03/2017', '17:17', 0, '27018', 2, 0, 0, ''),
	(11, '04/03/2017', '22:37', 1, '24309', 5, 0, 0, ''),
	(12, '04/03/2017', '22:37', 1, '24309', 5, 0, 0, ''),
	(13, '04/03/2017', '22:37', 1, '24309', 5, 0, 0, ''),
	(14, '04/03/2017', '22:37', 1, '24309', 5, 0, 0, '');
/*!40000 ALTER TABLE `jy_pedidos_tmp` ENABLE KEYS */;

-- Volcando estructura para tabla joally.tamanio
CREATE TABLE IF NOT EXISTS `tamanio` (
  `tamanio_id` int(11) NOT NULL AUTO_INCREMENT,
  `arreglo_id` int(11) NOT NULL,
  `tamanio_nombre` varchar(50) NOT NULL DEFAULT '0',
  `precio` double NOT NULL,
  PRIMARY KEY (`tamanio_id`),
  KEY `FK_tamanio_arreglo` (`arreglo_id`),
  CONSTRAINT `FK_tamanio_arreglo` FOREIGN KEY (`arreglo_id`) REFERENCES `arreglo` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla joally.tamanio: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `tamanio` DISABLE KEYS */;
INSERT INTO `tamanio` (`tamanio_id`, `arreglo_id`, `tamanio_nombre`, `precio`) VALUES
	(1, 1, 'Grande', 300),
	(2, 1, 'Mediano', 200),
	(3, 4, 'Pequenio', 100),
	(4, 1, 'Grande', 300),
	(5, 2, 'Pequenio', 100),
	(6, 2, 'Mediano', 200),
	(7, 2, 'Grande', 300);
/*!40000 ALTER TABLE `tamanio` ENABLE KEYS */;

-- Volcando estructura para tabla joally.venta
CREATE TABLE IF NOT EXISTS `venta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idA` int(11) NOT NULL,
  `idC` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idA` (`idA`),
  KEY `idC` (`idC`),
  CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`idA`) REFERENCES `arreglo` (`id`),
  CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`idC`) REFERENCES `cliente` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla joally.venta: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
/*!40000 ALTER TABLE `venta` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

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
  `descripcion` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla joally.arreglo: ~13 rows (aproximadamente)
/*!40000 ALTER TABLE `arreglo` DISABLE KEYS */;
INSERT INTO `arreglo` (`id`, `nombre`, `imagen`, `descripcion`) VALUES
	(1, 'Cocholate en piña1', 'img\\arreglos/1.jpg', 'Es un arreglo muy bonito para cualquier ocasion especia Es un arreglo muy bonito para cualquier ocasion especial Es un arreglo muy bonito para cualquier ocasion especiall'),
	(2, 'Piñas Con Chocolate2', 'img\\arreglos/2.jpg', 'Todos los arreglos son muy bonitos para cualquier ocasion especial'),
	(4, 'Piñas Con Chocolate3', 'img\\arreglos/3.jpg', 'Todos los arreglos son muy bonitos para cualquier ocasion especial'),
	(5, 'Piñas Con Chocolate4', 'img\\arreglos/1.jpg', 'Es un arreglo muy bonito para cualquier ocasion especial'),
	(6, 'Piñas con uvas5', 'img\\arreglos/2.jpg', 'Es un arreglo muy bonito para cualquier ocasion especial'),
	(7, 'Uvas Dulces6', 'img\\arreglos/3.jpg', 'Todos los arreglos son muy bonitos para cualquier ocasion especial'),
	(8, 'Piñas Con Chocolate7', 'img/arreglos/1.jpg', 'Todos los arreglos son muy bonitos para cualquier ocasion especial'),
	(9, 'Piñas Con Chocolate8', 'img\\arreglos/2.jpg', 'Todos los arreglos son muy bonitos para cualquier ocasion especial'),
	(10, 'Piñas Frescas9', 'img\\arreglos/3.jpg', 'Todos los arreglos son muy bonitos para cualquier ocasion especial'),
	(11, 'Piñas Verdes10', 'img/arreglos/1.jpg', 'Todos los arreglos son muy bonitos para cualquier ocasion especial'),
	(12, 'Piñas Rojas11', 'img\\arreglos/2.jpg', 'Todos los arreglos son muy bonitos para cualquier ocasion especial'),
	(13, 'Piñas Negras12', 'img\\arreglos/3.jpg', 'Todos los arreglos son muy bonitos para cualquier ocasion especial'),
	(14, 'Piñas Con Chocolate13', 'img/arreglos/1.jpg', 'Todos los arreglos son muy bonitos para cualquier ocasion especial');
/*!40000 ALTER TABLE `arreglo` ENABLE KEYS */;

-- Volcando estructura para tabla joally.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `telefono` varchar(60) DEFAULT NULL,
  `fechanac` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla joally.cliente: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`id`, `nombre`, `correo`, `telefono`, `fechanac`) VALUES
	(1, 'Alberto ', 'alberto@hotmail.com', '999999999', '12-12-1999');
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

-- Volcando datos para la tabla joally.cuenta: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `cuenta` DISABLE KEYS */;
INSERT INTO `cuenta` (`id`, `idCliente`, `usuario`, `ClPassword1`) VALUES
	(1, 1, 'alberto', 'alberto');
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

-- Volcando datos para la tabla joally.jy_arreglo_clasificacion: ~18 rows (aproximadamente)
/*!40000 ALTER TABLE `jy_arreglo_clasificacion` DISABLE KEYS */;
INSERT INTO `jy_arreglo_clasificacion` (`ac_id`, `arreglo_id`, `clasificacion_id`) VALUES
	(1, 1, 1),
	(2, 9, 3),
	(3, 10, 2),
	(4, 12, 1),
	(5, 12, 1),
	(6, 13, 2),
	(7, 11, 3),
	(8, 11, 2),
	(9, 11, 2),
	(10, 10, 3),
	(11, 12, 2),
	(12, 12, 3),
	(13, 10, 1),
	(14, 9, 3),
	(15, 8, 3),
	(16, 8, 1),
	(17, 13, 3),
	(18, 11, 2);
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

-- Volcando datos para la tabla joally.jy_pedidos_tmp: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `jy_pedidos_tmp` DISABLE KEYS */;
INSERT INTO `jy_pedidos_tmp` (`pedidos_id`, `pedidos_fecha`, `pedidos_hora`, `cliente_id`, `cliente_tmp`, `arreglo_id`, `clasificacion_id`, `tamanio_id`, `dedicatoria`) VALUES
	(1, '09/03/2017', '20:50', 1, '11108', 1, 0, 2, ''),
	(2, '09/03/2017', '20:50', 1, '11108', 1, 0, 0, ''),
	(3, '09/03/2017', '20:50', 1, '11108', 1, 0, 0, ''),
	(4, '09/03/2017', '20:50', 1, '11108', 1, 0, 0, '');
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

-- Volcando datos para la tabla joally.tamanio: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `tamanio` DISABLE KEYS */;
INSERT INTO `tamanio` (`tamanio_id`, `arreglo_id`, `tamanio_nombre`, `precio`) VALUES
	(1, 1, 'Grande', 300),
	(2, 1, 'Mediano', 200),
	(3, 1, 'Pequenio', 100),
	(4, 2, 'Grande', 300),
	(5, 2, 'Pequenio', 100),
	(6, 2, 'Mediano', 200),
	(7, 2, 'Grande', 300),
	(8, 2, 'Grande', 120);
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

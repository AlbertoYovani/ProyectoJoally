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
DROP DATABASE IF EXISTS `joally`;
CREATE DATABASE IF NOT EXISTS `joally` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `joally`;

-- Volcando estructura para tabla joally.arreglo
DROP TABLE IF EXISTS `arreglo`;
CREATE TABLE IF NOT EXISTS `arreglo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `imagen` tinytext NOT NULL,
  `precio` double NOT NULL,
  `clasificacion` varchar(50) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla joally.arreglo: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `arreglo` DISABLE KEYS */;
INSERT INTO `arreglo` (`id`, `nombre`, `imagen`, `precio`, `clasificacion`, `categoria_id`, `descripcion`) VALUES
	(1, 'Cocholate en piña', 'img\\arreglos/img1.png', 120, 'sch', 1, 'Es un arreglo muy bonito para cualquier ocasion especial'),
	(2, 'Piñas Con Chocolate', 'img\\arreglos/img2.png', 120, 'cch', 2, 'Todos los arreglos son muy bonitos para cualquier ocasion especial'),
	(4, 'Piñas Con Chocolate', 'img\\arreglos/img2.png', 120, 'cech', 2, 'Todos los arreglos son muy bonitos para cualquier ocasion especial'),
	(5, 'Piñas Con Chocolate', 'img\\arreglos/img1.png', 120, 'cch', 1, 'Es un arreglo muy bonito para cualquier ocasion especial'),
	(6, 'Piñas con uvas', 'img\\arreglos/img1.png', 120, 'cech', 1, 'Es un arreglo muy bonito para cualquier ocasion especial'),
	(7, 'Uvas Dulces', 'img\\arreglos/img2.png', 120, 'cech', 2, 'Todos los arreglos son muy bonitos para cualquier ocasion especial'),
	(8, 'Piñas Con Chocolate', 'img/arreglos/img2.png', 120, 'cech', 2, 'Todos los arreglos son muy bonitos para cualquier ocasion especial');
/*!40000 ALTER TABLE `arreglo` ENABLE KEYS */;

-- Volcando estructura para tabla joally.asistencias
DROP TABLE IF EXISTS `asistencias`;
CREATE TABLE IF NOT EXISTS `asistencias` (
  `cod_asistencia` varchar(5) NOT NULL,
  `fecha_asistencia` date NOT NULL,
  PRIMARY KEY (`cod_asistencia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla joally.asistencias: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `asistencias` DISABLE KEYS */;
INSERT INTO `asistencias` (`cod_asistencia`, `fecha_asistencia`) VALUES
	('AS001', '2014-10-15'),
	('AS002', '2014-10-15'),
	('AS003', '2014-10-19'),
	('AS004', '2014-10-19');
/*!40000 ALTER TABLE `asistencias` ENABLE KEYS */;

-- Volcando estructura para tabla joally.categoria
DROP TABLE IF EXISTS `categoria`;
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
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `telefono` varchar(60) DEFAULT NULL,
  `fechanac` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla joally.cliente: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`id`, `nombre`, `correo`, `telefono`, `fechanac`) VALUES
	(1, 'alberto yovani', 'aypp1996@hotmail.com', '9191222708', '2017-02-05'),
	(37, 'alberto yovani', 'aypp1996@hotmail.com', '9191222708', '2017-02-05'),
	(38, 'alberto yovani', 'aypp1996@hotmail.com', '9191222708', '2017-02-05'),
	(39, 'alberto yovani', 'aypp1996@hotmail.com', '9191222708', '2017-02-05');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Volcando estructura para tabla joally.compra
DROP TABLE IF EXISTS `compra`;
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
DROP TABLE IF EXISTS `cuenta`;
CREATE TABLE IF NOT EXISTS `cuenta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCliente` int(11) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `ClPassword` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_cuenta_cliente` (`idCliente`),
  CONSTRAINT `FK_cuenta_cliente` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla joally.cuenta: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `cuenta` DISABLE KEYS */;
INSERT INTO `cuenta` (`id`, `idCliente`, `usuario`, `foto`, `ClPassword`) VALUES
	(1, 1, 'alberto', 'foto/', 'alberto'),
	(35, 38, 'xgfdv', 'foto/', '123'),
	(36, 1, 'xgfdv', 'foto/', '123'),
	(37, NULL, 'alberto', 'foto/', '');
/*!40000 ALTER TABLE `cuenta` ENABLE KEYS */;

-- Volcando estructura para tabla joally.detalle_asistencias
DROP TABLE IF EXISTS `detalle_asistencias`;
CREATE TABLE IF NOT EXISTS `detalle_asistencias` (
  `cod_asistencia` varchar(5) NOT NULL,
  `estudiante` varchar(100) NOT NULL,
  KEY `cod_asistencia` (`cod_asistencia`),
  CONSTRAINT `detalle_asistencias_ibfk_1` FOREIGN KEY (`cod_asistencia`) REFERENCES `asistencias` (`cod_asistencia`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla joally.detalle_asistencias: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `detalle_asistencias` DISABLE KEYS */;
INSERT INTO `detalle_asistencias` (`cod_asistencia`, `estudiante`) VALUES
	('AS001', 'Kevin Rodrigo Avalos Cama'),
	('AS001', 'Jose Jorge Avalos Cama'),
	('AS001', 'Mary Luz Cama Farfan'),
	('AS002', 'Edgar Alvarez'),
	('AS002', 'Luis Huanchi'),
	('AS002', 'Einar Carbajal'),
	('AS003', 'Javier Benavidez'),
	('AS003', 'Jose Maria Fernandez'),
	('AS003', 'Miguel Grau'),
	('AS004', 'Gerardo Guitierrez'),
	('AS004', 'Gilberto Mamey');
/*!40000 ALTER TABLE `detalle_asistencias` ENABLE KEYS */;

-- Volcando estructura para tabla joally.jy_arreglo_clasificacion
DROP TABLE IF EXISTS `jy_arreglo_clasificacion`;
CREATE TABLE IF NOT EXISTS `jy_arreglo_clasificacion` (
  `ac_id` int(11) NOT NULL AUTO_INCREMENT,
  `arreglo_id` int(11) NOT NULL DEFAULT '0',
  `clasificacion_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ac_id`),
  KEY `FK_jy_arreglo_clasificacion_arreglo` (`arreglo_id`),
  KEY `FK_jy_arreglo_clasificacion_jy_clasificacion` (`clasificacion_id`),
  CONSTRAINT `FK_jy_arreglo_clasificacion_jy_clasificacion` FOREIGN KEY (`clasificacion_id`) REFERENCES `jy_clasificacion` (`clacificacion_id`),
  CONSTRAINT `FK_jy_arreglo_clasificacion_arreglo` FOREIGN KEY (`arreglo_id`) REFERENCES `arreglo` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla joally.jy_arreglo_clasificacion: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `jy_arreglo_clasificacion` DISABLE KEYS */;
INSERT INTO `jy_arreglo_clasificacion` (`ac_id`, `arreglo_id`, `clasificacion_id`) VALUES
	(1, 1, 2),
	(2, 1, 3),
	(3, 1, 1),
	(4, 2, 1),
	(5, 2, 3),
	(6, 2, 2),
	(7, 4, 2);
/*!40000 ALTER TABLE `jy_arreglo_clasificacion` ENABLE KEYS */;

-- Volcando estructura para tabla joally.jy_clasificacion
DROP TABLE IF EXISTS `jy_clasificacion`;
CREATE TABLE IF NOT EXISTS `jy_clasificacion` (
  `clasificacion_id` int(11) NOT NULL AUTO_INCREMENT,
  `clasificacion_nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`clasificacion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla joally.jy_clasificacion: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `jy_clasificacion` DISABLE KEYS */;
INSERT INTO `jy_clasificacion` (`clasificacion_id`, `clasificacion_nombre`) VALUES
	(1, 'Sin Chocolate'),
	(2, 'Con Chocolate'),
	(3, 'Extra Chocolate');
/*!40000 ALTER TABLE `jy_clasificacion` ENABLE KEYS */;

-- Volcando estructura para tabla joally.jy_pedidos_tmp
DROP TABLE IF EXISTS `jy_pedidos_tmp`;
CREATE TABLE IF NOT EXISTS `jy_pedidos_tmp` (
  `pedidos_id` int(11) NOT NULL AUTO_INCREMENT,
  `pedidos_fecha` text,
  `pedidos_hora` text,
  `cliente_id` int(11) DEFAULT NULL,
  `cliente_tmp` text,
  `clasificacion_id` text,
  `arreglo_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`pedidos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla joally.jy_pedidos_tmp: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `jy_pedidos_tmp` DISABLE KEYS */;
INSERT INTO `jy_pedidos_tmp` (`pedidos_id`, `pedidos_fecha`, `pedidos_hora`, `cliente_id`, `cliente_tmp`, `clasificacion_id`, `arreglo_id`) VALUES
	(18, '12/02/2017', '21:38', 0, '9992', '2', 2),
	(19, '12/02/2017', '21:38', 0, '9992', '2', 2),
	(20, '12/02/2017', '21:38', 0, '9992', NULL, 2),
	(21, '12/02/2017', '21:44', 0, '9992', NULL, 4),
	(22, '12/02/2017', '21:44', 0, '9992', '2', 4),
	(23, '12/02/2017', '22:21', 0, '9992', '2', 2),
	(24, '12/02/2017', '22:21', 0, '9992', NULL, 2);
/*!40000 ALTER TABLE `jy_pedidos_tmp` ENABLE KEYS */;

-- Volcando estructura para tabla joally.pedido
DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idArreglo` int(11) NOT NULL,
  `tipoEntrega` varchar(20) NOT NULL,
  `dedicatoria` text,
  `fechaEntrega` date NOT NULL,
  `fechaRealizado` date NOT NULL,
  `recibe` varchar(70) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `datoextra` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pedido_arreglo` (`idArreglo`),
  CONSTRAINT `FK_pedido_arreglo` FOREIGN KEY (`idArreglo`) REFERENCES `arreglo` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla joally.pedido: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
INSERT INTO `pedido` (`id`, `idArreglo`, `tipoEntrega`, `dedicatoria`, `fechaEntrega`, `fechaRealizado`, `recibe`, `direccion`, `datoextra`) VALUES
	(1, 1, 'domicilio', 'Feliz Cumpleaños', '2017-02-19', '2017-02-10', 'Juanito', 'Calle central, No 123', 'Frente a la panaderia Rosita');
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;

-- Volcando estructura para tabla joally.venta
DROP TABLE IF EXISTS `venta`;
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

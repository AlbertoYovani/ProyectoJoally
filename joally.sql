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
  `precio` double NOT NULL,
  `tamaño` varchar(30) NOT NULL,
  `idCa` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idCa` (`idCa`),
  CONSTRAINT `arreglo_ibfk_1` FOREIGN KEY (`idCa`) REFERENCES `categoria` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla joally.arreglo: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `arreglo` DISABLE KEYS */;
/*!40000 ALTER TABLE `arreglo` ENABLE KEYS */;

-- Volcando estructura para tabla joally.categoria
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla joally.categoria: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Volcando estructura para tabla joally.cliente
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `correo` varchar(15) DEFAULT NULL,
  `telefono` varchar(60) NOT NULL,
  `fechanac` date NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `contrasenia` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla joally.cliente: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
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

-- Volcando estructura para tabla joally.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `domicilio` varchar(60) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `puesto` varchar(60) NOT NULL,
  `contrasenia` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla joally.usuario: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `nombre`, `domicilio`, `telefono`, `puesto`, `contrasenia`) VALUES
	(1, 'edgar', 'barrio norte', '9191623454', 'vendedor', '123');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

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

-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for rurikkco_propiedades
CREATE DATABASE IF NOT EXISTS `rurikkco_propiedades` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `rurikkco_propiedades`;

-- Dumping structure for table rurikkco_propiedades.barrios
CREATE TABLE IF NOT EXISTS `barrios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ciudadId` int(11) NOT NULL,
  `barrioNombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table rurikkco_propiedades.barrios: ~5 rows (approximately)
DELETE FROM `barrios`;
/*!40000 ALTER TABLE `barrios` DISABLE KEYS */;
INSERT INTO `barrios` (`id`, `ciudadId`, `barrioNombre`) VALUES
	(1, 2, 'Plan'),
	(2, 2, 'Forestal'),
	(3, 2, 'Santa Inés'),
	(4, 3, 'El Belloto'),
	(5, 5, 'Limache');
/*!40000 ALTER TABLE `barrios` ENABLE KEYS */;

-- Dumping structure for table rurikkco_propiedades.categorias_inmueble
CREATE TABLE IF NOT EXISTS `categorias_inmueble` (
  `tipoInmuebleId` int(11) NOT NULL AUTO_INCREMENT,
  `tipoInmueble` varchar(50) NOT NULL,
  PRIMARY KEY (`tipoInmuebleId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table rurikkco_propiedades.categorias_inmueble: ~6 rows (approximately)
DELETE FROM `categorias_inmueble`;
/*!40000 ALTER TABLE `categorias_inmueble` DISABLE KEYS */;
INSERT INTO `categorias_inmueble` (`tipoInmuebleId`, `tipoInmueble`) VALUES
	(1, 'departamento'),
	(2, 'departamento estudiante'),
	(3, 'cabañas'),
	(4, 'casa'),
	(5, 'casa de campo'),
	(6, 'terreno');
/*!40000 ALTER TABLE `categorias_inmueble` ENABLE KEYS */;

-- Dumping structure for table rurikkco_propiedades.ciudades
CREATE TABLE IF NOT EXISTS `ciudades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paisID` int(11) NOT NULL DEFAULT '1',
  `ciudadNombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table rurikkco_propiedades.ciudades: ~7 rows (approximately)
DELETE FROM `ciudades`;
/*!40000 ALTER TABLE `ciudades` DISABLE KEYS */;
INSERT INTO `ciudades` (`id`, `paisID`, `ciudadNombre`) VALUES
	(1, 1, 'valparaíso'),
	(2, 1, 'viña del mar'),
	(3, 1, 'quilpué'),
	(4, 1, 'villa alemana'),
	(5, 1, 'limache'),
	(6, 1, 'quillota'),
	(7, 1, 'olmué');
/*!40000 ALTER TABLE `ciudades` ENABLE KEYS */;

-- Dumping structure for table rurikkco_propiedades.elementosweb
CREATE TABLE IF NOT EXISTS `elementosweb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `dato` text,
  `submenuId` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table rurikkco_propiedades.elementosweb: ~15 rows (approximately)
DELETE FROM `elementosweb`;
/*!40000 ALTER TABLE `elementosweb` DISABLE KEYS */;
INSERT INTO `elementosweb` (`id`, `nombre`, `descripcion`, `dato`, `submenuId`) VALUES
	(1, 'Inicio', 'index', 'index.php', '0'),
	(2, 'Rentas', 'menuRenta', 'buscarPropiedades.php', '0'),
	(3, 'Ventas', 'menuVentas', 'buscarPropiedades.php', '0'),
	(4, 'Ultimos Propiedaes', 'ultimas publicaciones de propiedades', 'ultimas.php', '0'),
	(5, 'Quiénes Somos', 'descripcion de nosotros', 'quienesSomos.php', '0'),
	(6, 'Contáctenos', 'datos de contacto', 'contacto.php', '0'),
	(7, 'TELEFONO_FIJO_CONTACTO', NULL, '+56912345678', '-1'),
	(8, 'TELEFONO_MOVIL_CONTACTO', NULL, '+56913245678', '-1'),
	(9, 'CIUDAD_CONTACTO', NULL, 'Valparaíso', '-1'),
	(10, 'EMAIL_CONTACTO', NULL, 'rurikk@rurikk.com', '-1'),
	(11, 'DIRECCION_CONTACTO', NULL, 'Avenida Tanto', '-1'),
	(12, 'DESCRIPCION_PAGINA_TXT', NULL, 'Empresa formada por profesionales Arquitectos que nos desempeñamos en el área de la Gestión Inmobiliaria. Lo podremos asesorar en una seríe de gestiones complementarias a la venta o compra de un inmueble. Lo esperamos. ', '-1'),
	(13, 'URL_IMAGEN_FONDO', '1,680px × 490', 'http://i.imgur.com/DvbJwtj.png', '-1'),
	(14, 'URL_LOGO', ' 250px × 90px', 'http://i.imgur.com/uu2q3dx.png', '-1'),
	(15, 'URL_DOMINIO', '', 'http://propiedades.rurikk.com/', '-1');
/*!40000 ALTER TABLE `elementosweb` ENABLE KEYS */;

-- Dumping structure for table rurikkco_propiedades.estados_propiedad
CREATE TABLE IF NOT EXISTS `estados_propiedad` (
  `estadoId` int(11) NOT NULL AUTO_INCREMENT,
  `nombreEstado` varchar(50) NOT NULL,
  PRIMARY KEY (`estadoId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table rurikkco_propiedades.estados_propiedad: ~4 rows (approximately)
DELETE FROM `estados_propiedad`;
/*!40000 ALTER TABLE `estados_propiedad` DISABLE KEYS */;
INSERT INTO `estados_propiedad` (`estadoId`, `nombreEstado`) VALUES
	(1, 'nuevo'),
	(2, 'usado'),
	(3, 'proyecto'),
	(4, 'en construcción');
/*!40000 ALTER TABLE `estados_propiedad` ENABLE KEYS */;

-- Dumping structure for table rurikkco_propiedades.galeria_fotos
CREATE TABLE IF NOT EXISTS `galeria_fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `propiedadId` int(11) NOT NULL,
  `URL` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table rurikkco_propiedades.galeria_fotos: ~9 rows (approximately)
DELETE FROM `galeria_fotos`;
/*!40000 ALTER TABLE `galeria_fotos` DISABLE KEYS */;
INSERT INTO `galeria_fotos` (`id`, `propiedadId`, `URL`) VALUES
	(1, 1, 'http://i.imgur.com/3BCea39.jpg'),
	(2, 1, 'http://i.imgur.com/lHvwvxr.jpg'),
	(3, 1, 'http://i.imgur.com/LeTBrKs.jpg'),
	(4, 1, 'http://i.imgur.com/qJb7JxK.jpg'),
	(5, 1, 'http://i.imgur.com/2NmY9kQ.jpg'),
	(6, 1, 'http://i.imgur.com/gZjnK1s.jpg'),
	(7, 1, 'http://i.imgur.com/8vxEvPk.jpg'),
	(8, 1, 'http://i.imgur.com/Ts2HtbX.jpg'),
	(9, 1, 'http://i.imgur.com/4Numtub.jpg');
/*!40000 ALTER TABLE `galeria_fotos` ENABLE KEYS */;

-- Dumping structure for table rurikkco_propiedades.monedas
CREATE TABLE IF NOT EXISTS `monedas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreMoneda` varchar(30) NOT NULL,
  `signo` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table rurikkco_propiedades.monedas: ~2 rows (approximately)
DELETE FROM `monedas`;
/*!40000 ALTER TABLE `monedas` DISABLE KEYS */;
INSERT INTO `monedas` (`id`, `nombreMoneda`, `signo`) VALUES
	(1, 'peso chile', '$'),
	(2, 'unidades de fomento', 'UF');
/*!40000 ALTER TABLE `monedas` ENABLE KEYS */;

-- Dumping structure for table rurikkco_propiedades.paises
CREATE TABLE IF NOT EXISTS `paises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paisNombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table rurikkco_propiedades.paises: ~0 rows (approximately)
DELETE FROM `paises`;
/*!40000 ALTER TABLE `paises` DISABLE KEYS */;
INSERT INTO `paises` (`id`, `paisNombre`) VALUES
	(1, 'chile');
/*!40000 ALTER TABLE `paises` ENABLE KEYS */;

-- Dumping structure for table rurikkco_propiedades.propiedades
CREATE TABLE IF NOT EXISTS `propiedades` (
  `propiedadId` int(11) NOT NULL AUTO_INCREMENT,
  `ciudadId` int(11) NOT NULL,
  `barrioId` int(11) NOT NULL,
  `negocioId` int(11) NOT NULL,
  `catInmuebleID` int(11) NOT NULL,
  `estadoPropiedadId` int(11) NOT NULL,
  `tituloPropiedad` varchar(50) NOT NULL,
  `precioPropiedad` int(10) unsigned DEFAULT '0',
  `monedaId` tinyint(3) unsigned DEFAULT '1',
  `infoAdicional` text NOT NULL,
  `numDormitorios` tinyint(3) unsigned DEFAULT NULL,
  `numBanos` tinyint(3) unsigned DEFAULT NULL,
  `metrosCuadrados` smallint(5) unsigned DEFAULT NULL,
  `numGarajes` bit(1) DEFAULT NULL,
  `visible` bit(1) NOT NULL DEFAULT b'1',
  `eliminado` bit(1) NOT NULL DEFAULT b'0',
  `visitasWeb` int(11) NOT NULL DEFAULT '0',
  `urlFotoPrincipal` text NOT NULL,
  PRIMARY KEY (`propiedadId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table rurikkco_propiedades.propiedades: ~1 rows (approximately)
DELETE FROM `propiedades`;
/*!40000 ALTER TABLE `propiedades` DISABLE KEYS */;
INSERT INTO `propiedades` (`propiedadId`, `ciudadId`, `barrioId`, `negocioId`, `catInmuebleID`, `estadoPropiedadId`, `tituloPropiedad`, `precioPropiedad`, `monedaId`, `infoAdicional`, `numDormitorios`, `numBanos`, `metrosCuadrados`, `numGarajes`, `visible`, `eliminado`, `visitasWeb`, `urlFotoPrincipal`) VALUES
	(1, 5, 5, 2, 4, 2, 'Casa amoblada en San Fco. de Limache (Meses)', 400000, 1, 'Jarrett.cl código: 363657\r\n\r\n \r\n\r\nSe arrienda casa en excelente sector de Limache Centro, a 3 cuadras del Metro, cercano a locomoción, comercio y colegios.\r\n\r\n \r\n\r\nArriendo exclusivo para empresas constructoras (Maestros).\r\n\r\n \r\n\r\nCapacidad para 4 personas\r\n\r\n \r\n\r\nCuenta con:\r\n\r\n \r\n\r\n2 Dormitorios amplios\r\n\r\n1 Baño\r\n\r\nEstar- Comedor\r\n\r\nCocina\r\n\r\nPatio\r\n\r\n \r\n\r\nValor $400.000 mensual\r\n\r\nPagos adicionales al arrendar:\r\n\r\n$400.000.- Mes de garantia (una sola vez)\r\n\r\n$200.000.- Comisión Agente Inmobiliario (una sola vez)\r\n\r\n \r\n\r\n \r\n\r\nConsultas a:  contacto@jarrett.cl\r\nFonos 33-2418751 – 992380207\r\nVisítenos en nuestra oficina: Calle Riquelme n°384, Piso 1. San Francisco de Limache', 2, 1, 0, b'0', b'1', b'0', 0, 'http://i.imgur.com/3BCea39.jpg');
/*!40000 ALTER TABLE `propiedades` ENABLE KEYS */;

-- Dumping structure for table rurikkco_propiedades.tipos_negocios
CREATE TABLE IF NOT EXISTS `tipos_negocios` (
  `tipoNegocioId` int(11) NOT NULL AUTO_INCREMENT,
  `tipoNegocioNombre` varchar(20) NOT NULL,
  PRIMARY KEY (`tipoNegocioId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table rurikkco_propiedades.tipos_negocios: ~2 rows (approximately)
DELETE FROM `tipos_negocios`;
/*!40000 ALTER TABLE `tipos_negocios` DISABLE KEYS */;
INSERT INTO `tipos_negocios` (`tipoNegocioId`, `tipoNegocioNombre`) VALUES
	(1, 'venta'),
	(2, 'arriendo');
/*!40000 ALTER TABLE `tipos_negocios` ENABLE KEYS */;

-- Dumping structure for table rurikkco_propiedades.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` int(11) DEFAULT NULL,
  `paisId` int(11) DEFAULT NULL,
  `ciudadId` int(11) DEFAULT NULL,
  `envioDeEmailInformativa` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table rurikkco_propiedades.usuarios: ~0 rows (approximately)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

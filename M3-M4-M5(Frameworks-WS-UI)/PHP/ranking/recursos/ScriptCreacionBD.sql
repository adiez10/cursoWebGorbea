CREATE DATABASE IF NOT EXISTS `rankings` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci */;
USE `rankings`;

DROP TABLE IF EXISTS `usuario`;


-- si finalmente utilizamos el email  hay que hacerlo unique

CREATE TABLE `usuario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(200) COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'a@a.com',
  `nickname` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `fechacreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nickname_UNIQUE` (`nickname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;



DROP TABLE IF EXISTS `articulo`;

CREATE TABLE `articulo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_usuario` int(10) unsigned NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `param1` varchar(250) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '-',
  `param2` varchar(250) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '-',
  `descrip` varchar(650) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '-',
  `notageneral` float DEFAULT '1',
  `fechacreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre`),
  KEY `fk_usuario_articulo_idx` (`id_usuario`),
  CONSTRAINT `fk_usuario_articulo_idx` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;




DROP TABLE IF EXISTS `valoracion`;

CREATE TABLE `valoracion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_articulo` int(10) unsigned NOT NULL,
  `id_usuario` int(10) unsigned NOT NULL,
  `nota` int(2) NOT NULL,
  `comentarios` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fechacreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_articulo_valoracion_idx` (`id_articulo`),
  CONSTRAINT `fk_valoracion_articulo` FOREIGN KEY (`id_articulo`) REFERENCES `articulo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  KEY `fk_usuario_valoracion_idx` (`id_usuario`),
  CONSTRAINT `fk_usuario_valoracion_idx` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------
-- Sunucu:                       127.0.0.1
-- Sunucu versiyonu:             5.6.17 - MySQL Community Server (GPL)
-- Sunucu İşletim Sistemi:       Win64
-- HeidiSQL Sürüm:               9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- spagination için veritabanı yapısı dökülüyor
CREATE DATABASE IF NOT EXISTS `spagination` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `spagination`;


-- tablo yapısı dökülüyor spagination.data
CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- Dumping data for table spagination.data: ~21 rows (yaklaşık)
/*!40000 ALTER TABLE `data` DISABLE KEYS */;
INSERT INTO `data` (`id`, `title`) VALUES
	(1, 'Example 1'),
	(2, 'Example 2'),
	(3, 'Example 3'),
	(4, 'Example 4'),
	(5, 'Example 5'),
	(6, 'Example 6'),
	(7, 'Example 7'),
	(8, 'Example 8'),
	(9, 'Example 9'),
	(10, 'Example 10'),
	(11, 'Example 11'),
	(12, 'Example 12'),
	(13, 'Example 13'),
	(14, 'Example 14'),
	(15, 'Example 15'),
	(16, 'Example 16'),
	(17, 'Example 17'),
	(18, 'Example 18'),
	(19, 'Example 19'),
	(20, 'Example 20');
/*!40000 ALTER TABLE `data` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

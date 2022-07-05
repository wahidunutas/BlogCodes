/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.13-MariaDB : Database - crud_sederhana
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`crud_sederhana` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `crud_sederhana`;

/*Table structure for table `data` */

DROP TABLE IF EXISTS `data`;

CREATE TABLE `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `kelas` varchar(100) DEFAULT NULL,
  `jk` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `data` */

insert  into `data`(`id`,`name`,`kelas`,`jk`) values 
(2,'Budi Santoso','IX B','laki-laki'),
(3,'Susan','IX A','wanita'),
(4,'Rahasna','IX C','wanita');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

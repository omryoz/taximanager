/*
SQLyog Ultimate v9.31 GA
MySQL - 5.5.27 : Database - ttm
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ttm` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `ttm`;

/*Table structure for table `brands` */

DROP TABLE IF EXISTS `brands`;

CREATE TABLE `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `brands` */

/*Table structure for table `carbuysell` */

DROP TABLE IF EXISTS `carbuysell`;

CREATE TABLE `carbuysell` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `car_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `actiondate` date NOT NULL,
  `actiontype` tinyint(1) NOT NULL COMMENT '1- buy 0-sell',
  `price` int(9) NOT NULL,
  `currentKM` int(9) NOT NULL,
  `invoiceNumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `notes` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `FK_carbuysell2` (`car_id`),
  KEY `FK_carbuysell3` (`client_id`),
  CONSTRAINT `FK_carbuysell2` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_carbuysell3` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `carbuysell` */

/*Table structure for table `carexpenses` */

DROP TABLE IF EXISTS `carexpenses`;

CREATE TABLE `carexpenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `carbuysell_id` int(11) NOT NULL,
  `expensedate` date DEFAULT NULL,
  `expensetype_id` int(9) DEFAULT NULL,
  `description` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cost` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_carexpenses` (`expensetype_id`),
  KEY `FK_carexpenses2` (`carbuysell_id`),
  CONSTRAINT `FK_carexpenses` FOREIGN KEY (`expensetype_id`) REFERENCES `expensetypes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_carexpenses2` FOREIGN KEY (`carbuysell_id`) REFERENCES `carbuysell` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `carexpenses` */

/*Table structure for table `cars` */

DROP TABLE IF EXISTS `cars`;

CREATE TABLE `cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `platenumber` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `degem_id` int(4) DEFAULT NULL,
  `currentKM` int(7) DEFAULT NULL,
  `currentOwner_id` int(11) DEFAULT NULL,
  `isInStock` tinyint(1) DEFAULT '1',
  `privateNumber` varchar(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `previousOwner_id` int(11) DEFAULT NULL,
  `last_action_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_cars3` (`currentOwner_id`),
  KEY `FK_cars4` (`previousOwner_id`),
  KEY `FK_cars` (`degem_id`),
  CONSTRAINT `FK_cars` FOREIGN KEY (`degem_id`) REFERENCES `degems` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_cars3` FOREIGN KEY (`currentOwner_id`) REFERENCES `clients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_cars4` FOREIGN KEY (`previousOwner_id`) REFERENCES `clients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `cars` */

/*Table structure for table `clients` */

DROP TABLE IF EXISTS `clients`;

CREATE TABLE `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tz` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lname` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city_id` int(3) DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hasVATdiscount` tinyint(1) DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `clients` */

/*Table structure for table `degems` */

DROP TABLE IF EXISTS `degems`;

CREATE TABLE `degems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_models` (`brand_id`),
  CONSTRAINT `FK_models` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `degems` */

/*Table structure for table `expensetypes` */

DROP TABLE IF EXISTS `expensetypes`;

CREATE TABLE `expensetypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `expensetypes` */

/*Table structure for table `medallionbuysell` */

DROP TABLE IF EXISTS `medallionbuysell`;

CREATE TABLE `medallionbuysell` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `medallion_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `actiondate` date NOT NULL,
  `actiontype` tinyint(1) NOT NULL COMMENT '1- buy 0-sell',
  `price` int(9) NOT NULL,
  `invoiceNumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `notes` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `FK_medallionbuysell2` (`client_id`),
  KEY `FK_medallionbuysell3` (`medallion_id`),
  CONSTRAINT `FK_medallionbuysell2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_medallionbuysell3` FOREIGN KEY (`medallion_id`) REFERENCES `medallions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `medallionbuysell` */

/*Table structure for table `medallions` */

DROP TABLE IF EXISTS `medallions`;

CREATE TABLE `medallions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `currentOwner_id` int(11) DEFAULT NULL,
  `isInContract` tinyint(1) DEFAULT NULL,
  `isRenterOut` tinyint(1) DEFAULT NULL,
  `currentRenter_id` int(11) DEFAULT NULL,
  `previousOwner_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_medallions` (`user_id`),
  KEY `FK_medallions2` (`currentOwner_id`),
  KEY `FK_medallions3` (`currentRenter_id`),
  KEY `FK_medallions4` (`previousOwner_id`),
  CONSTRAINT `FK_medallions2` FOREIGN KEY (`currentOwner_id`) REFERENCES `clients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_medallions3` FOREIGN KEY (`currentRenter_id`) REFERENCES `clients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_medallions4` FOREIGN KEY (`previousOwner_id`) REFERENCES `clients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `medallions` */

/*Table structure for table `medallionsrent` */

DROP TABLE IF EXISTS `medallionsrent`;

CREATE TABLE `medallionsrent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `medallion_id` int(11) NOT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `rentInOrOut` tinyint(1) DEFAULT NULL COMMENT '1-in 0 - out',
  `car_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `FK_medallionsrent` (`car_id`),
  KEY `FK_medallionsrent2` (`client_id`),
  KEY `FK_medallionsrent3` (`medallion_id`),
  CONSTRAINT `FK_medallionsrent` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_medallionsrent2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_medallionsrent3` FOREIGN KEY (`medallion_id`) REFERENCES `medallions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `medallionsrent` */

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`description`) values (1,'login','Login privileges, granted after account confirmation'),(2,'admin','Administrative user, has access to everything.');

/*Table structure for table `roles_users` */

DROP TABLE IF EXISTS `roles_users`;

CREATE TABLE `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`),
  CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `roles_users` */

insert  into `roles_users`(`user_id`,`role_id`) values (1,1),(8,1),(9,1),(1,2),(8,2);

/*Table structure for table `user_identities` */

DROP TABLE IF EXISTS `user_identities`;

CREATE TABLE `user_identities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `identity` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user_identities` */

/*Table structure for table `user_tokens` */

DROP TABLE IF EXISTS `user_tokens`;

CREATE TABLE `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `user_tokens` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(127) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` char(64) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  `reset_token` char(64) NOT NULL DEFAULT '',
  `status` varchar(20) NOT NULL DEFAULT '',
  `last_failed_login` datetime NOT NULL,
  `failed_login_count` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`email`,`username`,`password`,`title`,`logins`,`last_login`,`reset_token`,`status`,`last_failed_login`,`failed_login_count`,`created`,`modified`) values (1,'test@test.com','000000000','be7106dcd75896c3bf12c27192c370156a1e4735604c200ab0b7da4fdde505a6','test',11,1355072170,'','','2012-12-07 18:28:41',0,'0000-00-00 00:00:00','2012-12-09 18:56:10'),(8,'omryoz@gmail.com','039099973','be7106dcd75896c3bf12c27192c370156a1e4735604c200ab0b7da4fdde505a6','Omry',22,1358442053,'','','2012-12-07 17:57:08',0,'2012-12-07 14:04:36','2013-01-17 19:00:53'),(9,'mosheozz@gmail.com','068477611','d142d6289542a6a53031ce8f38e974017211a541fc41bdf05cc7ab37c4a1bb7c','Oz Moniot',39,1358440951,'','','2013-01-14 18:42:16',0,'2013-01-08 20:53:01','2013-01-17 18:42:31');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

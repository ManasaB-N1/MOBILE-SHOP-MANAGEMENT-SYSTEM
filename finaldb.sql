/*
SQLyog Community v9.32 GA
MySQL - 5.1.61-community : Database - mobile_shop
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mobile_shop` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `mobile_shop`;

/*Table structure for table `admin_login` */

DROP TABLE IF EXISTS `admin_login`;

CREATE TABLE `admin_login` (
  `aid` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin_login` */

insert  into `admin_login`(`aid`,`username`,`pass`) values (1,'admin','admin');

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `cat_id` int(50) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) DEFAULT NULL COMMENT 'name of category',
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `categories` */

insert  into `categories`(`cat_id`,`category_name`) values (1,'vivo'),(2,'redmi'),(3,'samsung'),(4,'Apple');

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `pur_id` int(50) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(100) DEFAULT NULL,
  `sid` varchar(100) DEFAULT NULL,
  `shopname` varchar(100) DEFAULT NULL,
  `cname_f` varchar(100) DEFAULT NULL,
  `cname_l` varchar(100) DEFAULT NULL,
  `cemail` varchar(100) DEFAULT NULL,
  `cpho` varchar(100) DEFAULT NULL,
  `caddress` varchar(100) DEFAULT NULL,
  `f_order` varchar(100) DEFAULT '0',
  `total` varchar(100) DEFAULT NULL,
  `o_date` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT '1',
  PRIMARY KEY (`pur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `orders` */

insert  into `orders`(`pur_id`,`product_id`,`sid`,`shopname`,`cname_f`,`cname_l`,`cemail`,`cpho`,`caddress`,`f_order`,`total`,`o_date`,`status`) values (1,'1','1','Aishwarya','4','Stripes','4stripesapp@gmail.com','9591769165','#267,, Saraswathipuram','1','15000','2019-11-16 14:00:42','3'),(3,'1','1','Aishwarya','4','Stripes','4stripesapp@gmail.com','9591769165','#267,, Saraswathipuram','3',NULL,'2019-11-16 14:03:33','2'),(5,'1','1','Aishwarya','4','Stripes','4stripesapp@gmail.com','9591769165','#267,, Saraswathipuram','5',NULL,'2019-11-16 15:11:45','2'),(6,'2','1','Aishwarya','4','Stripes','4stripesapp@gmail.com','9591769165','#267,, Saraswathipuram','6',NULL,'2019-11-16 15:11:45','2'),(8,'1','1','Aishwarya','Spoorthi','M','spoo@gmail.com','8745369120','#267,, Saraswathipuram','7',NULL,'2019-11-16 15:58:52','2'),(9,'2','1','Aishwarya','Spoorthi','M','spoo@gmail.com','8745369120','#267,, Saraswathipuram','8',NULL,'2019-11-16 15:58:52','2'),(10,'1','1','Aishwarya','tamseer','t','t@gmail.com','5435435454','#267,, Saraswathipuram','9',NULL,'2019-11-16 16:11:20','2'),(11,'2','1','Aishwarya','tamseer','t','t@gmail.com','5435435454','#267,, Saraswathipuram','10',NULL,'2019-11-16 16:11:20','2'),(18,'1','1','Aishwarya','Poornima','p','pp@gmail.com','9591769165','#267,, Saraswathipuram','11',NULL,'2019-11-16 16:20:49','2'),(19,'2','1','Aishwarya','Poornima','p','pp@gmail.com','9591769165','#267,, Saraswathipuram','12',NULL,'2019-11-16 16:20:49','2');

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `p_id` int(50) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(100) DEFAULT NULL,
  `item_price` varchar(100) DEFAULT NULL,
  `item_image` varchar(500) DEFAULT NULL,
  `item_desc` varchar(200) DEFAULT NULL,
  `c_id` varchar(200) DEFAULT NULL,
  `min_stock` varchar(200) DEFAULT '3',
  `total_stock` varchar(200) DEFAULT NULL,
  `cre_date` varchar(100) DEFAULT NULL,
  `p_active` varchar(100) DEFAULT '1',
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `products` */

insert  into `products`(`p_id`,`prod_name`,`item_price`,`item_image`,`item_desc`,`c_id`,`min_stock`,`total_stock`,`cre_date`,`p_active`) values (1,'Samsung Galaxy','15000','pro1573883798.jpg','asdf','sumsung','3','91','2019-11-16 06:53:39','1'),(2,'redmi','10000','pro1573883852.jpg','lorem epsum','redmi','3','91','2019-11-16 06:57:32','1');

/*Table structure for table `shopkeeper` */

DROP TABLE IF EXISTS `shopkeeper`;

CREATE TABLE `shopkeeper` (
  `sid` int(100) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(200) DEFAULT NULL,
  `l_name` varchar(200) DEFAULT NULL,
  `s_mail` varchar(200) DEFAULT NULL,
  `s_pass` varchar(200) DEFAULT NULL,
  `s_pho` varchar(200) DEFAULT NULL,
  `s_address` varchar(200) DEFAULT NULL,
  `s_active` varchar(100) DEFAULT '1',
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `shopkeeper` */

insert  into `shopkeeper`(`sid`,`f_name`,`l_name`,`s_mail`,`s_pass`,`s_pho`,`s_address`,`s_active`) values (1,'Aishwarya','S','4stripe@gmail.com','Asdf1234','8745369120','#267,, Saraswathipuram','1'),(2,'Anoop','p','new@gmail.com','Asdf1234','5435435454','#267,, Saraswathipuram','0');

/*Table structure for table `shopkeeper_audit` */

DROP TABLE IF EXISTS `shopkeeper_audit`;

CREATE TABLE `shopkeeper_audit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `changedat` datetime DEFAULT NULL,
  `action` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `shopkeeper_audit` */

/* Trigger structure for table `shopkeeper` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `shop_t` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `shop_t` BEFORE INSERT ON `shopkeeper` FOR EACH ROW INSERT INTO `shopkeeper_audit`
 SET action = 'insert',
     email = new.s_mail,
     fname = new.f_name,
     changedat = NOW() */$$


DELIMITER ;

/* Procedure structure for procedure `alogin` */

/*!50003 DROP PROCEDURE IF EXISTS  `alogin` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `alogin`(
    in aname varchar(50), apass varchar(50))
BEGIN
select * from admin_login where username=aname and pass=apass;
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

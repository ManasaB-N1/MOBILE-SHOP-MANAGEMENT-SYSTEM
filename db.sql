/*
SQLyog Community v9.32 GA
MySQL - 5.1.61-community : Database - inventory_management
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`inventory_management` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `inventory_management`;

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `categories` */

insert  into `categories`(`cat_id`,`category_name`) values (1,'Home Utensiles'),(3,'Clothes'),(5,'Jewellery'),(6,'Vegetables');

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `pur_id` int(50) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(100) DEFAULT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `o_date` varchar(100) DEFAULT NULL,
  `f_order` varchar(100) DEFAULT NULL,
  `total` varchar(100) DEFAULT '0',
  `status` varchar(50) DEFAULT '1',
  PRIMARY KEY (`pur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `orders` */

insert  into `orders`(`pur_id`,`product_id`,`user_id`,`username`,`o_date`,`f_order`,`total`,`status`) values (1,'9','1','Aishwarya','15/11/2019','1','1600','3'),(2,'7','1','Aishwarya','15/11/2019','1','1600','3'),(3,'16','1','Aishwarya','15/11/2019','1','1600','3'),(4,'7','1','Aishwarya','15/11/2019','2','1600','3'),(5,'8','1','Aishwarya','15/11/2019','2','1600','3'),(6,'8','1','Aishwarya','15/11/2019','3','2115','3'),(7,'6','1','Aishwarya','15/11/2019','3','2115','3'),(8,'19','1','Aishwarya','15/11/2019','3','2115','3'),(9,'7','2','Spoorthi','15/11/2019','4','8250','3'),(10,'12','2','Spoorthi','15/11/2019','4','8250','3'),(11,'12','2','Spoorthi','15/11/2019','4','8250','3'),(12,'12','2','Spoorthi','15/11/2019','4','8250','3'),(13,'12','2','Spoorthi','15/11/2019','7','0','2'),(14,'12','2','Spoorthi','15/11/2019','7','0','2'),(15,'13','2','Spoorthi','15/11/2019','7','0','2'),(16,'19','2','Spoorthi','15/11/2019','7','0','2'),(17,'1','2','Spoorthi','15/11/2019',NULL,'0','1');

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `p_id` int(50) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(200) DEFAULT NULL,
  `item_price` varchar(200) DEFAULT NULL,
  `item_image` varchar(500) DEFAULT NULL,
  `item_desc` varchar(200) DEFAULT NULL,
  `c_id` varchar(100) DEFAULT NULL,
  `cre_date` varchar(100) DEFAULT NULL,
  `min_stock` varchar(100) DEFAULT '2',
  `total_stock` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `products` */

insert  into `products`(`p_id`,`prod_name`,`item_price`,`item_image`,`item_desc`,`c_id`,`cre_date`,`min_stock`,`total_stock`) values (1,'demo','320','pro1573800150.jpg','300','1','2019-10-31 08:51:48','2','100'),(6,'cotton formals','1200','pro1572518658.jpg','pure cotton fabrics','3','2019-10-31 11:44:18','2','50'),(7,'Bangles','750','pro1572526523.jpg','pearls with stone','5','2019-10-31 13:55:23','2','50'),(8,'Earings','850','pro1572526660.jpg','Buy 2 Get One free','5','2019-10-31 13:56:20','2','50'),(9,'jeans (Men)','1750','pro1572584702.jpg','--','3','2019-11-01 06:05:02','2','50'),(10,'children wear','550','pro1572588145.jpg','demo','3','2019-11-01 07:02:25','2','50'),(11,'t-shirt','920','pro1572588179.jpg','demo','3','2019-11-01 07:02:59','2','50'),(12,'frock','2500','pro1572588407.jpg','demo','3','2019-11-01 07:06:47','2','49'),(13,'men casuals','3250','pro1572589344.jpg','demo demo','3','2019-11-01 07:07:39','2','49'),(15,'Capsicom','80','pro1572591653.jpg','lorem','6','2019-11-01 08:00:53','2','50'),(16,'Cabbage','95','pro1572591678.jpg','lorem','6','2019-11-01 08:01:18','2','50'),(17,'Onion','75','pro1572591757.jpg','lorem','6','2019-11-01 08:02:37','2','50'),(18,'Carrot','55','pro1572591864.jpg','lorem','6','2019-11-01 08:04:24','2','50'),(19,'tomato','65','pro1572591893.jpg','lorem','6','2019-11-01 08:04:53','2','49');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `uid` int(50) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `u_email` varchar(100) DEFAULT NULL,
  `u_pass` varchar(100) DEFAULT NULL,
  `reg_date` varchar(100) DEFAULT NULL,
  `isactive` varchar(100) DEFAULT '1',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`uid`,`first_name`,`last_name`,`u_email`,`u_pass`,`reg_date`,`isactive`) values (1,'Aishwarya','S','aishwaryasshetty@yahoo.com','1234asdfA','2019-10-31 11:43:31','1'),(2,'Spoorthi','Theertha','spoo@gmail.com','1234asdfA','2019-10-31 18:34:23','1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

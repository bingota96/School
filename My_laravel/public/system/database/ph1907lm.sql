/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : ph1907lm

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-10-04 19:16:23
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `tbl_brand`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_brand`;
CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) NOT NULL,
  `date_create` datetime DEFAULT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_brand
-- ----------------------------
INSERT INTO tbl_brand VALUES ('1', 'Nike', '2019-09-20 19:32:19');
INSERT INTO tbl_brand VALUES ('2', 'Adidas', '2019-09-20 19:32:37');
INSERT INTO tbl_brand VALUES ('3', 'Merrel', '2019-09-20 19:40:00');
INSERT INTO tbl_brand VALUES ('4', 'Gucci', '2019-09-20 19:40:10');
INSERT INTO tbl_brand VALUES ('5', 'Skechers', '2019-09-20 19:40:20');

-- ----------------------------
-- Table structure for `tbl_category`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE `tbl_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  `cat_status` tinyint(4) DEFAULT 1,
  `date_create` datetime DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_category
-- ----------------------------
INSERT INTO tbl_category VALUES ('1', 'men', '1', '2019-09-20 20:33:57');
INSERT INTO tbl_category VALUES ('2', 'women', '1', '2019-09-20 20:34:05');

-- ----------------------------
-- Table structure for `tbl_checkid`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_checkid`;
CREATE TABLE `tbl_checkid` (
  `chek_id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  PRIMARY KEY (`chek_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_checkid
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_color`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_color`;
CREATE TABLE `tbl_color` (
  `color_id` int(11) NOT NULL AUTO_INCREMENT,
  `color_name` varchar(255) NOT NULL,
  `date_create` datetime DEFAULT NULL,
  PRIMARY KEY (`color_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_color
-- ----------------------------
INSERT INTO tbl_color VALUES ('1', 'Black', '2019-09-20 19:43:28');
INSERT INTO tbl_color VALUES ('2', 'White', '2019-09-20 19:43:36');
INSERT INTO tbl_color VALUES ('3', 'Blue', '2019-09-20 19:43:46');
INSERT INTO tbl_color VALUES ('4', 'Red', '2019-09-20 19:43:53');
INSERT INTO tbl_color VALUES ('5', 'Green', '2019-09-20 19:43:59');
INSERT INTO tbl_color VALUES ('6', 'Grey', '2019-09-20 19:44:06');
INSERT INTO tbl_color VALUES ('7', 'Orange', '2019-09-20 19:44:14');
INSERT INTO tbl_color VALUES ('8', 'Cream', '2019-09-20 19:44:21');
INSERT INTO tbl_color VALUES ('9', 'Brown', '2019-09-20 19:44:31');

-- ----------------------------
-- Table structure for `tbl_material`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_material`;
CREATE TABLE `tbl_material` (
  `material_id` int(11) NOT NULL AUTO_INCREMENT,
  `material_name` varchar(255) NOT NULL,
  `date_create` datetime DEFAULT NULL,
  PRIMARY KEY (`material_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_material
-- ----------------------------
INSERT INTO tbl_material VALUES ('1', 'Leather', '2019-09-20 19:44:55');
INSERT INTO tbl_material VALUES ('2', 'Suede', '2019-09-20 19:45:07');

-- ----------------------------
-- Table structure for `tbl_orderdetail`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_orderdetail`;
CREATE TABLE `tbl_orderdetail` (
  `order_detailid` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `date_create` datetime DEFAULT NULL,
  PRIMARY KEY (`order_detailid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_orderdetail
-- ----------------------------
INSERT INTO tbl_orderdetail VALUES ('1', '1', '4', '2', '20', '1', '2019-10-04 14:15:10');
INSERT INTO tbl_orderdetail VALUES ('2', '1', '5', '2', '30', '1', '2019-10-04 14:15:10');
INSERT INTO tbl_orderdetail VALUES ('3', '2', '4', '2', '20', '1', '2019-10-04 14:15:46');
INSERT INTO tbl_orderdetail VALUES ('4', '2', '5', '2', '30', '1', '2019-10-04 14:15:46');

-- ----------------------------
-- Table structure for `tbl_orders`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_orders`;
CREATE TABLE `tbl_orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `second_address` varchar(255) DEFAULT NULL,
  `city` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` char(10) NOT NULL,
  `total` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date_create` datetime DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_orders
-- ----------------------------
INSERT INTO tbl_orders VALUES ('1', 'Demo', 'Test', 'Demo', 'Demo', 'Demo', 'demo@demo.demo', '0986421127', '100', '1', '2019-10-04 14:15:10');
INSERT INTO tbl_orders VALUES ('2', 'Demo', 'Test', 'Äáº¿n muá»™n', '', 'A', 'doanvannang', '0986421127', '100', '1', '2019-10-04 14:15:46');

-- ----------------------------
-- Table structure for `tbl_product`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE `tbl_product` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `style_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `pro_price` int(11) NOT NULL,
  `pro_width` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `date_create` datetime DEFAULT NULL,
  `sale_off` varchar(255) DEFAULT '',
  `material_id` int(11) NOT NULL,
  `tech_id` int(11) NOT NULL,
  `pro_image` varchar(255) NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_product
-- ----------------------------
INSERT INTO tbl_product VALUES ('1', 'Nike1', '1', '1', '1', '1', '1', '20', '0', '123', null, '2019-09-20 15:58:19', null, '2', '1', 'uploads/img_bg_1.jpg');
INSERT INTO tbl_product VALUES ('2', 'Nike2', '1', '2', '2', '2', '2', '30', '0', '123', null, '2019-09-20 15:59:28', null, '1', '2', 'uploads/item-1.jpg');
INSERT INTO tbl_product VALUES ('3', 'Nike3', '1', '3', '3', '3', '2', '40', '0', '123', null, '2019-09-20 15:59:56', null, '2', '1', 'uploads/img_bg_1.jpg');
INSERT INTO tbl_product VALUES ('4', 'Nike4', '2', '1', '4', '4', '4', '20', '0', '123', null, '2019-09-20 16:00:39', null, '2', '3', 'uploads/img_bg_3.jpg');
INSERT INTO tbl_product VALUES ('5', 'Nike5', '2', '2', '1', '3', '3', '30', '0', '123', null, '2019-09-20 16:01:02', null, '2', '3', 'uploads/item-4.jpg');
INSERT INTO tbl_product VALUES ('6', 'Nike6', '2', '3', '2', '4', '2', '50', '0', '123', null, '2019-09-20 16:01:25', null, '1', '2', 'uploads/item-10.jpg');
INSERT INTO tbl_product VALUES ('7', 'Nike7', '2', '1', '3', '4', '4', '60', '0', '123', null, '2019-09-20 16:01:57', null, '2', '2', 'uploads/item-8.jpg');
INSERT INTO tbl_product VALUES ('8', 'Nike8', '2', '2', '4', '4', '2', '20', '0', '123', null, '2019-09-20 16:02:28', null, '2', '2', 'uploads/item-6.jpg');
INSERT INTO tbl_product VALUES ('9', 'Nike9', '2', '3', '1', '3', '3', '10', '0', '123', null, '2019-09-20 16:02:51', null, '2', '2', 'uploads/item-10.jpg');
INSERT INTO tbl_product VALUES ('10', 'Nike10', '1', '1', '2', '4', '1', '30', '0', '123', null, '2019-09-20 16:03:13', null, '1', '2', 'uploads/item-15.jpg');
INSERT INTO tbl_product VALUES ('11', 'Nike11', '1', '2', '3', '4', '2', '50', '0', '123', null, '2019-09-20 16:03:34', null, '2', '3', 'uploads/item-14.jpg');
INSERT INTO tbl_product VALUES ('12', 'Nike12', '2', '3', '4', '4', '3', '60', '0', '123', null, '2019-09-20 16:03:54', null, '1', '2', 'uploads/item-16.jpg');
INSERT INTO tbl_product VALUES ('13', 'Nike13', '1', '1', '1', '2', '5', '40', '0', '123', null, '2019-09-20 16:04:12', null, '2', '1', 'uploads/item-11.jpg');
INSERT INTO tbl_product VALUES ('14', 'Nike14', '1', '2', '2', '3', '7', '80', '0', '132', null, '2019-09-20 16:04:31', null, '1', '2', 'uploads/item-7.jpg');
INSERT INTO tbl_product VALUES ('15', 'Nike15', '1', '3', '3', '5', '5', '90', '0', '132', null, '2019-09-20 16:04:52', null, '2', '2', 'uploads/item-11.jpg');
INSERT INTO tbl_product VALUES ('16', 'Nike16', '2', '1', '4', '1', '1', '100', '0', '135', null, '2019-09-25 16:46:33', null, '1', '3', 'uploads/item-11.jpg');
INSERT INTO tbl_product VALUES ('17', 'Nike17', '1', '1', '1', '1', '1', '200', '0', '136', null, '2019-09-29 23:17:27', '', '1', '1', 'uploads/item-7.jpg');
INSERT INTO tbl_product VALUES ('18', 'Nike18', '2', '2', '2', '2', '2', '251', '0', '136', null, '2019-09-29 23:18:13', '', '2', '2', 'uploads/item-14.jpg');
INSERT INTO tbl_product VALUES ('19', 'Nike19', '1', '3', '3', '3', '3', '265', '0', '123', null, '2019-09-29 23:18:37', '', '1', '3', 'uploads/item-16.jpg');
INSERT INTO tbl_product VALUES ('20', 'Nike20', '2', '4', '4', '4', '4', '126', '0', '065', null, '2019-09-29 23:19:02', '', '2', '1', 'uploads/item-15.jpg');

-- ----------------------------
-- Table structure for `tbl_size`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_size`;
CREATE TABLE `tbl_size` (
  `size_id` int(11) NOT NULL AUTO_INCREMENT,
  `size` varchar(255) NOT NULL,
  `date_create` datetime DEFAULT NULL,
  PRIMARY KEY (`size_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_size
-- ----------------------------
INSERT INTO tbl_size VALUES ('1', '35', '2019-09-20 19:40:49');
INSERT INTO tbl_size VALUES ('2', '36', '2019-09-20 19:41:01');
INSERT INTO tbl_size VALUES ('3', '37', '2019-09-20 19:41:08');
INSERT INTO tbl_size VALUES ('4', '38', '2019-09-20 19:41:14');
INSERT INTO tbl_size VALUES ('5', '39', '2019-09-20 19:41:20');
INSERT INTO tbl_size VALUES ('6', '40', '2019-09-20 19:41:26');
INSERT INTO tbl_size VALUES ('7', '41', '2019-09-20 19:41:35');
INSERT INTO tbl_size VALUES ('8', '42', '2019-09-20 19:41:41');
INSERT INTO tbl_size VALUES ('9', '43', '2019-09-20 19:41:49');

-- ----------------------------
-- Table structure for `tbl_style`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_style`;
CREATE TABLE `tbl_style` (
  `style_id` int(11) NOT NULL AUTO_INCREMENT,
  `style_name` varchar(255) NOT NULL,
  `date_create` datetime DEFAULT NULL,
  PRIMARY KEY (`style_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_style
-- ----------------------------
INSERT INTO tbl_style VALUES ('1', 'Slip Ons', '2019-09-20 19:42:33');
INSERT INTO tbl_style VALUES ('2', 'Boots', '2019-09-20 19:42:40');
INSERT INTO tbl_style VALUES ('3', 'Sandals', '2019-09-20 19:42:50');
INSERT INTO tbl_style VALUES ('4', 'Lace Ups', '2019-09-20 19:43:01');
INSERT INTO tbl_style VALUES ('5', 'Oxfords', '2019-09-20 19:43:09');

-- ----------------------------
-- Table structure for `tbl_tech`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_tech`;
CREATE TABLE `tbl_tech` (
  `tech_id` int(11) NOT NULL,
  `tech_name` varchar(255) NOT NULL,
  `date_create` datetime DEFAULT NULL,
  PRIMARY KEY (`tech_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_tech
-- ----------------------------
INSERT INTO tbl_tech VALUES ('1', 'BioBevel', '2019-09-20 19:45:25');
INSERT INTO tbl_tech VALUES ('2', 'Groove', '2019-09-20 19:45:36');
INSERT INTO tbl_tech VALUES ('3', 'FlexBevel', '2019-09-20 19:45:46');

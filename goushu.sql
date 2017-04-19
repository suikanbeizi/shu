/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : goushu

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-04-19 17:41:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for book
-- ----------------------------
DROP TABLE IF EXISTS `book`;
CREATE TABLE `book` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(255) NOT NULL,
  `book_anthor` varchar(255) NOT NULL,
  `book_img` varchar(255) DEFAULT NULL,
  `book_price` decimal(10,0) NOT NULL,
  `book_chubanshe` varchar(255) DEFAULT NULL,
  `book_time` date DEFAULT NULL,
  `book_zs` varchar(255) DEFAULT NULL,
  `book_fenlei` varchar(255) DEFAULT NULL,
  `book_num` int(11) DEFAULT NULL,
  `book_des` longtext,
  `book_pingfen` varchar(255) DEFAULT NULL,
  `book_csnum` int(11) DEFAULT NULL,
  `book_bh` int(11) DEFAULT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book
-- ----------------------------
INSERT INTO `book` VALUES ('1', '功夫婆媳', '武瑶', 'assets/images/book.jpg', '56', '百花洲文艺出版社', '2015-10-01', '100', '文艺', '94', '这本书很好啊', '7', '50', null);
INSERT INTO `book` VALUES ('2', '在最好的年华遇见你', '张诗群', 'assets/images/book.jpg', '66', '长江文艺出版社', '2017-04-13', '200', '文艺', '127', '浪漫古典行·素心系列，选取了民国风华绝代的人物为主要对象。此为名媛卷，写了沈从文与张兆和、徐志摩与陆小曼等五对民国伉俪。无论时空如何改变，爱情是永恒的话题，感情的世界，没有是非。', '8', '21', null);
INSERT INTO `book` VALUES ('3', '怕麻烦你就输了', '猫的熊', 'assets/images/book.jpg', '50', '民主与建设出版社', '2017-04-13', '50', '生活', '199', '怕麻烦，只会越来越麻烦。那些怕麻烦的人一直在逃避麻烦、闪躲麻烦，但是到后来，麻烦却愈滚愈大。职场当中，有很多人都非常怕麻烦，不是怕麻烦自己，就是怕麻烦别人。于是，有需要帮助的时候，不敢开口，不敢请教，结果不是做事不成功，就是做错了事。', '6', '50', null);
INSERT INTO `book` VALUES ('9', '好书', '贝子', 'assets/upload/logo_bg.png', '150', '哈尔滨', '2017-04-13', '100', '教育', '200', '好书', '6', null, null);

-- ----------------------------
-- Table structure for car
-- ----------------------------
DROP TABLE IF EXISTS `car`;
CREATE TABLE `car` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `book_num` int(11) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of car
-- ----------------------------
INSERT INTO `car` VALUES ('4', '2', '6', '1', '66');
INSERT INTO `car` VALUES ('5', '1', '2', '1', '55');

-- ----------------------------
-- Table structure for dingdan
-- ----------------------------
DROP TABLE IF EXISTS `dingdan`;
CREATE TABLE `dingdan` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `d_user_id` int(11) DEFAULT NULL,
  `d_book_id` int(11) DEFAULT NULL,
  `d_address_id` varchar(255) DEFAULT NULL,
  `d_time` datetime DEFAULT NULL,
  `d_num` int(11) DEFAULT NULL,
  `d_price` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dingdan
-- ----------------------------
INSERT INTO `dingdan` VALUES ('1', '6', '1', '5', '2017-04-18 00:00:00', '1', '55');
INSERT INTO `dingdan` VALUES ('5', '6', '2', '5', '2017-04-18 04:43:37', '1', '66');
INSERT INTO `dingdan` VALUES ('6', '6', '3', '5', '2017-04-18 04:43:44', '1', '50');
INSERT INTO `dingdan` VALUES ('7', '6', '1', '5', '2017-04-18 06:33:25', '1', '55');

-- ----------------------------
-- Table structure for sh_address
-- ----------------------------
DROP TABLE IF EXISTS `sh_address`;
CREATE TABLE `sh_address` (
  `address_id` int(11) NOT NULL AUTO_INCREMENT,
  `sh_name` varchar(255) DEFAULT NULL,
  `sh_diqu` varchar(255) DEFAULT NULL,
  `sh_jiedao` varchar(255) DEFAULT NULL,
  `sh_youbian` varchar(255) DEFAULT NULL,
  `sh_tel` varchar(255) DEFAULT NULL,
  `user_id` bigint(11) DEFAULT NULL,
  PRIMARY KEY (`address_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sh_address
-- ----------------------------
INSERT INTO `sh_address` VALUES ('5', '隋侃', '杭州', '转塘街道', '15000', '17826825210', '6');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  `user_city` varchar(255) DEFAULT NULL,
  `user_sex` varchar(255) DEFAULT NULL,
  `user_shenfen` varchar(255) DEFAULT NULL,
  `user_des` longtext,
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '隋侃a', 'suikan521', '2017-04-11 06:19:26', '杭州', '男', '上班', '好人111', '1');
INSERT INTO `user` VALUES ('2', 'admin', 'admin', '0000-00-00 00:00:00', null, null, null, null, '2');
INSERT INTO `user` VALUES ('6', '隋侃', 'suikan521', '2017-04-17 01:40:08', '', '男', '', '', '1');

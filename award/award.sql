/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50619
Source Host           : localhost:3306
Source Database       : award

Target Server Type    : MYSQL
Target Server Version : 50619
File Encoding         : 65001

Date: 2015-08-25 00:16:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `award_content`
-- ----------------------------
DROP TABLE IF EXISTS `award_content`;
CREATE TABLE `award_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `award_state` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of award_content
-- ----------------------------
INSERT INTO `award_content` VALUES ('1', '0');

-- ----------------------------
-- Table structure for `award_user`
-- ----------------------------
DROP TABLE IF EXISTS `award_user`;
CREATE TABLE `award_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of award_user
-- ----------------------------
INSERT INTO `award_user` VALUES ('1', '', '0');
INSERT INTO `award_user` VALUES ('2', '', '0');
INSERT INTO `award_user` VALUES ('3', '', '0');
INSERT INTO `award_user` VALUES ('4', '', '0');
INSERT INTO `award_user` VALUES ('5', '', '0');

/*
 Navicat Premium Data Transfer

 Source Server         : localhost_8889
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:8889
 Source Schema         : test

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 22/10/2020 11:12:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for shop_user
-- ----------------------------
DROP TABLE IF EXISTS `shop_user`;
CREATE TABLE `shop_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `username` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '用户名',
  `password` char(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '密码',
  `sex` tinyint(2) NOT NULL DEFAULT '0' COMMENT '0为''男'',1为''女''',
  `age` tinyint(4) NOT NULL COMMENT '年龄',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of shop_user
-- ----------------------------
BEGIN;
INSERT INTO `shop_user` VALUES (2, '王五23', '456', 1, 42);
INSERT INTO `shop_user` VALUES (3, '赵六', '789', 0, 43);
INSERT INTO `shop_user` VALUES (4, '田七22', '123', 1, 22);
INSERT INTO `shop_user` VALUES (5, '牛逼', '356', 0, 23);
INSERT INTO `shop_user` VALUES (6, '克烈', '123123', 0, 20);
INSERT INTO `shop_user` VALUES (8, '牛逼哈哈哈', 'e10adc3949ba59abbe56e057f20f883e', 0, 20);
INSERT INTO `shop_user` VALUES (9, '鬼才2', 'feccffbad22d1704ceccc4c4cf575c69', 0, 23);
INSERT INTO `shop_user` VALUES (10, '牛逼33', '13211', 0, 26);
INSERT INTO `shop_user` VALUES (11, '高材生', '231', 0, 47);
INSERT INTO `shop_user` VALUES (12, '宋词', '2131', 0, 49);
INSERT INTO `shop_user` VALUES (13, '唐诗', '2131', 0, 50);
INSERT INTO `shop_user` VALUES (14, '人才', '3211', 0, 51);
INSERT INTO `shop_user` VALUES (15, '牛逼 ', '3232', 0, 52);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

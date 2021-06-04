/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 50719
 Source Host           : localhost:3306
 Source Schema         : job_job

 Target Server Type    : MySQL
 Target Server Version : 50719
 File Encoding         : 65001

 Date: 04/06/2021 20:25:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for application
-- ----------------------------
DROP TABLE IF EXISTS `application`;
CREATE TABLE `application`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NULL DEFAULT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phone` varchar(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gender` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `experience` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `document` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` int(1) NOT NULL,
  `created_on` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of application
-- ----------------------------
INSERT INTO `application` VALUES (1, 1, 'Supriatna', 'gurunpasir@gmail.com', '0812345678990', 'L', 'No Document', 'default.pdf', 1, '2021-06-04 13:39:09');
INSERT INTO `application` VALUES (2, 2, 'Abdul', 'gurunsahara@gmail.com', '0812345678990', 'P', 'No Document', 'default.pdf', 0, '2021-06-04 13:39:09');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `role` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `avatar` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'admin', 'admin', 'Admin Job Job', 'admin@jobjob.com', '$2y$10$SwhgQrsd08ZEh/9gJ8k77uW9FOVN28hdPSQngJ/0kPKQmyZgAZ0bG', 'default.png');

SET FOREIGN_KEY_CHECKS = 1;

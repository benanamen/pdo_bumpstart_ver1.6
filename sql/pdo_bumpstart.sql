/*

 Source Server         : Xampp Localhost
 Source Server Type    : MySQL
 Source Server Version : 100113
 Source Host           : localhost:3306
 Source Schema         : pdo_bumpstart

 Target Server Type    : MySQL
 Target Server Version : 100113
 File Encoding         : 65001

 Date: 30/12/2017 20:26:10
*/

SET NAMES utf8mb4;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `password` binary(60) NOT NULL DEFAULT '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0',
  `name_first` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `name_middle` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `name_last` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE,
  UNIQUE INDEX `email`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'user1', 0x24326124313224457759466F776D4D6F4C373459353452476C7A6A6C7550793056356F41724B3249524A72746C714E32476A717A362E33702E2E6579, 'Bob', 'Alan', 'Smith', 'alan@smith.com');
INSERT INTO `users` VALUES (2, 'user2', 0x2432612431322431766D4B516E6B76443250647A6F36416C65673777652E505A56364F582E433762616F57316E5936764846636968324454544C5669, 'Bo', NULL, 'Diddley', 'bo@diddley.com');
INSERT INTO `users` VALUES (3, 'user3', 0x24326124313224456462744978786B453962397A4739594C316F66774F4E716A7176382F6B4B4868387568484D63752F576F375865416E4458695436, 'Bart', 'J.', 'Simpson', 'bart@simpsons.com');

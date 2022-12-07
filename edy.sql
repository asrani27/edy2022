/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50734 (5.7.34)
 Source Host           : localhost:3306
 Source Schema         : edy

 Target Server Type    : MySQL
 Target Server Version : 50734 (5.7.34)
 File Encoding         : 65001

 Date: 07/12/2022 13:42:53
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for jurusan
-- ----------------------------
DROP TABLE IF EXISTS `jurusan`;
CREATE TABLE `jurusan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jurusan
-- ----------------------------
BEGIN;
INSERT INTO `jurusan` (`id`, `nama`) VALUES (1, 'D3 Keperawatan');
INSERT INTO `jurusan` (`id`, `nama`) VALUES (2, 'S1 Administrasi RS');
COMMIT;

-- ----------------------------
-- Table structure for pendaftar
-- ----------------------------
DROP TABLE IF EXISTS `pendaftar`;
CREATE TABLE `pendaftar` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jkel` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `asal_sekolah` varchar(255) DEFAULT NULL,
  `jurusan_sekolah` varchar(255) DEFAULT NULL,
  `tahun_lulus` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `nama_ayah` varchar(255) DEFAULT NULL,
  `pekerjaan_ayah` varchar(255) DEFAULT NULL,
  `telp_ayah` varchar(255) DEFAULT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `pekerjaan_ibu` varchar(255) DEFAULT NULL,
  `telp_ibu` varchar(255) DEFAULT NULL,
  `rekomendasi` varchar(255) DEFAULT NULL,
  `alamat` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tt` varchar(255) DEFAULT NULL,
  `tk` varchar(255) DEFAULT NULL,
  `hasil` varchar(255) DEFAULT NULL,
  `foto` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pendaftar
-- ----------------------------
BEGIN;
INSERT INTO `pendaftar` (`id`, `nama`, `jurusan_id`, `tempat_lahir`, `tanggal_lahir`, `jkel`, `agama`, `asal_sekolah`, `jurusan_sekolah`, `tahun_lulus`, `telp`, `nama_ayah`, `pekerjaan_ayah`, `telp_ayah`, `nama_ibu`, `pekerjaan_ibu`, `telp_ibu`, `rekomendasi`, `alamat`, `created_at`, `updated_at`, `user_id`, `tt`, `tk`, `hasil`, `foto`) VALUES (5, 'adi', 1, 'adi', '2022-12-06', 'L', 'Islam', 'jkh', 'kjh', 'kjh', 'jk', 'hkjh', 'kj', 'hkj', 'Khadijah', 'IRT', '09876567', 'hkj', '-', '2022-12-06 02:21:02', '2022-12-07 00:58:02', 8, 'LULUS', 'TIDAK LULUS', 'LULUS', 'FOTO_adi.png');
INSERT INTO `pendaftar` (`id`, `nama`, `jurusan_id`, `tempat_lahir`, `tanggal_lahir`, `jkel`, `agama`, `asal_sekolah`, `jurusan_sekolah`, `tahun_lulus`, `telp`, `nama_ayah`, `pekerjaan_ayah`, `telp_ayah`, `nama_ibu`, `pekerjaan_ibu`, `telp_ibu`, `rekomendasi`, `alamat`, `created_at`, `updated_at`, `user_id`, `tt`, `tk`, `hasil`, `foto`) VALUES (7, 'kjgjk', 2, 'hjk', '2022-12-05', 'L', 'Kristen', 'kjh', 'kjh', 'kjh', 'kjh', 'jkh', 'kjh', 'kjh', 'kjh', 'kjh', 'kjh', 'kjh', 'jh', '2022-12-06 03:46:29', '2022-12-06 04:06:00', 10, 'LULUS', 'LULUS', 'LULUS', NULL);
INSERT INTO `pendaftar` (`id`, `nama`, `jurusan_id`, `tempat_lahir`, `tanggal_lahir`, `jkel`, `agama`, `asal_sekolah`, `jurusan_sekolah`, `tahun_lulus`, `telp`, `nama_ayah`, `pekerjaan_ayah`, `telp_ayah`, `nama_ibu`, `pekerjaan_ibu`, `telp_ibu`, `rekomendasi`, `alamat`, `created_at`, `updated_at`, `user_id`, `tt`, `tk`, `hasil`, `foto`) VALUES (8, 'andi', 1, '-', '2000-11-27', 'L', 'Islam', 'i', 'iii', 'i', 'i', 'i', 'i', 'i', 'i', 'i', 'i', 'i', '-', '2022-12-07 00:46:16', '2022-12-07 00:56:31', 11, NULL, NULL, NULL, 'FOTO_andi.png');
INSERT INTO `pendaftar` (`id`, `nama`, `jurusan_id`, `tempat_lahir`, `tanggal_lahir`, `jkel`, `agama`, `asal_sekolah`, `jurusan_sekolah`, `tahun_lulus`, `telp`, `nama_ayah`, `pekerjaan_ayah`, `telp_ayah`, `nama_ibu`, `pekerjaan_ibu`, `telp_ibu`, `rekomendasi`, `alamat`, `created_at`, `updated_at`, `user_id`, `tt`, `tk`, `hasil`, `foto`) VALUES (9, 'sdf', 1, 'asd', '2022-12-06', 'P', 'Kristen', 'asd', 'asd', 'kjhkj', 'h', 'kjh', 'kjhk', 'j', 'kjhk', 'jh', 'kjhk', 'jh', 'sdf', '2022-12-07 00:57:30', '2022-12-07 00:57:30', 12, NULL, NULL, NULL, 'FOTO_budi.png');
COMMIT;

-- ----------------------------
-- Table structure for role_users
-- ----------------------------
DROP TABLE IF EXISTS `role_users`;
CREATE TABLE `role_users` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  UNIQUE KEY `role_users_user_id_role_id_unique` (`user_id`,`role_id`) USING BTREE,
  KEY `role_users_role_id_foreign` (`role_id`) USING BTREE,
  CONSTRAINT `role_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of role_users
-- ----------------------------
BEGIN;
INSERT INTO `role_users` (`user_id`, `role_id`) VALUES (1, 1);
INSERT INTO `role_users` (`user_id`, `role_id`) VALUES (8, 2);
INSERT INTO `role_users` (`user_id`, `role_id`) VALUES (10, 2);
INSERT INTO `role_users` (`user_id`, `role_id`) VALUES (11, 2);
INSERT INTO `role_users` (`user_id`, `role_id`) VALUES (12, 2);
COMMIT;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
BEGIN;
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (1, 'superadmin', '2022-12-06 09:25:11', '2022-12-06 09:25:11');
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (2, 'user', '2022-12-06 09:25:13', '2022-12-06 09:25:13');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_username_unique` (`username`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (1, 'Superadmin', NULL, 'superadmin', '2022-12-07 08:40:57', '$2y$10$EWvbqYJVXAtHOlyX/IR9bOQ7EvE2yQ05gBxZmiFX.BkUYiyo8XHtS', 'm6TJB7rpSarshYKRjGBWA52nUHb8Jplvx3eaDtOhR6bq3Vk6UKNE51Yr3G14', '2022-12-07 08:40:57', '2022-12-07 08:40:57');
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (8, 'adi', 'adi@gmail.com', 'adi', '2022-12-06 10:21:02', '$2y$10$BtxNJj1u7xh5xH0BIvIgXu8SGA8PNTvUTcEvpsvEuZbapO9htcN2S', NULL, '2022-12-06 02:21:02', '2022-12-06 02:21:02');
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (10, 'kjgjk', 'abe@gmail.com', 'abe', '2022-12-06 11:46:29', '$2y$10$jW.swugTJ0MBQaLfJmwTJu1cBAm2qb4gQp0D9p2RcyYQ4apMCV8US', NULL, '2022-12-06 03:46:29', '2022-12-06 03:46:29');
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (11, 'andi', 'andi@gmail.com', 'andi', '2022-12-07 08:46:16', '$2y$10$QgOO/N/J.d0kGukW7LutZO.O7ouprURsZiwZ4MGkdpYYAKofVa0cS', NULL, '2022-12-07 00:46:16', '2022-12-07 00:46:16');
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (12, 'sdf', 'budi@gmail.com', 'budi', '2022-12-07 08:57:30', '$2y$10$SLOkP6/xE//da/qMgBC.S.kJmb3Ls246RhNr7kfp64wgFSHP8PEUW', NULL, '2022-12-07 00:57:30', '2022-12-07 00:57:30');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

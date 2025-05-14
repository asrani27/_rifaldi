/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50739 (5.7.39)
 Source Host           : localhost:3306
 Source Schema         : _kamal

 Target Server Type    : MySQL
 Target Server Version : 50739 (5.7.39)
 File Encoding         : 65001

 Date: 14/05/2025 13:30:13
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for dataumum
-- ----------------------------
DROP TABLE IF EXISTS `dataumum`;
CREATE TABLE `dataumum` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tahun` varchar(255) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `npsn` varchar(255) DEFAULT NULL,
  `nss` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `desa` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kabupaten` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `nama_kepsek` varchar(255) DEFAULT NULL,
  `nip_kepsek` varchar(255) DEFAULT NULL,
  `nama_ketua` varchar(255) DEFAULT NULL,
  `nama_bendahara` varchar(255) DEFAULT NULL,
  `nip_bendahara` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dataumum
-- ----------------------------
BEGIN;
INSERT INTO `dataumum` (`id`, `tahun`, `nama`, `npsn`, `nss`, `jumlah`, `alamat`, `telp`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `nama_kepsek`, `nip_kepsek`, `nama_ketua`, `nama_bendahara`, `nip_bendahara`, `created_at`, `updated_at`) VALUES (1, '2014', 'SMP 2', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Wahid', '9876567', '-', '-', '-', '2025-05-13 07:55:17', '2025-05-13 07:58:02');
COMMIT;

-- ----------------------------
-- Table structure for komponen
-- ----------------------------
DROP TABLE IF EXISTS `komponen`;
CREATE TABLE `komponen` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of komponen
-- ----------------------------
BEGIN;
INSERT INTO `komponen` (`id`, `nama`, `jenis`, `created_at`, `updated_at`) VALUES (1, 'komponen A', 'jenis', '2025-05-13 04:54:27', '2025-05-13 04:56:34');
INSERT INTO `komponen` (`id`, `nama`, `jenis`, `created_at`, `updated_at`) VALUES (3, 'Komponen B', 'jenis B', '2025-05-13 05:24:11', '2025-05-13 05:24:11');
COMMIT;

-- ----------------------------
-- Table structure for pembiayaan
-- ----------------------------
DROP TABLE IF EXISTS `pembiayaan`;
CREATE TABLE `pembiayaan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `komponen_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pembiayaan
-- ----------------------------
BEGIN;
INSERT INTO `pembiayaan` (`id`, `nama`, `komponen_id`, `created_at`, `updated_at`) VALUES (1, 'Check', 1, '2025-05-13 05:23:23', '2025-05-13 05:24:19');
COMMIT;

-- ----------------------------
-- Table structure for program
-- ----------------------------
DROP TABLE IF EXISTS `program`;
CREATE TABLE `program` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of program
-- ----------------------------
BEGIN;
INSERT INTO `program` (`id`, `nama`, `jenis`, `created_at`, `updated_at`) VALUES (1, 'program A', 'tinggi', '2025-05-13 04:56:01', '2025-05-13 04:56:08');
COMMIT;

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `komponen_id` int(11) DEFAULT NULL,
  `pembiayaan_id` int(11) DEFAULT NULL,
  `program_id` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `uraian` text,
  `jenis` varchar(255) DEFAULT NULL,
  `nomor` varchar(255) DEFAULT NULL,
  `dataumum_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
BEGIN;
INSERT INTO `transaksi` (`id`, `tanggal`, `komponen_id`, `pembiayaan_id`, `program_id`, `jumlah`, `uraian`, `jenis`, `nomor`, `dataumum_id`, `created_at`, `updated_at`) VALUES (1, '2025-05-13', 1, 1, 1, 29000, 'kjhkhkj', 'aksd', '9871', 1, '2025-05-13 09:02:47', '2025-05-13 09:13:06');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `username`, `name`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES (1, 'superadmin', 'superadmin', '$2y$12$r0HAFQIZdiAabhk3HwCdVub716cax1jMnmwKnv76nJz8sJx0M3TB6', NULL, NULL, '2024-12-20 02:49:44', 'superadmin');
INSERT INTO `users` (`id`, `username`, `name`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES (11, 'adi', 'adi2', '$2y$12$S8y2eXzZhf7OMrScCfdwT.9EZo6yv7EBZUkrk/faHh3DNzW/7zhPu', NULL, '2025-05-12 23:54:44', '2025-05-12 23:56:31', 'superadmin');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

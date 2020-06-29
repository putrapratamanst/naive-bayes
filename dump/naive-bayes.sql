-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2020 pada 15.36
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naive-bayes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `attributes`
--

CREATE TABLE `attributes` (
  `id` int(11) NOT NULL,
  `attribute_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `attributes`
--

INSERT INTO `attributes` (`id`, `attribute_name`) VALUES
(1, 'Pendidikan'),
(2, 'IPK'),
(3, 'Pengalaman Kerja'),
(4, 'Umur'),
(5, 'Psikotes'),
(6, 'IQ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_training`
--

CREATE TABLE `data_training` (
  `id` int(11) NOT NULL,
  `id_responden` int(11) DEFAULT NULL,
  `id_attribute` int(11) DEFAULT NULL,
  `id_parameter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_training`
--

INSERT INTO `data_training` (`id`, `id_responden`, `id_attribute`, `id_parameter`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 5),
(3, 1, 3, 8),
(4, 1, 4, 10),
(5, 1, 5, 13),
(6, 1, 6, 16),
(7, 2, 1, 2),
(8, 2, 2, 4),
(9, 2, 3, 7),
(10, 2, 4, 10),
(11, 2, 5, 13),
(12, 2, 6, 16),
(13, 3, 1, 2),
(14, 3, 2, 5),
(15, 3, 3, 9),
(16, 3, 4, 11),
(17, 3, 5, 14),
(18, 3, 6, 15),
(19, 4, 1, 2),
(20, 4, 2, 4),
(21, 4, 3, 8),
(22, 4, 4, 10),
(23, 4, 5, 13),
(24, 4, 6, 15),
(25, 5, 1, 2),
(26, 5, 2, 6),
(27, 5, 3, 9),
(28, 5, 4, 11),
(29, 5, 5, 14),
(30, 5, 6, 16),
(31, 6, 1, 2),
(32, 6, 2, 4),
(33, 6, 3, 8),
(34, 6, 4, 10),
(35, 6, 5, 13),
(36, 6, 6, 15),
(37, 7, 1, 2),
(38, 7, 2, 5),
(39, 7, 3, 9),
(40, 7, 4, 11),
(41, 7, 5, 14),
(42, 7, 6, 16),
(43, 8, 1, 1),
(44, 8, 2, 5),
(45, 8, 3, 7),
(46, 8, 4, 10),
(47, 8, 5, 13),
(48, 8, 6, 15),
(49, 9, 1, 2),
(50, 9, 2, 4),
(51, 9, 3, 7),
(52, 9, 4, 10),
(53, 9, 5, 13),
(54, 9, 6, 15),
(55, 10, 1, 2),
(56, 10, 2, 4),
(57, 10, 3, 7),
(58, 10, 4, 10),
(59, 10, 5, 13),
(60, 10, 6, 15),
(61, 11, 1, 2),
(62, 11, 2, 5),
(63, 11, 3, 7),
(64, 11, 4, 10),
(65, 11, 5, 13),
(66, 11, 6, 16),
(67, 12, 1, 2),
(68, 12, 2, 5),
(69, 12, 3, 8),
(70, 12, 4, 10),
(71, 12, 5, 13),
(72, 12, 6, 15),
(73, 13, 1, 1),
(74, 13, 2, 6),
(75, 13, 3, 9),
(76, 13, 4, 11),
(77, 13, 5, 14),
(78, 13, 6, 16),
(79, 14, 1, 1),
(80, 14, 2, 5),
(81, 14, 3, 7),
(82, 14, 4, 10),
(83, 14, 5, 13),
(84, 14, 6, 15),
(85, 15, 1, 1),
(86, 15, 2, 4),
(87, 15, 3, 7),
(88, 15, 4, 10),
(89, 15, 5, 13),
(90, 15, 6, 15),
(91, 16, 1, 1),
(92, 16, 2, 5),
(93, 16, 3, 8),
(94, 16, 4, 10),
(95, 16, 5, 13),
(96, 16, 6, 15),
(97, 17, 1, 2),
(98, 17, 2, 5),
(99, 17, 3, 8),
(100, 17, 4, 11),
(101, 17, 5, 14),
(102, 17, 6, 16),
(103, 18, 1, 2),
(104, 18, 2, 4),
(105, 18, 3, 8),
(106, 18, 4, 10),
(107, 18, 5, 13),
(108, 18, 6, 15),
(109, 19, 1, 2),
(110, 19, 2, 4),
(111, 19, 3, 8),
(112, 19, 4, 10),
(113, 19, 5, 13),
(114, 19, 6, 15),
(115, 20, 1, 1),
(116, 20, 2, 5),
(117, 20, 3, 8),
(118, 20, 4, 10),
(119, 20, 5, 13),
(120, 20, 6, 15),
(121, 21, 1, 2),
(122, 21, 2, 4),
(123, 21, 3, 7),
(124, 21, 4, 10),
(125, 21, 5, 13),
(126, 21, 6, 15),
(127, 22, 1, 3),
(128, 22, 2, 5),
(129, 22, 3, 9),
(130, 22, 4, 11),
(131, 22, 5, 14),
(132, 22, 6, 16),
(133, 23, 1, 1),
(134, 23, 2, 4),
(135, 23, 3, 7),
(136, 23, 4, 10),
(137, 23, 5, 13),
(138, 23, 6, 15),
(139, 24, 1, 2),
(140, 24, 2, 5),
(141, 24, 3, 8),
(142, 24, 4, 10),
(143, 24, 5, 13),
(144, 24, 6, 15),
(145, 25, 1, 2),
(146, 25, 2, 4),
(147, 25, 3, 8),
(148, 25, 4, 10),
(149, 25, 5, 13),
(150, 25, 6, 15),
(151, 26, 1, 1),
(152, 26, 2, 5),
(153, 26, 3, 7),
(154, 26, 4, 10),
(155, 26, 5, 13),
(156, 26, 6, 15),
(157, 27, 1, 2),
(158, 27, 2, 4),
(159, 27, 3, 7),
(160, 27, 4, 10),
(161, 27, 5, 13),
(162, 27, 6, 15),
(163, 28, 1, 3),
(164, 28, 2, 6),
(165, 28, 3, 7),
(166, 28, 4, 11),
(167, 28, 5, 14),
(168, 28, 6, 16),
(169, 29, 1, 2),
(170, 29, 2, 5),
(171, 29, 3, 9),
(172, 29, 4, 11),
(173, 29, 5, 14),
(174, 29, 6, 16),
(175, 30, 1, 2),
(176, 30, 2, 5),
(177, 30, 3, 9),
(178, 30, 4, 11),
(179, 30, 5, 14),
(180, 30, 6, 16),
(181, 31, 1, 2),
(182, 31, 2, 4),
(183, 31, 3, 8),
(184, 31, 4, 10),
(185, 31, 5, 13),
(186, 31, 6, 15),
(187, 32, 1, 2),
(188, 32, 2, 4),
(189, 32, 3, 7),
(190, 32, 4, 10),
(191, 32, 5, 13),
(192, 32, 6, 15),
(193, 33, 1, 2),
(194, 33, 2, 6),
(195, 33, 3, 9),
(196, 33, 4, 11),
(197, 33, 5, 14),
(198, 33, 6, 16),
(199, 34, 1, 2),
(200, 34, 2, 5),
(201, 34, 3, 8),
(202, 34, 4, 11),
(203, 34, 5, 14),
(204, 34, 6, 16),
(205, 35, 1, 1),
(206, 35, 2, 4),
(207, 35, 3, 8),
(208, 35, 4, 10),
(209, 35, 5, 13),
(210, 35, 6, 15),
(211, 36, 1, 2),
(212, 36, 2, 5),
(213, 36, 3, 9),
(214, 36, 4, 11),
(215, 36, 5, 14),
(216, 36, 6, 16),
(217, 38, 1, 2),
(218, 38, 2, 6),
(219, 38, 3, 8),
(220, 38, 4, 11),
(221, 38, 5, 14),
(222, 38, 6, 16),
(223, 39, 1, 1),
(224, 39, 2, 5),
(225, 39, 3, 7),
(226, 39, 4, 10),
(227, 39, 5, 13),
(228, 39, 6, 15),
(229, 40, 1, 2),
(230, 40, 2, 4),
(231, 40, 3, 7),
(232, 40, 4, 10),
(233, 40, 5, 13),
(234, 40, 6, 15),
(235, 41, 1, 2),
(236, 41, 2, 6),
(237, 41, 3, 9),
(238, 41, 4, 11),
(239, 41, 5, 14),
(240, 41, 6, 16),
(241, 42, 1, 2),
(242, 42, 2, 5),
(243, 42, 3, 8),
(244, 42, 4, 11),
(245, 42, 5, 14),
(246, 42, 6, 16),
(247, 43, 1, 2),
(248, 43, 2, 5),
(249, 43, 3, 9),
(250, 43, 4, 11),
(251, 43, 5, 14),
(252, 43, 6, 16),
(253, 44, 1, 2),
(254, 44, 2, 5),
(255, 44, 3, 7),
(256, 44, 4, 10),
(257, 44, 5, 13),
(258, 44, 6, 15),
(259, 45, 1, 2),
(260, 45, 2, 5),
(261, 45, 3, 7),
(262, 45, 4, 10),
(263, 45, 5, 13),
(264, 45, 6, 15),
(265, 46, 1, 2),
(266, 46, 2, 4),
(267, 46, 3, 8),
(268, 46, 4, 10),
(269, 46, 5, 13),
(270, 46, 6, 15),
(271, 47, 1, 3),
(272, 47, 2, 5),
(273, 47, 3, 9),
(274, 47, 4, 11),
(275, 47, 5, 14),
(276, 47, 6, 16),
(277, 48, 1, 2),
(278, 48, 2, 5),
(279, 48, 3, 9),
(280, 48, 4, 11),
(281, 48, 5, 14),
(282, 48, 6, 16),
(283, 49, 1, 3),
(284, 49, 2, 5),
(285, 49, 3, 8),
(286, 49, 4, 11),
(287, 49, 5, 14),
(288, 49, 6, 16),
(289, 50, 1, 2),
(290, 50, 2, 4),
(291, 50, 3, 7),
(292, 50, 4, 10),
(293, 50, 5, 13),
(294, 50, 6, 15),
(295, 51, 1, 2),
(296, 51, 2, 4),
(297, 51, 3, 7),
(298, 51, 4, 11),
(299, 51, 5, 13),
(300, 51, 6, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int(11) NOT NULL,
  `id_responden` int(11) DEFAULT NULL,
  `id_soal` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `jawaban` varchar(255) DEFAULT NULL,
  `benar_salah` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1593401833),
('m130524_201442_init', 1593401842),
('m190124_110200_add_verification_token_column_to_user_table', 1593401842),
('m200622_164451_create_attributes_table', 1593401843),
('m200622_171548_create_parameter_table', 1593401845),
('m200623_154157_create_data_training_table', 1593401845),
('m200623_154419_create_responden_table', 1593401846),
('m200625_185447_create_soal_table', 1593403588),
('m200628_153535_create_jawaban_table', 1593401848),
('m200628_153810_create_pilihan_table', 1593401853);

-- --------------------------------------------------------

--
-- Struktur dari tabel `parameter`
--

CREATE TABLE `parameter` (
  `id` int(11) NOT NULL,
  `id_attribute` int(10) DEFAULT NULL,
  `value` int(10) DEFAULT NULL,
  `parameter_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `parameter`
--

INSERT INTO `parameter` (`id`, `id_attribute`, `value`, `parameter_name`) VALUES
(1, 1, 1, 'D3'),
(2, 1, 2, 'S1'),
(3, 1, 3, 'S2'),
(4, 2, 1, '2 - 2,75'),
(5, 2, 2, '2,76 - 3,5'),
(6, 2, 3, '3,6 - 4'),
(7, 3, 1, 'Tidak Memilik Pengalaman'),
(8, 3, 2, 'Pengalaman Kurang Dari Satu Tahun'),
(9, 3, 3, 'Pengalaman Lebih Dari Satu Tahun'),
(10, 4, 1, '19 - 24'),
(11, 4, 2, '25 - 30'),
(12, 4, 3, '31 - 35'),
(13, 5, 1, 'Kurang Dari Sama Dengan 50'),
(14, 5, 2, 'Lebih Dari Sama Dengan 50'),
(15, 6, 1, 'Kurang Dari Sama Dengan 109'),
(16, 6, 2, 'Lebih Dari Sama Dengan 110');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pilihan`
--

CREATE TABLE `pilihan` (
  `id` int(11) NOT NULL,
  `id_soal` int(11) DEFAULT NULL,
  `pilihan` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `benar_salah` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pilihan`
--

INSERT INTO `pilihan` (`id`, `id_soal`, `pilihan`, `keterangan`, `benar_salah`) VALUES
(1, 1, 'a', 'Cemas', '0'),
(2, 1, 'b', 'Sedih', '0'),
(3, 1, 'c', 'Tidak bisa tidur', '1'),
(4, 1, 'd', 'Kenyataannya', '0'),
(5, 2, 'a', 'Menumpuk', '0'),
(6, 2, 'b', 'Kerdil', '1'),
(7, 2, 'c', 'Macet', '0'),
(8, 2, 'd', 'Susut', '0'),
(9, 3, 'a', 'Makanan', '1'),
(10, 3, 'b', 'Lintasan', '0'),
(11, 3, 'c', 'Sepatu', '0'),
(12, 4, 'a', '6', '0'),
(13, 4, 'b', '8', '1'),
(14, 4, 'c', '4', '0'),
(15, 4, 'd', '2', '0'),
(16, 5, 'a', 'Semua burung memiliki sayap', '0'),
(17, 5, 'b', 'Semua ayam bisa terbang', '0'),
(18, 5, 'c', 'Sementara ayam bisa terbang', '0'),
(19, 5, 'd', 'Semua ayam termasuk jenis burung', '0'),
(20, 5, 'e', 'Semua ayam bukan termasuk jenis burung', '1'),
(21, 6, 'a', '48', '1'),
(22, 6, 'b', '24', '0'),
(23, 6, 'c', '30', '0'),
(24, 6, 'd', '12', '0'),
(25, 6, 'e', '32', '0'),
(26, 7, 'a', '28 Tahun', '1'),
(27, 7, 'b', '26 Tahun', '0'),
(28, 7, 'c', '25 Tahun', '0'),
(29, 7, 'd', '21 Tahun', '0'),
(30, 8, 'a', '4,5,14', '0'),
(31, 8, 'b', '4,8,12', '1'),
(32, 8, 'c', '4,8,14', '0'),
(33, 8, 'd', '5,7,9', '0'),
(34, 9, 'a', 'Kuda tidak bersayap', '0'),
(35, 9, 'b', 'Manusia tidak makan rumput', '0'),
(36, 9, 'c', 'Manusia dan Kuda tidak bersayap dan tidak makan rumput', '0'),
(37, 9, 'd', 'Manusia tidak makan Kuda', '0'),
(38, 9, 'e', 'Tidak bisa ditarik kesimpulan', '1'),
(39, 10, 'a', 'Hipotesis', '0'),
(40, 10, 'b', 'Praduga', '0'),
(41, 10, 'c', 'Thesis', '0'),
(42, 10, 'd', 'Disertasi', '0'),
(43, 10, 'e', 'Buatan', '1'),
(44, 11, 'a', 'Posisi 1', '0'),
(45, 11, 'b', 'Posisi 2', '1'),
(46, 12, 'a', '5000', '0'),
(47, 12, 'b', '4000', '0'),
(48, 12, 'c', '4100', '1'),
(49, 12, 'd', '3100', '0'),
(50, 13, 'a', '11 porsi', '0'),
(51, 13, 'b', '9 porsi', '0'),
(52, 13, 'c', '7 porsi', '1'),
(53, 13, 'd', '5 porsi', '0'),
(54, 14, 'a', 'Firsthand', '1'),
(55, 14, 'b', 'Pontificate', '0'),
(56, 14, 'c', 'Federal', '0'),
(57, 14, 'd', 'Shouts', '0'),
(58, 14, 'e', 'Coupon', '0'),
(59, 15, 'a', 'Dahlia', '0'),
(60, 15, 'b', 'Melati', '0'),
(61, 15, 'c', 'Sepatu', '1'),
(62, 15, 'd', 'Mawar', '0'),
(63, 15, 'e', 'Krisan', '0'),
(64, 16, 'a', 'Plantant', '0'),
(65, 16, 'b', 'Cargrace', '1'),
(66, 16, 'c', 'Interpoint', '0'),
(67, 16, 'd', 'Begbeger', '0'),
(68, 16, 'e', 'Rediscovered', '0'),
(69, 17, 'a', 'Rawam', '0'),
(70, 17, 'b', 'Arukas', '0'),
(71, 17, 'c', 'Italem', '0'),
(72, 17, 'd', 'Pilut', '0'),
(73, 17, 'e', 'Harem', '1'),
(74, 18, 'a', '281', '1'),
(75, 18, 'b', '923', '0'),
(76, 18, 'c', '361', '0'),
(77, 18, 'd', '435', '0'),
(78, 19, 'a', 'Kader', '0'),
(79, 19, 'b', 'Ember', '0'),
(80, 19, 'c', 'Tempe', '0'),
(81, 19, 'd', 'Estewe', '0'),
(82, 19, 'e', 'Cejedewe', '0'),
(83, 19, 'f', 'Helem', '1'),
(84, 20, 'a', 'Katak', '0'),
(85, 20, 'b', 'Kayak', '0'),
(86, 20, 'c', 'Malam', '0'),
(87, 20, 'd', 'Bapak', '1'),
(88, 20, 'e', 'Kapak', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `responden`
--

CREATE TABLE `responden` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `portofolio` varchar(255) DEFAULT NULL,
  `no_telepon` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` varchar(255) DEFAULT NULL,
  `ijazah` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `responden`
--

INSERT INTO `responden` (`id`, `nama`, `jenis_kelamin`, `cv`, `portofolio`, `no_telepon`, `email`, `tempat_lahir`, `tanggal_lahir`, `ijazah`) VALUES
(1, 'Abdillah zakarya', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Abdillah zakarya.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Abdillah zakarya.pdf', '081234569', 'abdillahzakarya@gmail.com', 'Padang', '1998-03-05 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Abdillah zakarya.pdf'),
(2, 'Abi Abdurahman Syarif', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Abi Abdurahman Syarif.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Abi Abdurahman Syarif.pdf', '081223443345', 'abisyarif@gmail.com', 'Jakarta', '1996-03-14 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Abi Abdurahman Syarif.pdf'),
(3, 'ADINDA DWI APRILIANTI ASLI', 'P', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_ADINDA DWI APRILIANTI ASLI.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_ADINDA DWI APRILIANTI ASLI.pdf', '08233546678', 'adinda@gmail.com', 'Bandung', '1993-06-08 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_ADINDA DWI APRILIANTI ASLI.pdf'),
(4, 'Agum Gumelar', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Agum Gumelar.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Agum Gumelar.pdf', '081223443345', 'agum@gmail.com', 'Jakarta', '1998-10-16 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Agum Gumelar.pdf'),
(5, 'AGUS DUNAS NUGRAHA', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_AGUS DUNAS NUGRAHA.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_AGUS DUNAS NUGRAHA.pdf', '081223443345', 'agus@gmail.com', 'Padang', '1994-06-15 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_AGUS DUNAS NUGRAHA.pdf'),
(6, 'Agus Laksana', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Agus Laksana.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Agus Laksana.pdf', '081223443345', 'aguslaksana@gmail.com', 'Jakarta', '1996-06-11 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Agus Laksana.pdf'),
(7, 'Ahmad Dahlan', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Ahmad Dahlan.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Ahmad Dahlan.pdf', '08233546678', 'ahmadhaglan@gmail.com', 'Jakarta', '1993-05-05 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Ahmad Dahlan.pdf'),
(8, 'ALSHINTA SABIAN DWIEARLIZA BASIT', 'P', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_ALSHINTA SABIAN DWIEARLIZA BASIT.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_ALSHINTA SABIAN DWIEARLIZA BASIT.pdf', '08233546678', 'alshinta@gmail.com', 'Jakarta', '1999-07-15 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_ALSHINTA SABIAN DWIEARLIZA BASIT.pdf'),
(9, 'Andika wibawa putra', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Andika wibawa putra.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Andika wibawa putra.pdf', '08233546678', 'andika@gmail.com', 'Bekasi', '1996-03-06 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Andika wibawa putra.pdf'),
(10, 'ANI ANDINI', 'P', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_ANI ANDINI.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_ANI ANDINI.pdf', '08233546678', 'aniandini@gmail.com', 'Padang', '1998-07-16 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_ANI ANDINI.pdf'),
(11, 'Annisa Aulia', 'P', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Annisa Aulia.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Annisa Aulia.pdf', '08233546678', 'annisaaulia@gmail.com', 'Jakarta', '1997-07-10 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Annisa Aulia.pdf'),
(12, 'ANYA DANIA NOVITA LUMENTUT', 'P', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_ANYA DANIA NOVITA LUMENTUT.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_ANYA DANIA NOVITA LUMENTUT.pdf', '08233546678', 'anya@gmail.com', 'Bekasi', '1997-10-14 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_ANYA DANIA NOVITA LUMENTUT.pdf'),
(13, 'Arif Tri Widodo', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Arif Tri Widodo.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Arif Tri Widodo.pdf', '08233546678', 'arif@gmail.com', 'Lampung', '1994-06-29 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Arif Tri Widodo.pdf'),
(14, 'Arsika Marwah D. Tantja', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Arsika Marwah D. Tantja.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Arsika Marwah D. Tantja.pdf', '081223443345', 'arsika@gmail.com', 'Padang', '1998-10-27 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Arsika Marwah D. Tantja.pdf'),
(15, 'AYU AGUSTINA', 'P', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_AYU AGUSTINA.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_AYU AGUSTINA.pdf', '08233546678', 'agustina@gmail.com', 'Jakarta', '1997-09-22 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_AYU AGUSTINA.pdf'),
(16, 'AZMI PARID ALKAPA', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_AZMI PARID ALKAPA.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_AZMI PARID ALKAPA.pdf', '081223443345', 'azmiparid@gmail.com', 'Jakarta', '1996-08-16 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_AZMI PARID ALKAPA.pdf'),
(17, 'Bagasta Nispuana', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Bagasta Nispuana.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Bagasta Nispuana.pdf', '08233546678', 'bagasta@gmail.com', 'Padang', '1994-07-12 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Bagasta Nispuana.pdf'),
(18, 'Bagus Mayan Permana', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Bagus Mayan Permana.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Bagus Mayan Permana.pdf', '08233546678', 'bagus@gmail.com', 'Padang', '1996-07-18 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Bagus Mayan Permana.pdf'),
(19, 'Bintang Prahadi', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Bintang Prahadi.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Bintang Prahadi.pdf', '081223443345', 'bintang@gmail.com', 'Jakarta', '1996-07-16 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Bintang Prahadi.pdf'),
(20, 'Budi Nurhidayat', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Budi Nurhidayat.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Budi Nurhidayat.pdf', '081223443345', 'nurhidayat@gmail.com', 'Padang', '1997-07-16 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Budi Nurhidayat.pdf'),
(21, 'Cesar Hermawan Casthilo', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Cesar Hermawan Casthilo.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Cesar Hermawan Casthilo.pdf', '081223443345', 'cesar@gmail.com', 'Jakarta', '1997-07-07 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Cesar Hermawan Casthilo.pdf'),
(22, 'Clarence Andika Sinulingga', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Clarence Andika Sinulingga.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Clarence Andika Sinulingga.pdf', '08233546678', 'Clarenceandika@gmail.com', 'Medan', '1994-07-05 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Clarence Andika Sinulingga.pdf'),
(23, 'David Rivaldo Iek', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_David Rivaldo Iek.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_David Rivaldo Iek.pdf', '08233546678', 'david@gmail.com', 'Nusa Tenggara Timur', '1997-03-03 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_David Rivaldo Iek.pdf'),
(24, 'Doli Simbolon', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Doli Simbolon.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Doli Simbolon.pdf', '08233546678', 'doli@gmail.com', 'Medan', '1997-06-11 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Doli Simbolon.pdf'),
(25, 'DEDE ANGGI JULIA PRATAMA', 'P', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_DEDE ANGGI JULIA PRATAMA.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_DEDE ANGGI JULIA PRATAMA.pdf', '08233546678', 'anggi@gmail.com', 'Jakarta', '1998-11-10 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_DEDE ANGGI JULIA PRATAMA.pdf'),
(26, 'Dewi Nafisah', 'P', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Dewi Nafisah.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Dewi Nafisah.pdf', '08233546678', 'dewinafisah@gmail.com', 'Jakarta', '1997-02-11 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Dewi Nafisah.pdf'),
(27, 'DHIFA MAULA RIZKY', 'P', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_DHIFA MAULA RIZKY.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_DHIFA MAULA RIZKY.pdf', '08233546678', 'dhifa@gmail.com', 'Jakarta', '1997-10-22 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_DHIFA MAULA RIZKY.pdf'),
(28, 'Diah Putri Lestari', 'P', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Diah Putri Lestari.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Diah Putri Lestari.pdf', '081223443345', 'diah@gmail.com', 'Jakarta', '1994-06-22 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Diah Putri Lestari.pdf'),
(29, 'Eka Putri Shellani', 'P', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Eka Putri Shellani.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Eka Putri Shellani.pdf', '081223443345', 'eka@gmail.com', 'Jakarta', '1994-11-22 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Eka Putri Shellani.pdf'),
(30, 'ERA NURAINI', 'P', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_ERA NURAINI.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_ERA NURAINI.pdf', '08233546678', 'nuraini@gmail.com', 'Jakarta', '1994-06-14 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_ERA NURAINI.pdf'),
(31, 'Ervian Alan Pratama W', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Ervian Alan Pratama W.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Ervian Alan Pratama W.pdf', '08233546678', 'ervian@gmail.com', 'Jakarta', '1996-10-15 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Ervian Alan Pratama W.pdf'),
(32, 'Farhan ega hermawan', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Farhan ega hermawan.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Farhan ega hermawan.pdf', '081223443345', 'farhan@gmail.com', 'Padang', '1997-10-13 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Farhan ega hermawan.pdf'),
(33, 'Fathur Rismansyah', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Fathur Rismansyah.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Fathur Rismansyah.pdf', '08233546678', 'fathur@gmail.com', 'Jakarta', '1994-06-14 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Fathur Rismansyah.pdf'),
(34, 'Feby Nur Istiqomah', 'P', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Feby Nur Istiqomah.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Feby Nur Istiqomah.pdf', '08233546678', 'feby@gmail.com', 'Padang', '1994-06-08 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Feby Nur Istiqomah.pdf'),
(35, 'Frass setia dika N', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Frass setia dika N.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Frass setia dika N.pdf', '08233546678', 'setia@gmail.com', 'Jakarta', '1996-06-10 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Frass setia dika N.pdf'),
(36, 'Fret Deni Iek', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Fret Deni Iek.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Fret Deni Iek.pdf', '08233546678', 'fret@gmail.com', 'Nusa Tenggara Timur', '1994-07-28 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Fret Deni Iek.pdf'),
(37, 'Fret Deni Iek', NULL, NULL, NULL, NULL, 'fret@gmail.com', NULL, NULL, NULL),
(38, 'Galih Gustiana Nurdin', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Galih Gustiana Nurdin.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Galih Gustiana Nurdin.pdf', '08233546678', 'gustiana@gmail.com', 'Jakarta', '1994-10-19 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Galih Gustiana Nurdin.pdf'),
(39, 'Hilmi Hasbiya Zahrani Waltz', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Hilmi Hasbiya Zahrani Waltz.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Hilmi Hasbiya Zahrani Waltz.pdf', '08233546678', 'hilmi@gmail.com', 'Bekasi', '1996-06-11 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Hilmi Hasbiya Zahrani Waltz.pdf'),
(40, 'Hudaifah Priohastono', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Hudaifah Priohastono.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Hudaifah Priohastono.pdf', '08233546678', 'hudaifah@gmail.com', 'Jakarta', '1996-06-04 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Hudaifah Priohastono.pdf'),
(41, 'HUSNIA', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_HUSNIA.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_HUSNIA.pdf', '08233546678', 'husnia@gmail.com', 'Jakarta', '1994-10-19 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_HUSNIA.pdf'),
(42, 'Iis Sofiatuzzulfa', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Iis Sofiatuzzulfa.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Iis Sofiatuzzulfa.pdf', '081223443340', 'lis@gmail.com', 'Jakarta', '1994-10-11 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Iis Sofiatuzzulfa.pdf'),
(43, 'ILHAM DEAN ABDILLAH', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_ILHAM DEAN ABDILLAH.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_ILHAM DEAN ABDILLAH.pdf', '08233546678', 'ilham@gmail.com', 'Jakarta', '1994-11-15 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_ILHAM DEAN ABDILLAH.pdf'),
(44, 'ILHAM KADLAWI', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_ILHAM KADLAWI.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_ILHAM KADLAWI.pdf', '08233546678', 'ilhamkadlawi@gmail.com', 'Jakarta', '1998-10-21 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_ILHAM KADLAWI.pdf'),
(45, 'Jackson Toisuta', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Jackson Toisuta.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Jackson Toisuta.pdf', '08233546678', 'jacson@gmail.com', 'Jakarta', '1998-09-16 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Jackson Toisuta.pdf'),
(46, 'Jumiana', 'P', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Jumiana.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Jumiana.pdf', '08233546678', 'Jumiana@gmail.com', 'Padang', '1997-06-11 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Jumiana.pdf'),
(47, 'Kartiko Damarjati', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Kartiko Damarjati.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Kartiko Damarjati.pdf', '081223443340', 'kartiko@gmail.com', 'Jakarta', '1994-11-15 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Kartiko Damarjati.pdf'),
(48, 'Khofip putra nadillah', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Khofip putra nadillah.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Khofip putra nadillah.pdf', '081223443345', 'khofip@gmail.com', 'Padang', '1994-07-06 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Khofip putra nadillah.pdf'),
(49, 'Kridhan pandego', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Kridhan pandego.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Kridhan pandego.pdf', '08233546678', 'kridhan@gmail.com', 'Padang', '1993-10-28 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Kridhan pandego.pdf'),
(50, 'Tomy Hartono', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Tomy Hartono.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Tomy Hartono.pdf', '081223443340', 'hartono@gmail.com', 'Padang', '1997-05-14 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Tomy Hartono.pdf'),
(51, 'Kurniawan sandi', 'L', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/cv/CV_Kurniawan sandi.pdf', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/portofolio/PORTOFOLIO_Kurniawan sandi.pdf', '081223443345', 'kurniawan@gmail.com', 'Bekasi', '1994-10-18 ', 'C:\\xampp\\htdocs\\naive-bayes/frontend/web/uploads/ijazah/IJAZAH_Kurniawan sandi.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id` int(11) NOT NULL,
  `pertanyaan` text DEFAULT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id`, `pertanyaan`, `type`) VALUES
(1, 'Insomnia =…', 1),
(2, 'Bongsor =…', 1),
(3, 'Mobil – Bensin = Pelari - …', 1),
(4, '1 24 20 16 = …', 1),
(5, 'Semua jenis burung bisa terbang. Semua ayam memiliki sayap.', 1),
(6, '2 3 6 10 20 24 = …', 1),
(7, 'Aji adalah kakak Habib, 4 tahun lebi tua. Bintan adalah kakak Aji dan berbeda 3 tahun. Berapakah usia Bintan jika saat ini Habib baru saja merayakan ulang tahun yang ke-21 ?', 1),
(8, 'Perhatikan sederet bilangan berikut. 4,5,6,7,8,9,10,11,12,13, dan 14. Dari bilangan tersebut, yang tidak dapat dibagi 4 adalah,  kecuali…', 1),
(9, 'Semua Manusia tidak bersayap. Semua Kuda makan rumput', 1),
(10, 'Protesis = …', 1),
(11, 'Anda ikut berlomba. Anda menyalip orang di posisi nomor dua. Sekarang posisi anda nomor berapa?', 2),
(12, 'Ambil 1000 dan tambahkan 40 padanya. Sekarang tambahkan 1000 lagi. Sekarang tambahkan 30! Tambahkan 1000 lagi. Sekarang tambahkan 20. Sekarang tambahkan 1000. Sekarang tambahkan 10 . Berapa totalnya?', 2),
(13, 'Seorang kakek, seorang nenek, 2 orang ayah, 2 orang ibu, 3 anak laki-laki dan 2 anak perempuan pergi ke restoran. Berapa jumlah makanan yang harus dibeli agar setiap orang mendapat tepat 1 jatah?', 2),
(14, 'Manakah yang kurang sesuai dari daftar kata-kata ini? (tidak perlu pengetahuan bahasa Inggris)', 2),
(15, 'Manakah yang kurang sesuai dari daftar kata-kata ini?', 2),
(16, 'Kata manakah yang tak sesuai dengan yang lain? (tak diperlukan pengetahuan bahasa Inggris).', 2),
(17, 'Manakah dari susunan huruf yang membentuk kata berikut di bawah ini yang tak sesuai?', 2),
(18, 'Manakah dari bilangan-bilangan berikut ini yang sesuai dengan urutan di bawah ini?\r\n_ _ _ , 281, 435, 634, 923, 573, 312, 421, 233, 315, 361, _ _ _', 2),
(19, 'Terdapat satu kata di bawah ini yang tidak mempunyai persamaan, yang manakah?', 2),
(20, 'Manakah dari daftar kata-kata di bawah ini yang salah?', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'Abdillah zakarya', 'GJf6PVgvbDtGXYyWppsiVmH0ITjz1UiD', '$2y$13$CY6ucSRb6lGO4goCNjwSB.saYL9hltM3hPFX0WWkVIrSraxkcqU4a', NULL, 'abdillahzakarya@gmail.com', 10, 1593402677, 1593402677, 'VJ18yKPEfWSQ2ugP1oeonO084PZ6blFZ_1593402677'),
(2, 'admin', 'GJf6PVgvbDtGXYyWppsiVmH0ITjz1UiD', '$2y$13$CY6ucSRb6lGO4goCNjwSB.saYL9hltM3hPFX0WWkVIrSraxkcqU4a', NULL, 'admin@admin.com', 10, 1593402677, 1593402677, 'VJ18yKPEfWSQ2ugP1oeonO084PZ6blFZ_1593402677'),
(3, 'Abi Abdurahman Syarif', 'C4RBBKnBfMSjTLKAHcPO_fvMAC7hMEhC', '$2y$13$6gApn5hhMSHQN1OAJYzwK.bZ7KUiqS7mwvxAkUgyEhoyDAE86Hv7.', NULL, 'abisyarif@gmail.com', 10, 1593405997, 1593405997, 'vAWVwQJNnzsct96Xu6tAFXdc1j3ChDaS_1593405997'),
(4, 'ADINDA DWI APRILIANTI ASLI', 'h-eHgR-ZVM942oT1eDiydGX2BWCwpkHO', '$2y$13$ruN92Tz4K2HV2w9fCOE00.icKJMc6taEw.w42GjFH/fju.YazkpK.', NULL, 'adinda@gmail.com', 10, 1593407330, 1593407330, 'yhXfhFY0TR-RCErRaSSslKEyohIy22DA_1593407330'),
(5, 'Agum Gumelar', 'd_hBUYOrLGQ4XE0pPKKkbI3KL7C1l0Lf', '$2y$13$NCz3GiA6j6eREe.TSjauUOLLrsPXI0z7iXOqFQlOkLrpr248U6rcC', NULL, 'agum@gmail.com', 10, 1593407974, 1593407974, 'pUrvLPcEYTF3kHu_NH0ImFpbHLDtXwID_1593407974'),
(6, 'AGUS DUNAS NUGRAHA', 'sQtjNKDHnpUVagkIskdhh-8MzZl60Kkr', '$2y$13$la103psjyoJ0om1.RSyC/OemV0wlmPQ0LpQxwx5iU/1bzBn3/HLdu', NULL, 'agus@gmail.com', 10, 1593411669, 1593411669, 'PCfgoVApF0tOq07cqOMLEa3ZsV0mufv0_1593411668'),
(7, 'Agus Laksana', 'YMpY1rL97WTnRmqX95W2E2F9Ozlzz6-q', '$2y$13$LAHh6JRMP9mcFYMykMWb7Oj21QXrdqg3DVmYWtFXe2pfswy8BKWdm', NULL, 'aguslaksana@gmail.com', 10, 1593412673, 1593412673, 'yVgw2McGqrWQCbAmwFYLjqlD59yPZwUA_1593412673'),
(8, 'Ahmad Dahlan', 'Cv0vIlMR6vEgxzrodmkwAWqrkfvKPue8', '$2y$13$FMwG6zzK6q4Dxwn8Emul2ecbDgfq.bbAJtFWSYYRK5.6M/.InMoB2', NULL, 'ahmadhaglan@gmail.com', 10, 1593419044, 1593419044, '_PqGAS8bJ8YdE2BPr_PVQS1LrT8liPxI_1593419043'),
(9, 'ALSHINTA SABIAN DWIEARLIZA BASIT', 'OBq-ypOmd3FzDN2QNxcJKNwaGOHbbla2', '$2y$13$/PAW0QVpP1sxJwnNzNIDiOg6OT6yR6QNz1rSbBZXYVy1FpOQAThJK', NULL, 'alshinta@gmail.com', 10, 1593419361, 1593419361, 'GRAjev7u9HvC2fYYt_eCEKXGR8ZEyhKq_1593419361'),
(10, 'Andika wibawa putra', 'xTV834vFuLLEMBSySkrZlgAK3dioDzjz', '$2y$13$QZnLCO/xkTHGOTC6/MredObTCaAIOHZozerbvQd/pns//Uzacjr36', NULL, 'andika@gmail.com', 10, 1593419763, 1593419763, 'u6RWnYJ3T1q59QfoDuf2U2fO5RX72dFF_1593419763'),
(11, 'ANI ANDINI', 'QhoWrTmy1DAYy5mNR8BwU8rhM2wDcupe', '$2y$13$hzy/iYina1E5/tbVal2R/.idn4xUpjRqql8w99rYapC6lunIUeiw6', NULL, 'aniandini@gmail.com', 10, 1593420136, 1593420136, 'v_7-FZaCdYkEpAZthg5WgB1I6hUTJhBS_1593420136'),
(12, 'Annisa Aulia', 'eZe80IzgskLpwdrEruhFwq0mnhkCjo8X', '$2y$13$GbM49bAvx.RPMUz9bN1Lf.nQd0npo/aXbl4yVv6lkwXuaPBv4918m', NULL, 'annisaaulia@gmail.com', 10, 1593420429, 1593420429, 'fo2zC-GPRtlQ9fAj6oP4u3bbaMdWnF9O_1593420429'),
(13, 'ANYA DANIA NOVITA LUMENTUT', 'Q5bFNmwFBLZ1FzRscVPrCA8dlQ-JiOWl', '$2y$13$cSnR9yR4A1ltlQ.Eson5YubKUgT2VExH6NPZ1ohx0JwRHWFHPBkMu', NULL, 'anya@gmail.com', 10, 1593421145, 1593421145, 'bQ9hExuyY8amXpCScBMw8eEX0vIPi6hQ_1593421145'),
(14, 'Arif Tri Widodo', 'ODYPUE529HEcGGYQSFtzrqEs-SC_EpRo', '$2y$13$bMRLPddCBqfuZDdS8iQhjuUDu62lkQvKI4MSEI/qkSC3ui/rG0R1y', NULL, 'arif@gmail.com', 10, 1593421434, 1593421434, 'PNsFeYco7vAq9b1N09BNXsyXDEpr3kx0_1593421434'),
(15, 'Arsika Marwah D. Tantja', 'W0-6fIT70Jse8qk3ya9oFXbKslwnlgQm', '$2y$13$BDjgJYF6rb4QFpZxT0kI1.VKIIq8HIhXk42VwD9PEjob5LJ/XyHNO', NULL, 'arsika@gmail.com', 10, 1593422002, 1593422002, 'NApoi35Scc6Lpp9kmpc7gC4xVD8KHl3Y_1593422002'),
(16, 'AYU AGUSTINA', 'XqhPIVM7YG_KLDyWdNyGr94cyPQGFkOY', '$2y$13$JaN.W6XFMxhb6NEK6q1xxOykWLFGDjCgqmqulQrgQWCO9HxIUmsgq', NULL, 'agustina@gmail.com', 10, 1593422382, 1593422382, 'yuI6GpL5ECOiJPbgw1YMfO_qiZfXV4u9_1593422382'),
(17, 'AZMI PARID ALKAPA', 'B9m10iI8otxqK8lqL-YG0QmoRlC1kv67', '$2y$13$8aZaY67qZ99QRHt4WnazlOfSHXtzR4Ai9rpiq9k6/JN8rluFiwawK', NULL, 'azmiparid@gmail.com', 10, 1593422866, 1593422866, 'yeimRyFSycBv2BHlthTUmYhQQOWz-U4e_1593422866'),
(18, 'Bagasta Nispuana', 'zbtbwv4P6cOUaOIX2WRzY2GoGTPAB57i', '$2y$13$Dxr67SgpG3uix82ChtUHAe.uaLJ46Pvk/cB2Bs/bymmhtmpRnJJu6', NULL, 'bagasta@gmail.com', 10, 1593423160, 1593423160, 'RByakfc5ARB6v0-jrVPwBf54cUbTd3aO_1593423160'),
(19, 'Bagus Mayan Permana', '8z1zjeNOH25XRG-XinlC_7e9zYeSgmCi', '$2y$13$mPPOnvZjlZaUtFBgc3kkI.lO1gTaPqtXsF09ytpGK0WgxXWOsKgAO', NULL, 'bagus@gmail.com', 10, 1593423515, 1593423515, 'P2FZC3LlgNmvWQOd-4AYFwuiZZqIMbZm_1593423515'),
(20, 'Bintang Prahadi', 'don701yjOQCzc5y23C3q0gul01tr4Z-W', '$2y$13$MqBEcpcYsA47aDXCfLD/Su8BcZn1DIWgnxE40tOzEq4rHXSzL4I6S', NULL, 'bintang@gmail.com', 10, 1593424351, 1593424351, 'QjXIAQEHv1nWTrB_oQIDW5__kxInUJBk_1593424351'),
(21, 'Budi Nurhidayat', 'yhH8dRv4paZgHidOfZYWV-scV0xLpb2Z', '$2y$13$IL06ZJFSZ8wqo1ZuzwGzeO6qOeO6ueNdwXToUa5G2dJjtlSQBJSSO', NULL, 'nurhidayat@gmail.com', 10, 1593424557, 1593424557, 'xtf7fSyeABlIxb85gp7JNk-RMH_ykx08_1593424557'),
(22, 'Cesar Hermawan Casthilo', 'dalGnm3RB3KhgfxRL-1zUBIaUg9WL9uH', '$2y$13$g6F8MUs3KRJFngRRuiPjpeouQgMZJriE.vs4h5o1.wocMEcHNmMdq', NULL, 'cesar@gmail.com', 10, 1593427697, 1593427697, 'Kpb00jQ069SSDVHXAtKyQgW7YLRp-bq8_1593427696'),
(23, 'Clarence Andika Sinulingga', 'Z_aQhOnBSpcjKPhMmch46f-v1xy0NCcB', '$2y$13$MrNQjEFCKwdG8TdZ065LSetNGKxKVJW6b2rrzNh3OetDmhcz8HYni', NULL, 'Clarenceandika@gmail.com', 10, 1593427921, 1593427921, 'EoGrpbWbrWdv7f260oKmpf9JGE72_4Af_1593427921'),
(24, 'David Rivaldo Iek', 'pQsU7T_WVqKQUJUuFZREgDrPmfxtcnlw', '$2y$13$QTPstIzqStorBGeUiQFh7.yAbIiGdqXz7YXtDVjGpvUskPRtwHRZi', NULL, 'david@gmail.com', 10, 1593428173, 1593428173, 'WRis0YWnKw2t0LTjneqgcbhtZCPRQX_6_1593428173'),
(25, 'Doli Simbolon', 'bDz8SWc5Zox_c0jE8rNvFdWnU4ahYHgD', '$2y$13$KKlIhzJjM70PHYSPYMnyJ.5hnwV5.NqyfY5W.sDlPIqbgR.RC8FOm', NULL, 'doli@gmail.com', 10, 1593428419, 1593428419, '7Yd_JhU9zM_1cr2kKSWMxIe5Y1b-YLiT_1593428419'),
(26, 'DEDE ANGGI JULIA PRATAMA', 'hdEDh9nhm-MgWKSwRq644WtNuh9N0yL3', '$2y$13$JEUur5UTMKcV2cX4sXKLM.KW3EBRBNjTvWwSM9mdgrQJ9I/dkLL3q', NULL, 'anggi@gmail.com', 10, 1593428659, 1593428659, '7m1cgC4-Mmo2M5CC_T2jN8UTH4rX9ydP_1593428659'),
(27, 'Dewi Nafisah', 'Tm564scLh5XNLTNdd3yRmvRXIlufhFJG', '$2y$13$hkh2FTkGCsj5H5a7f4BrheLQxGvVbwmRfKqln4DVfQGCdqhiacVc6', NULL, 'dewinafisah@gmail.com', 10, 1593428845, 1593428845, '0QaeAZZ77t8ZZUgIECwxK9c5DiVNCS0t_1593428845'),
(28, 'DHIFA MAULA RIZKY', '5WPjdw7MjFnhx8cBHGAgIPYrYFql8lj9', '$2y$13$vjpJxuoYI7YW0YwELNA6xu231h/Sdrb2.sw/KxeXamQi./k5GHAFa', NULL, 'dhifa@gmail.com', 10, 1593429075, 1593429075, 'bHzbTA9fdPV5VXV91tSg_2YBbW_sd19__1593429075'),
(29, 'Diah Putri Lestari', '4p-q9EXsSG5_QwSclZK12-fddeE9BCjy', '$2y$13$Oeo5XpYyAzMOZS.udoDx2ue3ka1grxnqGLmUS8g08s3vPKv5I3w/.', NULL, 'diah@gmail.com', 10, 1593429292, 1593429292, 'pV2XCpJv4d4Co2QQLkDsCRK5r_egt8rX_1593429292'),
(30, 'Eka Putri Shellani', 'r7SAw_MoyXDvG3ATAXznr7AkaXWZP8tP', '$2y$13$83ajcC8VGlp55r5.THKSj.TCxLeyqwsvx4.pKFyA4SjKVMcMBs432', NULL, 'eka@gmail.com', 10, 1593429558, 1593429558, 'jYql_fYTvKD2A6cGQUVD7NxBf1_RtuWm_1593429558'),
(31, 'ERA NURAINI', '7X6QFfY1kvZ6u0BtbCKn7y8iVoPmtMm4', '$2y$13$Go1ESqUIvTfonzFEkzQmzev1dkeEzgM09zRS3/LdEWFXaMEw0ZE2C', NULL, 'nuraini@gmail.com', 10, 1593429747, 1593429747, 'qHXK1sf-hJuiYiZYM_2WY9TxjUGo-gyh_1593429747'),
(32, 'Ervian Alan Pratama W', 'UIx_LBzogIIwCg_Z_RBIW0sm6rDHLoo5', '$2y$13$U39WlcJXLOm./HpM4gNkS./wlEbw8ITH/8vl6f0OU6erbTn2LdqFO', NULL, 'ervian@gmail.com', 10, 1593430011, 1593430011, 'cOrNcBiUaF2uElXxAE3i6swCwLmcm17b_1593430011'),
(33, 'Farhan ega hermawan', 'pT-Kn8mEGRDoVskjBj1nFOreGq2VawBh', '$2y$13$NthHmUZsMVRUsTHvESWocuYuNGSE2fxGsLtE2dp1EkS2kImMrkxVq', NULL, 'farhan@gmail.com', 10, 1593430355, 1593430355, 'y5nW0a-YSPhor3eS8TOWeEEMO7SqoXvU_1593430355'),
(34, 'Fathur Rismansyah', 'vP1rA59Ofnipb3wkay6ZBkCdJ_ls5w1o', '$2y$13$A1lgoo2zuIBANFNzZiX13uvBLeibtmZ9hDS11zIoq3pti7YnpJD3e', NULL, 'fathur@gmail.com', 10, 1593430727, 1593430727, 'FrpX0Z4bqTUdrI8f3KbjESoZ5EIfkUCe_1593430727'),
(35, 'Feby Nur Istiqomah', 'zFzxXTt4Ucl0T5L30knoXy0YZkZUcQEU', '$2y$13$XiKtTFNiM.cpBMc9ibKEmexL/il.O4NIGZTfY1WV8w8WErUyaftGq', NULL, 'feby@gmail.com', 10, 1593430997, 1593430997, 'KtIg5u1ludKBDQThXR1iRbHcIPs1CVft_1593430997'),
(36, 'Frass setia dika N', '7jd6w_v6gq9a3RrdfMDAgFoy57G0Ydc0', '$2y$13$sspMGkj2kjV.K6JNfFgEjeigKEQP7S6oJlRKthn8dozzS/T/W8QNW', NULL, 'setia@gmail.com', 10, 1593431364, 1593431364, 'FON22_HsYIFWfTly4wMkgb6UJD16jUPH_1593431364'),
(37, 'Fret Deni Iek', 'TKPeTwveD0sYL-nvNSKfif4g6LUzS4Ve', '$2y$13$vIEUIt6uJPk4DOUZguBGxuTJxRnkmlCdZ4IX9.Y9ich8ajeQlJelq', NULL, 'fret@gmail.com', 10, 1593431704, 1593431704, '8RjLSYMvXzb_Zpt6pgtgDtQ1tFe9onDM_1593431704'),
(38, 'Galih Gustiana Nurdin', 'vD5qdiZ0HVixvbagGEgih_7yJIYNKgOU', '$2y$13$7fb3sbnLPO5kxBqgGAPs6OheDY0M1HM1cbbKeUfVAvTAoJuVvapdK', NULL, 'gustiana@gmail.com', 10, 1593432177, 1593432177, 'JSpjVE0KtXp6wyjhuB9IDrmeWLekd_SO_1593432177'),
(39, 'Hilmi Hasbiya Zahrani Waltz', 'bjnRci8z5xPWXZMO3NDb3PyX9LFa4DBz', '$2y$13$711uI1Q0YnvbxzkTC8Azlesh2ZEZKO/s9zDrrb.J6L8MOYldQ3HQm', NULL, 'hilmi@gmail.com', 10, 1593432701, 1593432701, 'BvdOSHkBLwalUNwgeUJ9vcFDDSnPOauO_1593432701'),
(40, 'Hudaifah Priohastono', 'UbFIeuKwxQHUpD7QX-yOBjwtk87Rcfbs', '$2y$13$R/CtBaSpsahgF8Gqtp50meZx1R4zWH/etlGMJYNPwXeF2jDi1R15u', NULL, 'hudaifah@gmail.com', 10, 1593433035, 1593433035, 'wBYyEUtYg8Vh1QcPS5XajOY6MppKayrV_1593433035'),
(41, 'HUSNIA', 'HnwK-Yf2Lv7oJQvY8ZclL6JVByZBuYLs', '$2y$13$QXf9y2JHbqVGOIjsKceecOoQiaJM/W6gQ0FE2xfOLO/M2/HNb1KLO', NULL, 'husnia@gmail.com', 10, 1593433260, 1593433260, 'kRjD7FmeBVwiOAKRTbaFjqQQIlMZ37L7_1593433260'),
(42, 'Iis Sofiatuzzulfa', '-OmnqeS2rbaihe6f1h1dNlCgxpYKlvMK', '$2y$13$CKOY9y/5l2gVEOVg7hpq5uSOLYd3nJPXRjQNYXrHDZ7gCslsKlGmu', NULL, 'lis@gmail.com', 10, 1593433498, 1593433498, 'uADVo1bvVuSM-hIFHegnGmTA0ZDLPW7A_1593433498'),
(43, 'ILHAM DEAN ABDILLAH', 'OdqrsVYHna0OfoGBviBOpdYNLd7Jh8ht', '$2y$13$2OfkK.tDMoLaJE28cXQhr.z3ruXsdFv1nCwI9F6aN/WrMtcEn8zSi', NULL, 'ilham@gmail.com', 10, 1593433784, 1593433784, 'BFulOo-gLt5bDKYsG6EQbawj86ywjbzs_1593433784'),
(44, 'ILHAM KADLAWI', 'zOpwVNJ91r6tCK-RWRW8Ply9pRim-1gg', '$2y$13$gQZA0Sqi.X4kW3vsFQpK6.nbcdgagaTSjTioHCMOsHQeigoLFVuoe', NULL, 'ilhamkadlawi@gmail.com', 10, 1593434040, 1593434040, 'Bu-cmU3LZweRe64yv5fSuTsxxkCbuUnL_1593434040'),
(45, 'Jackson Toisuta', 'eK8Y3m2MbJZept1f21RMbVY-moySeSVa', '$2y$13$vhNF4tDc7jAV1S3EN5WX5.IZCa8X4C0y6IFqRdp0qUjjzVIXUchwa', NULL, 'jacson@gmail.com', 10, 1593434264, 1593434264, 'Eh-eMWPY3aRES7jeOR4wZICRJ8SMAXpf_1593434264'),
(46, 'Jumiana', 'C88wy1_CNuJ2tThGUg87qnPvCYkuPUor', '$2y$13$1w/2YKLbsrhEyQWr8Hx4x.hKOYMeYD/FKTMp7j0Bhlc3deGXqSG4K', NULL, 'Jumiana@gmail.com', 10, 1593434462, 1593434462, 'xrAFD1Q1Ax35bDWyW9XY2YJIhJ0L24pw_1593434462'),
(47, 'Kartiko Damarjati', '3KVq1xRlf3QyDHbtk5HqArC1m4KL9_XR', '$2y$13$auVSEr1L7maPT6U53JnJiuXWL8044hbRvDBXIDqFfeKWTdUGzEUHq', NULL, 'kartiko@gmail.com', 10, 1593434680, 1593434680, 'zdDB14fsAFg2u0Iin_xx8Ek2wNHlhP-__1593434680'),
(48, 'Khofip putra nadillah', 'A__Bz_UfSK9euGAzEyRoUMNaigtFXm1U', '$2y$13$Y8oV4UhVTWA8VZKPcexpTO9evHVMdZQDg/4Qo.hWvelIOxbynzz5W', NULL, 'khofip@gmail.com', 10, 1593434922, 1593434922, 'domQoj-V2zJv9CrYMXfvv-D2J22yXnDS_1593434922'),
(49, 'Kridhan pandego', 'Y1DcbHkotVkEZJloqEQwRZTWVdOv3Mtq', '$2y$13$o9QaYK6.5ygWETrMHmJK9u5Lxgw6h38T9vTlCGMfnpOczGaHROJEu', NULL, 'kridhan@gmail.com', 10, 1593435152, 1593435152, 'WFfqdXkPpUPqtBh3U58IvaFaIFxWK0yw_1593435152'),
(50, 'Tomy Hartono', 'aHriUTCi8erb9wfGasIx381-hAXc5ZD8', '$2y$13$wgNFBLPf2XW.Iw1Ha45i1OcmGL3yCcDNXJwN92Jwwoi6wKirJvF6O', NULL, 'hartono@gmail.com', 10, 1593435528, 1593435528, 'ZFj0QO9CLCjiY1lHeRK5GUXbDf7Jhi5b_1593435528'),
(51, 'Kurniawan sandi', 'Gg5fLUDuF8DMmkXhsE1jTglV8AhPB8tB', '$2y$13$w.r8vdAQRg.0AFfy.6s/S.ftvA/0skRYUxaJzJ1Q4xEakwGAatS52', NULL, 'kurniawan@gmail.com', 10, 1593435923, 1593435923, '4WqUpFp1CXE5eNd5JPZZSM0QKKSAcz6R_1593435923');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_training`
--
ALTER TABLE `data_training`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indeks untuk tabel `parameter`
--
ALTER TABLE `parameter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pilihan`
--
ALTER TABLE `pilihan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `responden`
--
ALTER TABLE `responden`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_training`
--
ALTER TABLE `data_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `parameter`
--
ALTER TABLE `parameter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `pilihan`
--
ALTER TABLE `pilihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT untuk tabel `responden`
--
ALTER TABLE `responden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

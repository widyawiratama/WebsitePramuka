-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Jan 2017 pada 14.17
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pramuka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `level` enum('Admin','User') NOT NULL DEFAULT 'User',
  `username` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `level`, `username`, `email`, `password`) VALUES
(1, 'Admin', 'admin', 'widyawiratama15@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'User', 'user1', 'user1@gmail.com', '24c9e15e52afc47c225b757e7bee1f9d'),
(64, 'User', 'user2', 'user2@gmail.com', '7e58d63b60197ceb55a1c487989a3720'),
(65, 'User', 'user3', 'user3@gmail.com', '92877af70a45fd6a2ed7fe81e1236b78'),
(66, 'User', 'user4', 'user4@gmail.com', '3f02ebe3d7929b091e3d8ccfde2f3bc6'),
(67, 'User', 'user5', 'user5@gmail.com', '0a791842f52a0acfbb3a783378c066b8'),
(68, 'User', 'user7', 'user7@gmail.com', '3e0469fb134991f8f75a2760e409c6ed'),
(69, 'User', 'user6', 'user6@gmail.com', 'affec3b64cf90492377a8114c86fc093'),
(70, 'User', 'user9', 'user9@gmail.com', '8808a13b854c2563da1a5f6cb2130868');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `id_bio` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `nta` int(20) NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `gol_darah` enum('A','B','AB','O') NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','Budha','Hindu','Khonghucu') NOT NULL,
  `jabatan` enum('Siaga','Penggalang','Penegak','Pembina','Pelatih') NOT NULL,
  `Pangkalan` varchar(60) NOT NULL,
  `id_prop` int(5) NOT NULL,
  `id_kota` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id_bio`, `id`, `nama`, `nta`, `tmpt_lahir`, `tgl_lahir`, `alamat`, `gol_darah`, `agama`, `jabatan`, `Pangkalan`, `id_prop`, `id_kota`) VALUES
(2, 1, 'Widya Wiratama', 10100101, 'Semarang', '1994-10-15', 'JL. Satrio Wibowo III no. 8', 'O', 'Islam', 'Pembina', 'SMA Sejahtera', 14, 225),
(3, 68, 'User Tujuh', 101001010, 'Semarang', '1994-10-22', 'JL Jalan Banyak Anak Kecil', 'AB', 'Islam', 'Penegak', 'SMA Sejahtera', 17, 279);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(5) NOT NULL,
  `nm_kota` varchar(100) NOT NULL,
  `id_prop` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id_kota`, `nm_kota`, `id_prop`) VALUES
(1, 'Kabupaten Aceh Barat', 1),
(2, 'Kabupaten Aceh Barat Daya', 1),
(3, 'Kabupaten Aceh Besar', 1),
(4, 'Kabupaten Aceh Jaya', 1),
(5, 'Kabupaten Aceh Selatan', 1),
(6, 'Kabupaten Aceh Singkil', 1),
(7, 'Kabupaten Aceh Tamiang', 1),
(8, 'Kabupaten Aceh Tengah', 1),
(9, 'Kabupaten Aceh Tenggara', 1),
(10, 'Kabupaten Aceh Timur', 1),
(11, 'Kabupaten Aceh Utara', 1),
(12, 'Kabupaten Bener Meriah', 1),
(13, 'Kabupaten Bireuen', 1),
(14, 'Kabupaten Gayo Lues', 1),
(15, 'Kabupaten Nagan Raya', 1),
(16, 'Kabupaten Pidie', 1),
(17, 'Kabupaten Pidie Jaya', 1),
(18, 'Kabupaten Simeulue', 1),
(19, 'Kota Banda Aceh', 1),
(20, 'Kota Langsa', 1),
(21, 'Kota Lhokseumawe', 1),
(22, 'Kota Sabang', 1),
(23, 'Kota Subulussalam', 1),
(24, 'Kabupaten Asahan', 2),
(25, 'Kabupaten Batu Bara', 2),
(26, 'Kabupaten Dairi', 2),
(27, 'Kabupaten Deli Serdang', 2),
(28, 'Kabupaten Humbang Hasundutan', 2),
(29, 'Kabupaten Karo', 2),
(30, 'Kabupaten Labuhanbatu', 2),
(31, 'Kabupaten Labuhanbatu Selatan', 2),
(32, 'Kabupaten Labuhanbatu Utara', 2),
(33, 'Kabupaten Langkat', 2),
(34, 'Kabupaten Mandailing Natal', 2),
(35, 'Kabupaten Nias', 2),
(36, 'Kabupaten Nias Barat', 2),
(37, 'Kabupaten Nias Selatan', 2),
(38, 'Kabupaten Nias Utara', 2),
(39, 'Kabupaten Padang Lawas', 2),
(40, 'Kabupaten Padang Lawas Utara', 2),
(41, 'Kabupaten Pakpak Bharat', 2),
(42, 'Kabupaten Samosir', 2),
(43, 'Kabupaten Serdang Bedagai', 2),
(44, 'Kabupaten Simalungun', 2),
(45, 'Kabupaten Tapanuli Selatan', 2),
(46, 'Kabupaten Tapanuli Tengah', 2),
(47, 'Kabupaten Tapanuli Utara', 2),
(48, 'Kabupaten Toba Samosir', 2),
(49, 'Kota Binjai', 2),
(50, 'Kota Gunung Sitoli', 2),
(51, 'Kota Medan', 2),
(52, 'Kota Padang Sidempuan', 2),
(53, 'Kota Pematangsiantar', 2),
(54, 'Kota Sibolga', 2),
(55, 'Kota Tanjung Balai', 2),
(56, 'Kota Tebing Tinggi', 2),
(57, 'Kabupaten Bengkulu Selatan', 3),
(58, 'Kabupaten Bengkulu Tengah', 3),
(59, 'Kabupaten Bengkulu Utara', 3),
(60, 'Kabupaten Benteng', 3),
(61, 'Kabupaten Kaur', 3),
(62, 'Kabupaten Kepahiang', 3),
(63, 'Kabupaten Lebong', 3),
(64, 'Kabupaten Mukomuko', 3),
(65, 'Kabupaten Rejang Lebong', 3),
(66, 'Kabupaten Seluma', 3),
(67, 'Kota Bengkulu', 3),
(68, 'Kabupaten Batang Hari', 4),
(69, 'Kabupaten Bungo', 4),
(70, 'Kabupaten Kerinci', 4),
(71, 'Kabupaten Merangin', 4),
(72, 'Kabupaten Muaro Jambi', 4),
(73, 'Kabupaten Sarolangun', 4),
(74, 'Kabupaten Tanjung Jabung Barat', 4),
(75, 'Kabupaten Tanjung Jabung Timur', 4),
(76, 'Kabupaten Tebo', 4),
(77, 'Kota Jambi', 4),
(78, 'Kota Sungai Penuh', 4),
(79, 'Kabupaten Bengkalis', 5),
(80, 'Kabupaten Indragiri Hilir', 5),
(81, 'Kabupaten Indragiri Hulu', 5),
(82, 'Kabupaten Kampar', 5),
(83, 'Kabupaten Kuantan Singingi', 5),
(84, 'Kabupaten Pelalawan', 5),
(85, 'Kabupaten Rokan Hilir', 5),
(86, 'Kabupaten Rokan Hulu', 5),
(87, 'Kabupaten Siak', 5),
(88, 'Kota Pekanbaru', 5),
(89, 'Kota Dumai', 5),
(90, 'Kabupaten Kepulauan Meranti', 5),
(91, 'Kabupaten Agam', 6),
(92, 'Kabupaten Dharmasraya', 6),
(93, 'Kabupaten Kepulauan Mentawai', 6),
(94, 'Kabupaten Lima Puluh Kota', 6),
(95, 'Kabupaten Padang Pariaman', 6),
(96, 'Kabupaten Pasaman', 6),
(97, 'Kabupaten Pasaman Barat', 6),
(98, 'Kabupaten Pesisir Selatan', 6),
(99, 'Kabupaten Sijunjung', 6),
(100, 'Kabupaten Solok', 6),
(101, 'Kabupaten Solok Selatan', 6),
(102, 'Kabupaten Tanah Datar', 6),
(103, 'Kota Bukittinggi', 6),
(104, 'Kota Padang', 6),
(105, 'Kota Padangpanjang', 6),
(106, 'Kota Pariaman', 6),
(107, 'Kota Payakumbuh', 6),
(108, 'Kota Sawahlunto', 6),
(109, 'Kota Solok', 6),
(110, 'Kabupaten Banyuasin', 7),
(111, 'Kabupaten Empat Lawang', 7),
(112, 'Kabupaten Lahat', 7),
(113, 'Kabupaten Muara Enim', 7),
(114, 'Kabupaten Musi Banyuasin', 7),
(115, 'Kabupaten Musi Rawas', 7),
(116, 'Kabupaten Ogan Ilir', 7),
(117, 'Kabupaten Ogan Komering Ilir', 7),
(118, 'Kabupaten Ogan Komering Ulu', 7),
(119, 'Kabupaten Ogan Komering Ulu Selatan', 7),
(120, 'Kabupaten Ogan Komering Ulu Timur', 7),
(121, 'Kota Lubuklinggau', 7),
(122, 'Kota Pagar Alam', 7),
(123, 'Kota Palembang', 7),
(124, 'Kota Prabumulih', 7),
(125, 'Kabupaten Lampung Barat', 8),
(126, 'Kabupaten Lampung Selatan', 8),
(127, 'Kabupaten Lampung Tengah', 8),
(128, 'Kabupaten Lampung Timur', 8),
(129, 'Kabupaten Lampung Utara', 8),
(130, 'Kabupaten Mesuji', 8),
(131, 'Kabupaten Pesawaran', 8),
(132, 'Kabupaten Pringsewu', 8),
(133, 'Kabupaten Tanggamus', 8),
(134, 'Kabupaten Tulang Bawang', 8),
(135, 'Kabupaten Tulang Bawang Barat', 8),
(136, 'Kabupaten Way Kanan', 8),
(137, 'Kota Bandar Lampung', 8),
(138, 'Kota Metro', 8),
(139, 'Kabupaten Bangka', 9),
(140, 'Kabupaten Bangka Barat', 9),
(141, 'Kabupaten Bangka Selatan', 9),
(142, 'Kabupaten Bangka Tengah', 9),
(143, 'Kabupaten Belitung', 9),
(144, 'Kabupaten Belitung Timur', 9),
(145, 'Kota Pangkal Pinang', 9),
(146, 'Kabupaten Bintan', 10),
(147, 'Kabupaten Karimun', 10),
(148, 'Kabupaten Kepulauan Anambas', 10),
(149, 'Kabupaten Lingga', 10),
(150, 'Kabupaten Natuna', 10),
(151, 'Kota Batam', 10),
(152, 'Kota Tanjung Pinang', 10),
(153, 'Kabupaten Lebak', 11),
(154, 'Kabupaten Pandeglang', 11),
(155, 'Kabupaten Serang', 11),
(156, 'Kabupaten Tangerang', 11),
(157, 'Kota Cilegon', 11),
(158, 'Kota Serang', 11),
(159, 'Kota Tangerang', 11),
(160, 'Kota Tangerang Selatan', 11),
(161, 'Kabupaten Bandung', 12),
(162, 'Kabupaten Bandung Barat', 12),
(163, 'Kabupaten Bekasi', 12),
(164, 'Kabupaten Bogor', 12),
(165, 'Kabupaten Ciamis', 12),
(166, 'Kabupaten Cianjur', 12),
(167, 'Kabupaten Cirebon', 12),
(168, 'Kabupaten Garut', 12),
(169, 'Kabupaten Indramayu', 12),
(170, 'Kabupaten Karawang', 12),
(171, 'Kabupaten Kuningan', 12),
(172, 'Kabupaten Majalengka', 12),
(173, 'Kabupaten Purwakarta', 12),
(174, 'Kabupaten Subang', 12),
(175, 'Kabupaten Sukabumi', 12),
(176, 'Kabupaten Sumedang', 12),
(177, 'Kabupaten Tasikmalaya', 12),
(178, 'Kota Bandung', 12),
(179, 'Kota Banjar', 12),
(180, 'Kota Bekasi', 12),
(181, 'Kota Bogor', 12),
(182, 'Kota Cimahi', 12),
(183, 'Kota Cirebon', 12),
(184, 'Kota Depok', 12),
(185, 'Kota Sukabumi', 12),
(186, 'Kota Tasikmalaya', 12),
(187, 'Kabupaten Administrasi Kepulauan Seribu', 13),
(188, 'Kota Administrasi Jakarta Barat', 13),
(189, 'Kota Administrasi Jakarta Pusat', 13),
(190, 'Kota Administrasi Jakarta Selatan', 13),
(191, 'Kota Administrasi Jakarta Timur', 13),
(192, 'Kota Administrasi Jakarta Utara', 13),
(193, 'Kabupaten Banjarnegara', 14),
(194, 'Kabupaten Banyumas', 14),
(195, 'Kabupaten Batang', 14),
(196, 'Kabupaten Blora', 14),
(197, 'Kabupaten Boyolali', 14),
(198, 'Kabupaten Brebes', 14),
(199, 'Kabupaten Cilacap', 14),
(200, 'Kabupaten Demak', 14),
(201, 'Kabupaten Grobogan', 14),
(202, 'Kabupaten Jepara', 14),
(203, 'Kabupaten Karanganyar', 14),
(204, 'Kabupaten Kebumen', 14),
(205, 'Kabupaten Kendal', 14),
(206, 'Kabupaten Klaten', 14),
(207, 'Kabupaten Kudus', 14),
(208, 'Kabupaten Magelang', 14),
(209, 'Kabupaten Pati', 14),
(210, 'Kabupaten Pekalongan', 14),
(211, 'Kabupaten Pemalang', 14),
(212, 'Kabupaten Purbalingga', 14),
(213, 'Kabupaten Purworejo', 14),
(214, 'Kabupaten Rembang', 14),
(215, 'Kabupaten Semarang', 14),
(216, 'Kabupaten Sragen', 14),
(217, 'Kabupaten Sukoharjo', 14),
(218, 'Kabupaten Tegal', 14),
(219, 'Kabupaten Temanggung', 14),
(220, 'Kabupaten Wonogiri', 14),
(221, 'Kabupaten Wonosobo', 14),
(222, 'Kota Magelang', 14),
(223, 'Kota Pekalongan', 14),
(224, 'Kota Salatiga', 14),
(225, 'Kota Semarang', 14),
(226, 'Kota Surakarta', 14),
(227, 'Kota Tegal', 14),
(228, 'Kabupaten Bangkalan', 15),
(229, 'Kabupaten Banyuwangi', 15),
(230, 'Kabupaten Blitar', 15),
(231, 'Kabupaten Bojonegoro', 15),
(232, 'Kabupaten Bondowoso', 15),
(233, 'Kabupaten Gresik', 15),
(234, 'Kabupaten Jember', 15),
(235, 'Kabupaten Jombang', 15),
(236, 'Kabupaten Kediri', 15),
(237, 'Kabupaten Lamongan', 15),
(238, 'Kabupaten Lumajang', 15),
(239, 'Kabupaten Madiun', 15),
(240, 'Kabupaten Magetan', 15),
(241, 'Kabupaten Malang', 15),
(242, 'Kabupaten Mojokerto', 15),
(243, 'Kabupaten Nganjuk', 15),
(244, 'Kabupaten Ngawi', 15),
(245, 'Kabupaten Pacitan', 15),
(246, 'Kabupaten Pamekasan', 15),
(247, 'Kabupaten Pasuruan', 15),
(248, 'Kabupaten Ponorogo', 15),
(249, 'Kabupaten Probolinggo', 15),
(250, 'Kabupaten Sampang', 15),
(251, 'Kabupaten Sidoarjo', 15),
(252, 'Kabupaten Situbondo', 15),
(253, 'Kabupaten Sumenep', 15),
(254, 'Kabupaten Trenggalek', 15),
(255, 'Kabupaten Tuban', 15),
(256, 'Kabupaten Tulungagung', 15),
(257, 'Kota Batu', 15),
(258, 'Kota Blitar', 15),
(259, 'Kota Kediri', 15),
(260, 'Kota Madiun', 15),
(261, 'Kota Malang', 15),
(262, 'Kota Mojokerto', 15),
(263, 'Kota Pasuruan', 15),
(264, 'Kota Probolinggo', 15),
(265, 'Kota Surabaya', 15),
(266, 'Kabupaten Bantul', 16),
(267, 'Kabupaten Gunung Kidul', 16),
(268, 'Kabupaten Kulon Progo', 16),
(269, 'Kabupaten Sleman', 16),
(270, 'Kota Yogyakarta', 16),
(271, 'Kabupaten Badung', 17),
(272, 'Kabupaten Bangli', 17),
(273, 'Kabupaten Buleleng', 17),
(274, 'Kabupaten Gianyar', 17),
(275, 'Kabupaten Jembrana', 17),
(276, 'Kabupaten Karangasem', 17),
(277, 'Kabupaten Klungkung', 17),
(278, 'Kabupaten Tabanan', 17),
(279, 'Kota Denpasar', 17),
(280, 'Kabupaten Bima', 18),
(281, 'Kabupaten Dompu', 18),
(282, 'Kabupaten Lombok Barat', 18),
(283, 'Kabupaten Lombok Tengah', 18),
(284, 'Kabupaten Lombok Timur', 18),
(285, 'Kabupaten Lombok Utara', 18),
(286, 'Kabupaten Sumbawa', 18),
(287, 'Kabupaten Sumbawa Barat', 18),
(288, 'Kota Bima', 18),
(289, 'Kota Mataram', 18),
(290, 'Kabupaten Kupang', 19),
(291, 'Kabupaten Timor Tengah Selatan', 19),
(292, 'Kabupaten Timor Tengah Utara', 19),
(293, 'Kabupaten Belu', 19),
(294, 'Kabupaten Alor', 19),
(295, 'Kabupaten Flores Timur', 19),
(296, 'Kabupaten Sikka', 19),
(297, 'Kabupaten Ende', 19),
(298, 'Kabupaten Ngada', 19),
(299, 'Kabupaten Manggarai', 19),
(300, 'Kabupaten Sumba Timur', 19),
(301, 'Kabupaten Sumba Barat', 19),
(302, 'Kabupaten Lembata', 19),
(303, 'Kabupaten Rote Ndao', 19),
(304, 'Kabupaten Manggarai Barat', 19),
(305, 'Kabupaten Nagekeo', 19),
(306, 'Kabupaten Sumba Tengah', 19),
(307, 'Kabupaten Sumba Barat Daya', 19),
(308, 'Kabupaten Manggarai Timur', 19),
(309, 'Kabupaten Sabu Raijua', 19),
(310, 'Kota Kupang', 19),
(311, 'Kabupaten Bengkayang', 20),
(312, 'Kabupaten Kapuas Hulu', 20),
(313, 'Kabupaten Kayong Utara', 20),
(314, 'Kabupaten Ketapang', 20),
(315, 'Kabupaten Kubu Raya', 20),
(316, 'Kabupaten Landak', 20),
(317, 'Kabupaten Melawi', 20),
(318, 'Kabupaten Pontianak', 20),
(319, 'Kabupaten Sambas', 20),
(320, 'Kabupaten Sanggau', 20),
(321, 'Kabupaten Sekadau', 20),
(322, 'Kabupaten Sintang', 20),
(323, 'Kota Pontianak', 20),
(324, 'Kota Singkawang', 20),
(325, 'Kabupaten Balangan', 21),
(326, 'Kabupaten Banjar', 21),
(327, 'Kabupaten Barito Kuala', 21),
(328, 'Kabupaten Hulu Sungai Selatan', 21),
(329, 'Kabupaten Hulu Sungai Tengah', 21),
(330, 'Kabupaten Hulu Sungai Utara', 21),
(331, 'Kabupaten Kotabaru', 21),
(332, 'Kabupaten Tabalong', 21),
(333, 'Kabupaten Tanah Bumbu', 21),
(334, 'Kabupaten Tanah Laut', 21),
(335, 'Kabupaten Tapin', 21),
(336, 'Kota Banjarbaru', 21),
(337, 'Kota Banjarmasin', 21),
(338, 'Kabupaten Barito Selatan', 22),
(339, 'Kabupaten Barito Timur', 22),
(340, 'Kabupaten Barito Utara', 22),
(341, 'Kabupaten Gunung Mas', 22),
(342, 'Kabupaten Kapuas', 22),
(343, 'Kabupaten Katingan', 22),
(344, 'Kabupaten Kotawaringin Barat', 22),
(345, 'Kabupaten Kotawaringin Timur', 22),
(346, 'Kabupaten Lamandau', 22),
(347, 'Kabupaten Murung Raya', 22),
(348, 'Kabupaten Pulang Pisau', 22),
(349, 'Kabupaten Sukamara', 22),
(350, 'Kabupaten Seruyan', 22),
(351, 'Kota Palangka Raya', 22),
(352, 'Kabupaten Berau', 23),
(353, 'Kabupaten Bulungan', 23),
(354, 'Kabupaten Kutai Barat', 23),
(355, 'Kabupaten Kutai Kartanegara', 23),
(356, 'Kabupaten Kutai Timur', 23),
(357, 'Kabupaten Malinau', 23),
(358, 'Kabupaten Nunukan', 23),
(359, 'Kabupaten Paser', 23),
(360, 'Kabupaten Penajam Paser Utara', 23),
(361, 'Kabupaten Tana Tidung', 23),
(362, 'Kota Balikpapan', 23),
(363, 'Kota Bontang', 23),
(364, 'Kota Samarinda', 23),
(365, 'Kota Tarakan', 23),
(366, 'Kabupaten Boalemo', 24),
(367, 'Kabupaten Bone Bolango', 24),
(368, 'Kabupaten Gorontalo', 24),
(369, 'Kabupaten Gorontalo Utara', 24),
(370, 'Kabupaten Pohuwato', 24),
(371, 'Kota Gorontalo', 24),
(372, 'Kabupaten Bantaeng', 25),
(373, 'Kabupaten Barru', 25),
(374, 'Kabupaten Bone', 25),
(375, 'Kabupaten Bulukumba', 25),
(376, 'Kabupaten Enrekang', 25),
(377, 'Kabupaten Gowa', 25),
(378, 'Kabupaten Jeneponto', 25),
(379, 'Kabupaten Kepulauan Selayar', 25),
(380, 'Kabupaten Luwu', 25),
(381, 'Kabupaten Luwu Timur', 25),
(382, 'Kabupaten Luwu Utara', 25),
(383, 'Kabupaten Maros', 25),
(384, 'Kabupaten Pangkajene dan Kepulauan', 25),
(385, 'Kabupaten Pinrang', 25),
(386, 'Kabupaten Sidenreng Rappang', 25),
(387, 'Kabupaten Sinjai', 25),
(388, 'Kabupaten Soppeng', 25),
(389, 'Kabupaten Takalar', 25),
(390, 'Kabupaten Tana Toraja', 25),
(391, 'Kabupaten Toraja Utara', 25),
(392, 'Kabupaten Wajo', 25),
(393, 'Kota Makassar', 25),
(394, 'Kota Palopo', 25),
(395, 'Kota Parepare', 25),
(396, 'Kabupaten Bombana', 26),
(397, 'Kabupaten Buton', 26),
(398, 'Kabupaten Buton Utara', 26),
(399, 'Kabupaten Kolaka', 26),
(400, 'Kabupaten Kolaka Utara', 26),
(401, 'Kabupaten Konawe', 26),
(402, 'Kabupaten Konawe Selatan', 26),
(403, 'Kabupaten Konawe Utara', 26),
(404, 'Kabupaten Muna', 26),
(405, 'Kabupaten Wakatobi', 26),
(406, 'Kota Bau-Bau', 26),
(407, 'Kota Kendari', 26),
(408, 'Kabupaten Banggai', 27),
(409, 'Kabupaten Banggai Kepulauan', 27),
(410, 'Kabupaten Buol', 27),
(411, 'Kabupaten Donggala', 27),
(412, 'Kabupaten Morowali', 27),
(413, 'Kabupaten Parigi Moutong', 27),
(414, 'Kabupaten Poso', 27),
(415, 'Kabupaten Tojo Una-Una', 27),
(416, 'Kabupaten Toli-Toli', 27),
(417, 'Kabupaten Sigi', 27),
(418, 'Kota Palu', 27),
(419, 'Kabupaten Bolaang Mongondow', 28),
(420, 'Kabupaten Bolaang Mongondow Selatan', 28),
(421, 'Kabupaten Bolaang Mongondow Timur', 28),
(422, 'Kabupaten Bolaang Mongondow Utara', 28),
(423, 'Kabupaten Kepulauan Sangihe', 28),
(424, 'Kabupaten Kepulauan Siau Tagulandang Biaro', 28),
(425, 'Kabupaten Kepulauan Talaud', 28),
(426, 'Kabupaten Minahasa', 28),
(427, 'Kabupaten Minahasa Selatan', 28),
(428, 'Kabupaten Minahasa Tenggara', 28),
(429, 'Kabupaten Minahasa Utara', 28),
(430, 'Kota Bitung', 28),
(431, 'Kota Kotamobagu', 28),
(432, 'Kota Manado', 28),
(433, 'Kota Tomohon', 28),
(434, 'Kabupaten Majene', 29),
(435, 'Kabupaten Mamasa', 29),
(436, 'Kabupaten Mamuju', 29),
(437, 'Kabupaten Mamuju Utara', 29),
(438, 'Kabupaten Polewali Mandar', 29),
(439, 'Kabupaten Buru', 30),
(440, 'Kabupaten Buru Selatan', 30),
(441, 'Kabupaten Kepulauan Aru', 30),
(442, 'Kabupaten Maluku Barat Daya', 30),
(443, 'Kabupaten Maluku Tengah', 30),
(444, 'Kabupaten Maluku Tenggara', 30),
(445, 'Kabupaten Maluku Tenggara Barat', 30),
(446, 'Kabupaten Seram Bagian Barat', 30),
(447, 'Kabupaten Seram Bagian Timur', 30),
(448, 'Kota Ambon', 30),
(449, 'Kota Tual', 30),
(450, 'Kabupaten Halmahera Barat', 31),
(451, 'Kabupaten Halmahera Tengah', 31),
(452, 'Kabupaten Halmahera Utara', 31),
(453, 'Kabupaten Halmahera Selatan', 31),
(454, 'Kabupaten Kepulauan Sula', 31),
(455, 'Kabupaten Halmahera Timur', 31),
(456, 'Kabupaten Pulau Morotai', 31),
(457, 'Kota Ternate', 31),
(458, 'Kota Tidore Kepulauan', 31),
(459, 'Kabupaten Asmat', 32),
(460, 'Kabupaten Biak Numfor', 32),
(461, 'Kabupaten Boven Digoel', 32),
(462, 'Kabupaten Deiyai', 32),
(463, 'Kabupaten Dogiyai', 32),
(464, 'Kabupaten Intan Jaya', 32),
(465, 'Kabupaten Jayapura', 32),
(466, 'Kabupaten Jayawijaya', 32),
(467, 'Kabupaten Keerom', 32),
(468, 'Kabupaten Kepulauan Yapen', 32),
(469, 'Kabupaten Lanny Jaya', 32),
(470, 'Kabupaten Mamberamo Raya', 32),
(471, 'Kabupaten Mamberamo Tengah', 32),
(472, 'Kabupaten Mappi', 32),
(473, 'Kabupaten Merauke', 32),
(474, 'Kabupaten Mimika', 32),
(475, 'Kabupaten Nabire', 32),
(476, 'Kabupaten Nduga', 32),
(477, 'Kabupaten Paniai', 32),
(478, 'Kabupaten Pegunungan Bintang', 32),
(479, 'Kabupaten Puncak', 32),
(480, 'Kabupaten Puncak Jaya', 32),
(481, 'Kabupaten Sarmi', 32),
(482, 'Kabupaten Supiori', 32),
(483, 'Kabupaten Tolikara', 32),
(484, 'Kabupaten Waropen', 32),
(485, 'Kabupaten Yahukimo', 32),
(486, 'Kabupaten Yalimo', 32),
(487, 'Kota Jayapura', 32),
(488, 'Kabupaten Fakfak', 33),
(489, 'Kabupaten Kaimana', 33),
(490, 'Kabupaten Manokwari', 33),
(491, 'Kabupaten Maybrat', 33),
(492, 'Kabupaten Raja Ampat', 33),
(493, 'Kabupaten Sorong', 33),
(494, 'Kabupaten Sorong Selatan', 33),
(495, 'Kabupaten Tambrauw', 33),
(496, 'Kabupaten Teluk Bintuni', 33),
(497, 'Kabupaten Teluk Wondama', 33),
(498, 'Kota Sorong', 33);

-- --------------------------------------------------------

--
-- Struktur dari tabel `propinsi`
--

CREATE TABLE `propinsi` (
  `id_prop` int(4) NOT NULL,
  `nm_prop` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `propinsi`
--

INSERT INTO `propinsi` (`id_prop`, `nm_prop`) VALUES
(1, 'Aceh'),
(2, 'Sumatera Utara'),
(3, 'Bengkulu'),
(4, 'Jambi'),
(5, 'Riau'),
(6, 'Sumatera Barat'),
(7, 'Sumatera Selatan'),
(8, 'Lampung'),
(9, 'Kepulauan Bangka Belitung'),
(10, 'Kepulauan Riau'),
(11, 'Banten'),
(12, 'Jawa Barat'),
(13, 'DKI Jakarta'),
(14, 'Jawa Tengah'),
(15, 'Jawa Timur'),
(16, 'Daerah Istimewa Yogyakarta'),
(17, 'Bali'),
(18, 'Nusa Tenggara Barat'),
(19, 'Nusa Tenggara Timur'),
(20, 'Kalimantan Barat'),
(21, 'Kalimantan Selatan'),
(22, 'Kalimantan Tengah'),
(23, 'Kalimantan Timur'),
(24, 'Gorontalo'),
(25, 'Sulawesi Selatan'),
(26, 'Sulawesi Tenggara'),
(27, 'Sulawesi Tengah'),
(28, 'Sulawesi Utara'),
(29, 'Sulawesi Barat'),
(30, 'Maluku'),
(31, 'Maluku Utara'),
(32, 'Papua'),
(33, 'Papua Barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tags_berita`
--

CREATE TABLE `tags_berita` (
  `id_tags_berita` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `id_tags` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tags_berita`
--

INSERT INTO `tags_berita` (`id_tags_berita`, `id_berita`, `id_tags`) VALUES
(5, 63, 60),
(6, 63, 61),
(7, 63, 62),
(8, 63, 63),
(9, 64, 60),
(10, 64, 61),
(11, 64, 62),
(12, 64, 63),
(13, 64, 65),
(14, 65, 66),
(15, 65, 67),
(16, 65, 68),
(17, 65, 69),
(18, 65, 70),
(19, 65, 71),
(20, 65, 72),
(21, 65, 73),
(22, 65, 74),
(23, 66, 75),
(24, 66, 71);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_agenda`
--

CREATE TABLE `tb_agenda` (
  `id_agenda` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `judul_agenda` varchar(40) NOT NULL,
  `agenda` text NOT NULL,
  `tgl_agenda` datetime NOT NULL,
  `tgl_post_agenda` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_agenda`
--

INSERT INTO `tb_agenda` (`id_agenda`, `id`, `judul_agenda`, `agenda`, `tgl_agenda`, `tgl_post_agenda`) VALUES
(1, 1, 'coba agenda', 'agenda ini hanya untuk percobaan aja', '2016-12-22 09:00:00', '2016-12-22 07:25:35'),
(11, 1, 'jajal edit hlo', 'isi isian aaaaaaaaaaa aja aa hlo', '2016-12-15 16:00:00', '2016-12-18 13:12:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `judul_berita` varchar(200) NOT NULL,
  `berita` text NOT NULL,
  `tgl_berita` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `id`, `judul_berita`, `berita`, `tgl_berita`) VALUES
(9, 1, 'Bertemu Ka Kwarnas, Pramuka SMA Taruna Nusantara Magelang Diminta Amalkan Dasa Darma dan Trisatya', 'Jakarta â€“ Usai mengikuti kegiatan Jambore Malaysia ke 13 di Batu Metropolitan Park Ipoh, Kuala Lumpur, Malaysia pada 25 November hingga 1 Desember 2016 lalu, sebanyak 15 anggota Pramuka SMA Taruna Nusantara Magelang mengunjungi rumah Ketua Kwartir Nasional Gerakan Pramuka Kak Adhyaksa Dault di Jalan Pengadegan Raya, Kalibata, Jakarta Selatan, Sabtu (3/12/2016).<br><br>\n\nDalam kunjungan itu Pramuka SMA Taruna Nusantara Magelang melaporkan kegiatannya kepada Kak Adhyaksa selama mengikuti Jambore Malaysia. Menurut mereka kegiatan Jambore Malaysia cukup menyenangkan, menambah pengalaman, dan menambah sahabat baru dari negara lain.<br><br>\n\nPramuka SMA Taruna Nusantara Magelang tiba sekitar pukul 15.30 WIB dan disambut langsung oleh Kak Adhyaksa diruang tamu, terlihat suasana kekeluargaan dalam perbincangan mereka. Bahkan sesekali Kak Adhyaksa mengeluarkan kata guyonan-guyonan lucu untuk menghangatkan suasana.<br><br>\n\nâ€œTadi Satu persatu saya tanya cita-citanya Ingin jadi TNI, Dokter, Guru, atau Polisi, rata-rata jawaban mereka luar biasa, ini profesi-profesi yg melayani langsung masyarakat.,â€ kata Kak Adhyaksa.<br><br>\n\nSelain itu Kak Adhyaksa menyampaikan empat  pesan agar mereka rajin Ibadah, hormat dan sayangi kedua orangtua. Sebab kelak mereka akan jadi pemimpin yang melayani masyarakat.<br><br>\n\nâ€œrajin ibadah, hormat dan sayangi kedua orangtua, jadilah pemimpin yang ikhlas dan benar-benar melayani masyarakat, serta yang terakhir, amalkan Dasa Darma dan Trisatya Pramuka,â€ lanjutnya.<br><br>\n\nUsai berbincang diruang tamu, Kak Adhyaksa mengajak mereka berkililing melihat foto dan menceritakan sejarah awal dia menjadi mahasiswa, ketua KNPI, Menpora, Ketua Kwarnas dan beberapa prestasinya di dalam negeri serta luar negeri. (HK)', '2016-12-04 20:43:18'),
(63, 1, 'coba judul', '<p>acacacacacacacaca</p>', '2017-01-15 22:54:54'),
(64, 1, 'judul berita', '<p>jaoja</p><p>sadskjzbjhbsdsd</p><p>sdjbhsdbmsdsdkk sdjhdsjhds sjdhjdshds hsduhdskh</p><p>sdjkdsbkjcs kdskjdsn kdsjksdhnljds</p>', '2017-01-18 17:24:25'),
(65, 1, 'Keren ! Pramuka Kalibening Bersihkan Sampah Sepanjang 15 KM', '<p><strong>KALIBENING</strong> &ndash; Ratusan Anggota Pramuka se-Kwartir Ranting Kecamatan Kalibening perwakilan pangkalan MTS 1 Kalibening, MTS 2 Kalibening, SMPN 1, SMPN 2 dan SMPN 3 Kalibening serta pangkalan SMA Muhammadiyah Kalibening menggelar aksi bersih sampah di wilayah jalan utama Kalibening Karangkobar dan komplek pasar Kalibening hingga finish di kompleks hamparan kebun teh curug Kasinoman dengan total jarak pembersihan hingga 15 km, Sabtu (14/1/2017).</p><p>&lrm;Ketua panitia kegiatan Kak Abdul Manaf mengatakan, aksi bersih dan pungut sampah anggota Pramuka merupakan langkah kecil untuk sebuah impian yang besar, yakni masyarakat yang sadar akan kebersihan dan perilaku hidup sehat.</p><p>Fenomena sampah yang berserakan hampir di sepanjang jalan, kompleks pasar dan sudut pertokoan wilayah Kalibening menjadi pekerjaan bersama. Sebab, banyak masyarakat yang masih membuang sampah sembarangan serta belum tersedianya tempat pembuangan sampah akhir di wilayah Kecamatan Kalibening hingga Karangkobar.<br />&lrm;<br />Sementara itu, Ketua Kwartir Ranting Gerakan Pramuka Kalibening Ngadikan mengemukakan, aksi bersih dan pungut sampah oleh anggota Pramuka merupakan salah satu implementasi penanaman pendidikan karakter kepada generasi muda tentang pentingnya hidup bersih dan cinta lingkungan.</p><p>&ldquo;Sampah yang terkumpul hingga sore mencapai puluhan karung dan diangkut menggunakan 3 unit kendaraan milik Kwarran untuk selanjutnya dipilah antara sampah organik dan anorganik,&rdquo; paparnya.</p><p>Dengan terjun langsung di tengah masyarakat dalam bentuk bakti sosial diharapkan proses edukasi dan pembinaan yang diberikan kepada peserta didik akan lebih mengena tentang arti dan manfaat yang bisa diambil.&lrm;</p>', '2017-01-19 10:50:42'),
(66, 1, 'kebersihan', '<p>isi kebersihan</p><p>pohon</p><p>tanaman</p>', '2017-01-19 15:10:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tags`
--

CREATE TABLE `tb_tags` (
  `id_tags` int(11) NOT NULL,
  `nm_tags` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tags`
--

INSERT INTO `tb_tags` (`id_tags`, `nm_tags`) VALUES
(60, 'aa'),
(61, 'bb'),
(62, 'cc'),
(63, 'dd'),
(64, 'zz'),
(65, 'vv'),
(66, 'hidup sehat'),
(67, 'sehat'),
(68, 'kalibening'),
(69, 'pramuka'),
(70, 'MTS'),
(71, 'bersih'),
(72, 'sampah'),
(73, 'kasinoman'),
(74, 'kebun'),
(75, 'ke');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id_bio`),
  ADD KEY `id` (`id`),
  ADD KEY `id_prop` (`id_prop`),
  ADD KEY `id_kota` (`id_kota`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`),
  ADD KEY `kota_id` (`id_prop`);

--
-- Indexes for table `propinsi`
--
ALTER TABLE `propinsi`
  ADD PRIMARY KEY (`id_prop`);

--
-- Indexes for table `tags_berita`
--
ALTER TABLE `tags_berita`
  ADD PRIMARY KEY (`id_tags_berita`),
  ADD KEY `id_berita` (`id_berita`),
  ADD KEY `id_tags` (`id_tags`);

--
-- Indexes for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD PRIMARY KEY (`id_agenda`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_akun` (`id`);

--
-- Indexes for table `tb_tags`
--
ALTER TABLE `tb_tags`
  ADD PRIMARY KEY (`id_tags`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id_bio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=499;
--
-- AUTO_INCREMENT for table `tags_berita`
--
ALTER TABLE `tags_berita`
  MODIFY `id_tags_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `tb_tags`
--
ALTER TABLE `tb_tags`
  MODIFY `id_tags` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD CONSTRAINT `fk_id_bio` FOREIGN KEY (`id`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_kota_bio` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_prop_bio` FOREIGN KEY (`id_prop`) REFERENCES `propinsi` (`id_prop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD CONSTRAINT `fk_id_prop` FOREIGN KEY (`id_prop`) REFERENCES `propinsi` (`id_prop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tags_berita`
--
ALTER TABLE `tags_berita`
  ADD CONSTRAINT `fk_id_berita` FOREIGN KEY (`id_berita`) REFERENCES `tb_berita` (`id_berita`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_tags` FOREIGN KEY (`id_tags`) REFERENCES `tb_tags` (`id_tags`);

--
-- Ketidakleluasaan untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD CONSTRAINT `fk_id` FOREIGN KEY (`id`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

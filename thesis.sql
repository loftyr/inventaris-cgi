-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Feb 2020 pada 11.58
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_log`
--

CREATE TABLE `activity_log` (
  `activity_log_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `action` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `activity_log`
--

INSERT INTO `activity_log` (`activity_log_id`, `username`, `date`, `action`) VALUES
(281, 'admin', '2020-02-15 10:16:19', 'Edit Device Type Spec PC'),
(282, 'admin', '2020-02-15 10:16:28', 'Edit Device Type Tipe Monitor'),
(283, 'admin', '2020-02-15 10:16:39', 'Edit Device Type Tipe Mouse'),
(284, 'admin', '2020-02-15 10:17:04', 'Edit Device Type Tipe Keyboard'),
(285, 'admin', '2020-02-15 10:17:12', 'Edit Device Type Tipe UPS'),
(286, 'admin', '2020-02-15 10:17:20', 'Edit Device Type Perangkat Jaringan'),
(287, 'admin', '2020-02-15 10:20:32', 'Edit Device Type TP Link Wireless'),
(288, 'admin', '2020-02-15 10:20:40', 'Edit Device Type Switch'),
(289, 'admin', '2020-02-15 10:20:46', 'Edit Device Type Printer'),
(290, 'admin', '2020-02-15 10:20:54', 'Add device Type Handphone'),
(291, 'admin', '2020-02-15 10:21:12', 'Add device Type Kamera'),
(292, 'admin', '2020-02-15 10:22:08', 'Add device Type Projectors'),
(293, 'admin', '2020-02-15 10:26:16', 'Add device Detail id 2'),
(294, 'admin', '2020-02-15 10:30:05', 'Edit location Syahrul Givani'),
(295, 'admin', '2020-02-15 10:30:20', 'Edit location IT-Design'),
(296, 'admin', '2020-02-15 10:30:47', 'Edit location Sunarwan'),
(297, 'admin', '2020-02-15 10:31:02', 'Edit location Lofty Razani'),
(298, 'admin', '2020-02-15 10:31:18', 'Edit location Carles H.'),
(299, 'admin', '2020-02-15 10:33:08', 'Edit location Gudang IT'),
(300, 'admin', '2020-02-15 10:33:40', 'Edit location Syahrul Ghifari'),
(301, 'admin', '2020-02-15 10:34:14', 'Assign Device id 122&nbspName&nbspSpec PC to location id 22&nbspName&nbspSyahrul Ghifari'),
(302, 'admin', '2020-02-15 10:37:28', 'Add device Detail id 2'),
(303, 'admin', '2020-02-15 10:39:02', 'Add device Detail id 2'),
(304, 'admin', '2020-02-15 10:41:59', 'Add device Detail id 2'),
(305, 'admin', '2020-02-15 10:44:45', 'Add device Detail id 2'),
(306, 'admin', '2020-02-15 10:45:05', 'Edit device info Spec PC'),
(307, 'admin', '2020-02-15 10:47:34', 'Assign Device id 126&nbspName&nbspSpec PC to location id 23&nbspName&nbspIT-Design'),
(308, 'admin', '2020-02-15 10:47:49', 'Assign Device id 125&nbspName&nbspSpec PC to location id 24&nbspName&nbspSunarwan'),
(309, 'admin', '2020-02-15 10:48:31', 'Edit device info Spec PC'),
(310, 'admin', '2020-02-15 10:48:51', 'Edit device info Spec PC'),
(311, 'admin', '2020-02-15 10:49:20', 'Edit device info Spec PC'),
(312, 'admin', '2020-02-15 10:49:52', 'Edit device info Spec PC'),
(313, 'admin', '2020-02-15 10:56:08', 'Edit device info Spec PC'),
(314, 'admin', '2020-02-15 10:56:18', 'Edit device info Spec PC'),
(315, 'admin', '2020-02-15 10:56:27', 'Edit device info Spec PC'),
(316, 'admin', '2020-02-15 10:56:47', 'Edit device info Spec PC'),
(317, 'admin', '2020-02-15 10:57:45', 'Edit device info Spec PC'),
(318, 'admin', '2020-02-15 10:58:09', 'Assign Device id 124&nbspName&nbspSpec PC to location id 26&nbspName&nbspCarles H.'),
(319, 'admin', '2020-02-15 10:59:24', 'Edit device info Spec PC'),
(320, 'admin', '2020-02-15 11:00:28', 'Edit device info Spec PC'),
(321, 'admin', '2020-02-15 11:00:50', 'Assign Device id 123&nbspName&nbspSpec PC to location id 25&nbspName&nbspLofty Razani'),
(322, 'admin', '2020-02-15 11:03:10', 'Add Client User Lofty'),
(323, 'admin', '2020-02-15 11:14:55', 'Edit location Verawati Chandra'),
(324, 'admin', '2020-02-15 11:17:32', 'Edit location Ex-Dilla'),
(325, 'admin', '2020-02-15 11:17:54', 'Edit location Riduwan Dani'),
(326, 'admin', '2020-02-15 11:21:02', 'Edit location Andi'),
(327, 'admin', '2020-02-15 11:21:27', 'Edit location Henny Paula'),
(328, 'admin', '2020-02-15 11:21:56', 'Edit location Felix'),
(329, 'admin', '2020-02-15 11:22:19', 'Edit location Ex-Fitri FA'),
(330, 'admin', '2020-02-15 11:23:00', 'Add location Dina Marlina'),
(331, 'admin', '2020-02-15 11:23:26', 'Add location Agus Setiawan'),
(332, 'admin', '2020-02-15 11:24:02', 'Edit location Verix'),
(333, 'admin', '2020-02-15 11:24:12', 'Add location Oktaria Sitompul'),
(334, 'admin', '2020-02-15 11:24:51', 'Add location Rinaldo'),
(335, 'admin', '2020-02-15 11:25:26', 'Edit location Rinaldo Ariesto'),
(336, 'admin', '2020-02-15 11:25:59', 'Add location Admin-Ops'),
(337, 'admin', '2020-02-15 11:27:18', 'Add location Yolanda Noviasari'),
(338, 'admin', '2020-02-15 11:27:34', 'Add location Shela Meyliza'),
(339, 'admin', '2020-02-15 11:31:19', 'Add location Tasya Rifani'),
(340, 'admin', '2020-02-15 11:32:23', 'Add location Indah Khairunisa'),
(341, 'admin', '2020-02-15 11:36:14', 'Add device Detail id 2'),
(342, 'admin', '2020-02-15 11:38:28', 'Add device Detail id 3'),
(343, 'admin', '2020-02-15 11:38:59', 'Add device Detail id 5'),
(344, 'admin', '2020-02-15 11:39:10', 'Add device Detail id 4'),
(345, 'admin', '2020-02-15 11:39:31', 'Add device Type UPS'),
(346, 'admin', '2020-02-15 11:40:08', 'Edit Device Type UPS'),
(347, 'admin', '2020-02-15 11:40:16', 'Edit Device Type Keyboard'),
(348, 'admin', '2020-02-15 11:40:20', 'Edit Device Type Monitor'),
(349, 'admin', '2020-02-15 11:40:26', 'Edit Device Type Mouse'),
(350, 'admin', '2020-02-15 11:41:39', 'Add device Detail id 6'),
(351, 'admin', '2020-02-15 11:42:03', 'Assign Device id 131&nbspName&nbspUPS to location id 25&nbspName&nbspLofty Razani'),
(352, 'admin', '2020-02-15 11:42:03', 'Assign Device id 130&nbspName&nbspMouse to location id 25&nbspName&nbspLofty Razani'),
(353, 'admin', '2020-02-15 11:42:03', 'Assign Device id 129&nbspName&nbspKeyboard to location id 25&nbspName&nbspLofty Razani'),
(354, 'admin', '2020-02-15 11:42:03', 'Assign Device id 128&nbspName&nbspMonitor to location id 25&nbspName&nbspLofty Razani'),
(355, 'admin', '2020-02-15 11:42:21', 'Assign Device id 127&nbspName&nbspSpec PC to location id 31&nbspName&nbspAndi'),
(356, 'admin', '2020-02-15 11:43:38', 'Add device Detail id 3'),
(357, 'admin', '2020-02-15 11:43:48', 'Add device Detail id 4'),
(358, 'admin', '2020-02-15 11:43:56', 'Add device Detail id 5'),
(359, 'admin', '2020-02-15 11:44:45', 'Add device Detail id 6'),
(360, 'admin', '2020-02-15 11:45:43', 'Add device Detail id 10'),
(361, 'admin', '2020-02-15 11:46:13', 'Assign Device id 136&nbspName&nbspHandphone to location id 22&nbspName&nbspSyahrul Ghifari'),
(362, 'admin', '2020-02-15 11:46:13', 'Assign Device id 135&nbspName&nbspUPS to location id 22&nbspName&nbspSyahrul Ghifari'),
(363, 'admin', '2020-02-15 11:46:13', 'Assign Device id 134&nbspName&nbspKeyboard to location id 22&nbspName&nbspSyahrul Ghifari'),
(364, 'admin', '2020-02-15 11:46:13', 'Assign Device id 133&nbspName&nbspMouse to location id 22&nbspName&nbspSyahrul Ghifari'),
(365, 'admin', '2020-02-15 11:46:13', 'Assign Device id 132&nbspName&nbspMonitor to location id 22&nbspName&nbspSyahrul Ghifari'),
(366, 'admin', '2020-02-15 11:46:53', 'Add device Detail id 3'),
(367, 'admin', '2020-02-15 11:47:02', 'Add device Detail id 4'),
(368, 'admin', '2020-02-15 11:47:10', 'Add device Detail id 5'),
(369, 'admin', '2020-02-15 11:47:25', 'Add device Detail id 6'),
(370, 'admin', '2020-02-15 11:47:36', 'Assign Device id 140&nbspName&nbspUPS to location id 23&nbspName&nbspIT-Design'),
(371, 'admin', '2020-02-15 11:47:36', 'Assign Device id 139&nbspName&nbspKeyboard to location id 23&nbspName&nbspIT-Design'),
(372, 'admin', '2020-02-15 11:47:37', 'Assign Device id 138&nbspName&nbspMouse to location id 23&nbspName&nbspIT-Design'),
(373, 'admin', '2020-02-15 11:47:37', 'Assign Device id 137&nbspName&nbspMonitor to location id 23&nbspName&nbspIT-Design'),
(374, 'admin', '2020-02-15 11:49:17', 'Add device Detail id 3'),
(375, 'admin', '2020-02-15 11:49:41', 'Add device Detail id 4'),
(376, 'admin', '2020-02-15 11:49:50', 'Add device Detail id 5'),
(377, 'admin', '2020-02-15 11:50:10', 'Add device Detail id 6'),
(378, 'admin', '2020-02-15 11:50:25', 'Assign Device id 144&nbspName&nbspUPS to location id 24&nbspName&nbspSunarwan'),
(379, 'admin', '2020-02-15 11:50:25', 'Assign Device id 143&nbspName&nbspKeyboard to location id 24&nbspName&nbspSunarwan'),
(380, 'admin', '2020-02-15 11:50:25', 'Assign Device id 142&nbspName&nbspMouse to location id 24&nbspName&nbspSunarwan'),
(381, 'admin', '2020-02-15 11:50:25', 'Assign Device id 141&nbspName&nbspMonitor to location id 24&nbspName&nbspSunarwan'),
(382, 'admin', '2020-02-15 11:50:49', 'Add device Detail id 9'),
(383, 'admin', '2020-02-15 11:50:58', 'Assign Device id 145&nbspName&nbspPrinter to location id 23&nbspName&nbspIT-Design'),
(384, 'admin', '2020-02-15 11:52:10', 'Add device Detail id 11'),
(385, 'admin', '2020-02-15 11:52:18', 'Assign Device id 146&nbspName&nbspKamera to location id 22&nbspName&nbspSyahrul Ghifari'),
(386, 'admin', '2020-02-15 11:53:08', 'Add device Detail id 4'),
(387, 'admin', '2020-02-15 11:53:15', 'Add device Detail id 5'),
(388, 'admin', '2020-02-15 11:53:49', 'Add device Detail id 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(128) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `adminthumbnails` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `username`, `password`, `adminthumbnails`) VALUES
(4, 'User', '', 'user', 'CGI11114', 'uploads/442048-samsung-galaxy-s5-vs-galaxy-note-3-specs-and-price-comparison-in-austr.jpg'),
(5, 'Admin', '', 'admin', 'CGI888', 'uploads/icon.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `client`
--

CREATE TABLE `client` (
  `client_id` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `thumbnails` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `client`
--

INSERT INTO `client` (`client_id`, `username`, `password`, `firstname`, `lastname`, `thumbnails`) VALUES
(10, 'oting', 'oting', 'Reynaldo', 'Tianzon', 'uploads/141113161942-large.jpg'),
(11, 'kiritosan23', 'kirito', 'Joecel', 'Ongsip', 'uploads/10933713_756692371081917_31846816310386324_n.jpg'),
(12, 'asylum1121', 'kevineleven11', 'Kevin Jone', 'Camparecio', 'images/NO-IMAGE-AVAILABLE.jpg'),
(13, 'lofty', '12345', 'Lofty', 'Razani', 'images/NO-IMAGE-AVAILABLE.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `content`
--

CREATE TABLE `content` (
  `content_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `content`
--

INSERT INTO `content` (`content_id`, `title`, `content`) VALUES
(1, 'Mission', '<pre>\n<span style=\"font-size:16px\"><strong>Mission</strong></span></pre>\n\n<p style=\"text-align:left\"><span style=\"font-family:arial,helvetica,sans-serif; font-size:medium\"><span style=\"font-size:large\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span>&nbsp; &nbsp;<span style=\"font-size:18px\"> &nbsp; &nbsp; &nbsp;Respecting the human dignity and unique talents of each person, Southland College is dedicated in helping its students actualizetheir potentials for the enchancementof their own lives and or nationals Development.&nbsp;</span></p>\n\n<p style=\"text-align:left\">&nbsp;</p>\n'),
(2, 'Vision', '<pre><span style=\"font-size: large;\"><strong>Vision</strong></span></pre>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-size: large;\">&nbsp; A progressive educational community where the individual is at the core of his own learning </span><br /><br /></p>'),
(3, 'History', '<pre><span style=\"font-size: large;\">HISTORY &nbsp;</span> </pre>\n<p style=\"text-align: justify;\"><span style=\"font-family:arial,helvetica,sans-serif; font-size:medium\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The southland college story is the intermingling of imposibilities and unbelief, against optimism and faith.the story of this new school is a beatifull retelling of god\'s goodness; his hands helping shape the foundation of southland college.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amid Challeges, stumbling blocks, and interfering forces, southland college was established-a shining testamentof God\'s wondrous ways and his helping hand for those who trust in Him.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Deeply saddened by the anticipated mass resignation of the faculty and staff with the change of leadership of a private school where he was the former president, DR. Anecito D. Villaluz, Jr. Decided to put up his own school where he could freely make use of his publicity acknowledged and admired managerial skills and organizational expertise.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the preparations for the new school started in March 2009. The incorporators who compose the Board of directors are Dr.Villaluz, Chairman; Mrs. Annette Z. Villaluz, vice-chairman; Dr. Emiliano L. Sama,Jr.,corporate secretary; Mrs.Yvonne Z. Rocha, Treasurer; and Dr.Rhoda J. Amor,Dr. Grace A. Badrina, Dr. Henly S. Pahilagao, and Mr. Miguel M. Zayco, directors.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The securities and Exchange Commision (DepEd) issurd the school registration permiton March 24,2009.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The department of Education (DepEd) Western Visayas Regional office issued the permit for the basic education on June 1. 2009. The school established the consortium with the Northern Negros state College of Science and Technology (NONESCOST) for the Nursing Degree program, and with the Negros Oriental State Accounting Technology, BS Business Administrators, BS Hospiitality Management, and the 2-year Midwifery course. The administrators, faculty and staff, parents and strengthen the new school. Each of them undertook the assigned task without expecting any personal reward. it was evidend that God is shaping the southland destiny throught the hearts, hands and minds of these people.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Regional Quality Assesment Team (RQUAT) and Commission on Higher Education (CHEd) Supersvisors readily issuad permits for all degree programs After validating the requirements and inspecting the facilities.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The school was formerly launched on May 13, 2009. It was followed by the a grand caravan. The following days saw the advertisements and promotion blitz in variious towns and cities.<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;By the end of the enrolment period, God gave soutland collegeits needed initial number of students. Enrolled during the school year 2009-2010 were: pre school, 69; elementary, 130; and High school, 122. During the first semester of the same school year, college enrolment reached 177. it was an impressive number for a new school which opened within a few months time after its inception.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A thanksgiving service with the theme \"Triumph Amid Trials\" was held on August 28, 2009 morning. It was immediatly followed by the school\'s very first academic convocation. The officers of student councils, faculty and staff club, and the parents and teachers assembleis were inducted in the afternoon. aquaintance parties in all levels followed.<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;amid the trials, Southland College is seen to Survive and Prevail for its story in a tapestry of good relationships, great resposibilities, and God\'s redemption<br/>\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Indeed, at Southland College the foundation of God stand\'s sure!\n</p>'),
(4, 'Footer', '<p style=\"text-align:center\">Technology Resource Inventory System (T.R.S) Copyright 2015</p>\n\n<p style=\"text-align:center\">All Rights Reserved &reg;2015</p>\n'),
(5, 'Title', '<p><span style=\"font-family:trebuchet ms,geneva\">Technology Resource Inventory System</span></p>\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `device_name`
--

CREATE TABLE `device_name` (
  `dev_id` int(11) NOT NULL,
  `dev_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `device_name`
--

INSERT INTO `device_name` (`dev_id`, `dev_name`) VALUES
(2, 'Spec PC'),
(3, 'Monitor'),
(4, 'Mouse'),
(5, 'Keyboard'),
(6, 'UPS'),
(7, 'TP Link Wireless'),
(8, 'Switch'),
(9, 'Printer'),
(10, 'Handphone'),
(11, 'Kamera'),
(12, 'Projectors');

-- --------------------------------------------------------

--
-- Struktur dari tabel `location_details`
--

CREATE TABLE `location_details` (
  `ld_id` int(11) NOT NULL,
  `stdev_id` int(11) NOT NULL,
  `date_deployment` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `location_details`
--

INSERT INTO `location_details` (`ld_id`, `stdev_id`, `date_deployment`, `id`) VALUES
(49, 22, '2020-02-15', 122),
(50, 23, '2020-02-15', 126),
(51, 24, '2020-02-15', 125),
(52, 26, '2020-02-15', 124),
(53, 25, '2020-02-15', 123),
(54, 25, '2020-02-15', 131),
(55, 25, '2020-02-15', 130),
(56, 25, '2020-02-15', 129),
(57, 25, '2020-02-15', 128),
(58, 31, '2020-02-15', 127),
(59, 22, '2020-02-15', 136),
(60, 22, '2020-02-15', 135),
(61, 22, '2020-02-15', 134),
(62, 22, '2020-02-15', 133),
(63, 22, '2020-02-15', 132),
(64, 23, '2020-02-15', 140),
(65, 23, '2020-02-15', 139),
(66, 23, '2020-02-15', 138),
(67, 23, '2020-02-15', 137),
(68, 24, '2020-02-15', 144),
(69, 24, '2020-02-15', 143),
(70, 24, '2020-02-15', 142),
(71, 24, '2020-02-15', 141),
(72, 23, '2020-02-15', 145),
(73, 22, '2020-02-15', 146);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `notification` varchar(100) NOT NULL,
  `date_of_notification` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `notification_read`
--

CREATE TABLE `notification_read` (
  `notification_read_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `admin_read` varchar(50) NOT NULL,
  `notification_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stdevice`
--

CREATE TABLE `stdevice` (
  `id` int(11) NOT NULL,
  `dev_id` int(11) NOT NULL,
  `dev_desc` text NOT NULL,
  `dev_serial` varchar(128) NOT NULL,
  `dev_brand` varchar(128) NOT NULL,
  `dev_model` varchar(128) NOT NULL,
  `dev_status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stdevice`
--

INSERT INTO `stdevice` (`id`, `dev_id`, `dev_desc`, `dev_serial`, `dev_brand`, `dev_model`, `dev_status`) VALUES
(122, 2, '<p>Windows 10 64bit, Ram 16 Giga, SSD 256 Giga, Hardisk 1 Tera</p>\r\n', '2.1', 'Komputer Rakitan En Light', 'Processor Intel Core I7 7700 CPU @3.60 gHz', 'New'),
(123, 2, '<p><span style=\"font-family:proximanova-light,helvetica,arial,sans-serif; font-size:14px\">Windows 10 64bit, Ram 16 Giga, SSD 256 Giga, Hardisk 1 Tera </span></p>\r\n', '2.2', 'Micro-Star International', 'Intel Core I5-8400 CPU @ 2.80GHz', 'New'),
(124, 2, '<p><span style=\"font-family:proximanova-light,helvetica,arial,sans-serif; font-size:14px\">Windows 10 64bit, Ram 8 Giga, Hardisk 1 Tera </span></p>\r\n', '2.3', 'Laptop Asus', 'Intel Core I5-8265U CPU @1.60GHz', 'New'),
(125, 2, '<p><span style=\"font-family:proximanova-light,helvetica,arial,sans-serif; font-size:14px\">Windows 10 64bit, Ram 4 Giga, SSD 256 ', '2.4', 'Power UP Sistem Manufacturer', 'Intel Core I3-8100 CPU @3.60GHz', 'New'),
(126, 2, '<p><span style=\"font-family:proximanova-light,helvetica,arial,sans-serif; font-size:14px\">Windows 10 64bit, Ram 32 Giga, SSD 256 Giga, Hardisk 2 Tera</span></p>\r\n', '2.5', 'ASUS Sistem Manufacturer', 'Processor Intel Core I7 7700 CPU @3.60GHz', 'New'),
(127, 2, '<p><span style=\"font-family:proximanova-light,helvetica,arial,sans-serif; font-size:14px\">Windows 10 64bit, Ram 8 Giga, Hardisk</span></p>\r\n', '2.6', 'Komputer Rakitan Power Up', 'Processor Intel Core I3 2120 @3.30GHz', 'New'),
(128, 3, '', '3.1', 'Samsung', 'LCD LS24F350FHE', 'New'),
(129, 5, '', '5.1', 'Logitech', 'Usb', 'New'),
(130, 4, '', '4.1', 'Logitech', 'Usb', 'New'),
(131, 6, '<p>Status Baik</p>\r\n', '6.1', 'Eyota', '12 volt', 'New'),
(132, 3, '', '3.2', 'Samsung', 'LCD C27R500FH', 'New'),
(133, 4, '', '4.2', 'Logitech', 'Usb', 'New'),
(134, 5, '', '5.2', 'Logitech', 'Usb', 'New'),
(135, 6, '<p>Status Tahan 10 Menit</p>\r\n', '6.2', 'Eyota', '12 volt', 'New'),
(136, 10, '<p>Ram 4 Giga</p>\r\n', '10.1', 'Vivo', '1807', 'New'),
(137, 3, '', '3.3', 'Samsung', 'LCD C27R500FH', 'New'),
(138, 4, '', '4.3', 'Logitech', 'Usb', 'New'),
(139, 5, '', '5.3', 'Logitech', 'Usb', 'New'),
(140, 6, '<p>Status Baik</p>\r\n', '6.3', 'Eyota', '12 volt', 'New'),
(141, 3, '', '3.4', 'Benq', 'LCD RL2455', 'New'),
(142, 4, '', '4.4', 'Logitech', 'Usb', 'New'),
(143, 5, '', '5.4', 'Logitech', 'Usb', 'New'),
(144, 6, '', '6.4', 'Eyota', '12 volt', 'New'),
(145, 9, '', '9.1', 'Epson', 'L310', 'New'),
(146, 11, '<p>Memory SD 64 Giga</p>\r\n', '11.1', 'Canon', 'DSLR EOS 1300D', 'New'),
(147, 4, '', '4.5', 'Logitech', 'Usb', 'New'),
(148, 5, '', '5.5', 'Logitech', 'Usb', 'New'),
(149, 3, '', '3.5', 'LG', 'LCD 18 Inch', 'New');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stlocation`
--

CREATE TABLE `stlocation` (
  `stdev_id` int(11) NOT NULL,
  `stdev_location_name` varchar(128) NOT NULL,
  `thumbnails` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stlocation`
--

INSERT INTO `stlocation` (`stdev_id`, `stdev_location_name`, `thumbnails`) VALUES
(22, 'Syahrul Ghifari', 'images/thumbnails.jpg'),
(23, 'IT-Design', 'images/thumbnails.jpg'),
(24, 'Sunarwan', 'images/thumbnails.jpg'),
(25, 'Lofty Razani', 'images/thumbnails.jpg'),
(26, 'Carles H.', 'images/thumbnails.jpg'),
(27, 'Gudang IT', 'images/thumbnails.jpg'),
(28, 'Verawati Chandra', 'images/thumbnails.jpg'),
(29, 'Ex-Dilla', 'images/thumbnails.jpg'),
(30, 'Riduwan Dani', 'images/thumbnails.jpg'),
(31, 'Andi', 'images/thumbnails.jpg'),
(34, 'Henny Paula', 'images/thumbnails.jpg'),
(35, 'Verix', 'images/thumbnails.jpg'),
(36, 'Ex-Fitri FA', 'images/thumbnails.jpg'),
(37, 'Dina Marlina', 'images/thumbnails.jpg'),
(38, 'Agus Setiawan', 'images/thumbnails.jpg'),
(39, 'Oktaria Sitompul', 'images/thumbnails.jpg'),
(40, 'Rinaldo Ariesto', 'images/thumbnails.jpg'),
(41, 'Admin-Ops', 'images/thumbnails.jpg'),
(42, 'Yolanda Noviasari', 'images/thumbnails.jpg'),
(43, 'Shela Meyliza', 'images/thumbnails.jpg'),
(44, 'Tasya Rifani', 'images/thumbnails.jpg'),
(45, 'Indah Khairunisa', 'images/thumbnails.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_log`
--

CREATE TABLE `user_log` (
  `user_log_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `login_date` varchar(30) NOT NULL,
  `logout_date` varchar(128) NOT NULL,
  `admin_id` int(128) NOT NULL,
  `client_id` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `username`, `login_date`, `logout_date`, `admin_id`, `client_id`) VALUES
(190, 'admin', '2020-02-15 10:08:51', '', 5, 0),
(191, 'admin', '2020-02-15 10:12:14', '', 5, 0),
(192, 'lofty', '2020-02-15 11:03:22', '2020-02-15', 0, 13),
(193, 'admin', '2020-02-15 11:12:37', '', 5, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`activity_log_id`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indeks untuk tabel `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indeks untuk tabel `device_name`
--
ALTER TABLE `device_name`
  ADD PRIMARY KEY (`dev_id`);

--
-- Indeks untuk tabel `location_details`
--
ALTER TABLE `location_details`
  ADD PRIMARY KEY (`ld_id`);

--
-- Indeks untuk tabel `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indeks untuk tabel `notification_read`
--
ALTER TABLE `notification_read`
  ADD PRIMARY KEY (`notification_read_id`);

--
-- Indeks untuk tabel `stdevice`
--
ALTER TABLE `stdevice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stlocation`
--
ALTER TABLE `stlocation`
  ADD PRIMARY KEY (`stdev_id`);

--
-- Indeks untuk tabel `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`user_log_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `activity_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=389;

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `content`
--
ALTER TABLE `content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `device_name`
--
ALTER TABLE `device_name`
  MODIFY `dev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `location_details`
--
ALTER TABLE `location_details`
  MODIFY `ld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `notification_read`
--
ALTER TABLE `notification_read`
  MODIFY `notification_read_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `stdevice`
--
ALTER TABLE `stdevice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT untuk tabel `stlocation`
--
ALTER TABLE `stlocation`
  MODIFY `stdev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `user_log`
--
ALTER TABLE `user_log`
  MODIFY `user_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

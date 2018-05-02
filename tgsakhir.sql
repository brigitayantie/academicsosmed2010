-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 01 Nov 2014 pada 18.46
-- Versi Server: 5.5.25a
-- Versi PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `tgsakhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id_album` int(11) NOT NULL AUTO_INCREMENT,
  `subyekAlbum` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `ketAlbum` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `jenisPriv` enum('all','teman','certain') COLLATE latin1_general_ci NOT NULL DEFAULT 'all',
  `id_user` int(11) NOT NULL,
  `bolehHapus` enum('y','t') COLLATE latin1_general_ci NOT NULL DEFAULT 'y',
  `id_fotoCover` int(11) NOT NULL,
  PRIMARY KEY (`id_album`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=24 ;

--
-- Dumping data untuk tabel `album`
--

INSERT INTO `album` (`id_album`, `subyekAlbum`, `ketAlbum`, `jenisPriv`, `id_user`, `bolehHapus`, `id_fotoCover`) VALUES
(1, 'Profil', '', 'all', 88888, 't', 0),
(2, 'gjhgj', 'hgjhgj', 'all', 88888, 'y', 0),
(3, 'gjhgj', 'hgjhgj', 'all', 88888, 'y', 0),
(4, 'jhgjhgj', 'jhgjhgj', 'all', 88888, 'y', 0),
(5, 'trert', 'ytytytyty', 'all', 88888, 'y', 0),
(7, 'Di Venezia', 'Keren', 'all', 88888, 'y', 60),
(13, 'ABC', 'DEF', 'all', 88888, 'y', 0),
(14, 'vjhmnbjgkm', 'jhgjhgjhguymhbmn', 'all', 6054840, 'y', 76),
(15, '12345', '09876', 'all', 6024206, 'y', 0),
(17, 'abc', 'bca', 'all', 6054840, 'y', 0),
(18, '123', '456', 'all', 88888, 'y', 0),
(19, '987987', '98798', 'all', 88888, 'y', 0),
(21, 'UBAYA', 'Keterangan ', 'all', 6002, 'y', 75),
(23, 'sdfsd', 'fdsfd', 'all', 6054840, 'y', 84);

-- --------------------------------------------------------

--
-- Struktur dari tabel `attforum`
--

CREATE TABLE IF NOT EXISTS `attforum` (
  `id_forum` int(11) NOT NULL,
  `jenis_file` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `id_attforum` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_attforum`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `attforum`
--

INSERT INTO `attforum` (`id_forum`, `jenis_file`, `id_attforum`) VALUES
(0, '', 1),
(0, '', 2),
(0, '', 3),
(0, '', 4),
(0, '', 5),
(0, '', 6),
(0, '', 7),
(0, '', 8),
(0, '', 9),
(0, '', 10),
(0, '', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `attpesan`
--

CREATE TABLE IF NOT EXISTS `attpesan` (
  `id_pesan` int(11) NOT NULL,
  `attpesan` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bagian`
--

CREATE TABLE IF NOT EXISTS `bagian` (
  `id_bagian` int(8) NOT NULL AUTO_INCREMENT,
  `nama_bagian` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `ket` int(11) NOT NULL,
  PRIMARY KEY (`id_bagian`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `bagian`
--

INSERT INTO `bagian` (`id_bagian`, `nama_bagian`, `ket`) VALUES
(3, 'PAJ', 0),
(2, 'Admin', 0),
(4, 'TU', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan`
--

CREATE TABLE IF NOT EXISTS `bahan` (
  `id_bahan` int(11) NOT NULL AUTO_INCREMENT,
  `ketBahan` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `subyekBahan` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `jenis_file` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tipe` enum('UTS','UAS') COLLATE latin1_general_ci NOT NULL,
  `id_kelas` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `id_mk` varchar(15) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_bahan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `bahan`
--

INSERT INTO `bahan` (`id_bahan`, `ketBahan`, `subyekBahan`, `timestamp`, `jenis_file`, `tipe`, `id_kelas`, `id_mk`) VALUES
(1, 'Selisih Waktu untuk ShoutOut', 'Selisih Waktu', '0000-00-00 00:00:00', '', 'UTS', '0', '0'),
(2, '', '', '2010-06-07 15:12:54', 'zip', 'UTS', '0', '3234'),
(3, '', '', '2010-06-07 15:12:54', 'zip', 'UTS', '0', '3234'),
(8, 'Osi Layer', 'Keterangan', '2010-06-27 05:27:34', 'doc', 'UTS', '0', '64'),
(7, 'PDF', 'AJAX', '2010-06-18 11:53:04', 'pdf', 'UTS', '0', '3234'),
(9, 'Week 6 ', 'Keterangan', '2010-06-27 05:28:31', 'txt', 'UTS', '0', '64'),
(10, 'Media Converter', 'Keterangan', '2010-06-27 05:29:37', 'doc', 'UTS', '64A95220101A', ''),
(11, 'kabel jaringan', 'Keterangan', '2010-06-28 05:18:44', 'doc', 'UTS', '', '64A41320101'),
(12, 'ppt', 'ket', '2010-06-28 05:22:29', 'ppt', 'UTS', '', '64A413'),
(14, 'Fungsi Hub dan Switch', 'Keterangan', '2010-06-28 05:23:35', 'doc', 'UTS', '64A41320101A', ''),
(16, 'Judul TKI', 'Ket TKI', '2010-07-15 13:55:46', 'jpg', 'UTS', '64A95220101A', ''),
(17, 'Keterangan TK I', 'Judul TK I', '2010-07-15 14:00:15', 'jpg', 'UTS', '64A95220101A', ''),
(18, 'a', 'a', '2012-04-19 17:03:47', 'jpg', 'UTS', '', '64A952');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan`
--

CREATE TABLE IF NOT EXISTS `catatan` (
  `id_catt` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `topik` text COLLATE latin1_general_ci NOT NULL,
  `isi` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_catt`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=43 ;

--
-- Dumping data untuk tabel `catatan`
--

INSERT INTO `catatan` (`id_catt`, `id_user`, `tanggal`, `topik`, `isi`) VALUES
(23, 88888, '2010-07-08 14:48:15', 'Robotika', 'ITB Kembangkan Pengendali Komputer Pakai Otak\nBandung - Bukan mustahil untuk mengoperasikan komputer, manusia cukup menggunakan pikiran tanpa bantuan tangan. Kenyataannya, otak manusia menghasilkan gelombang Alpha saat berkonsentrasi, dan bisa diterjemahkan dalam sinyal digital.\n\nPenelitian untuk mewujudkan pengoperasian komputer dengan cara menangkap sinyal-sinyal dari otak, sudah dilakukan tim reaserch Sekolah Teknik Elektro dan Informatika (STEI) ITB. Tim ini terdiri dari Mahasiswa-mahasiswa S2 yang tergabung dalam grup riset bernama Digital Media and Game Center. Awal penelitian mereka lebih fokus untuk mengembangkan aplikasi-aplikasi yang sebagian besar berupa game edukasi.\n\nSinyal gelombang Alpha yang dihasilkan otak dalam bereaksi terhadap suatu kondisi dibaca oleh Teknologi Brain Computer Interface. Sinyal gelombang analog ini kemudian dikonversi ke biner untuk mengendalikan suatu objek di komputer tanpa menggunakan alat apapun.\n\nSimulasi pembacaan perintah otak ini diuji coba dengan memasangkan suatu alat pendeteksi gelombang alpha pada kepala. Alat yang menggunakan sumber arus DC yang terukur, dikoneksikan ke komputer, dimana pengunjung mencoba untuk menggerakkan suatu balok dari suatu tempat ke tempat lainnya hanya dengan memikirkannya dalam otak. Dan ternyata objek-objek tersebut memang bergerak menurut keinginan pengunjung.\n\n"Alat ini sebenarnya memiliki konsep awal untuk mengendalikan robot hanya melalui pikiran. Hanya dengan berkonsentrasi terhadap suatu objek dan perintah yang ingin kita berikan maka robot akan bereaksi sesuai dengan keinginan kita. Selain itu, alat ini juga dapat mendeteksi tingkat stress seseorang," ujar anggota tim reasearch Digital Media and Game Centre Hendra di stand STEI ITB dalam pameran Bandung Comtech di BeMall, Minggu (16/11/2008).\n\nBeberapa aplikasi yang disuguhkan dalam pameran pertama tim ARAD, Magic Book and Volcanopedia, AR Flood, Flight Simulator, Tank Simulator dan games Sultan Agung. Beberapa aplikasi tersebut menerapkan konsep augmented reality, real time simulator, dan brain computer interface.\n\nARAD, Volcano dan AR FLood adalah aplikasi yang menerapkan konsep augmented reality. Aplikasi-aplikasi tersebut menampilkan sebuah dunia virtual dengan menggunakan kode-kode yang disebut marker. Marker ini dapat ditempatkan pada meja yang didesain khusus untuk AR maupun pada sebuah buku. Dengan memanfaatkan web cam, gambar-gambar 3D akan muncul dari permukaan meja ataupun buku yang memiliki marker di atasnya.\n\nARAD didesain khusus untuk para arsitektur dan pengembang real estate untuk mendesain blueprint yang dinamis dan fleksibel. Volcano adalah aplikasi yang dapat menampilkan gambar 3D dari gunung-gunung berapi di Indonesia beserta jenis letusan yang dimiliki. Aplikasi ini sangat menarik karena dari tampilan peta wilayah Indonesia pada magic book, akan muncul topografi dari masing-masing gunung ketika web cam diarahkan pada permukaan buku.\n\nSedangkan AR Flood memiliki kelebihan dalam hal menanggulangi kemungkinan banjir dengan pembangunan tanggul virtual pada daerah tertentu dalam peta. Setelah pambangunan tanggul selesai, simulasi banjir dilakukan kemudian akan ada analisa berapa kerusakan rumah yang ditimbulkan maupun korban jiwa dari peristiwa banjir tersebut.\n\nKonsep real time simulator diterapkan pada tank simulator dan flight simulator dimana pengunjung dapat mencoba mengoperasikan suatu pesawat maupun tank. Kemudian akan ada penilaian terhadap keahlian mengemudi dari masing-masing pengunjung, apakah mereka lulus atau tidak dalam mengoperasikan suatu kendaraan '),
(36, 88888, '2010-05-18 02:29:03', 'ewqewqadsad', 'fwfedsfdsfd'),
(37, 88888, '2010-06-19 10:14:38', 'qwyeiquwyeiu', 'iuyiwquyeiquwyeiuqywieuqwe'),
(40, 6054840, '2010-06-29 12:57:07', 'nbmnbmnbm', 'nbmnbmn'),
(42, 6002, '2010-07-14 10:40:47', '123123', 'wewwr');

-- --------------------------------------------------------

--
-- Struktur dari tabel `certain`
--

CREATE TABLE IF NOT EXISTS `certain` (
  `id_album` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_album`,`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from` int(255) NOT NULL,
  `to` int(255) NOT NULL,
  `message` text COLLATE latin1_general_ci NOT NULL,
  `sent` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `recd` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=56 ;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`id`, `from`, `to`, `message`, `sent`, `recd`) VALUES
(1, 6002, 6001, '1', '2010-07-16 20:26:35', 1),
(2, 6001, 6002, '2', '2010-07-16 20:26:39', 1),
(3, 6002, 6001, '3', '2010-07-16 20:26:43', 1),
(4, 6002, 6001, '4', '2010-07-16 20:26:46', 1),
(5, 6002, 6001, '5', '2010-07-16 20:26:47', 1),
(6, 6002, 6001, '6', '2010-07-16 20:26:48', 1),
(7, 6001, 6002, '7', '2010-07-16 20:26:58', 1),
(8, 6001, 6002, '8', '2010-07-16 20:26:59', 1),
(9, 6001, 6002, '9', '2010-07-16 20:27:00', 1),
(10, 6001, 6002, '10', '2010-07-16 20:27:02', 1),
(11, 6002, 6001, '2', '2010-07-16 20:27:11', 1),
(12, 6002, 6001, '11', '2010-07-16 20:27:14', 1),
(13, 6001, 6002, '12', '2010-07-16 20:27:18', 1),
(14, 6001, 6002, '13', '2010-07-16 20:27:32', 1),
(15, 6001, 6002, '1', '2010-07-16 20:28:16', 1),
(16, 6001, 6002, '1', '2010-07-16 20:29:14', 1),
(17, 6002, 6001, '1231231', '2010-07-16 20:59:18', 1),
(18, 6001, 6002, '3wqedwae', '2010-07-16 20:59:29', 1),
(19, 6024206, 6002, 'halo bu', '2010-07-20 15:17:42', 1),
(20, 6024206, 6002, 'tes', '2010-07-20 15:22:59', 1),
(21, 6024206, 6002, 'tes2', '2010-07-20 15:24:11', 1),
(22, 6054840, 6002, 'selamat siang', '2010-07-20 15:40:20', 1),
(23, 6054840, 6002, 'abcde', '2010-07-20 15:40:37', 1),
(24, 6054840, 6002, 'ini yantie', '2010-07-20 15:48:52', 1),
(25, 6002, 6054840, 'halo juga', '2010-07-20 15:49:13', 1),
(26, 6002, 6024206, 'halo juga', '2010-07-20 15:49:17', 1),
(27, 6002, 6024206, 'nmnmnmn', '2010-07-20 15:50:28', 1),
(28, 6002, 6054840, 'halo1234', '2010-07-20 16:02:18', 1),
(29, 6002, 6054840, 'tesh\\''', '2010-07-20 16:05:42', 1),
(30, 6002, 6054840, 'ttt', '2010-07-20 16:06:11', 1),
(31, 6002, 6054840, 'sfdsf', '2010-07-20 16:07:53', 1),
(32, 6024206, 6002, 'iuyiuyiu', '2010-07-20 16:10:35', 1),
(33, 6024206, 6002, 'chat dari ade', '2010-07-20 16:11:36', 1),
(34, 6054840, 6002, 'chat dari yantie', '2010-07-20 16:11:43', 1),
(35, 6002, 6024206, 'dari lisana', '2010-07-20 16:11:49', 1),
(36, 6002, 6024206, '1', '2010-07-20 16:11:51', 1),
(37, 6002, 6054840, 'dari lisana 2', '2010-07-20 16:11:56', 1),
(38, 6054840, 6002, 'siang bu', '2010-07-20 17:11:36', 1),
(39, 6054840, 6002, 'sore bu', '2010-07-20 17:11:41', 1),
(40, 6054840, 6002, 'dari yantie', '2010-07-20 17:12:20', 1),
(41, 6024206, 6002, 'dari ade', '2010-07-20 17:12:36', 1),
(42, 6024206, 6002, 'hgjhgjhgj', '2010-07-20 17:14:13', 1),
(43, 6024206, 6002, 'dari ade', '2010-07-20 17:15:13', 1),
(44, 6024206, 6002, 'tes', '2010-07-20 17:17:23', 1),
(45, 6024206, 6002, 'wwqeqweqw', '2010-07-20 17:19:28', 1),
(46, 6024206, 6002, 'hhbnbvn', '2010-07-20 17:31:35', 1),
(47, 6024206, 6002, 'nbmnbmnbmn', '2010-07-20 17:32:46', 1),
(48, 6024206, 6002, 'nbmnbmm', '2010-07-20 17:34:09', 1),
(49, 6024206, 6002, '1232133123', '2010-07-20 17:34:11', 1),
(50, 6054840, 6002, 'halo bu lisana, ini Yantie nih', '2010-07-20 20:35:37', 1),
(51, 6024206, 6002, 'Halo Bu Lisana, ini Ade', '2010-07-20 20:35:53', 1),
(52, 6024206, 6002, 'Bu Lisana, ini Ade', '2010-07-20 20:36:34', 1),
(53, 6054840, 6002, 'Bu Lisana, ini Yantie', '2010-07-20 20:36:42', 1),
(54, 6002, 6054840, 'Iya, kenapa Yan?', '2010-07-20 20:36:58', 1),
(55, 6002, 6024206, 'Iya, kenapa De', '2010-07-20 20:37:02', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ddiskusi`
--

CREATE TABLE IF NOT EXISTS `ddiskusi` (
  `KodeMkBuka` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `NRP` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `comment` text COLLATE latin1_general_ci NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailnilai`
--

CREATE TABLE IF NOT EXISTS `detailnilai` (
  `id_kelas` int(11) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `jenisNilai` enum('Tugas','Kuis','UTS','UAS') COLLATE latin1_general_ci NOT NULL,
  `ke` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `persen` int(11) NOT NULL,
  `jenisUjian` enum('UTS','UAS') COLLATE latin1_general_ci NOT NULL,
  `id_semester` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `fileSoal` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `detailnilai`
--

INSERT INTO `detailnilai` (`id_kelas`, `id_mhs`, `jenisNilai`, `ke`, `nilai`, `persen`, `jenisUjian`, `id_semester`, `tanggal`, `fileSoal`) VALUES
(1, 88888, 'Tugas', 1, 100, 20, 'UTS', 2, '0000-00-00', ''),
(1, 88888, 'Kuis', 1, 100, 20, 'UTS', 2, '0000-00-00', ''),
(1, 88888, 'UTS', 1, 100, 60, 'UTS', 2, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskusikelas`
--

CREATE TABLE IF NOT EXISTS `diskusikelas` (
  `nama_file` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `KodeMkBuka` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `kp` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `file_path` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `diskusikelas`
--

INSERT INTO `diskusikelas` (`nama_file`, `KodeMkBuka`, `kp`, `file_path`) VALUES
('ubaya.jpg', '64A41320101', 'A', 'bahandiskusikelas/ubaya.jpg'),
('ubaya4.jpg', '64A41320101', 'A', 'bahandiskusikelas/ubaya4.jpg'),
('ubaya3.jpg', '64A41320101', 'A', 'bahandiskusikelas/ubaya3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `tempat` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `keterangan` text COLLATE latin1_general_ci NOT NULL,
  `jamMulaiE` time NOT NULL,
  `jamSelesaiE` time NOT NULL,
  `tema` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=63 ;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `tempat`, `tanggal`, `id_user`, `keterangan`, `jamMulaiE`, `jamSelesaiE`, `tema`) VALUES
(7, 'New York Square, New York', '2010-06-25', 88888, 'Banyak artis yang jadi bintang tamu, yaitu Dimaz Andrean, Zac Efron, dan banyak lagi', '00:00:07', '00:00:14', 'Pesta Kelulusan'),
(8, 'mbmnb', '2010-06-25', 88888, 'nbm', '00:00:07', '00:00:11', 'mnbm'),
(9, 'nmbmnbm', '2010-06-30', 88888, 'nb', '00:00:10', '00:00:13', 'nbm'),
(57, 'kjhgiuykjh', '2010-06-30', 6054840, 'kmn,', '00:00:07', '00:00:13', 'kjhkjh'),
(58, 'secfsfcwe', '2010-07-29', 6054840, 'qwerwer', '00:00:07', '00:00:12', 'werqwerqwer'),
(54, 'mhgvkjh', '2010-06-28', 88888, 'jgbkj', '00:00:07', '00:00:11', 'gbmjhfgkbjygkb'),
(53, 'jhgkujg', '2010-06-30', 88888, 'kjgb,k', '00:00:07', '00:00:13', 'mjghkjutgb'),
(52, 'mhgkjytk', '2010-06-21', 88888, 'gbkjgk', '00:00:07', '00:00:12', 'jhgbkjhgbkjh'),
(51, 'jytjytgbkjhgbk', '2010-06-28', 88888, 'bkjhgbkj', '00:00:07', '00:00:13', 'jhgbkjhgbkjhg'),
(44, 'mnbjhguytrftf', '2010-06-30', 88888, 'kj.,ml', '00:00:07', '00:00:12', 'hgvmhghkjn,'),
(45, 'jgkug', '2010-06-29', 88888, 'glkjhn', '00:00:07', '00:00:12', 'jktbtuku'),
(50, 'jhgbkjhgbmhg', '2010-06-29', 88888, 'hgbm', '00:00:07', '00:00:11', 'mjhgbmjhgbmj'),
(49, 'mhgvkjhfb,jh', '2010-06-29', 88888, 'lkjg,', '00:00:07', '00:00:11', 'gb,gjlkjgb'),
(59, '0898098', '2010-07-20', 6024206, 'yruyruru', '00:00:07', '00:00:10', 'rwwrewr'),
(60, 'New York', '2010-07-21', 6024206, 'Keren sekali', '00:00:07', '00:00:10', 'Keren'),
(61, 'ubaya', '2010-07-29', 6054840, 'keterangan', '00:00:07', '00:00:12', 'kuliah'),
(62, 'jhkjhkj', '2010-07-29', 6024206, 'kjhkjk', '00:00:12', '00:00:14', 'kjhkjhkjh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE IF NOT EXISTS `fakultas` (
  `id_fakultas` int(11) NOT NULL,
  `nama_fakultas` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_fakultas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama_fakultas`) VALUES
(6, 'Teknik'),
(1, 'Farmasi'),
(5, 'Psikologi'),
(3, 'Ekonomi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `id_forum` int(11) NOT NULL AUTO_INCREMENT,
  `id_admin` int(11) NOT NULL,
  `topik` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `isi` varchar(3500) COLLATE latin1_general_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_forum`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=77 ;

--
-- Dumping data untuk tabel `forum`
--

INSERT INTO `forum` (`id_forum`, `id_admin`, `topik`, `isi`, `timestamp`) VALUES
(32, 88888, 'jhgjhgjhgj', 'hgjhgj', '2010-06-06 06:50:49'),
(31, 88888, 'jkhkjhkj', 'hkjhkj', '2010-06-06 06:40:58'),
(30, 88888, 'jkhkjhkjhk', 'jhkjhk', '2010-06-06 06:37:55'),
(64, 88888, '0090908o979868768658', 'mjhkjhkjhkjxcm,vnz.xc,vnz.xc,mvnzx.cv,mzn.c,mvnz.xcm,vznx.cvmznxc.384752093847520384', '2010-06-06 14:00:26'),
(66, 6002, '123123123', 'qweqweqwe', '2010-07-06 06:48:39'),
(65, 6054840, 'mnbmbuyrufkhgg', 'kjkjhifkhn', '2010-06-25 05:47:09'),
(63, 88888, 'oiuoiuoyhnbm', 'mjhkjhkjhkj', '2010-06-06 14:00:01'),
(61, 88888, 'qqqq', 'wwwww', '2010-06-06 13:55:29'),
(62, 88888, 'uyiuyiuiuy', 'iuyiuyi', '2010-06-06 13:55:50'),
(60, 88888, 'nbmnbkjgujyruy', 'jgjhg,jh,mn', '2010-06-06 10:19:55'),
(59, 88888, 'nbkjmnbmnbm', 'kjugljhl', '2010-06-06 10:17:40'),
(67, 88888, 'uytiuyti', 'uytiuyti', '2010-07-08 15:06:02'),
(68, 88888, '879oiuoiu', 'oiuo87oio', '2010-07-08 15:08:22'),
(76, 6002, '9809809809809', '.,m.,m.,mm,nmbmnbmbmn', '2010-07-14 10:50:16'),
(75, 6002, '1321312312', 'ipoipoipoipo', '2010-07-14 10:50:01'),
(74, 6054840, '', '', '2010-07-11 12:29:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `forumnyakelas`
--

CREATE TABLE IF NOT EXISTS `forumnyakelas` (
  `id_forum` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  PRIMARY KEY (`id_forum`,`id_kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `subyekFoto` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `ketFoto` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `jenisFoto` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `id_album` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_foto`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=85 ;

--
-- Dumping data untuk tabel `foto`
--

INSERT INTO `foto` (`subyekFoto`, `ketFoto`, `jenisFoto`, `id_foto`, `id_album`, `timestamp`) VALUES
('', '', '', 11, 4, '0000-00-00 00:00:00'),
('', '', '', 12, 4, '0000-00-00 00:00:00'),
('1', '2', 'jpg', 60, 7, '0000-00-00 00:00:00'),
('3', '4', 'jpg', 59, 7, '0000-00-00 00:00:00'),
('a', 'b', 'jpg', 55, 7, '0000-00-00 00:00:00'),
('c', 'd', 'jpg', 54, 7, '0000-00-00 00:00:00'),
('e', 'f', 'jpg', 61, 7, '2010-05-29 15:52:26'),
('Sao Paulo', 'ABC', 'jpg', 62, 13, '2010-06-21 05:12:33'),
('biru', 'ketbiru', 'jpg', 63, 14, '2010-06-25 05:53:17'),
('sunset', 'ketsunset', 'jpg', 64, 14, '2010-06-25 05:53:17'),
('Venesi', 'Gondola', 'jpg', 74, 22, '2010-07-20 08:13:50'),
('', '', 'jpg', 66, 17, '2010-07-08 06:45:48'),
('bunga ', 'pink', 'jpg', 67, 18, '2010-07-08 14:40:47'),
('', '', 'jpg', 68, 19, '2010-07-08 14:42:56'),
('', '', 'jpg', 75, 21, '2012-04-19 15:27:20'),
('', '', 'jpg', 76, 14, '2012-04-28 17:15:04'),
('', '', 'jpg', 77, 0, '2012-08-18 19:38:40'),
('', '', 'jpg', 78, 0, '2012-08-18 19:39:20'),
('', '', 'jpg', 79, 0, '2012-08-18 19:39:50'),
('', '', 'jpg', 80, 0, '2012-08-18 19:39:55'),
('', '', 'jpg', 81, 0, '2012-08-18 19:40:31'),
('', '', 'jpg', 82, 0, '2012-08-18 19:40:31'),
('', '', 'jpg', 83, 0, '2012-08-18 19:40:31'),
('', '', 'jpg', 84, 23, '2012-09-03 07:08:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fotoevent`
--

CREATE TABLE IF NOT EXISTS `fotoevent` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `id_event` int(11) NOT NULL,
  `subyekFoto` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `ketFoto` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `jenisFoto` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_foto`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `fotoevent`
--

INSERT INTO `fotoevent` (`id_foto`, `id_event`, `subyekFoto`, `ketFoto`, `jenisFoto`, `timestamp`) VALUES
(1, 51, '', '', 'jpg', '2010-06-15 12:19:06'),
(2, 51, '', '', 'jpg', '2010-06-15 12:19:06'),
(3, 54, '', '', 'bmp', '2010-06-15 13:09:14'),
(4, 54, '', '', 'jpg', '2010-06-15 13:09:14'),
(5, 54, '', '', 'jpg', '2010-06-15 13:09:14'),
(6, 54, '', '', 'jpg', '2010-06-15 13:12:58'),
(7, 54, '', '', 'jpg', '2010-06-15 13:12:58'),
(8, 54, '', '', 'jpg', '2010-06-15 13:12:58'),
(9, 57, '', '', 'jpg', '2010-06-25 06:25:59'),
(10, 57, '', '', 'jpg', '2010-06-25 06:25:59'),
(11, 59, '', '', 'jpg', '2010-07-08 08:39:39'),
(12, 60, '', '', 'jpg', '2010-07-08 15:27:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `isiforum`
--

CREATE TABLE IF NOT EXISTS `isiforum` (
  `id_isiforum` int(11) NOT NULL AUTO_INCREMENT,
  `komentar` text COLLATE latin1_general_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL,
  `id_topik` int(11) NOT NULL,
  PRIMARY KEY (`id_isiforum`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=79 ;

--
-- Dumping data untuk tabel `isiforum`
--

INSERT INTO `isiforum` (`id_isiforum`, `komentar`, `timestamp`, `id_user`, `id_topik`) VALUES
(1, 'kjhkjh', '2010-06-06 06:38:04', 88888, 30),
(2, 'gjhg', '2010-06-06 06:41:05', 88888, 31),
(28, 'mn,mn,m', '2010-06-06 10:00:12', 88888, 31),
(27, 'mn,mn,m', '2010-06-06 10:00:05', 88888, 31),
(26, 'mn,mn,', '2010-06-06 09:54:28', 88888, 31),
(25, 'berhasil', '2010-06-06 09:38:23', 88888, 31),
(43, 'pasti berhasil', '2010-06-06 10:21:53', 88888, 31),
(42, '34235365686utj.[[009', '2010-06-06 10:20:11', 88888, 31),
(41, 'nbcnbcnbnb vnb', '2010-06-06 10:20:02', 88888, 31),
(40, '0-9-=09=09=', '2010-06-06 10:17:52', 88888, 31),
(39, 'glee', '2010-06-06 10:13:40', 88888, 31),
(38, 'coba lagi', '2010-06-06 10:11:35', 88888, 31),
(37, 'coba lagi', '2010-06-06 10:11:19', 88888, 31),
(44, 'Nama saya Yantie', '2010-06-06 13:26:09', 88888, 31),
(45, 'Saya tinggal di Surabaya', '2010-06-06 13:26:24', 88888, 31),
(46, 'qqwqewqewq', '2010-06-12 09:43:54', 88888, 32),
(47, ',m.m.,m.,m.,', '2010-06-12 09:44:01', 88888, 32),
(48, 'nbmvgjyrkhgmn', '2010-06-25 05:47:49', 6054840, 65),
(49, 'jyrjhgbmjuylouil', '2010-06-25 05:48:01', 6054840, 65),
(50, 'nvmcvjtrfjh', '2010-06-25 05:48:23', 6054840, 65),
(51, 'haaaik', '2010-06-29 12:49:33', 6054840, 65),
(52, 'Halo', '2010-07-03 03:45:02', 6054840, 64),
(53, 'halo', '2010-07-03 03:50:01', 6054840, 32),
(54, 'Isi Forum', '2010-07-04 23:50:10', 6054840, 65),
(55, '', '2010-07-04 23:50:11', 6054840, 65),
(56, '', '2010-07-04 23:50:12', 6054840, 65),
(57, 'isi forum', '2010-07-04 23:50:27', 6054840, 65),
(58, 'isi forum', '2010-07-04 23:50:36', 6054840, 65),
(59, 'Isi forum', '2010-07-04 23:52:06', 6054840, 65),
(60, 'isi forum', '2010-07-04 23:52:22', 6054840, 65),
(61, 'sadasda', '2010-07-04 23:53:20', 6054840, 65),
(62, 'asdasd', '2010-07-04 23:53:25', 6054840, 65),
(75, 'uyiuyiuyi', '2010-07-06 06:48:56', 6002, 66),
(76, 'kjhjhk', '2010-07-08 14:50:06', 88888, 64),
(77, 'mn,mn,', '2010-07-08 14:50:32', 88888, 64),
(78, 'qweqweqweqw', '2010-07-14 10:50:32', 6002, 76);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwalkuistugas`
--

CREATE TABLE IF NOT EXISTS `jadwalkuistugas` (
  `id_kt` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_kt` enum('Tugas','Kuis') COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `ruang` varchar(11) COLLATE latin1_general_ci NOT NULL,
  `jam` varchar(11) COLLATE latin1_general_ci NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu') COLLATE latin1_general_ci NOT NULL,
  `bahan` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `id_kelas` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `ke` int(11) NOT NULL,
  `tipe` enum('UTS','UAS') COLLATE latin1_general_ci NOT NULL,
  `persen` int(3) NOT NULL,
  PRIMARY KEY (`id_kt`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=186 ;

--
-- Dumping data untuk tabel `jadwalkuistugas`
--

INSERT INTO `jadwalkuistugas` (`id_kt`, `jenis_kt`, `tanggal`, `ruang`, `jam`, `hari`, `bahan`, `id_kelas`, `ke`, `tipe`, `persen`) VALUES
(149, 'Kuis', '2010-06-25', 'TF11', '08.25', 'Jumat', 'SEO', '3', 1, 'UAS', 30),
(145, 'Tugas', '2010-06-25', 'TF11', '08.25', 'Jumat', 'fjfrjyh', '3', 4, 'UTS', 10),
(144, 'Tugas', '2010-06-24', 'TF11', '08.25', 'Kamis', 'mnbmbmn', '3', 3, 'UTS', 10),
(142, 'Tugas', '2010-06-14', 'TF11', '08.25', 'Senin', 'ABCDEF', '3', 2, 'UTS', 10),
(141, 'Tugas', '2010-06-12', 'TF11', '08.25', 'Sabtu', 'ABCDEF', '3', 1, 'UTS', 10),
(143, 'Tugas', '2010-06-30', 'TF11', '08.25', 'Rabu', 'jhkjhk', '3', 2, 'UAS', 20),
(138, '', '0000-00-00', '', '', 'Senin', '', '3', 0, 'UTS', 50),
(139, '', '0000-00-00', '', '', 'Senin', '', '3', 0, 'UAS', 50),
(184, 'Tugas', '2010-06-29', '', '08.25', 'Selasa', '32qrfweardwqefawerfw4t', '64A95220101A', 1, 'UTS', 100),
(185, 'Tugas', '2010-06-30', '', '11.00', 'Rabu', 'srtsretgwegw', '64A95220101A', 1, 'UAS', 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwalkul`
--

CREATE TABLE IF NOT EXISTS `jadwalkul` (
  `id_jadwalkul` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) NOT NULL,
  `id_ruang` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu') COLLATE latin1_general_ci NOT NULL,
  `jamMulai` enum('07.25','09.00','10.00','12.55','15.20','16.40') COLLATE latin1_general_ci NOT NULL,
  `jamSelesai` enum('07.25','09.00','10.00','12.55','15.20','16.40') COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_jadwalkul`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=55 ;

--
-- Dumping data untuk tabel `jadwalkul`
--

INSERT INTO `jadwalkul` (`id_jadwalkul`, `id_kelas`, `id_ruang`, `hari`, `jamMulai`, `jamSelesai`) VALUES
(53, 3, 'tc41', 'Rabu', '07.25', '07.25'),
(2, 5, 'TC41', 'Senin', '07.25', '09.00'),
(3, 1, 'TF11', 'Senin', '07.25', '10.00'),
(4, 1, 'TF22', 'Senin', '07.25', '10.00'),
(5, 1, 'TF33', 'Senin', '07.25', '12.55'),
(6, 1, 'TF41', 'Selasa', '15.20', '16.40'),
(7, 1, 'TF41', 'Senin', '07.25', '09.00'),
(8, 2, 'TC41', 'Selasa', '15.20', '16.40'),
(9, 2, 'TC41', 'Sabtu', '15.20', '16.40'),
(54, 3, 'tf11', 'Senin', '07.25', '07.25'),
(15, 99, 'tf11', 'Selasa', '07.25', '10.00'),
(14, 99, 'tf22', 'Kamis', '07.25', '10.00'),
(52, 3, 'tf22', 'Rabu', '07.25', '07.25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwalujian`
--

CREATE TABLE IF NOT EXISTS `jadwalujian` (
  `id_ujian` int(11) NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu') COLLATE latin1_general_ci NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `jamKe` int(1) NOT NULL,
  `ruang` int(11) NOT NULL,
  `mg` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `jadwalujian`
--

INSERT INTO `jadwalujian` (`id_ujian`, `hari`, `id_kelas`, `jamKe`, `ruang`, `mg`) VALUES
(1, 'Senin', 1, 1, 0, 1),
(2, 'Selasa', 3, 1, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenisnilai`
--

CREATE TABLE IF NOT EXISTS `jenisnilai` (
  `id_jenisNilai` int(11) NOT NULL,
  `nama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `persen` int(11) NOT NULL,
  PRIMARY KEY (`id_jenisNilai`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenisshoutout`
--

CREATE TABLE IF NOT EXISTS `jenisshoutout` (
  `id_jenis` int(11) NOT NULL,
  `nama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `max_isi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `jenisshoutout`
--

INSERT INTO `jenisshoutout` (`id_jenis`, `nama`, `max_isi`) VALUES
(1, 'status', 150);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `nama_jurusan` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`nama_jurusan`, `id_fakultas`, `id_jurusan`) VALUES
('Informatika', 6, 1),
('Kedokteran', 1, 787),
('Manajemen Artis', 3, 987),
('Akuntansi', 3, 4),
('Teknobiolog', 1, 88),
('Perbankan Internasio', 3, 23124),
('Seni', 5, 9643),
('Anak', 5, 6789),
('Ramuan', 1, 786),
('Marketing', 3, 4352),
('Industri', 6, 8743),
('Kosmetika', 1, 780),
('Rumah', 3, 435345),
('HRD', 5, 12345),
('Desain Produk', 6, 9801),
('Sistem Informasi', 6, 9802),
('Teknik', 3, 345),
('Perpajakan', 3, 778),
('Obat', 1, 123456),
('Budaya', 5, 3459),
('Etika', 5, 980),
('Pendidikan', 5, 583),
('Manufaktur', 6, 643),
('Internasional', 3, 765),
('Website', 6, 984),
('Game', 6, 854),
('Saham', 3, 7543),
('Estitka', 1, 913),
('Kecerdasan', 5, 7549),
('asdasd', 5, 127),
('dsfsdf', 3, 34),
('reter', 1, 567),
('yudrturtu', 1, 367),
('trydrytd', 3, 5789),
('Global', 3, 864),
('jhkj', 5, 2),
('Perbankan', 3, 257),
('wetrwtrwe', 1, 347),
('dfasdfsdfsdhnh', 1, 123),
('gffdghfdhfgh', 3, 453453),
('fdtgsdtrt', 3, 432423),
('drtsdrytrt', 3, 53),
('dsftgdfgfg', 3, 349),
('dsfgdfgsdfgdfg', 1, 23423),
('dfstgdfgdfg', 1, 45),
('fghdthdfthdftudrt', 3, 4564),
('gfhxgfhfghxfghfgh', 1, 4567),
('sfdgzsdfgzsdgzsdfgt5', 5, 34545645),
('Mesin', 6, 3467),
('Fisika', 6, 34680),
('Programming', 6, 8796),
('Hardware', 6, 98787),
('Perkapalan', 6, 7865),
('Komputer', 6, 8765),
('Komputer', 6, 87690),
('Sipil', 6, 87954),
('Matematika', 6, 879576),
('Kimia', 1, 34534),
('Apotik', 1, 345667),
('Baru', 1, 3456879),
('Pewarnaan', 6, 98754),
('Belajar', 6, 97065),
('Ilmu Ekonomi', 3, 87562),
('Elektro', 6, 875),
('fgdfgdfgdftg', 3, 3424),
('hgkji', 1, 5464),
('Keluarga Bahagia', 3, 988653),
('Bisnis', 3, 87765),
('Marketing', 3, 345689),
('Alami', 3, 45347);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `nip` int(8) NOT NULL,
  `bagian` int(8) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(11) NOT NULL,
  `id_mk` int(11) NOT NULL,
  `id_kp` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `tglUTS` datetime NOT NULL,
  `tglUAS` datetime NOT NULL,
  `id_rgUTS` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `id_rgUAS` varchar(8) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_mk`, `id_kp`, `id_dosen`, `id_semester`, `tglUTS`, `tglUAS`, `id_rgUTS`, `id_rgUAS`) VALUES
(1, 769, 'A', 34234, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(2, 769, 'B', 234235, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(3, 3234, 'A', 88888, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(4, 70, 'A', 8796, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(5, 70, 'B', 96785, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentaralbum`
--

CREATE TABLE IF NOT EXISTS `komentaralbum` (
  `id_album` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isi` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_album`,`id_user`,`timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentarevent`
--

CREATE TABLE IF NOT EXISTS `komentarevent` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `id_event` int(11) NOT NULL,
  `id_pengirim` int(11) NOT NULL,
  `komentar` text COLLATE latin1_general_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_komentar`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `komentarevent`
--

INSERT INTO `komentarevent` (`id_komentar`, `id_event`, `id_pengirim`, `komentar`, `timestamp`) VALUES
(15, 60, 6024206, 'qeqwe', '2010-07-08 15:24:59'),
(14, 58, 6054840, 'rwerwerw', '2010-07-05 04:26:47'),
(11, 30, 88888, 'uyiuyiuyiuy', '2010-06-15 11:03:17'),
(10, 30, 88888, 'n,mn,mn,mn,n,mn,m', '2010-06-15 11:03:12'),
(9, 25, 88888, 'mnmn bm', '2010-06-15 10:51:02'),
(6, 19, 88888, 'n,m,mn,mn,', '2010-06-15 10:26:57'),
(7, 19, 88888, 'kajlhwqkdla', '2010-06-15 10:27:05'),
(8, 19, 88888, 'kuawyrcnlkuahrnflkasjerhcnlaskjefhncjsdfhnkszjdfhczksnfcjsdgnfjhngcdsd', '2010-06-15 10:27:13'),
(16, 60, 6024206, 'qweqwertyrtyt', '2010-07-08 15:25:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentarfoto`
--

CREATE TABLE IF NOT EXISTS `komentarfoto` (
  `id_foto` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isi` varchar(500) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_foto`,`id_user`,`timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `komentarfoto`
--

INSERT INTO `komentarfoto` (`id_foto`, `id_user`, `timestamp`, `isi`) VALUES
(63, 6054840, '2010-07-01 10:12:40', 'Hai..'),
(63, 6054840, '2010-07-01 10:14:54', 'Semoga berhasil..'),
(63, 6054840, '2010-07-01 10:15:08', 'Okelah kalau begitu'),
(63, 6054840, '2010-07-01 10:15:54', 'Ganbate'),
(54, 88888, '2010-07-08 14:36:20', 'mjn,mn,\n'),
(54, 88888, '2010-07-08 14:36:13', 'jgjhgj'),
(63, 6054840, '2010-07-01 10:20:37', 'GBU always'),
(74, 6002, '2010-07-20 10:03:06', 'qwqwqww'),
(76, 6054840, '2012-05-16 16:26:59', 'Gimana keren kan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentarshoutout`
--

CREATE TABLE IF NOT EXISTS `komentarshoutout` (
  `id_shoutout` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isi` varchar(1000) COLLATE latin1_general_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_ks` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_ks`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=67 ;

--
-- Dumping data untuk tabel `komentarshoutout`
--

INSERT INTO `komentarshoutout` (`id_shoutout`, `id_user`, `isi`, `timestamp`, `id_ks`) VALUES
(96, 6054840, 'm,nbkjgmn,m', '2010-07-13 11:24:56', 32),
(44, 6054840, 'Ganbate', '2010-07-01 06:44:03', 2),
(44, 6002, 'Semoga cepat selesai.. Amin..', '2010-07-01 06:46:17', 25),
(43, 6054840, 'Wish you all the best', '2010-07-01 11:05:45', 19),
(58, 6002, '123123123', '2010-07-06 07:29:56', 3),
(55, 6002, 'komentar coba shoutout', '2010-07-06 06:44:40', 4),
(66, 6002, 'qweqweqwe', '2010-07-06 08:20:15', 5),
(58, 6002, '3423423423423423', '2010-07-06 08:34:52', 6),
(68, 6002, 'jjj', '2010-07-06 08:47:42', 7),
(68, 6002, 'jj', '2010-07-06 08:48:51', 8),
(68, 6002, 'cvcv', '2010-07-06 08:51:54', 9),
(68, 6002, 'jjkkk', '2010-07-06 08:55:58', 20),
(67, 6002, 'llkl', '2010-07-06 08:57:10', 24),
(68, 6002, 'oop', '2010-07-06 09:01:06', 26),
(68, 6002, '342424234234', '2010-07-06 09:11:11', 27),
(68, 6002, '131-09-09-0-', '2010-07-06 09:22:47', 14),
(76, 6002, '2321q2312', '2010-07-06 09:29:17', 12),
(59, 6002, '123123123', '2010-07-06 09:29:41', 13),
(60, 6002, 'uytiuyiu', '2010-07-06 09:30:00', 28),
(61, 6002, '2312qeqwe12312', '2010-07-06 09:31:32', 15),
(44, 6054840, 'kamu lulus dengan nilai A.. ', '2010-07-13 09:35:41', 16),
(98, 6054840, ',mn,mn/,m,kljlkjlk', '2010-07-13 11:24:32', 31),
(44, 6054840, 'uyiujhkjhkjhkjhk', '2010-07-13 10:10:54', 23),
(44, 6054840, 'jhgjhgjhgj', '2010-07-13 10:15:37', 1),
(44, 6054840, 'wqewqejhwkjhk', '2010-07-13 10:20:16', 29),
(105, 6054840, 'halo komentar', '2010-07-14 08:30:09', 49),
(104, 6002, 'asdasd', '2010-07-16 12:30:25', 65),
(103, 6054840, 'amiin..', '2010-07-14 08:28:15', 44),
(103, 6054840, 'abc', '2010-07-14 08:28:02', 43),
(103, 6054840, 'amiin ', '2010-07-14 08:27:46', 42),
(96, 6054840, 'jhkjhkjhkj', '2010-07-13 11:53:56', 39),
(99, 6054840, '9080980980980976576576', '2010-07-13 12:00:46', 40),
(101, 6054840, 'brazil..', '2010-07-13 12:03:09', 41),
(106, 6054840, '123456', '2010-07-14 08:30:51', 50),
(106, 6054840, '1234567890', '2010-07-14 08:31:45', 51),
(108, 6054840, ',m.,m,n,mn,mn,mn,', '2010-07-14 08:34:53', 52),
(108, 6054840, '675675675675676', '2010-07-14 08:35:22', 53),
(108, 6054840, '/.,/.,/.,/.,/???', '2010-07-14 08:41:12', 54),
(109, 6054840, 'mnbmbmnbmnbmnm', '2010-07-14 08:41:31', 55),
(109, 6054840, '.,m.,m.,', '2010-07-14 08:43:45', 56),
(109, 6054840, 'kjlkjlkjl', '2010-07-14 08:44:07', 57),
(111, 6054840, 'p[p][pp][p][p]', '2010-07-14 08:44:28', 58),
(112, 6054840, '54321', '2010-07-14 08:47:12', 59),
(113, 6054840, 'qwert', '2010-07-14 08:48:12', 60),
(114, 6054840, 'ertrewqq', '2010-07-14 08:49:05', 61),
(115, 6054840, 'Baik..', '2010-07-14 12:57:58', 62),
(39, 6054840, 'Waw.. Enak sekali.. Kenalin dunk..', '2010-07-15 20:09:04', 64),
(104, 6001, 'asdasd', '2010-07-16 12:37:26', 66);

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE IF NOT EXISTS `matkul` (
  `id_matkul` int(11) NOT NULL,
  `nama_matkul` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `ket` varchar(5) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_matkul`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `nama_matkul`, `ket`) VALUES
(12903, 'Akuntansi Perbankan', ''),
(20, 'Agama Katolik', 'MKU'),
(70, 'Kewirausahaan', 'MKU'),
(30, 'Metodologi Penelitian', 'MKU'),
(11, 'Fotografi', ''),
(8888, 'Pemrograman Web', ''),
(100, 'Pemrograman Game', ''),
(58, 'Kewirausahaan', 'MKU'),
(2342000, 'sdfadf', ''),
(45, 'Bahasa Inggris', 'MKU'),
(346, 'Bahasa Indonesia', 'MKU'),
(5678, 'Ilmu Akuntansi Dasar', ''),
(5679, 'Ilmu Psikologi Dasar', ''),
(12312, 'Bahasa Jawa', ''),
(23423, 'Bahasa Sunda', ''),
(23427, 'Bahasa Sunda', ''),
(768, 'Storyline', ''),
(234, 'Bahasa', ''),
(2390, 'erserfswe', ''),
(92745, 'ABCDEFG', ''),
(43589, 'sadasdasd', ''),
(4325345, 'wearwer', ''),
(43253409, 'wearwer', ''),
(2341234, 'searsfafasdf', ''),
(7895, 'PPKn', 'MKU'),
(3490, 'jhjhkjhkj', ''),
(43334, 'fsadfsdfsadfsadf', ''),
(3234, 'Ilmu Matematika Dasar ', ''),
(45345, 'sdfsfsadfszdfzsdf', ''),
(453409, 'sdfsfsadfszdfzsdf', ''),
(9879, 'Marketing', ''),
(43234234, 'sdfsdfszdfzsdffdhrtertas', ''),
(4534900, 'rtzsrzserfzsdfzsd', ''),
(6879, 'Pembuatan sirkuit', ''),
(769, 'Akunting Perusahaan Internasional', ''),
(76097, 'Akunting Perusahaan', ''),
(87689, 'Obat ', ''),
(698769, 'hgjhgjhgjhgjhgj', ''),
(768098, 'Konsep Dasar Listrik', ''),
(7680909, 'Konsep Dasar Listrik', ''),
(76, 'Konsep Dasar Listrik', ''),
(760986, 'Konsep Dasar Listrik', ''),
(7954, 'Sirkuit Motherboard', ''),
(87965, 'Pemrograman dasar', ''),
(879609, 'Pemrograman dasar', ''),
(78955, 'Teknik Solder', ''),
(6890, 'Elektronika Dasar', ''),
(8790, 'Praktek hardware', ''),
(879654, 'Algoritma Pemrograman ', ''),
(7689, 'Bahasa Indonesia', ''),
(8796, 'Manajemen Informatika', ''),
(795097, 'Pemrograman Multimedia', ''),
(345345, 'Bahasa', 'MKU'),
(23, 'Menggambar', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `memberevent`
--

CREATE TABLE IF NOT EXISTS `memberevent` (
  `id_event` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_event`,`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `memberforum`
--

CREATE TABLE IF NOT EXISTS `memberforum` (
  `id_forum` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_forum`,`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE IF NOT EXISTS `mhs` (
  `id_mhs` int(11) NOT NULL,
  `thn` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  PRIMARY KEY (`id_mhs`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`id_mhs`, `thn`, `id_jurusan`) VALUES
(9, 0, 0),
(25, 0, 0),
(26, 0, 0),
(27, 0, 0),
(28, 0, 0),
(29, 0, 0),
(50, 0, 4),
(70, 2005, 4),
(71, 2005, 9),
(8, 0, 9),
(3, 2005, 9),
(98754, 2010, 3459),
(454678, 2010, 3459),
(4546789, 2010, 3459),
(4546434, 2010, 8765),
(999, 2010, 4),
(234, 2010, 875),
(34534, 2010, 875),
(3454578, 2010, 875),
(768876, 2010, 875),
(5345, 2010, 875),
(53498, 2010, 879576),
(87987, 2010, 875),
(45345, 2010, 8796),
(453409999, 2010, 257),
(4353, 2010, 875),
(7698, 2010, 875),
(45325, 2010, 875),
(34543, 2010, 875),
(454, 2010, 854),
(88888, 2005, 4),
(22222, 2005, 4),
(111111, 2010, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhsikutkelas`
--

CREATE TABLE IF NOT EXISTS `mhsikutkelas` (
  `id_kelas` int(11) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `mhsikutkelas`
--

INSERT INTO `mhsikutkelas` (`id_kelas`, `id_mhs`, `id_semester`) VALUES
(1, 88888, 2),
(3, 88888, 2),
(5, 88888, 2),
(3, 22222, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_kt` int(11) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_kt`, `id_mhs`, `nilai`) VALUES
(143, 88888, 87),
(143, 22222, 86),
(144, 22222, 90),
(144, 88888, 90),
(142, 22222, 90),
(142, 88888, 80),
(141, 22222, 80),
(141, 88888, 90),
(140, 22222, 90),
(140, 88888, 100),
(139, 22222, 80),
(139, 88888, 80),
(138, 22222, 100),
(138, 88888, 70),
(145, 88888, 88),
(145, 22222, 87),
(149, 22222, 99),
(149, 88888, 98),
(184, 6024206, 100),
(185, 6024206, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilaiakhir`
--

CREATE TABLE IF NOT EXISTS `nilaiakhir` (
  `id_mhs` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `NTS` int(3) NOT NULL,
  `NAS` int(3) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `NA` int(3) NOT NULL,
  `nilaiHuruf` varchar(2) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `nilaiakhir`
--

INSERT INTO `nilaiakhir` (`id_mhs`, `id_kelas`, `NTS`, `NAS`, `id_semester`, `NA`, `nilaiHuruf`) VALUES
(88888, 1, 100, 100, 2, 100, 'A'),
(88888, 5, 100, 100, 2, 100, 'A'),
(88888, 3, 100, 100, 2, 100, 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `online`
--

CREATE TABLE IF NOT EXISTS `online` (
  `session_id` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `last_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `online`
--

INSERT INTO `online` (`session_id`, `id_user`, `last_time`) VALUES
('28d2dc3ba3883325cdef4dc65cf508e7', 6001, '2012-08-15 15:50:09'),
('40bc55a0768ad80ef01b257462b3740a', 0, '2012-05-23 15:15:48'),
('266e800357b886a9e558a392b6255bf7', 6024206, '2013-04-10 19:07:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pacar`
--

CREATE TABLE IF NOT EXISTS `pacar` (
  `id_subyek` int(11) NOT NULL,
  `id_obyek` int(11) NOT NULL,
  `status` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_subyek`,`id_obyek`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengirimwall`
--

CREATE TABLE IF NOT EXISTS `pengirimwall` (
  `id_shoutout` int(11) NOT NULL,
  `id_pengirim` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `pengirimwall`
--

INSERT INTO `pengirimwall` (`id_shoutout`, `id_pengirim`) VALUES
(50, 6054840),
(51, 6054840),
(102, 6054840);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id_pesan` int(11) NOT NULL AUTO_INCREMENT,
  `id_pengirim` int(11) NOT NULL,
  `id_penerima` int(11) NOT NULL,
  `isi` text COLLATE latin1_general_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `subyekPesan` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `id_topik` int(11) NOT NULL,
  PRIMARY KEY (`id_pesan`,`timestamp`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=62 ;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_pengirim`, `id_penerima`, `isi`, `timestamp`, `subyekPesan`, `id_topik`) VALUES
(44, 6024206, 88888, 'mnbmmnbm', '2010-07-20 10:51:16', '', 7),
(11, 88888, 111111, 'Nyoba kirim pesan', '2010-06-19 11:15:16', 'Hai', 3),
(10, 88888, 22222, 'Nyoba kirim pesan', '2010-06-19 11:15:16', 'Hai', 3),
(9, 88888, 12398745, 'oipoipoip', '2010-06-18 09:58:16', 'bmnbmnbmn', 2),
(8, 88888, 88888, 'oipoipoip', '2010-06-18 09:58:16', 'bmnbmnbmn', 2),
(7, 88888, 6024206, 'oipoipoip', '2010-06-18 09:58:16', 'bmnbmnbmn', 2),
(12, 6054840, 6024206, 'kjhbkjhiutgjh', '2010-06-28 04:55:37', 'hgjtkjgjhgkjh', 4),
(13, 6054840, 6054840, 'kjhbkjhiutgjh', '2010-06-28 04:55:37', 'hgjtkjgjhgkjh', 4),
(15, 6024206, 6054840, 'Coba kirim pesan', '2010-06-28 10:26:54', 'Halo', 5),
(17, 6024206, 6024206, 'lagi', '2010-06-28 10:27:23', 'Kirim', 6),
(18, 6054840, 6054840, 'Semoga sukses buat TAnya', '2010-07-03 06:32:53', 'Ganbate', 7),
(19, 6054840, 6024206, 'Semoga sukses buat TAnya', '2010-07-03 06:32:53', 'Ganbate', 7),
(20, 6054840, 6034273, 'Semoga sukses buat TAnya', '2010-07-03 06:32:53', 'Ganbate', 7),
(26, 6054840, 6002, 'Saya memohon kepada Bapak Ibu jika berkenan untuk keringanan maju sidang pada bulan Juli ini.', '2010-07-03 06:40:47', 'Mohon agar diterima sidang Juli', 8),
(25, 6054840, 6001, 'Saya memohon kepada Bapak Ibu jika berkenan untuk keringanan maju sidang pada bulan Juli ini.', '2010-07-03 06:40:47', 'Mohon agar diterima sidang Juli', 8),
(24, 6054840, 6001, 'Saya memohon kepada Bapak Ibu jika berkenan untuk keringanan maju sidang pada bulan Juli ini.', '2010-07-03 06:40:47', 'Mohon agar diterima sidang Juli', 8),
(36, 6054840, 6024206, 'AMIN..', '2010-07-03 10:28:29', 'Semoga berhasil TAnya..', 35),
(27, 6054840, 6054840, 'Moga2 bisa sidang, lulus, n wisuda bareng ya.. AMIN..', '2010-07-03 06:48:34', 'Semoga sukses', 9),
(28, 6054840, 6024206, 'Moga2 bisa sidang, lulus, n wisuda bareng ya.. AMIN..', '2010-07-03 06:48:34', 'Semoga sukses', 9),
(29, 6054840, 6034273, 'Moga2 bisa sidang, lulus, n wisuda bareng ya.. AMIN..', '2010-07-03 06:48:34', 'Semoga sukses', 9),
(35, 6054840, 6054840, 'AMIN..', '2010-07-03 10:28:29', 'Semoga berhasil TAnya..', 35),
(47, 6002, 6054840, 'Anda lulus dengan nilai A', '2010-07-20 11:09:42', 'Anda lulus', 47),
(46, 6024206, 111111, 'Yantie kereeen..', '2010-07-20 11:08:14', 'Keren', 45),
(45, 6024206, 6054840, 'Yantie kereeen..', '2010-07-20 11:08:14', 'Keren', 45),
(48, 6002, 6024206, 'Anda lulus dengan nilai A', '2010-07-20 11:09:42', 'Anda lulus', 47),
(49, 6002, 6054840, 'Anda lulus dengan nilai A', '2010-07-20 11:13:33', 'Anda lulus ', 49),
(50, 6002, 6024206, 'Anda lulus dengan nilai A', '2010-07-20 11:13:33', 'Anda lulus ', 49),
(51, 6054840, 0, 'asdasdasd', '2012-04-22 17:46:47', '', 18),
(52, 6054840, 0, 'asdasd', '2012-04-22 17:48:30', '', 18),
(53, 6054840, 0, 'asdasd', '2012-04-22 17:48:44', '', 18),
(54, 6054840, 0, 'qweqweqweqweqwe', '2012-04-22 17:49:20', '', 18),
(60, 6054840, 88888, 'asdasd', '2012-08-15 13:34:32', 'asdas', 60),
(59, 6054840, 111111, 'asd', '2012-07-30 09:02:01', 'asd', 59);

-- --------------------------------------------------------

--
-- Struktur dari tabel `phototags`
--

CREATE TABLE IF NOT EXISTS `phototags` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `id_foto` int(11) NOT NULL,
  `title` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `x1` int(11) DEFAULT NULL,
  `y1` int(11) DEFAULT NULL,
  `x2` int(11) DEFAULT NULL,
  `y2` int(11) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=40 ;

--
-- Dumping data untuk tabel `phototags`
--

INSERT INTO `phototags` (`id`, `id_foto`, `title`, `x1`, `y1`, `x2`, `y2`, `width`, `height`, `id_user`) VALUES
(1, 0, 'abc', 61, 64, 113, 103, 52, 39, 0),
(2, 0, 'qwerty', 187, 14, 278, 82, 91, 68, 0),
(6, 0, 'Bunga Pink', 227, 75, 300, 130, 73, 55, 0),
(5, 0, 'Kereeen', 120, 107, 203, 169, 83, 62, 0),
(7, 54, 'Venezia', 239, 17, 300, 63, 61, 46, 0),
(8, 60, 'Pohon Biru', 237, 10, 300, 57, 63, 47, 0),
(21, 63, 'Pohon Biru', 312, 29, 432, 119, 120, 90, 0),
(10, 59, 'hghfh', 233, 61, 298, 110, 65, 49, 0),
(11, 65, 'gedung', 231, 98, 324, 168, 93, 70, 0),
(16, 66, 'Kolam Renang', 445, 311, 500, 352, 55, 41, 0),
(17, 66, 'pagar', 207, 311, 290, 373, 83, 62, 0),
(18, 66, 'tes', 412, 309, 477, 358, 65, 49, 0),
(19, 65, 'langit', 266, 61, 357, 129, 91, 68, 0),
(33, 74, 'antena', 404, 61, 476, 115, 72, 54, 0),
(31, 74, 'Brigita Hermien Asriyantie', 353, 123, 429, 180, 76, 57, 6054840),
(32, 74, 'venezia', 235, 169, 299, 217, 64, 48, 0),
(34, 74, 'Zac Efron', 336, 173, 392, 215, 56, 42, 0),
(35, 74, 'Ade Natanael Simanjuntak', 136, 203, 189, 243, 53, 40, 6024206),
(36, 74, 'awan', 162, 6, 246, 69, 84, 63, 0),
(37, 74, 'Stephanus Eko', 322, 283, 350, 304, 28, 21, 6001),
(38, 76, 'Brigita Hermien Asriyantie', 162, 63, 442, 273, 280, 210, 6054840);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE IF NOT EXISTS `ruang` (
  `id_ruang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ruang` varchar(10) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_ruang`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`) VALUES
(6, 'TF11'),
(4, 'TF41'),
(5, 'TC41'),
(7, 'TF22'),
(8, 'TF33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `id_sem` int(11) NOT NULL,
  `jenis` enum('Gasal','Genap') COLLATE latin1_general_ci NOT NULL,
  `thnAjaran` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `semester`
--

INSERT INTO `semester` (`id_sem`, `jenis`, `thnAjaran`) VALUES
(2, 'Gasal', 2010);

-- --------------------------------------------------------

--
-- Struktur dari tabel `shoutout`
--

CREATE TABLE IF NOT EXISTS `shoutout` (
  `id_shoutout` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL,
  `id_jenisshoutout` int(11) NOT NULL,
  `isishoutout` varchar(500) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_shoutout`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=116 ;

--
-- Dumping data untuk tabel `shoutout`
--

INSERT INTO `shoutout` (`id_shoutout`, `timestamp`, `id_user`, `id_jenisshoutout`, `isishoutout`) VALUES
(4, '2010-05-20 12:30:01', 22222, 1, 'shoutout ke1 22222'),
(5, '2010-05-20 12:30:01', 111111, 1, 'shoutout ke2 111111'),
(17, '2010-05-21 07:46:34', 88888, 1, 'Berjuang terus sampai berhasil'),
(18, '2010-05-21 07:54:54', 88888, 1, 'Pasti selesai tepat waktu'),
(21, '2010-05-21 07:57:50', 88888, 1, 'Beruntung karena berusaha'),
(24, '2010-05-21 08:07:51', 88888, 1, 'GBU always '),
(26, '2010-05-21 08:10:29', 88888, 1, 'God always be with you'),
(28, '2010-05-21 08:16:53', 88888, 1, 'Selalu ada jalan keluar'),
(36, '2010-06-03 06:25:42', 88888, 1, 'Lagi bikin TA'),
(37, '2010-06-04 13:13:12', 22222, 1, 'hgjhgj'),
(38, '2010-06-11 12:51:07', 111111, 1, 'Lagi nemenin pacarnya Yantie, Zac Efron'),
(39, '2010-06-11 12:51:51', 88888, 1, 'Lagi ngerjain TA sambil ditemani Zac Efron'),
(40, '2010-06-11 12:52:33', 111111, 1, 'Lagi syuting HSM'),
(41, '2010-06-19 10:13:14', 88888, 1, 'Di Batu perpisahan Devi'),
(42, '2010-07-01 05:26:12', 6054840, 1, 'Sedang menyelesaikan Tugas Akhir'),
(45, '2010-07-01 14:20:41', 6024206, 1, 'Lagi main Metal Gear Solid.'),
(51, '2010-07-02 13:57:21', 6024206, 2, 'Semangaaat'),
(102, '2010-07-13 14:20:23', 6002, 2, 'Bu tolong kasih saya nilai A ya Bu..'),
(115, '2010-07-14 12:57:50', 6054840, 1, 'apa kabar?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_foto` int(11) NOT NULL,
  `x1` int(11) NOT NULL,
  `y1` int(11) NOT NULL,
  `x2` int(11) NOT NULL,
  `y2` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbljurusanpnydosen`
--

CREATE TABLE IF NOT EXISTS `tbljurusanpnydosen` (
  `id_jurusan` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  PRIMARY KEY (`id_jurusan`,`id_dosen`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tbljurusanpnydosen`
--

INSERT INTO `tbljurusanpnydosen` (`id_jurusan`, `id_dosen`) VALUES
(0, 0),
(1, 7657),
(1, 42345),
(1, 87654),
(1, 342579),
(1, 567567),
(1, 986853),
(1, 4645364),
(4, 456),
(4, 544),
(4, 567),
(4, 3242),
(4, 3249),
(4, 4534),
(4, 4545),
(4, 5321),
(4, 5322),
(4, 22222),
(4, 22342),
(4, 23423),
(4, 34234),
(4, 34534),
(4, 43524),
(4, 45645),
(4, 76876),
(4, 88888),
(4, 111111),
(4, 234235),
(4, 456356),
(4, 456457),
(4, 543543),
(4, 543547),
(4, 567567),
(4, 576456),
(4, 647367),
(4, 756864),
(4, 756867),
(4, 777777),
(4, 976453),
(4, 1233256),
(4, 2584789),
(4, 4352362),
(4, 4556478),
(4, 4564554),
(4, 4564875),
(4, 5463456),
(4, 5675690),
(4, 6054840),
(257, 435345),
(257, 4563457),
(257, 9764579),
(345, 456456),
(345, 9764570),
(345, 9764576),
(778, 7568),
(778, 986853),
(786, 6876),
(787, 9879),
(787, 567567),
(854, 7687),
(875, 24),
(875, 342),
(875, 32423),
(984, 324324),
(984, 3243247),
(3459, 9764570),
(6789, 68768),
(7543, 2543524),
(7865, 324),
(8743, 2323),
(8796, 779879),
(9643, 9764578),
(9801, 234),
(9801, 2347),
(9801, 2349),
(12345, 687),
(12345, 45435),
(12345, 68767),
(12345, 454375),
(98787, 54645),
(123456, 9764576),
(123456, 9764579),
(432423, 456456),
(432423, 4352345),
(432423, 5464579),
(453453, 5464564),
(34545645, 79879);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbljurusanpnymatkul`
--

CREATE TABLE IF NOT EXISTS `tbljurusanpnymatkul` (
  `id_jurusan` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  PRIMARY KEY (`id_jurusan`,`id_matkul`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tbljurusanpnymatkul`
--

INSERT INTO `tbljurusanpnymatkul` (`id_jurusan`, `id_matkul`) VALUES
(1, 90),
(1, 345),
(1, 7954),
(1, 8796),
(1, 87965),
(1, 795097),
(1, 879609),
(1, 879654),
(4, 17),
(4, 343),
(4, 433),
(4, 454),
(4, 769),
(4, 3234),
(4, 5678),
(4, 9879),
(4, 12903),
(4, 43334),
(4, 45345),
(4, 76097),
(4, 453409),
(4, 4534900),
(4, 43234234),
(9, 11),
(127, 4325345),
(127, 43253409),
(778, 3490),
(787, 87689),
(854, 768),
(875, 76),
(875, 768),
(875, 6879),
(875, 6890),
(875, 8790),
(875, 78955),
(875, 698769),
(875, 760986),
(875, 768098),
(875, 7680909),
(3459, 234),
(3459, 7689),
(3459, 12312),
(3459, 23423),
(3459, 23427),
(9643, 23),
(9643, 5679),
(98787, 7954),
(435345, 234),
(435345, 2390),
(34545645, 23423),
(34545645, 43589),
(34545645, 92745),
(34545645, 2341234),
(34545645, 2342000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `teman`
--

CREATE TABLE IF NOT EXISTS `teman` (
  `id_subyek` int(11) NOT NULL,
  `id_obyek` int(11) NOT NULL,
  `status` varchar(10) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `teman`
--

INSERT INTO `teman` (`id_subyek`, `id_obyek`, `status`) VALUES
(22222, 88888, ''),
(111111, 88888, ''),
(22222, 111111, 'terima'),
(6054840, 6024206, ''),
(6054840, 6002, 'terima'),
(6001, 6002, 'terima'),
(6024206, 6002, 'terima'),
(6054840, 111111, ''),
(6001, 6054840, 'terima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `gender` enum('Pria','Wanita') COLLATE latin1_general_ci DEFAULT NULL,
  `t4Lahir` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `tglLahir` date DEFAULT NULL,
  `email` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `hp` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `hobi` text COLLATE latin1_general_ci,
  `deskripsi` text COLLATE latin1_general_ci,
  `password` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `sebagai` enum('Mhs','Dosen','Admin','Karyawan','DosenMKU') COLLATE latin1_general_ci NOT NULL,
  `id_shoutout` int(11) DEFAULT NULL,
  `foto` mediumtext COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `gender`, `t4Lahir`, `tglLahir`, `email`, `hp`, `alamat`, `hobi`, `deskripsi`, `password`, `sebagai`, `id_shoutout`, `foto`) VALUES
(6024206, 'Ade Natanael Simanjuntak', 'Pria', '0000-00-00', '0000-00-00', 'ade@ade.com', '031-60304415', 'Jl. Tenggilis 100', 'Hobi 2', 'Tentangku 2', 'ade', 'Mhs', NULL, ''),
(6054840, 'a', 'Wanita', '0000-00-00', '0000-00-00', 'zz@zz.com', '031-6054840', 'Jl. Sulawesi 20', 'Hobi 3', 'Tentangku 3', 'yantie', 'Mhs', 115, 'images/foto/76.jpg'),
(687, 'qwert', 'Pria', '0000-00-00', '0000-00-00', '', '98798', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', '7', 'Mhs', NULL, ''),
(9, 'ut', 'Pria', '0000-00-00', '0000-00-00', '', 'uyi', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'uyi', 'Mhs', NULL, ''),
(25, 'ut', 'Pria', '0000-00-00', '0000-00-00', '', 'uyi', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'jhk', 'Mhs', NULL, ''),
(26, 'ut', 'Pria', '0000-00-00', '0000-00-00', '', 'uyi', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'jhk', 'Mhs', NULL, ''),
(27, 'ut', 'Pria', '0000-00-00', '0000-00-00', '', 'uyi', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'jhk', 'Mhs', NULL, ''),
(28, 'ut', 'Wanita', '0000-00-00', '0000-00-00', '', 'uyi', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'jhk', 'Mhs', NULL, ''),
(29, 'ut', 'Wanita', '0000-00-00', '0000-00-00', '', 'uyi', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'jhk', 'Mhs', NULL, ''),
(59, 'tjhghg', 'Pria', '0000-00-00', '0000-00-00', '', 'hk', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'kj', 'Mhs', NULL, ''),
(9999, 'Brigita Hermien ', 'Wanita', '0000-00-00', '0000-00-00', '', 'uyi', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'uyi', 'Mhs', NULL, ''),
(796471, 'iuy', 'Pria', '0000-00-00', '0000-00-00', '', 'uyi', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'uyi', 'Mhs', NULL, ''),
(100, 'uyi', 'Pria', '0000-00-00', '0000-00-00', '', 'yi', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'yiu', 'Mhs', NULL, ''),
(101, 'uyi', 'Pria', '0000-00-00', '0000-00-00', '', 'yi', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'yiu', 'Mhs', NULL, ''),
(102, 'uyi', 'Pria', '0000-00-00', '0000-00-00', '', 'yi', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'yiu', 'Mhs', NULL, ''),
(103, 'uyi', 'Pria', '0000-00-00', '0000-00-00', '', 'yi', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'yiu', 'Mhs', NULL, ''),
(88888, 'Brigita Hermien Asriyantie', 'Wanita', 'Jakarta', '1987-05-05', '', 'dfr', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'abc', 'Mhs', 41, 'images/foto/yan.jpg'),
(2584789, 'New York', 'Pria', '0000-00-00', '0000-00-00', '', '', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'ncfghcfgh', 'Dosen', NULL, ''),
(1234, 'tjhghg', 'Pria', '0000-00-00', '0000-00-00', '', 'hk', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'kj', 'Mhs', NULL, ''),
(8, 'g', 'Pria', '0000-00-00', '0000-00-00', '', 'g', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'g', 'Mhs', NULL, ''),
(3, 'e', 'Wanita', '0000-00-00', '0000-00-00', '', 'd', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'd', 'Mhs', NULL, ''),
(98754, 'Colin Farrell', 'Pria', '0000-00-00', '0000-00-00', '', 'dfgsdfg', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'sdfdsfgs', 'Mhs', NULL, ''),
(454678, 'dgsdfgsdfg', 'Wanita', '0000-00-00', '0000-00-00', '', 'dfgsdfg', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'sdfdsfgs', 'Mhs', NULL, ''),
(4546789, 'dgsdfgsdfg', 'Wanita', '0000-00-00', '0000-00-00', '', 'dfgsdfg', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'sdfdsfgs', 'Mhs', NULL, ''),
(4546434, 'dgsdfgsdfg', 'Pria', '0000-00-00', '0000-00-00', '', '5465645', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'rty6rt', 'Mhs', NULL, ''),
(45435, 'dgfdf', 'Pria', '0000-00-00', '0000-00-00', '', 'gdfg', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'dfgdf', 'Mhs', NULL, ''),
(454375, 'dgfdf', 'Pria', '0000-00-00', '0000-00-00', '', 'gdfg', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'dfgdf', 'Dosen', NULL, ''),
(5464564, 'gdgdfgdsfg', 'Wanita', '0000-00-00', '0000-00-00', '', 'dfgs', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'dfsgsdfgdfg', 'Dosen', NULL, ''),
(87654, 'Brigita Hermien Asriyantie', 'Wanita', '0000-00-00', '0000-00-00', '', 'dfgs', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'dfsgsdfgdfg', 'Dosen', NULL, ''),
(5464579, 'gdrgdrtgdr', 'Wanita', '0000-00-00', '0000-00-00', '', 'zdfgzdf', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'zdfg', 'Dosen', NULL, ''),
(456457, 'srdrt', 'Wanita', '0000-00-00', '0000-00-00', '', 'rets', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'drtgsdrt', 'Dosen', NULL, ''),
(4564554, 'srdrt', 'Wanita', '0000-00-00', '0000-00-00', '', 'rets', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'drtgsdrt', 'Dosen', NULL, ''),
(456356, 'tsdrtsr', 'Pria', '0000-00-00', '0000-00-00', '', 'zfgzd', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'dfgzdfg', 'Dosen', NULL, ''),
(45645, 'dwfasefawfdfdfwwwwww', 'Wanita', '0000-00-00', '0000-00-00', '', 'sryse', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'stysety', 'Dosen', NULL, ''),
(777777, 'Lavenia Cuthbert', 'Wanita', '0000-00-00', '0000-00-00', '', 'fgzdfg', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'zd', 'Dosen', NULL, ''),
(9879, 'drt', 'Wanita', '0000-00-00', '0000-00-00', '', 'fgzdfg', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'zd', 'Dosen', NULL, ''),
(647367, 'tyhdtry', 'Wanita', '0000-00-00', '0000-00-00', '', 'tydrt', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'rdtydr', 'Dosen', NULL, ''),
(5675690, 'rtyrtysr', 'Wanita', '0000-00-00', '0000-00-00', '', 'yserys', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'eryser', 'Dosen', NULL, ''),
(4556478, 'dfgdf', 'Wanita', '0000-00-00', '0000-00-00', '', 'serser', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'rfsetr', 'Dosen', NULL, ''),
(6001, NULL, NULL, NULL, NULL, '', NULL, 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'qwe', '', NULL, ''),
(12398745, 'James Cameron', 'Pria', '0000-00-00', '0000-00-00', '', 'tser', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'srtser', 'Dosen', NULL, ''),
(456456, 'ertdr', 'Wanita', '0000-00-00', '0000-00-00', '', 'tzrtz', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'zrdstzrds', 'Dosen', NULL, ''),
(7657, 'dgsdfg', 'Pria', '0000-00-00', '0000-00-00', '', 'fgsdfg', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'dfgsd', 'Dosen', NULL, ''),
(4645364, 'rdtydrt', 'Wanita', '0000-00-00', '0000-00-00', '', 'drty', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'drty', 'Dosen', NULL, ''),
(342579, 'rdtydrt', 'Wanita', '0000-00-00', '0000-00-00', '', 'drty', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'drty', 'Dosen', NULL, ''),
(986853, 'rdtydrt', 'Wanita', '0000-00-00', '0000-00-00', '', 'drty', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'drty', 'Dosen', NULL, ''),
(7568, 'rdtydrt', 'Wanita', '0000-00-00', '0000-00-00', '', 'drty', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'drty', 'Dosen', NULL, ''),
(756867, 'rdtydrt', 'Wanita', '0000-00-00', '0000-00-00', '', 'drty', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'drty', 'Dosen', NULL, ''),
(756864, 'rdtydrt', 'Wanita', '0000-00-00', '0000-00-00', '', 'drty', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'drty', 'Dosen', NULL, ''),
(435345, 'terts', 'Wanita', '0000-00-00', '0000-00-00', '', 'rtsrt', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'trsts', 'Dosen', NULL, ''),
(976453, 'terts', 'Wanita', '0000-00-00', '0000-00-00', '', 'rtsrt', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'trsts', 'Dosen', NULL, ''),
(9764578, 'terts', 'Wanita', '0000-00-00', '0000-00-00', '', 'rtsrt', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'trsts', 'Dosen', NULL, ''),
(9764570, 'terts', 'Wanita', '0000-00-00', '0000-00-00', '', 'rtsrt', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'trsts', 'Dosen', NULL, ''),
(9764576, 'terts', 'Wanita', '0000-00-00', '0000-00-00', '', 'rtsrt', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'trsts', 'Dosen', NULL, ''),
(9764579, 'terts', 'Wanita', '0000-00-00', '0000-00-00', '', 'rtsrt', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'trsts', 'Dosen', NULL, ''),
(4563457, 'dsgasdgs', 'Pria', '0000-00-00', '0000-00-00', '', 'rtsrt', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'trsts', 'Dosen', NULL, ''),
(2543524, 'rertsr', 'Wanita', '0000-00-00', '0000-00-00', '', 'sert', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'srt', 'Dosen', NULL, ''),
(54645, 'fcghfghc', 'Wanita', '0000-00-00', '0000-00-00', '', '67567', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'ghcjghjcg', 'Dosen', NULL, ''),
(4352345, 'dfgdfgdxfg', 'Wanita', '0000-00-00', '0000-00-00', '', 'zdzfg', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'dfzgdf', 'Dosen', NULL, ''),
(4352362, 'dfgdfgdxfg', 'Wanita', '0000-00-00', '0000-00-00', '', 'zdzfg', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'dfzgdf', 'Dosen', NULL, ''),
(4564875, 'oopopopop', 'Wanita', '0000-00-00', '0000-00-00', '', 'yhdfhd', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'fd', 'Dosen', NULL, ''),
(111111, 'Gabriela Montez', 'Wanita', 'Filipina', '1987-05-06', '', 'sdfgs', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'abc', 'Dosen', 40, ''),
(14, 'Troy Bolton', 'Pria', '0000-00-00', '0000-00-00', '', '452345', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'aewrer', 'Dosen', NULL, ''),
(22222, 'Troy Bolton', 'Pria', 'New York', '1987-05-06', '', 'rty', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'abc', 'Dosen', 37, ''),
(576456, 'qqqqqqqqqqqqqqqq', 'Wanita', '0000-00-00', '0000-00-00', '', 'erte', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'tet5', 'Dosen', NULL, ''),
(543543, 'Colin', 'Pria', '0000-00-00', '0000-00-00', '', 'ert', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'rt', 'Dosen', NULL, ''),
(543547, 'Colin', 'Pria', '0000-00-00', '0000-00-00', '', 'ert', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'rt', 'Dosen', NULL, ''),
(43524, 'poiuytr', 'Wanita', '0000-00-00', '0000-00-00', '', 'rtw', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'rte', 'Dosen', NULL, ''),
(1233256, 'Zachary Levi', 'Pria', '0000-00-00', '0000-00-00', '', 'ljl', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'klj', 'Dosen', NULL, ''),
(5463456, 'ratartaret', 'Wanita', '0000-00-00', '0000-00-00', '', 'tata', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'artr', 'Dosen', NULL, ''),
(987654, 'bbbbbbbbbbbbbbbb', 'Pria', '0000-00-00', '0000-00-00', '', 'eraer', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'ertawer', 'Dosen', NULL, ''),
(324, '3', 'Pria', '0000-00-00', '0000-00-00', '', 'hgjhgj', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'gj', 'Dosen', NULL, ''),
(34530, 'yyyyyyyyyyyyyy', 'Wanita', '0000-00-00', '0000-00-00', '', '452345', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'aewrer', 'Dosen', NULL, ''),
(234235, 'Debriana Levitz', 'Wanita', '0000-00-00', '0000-00-00', '', '6879', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'khg', 'Dosen', NULL, ''),
(34234, 'Dominika Devi Heidy Asri Deviana', 'Wanita', '0000-00-00', '0000-00-00', '', 'dd', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'asdas', 'Dosen', 0, ''),
(42345, 'Zac Efron', 'Pria', '0000-00-00', '0000-00-00', '', 'jhkj', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'jkhk', 'Dosen', NULL, ''),
(32423, 'weawEawd', 'Wanita', '0000-00-00', '0000-00-00', '', 'SDsad', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'dA', 'Dosen', NULL, ''),
(999, 'Olivia Popeye', 'Wanita', '0000-00-00', '0000-00-00', '', 'df', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'sdfs', 'Mhs', 0, ''),
(24, 'werwer', 'Wanita', '0000-00-00', '0000-00-00', '', 'er', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'werw', 'Dosen', NULL, ''),
(324324, 'werewr', 'Wanita', '0000-00-00', '0000-00-00', '', 'wer', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'wer', 'Dosen', NULL, ''),
(3243247, 'werewr', 'Wanita', '0000-00-00', '0000-00-00', '', 'wer', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'wer', 'Dosen', NULL, ''),
(342, 'fawer', 'Wanita', '0000-00-00', '0000-00-00', '', 'werew', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'waer', 'Dosen', NULL, ''),
(3454578, 'ewrawer', 'Wanita', '0000-00-00', '0000-00-00', '', 'erawer', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'wearw', 'Mhs', NULL, ''),
(768876, 'tjhgjhgjh', 'Pria', '0000-00-00', '0000-00-00', '', 'jhgjh', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'jhkjh', 'Mhs', NULL, ''),
(5345, 'serser', 'Wanita', '0000-00-00', '0000-00-00', '', 'ser', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'serse', 'Mhs', NULL, ''),
(53498, 'serser', 'Wanita', '0000-00-00', '0000-00-00', '', 'ser', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'serse', 'Mhs', NULL, ''),
(87987, 'jkhkjhk', 'Wanita', '0000-00-00', '0000-00-00', '', 'hkj', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'jhkj', 'Mhs', NULL, ''),
(45345, 'erwer', 'Pria', '0000-00-00', '0000-00-00', '', 'hkjhk', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'jhkj', 'Mhs', NULL, ''),
(7698, 'jkhkj', 'Wanita', '0000-00-00', '0000-00-00', '', 'hkjh', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'jhkj', 'Mhs', NULL, ''),
(6876, 'jhgjhg', 'Pria', '0000-00-00', '0000-00-00', '', 'hkjhk@a.com', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'jkhkj', 'Dosen', NULL, ''),
(45325, 'sdsaf', 'Wanita', '0000-00-00', '0000-00-00', '', 'asd', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'asd', 'Mhs', NULL, ''),
(34543, 'ewrwe', 'Wanita', '0000-00-00', '0000-00-00', '', 'wer', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'erwwer', 'Mhs', NULL, ''),
(454, 'srd', 'Wanita', '0000-00-00', '0000-00-00', '', 'fsdf', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'sdfsd', 'Mhs', NULL, ''),
(779879, 'UITBUYTK', 'Wanita', '0000-00-00', '0000-00-00', '', 'HKJHK', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'JHKJ', 'Dosen', NULL, ''),
(68768, 'jhgjhg', 'Pria', '0000-00-00', '0000-00-00', '', 'hgj', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'jhgj', 'Dosen', NULL, ''),
(2323, 'wdas', 'Wanita', '0000-00-00', '0000-00-00', '', 'asdfasdf', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'asdf', 'Dosen', NULL, ''),
(234, 'aedrfas', 'Wanita', '0000-00-00', '0000-00-00', '', 'asdfasdf', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'asdf', 'Dosen', NULL, ''),
(2347, 'aedrfas', 'Wanita', '0000-00-00', '0000-00-00', '', 'asdfasdf', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'asdf', 'Dosen', NULL, ''),
(2349, 'aedrfas', 'Wanita', '0000-00-00', '0000-00-00', '', 'asdfasdf', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'asdf', 'Dosen', NULL, ''),
(7687, 'kjhkij', 'Pria', '0000-00-00', '0000-00-00', '', 'kjhk', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'kj', 'Dosen', NULL, ''),
(68767, 'erwer', 'Pria', '0000-00-00', '0000-00-00', '', 'kjh', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'kjh', 'Dosen', NULL, ''),
(79879, 'jhkjhk', 'Pria', '0000-00-00', '0000-00-00', '', 'jhkjhk', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'kjhk', 'Dosen', NULL, ''),
(96785, 'Brigita Hermien Asriyantie', 'Wanita', '0000-00-00', '0000-00-00', '', 'fzsd', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', 'aererwer', 'DosenMKU', NULL, ''),
(8796, 'Zac Efron', 'Pria', '0000-00-00', '0000-00-00', '', 'jkhkj', 'Jl. Tenggilis 1', 'Hobi 2', 'Tentangku 2', '79879', 'DosenMKU', NULL, ''),
(6002, NULL, NULL, NULL, NULL, 'a@b.com', NULL, 'Jl. Tenggilis 1', 'Hobi 99', 'Tentangku 188', 'qwe', '', 104, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `userpnyfoto`
--

CREATE TABLE IF NOT EXISTS `userpnyfoto` (
  `id_foto` int(8) NOT NULL,
  `id_user` int(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `userpnyfoto`
--

INSERT INTO `userpnyfoto` (`id_foto`, `id_user`) VALUES
(76, 6054840);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

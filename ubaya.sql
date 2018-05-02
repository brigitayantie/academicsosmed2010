-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 01 Nov 2014 pada 18.48
-- Versi Server: 5.5.25a
-- Versi PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `ubaya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosenajarmkbuka`
--

CREATE TABLE IF NOT EXISTS `dosenajarmkbuka` (
  `NPK` char(10) COLLATE latin1_general_ci NOT NULL,
  `KodeMkBuka` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `KP` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `dosenajarmkbuka`
--

INSERT INTO `dosenajarmkbuka` (`NPK`, `KodeMkBuka`, `KP`) VALUES
('6001', '64A41320101', 'A'),
('6002', '64A95220101', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `NPK` char(10) COLLATE latin1_general_ci NOT NULL,
  `KodeDosen` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `Nama` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `Alamat` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `KodeKota` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `Tipe` enum('ID0') COLLATE latin1_general_ci NOT NULL,
  `TglLahir` date NOT NULL,
  PRIMARY KEY (`NPK`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`NPK`, `KodeDosen`, `Nama`, `Alamat`, `KodeKota`, `Tipe`, `TglLahir`) VALUES
('6001', '11111', 'Stephanus Eko', 'Jl. Sulawesi 22', '1', 'ID0', '0000-00-00'),
('6002', '11112', 'Lisana', 'Jl. Sulawesi 22', '1', 'ID0', '1982-07-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `KodeKota` char(4) COLLATE latin1_general_ci NOT NULL,
  `Nama` varchar(30) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`KodeKota`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`KodeKota`, `Nama`) VALUES
('1', 'Surabaya'),
('2', 'Jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `NRP` varchar(12) COLLATE latin1_general_ci NOT NULL,
  `Nama` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `TglLahir` date NOT NULL,
  `Agama` enum('Buddha','Hindu','Islam','Kristen Katholik','Kristen Protestan','Konghucu') COLLATE latin1_general_ci NOT NULL,
  `Gender` enum('L','P') COLLATE latin1_general_ci NOT NULL,
  `IPKTanpaE` float(4,3) NOT NULL,
  `IPKDenganE` float(4,3) NOT NULL,
  `IdJurusan` smallint(6) NOT NULL,
  `Alamat` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `PIN` int(11) NOT NULL,
  PRIMARY KEY (`NRP`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`NRP`, `Nama`, `TglLahir`, `Agama`, `Gender`, `IPKTanpaE`, `IPKDenganE`, `IdJurusan`, `Alamat`, `PIN`) VALUES
('6054840', 'Brigita Hermien Asriyantie', '1987-07-26', 'Kristen Katholik', 'P', 2.800, 2.800, 1, 'Jl. Sulawesi 22', 0),
('6024206', 'Ade Natanael Simanjuntak', '1984-12-12', 'Kristen Katholik', 'P', 2.500, 2.500, 1, 'Jl. Sulawesi 22', 0),
('6034273', 'Nansi Winata', '1985-10-28', 'Kristen Katholik', 'P', 2.500, 2.500, 1, 'Jl. Sulawesi 22', 0),
('88888', 'Yantie', '1987-07-24', 'Kristen Katholik', 'P', 2.500, 2.500, 1, 'Jl. Sulawesi 22', 0),
('111111', 'Vanessa Hudgens', '2010-06-07', 'Kristen Protestan', 'P', 2.500, 2.500, 1, 'Jl. Sulawesi 22', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE IF NOT EXISTS `matakuliah` (
  `KodeMk` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `Nama` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `sks` smallint(6) NOT NULL,
  PRIMARY KEY (`KodeMk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`KodeMk`, `Nama`, `sks`) VALUES
('64A413', 'Interaksi Manusia Komputer', 3),
('64A952', 'Topik Khusus Internet', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhsambilmk`
--

CREATE TABLE IF NOT EXISTS `mhsambilmk` (
  `NRP` varchar(12) COLLATE latin1_general_ci NOT NULL,
  `KodeMkBuka` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `KP` varchar(2) COLLATE latin1_general_ci NOT NULL,
  `NTS` smallint(6) NOT NULL,
  `NAS` smallint(6) NOT NULL,
  `NA` float(6,3) NOT NULL,
  `KodeNisbi` varchar(2) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `mhsambilmk`
--

INSERT INTO `mhsambilmk` (`NRP`, `KodeMkBuka`, `KP`, `NTS`, `NAS`, `NA`, `KodeNisbi`) VALUES
('6054840', '64A41320101', 'A', 90, 90, 90.000, 'A'),
('6024206', '64A95220101', 'A', 91, 91, 91.000, 'A'),
('6024206', '64A41320101', 'A', 90, 90, 90.000, 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mkbuka`
--

CREATE TABLE IF NOT EXISTS `mkbuka` (
  `KodeMkBuka` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `KodeMK` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `UTSTgl` date NOT NULL,
  `UASTgl` date NOT NULL,
  `JmlPertemuan` smallint(6) NOT NULL,
  `ThnAkademik` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `Semester` enum('gasal','genap','trimester 3') COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`KodeMkBuka`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `mkbuka`
--

INSERT INTO `mkbuka` (`KodeMkBuka`, `KodeMK`, `UTSTgl`, `UASTgl`, `JmlPertemuan`, `ThnAkademik`, `Semester`) VALUES
('64A41320101', '64A413', '2010-06-30', '2010-06-25', 0, '2010', 'gasal'),
('64A95220101', '64A952', '2010-06-24', '2010-07-24', 0, '2010', 'gasal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mkbukajadwal`
--

CREATE TABLE IF NOT EXISTS `mkbukajadwal` (
  `KodeMkBuka` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `KP` varchar(2) COLLATE latin1_general_ci NOT NULL,
  `Hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') COLLATE latin1_general_ci NOT NULL,
  `JamAwal` time NOT NULL,
  `JamAkhir` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `mkbukajadwal`
--

INSERT INTO `mkbukajadwal` (`KodeMkBuka`, `KP`, `Hari`, `JamAwal`, `JamAkhir`) VALUES
('64A41320101', 'A', 'Senin', '07:25:00', '09:00:00'),
('64A41320101', 'A', 'Selasa', '07:25:00', '09:00:00'),
('64A95220101', 'A', 'Rabu', '07:25:00', '09:00:00'),
('64A95220101', 'A', 'Jumat', '07:25:00', '09:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mkbukakp`
--

CREATE TABLE IF NOT EXISTS `mkbukakp` (
  `KodeMkBuka` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `KP` varchar(2) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `mkbukakp`
--

INSERT INTO `mkbukakp` (`KodeMkBuka`, `KP`) VALUES
('64A413', 'A'),
('64A413', 'B'),
('64A952', 'A'),
('64A952', 'B');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

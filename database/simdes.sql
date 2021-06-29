-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 03. Juni 2012 jam 10:57
-- Versi Server: 5.1.61
-- Versi PHP: 5.3.6-13ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simdes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `det_keluarga`
--

CREATE TABLE IF NOT EXISTS `det_keluarga` (
  `id_keluarga` VARCHAR(20) NOT NULL,
  `no_ktp` VARCHAR(20) NOT NULL,
  KEY `id_warga` (`no_ktp`,`id_keluarga`)
) ENGINE=MYISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluarga`
--

CREATE TABLE IF NOT EXISTS `keluarga` (
  `id_keluarga` VARCHAR(20) NOT NULL,
  `kepala_keluarga` VARCHAR(50) NOT NULL,
  `alamat` TEXT NOT NULL,
  `dusun` VARCHAR(30) NOT NULL,
  `rt` VARCHAR(2) DEFAULT NULL,
  `rw` VARCHAR(2) DEFAULT NULL,
  `ekonomi` VARCHAR(20) DEFAULT NULL,
  PRIMARY KEY (`id_keluarga`)
) ENGINE=MYISAM DEFAULT CHARSET=latin1;

--
-- Trigger `keluarga`
--
DROP TRIGGER IF EXISTS `hapus_detail_klg`;
DELIMITER //
CREATE TRIGGER `hapus_detail_klg` AFTER DELETE ON `keluarga`
 FOR EACH ROW BEGIN

DELETE  FROM det_keluarga WHERE det_keluarga.id_keluarga = old.id_keluarga;

END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi_warga`
--

CREATE TABLE IF NOT EXISTS `mutasi_warga` (
  `id_mutasi` MEDIUMINT(9) NOT NULL AUTO_INCREMENT,
  `id_warga` VARCHAR(20) NOT NULL,
  `jenis_mutasi` VARCHAR(15) NOT NULL,
  `tanggal` DATE DEFAULT NULL,
  `keterangan` TEXT,
  PRIMARY KEY (`id_mutasi`)
) ENGINE=MYISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE IF NOT EXISTS `surat` (
  `id_surat` INT(8) NOT NULL AUTO_INCREMENT,
  `jenis_surat` VARCHAR(4) NOT NULL,
  `no_surat` VARCHAR(50) NOT NULL,
  `nama_surat` VARCHAR(50) NOT NULL,
  `tanggal` DATE DEFAULT NULL,
  `isi_surat` TEXT,
  `tanda_tangan` VARCHAR(50) NOT NULL,
  `id_warga` VARCHAR(20) NOT NULL,
  `nama_warga` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id_surat`)
) ENGINE=MYISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_detail_warga`
--
CREATE TABLE IF NOT EXISTS `v_detail_warga` (
`id_keluarga` VARCHAR(20)
,`no_ktp` VARCHAR(20)
,`nama` VARCHAR(50)
,`agama` VARCHAR(20)
,`t_lahir` VARCHAR(20)
,`tgl_lahir` VARCHAR(10)
,`j_kel` VARCHAR(11)
,`gol_darah` VARCHAR(2)
,`w_negara` VARCHAR(20)
,`pendidikan` VARCHAR(10)
,`pekerjaan` VARCHAR(30)
,`s_nikah` VARCHAR(20)
,`alamat` TEXT
,`rt` VARCHAR(2)
,`rw` VARCHAR(2)
,`dusun` VARCHAR(30)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_mutasi_warga`
--
CREATE TABLE IF NOT EXISTS `v_mutasi_warga` (
`id_warga` VARCHAR(20)
,`j_kel` ENUM('L','W')
,`jenis_mutasi` VARCHAR(15)
,`periode` VARCHAR(7)
,`keterangan` TEXT
);
-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE IF NOT EXISTS `warga` (
  `no_ktp` VARCHAR(20) NOT NULL,
  `nama` VARCHAR(50) NOT NULL,
  `agama` VARCHAR(20) NOT NULL,
  `t_lahir` VARCHAR(20) NOT NULL,
  `tgl_lahir` DATE DEFAULT NULL,
  `j_kel` ENUM('L','W') NOT NULL,
  `gol_darah` VARCHAR(2) NOT NULL,
  `w_negara` VARCHAR(20) NOT NULL,
  `pendidikan` VARCHAR(10) DEFAULT NULL,
  `pekerjaan` VARCHAR(30) NOT NULL,
  `s_nikah` VARCHAR(20) DEFAULT NULL,
  `status` ENUM('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`no_ktp`)
) ENGINE=MYISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `v_detail_warga`
--
DROP TABLE IF EXISTS `v_detail_warga`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_detail_warga` AS SELECT `a`.`id_keluarga` AS `id_keluarga`,`c`.`no_ktp` AS `no_ktp`,`c`.`nama` AS `nama`,`c`.`agama` AS `agama`,`c`.`t_lahir` AS `t_lahir`,DATE_FORMAT(`c`.`tgl_lahir`,'%d-%m-%Y') AS `tgl_lahir`,IF((`c`.`j_kel` = 'L'),'Laki - laki','Wanita') AS `j_kel`,`c`.`gol_darah` AS `gol_darah`,`c`.`w_negara` AS `w_negara`,`c`.`pendidikan` AS `pendidikan`,`c`.`pekerjaan` AS `pekerjaan`,`c`.`s_nikah` AS `s_nikah`,`a`.`alamat` AS `alamat`,`a`.`rt` AS `rt`,`a`.`rw` AS `rw`,`a`.`dusun` AS `dusun` FROM ((`keluarga` `a` JOIN `det_keluarga` `b`) JOIN `warga` `c`) WHERE ((`a`.`id_keluarga` = `b`.`id_keluarga`) AND (`b`.`no_ktp` = `c`.`no_ktp`) AND (`c`.`status` = '1'));

-- --------------------------------------------------------

--
-- Structure for view `v_mutasi_warga`
--
DROP TABLE IF EXISTS `v_mutasi_warga`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_mutasi_warga` AS SELECT `mutasi_warga`.`id_warga` AS `id_warga`,`warga`.`j_kel` AS `j_kel`,`mutasi_warga`.`jenis_mutasi` AS `jenis_mutasi`,DATE_FORMAT(`mutasi_warga`.`tanggal`,'%m-%Y') AS `periode`,`mutasi_warga`.`keterangan` AS `keterangan` FROM (`mutasi_warga` JOIN `warga` ON((`warga`.`no_ktp` = `mutasi_warga`.`id_warga`)));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

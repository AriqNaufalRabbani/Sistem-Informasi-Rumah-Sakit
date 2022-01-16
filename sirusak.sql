-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2020 at 04:02 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sirusak`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `id_user` int(5) NOT NULL,
  `nama_dokter` varchar(30) NOT NULL,
  `departemen` varchar(30) NOT NULL,
  `jadwal_praktik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`id_user`, `nama_dokter`, `departemen`, `jadwal_praktik`) VALUES
(1001, 'Irsyad Muhammad, dr', 'Umum', 'Senin - Kamis | 08.00 - 15.00'),
(1002, 'Pranata Audy, dr.SpB', 'Gigi', 'Senin - Kamis | 08.00 - 15.00'),
(1003, 'Jaidi, dr.SpA', 'Anak', 'Senin - Kamis | 08.00 - 15.00'),
(1004, 'Anugrah Pratama, dr.SpPD', 'Kandungan', 'Senin - Kamis | 08.00 - 15.00'),
(1005, 'Dendi Abdul Rohim, H.dr.SpB', 'THT', 'Senin - Kamis | 08.00 - 15.00'),
(1006, 'Kurniawan Aditya, dr.SpOG', 'Kandungan', 'Senin - Kamis | 08.00 - 15.00'),
(1007, 'Arifin Muhammad, dr.SpS.Mkes', 'Syaraf', 'Senin - Kamis | 08.00 - 15.00'),
(1008, 'Gyats Haitsam, Hj.dr.SpKK', 'Kulit dan Kelamin', 'Senin - Kamis | 08.00 - 15.00'),
(1009, 'Dono Aditia, .dr.SpTHT', 'THT', 'Senin - Kamis | 08.00 - 15.00'),
(1010, 'Zeffry Irwanto, dr.SpM', 'Kulit dan Kelamin', 'Senin - Kamis | 08.00 - 15.00'),
(1011, 'Gustian M, dr', 'Syaraf', 'Senin - Kamis | 08.00 - 15.00'),
(1012, 'Septianti Amalia, S.PSi', 'Umum', 'Senin - Kamis | 08.00 - 15.00'),
(1013, 'Setyaningsih D, dr.SpA', 'Anak', 'Senin - Kamis | 08.00 - 15.00'),
(1014, 'Bayu, H.dr.SpB', 'Umum', 'Senin - Kamis | 08.00 - 15.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `id_pasien` int(6) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `no_telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`id_pasien`, `nama_pasien`, `alamat`, `jenis_kelamin`, `no_telepon`) VALUES
(16, 'Raffi Ahmad', 'Jonggol', 'L', '08126252153'),
(17, 'Kevin Julio', 'Cimahi', 'P', '08172352412'),
(18, 'Chelsea Islan', 'Jakarta', 'P', '082416242'),
(19, 'Raisa Ardiana', 'Sukabumi', 'P', '0212312415'),
(20, 'Tina Toon', 'Banyuwangi', 'P', '08098999'),
(21, 'Joshua', 'Surabaya', 'L', '08123122353'),
(22, 'Risa Tachibana', 'Jampang', 'P', '08124124412'),
(23, 'Sarah Ardelia', 'Bogor', 'P', '0812524124'),
(24, 'Jessica Mila', 'Madiun', 'P', '08235141212'),
(25, 'Ricky Harun', 'Lampung', 'L', '08235235235'),
(26, 'Ariq Naufal Rabbani', 'Jakarta', 'L', '085779095133'),
(27, 'Nakano Miku', 'Jakarta', 'P', '09999999999'),
(66, 'Ariq Naufal Rabbani', 'Jakarta', 'L', '09999999999'),
(67, 'Alvin Marshall Raniel Saragih', 'Jakarta', 'L', '09999999999'),
(69, 'Dipo', 'Jakarta', 'L', '08577998855'),
(81, 'Johan Adriansyah', 'Bandung', 'L', '02199887766'),
(82, 'Hasan Hanif', 'Lampung', 'L', '085123456789');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pri`
--

CREATE TABLE `tbl_pri` (
  `no_ri` int(8) NOT NULL,
  `id_pasien` int(6) NOT NULL,
  `id_ruang` int(3) NOT NULL,
  `tanggal_checkin` date NOT NULL,
  `tanggal_checkout` date NOT NULL,
  `hari_menginap` int(3) NOT NULL,
  `diagnosa` text NOT NULL,
  `biaya` int(12) NOT NULL,
  `bayar` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pri`
--

INSERT INTO `tbl_pri` (`no_ri`, `id_pasien`, `id_ruang`, `tanggal_checkin`, `tanggal_checkout`, `hari_menginap`, `diagnosa`, `biaya`, `bayar`) VALUES
(38, 16, 101, '2020-05-12', '2020-05-20', 8, 'Sakit', 3000000, 5000000),
(41, 23, 121, '2020-05-08', '2020-05-21', 13, 'Sakit', 1560000, 1000000),
(46, 67, 103, '2020-05-28', '2020-05-30', 2, 'Covid19', 306000, 400000),
(47, 69, 106, '2020-05-28', '2020-05-29', 1, 'Malaria', 200000, 300000),
(48, 82, 0, '2020-05-27', '2020-05-31', 4, 'Patah Tulang', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prj`
--

CREATE TABLE `tbl_prj` (
  `no_rj` int(8) NOT NULL,
  `id_dokter` varchar(5) NOT NULL,
  `id_pasien` int(6) NOT NULL,
  `departemen` varchar(20) NOT NULL,
  `tanggal` datetime NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `diagnosa` varchar(255) DEFAULT NULL,
  `biaya` int(10) NOT NULL,
  `bayar` int(12) DEFAULT NULL,
  `tindakan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prj`
--

INSERT INTO `tbl_prj` (`no_rj`, `id_dokter`, `id_pasien`, `departemen`, `tanggal`, `keluhan`, `diagnosa`, `biaya`, `bayar`, `tindakan`) VALUES
(14, '1004', 19, 'Kandungan', '2014-12-05 03:54:46', 'Mual-mual', ' aasasfsdfsdfsdf\r\nsdf\r\nsdf\r\nasdf\r\nasdf\r\n  ', 200000, 200000, 'Rawat Inap'),
(15, '', 21, 'Syaraf', '2020-05-18 15:30:29', 'sasdfasdg', NULL, 180000, 3453453, NULL),
(17, '1001', 26, 'Umum', '2020-05-18 16:30:10', 'Pilek', 'Flu Ringan', 150000, 300000, 'Beri Resep'),
(18, '1001', 27, 'Umum', '2020-05-18 17:38:20', 'Pusing', 'Radang Otak ', 150000, 300000, 'Rawat Inap'),
(19, '1006', 82, 'Kandungan', '2020-05-27 21:33:40', 'Sakit Perut', NULL, 200000, 300000, NULL),
(20, '', 81, 'Gigi', '2020-05-27 21:36:12', 'Gigi Bengkak', NULL, 160000, 200000, NULL),
(21, '', 69, 'Syaraf', '2020-05-27 21:37:50', 'Mati Rasa', NULL, 180000, 200000, NULL),
(22, '', 18, 'Anak', '2020-05-27 22:07:20', 'Demam', NULL, 180000, 200000, NULL),
(24, '', 17, 'Gigi', '2020-05-27 22:16:23', 'Gigi Berlubang', NULL, 160000, 300000, NULL),
(25, '', 21, 'THT', '2020-06-30 22:23:34', 'Sesak Napas', NULL, 150000, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resep`
--

CREATE TABLE `tbl_resep` (
  `id_resep` int(9) NOT NULL,
  `id_dokter` int(8) NOT NULL,
  `id_pasien` varchar(2) NOT NULL,
  `nama_resep` varchar(50) NOT NULL,
  `rincian_resep` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_resep`
--

INSERT INTO `tbl_resep` (`id_resep`, `id_dokter`, `id_pasien`, `nama_resep`, `rincian_resep`, `tanggal`) VALUES
(1, 1004, '16', 'Amoxicillin', '20-40mg/kgBB/hari ', '2020-06-25 08:18:49'),
(5, 1004, '17', 'Ampicillin', '50-100mg/kgBB/hari (4x)IV: 100-200mg/kgBB/hari (4x)', '2020-06-25 08:19:45'),
(8, 1001, '81', 'Resep Sakit Gigi    ', 'Ponstan ', '2020-06-25 08:26:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tarif_ri`
--

CREATE TABLE `tbl_tarif_ri` (
  `id_tarif_ri` int(4) NOT NULL,
  `perawatan` varchar(20) NOT NULL,
  `pelayanan` varchar(30) NOT NULL,
  `tipe_kamar` varchar(20) NOT NULL,
  `tarif` int(8) NOT NULL,
  `kapasitas` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tarif_ri`
--

INSERT INTO `tbl_tarif_ri` (`id_tarif_ri`, `perawatan`, `pelayanan`, `tipe_kamar`, `tarif`, `kapasitas`) VALUES
(101, 'Rawat Inap per hari', 'Dokter Spesials dan Umum', 'Kelas VIP', 375000, 1),
(102, 'Rawat Inap per hari', 'Dokter Spesials dan Umum', 'Kelas I', 220000, 2),
(103, 'Rawat Inap per hari', 'Dokter Spesials dan Umum', 'Kelas II', 153000, 3),
(104, 'Rawat Inap per hari', 'Dokter Spesials dan Umum', 'Kelas III', 130000, 6),
(105, 'Rawat Inap per hari', 'Dokter Umum', 'Kelas VIP', 325000, 1),
(106, 'Rawat Inap per hari', 'Dokter Umum', 'Kelas I', 200000, 2),
(107, 'Rawat Inap per hari', 'Dokter Umum', 'Kelas II', 147000, 3),
(108, 'Rawat Inap per hari', 'Dokter Umum', 'Kelas III', 120000, 6),
(109, 'Ruang ICU', 'Dokter Spesials dan Umum', '', 200000, 2),
(110, 'Ruang ICU', 'Dokter Umum', '', 180000, 2),
(111, 'Ruang ICU', 'Instalasi  Anestesi', 'Kelas I', 217000, 2),
(112, 'Ruang ICU', 'Instalasi  Anestesi', 'Kelas II', 170000, 3),
(113, 'Ruang ICU', 'Instalasi  Anestesi', 'Kelas III', 136000, 6),
(114, 'Perinatologi', 'Dokter Spesialis dan Umum', 'Kelas VIP', 225000, 1),
(115, 'Perinatologi', 'Dokter Spesialis dan Umum', 'Kelas I', 192000, 2),
(116, 'Perinatologi', 'Dokter Spesialis dan Umum', 'Kelas II', 130000, 3),
(117, 'Perinatologi', 'Dokter Spesialis dan Umum', 'Kelas III', 130000, 6),
(118, 'Perinatologi', 'Dokter Umum', 'Kelas VIP', 200000, 1),
(119, 'Perinatologi', 'Dokter Umum', 'Kelas I', 172000, 2),
(120, 'Perinatologi', 'Dokter Umum', 'Kelas II', 130000, 3),
(121, 'Perinatologi', 'Dokter Umum', 'Kelas III', 120000, 6),
(122, 'Perinatologi', 'Gizi Rawat Inap', 'Kelas VIP', 120000, 1),
(123, 'Perinatologi', 'Gizi Rawat Inap', 'Kelas I', 100000, 2),
(124, 'Perinatologi', 'Gizi Rawat Inap', 'Kelas II', 70000, 3),
(125, 'Perinatologi', 'Gizi Rawat Inap', 'Kelas III', 30000, 6),
(126, 'Perinatologi', 'Persalinan Normal Dokter', 'Kelas VIP', 560000, 1),
(127, 'Perinatologi', 'Persalinan Normal Dokter', 'Kelas I', 470000, 2),
(128, 'Perinatologi', 'Persalinan Normal Dokter', 'Kelas II', 330000, 3),
(129, 'Perinatologi', 'Persalinan Normal Dokter', 'Kelas III', 270000, 6),
(130, 'Perinatologi', 'Persalinan Normal Bidan', 'Kelas VIP', 350000, 1),
(131, 'Perinatologi', 'Persalinan Normal Bidan', 'Kelas I', 300000, 2),
(132, 'Perinatologi', 'Persalinan Normal Bidan', 'Kelas II', 220000, 3),
(133, 'Perinatologi', 'Persalinan Normal Bidan', 'Kelas III', 190000, 6),
(134, 'Perinatologi', 'Persalinan Tidak Normal', 'Kelas VIP', 930000, 1),
(135, 'Perinatologi', 'Persalinan Tidak Normal', 'Kelas I', 750000, 2),
(136, 'Perinatologi', 'Persalinan Tidak Normal', 'Kelas II', 540000, 3),
(137, 'Perinatologi', 'Persalinan Tidak Normal', 'Kelas III', 470000, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tarif_rj`
--

CREATE TABLE `tbl_tarif_rj` (
  `id_tarif_rj` int(3) NOT NULL,
  `departemen` varchar(30) NOT NULL,
  `tarif` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tarif_rj`
--

INSERT INTO `tbl_tarif_rj` (`id_tarif_rj`, `departemen`, `tarif`) VALUES
(5, 'Umum', 150000),
(6, 'Gigi', 160000),
(7, 'Anak', 180000),
(8, 'Kandungan', 200000),
(9, 'THT', 150000),
(10, 'Syaraf', 180000),
(11, 'Kulit dan Kelamin', 300000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(1) NOT NULL,
  `hak_akses` varchar(20) NOT NULL,
  `grup` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `status`, `hak_akses`, `grup`) VALUES
(1, 'Apotik', 'Apotik', 0, 'Apoteker', 'Apoteker'),
(2, 'Miku', 'Miku', 0, 'Departemen', 'Kandungan'),
(3, 'Ariq', 'Ariq', 0, 'Front Office', 'Front-Office'),
(4, 'nurse', 'nurse', 0, 'perawat', 'Perawat'),
(5, 'Johan', 'Johan', 0, 'Departemen', 'THT'),
(6, 'umum', 'umum', 0, 'Departemen', 'Umum'),
(7, 'Alvin', 'Alvin', 0, 'Admin', 'Admin'),
(1001, 'irsyad', 'irsyad', 0, 'Dokter', 'Irsyad Muhammad, dr'),
(1002, 'Pranata', 'Pranata', 0, 'Dokter', 'Pranata Audy, dr.SpB'),
(1003, 'rafdi', 'rafdi', 0, 'Dokter', 'Jaidi, dr.SpA'),
(1004, 'adit', 'adit', 0, 'Dokter', 'Anugrah Pratama, dr.SpPD'),
(1005, 'Dendi', 'Dendi', 0, 'Dokter', 'Dendi Abdul Rohim, H.dr.SpB'),
(1006, 'Kurnia', 'Kurnia', 0, 'Dokter', 'Kurniawan Aditya, dr.SpOG'),
(1007, 'ipin', 'ipin', 0, 'Dokter', 'Arifin Muhammad, dr.SpS.Mkes'),
(1010, 'zeffry', 'zeffry', 0, 'Dokter', 'Zeffry Irwanto, dr.SpM'),
(1011, 'kulitkelamin', 'kulitkelamin', 0, 'Departemen', 'Kulit dan Kelamin'),
(1012, 'syaraf', 'syaraf', 0, 'Departemen', 'Syaraf'),
(1013, 'gigi', 'gigi', 0, 'Departemen', 'Gigi'),
(1014, 'anak', 'anak', 0, 'Departemen', 'Anak'),
(1015, 'kandungan', 'kandungan', 0, 'Departemen', 'Kandungan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tbl_pri`
--
ALTER TABLE `tbl_pri`
  ADD PRIMARY KEY (`no_ri`);

--
-- Indexes for table `tbl_prj`
--
ALTER TABLE `tbl_prj`
  ADD PRIMARY KEY (`no_rj`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `tbl_resep`
--
ALTER TABLE `tbl_resep`
  ADD PRIMARY KEY (`id_resep`);

--
-- Indexes for table `tbl_tarif_ri`
--
ALTER TABLE `tbl_tarif_ri`
  ADD PRIMARY KEY (`id_tarif_ri`);

--
-- Indexes for table `tbl_tarif_rj`
--
ALTER TABLE `tbl_tarif_rj`
  ADD PRIMARY KEY (`id_tarif_rj`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1015;

--
-- AUTO_INCREMENT for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  MODIFY `id_pasien` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `tbl_pri`
--
ALTER TABLE `tbl_pri`
  MODIFY `no_ri` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_prj`
--
ALTER TABLE `tbl_prj`
  MODIFY `no_rj` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_resep`
--
ALTER TABLE `tbl_resep`
  MODIFY `id_resep` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_tarif_ri`
--
ALTER TABLE `tbl_tarif_ri`
  MODIFY `id_tarif_ri` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `tbl_tarif_rj`
--
ALTER TABLE `tbl_tarif_rj`
  MODIFY `id_tarif_rj` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1016;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_prj`
--
ALTER TABLE `tbl_prj`
  ADD CONSTRAINT `tbl_prj_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tbl_pasien` (`id_pasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

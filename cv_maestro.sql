-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2020 at 07:23 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_maestro`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalog_bandung`
--

CREATE TABLE `catalog_bandung` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `tempat` varchar(128) NOT NULL,
  `registrasi` int(11) NOT NULL,
  `bandung4` int(11) NOT NULL,
  `bandung8` int(11) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catalog_bandung`
--

INSERT INTO `catalog_bandung` (`id`, `nama_kelas`, `image`, `tempat`, `registrasi`, `bandung4`, `bandung8`, `keterangan`) VALUES
(1, '1 Siswa 1 pelatih', 'bandung1.jpg', 'Bandung', 100000, 400000, 700000, 'belajar lebih menyenangkan bersama kami'),
(2, '2 Siswa 1 pelatih', 'bandung2.jpg', 'Bandung', 100000, 300000, 500000, 'Akan di latih dengan pelatih yang profesional');

-- --------------------------------------------------------

--
-- Table structure for table `catalog_jakarta`
--

CREATE TABLE `catalog_jakarta` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `lokasi` varchar(128) NOT NULL,
  `registrasi` int(11) NOT NULL,
  `jakarta4` int(11) NOT NULL,
  `jakarta8` int(11) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catalog_jakarta`
--

INSERT INTO `catalog_jakarta` (`id`, `nama_kelas`, `image`, `lokasi`, `registrasi`, `jakarta4`, `jakarta8`, `keterangan`) VALUES
(2, 'Private', '1.jpg', 'Jabodetabek', 100000, 700000, 1300000, 'Siswa akan di latih oleh 1 pelatih yang profesional'),
(3, 'Kelas', '2.jpg', 'jabodetabek', 100000, 500000, 900000, 'Siswa akan di latih oleh 1 pelatih yang profesional, kelas ini cocok untuk siswa yang tidak ingin belajar renang sendiri'),
(4, 'Terapi', 'jakarta3.jpg', 'Jabodetabek', 100000, 400000, 700000, 'Kelas ini cocok buat anak-anak yang mau latihan bareng bersama temannya');

-- --------------------------------------------------------

--
-- Table structure for table `data_pelatih`
--

CREATE TABLE `data_pelatih` (
  `id` int(11) NOT NULL,
  `nama_pelatih` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `area_kerja` varchar(128) NOT NULL,
  `mulai_gabung` varchar(128) NOT NULL,
  `cuoch` varchar(10000) NOT NULL,
  `jumlah_siswa` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pelatih`
--

INSERT INTO `data_pelatih` (`id`, `nama_pelatih`, `jenis_kelamin`, `area_kerja`, `mulai_gabung`, `cuoch`, `jumlah_siswa`, `image`) VALUES
(1, 'Gilang', 'Laki-laki', 'Bandung', '20 mei 2017', 'Berenang membuat hati lebih tenang', '50', 'gilang.jpg'),
(2, 'Ilham', 'Laki-laki', 'Jabodetabek', '12 januari 2015', 'Jadikan air sebagai sahabat', '40', 'ilham.jpg'),
(3, 'Ikhsan', 'Laki-laki', 'Bali', '15 februari 2019', 'Berenang membuat hati tenang', '15', 'ikhsan.jpg'),
(4, 'Kiki', 'Laki-laki', 'jabodetabek', '20 juni 2018', 'Jangan takut dengan air', '40', 'kiki.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(11) NOT NULL,
  `nama_siswa` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `tempat_latihan` varchar(128) NOT NULL,
  `paket_renang` varchar(128) NOT NULL,
  `nama_pelatih` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `nama_siswa`, `jenis_kelamin`, `tempat_latihan`, `paket_renang`, `nama_pelatih`) VALUES
(1, 'Keano', 'Perempuan', 'Kolam renang Oasis', 'Bandung18', 'Coach Novita'),
(2, 'Kiki', 'Laki-Laki', 'Kolam renang Oasis', 'Bandung14', 'Coach Erma');

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_siswa`
--

CREATE TABLE `jumlah_siswa` (
  `id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jumlah_siswa`
--

INSERT INTO `jumlah_siswa` (`id`, `jumlah`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `order_jakarta`
--

CREATE TABLE `order_jakarta` (
  `id` int(11) NOT NULL,
  `nama_siswa` varchar(128) NOT NULL,
  `nama_ortu` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `usia` varchar(128) NOT NULL,
  `nama_sekolah` varchar(128) NOT NULL,
  `telepon` varchar(128) NOT NULL,
  `alamat-tinggal` varchar(500) NOT NULL,
  `nama_kolam` varchar(128) NOT NULL,
  `nama_kelas` varchar(128) NOT NULL,
  `daerah` varchar(128) NOT NULL,
  `pelatih` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_jakarta`
--

INSERT INTO `order_jakarta` (`id`, `nama_siswa`, `nama_ortu`, `jenis_kelamin`, `usia`, `nama_sekolah`, `telepon`, `alamat-tinggal`, `nama_kolam`, `nama_kelas`, `daerah`, `pelatih`, `status`, `date_created`) VALUES
(14, 'Kiki Agustin', 'Awan', 'Laki-Laki', '20', 'Smk Dharma Agung', '085794203570', 'Jl. Salamungkal Rt.02 Desa.Karangtunggal', 'Kolam Oasis', '2 Siswa 4 Pertemuan', '', 'belum ada pelatih', 'Lunas', 1571558904),
(15, 'Mega Kusmayati', 'Awan', 'Laki-Laki', '16', 'sma Cikancung', '0000000', 'Salamungkal', 'Oasis', '2 Siswa 4 Pertemuan', '', 'Kiki Agustin', 'Lunas', 1571558904),
(16, 'Dea Khasanah', 'gaga', 'Laki-laki', '14', 'smk', '3456', 'bandung', 'Oasis', '4 Pertemuan', 'Bandung', 'belum ada pelatih', 'Belum Bayar', 1572457472),
(20, 'asasa', 'asasa', 'asasa', 'asasa', 'asasa', '1212', 'asasa', 'asasa', 'Swim Prestasi 4 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1572548931),
(22, 'kiki', 'kiki', 'kiki', 'kiki', 'kiki', '1212', 'kiki', 'kiki', '2 Siswa4 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1572549746),
(23, 'kiki', 'kiki', 'kiki', 'kiki', 'kiki', 'kiki', 'kiki', 'kiki', '2 Siswa 8 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1572549746),
(24, 'Dea Khasanah', 'Dea Khasanah', 'Dea Khasanah', 'Dea Khasanah', 'Dea Khasanah', 'Dea Khasanah', 'Dea Khasanah', 'Dea Khasanah', '2 Siswa4 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1572549987),
(25, 'Dea Khasanah', 'Dea Khasanah', 'Dea Khasanah', 'Dea Khasanah', 'Dea Khasanah', 'Dea Khasanah', 'Dea Khasanah', 'Dea Khasanah', '2 Siswa4 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1572549987),
(28, 'asasa', 'asasa', 'Laki-laki', 'asasa', 'asas', '123', 'asas', 'aasa', 'Bandung 1 Siswa 4 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1573586154),
(29, 'Kiki Agustin', 'Kiki Agustin', 'Laki-laki', 'Kiki Agustin', 'Kiki Agustin', '123', 'Kiki Agustin', 'Kiki Agustin', 'Jakarta 3/4 Siswa 8 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1573586301),
(30, 'asasasa', 'asasasa', 'Perempuan', '12', 'sasasasa', '1213', 'asasasa', 'asasasa', 'Jakarta 2 Siswa 4 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1574275135),
(31, 'asasasa', 'asasasa', 'Laki-laki', '1211', 'asasasa', '1213', 'asasasa', 'asasasa', 'Jakarta 3/4 Siswa 8 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1574275157),
(32, 'asasasa', 'asasasa', 'Perempuan', '12', 'asasasa', '123', 'asasasa', 'asasasa', 'Jakarta 3/4 Siswa 8 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1574275193),
(33, 'asasasa', 'asasasa', 'Perempuan', '12', 'asasasa', '123', 'asasasa', 'asasasa', 'Jakarta 3/4 Siswa 8 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1574275239),
(34, 'asasasa', 'asasasa', 'Laki-laki', '34', 'asasasa', '565656', 'asasasa', 'asasasa', 'Jakarta 3/4 Siswa 8 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1574275296),
(35, 'asasasa', 'asasasa', 'Laki-laki', '121', 'asasasa', '1213', 'asasasa', 'asasasa', 'Jakarta 3/4 Siswa 8 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1574275404),
(36, 'asasasa', 'asasasa', 'Laki-laki', '12', 'asasasa', '1213', 'asasasa', 'asasasa', 'Jakarta 3/4 Siswa 4 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1574275436),
(37, 'asasasa', 'asasasa', 'Laki-laki', '121', 'asasasa', '345', 'asasasa', 'asasasa', 'Jakarta 3/4 Siswa 8 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1574275470),
(38, 'asasasa', 'asasasa', 'Laki-laki', '12', 'asasasa', '3121', 'asasasa', 'asasasa', 'Jakarta 3/4 Siswa 8 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1574275493),
(40, 'asasasa', 'asasasa', 'asasasa', '12', 'asasasa', '1214', 'asasasa', 'asasasa', 'asasasa', 'asasasa', 'asasasa', 'asasasa', 0),
(41, 'asasasa', 'asasasa', 'Laki-laki', 'asasasa', 'asasasa', '1213', 'asasasa', 'asasasa', 'Bandung 1 Siswa 8 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1574275705),
(42, 'asasasa', 'asasasa', 'Laki-laki', '321', 'asasasa', '321', 'asasasa', 'asasasa', 'Jakarta 2 Siswa 4 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1574275726),
(43, 'asasasa', 'asasasa', 'Laki-laki', '321', 'asasasa', '321', 'asasasa', 'asasasa', 'Jakarta 1 Siswa 8 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1574275825),
(44, 'asasasa', 'asasasa', 'Laki-laki', '21', 'asasasa', '321', 'asasasa', 'asasasa', 'Jakarta 1 Siswa 4 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1574275861),
(45, 'asasasa', 'asasasa', 'Laki-laki', '321', 'asasasa', '4321', 'asasasa', 'asasasa', 'Bandung 3/4 Siswa 8 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1574275903),
(46, 'asasasa', 'asasasa', 'Laki-laki', '321', 'asasasa', '321', 'asasasa', 'asasasa', 'Bandung 3/4 Siswa 8 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1574275940),
(47, 'asasasa', 'asasasa', 'Laki-laki', '4321', 'asasasa', '4321', 'asasasa', 'asasasa', 'Bandung 1 Siswa 4 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1574275972),
(48, 'asasasa', 'asasasa', 'Laki-laki', '432', 'asasasa', '4321', 'asasasa', 'asasasa', 'Jakarta 3/4 Siswa 4 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1574275998),
(49, 'asasasa', 'asasasa', 'Laki-laki', '321', 'asasasa', '321', 'asasasa', 'asasasa', 'Jakarta 3/4 Siswa 8 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1574276020),
(50, 'sasasa', 'asasa', 'Laki-laki', 'asasa', 'asasa', '1213', 'asada', 'asaad', 'Bandung 1 Siswa 4 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1575380107),
(51, 'asasa', 'asasa', 'Laki-laki', '12', 'ass', '121', 'asasasa', 'asasa', 'Jakarta 3/4 Siswa 4 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1575380173),
(52, 'kkikii', 'asasa', 'Laki-laki', '123', 'asasa', '121', 'asaa', 'asasa', 'Bandung 1 Siswa 4 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1575380201),
(53, 'asasa', 'asasa', 'Laki-laki', '12', 'asasa', '12121', 'asasa', 'asaa', 'Bandung 1 Siswa 4 Pertemuan', '', 'belum ada pelatih', 'Belum Bayar', 1575457659);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `rol_id`, `is_active`, `date_created`) VALUES
(3, 'Dea', 'dea@gmail.com', 'default.jpg', '$2y$10$v3Duk9T5oktUDof2cMS.LOgPwe4BV59mUaOUj80JtB3sWmIVkKW0q', 2, 1, 1568524980),
(8, 'Kiki Agustin', 'kikiagustin62@gmail.com', '72174190_2167464950218173_6294285897851244342_n.jpg', '$2y$10$V/IXx1beZs0MGkgVYrp9U.TjcMYOyWoxmEzwPVQol0Ojjw6Wz8iBO', 1, 1, 1570642084),
(9, 'mega Kusmayati', 'mega@gmail.com', 'banner.jpg', '$2y$10$Lbbc6Ht6Vib2TokWzqLhGuvQLeBKvIrSKF7TC4F9/hu.U7U8vTCiO', 3, 1, 1570690854),
(10, 'Novita', 'nivita@gmail.com', 'default.jpg', '$2y$10$6.lRbpD/sKYB6aN7vZ7DROGib8r.0jiXYtwLQ3GuOuEXYkaTIjQEu', 3, 1, 1570814584),
(11, 'Roma', 'roma@gmail.com', 'default.jpg', '$2y$10$ZbhpoekzJj.paYi1BTJ0P.Vl854g9DNQwJOqz8CGnfeAoQigbg1AC', 2, 1, 1570832156),
(14, 'kaka', 'kaka@gmail.com', 'default.jpg', '$2y$10$cvyEe92/xdgNXyD6AJCpL.FuVBfLsMLysWBlJMDKJ0CdLhy1gwKL6', 2, 1, 1571859030),
(15, 'ishaq', 'ishaq@gmail.com', 'default.jpg', '$2y$10$nObqdm0UO93uizj/8zHyYOI.xWRWCavez5ZbMyNSX2QWxXzKhVPVi', 2, 1, 1572566612),
(16, 'Juju', 'juju@gmail.com', 'default.jpg', '$2y$10$pPGGwh1cWFYWEFufrZAh5ezYXtfa2MwqBFFqjACwN2x66ObbqK1Yi', 2, 1, 1574218174),
(17, 'Cici', 'cici@gmail.com', 'default.jpg', '$2y$10$u/ZTc1blgqukzuTMeq2W9uXQQ22k4gXqu8/Q31VDmfBS7fc4Ukz9a', 2, 1, 1574835560);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `rol_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 3, 2),
(6, 3, 4),
(7, 1, 4),
(8, 1, 5),
(10, 2, 5),
(11, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(3, 'Menu'),
(4, 'Pelatih'),
(5, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_rol`
--

CREATE TABLE `user_rol` (
  `id` int(11) NOT NULL,
  `rol` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_rol`
--

INSERT INTO `user_rol` (`id`, `rol`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(3, 'Pelatih');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalog_bandung`
--
ALTER TABLE `catalog_bandung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catalog_jakarta`
--
ALTER TABLE `catalog_jakarta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pelatih`
--
ALTER TABLE `data_pelatih`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jumlah_siswa`
--
ALTER TABLE `jumlah_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_jakarta`
--
ALTER TABLE `order_jakarta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_rol`
--
ALTER TABLE `user_rol`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalog_bandung`
--
ALTER TABLE `catalog_bandung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `catalog_jakarta`
--
ALTER TABLE `catalog_jakarta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_pelatih`
--
ALTER TABLE `data_pelatih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jumlah_siswa`
--
ALTER TABLE `jumlah_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_jakarta`
--
ALTER TABLE `order_jakarta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_rol`
--
ALTER TABLE `user_rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

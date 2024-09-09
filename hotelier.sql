-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 03:01 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelier`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_carousel`
--

CREATE TABLE `tbl_carousel` (
  `id_carousel` int(11) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `judul_carousel` varchar(100) DEFAULT NULL,
  `ket_carousel` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_carousel`
--

INSERT INTO `tbl_carousel` (`id_carousel`, `photo`, `judul_carousel`, `ket_carousel`, `status`) VALUES
(1, '1706111925_055f7312bb03e73b7ce2.jpg', 'Luxury Hotel', 'Discover A Brand Luxurious Hotel  ', 1),
(2, '1706111944_f8b20d9024c0939de3e0.jpg', 'Hotel Terbaik', 'Hotel Terbaik Di Bali', 0),
(3, '1706112047_0a85b8cf5f3fb80f601e.jpg', 'Hotel Terbaik', 'Hotel Terbaik Di Bali', 0),
(8, '1706277482_e23f909c36b03dfcb644.jpg', 'Lobby', 'Lobby yang luas', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_layanan`
--

CREATE TABLE `tbl_layanan` (
  `id_layanan` int(11) NOT NULL,
  `icon_layanan` varchar(100) NOT NULL,
  `nama_layanan` varchar(100) NOT NULL,
  `ket_layanan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_layanan`
--

INSERT INTO `tbl_layanan` (`id_layanan`, `icon_layanan`, `nama_layanan`, `ket_layanan`) VALUES
(1, 'fa fa-hotel fa-2x text-primaryasd', 'Rooms & Appartment', 'There are many rooms available and are equipped with complete facilities and guaranteed cleanliness, making the room comfortable to live in'),
(2, 'fa fa-spa fa-2x text-primary', 'Food & Restaurant', 'This hotel provides a restaurant which has a complete and varied menu, starting from drinks, appetizers, desserts, snacks and dinner. Apart from that, this hotel provides a hygienic and beautiful place.'),
(11, 'fa fa-spa fa-2x text-primary', 'Spa & Fitness', 'This hotel also provides spa and fitness, with complete facilities and friendly staff that make you feel comfortable'),
(12, 'fa fa-swimmer fa-2x text-primary', 'Sports & Gaming', 'This hotel provides a sports and play area, every family can do sports together and play with their children and grandchildren'),
(13, 'fa fa-glass-cheers fa-2x text-primary', 'Event & Party', 'This hotel often holds many events and parties, such as concerts and other events'),
(14, 'fa fa-dumbbell fa-2x text-primary', 'GYM & Yoga', 'This hotel provides a gym and yoga area as well as trainers if needed');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `id_room` int(11) NOT NULL,
  `id_roomtype` int(11) NOT NULL,
  `star` int(1) NOT NULL,
  `jml_bed` int(1) NOT NULL,
  `jml_bath` int(1) NOT NULL,
  `ket_room` text NOT NULL,
  `photo_room` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`id_room`, `id_roomtype`, `star`, `jml_bed`, `jml_bath`, `ket_room`, `photo_room`) VALUES
(3, 1, 4, 1, 1, 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.', '1706275984_3891ea02222ff8f171b7.jpg'),
(4, 2, 5, 2, 2, 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.', '1706267642_fb7708d1276bf012982d.jpg'),
(6, 3, 5, 3, 3, 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.', '1706266168_72a6f95e3a2abc56e504.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roomtype`
--

CREATE TABLE `tbl_roomtype` (
  `id_roomtype` int(11) NOT NULL,
  `nama_roomtype` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_roomtype`
--

INSERT INTO `tbl_roomtype` (`id_roomtype`, `nama_roomtype`, `harga`) VALUES
(1, 'Junior Suite', 500000),
(2, 'Executive Suite', 1500000),
(3, 'Super Deluxe', 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `id_staff` int(11) NOT NULL,
  `nama_staff` varchar(100) DEFAULT NULL,
  `jabatan_staff` varchar(100) DEFAULT NULL,
  `photo_staff` varchar(100) DEFAULT NULL,
  `fb_staff` varchar(100) DEFAULT NULL,
  `x_staff` varchar(100) DEFAULT NULL,
  `ig_staff` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`id_staff`, `nama_staff`, `jabatan_staff`, `photo_staff`, `fb_staff`, `x_staff`, `ig_staff`) VALUES
(1, 'Mr Ansori', 'Manajer', '1706244290_2ecc3ee596b326f5c5d2.jpg', '@eki', '@eko', '@equ'),
(2, 'BUDI', 'Security', '1706277226_9a5ac339b96665038087.jpeg', '@budi', '@budi', '@budi'),
(3, 'Mr Prabowo', 'CEO', '1706245986_bf885ddaae96e2aaf6d4.jpg', '@wowo', '@wowo', '@wowo'),
(5, 'GANJAR', 'CAPRES', '1706246029_729b25e822e2bd7cd36c.jpg', '@ganjarTzy', '@ganjarTzy', '@ganjarTzy');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimoni`
--

CREATE TABLE `tbl_testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `nama_testimoni` varchar(100) DEFAULT NULL,
  `jabatan_testimoni` varchar(100) DEFAULT NULL,
  `testimoni` text DEFAULT NULL,
  `photo_testimoni` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_testimoni`
--

INSERT INTO `tbl_testimoni` (`id_testimoni`, `nama_testimoni`, `jabatan_testimoni`, `testimoni`, `photo_testimoni`) VALUES
(1, 'MEGAWATI', 'Ketua Partai', 'Salam Tiga Jari', '1706277055_631918f062f300acd2f9.jpg'),
(5, 'gembul', 'bawahan', 'ngantuk', '1706125052_7249ccd14462041eb137.png'),
(6, 'ANIES', 'CAPRES', 'Angin Gapunya KTP', '1706277118_665e4fd94260f75f2110.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `password`, `level`) VALUES
(1, 'dosen', 'admin@admin.com', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_carousel`
--
ALTER TABLE `tbl_carousel`
  ADD PRIMARY KEY (`id_carousel`);

--
-- Indexes for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`id_room`);

--
-- Indexes for table `tbl_roomtype`
--
ALTER TABLE `tbl_roomtype`
  ADD PRIMARY KEY (`id_roomtype`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indexes for table `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_carousel`
--
ALTER TABLE `tbl_carousel`
  MODIFY `id_carousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `id_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_roomtype`
--
ALTER TABLE `tbl_roomtype`
  MODIFY `id_roomtype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

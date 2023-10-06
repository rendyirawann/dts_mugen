-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 06:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biker`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) NOT NULL,
  `about_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about_desc`) VALUES
(1, '<p>Mugen is Japanese Racing Club Motor</p>');

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` bigint(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama_lengkap`, `email`, `username`, `password`) VALUES
(1, 'Rendy Irawan', 'rendy9008@gmail.com', 'admin1', 'admin1'),
(2, 'Rendy Irawan', 'rendy9008@gmail.com', 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` bigint(20) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title_artikel` varchar(255) NOT NULL,
  `content_artikel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `img`, `title_artikel`, `content_artikel`) VALUES
(1, '651f736d224df.jpg', 'Artikel #4', '<p>Contoh artikel #4</p>'),
(2, '651f701029a28.jpg', 'Artikel #2', '<p>Contoh Artikel #2</p>');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) NOT NULL,
  `contact_desc` varchar(255) NOT NULL,
  `contact_iframe` varchar(255) NOT NULL,
  `link_name1` varchar(255) NOT NULL,
  `link1` varchar(255) NOT NULL,
  `link_name2` varchar(255) NOT NULL,
  `link2` varchar(255) NOT NULL,
  `link_name3` varchar(255) NOT NULL,
  `link3` varchar(255) NOT NULL,
  `link_name4` varchar(255) NOT NULL,
  `link4` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `contact_desc`, `contact_iframe`, `link_name1`, `link1`, `link_name2`, `link2`, `link_name3`, `link3`, `link_name4`, `link4`, `email`, `no_hp`) VALUES
(1, '<p>Deskripsi Contact Mugen Club</p>', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0835657407465!2d98.69237217455819!3d3.568243850434342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30313059bc5c1dcd%3A0x4711e61bc0acbfcc!2sUniversitas%20Harapan%20Medan!5e0!3m2!1sid!2sid!4v', 'twitter', 'https://www.instagram.com/reillvx/', 'instagram', 'https://www.instagram.com/reillvx/', 'facebook', 'https://www.instagram.com/reillvx/', 'youtube', 'https://www.instagram.com/reillvx/', 'mugen-race@jpn.com', 6211188);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `img`) VALUES
(1, '651f79468b357.jpg'),
(2, '651f794b0939b.jpg'),
(3, '651f79600e377.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` bigint(20) NOT NULL,
  `logo_brand` varchar(50) NOT NULL,
  `home_title` varchar(50) NOT NULL,
  `home_description` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `logo_brand`, `home_title`, `home_description`, `img`) VALUES
(1, 'M U G E N', 'M U G E N', '<p>M U G E N</p>', '651f848dad416.gif');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'CUKEZ', 'rendy9008@gmail.com', 'mita', 'ssssssssssssss'),
(2, 'sssssssssssss', 'renirawan9008@gmail.com', 'sssssssssss', 'ssssssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name_product` varchar(50) NOT NULL,
  `desc_product` varchar(50) NOT NULL,
  `cat_product` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `img`, `name_product`, `desc_product`, `cat_product`) VALUES
(1, '651f1d74940d8.jpg', 'Custom Bike 2', 'Custom Bike 2 - Rp 3M', 'bike'),
(2, '651f1d7e2a9bc.jpg', 'Custom Bike 1', 'Custom Bike - Rp 3 M', 'bike'),
(3, '651f1d8504841.jpg', 'Helmet Motor', 'Helmet Motor - Rp 2000 K', 'helm'),
(4, '651f1d8b09752.jpg', 'Jacket 1', 'Jacket 1 - Rp 1000 K', 'jacket'),
(5, '651f1d93dc1bd.jpg', 'Jacket 2', 'Jacket 2 - Rp 900 K', 'jacket');

-- --------------------------------------------------------

--
-- Table structure for table `product_cat`
--

CREATE TABLE `product_cat` (
  `id` bigint(20) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `product_category1` varchar(50) NOT NULL,
  `product_category2` varchar(50) NOT NULL,
  `product_category3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_cat`
--

INSERT INTO `product_cat` (`id`, `product_desc`, `product_category1`, `product_category2`, `product_category3`) VALUES
(1, '<p>Berikut adalah produk yang kami tawarkan mulai dari motor custom, jacket, dan juga helm</p>', 'bike', 'jacket', 'helm');

-- --------------------------------------------------------

--
-- Table structure for table `profile_home`
--

CREATE TABLE `profile_home` (
  `id` bigint(20) NOT NULL,
  `profile_desc` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `leader_name` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile_home`
--

INSERT INTO `profile_home` (`id`, `profile_desc`, `company_name`, `leader_name`, `website`, `phone`, `city`, `email`, `img`) VALUES
(1, '<p>Deskripsi Profile</p>', 'M U G E N', 'Kohaku', 'mugen-race.com', 6211188, 'Japan', 'mugen-race@jpn.com', '651f061a7723b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi_point`
--

CREATE TABLE `visimisi_point` (
  `id` bigint(20) NOT NULL,
  `visi_point` varchar(50) NOT NULL,
  `misi_point` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visimisi_point`
--

INSERT INTO `visimisi_point` (`id`, `visi_point`, `misi_point`) VALUES
(1, 'VISI PERTAMA', 'MISI PERTAMA'),
(2, 'VISI PERTAMA', 'MISI KEDUA');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi_title`
--

CREATE TABLE `visimisi_title` (
  `id` bigint(20) NOT NULL,
  `visimisi_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visimisi_title`
--

INSERT INTO `visimisi_title` (`id`, `visimisi_desc`) VALUES
(1, '<p>Visi Misi Description Mugen Club</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_cat`
--
ALTER TABLE `product_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_home`
--
ALTER TABLE `profile_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visimisi_point`
--
ALTER TABLE `visimisi_point`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visimisi_title`
--
ALTER TABLE `visimisi_title`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_cat`
--
ALTER TABLE `product_cat`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profile_home`
--
ALTER TABLE `profile_home`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visimisi_point`
--
ALTER TABLE `visimisi_point`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visimisi_title`
--
ALTER TABLE `visimisi_title`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

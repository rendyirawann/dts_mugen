-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2023 at 12:00 PM
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
  `about_title` varchar(255) NOT NULL,
  `about_desc` varchar(255) NOT NULL,
  `copyright` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `link4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` bigint(20) NOT NULL,
  `logo_brand` varchar(50) NOT NULL,
  `home_title` varchar(50) NOT NULL,
  `home_description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `logo_brand`, `home_title`, `home_description`) VALUES
(1, 'M U G E N', 'M U G E N', '<p>M U G E N</p>');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name_product` varchar(50) NOT NULL,
  `desc_product` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_cat`
--

CREATE TABLE `product_cat` (
  `id` bigint(20) NOT NULL,
  `product_desc` varchar(50) NOT NULL,
  `product_category1` varchar(50) NOT NULL,
  `product_category2` varchar(50) NOT NULL,
  `product_category3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile_home`
--

INSERT INTO `profile_home` (`id`, `profile_desc`, `company_name`, `leader_name`, `website`, `phone`, `city`, `email`) VALUES
(1, '<p>Deskripsi Profile</p>', 'M U G E N', 'Kohaku', 'mugen-race.com', 6211188, 'Japan', 'mugen-race@jpn.com');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi_point`
--

CREATE TABLE `visimisi_point` (
  `id` bigint(20) NOT NULL,
  `visi_point` varchar(50) NOT NULL,
  `misi_point` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Visi Misi Description');

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
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_cat`
--
ALTER TABLE `product_cat`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile_home`
--
ALTER TABLE `profile_home`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visimisi_point`
--
ALTER TABLE `visimisi_point`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visimisi_title`
--
ALTER TABLE `visimisi_title`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

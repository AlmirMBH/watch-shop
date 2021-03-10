-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 05:01 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corephp`
--

-- --------------------------------------------------------

--
-- Table structure for table `watches`
--

CREATE TABLE `watches` (
  `id` int(3) NOT NULL,
  `name` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `deleted` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `watches`
--

INSERT INTO `watches` (`id`, `name`, `price`, `image`, `deleted`) VALUES
(1, 'Cerruti CR-B7', '587.54', 'cerruti8.png', 0),
(2, 'Cerruti CK-M17', '587.54', 'cerruti23.png', 0),
(3, 'Cerruti CR-ST22', '587.54', 'cerruti11.png', 0),
(4, 'Cerruti CK-KP09', '587.54', 'cerruti33.png', 0),
(6, 'Cerruti CR-4', '558.78', 'cerruti17.png', 0),
(7, 'Cerruti CR-7', '537.48', 'cerruti26.png', 0),
(8, 'Cerruti CR-G9', '579.68', 'cerruti27.png', 0),
(9, 'Cerruti CR-81', '532.94', 'cerruti10.png', 0),
(10, 'Cerruti CR-T9', '489.94', 'cerruti31.png', 0),
(11, 'Cerruti C-35', '479.54', 'cerruti35.png', 0),
(12, 'Cerruti CK-18', '469.54', 'cerruti15.png', 0),
(13, 'Cerruti CR-72', '449.54', 'cerruti3.png', 0),
(14, 'Diesel Navy CK-37', '472.78', 'diesel7.png', 0),
(15, 'Diesel Army T-84', '458.22', 'diesel9.png', 0),
(16, 'Diesel Black S-14', '460.44', 'diesel18.png', 0),
(17, 'Diesel Brown L-44', '457.54', 'diesel10.png', 0),
(18, 'Diesel CK-S8', '349.54', 'diesel5.png', 0),
(19, 'Diesel CR-B7', '379.94', 'diesel6.png', 0),
(20, 'Diesel CK-M17', '325.54', 'diesel8.png', 0),
(21, 'Diesel CR-ST22', '367.88', 'diesel9.png', 0),
(22, 'Diesel CK-KP09', '339.20', 'diesel10.png', 0),
(23, 'Diesel CR-4', '390.15', 'diesel11.png', 0),
(24, 'Diesel CR-G9', '373.85', 'diesel13.png', 0),
(25, 'Diesel CK-99', '358.35', 'diesel14.png', 0),
(26, 'Diesel CR-81', '322.97', 'diesel15.png', 0),
(27, 'Diesel H-104', '397.55', 'diesel16.png', 0),
(28, 'Diesel D-8', '427.66', 'diesel18.png', 0),
(29, 'Diesel CK-18', '407.22', 'diesel19.png', 0),
(30, 'Diesel CR-72', '429.79', 'diesel20.png', 0),
(31, 'Diesel CR-009', '418.27', 'diesel21.png', 0),
(32, 'Armani AR-11241', '449.54', 'armani18.png', 0),
(33, 'Armani AR-1924', '489.54', 'armani6.png', 0),
(34, 'Armani AR-11325', '429.34', 'armani9.png', 0),
(39, 'Armani AR-5674', '482.78', 'armani14.png', 0),
(40, 'Armani AR-1227', '464.18', 'armani30.png', 0),
(41, 'Armani AR-1297', '448.18', 'armani26.png', 0),
(42, 'Armani G-89', '448.18', 'armani10.png', 0),
(43, 'Armani T-32', '498.18', 'armani11.png', 0),
(44, 'Armani D-66', '428.18', 'armani12.png', 0),
(45, 'Armani S-T99', '499.23', 'armani13.png', 0),
(46, 'Armani AR-11527', '471.78', 'armani21.png', 0),
(47, 'Armani AR-2473', '432.78', 'armani28.png', 0),
(48, 'Cerruti CK-D10', '472.78', 'cerruti18.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `watches`
--
ALTER TABLE `watches`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `watches`
--
ALTER TABLE `watches`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

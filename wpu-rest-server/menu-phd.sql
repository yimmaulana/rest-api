-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 04:42 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menu-phd`
--

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `is_private_key` tinyint(1) NOT NULL DEFAULT '0',
  `ip_addresses` text,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 1, 'wpu123', 1, 0, 0, NULL, 1),
(2, 33, 'rahasia', 1, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `limits`
--

CREATE TABLE `limits` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `count` int(10) NOT NULL,
  `hour_started` int(11) NOT NULL,
  `api_key` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `limits`
--

INSERT INTO `limits` (`id`, `uri`, `count`, `hour_started`, `api_key`) VALUES
(3, 'uri:api/example/users:get', 1, 1605993302, 'wpu123'),
(4, 'uri:api/menu/index:get', 2, 1606145656, 'wpu123'),
(5, 'uri:api/menu/index:get', 16, 1606487774, 'rahasia');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` text NOT NULL,
  `keterangan` text NOT NULL,
  `crust` varchar(50) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `gambar`, `keterangan`, `crust`, `ukuran`, `harga`) VALUES
(4, 'American Favourite', 'https://static-prod.cpos.diqit.io/uploads/temp/1591838179149-americanfavourite.png', 'Dengan pepperoni, daging cincang, jamur dan saus spesial PHD. ', 'Original Crust', 'Jumbo', 'Rp80,000'),
(5, 'American Favourite Chicken', 'https://static-prod.cpos.diqit.io/uploads/products/1590825971367-american_favourite.png', 'Dengan chicken luncheon, sosis ayam, jamur dan saus special PHD. ', 'Stuffed Crust', 'Regular', 'Rp100,000'),
(7, 'Pepperoni', 'https://static-prod.cpos.diqit.io/uploads/products/1590822307168-pepperoni.png', 'Topping pepperoni, keju mozarella dan saus special PHD.', 'Original Crust', 'Regular', 'Rp80,000'),
(9, 'Meat Lovers', 'https://static-prod.cpos.diqit.io/uploads/products/1590822099595-meat_lover.png', 'Dengan burger sapi, daging cincang, daging asap, sosis sapi, keju mozarella dan saus spesial PHD.', 'Original Crust', 'Jumbo', 'Rp80,000'),
(10, 'Meat Lovers', 'https://static-prod.cpos.diqit.io/uploads/products/1590822099595-meat_lover.png', 'Dengan burger sapi, daging cincang, daging asap, sosis sapi, keju mozarella dan saus spesial PHD.', 'Original Crust', 'Jumbo', 'Rp80,000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `limits`
--
ALTER TABLE `limits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `limits`
--
ALTER TABLE `limits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

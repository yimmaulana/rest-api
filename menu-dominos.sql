-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2021 pada 06.11
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menu-dominos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dominos`
--

CREATE TABLE `dominos` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` text NOT NULL,
  `keterangan` text NOT NULL,
  `crust` varchar(50) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dominos`
--

INSERT INTO `dominos` (`id`, `nama`, `gambar`, `keterangan`, `crust`, `ukuran`, `harga`) VALUES
(3, 'Tropical Delight', 'https://www.tukangmakan.com/wp-content/uploads/2019/01/Whopper-3.jpg', 'Dengan burger sapi, daging cincang, daging asap, sosis sapi, keju mozarella dan saus spesial PHD.', 'Original Crust', 'Jumbo', 'Rp90,000'),
(4, 'Angry Burger', 'https://cdn.idntimes.com/content-images/post/20190719/burgerkingkorea-e61c6c0f017f2edcb33da3c3158126f0.jpg', 'Dengan burger sapi, daging cincang, daging asap, sosis sapi, keju mozarella dan saus spesial PHD.', 'Original Crust', 'Jumbo', 'Rp80,000'),
(5, 'Kurro Ninja Burger', 'https://asset-a.grid.id/crop/20x16:1080x1080/700x0/photo/2021/07/25/inovasi-baru-burger-king-hadirk-20210725124042.jpg', 'Dengan burger sapi, daging cincang, daging asap, sosis sapi, keju mozarella dan saus spesial PHD.', 'Original Crust', 'Jumbo', 'Rp80,000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keys`
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
-- Dumping data untuk tabel `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 1, 'wpu123', 1, 0, 0, NULL, 1),
(2, 33, 'rahasia', 1, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `limits`
--

CREATE TABLE `limits` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `count` int(10) NOT NULL,
  `hour_started` int(11) NOT NULL,
  `api_key` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `limits`
--

INSERT INTO `limits` (`id`, `uri`, `count`, `hour_started`, `api_key`) VALUES
(1, 'uri:api/menu/index:get', 1, 1606145868, 'wpu123'),
(2, 'uri:api/menu/index:get', 1, 1606145529, 'rahasia'),
(3, 'uri:api/dominos/index:get', 1, 1606149677, 'wpu123'),
(4, 'uri:api/dominos/index:get', 2, 1639890519, 'rahasia');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dominos`
--
ALTER TABLE `dominos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `limits`
--
ALTER TABLE `limits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dominos`
--
ALTER TABLE `dominos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `limits`
--
ALTER TABLE `limits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

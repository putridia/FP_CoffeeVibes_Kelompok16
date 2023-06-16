-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2023 pada 22.58
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easpemweb_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`, `code`, `date`) VALUES
(6, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin@gmail.com', '', '2022-03-20 09:36:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_codes`
--

CREATE TABLE `admin_codes` (
  `id` int(222) NOT NULL,
  `codes` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin_codes`
--

INSERT INTO `admin_codes` (`id`, `codes`) VALUES
(1, 'QX5ZMN'),
(2, 'QFE6ZM'),
(3, 'QMZR92'),
(4, 'QPGIOV'),
(5, 'QSTE52'),
(6, 'QMTZ2J');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `m_id` int(222) NOT NULL,
  `mk_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `price` varchar(10) NOT NULL,
  `img` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`m_id`, `mk_id`, `title`, `price`, `img`) VALUES
(1, 1, 'Coffee Matcha', '22000', 'coffeematcha.png'),
(2, 1, 'Expresso Caramel', '22000', 'expressocaramel.png'),
(3, 1, 'Americano', '18000', 'americano.png'),
(4, 1, 'Caffe Latte', '23000', 'coffeelate.png'),
(5, 1, 'Cappucino', '23000', 'cappucino.png'),
(6, 1, 'Mochacino', '24000', 'mochacino.png'),
(7, 1, 'Long Black', '18000', 'longblack.png'),
(8, 2, 'Matcha', '20000', 'matcha.png'),
(9, 2, 'Taro', '20000', 'taro.png'),
(10, 2, 'Chocolate', '20000', 'chocolate.png'),
(11, 2, 'Banana Vanilla Choco', '23000', 'bananavanilla.png'),
(12, 2, 'Jasmine Tea', '19000', 'jasminetea.png'),
(13, 2, 'Leci Tea', '16000', 'lecitea.png'),
(14, 2, 'Rosella Tea', '19000', 'rosellatea.png'),
(15, 2, 'Yakult Semangka Milk', '23000', 'yakultsemangka.png'),
(16, 3, 'Beef Yakiniku', '32000', 'beefyakiniku.png'),
(17, 3, 'Chicken Karage Curry', '30000', 'chickenkarage.png'),
(18, 3, 'Nasi Goreng', '28000', 'nasigoreng.png'),
(19, 4, 'Tahu Walik', '12000', 'tahuwalik.png'),
(20, 4, 'Bola Ubi', '15000', 'bolaubi.png'),
(21, 4, 'Kentang Goreng', '10000', 'kentanggoreng.png'),
(22, 4, 'Rujak Cireng', '11000', 'rujakcireng.png'),
(23, 4, 'Risol Mayo', '18000', 'risolmayo.png'),
(24, 4, 'Coklat Lummer', '16000', 'coklatlummer.png'),
(25, 4, 'Roti Bakar', '13000', 'rotibakar.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_kategori`
--

CREATE TABLE `menu_kategori` (
  `mk_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `deskripsi` varchar(222) NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `menu_kategori`
--

INSERT INTO `menu_kategori` (`mk_id`, `title`, `deskripsi`, `image`, `date`) VALUES
(1, 'Coffee', 'Minuman bahan dasar dari kopi.', 'coffee.png', '2023-06-12 07:56:40'),
(2, 'Non Coffee', 'Minuman bahan dasar tanpa kopi.', 'noncoffee.png', '2023-06-12 07:56:40'),
(3, 'Rice Bowl', 'Makanan terdiri dari nasi, lauk dan bahan tambahan.', 'ricebowl.png', '2023-06-12 07:56:40'),
(4, 'Snack', 'Makanan ringan dan camilan.', 'snack.png', '2023-06-12 07:56:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `remark`
--

CREATE TABLE `remark` (
  `id` int(11) NOT NULL,
  `frm_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `remark`
--

INSERT INTO `remark` (`id`, `frm_id`, `status`, `remark`, `remarkDate`) VALUES
(71, 39, 'in process', 'pengiriman', '2022-03-17 12:31:14'),
(72, 39, 'closed', 'pesanan terkirim', '2022-03-17 12:35:00'),
(74, 47, 'rejected', 'pesanan dibatalkan', '2022-03-23 13:54:08'),
(80, 1, 'delivered', 'pesanan terkirim', '2023-06-12 17:01:01'),
(81, 1, 'closed', 'pesanan terkirim', '2023-06-12 17:01:37'),
(82, 7, 'in process', 'on the way!', '2023-06-12 17:18:58'),
(83, 2, 'closed', 'pesanan terkirim', '2023-06-12 23:52:31'),
(84, 5, 'closed', 'pesanan terkirim', '2023-06-12 23:53:12'),
(85, 4, 'in process', 'on the way!', '2023-06-12 23:53:49'),
(86, 8, 'in process', 'on the way!', '2023-06-12 23:54:15'),
(87, 17, 'in process', 'on the way!', '2023-06-15 13:23:45'),
(88, 18, 'in process', 'on the way!', '2023-06-15 13:24:05'),
(89, 23, 'in process', 'on the way!', '2023-06-15 13:24:22'),
(90, 24, 'in process', 'on the way!', '2023-06-15 13:24:44'),
(91, 9, 'in process', 'on the way!', '2023-06-15 13:25:29'),
(92, 10, 'in process', 'on the way!', '2023-06-15 13:25:46'),
(93, 11, 'in process', 'on the way!', '2023-06-15 13:26:02'),
(94, 12, 'in process', 'on the way!', '2023-06-15 13:26:20'),
(95, 13, 'closed', 'pesanan terkirim', '2023-06-15 13:26:49'),
(96, 13, 'closed', 'pesanan terkirim', '2023-06-15 13:27:10'),
(97, 14, 'closed', 'pesanan terkirim', '2023-06-15 13:27:44'),
(98, 14, 'delivered', 'pesanan terkirim', '2023-06-15 13:28:56'),
(99, 15, 'delivered', 'pesanan terkirim', '2023-06-15 13:29:17'),
(100, 16, 'rejected', 'pesanan dibatalkan', '2023-06-15 13:29:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `u_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int(222) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `date`) VALUES
(39, 'vita', 'vita', 'dewi', 'vitadewi@gmail.com', '0895413228867', 'e10adc3949ba59abbe56e057f20f883e', 'Jl. Kali Bokor', 1, '2023-06-12 14:27:37'),
(40, 'cahya', 'cahya', 'fitri', 'cahyafitri@gmail.com', '0893214567889', 'e10adc3949ba59abbe56e057f20f883e', 'Jl. Medokan Asri', 1, '2023-06-12 14:27:37'),
(45, 'putri', 'pdl', 'pdl', 'putridia@gmail.com', '0895413239967', 'e10adc3949ba59abbe56e057f20f883e', 'Gresik', 1, '2023-06-11 23:30:29'),
(46, 'gading', 'gading', 'putri', 'gadingdnr@gmail.com', '085106161700', 'e10adc3949ba59abbe56e057f20f883e', 'Rungkut Medokan Jaya', 1, '2023-06-12 14:04:57'),
(47, 'indah', 'indah', 'sari', 'indahsari@gmail.com', '085733005991', 'e10adc3949ba59abbe56e057f20f883e', 'Jl. Wonorejo Selatan', 1, '2023-06-15 11:52:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_orders`
--

CREATE TABLE `users_orders` (
  `o_id` int(222) NOT NULL,
  `u_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `quantity` int(222) NOT NULL,
  `price` varchar(10) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `users_orders`
--

INSERT INTO `users_orders` (`o_id`, `u_id`, `title`, `quantity`, `price`, `status`, `date`) VALUES
(1, 45, 'Caffe Latte', 1, '23000', 'delivered', '2023-06-15 08:45:38'),
(2, 45, 'Chicken Karage Curry', 1, '30000', 'delivered', '2023-06-15 08:45:38'),
(3, 46, 'Tahu Walik', 1, '12000', 'rejected', '2023-06-12 16:51:59'),
(4, 46, 'Taro', 1, '20000', 'in process', '2023-06-12 23:53:49'),
(5, 39, 'Americano', 1, '18000', 'delivered', '2023-06-15 08:45:38'),
(7, 45, 'Tahu Walik', 2, '12000', 'in process', '2023-06-12 17:18:58'),
(8, 45, 'Taro', 1, '20000', 'in process', '2023-06-12 23:54:15'),
(9, 46, 'Chicken Karage Curry', 1, '30000', 'in process', '2023-06-15 13:25:29'),
(10, 46, 'Roti Bakar', 1, '13000', 'in process', '2023-06-15 13:25:46'),
(11, 46, 'Chicken Karage Curry', 1, '30000', 'in process', '2023-06-15 13:26:02'),
(12, 46, 'Roti Bakar', 1, '13000', 'in process', '2023-06-15 13:26:20'),
(14, 47, 'Yakult Semangka Milk', 1, '23000', 'delivered', '2023-06-15 13:28:56'),
(15, 47, 'Beef Yakiniku', 1, '32000', 'delivered', '2023-06-15 13:29:17'),
(16, 47, 'Risol Mayo', 1, '18000', 'rejected', '2023-06-15 13:29:44'),
(17, 40, 'Coffee Matcha', 1, '22000', 'in process', '2023-06-15 13:23:45'),
(18, 40, 'Expresso Caramel', 1, '22000', 'in process', '2023-06-15 13:24:05'),
(23, 40, 'Nasi Goreng', 1, '28000', 'in process', '2023-06-15 13:24:22'),
(24, 40, 'Chicken Karage Curry', 1, '30000', 'in process', '2023-06-15 13:24:44'),
(25, 39, 'Nasi Goreng', 1, '28000', NULL, '2023-06-15 13:32:21'),
(26, 45, 'Banana Vanilla Choco', 1, '23000', NULL, '2023-06-15 14:05:44'),
(27, 45, 'Bola Ubi', 1, '15000', NULL, '2023-06-15 14:07:29'),
(28, 45, 'Rujak Cireng', 1, '11000', NULL, '2023-06-15 14:12:22'),
(29, 45, 'Beef Yakiniku', 1, '32000', NULL, '2023-06-15 14:16:12'),
(30, 39, 'Coklat Lummer', 1, '16000', NULL, '2023-06-15 14:17:55'),
(31, 39, 'Jasmine Tea', 1, '19000', NULL, '2023-06-15 14:18:26');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indeks untuk tabel `admin_codes`
--
ALTER TABLE `admin_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`m_id`);

--
-- Indeks untuk tabel `menu_kategori`
--
ALTER TABLE `menu_kategori`
  ADD PRIMARY KEY (`mk_id`);

--
-- Indeks untuk tabel `remark`
--
ALTER TABLE `remark`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indeks untuk tabel `users_orders`
--
ALTER TABLE `users_orders`
  ADD PRIMARY KEY (`o_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `admin_codes`
--
ALTER TABLE `admin_codes`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `m_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `menu_kategori`
--
ALTER TABLE `menu_kategori`
  MODIFY `mk_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `remark`
--
ALTER TABLE `remark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `o_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

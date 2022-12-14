-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 03:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quickchat-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `image`) VALUES
(1, 'WhatsApp adalah aplikasi pesan instan paling populer, per September 2015', 'Yang pertama, tentang apa sih sebenarnya WhatsApp. WhatsApp adalah aplikasi pesan instan untuk smartphone, jika dilihat dari fungsinya WhatsApp hampir sama dengan aplikasi SMS yang biasa Anda pergunakan di ponsel lama. Tetapi WhatsApp tidak menggunakan pulsa, melainkan data internet. Jadi, di aplikasi ini sobat tak perlu khawatir soal panjang pendeknya karakter. Tidak ada batasan, selama data internet sobat memadai.\r\n\r\nMeskipun merupakan aplikasi pesan instan, ada yang unik dari WhatsApp. Jadi, sistem pengenalan kontak, verifikasi dan pengiriman pesan tetap dilakukan melalui nomor ponsel yang sudah terlebih dahulu didaftarkan. Cara ini berbeda dengan BBM yang menggunakan PIN, ataupun LINE yang selain nomor ponsel juga mendukung email, dan nama pengguna.', 'whatsapp.png'),
(2, 'Tips Menggunakan WhatsApp Business', 'WhatsApp Business adalah alat independen yang didesain untuk klien WhatsApp resmi. Tugasnya adalah mengelola berbagai proyek akun bisnis Anda sehingga pelanggan dapat berhubungan dengan bisnis Anda via obrolan WhatsApp. Satu-satunya syarat adalah Anda harus mendaftar untuk mendapatkan status WhatsApp Business resmi.\r\n\r\nMasukkan data untuk profil perusahaan Anda dalam aplikasi ini, termasuk area serta alamat surat (jika ada). Info lain muncul secara publik dalam tiap daftar. Anda juga dapat merespon pelanggan yang menghubungi Anda dan menjawab mereka dengan balasan otomatis.', '606ffd334abd3.jpg'),
(3, 'Promosi Lewat WhatsApp!', 'WhatsApp Marketing adalah tools pada aplikasi WhatsApp yang membantu bisnis memasarkan produk atau jasa. WA marketing cukup efektif untuk pemasaran dimana Anda dapat mengirimkan pesan promosi (berupa teks, gambar, video, suara atau file) hanya dengan koneksi internet.\r\n\r\nSelain pemasaran, WhatsApp juga membantu bisnis mengorganisir pesan dari pelanggan. Bahkan dari saluran bisnis lainnya yang terintegrasi dengan WhatsApp. Untuk dapat memanfaatkan WA Marketing, Anda perlu meningkatkan WhatsApp Business menjadi WhatsApp API.', '39773-ilustrasi-whatsapp-5-cara-keluar-grup-whatsapp-diam-diam-pixabay.jpg'),
(6, 'Article About Whatsapp', 'Test', 'whatsapp.png');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone_number`) VALUES
(1, 'Yovan Dermawan', 'yovan@mail.com', '082113433050'),
(2, 'Philipus Bara', 'bara@mail.com', '089172817291'),
(3, 'Hilda', 'hilda@mail.com', '0812984982374'),
(17, 'Yovan', 'yovanwota@gmail.com', '082113433050');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `title`, `description`, `type`) VALUES
(1, 'Whatsapp API Gateway', 'Kembangkan kebutuhan bisnis anda dengan Whatsapp gateway api kami secara cepat, stabil, dan tanpa server', 'Jumbotron'),
(3, 'Whatsapp Api Gateway Indonesia', 'Layanan Whatsapp Gateway berbasis Api yang dapat di integrasikan dengan aplikasi / database untuk berbagai kebutuhan seperti Kode OTP, Reminder, Chatbot (Pesan otomatis), dll.', 'About'),
(4, 'Dapatkan uji coba gratis selama 7 Hari', 'Kami akan mengirimkan Endpoint Api dan Token untuk dicoba selama 7 hari', 'Trial');

-- --------------------------------------------------------

--
-- Table structure for table `setting_prices`
--

CREATE TABLE `setting_prices` (
  `id` int(11) NOT NULL,
  `plan_name` varchar(100) NOT NULL,
  `price` varchar(30) NOT NULL,
  `discount` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting_prices`
--

INSERT INTO `setting_prices` (`id`, `plan_name`, `price`, `discount`) VALUES
(1, '1 Bulan', '25000', ''),
(2, '6 Bulan', '200000', ''),
(5, '12 Bulan', '300000', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(3, 'Admin Dev', 'admindev@mail.com', '$2y$10$5djbSjCVuKhcON4OrT3Fxud/y/YRveFl8RA9BVDyq8IzS51uHCTXm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_prices`
--
ALTER TABLE `setting_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `setting_prices`
--
ALTER TABLE `setting_prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

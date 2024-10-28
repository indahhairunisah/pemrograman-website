-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Okt 2024 pada 12.13
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `title`, `content`, `deskripsi`) VALUES
(2, 'Nama', 'Indah Hairunisah', ' Mahasiswa aktif semester 5 jurusan informatika di universitas pembangunan jaya yang memiliki minat di bidang teknologi informasi dan pengolahan data. Menyelesaikan pendidikan SMK jurusan rekayasa perangkat lunak dengan nilai yang memuaskan dan aktif berorganisasi maupun magang. Saya dikenal sebagai individu berorientasi pada detail, memiliki kemampuan memecahkan masalah yang baik, disiplin, komunikatif, mudah beradaptasi dan mampu bekerja secara efektif dalam tim maupun mandiri.'),
(3, 'Umur', '20 tahun', ''),
(4, 'Jenis Kelamin', 'Perempuan', ''),
(5, 'TTL', 'Tangerang, 08 Oktober 2024', ''),
(6, 'Alamat', 'Jl. Cendrawasih VII No 43, Sawah Baru', ''),
(7, 'Agama', 'Islam', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'Indah Hairunisah', 'indahhairunisah08@gmail.com ', 'Mari berteman', 'haii salam kenal ya indah', '2024-10-23 13:21:00'),
(2, 'indah', 'indahhairunisah08@gmail.com', '', 'halo', '2024-10-23 14:07:41'),
(3, 'indah', 'indahhairunisah08@gmail.com', '', 'halo', '2024-10-23 14:09:56'),
(4, 'indah', 'indahhairunisah08@gmail.com', '', 'halo', '2024-10-23 14:10:16'),
(5, 'indah', 'indahhairunisah08@gmail.com', '', 'halo', '2024-10-23 14:12:20'),
(6, 'indah', 'indahhairunisah08@gmail.com', '', 'halo', '2024-10-23 14:22:15'),
(7, 'indah', 'indahhairunisah08@gmail.com', '', 'halo', '2024-10-23 14:22:39'),
(8, 'indahh', 'indahhairunisah08@gmail.com', '', 'haii semangat yaa<3', '2024-10-23 14:31:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `experience`
--

INSERT INTO `experience` (`id`, `image`, `title`, `content`) VALUES
(1, 'images/sertif 1.jpg', 'Google Analytics', 'Sertifikat diberikan kepada INDAH HAIRUNISAH telah suskes menyelesaikan kursus \"Google Analytics Tingkat Lanjut\"'),
(2, 'images/sertif 2.jpeg', 'PT.NawaTech', 'Sertifikat diberikan kepada INDAH HAIRUNISAH telah melaksanakan PKL di PT.Nawa Darsana Teknologi selama 3 bulan.'),
(3, 'images/sertif 3.jpg', 'IT COM', 'Sertifikat diberikan kepada INDAH HAIRUNISAH atas partisipasinya sebagai panitia kegiatan IT COM.'),
(4, 'images/sertif 4.jpg', 'Google For Education', 'Sertifikat diberikan kepada INDAH HAIRUNISAH telah menyelesaikan kursus computer Science & mathematics'),
(5, 'images/sertif 5.jpg', 'Goa University', 'Sertifikat diberika kepada INDAH HAIRUNISAH telah berhasil mencapai score 100 pada quiz Cyber Security.'),
(6, 'images/sertif 6.jpg', 'Microsoft', 'Sertifikat diberika kepada INDAH HAIRUNISAH sukses menyelesaikan kursus Computer Science.'),
(7, 'images/sertif 10.jpg', 'Skill Front', 'Sertifikat diberika kepada INDAH HAIRUNISAH telah mendapatkan sertifikasi profesional di bidang Information Security Associate dari Skill Front.'),
(8, 'images/sertif 7.jpg', 'Olimpiade Matematika', 'Sertifikat diberika kepada INDAH HAIRUNISAH mendapatkan rank 12 pada mathematics di olimpiade ASEAN Student Science Olimpiad 2021.'),
(9, 'images/sertif 9.jpg', 'Olimpiade Informatika', 'Sertifikat diberika kepada INDAH HAIRUNISAH sebagai peserta dalam kegiatan olimpiade Informatika tingkat nasional.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `page_name` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `title`, `content`) VALUES
(1, 'home', 'Indah Hairunisah', 'And I\'am a\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `start_date` year(4) DEFAULT NULL,
  `status` enum('pending','in_progress','completed') DEFAULT 'pending',
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `description`, `start_date`, `status`, `image`) VALUES
(1, 'Desktop App Based Laboratory Inventory Management System', 'Proyek membuat aplikasi sistem manajemen Inventaris (E-Labventory) pada mata kuliah Pemrograman Berorientasi Objek menggunakan bahasa JAVA.', '2023', 'completed', 'images/java.jpeg'),
(2, 'Sistem Deteksi Penyakit Tumor dengan Pengolahan Citra Menggunakan Metode CNN', 'Pada project ini saya melakukan beberapa tahapan mulai dari pencarian dataset, normalisasi data, oversampling data, pembuatan model machine learning dan evaluasi menggunakan matriks konfusi.', '2023', 'completed', 'images/cnn (1).jpeg'),
(3, 'Rancang Bangun Kelainan Denyut Jantung Berbasis IoT Sebagai Pencegahan Dini Penyakit Aritmia', 'Proyek membuat alat pencegahan dini penyakit aritmia berbasis IoT menggunakan Nodemcu ESP8266, Pulse Sensor, LCD Oled 0,99\", Blynk, dan baterai 18650.', '2023', 'completed', 'images/aritmia.jpeg'),
(4, 'SHIP-ALERT (Smart Hazard Identification Protocol): Sistem Pintar Peringatan Kecelakaan Kapal tanpa Internet berbasis LoRa', 'Alat ini menggunakan ESP8266 sebagai mikrokontroler dan LoRa sebagai modul komunikasi untuk mengirimkan sinyal darurat nelayan di laut tanpa jaringan. Alat ini menggunakan frekuensi 433Mhz, bukan internet, untuk mengirim data.', '2023', 'completed', 'images/ship-alert.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

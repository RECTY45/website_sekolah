-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2025 at 01:28 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `morvin_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int NOT NULL,
  `judul_berita` varchar(200) NOT NULL,
  `isi_berita` varchar(2000) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul_berita`, `isi_berita`, `gambar`) VALUES
(1, 'Smp Terbaik Sedunia', 'Selamat datang di website Smk Muhammadiyah Wanasari Sebagai media informasi dan komunikasi web Smk Muhammadiyah Wanasari dibangun dan dikembangkan dalam rangka meningkatkan layanan sekolah kepada peserta didik orang tua masyarakat dan stakeholder Kualitas layanan menjadi salah satu misi sekolah dan kaitannya dengan transparansi dan akuntabilitas sekolah', '5dbd0dc5c02ce.jpg'),
(2, 'Smp Terbaik Sedunia', 'Selamat datang di website Smk Muhammadiyah Wanasari Sebagai media informasi dan komunikasi web Smk Muhammadiyah Wanasari dibangun dan dikembangkan dalam rangka meningkatkan layanan sekolah kepada peserta didik orang tua masyarakat dan stakeholder Kualitas layanan menjadi salah satu misi sekolah dan kaitannya dengan transparansi dan akuntabilitas sekolah', '5dbd0e28187a1.jpeg'),
(3, 'Smp Terbaik Sedunia', 'Selamat datang di website Smk Muhammadiyah Wanasari Sebagai media informasi dan komunikasi web Smk Muhammadiyah Wanasari dibangun dan dikembangkan dalam rangka meningkatkan layanan sekolah kepada peserta didik orang tua masyarakat dan stakeholder Kualitas layanan menjadi salah satu misi sekolah dan kaitannya dengan transparansi dan akuntabilitas sekolah', '5dbd0e7419fab.jpg'),
(4, 'Smp Terbaik Sedunia', 'Selamat datang di website Smk Muhammadiyah Wanasari Sebagai media informasi dan komunikasi web Smk Muhammadiyah Wanasari dibangun dan dikembangkan dalam rangka meningkatkan layanan sekolah kepada peserta didik orang tua masyarakat dan stakeholder Kualitas layanan menjadi salah satu misi sekolah dan kaitannya dengan transparansi dan akuntabilitas sekolah', '5dbd0e93437e5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int NOT NULL,
  `judul_blog` varchar(200) NOT NULL,
  `isi_blog` varchar(2000) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `judul_blog`, `isi_blog`, `gambar`) VALUES
(1, 'Smp Terbaik Sedunia', 'Berdiri sejak tahun 1975 semula adalah SMPP35 menjadi SMA Negeri 78 sejak tahun 1984 Sekolah yang berlokasi di Jl Bhakti IV1 Komplek Pajak Kemanggisan ini menjadi sekolah favorit di Jakarta Barat karena sumberdaya dan lokasinya yang strategis Dengan luas lahan lebih dari 10 ribu meter persegi dan saran laboratorium olahraga dan pendukung lainnya yang lengkap menjadi pusatkegiatan guru (PKG) utuk mata pelajaran sains', '5dbd760da0d9d.jpg'),
(2, 'Smp Terbaik Sedunia', 'Berdiri sejak tahun 1975 semula adalah SMPP35 menjadi SMA Negeri 78 sejak tahun 1984 Sekolah yang berlokasi di Jl Bhakti IV1 Komplek Pajak Kemanggisan ini menjadi sekolah favorit di Jakarta Barat karena sumberdaya dan lokasinya yang strategis Dengan luas lahan lebih dari 10 ribu meter persegi dan saran laboratorium olahraga dan pendukung lainnya yang lengkap menjadi pusatkegiatan guru (PKG) utuk mata pelajaran sains', '5dbd704c9615e.jpeg'),
(3, 'Smp Terbaik Sedunia', 'Berdiri sejak tahun 1975 semula adalah SMPP35 menjadi SMA Negeri 78 sejak tahun 1984 Sekolah yang berlokasi di Jl Bhakti IV1 Komplek Pajak Kemanggisan ini menjadi sekolah favorit di Jakarta Barat karena sumberdaya dan lokasinya yang strategis Dengan luas lahan lebih dari 10 ribu meter persegi dan saran laboratorium olahraga dan pendukung lainnya yang lengkap menjadi pusatkegiatan guru (PKG) utuk mata pelajaran sains', '5dbd74286e435.jpg'),
(4, 'Smp Terbaik Sedunia', 'Berdiri sejak tahun 1975 semula adalah SMPP35 menjadi SMA Negeri 78 sejak tahun 1984 Sekolah yang berlokasi di Jl Bhakti IV1 Komplek Pajak Kemanggisan ini menjadi sekolah favorit di Jakarta Barat karena sumberdaya dan lokasinya yang strategis Dengan luas lahan lebih dari 10 ribu meter persegi dan saran laboratorium olahraga dan pendukung lainnya yang lengkap menjadi pusatkegiatan guru (PKG) utuk mata pelajaran sains', '5dbd74bac8112.jpg'),
(6, 'Smp Terbaik Sedunia', 'Berdiri sejak tahun 1975 semula adalah SMPP35 menjadi SMA Negeri 78 sejak tahun 1984 Sekolah yang berlokasi di Jl Bhakti IV1 Komplek Pajak Kemanggisan ini menjadi sekolah favorit di Jakarta Barat karena sumberdaya dan lokasinya yang strategis Dengan luas lahan lebih dari 10 ribu meter persegi dan saran laboratorium olahraga dan pendukung lainnya yang lengkap menjadi pusatkegiatan guru (PKG) utuk mata pelajaran sains', '5dbd765ca4200.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `eskul`
--

CREATE TABLE `eskul` (
  `id` int NOT NULL,
  `eskul` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eskul`
--

INSERT INTO `eskul` (`id`, `eskul`) VALUES
(1, '1. Sepak Bola'),
(2, '2. Bola Volly'),
(3, '3. Takrow'),
(4, '4. Bola Basket'),
(5, '5. Silat'),
(6, '6. Karate'),
(7, '7. Pasus'),
(8, '8. Paskibra'),
(9, '9. Pramuka'),
(10, '10. Rohis &amp; Islam');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int NOT NULL,
  `galeri` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `galeri`, `keterangan`) VALUES
(1, '5dbe4e381c288.jpeg', 'Guru Terbaik'),
(2, '688287f8d397e.jpeg', 'Gedung Megah'),
(3, '5dbd3c844f56f.jpeg', 'Siswa Rapi'),
(4, '5dbd3c8c8310e.jpeg', 'Militeran'),
(5, '5dbd3c963df04.jpg', 'Conference'),
(6, '688288088d050.jpeg', 'Gedung Indah'),
(8, '5dbd3eead28c9.jpg', 'Guru TerbaikSedunia'),
(9, '5dbd3ef231167.jpg', 'Gedung Indah'),
(10, '5dbd3efad600a.jpg', 'Gedung Indah'),
(11, '5dbd3f03e19a4.jpg', 'Gedung Indah'),
(12, '5dbd3f0d9cd5c.jpeg', 'Gedung Indah'),
(13, '5dbd3f1b4a38b.jpg', 'Gedung Indah'),
(14, '5dbd3f244d008.jpeg', 'Siswa Keren'),
(17, '687dc090a9625.png', 'adawd');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int NOT NULL,
  `guru` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `guru`, `foto`) VALUES
(1, 'Supriyanti Sp.d', '5dbd7bd711b15.jpg'),
(2, 'Sudirno', '5dbd7bf4c2a81.jpg'),
(3, 'Supirno', '5dbd7c054413b.jpg'),
(4, 'Sutinah', '5dbd7c141768f.jpg'),
(5, 'Baginto', '5dbd7c22983a8.jpg'),
(6, 'Sutrisno', '5dbd7c349d98a.jpg'),
(7, 'Supriman', '5dbd7c48add8b.jpg'),
(8, 'Arun', '5dbd7e3ae8b18.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int NOT NULL,
  `judul_slogan` varchar(200) NOT NULL,
  `isi_slogan` varchar(200) NOT NULL,
  `gambar_slogan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `judul_slogan`, `isi_slogan`, `gambar_slogan`) VALUES
(1, 'Berkaryalah', 'Setiap Manusia Menginginkan Kesuksesan', '68828726987e2.jpeg'),
(2, 'Berkaryalah Untuk Sukses', 'Bahagiakan Orang Tua Mu', '6882877772b0c.jpeg'),
(3, 'Sekolah Untuk Masa Depan Mu', 'Belajarlah Untuk Menjadi Juara', '68828741a09e3.jpeg'),
(4, 'Semangat Walaupun Tidak Ada Yang Mendukungmu', 'Belajar Walau Engkau Dikenal Sebagai Anak Bodoh', '5dbd0af61dfaa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kepsek`
--

CREATE TABLE `kepsek` (
  `id` int NOT NULL,
  `nama` varchar(200) NOT NULL,
  `sambutan` varchar(500) NOT NULL,
  `foto_kepsek` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepsek`
--

INSERT INTO `kepsek` (`id`, `nama`, `sambutan`, `foto_kepsek`) VALUES
(1, 'Ir.Sudirjonomono', 'Assalamualaikum Warahmatullahi Wabarakaatuh.\r\nSalam sejahtera dan tetap semangat Selamat datang di website Smk Muhammadiyah Wanasari Sebagai media informasi dan komunikasi web Smk Muhammadiyah Wanasari dibangun dan dikembangkan dalam rangka meningkatkan layanan sekolah kepada peserta didik orang tua dan masyarakat Kualitas layanan menjadi salah satu misi sekolah dan kaitannya dengan transparansi dan akuntabilitas sekolah.', '5dbaeb7216b51.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id_pengaturan` int NOT NULL,
  `appname` varchar(100) NOT NULL,
  `copyright` varchar(255) DEFAULT NULL,
  `description` text,
  `keywords` text,
  `author` varchar(100) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id_pengaturan`, `appname`, `copyright`, `description`, `keywords`, `author`, `logo`, `updated_at`) VALUES
(1, 'SMP 25 MAKASSAR', '&copy; 2025 My Company', 'Default application description', 'app, default', 'Admin', 'logo_1753393555.png', '2025-07-24 21:45:55');

-- --------------------------------------------------------

--
-- Table structure for table `saranaprasarana`
--

CREATE TABLE `saranaprasarana` (
  `id` int NOT NULL,
  `isi` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saranaprasarana`
--

INSERT INTO `saranaprasarana` (`id`, `isi`) VALUES
(1, '1. 34 ruang belajar berbasis ICT dan berAC.'),
(2, '2. Laboratorium: Fisika, Kimia, Biologi, TIK, Bahasa, Seni, dan IPS.'),
(3, '3. Perpustakaan digital'),
(4, '4. lapangan olah raga: voly, basket, footsal, tenis meja, dan badminton;'),
(5, '5. Ruang serbaguna dan multimedia;'),
(6, '6. Masjid dan area parkir (motor dan mobil);'),
(7, '7. Wifi dan Hotspot seluruh area;'),
(8, '8. Greenhouse; dan Taman Toga'),
(9, '9. Ruang kegiatan siswa (OSIS, UKS) dan kantin.'),
(10, '10. Taman Luas Untuk Belajar');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id` int NOT NULL,
  `judul_sejarah` varchar(200) NOT NULL,
  `isi_sejarah` varchar(5000) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id`, `judul_sejarah`, `isi_sejarah`, `gambar`) VALUES
(1, 'Sejarah Smk Muhammadiyah Wanasari', 'Berdiri sejak tahun 1975 semula adalah SMPP35 menjadi SMA Negeri 78 sejak tahun 1984 Sekolah yang berlokasi di Jl Bhakti IV/1 Komplek Pajak Kemanggisan ini menjadi sekolah favorit di Jakarta Barat karena sumberdaya dan lokasinya yang strategis Dengan luas lahan lebih dari 10 ribu meter persegi dan saran laboratorium olahraga dan pendukung lainnya yang lengkap menjadi pusatkegiatan guru (PKG) utuk mata pelajaran sains Pilihan orangtua dan siswa untuk belajar di SMA Negeri 78 beralasan dengan kondisinya yang sangat kondusif Sebagai sekolah favorit terbukti dengan prestasinya yang menonjol baik pada bidang akademik maupun non akademik Untuk pertama kalinya Indoesia mengirimkan utusan pada Olimpiade Fisika Internasional tahun 1993 merupakan wakil dari siswa SMA 78 yaitu Oky Gunawan Sejak saat itu prestasi sekolah terus bertahan dan dikembangkan pada seluruh elemen sekolah termasuk guru dan pegawai Pada Tahun 2002 SMA Negeri 78 menerapkan kurikulum berbasis kompetensi (KBK) atas inisiatp sendiri Dengan pelaksnaaan mandiri KBK di sekolah pimpinan dan guru berupaya melaksanakan model pebelajaran yang kreatif aktif dan memaksimalkan pemberdayaan siswa dalam aktifitas pembelajaran Pada Tahun 2005 ditetapkan sebagai Sekolah Nasional Plus/Internasional membuka kelas internasional yang berafiliasi dengan UCIE sejak tahun 2006 bersamaan dengan penetapan sebagai RSBI (Rintisan Sekolah Bertaraf Internasional) Mulai tahun 2007 menerapkan sistem kredit semester (SKS) dengan sistem belajar Subject Based Classroom dan berbasis ICT Sejak tahun 2008 menjadi penyelenggara ujian internasional dari UCIE (University of Cambrridge International Examination) dengan ID 103.', '688287d2c1280.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int NOT NULL,
  `kelas` varchar(200) NOT NULL,
  `jumlah` int NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `kelas`, `jumlah`, `jenis`) VALUES
(1, 'Siswa Kelas VII', 100, 'vii'),
(2, 'Siswa Kelas VIII', 100, 'viii'),
(3, 'Siswa Kelas XI', 65, 'xi');

-- --------------------------------------------------------

--
-- Table structure for table `staf`
--

CREATE TABLE `staf` (
  `id` int NOT NULL,
  `staf` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staf`
--

INSERT INTO `staf` (`id`, `staf`, `foto`) VALUES
(1, 'Sukirno', '5dbd7ff0cb17b.jpg'),
(2, 'Sukirni', '5dbd8002d3ae2.jpg'),
(3, 'Trisno', '5dbd8012e6acf.jpg'),
(4, 'Adin', '5dbd8023a8bb0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','guru','siswa') NOT NULL DEFAULT 'siswa',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created_at`, `foto`) VALUES
(10, 'admin', '$2y$10$Yi1f.woM94ADFWRKq3ZDqu.GDdxIN7gA/3dBzEGOdWYQwZRGv4d4m', 'admin', '2025-07-25 00:08:18', '6882cfbdc6416.jpg'),
(14, 'meisya wulandari putri', '$2y$10$46Xw3fdBhON4bKtk0xPc7uHfVLlJg4RXGyjOXvf.KYepxcP4TeIK6', 'admin', '2025-07-25 00:39:52', '6882d25885be7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id` int NOT NULL,
  `visimisi` varchar(200) NOT NULL,
  `isi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id`, `visimisi`, `isi`) VALUES
(1, 'Visi', 'Kualitas layanan menjadi salah satu misi sekolah dan kaitannya dengan transparansi dan akuntabilitas sekolah'),
(2, 'Misi', 'Kualitas layanan menjadi salah satu misi sekolah dan kaitannya dengan transparansi dan akuntabilitas sekolahKualitas layanan menjadi salah satu misi sekolah dan kaitannya dengan transparansi dan akuntabilitas sekolah.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eskul`
--
ALTER TABLE `eskul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepsek`
--
ALTER TABLE `kepsek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id_pengaturan`);

--
-- Indexes for table `saranaprasarana`
--
ALTER TABLE `saranaprasarana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staf`
--
ALTER TABLE `staf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `eskul`
--
ALTER TABLE `eskul`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kepsek`
--
ALTER TABLE `kepsek`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id_pengaturan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `saranaprasarana`
--
ALTER TABLE `saranaprasarana`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staf`
--
ALTER TABLE `staf`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

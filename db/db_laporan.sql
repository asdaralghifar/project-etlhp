-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Mar 2021 pada 09.14
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laporan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_admin`
--

CREATE TABLE `table_admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_admin`
--

INSERT INTO `table_admin` (`username`, `password`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('admin1', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('admin2', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('admin3', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('kominfo', '03c7c0ace395d80182db07ae2c30f034', 'admin'),
('superadmin', '17c4520f6cfd1ab53d8745e84681eb49', 'superadmin'),
('superadmin1', '17c4520f6cfd1ab53d8745e84681eb49', 'superadmin'),
('superadmin2', '17c4520f6cfd1ab53d8745e84681eb49', 'superadmin'),
('superadmin3', '17c4520f6cfd1ab53d8745e84681eb49', 'superadmin'),
('superadmin4', '17c4520f6cfd1ab53d8745e84681eb49', 'superadmin'),
('superadmin5', '17c4520f6cfd1ab53d8745e84681eb49', 'superadmin'),
('superadmin6', '17c4520f6cfd1ab53d8745e84681eb49', 'superadmin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_arsip`
--

CREATE TABLE `table_arsip` (
  `nourut` int(11) NOT NULL,
  `nolhp` varchar(100) NOT NULL,
  `namaopd` varchar(100) NOT NULL,
  `uploadfile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_arsip`
--

INSERT INTO `table_arsip` (`nourut`, `nolhp`, `namaopd`, `uploadfile`) VALUES
(91, '700/LHP.12/lrbanWil-III/INSP/I/2021', 'SDN 20 Kendari', 'Pelajar tetap smart with islam.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_temuan`
--

CREATE TABLE `table_temuan` (
  `id` int(11) NOT NULL,
  `tahun_periksa` varchar(100) NOT NULL,
  `obyek` varchar(100) NOT NULL,
  `nolhp` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `jml_temuan` varchar(100) NOT NULL,
  `temuan` text NOT NULL,
  `n_temuan` varchar(100) NOT NULL,
  `kd_temuan` varchar(100) NOT NULL,
  `jml_rekom` varchar(100) NOT NULL,
  `rekom` text NOT NULL,
  `n_rekom` varchar(100) NOT NULL,
  `kd_rekom` varchar(100) NOT NULL,
  `jml_tl` varchar(100) NOT NULL,
  `tl` text NOT NULL,
  `n_tl` varchar(100) NOT NULL,
  `kd_tl` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `paraf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_temuan`
--

INSERT INTO `table_temuan` (`id`, `tahun_periksa`, `obyek`, `nolhp`, `tgl`, `jml_temuan`, `temuan`, `n_temuan`, `kd_temuan`, `jml_rekom`, `rekom`, `n_rekom`, `kd_rekom`, `jml_tl`, `tl`, `n_tl`, `kd_tl`, `keterangan`, `paraf`) VALUES
(77, '2021', 'SDN 21 KENDARI', '700/LHP.12/lrbanWil-III/INSP/I/2021', '2021-03-20', '', 'Terdapat kelebihan biaya penulisan ijazah kelas VI senilai Rp.155.000,-', '155000', '01.32', '', 'Kepada kepala sekolah SDN 5 Abeli agar segera memungut kelebihan biaya penulisan\r\n ijazah dan menyetorkan ke kas sekolah sebesar Rp.155.000,- dan bukti setorannya \r\ndiserahkan ke Inspektorat sebagai hasil tindak lanjut', '', '0.1.5', '', 'Telah ditindak lanjuti dengan bukti setoran pajak sebesar Rp.155.000,00', '', '0.01', 'selesai', ''),
(78, '2021', 'SDN 3 KOLAKA TIMUR', '700/LHP.12/KolTim/INSP/I/2021', '2021-03-10', '', 'x', '100000', '1.1', '', 'x', '', '1.2', '', 'x', '', '1.3', 'selesai', ''),
(79, '2021', 'SDN 3 KOLAKA TIMUR', '700/LHP.12/KolTim/INSP/I/2021', '2021-03-10', '', 'z', '20000', '2.1', '', 'z', '', '2.2', '', 'z', '', '3.3', 'selesai', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_utama`
--

CREATE TABLE `table_utama` (
  `obyek` varchar(100) NOT NULL,
  `nolhp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_utama`
--

INSERT INTO `table_utama` (`obyek`, `nolhp`) VALUES
('SDN 21 KENDARI', '700/LHP.12/lrbanWil-III/INSP/I/2021'),
('SDN 3 KOLAKA TIMUR', '700/LHP.12/KolTim/INSP/I/2021');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `table_admin`
--
ALTER TABLE `table_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `table_arsip`
--
ALTER TABLE `table_arsip`
  ADD PRIMARY KEY (`nourut`);

--
-- Indeks untuk tabel `table_temuan`
--
ALTER TABLE `table_temuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `table_utama`
--
ALTER TABLE `table_utama`
  ADD PRIMARY KEY (`obyek`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `table_arsip`
--
ALTER TABLE `table_arsip`
  MODIFY `nourut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT untuk tabel `table_temuan`
--
ALTER TABLE `table_temuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2024 pada 14.11
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbuas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbsiswa`
--

CREATE TABLE `tbsiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `umur` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `sosmed` varchar(50) NOT NULL,
  `alamat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbsiswa`
--

INSERT INTO `tbsiswa` (`id`, `nama`, `email`, `umur`, `jurusan`, `sosmed`, `alamat`) VALUES
(1, 'Muhammad Farel Putra Margianto', 'mfarelputram@gmail.com', '17', 'RPL ', '@Parreeell_55', 'Jl mastrip Gg kelengkeng'),
(2, 'Adhim Yusro As Shafaq', 'adhimyusroa@gmail.com', '18', 'RPL ', 'ess.s1x2', 'Jl bendi Gg semar'),
(3, 'Maulana Azka Pratama', 'mazka3112@gmail.com', '17', 'RPL', '@maulanaazkapratama', 'Jl serayu,perum griya asri'),
(4, 'Dafriza Cahya Anugrah', 'dafrizaanugrah@gmail.com', '18', 'RPL ', '@dafriza14', 'jl raya bromo 128'),
(5, 'Muhammad Arif Faizul Qubro', 'muhariffaizulqubro@gmail.com', '17', 'RPL ', '@faizuulll', 'Jl Sunan Ampel RT.2 RW. 7 Jrebeng Lor Kec. Kedopok 67238'),
(6, 'Trivaldo Aminullah', 'valdoaminullah@gmail.com', '18', 'RPL ', 'mas_palldo', 'Jl. Kh Hasan Bayusari 9 Rt/Rw 05/04 RT. RW. Kebonsari Wetan Kec. Kanigaran'),
(7, 'Reyhan Bhustami', 'reyhanbusthami47@gmail.com', '17', 'RPL ', 'reyhanbusthami_', 'Karang Sambi RT. 1 RW. 3 Dusun Karang Sambi Kareng Lor Kec. Kedopok 67228'),
(8, 'Muhammad Tamam Fatihul Ihsan', 'IHSANtamamihsan23@gmail.com', '18', 'RPL ', '@akulahtamam', 'Jl. Kh. Abdul Azis Gg. Gangsiran 78 RT. 3 RW. 14 Kebonsari Kulon Kec. Kanigaran 67214'),
(9, 'Habib Izzatur Rahman', 'RAHMANhabibizzaturrahman@gmail.com', '18', 'RPL ', 'habibizzatur', 'Jl. Lumajang,Perum. Rangga Permai,Blok A/07 RT. 1 RW. 8 Jrebeng Lor Kec. Kedopok 67237'),
(10, 'Stefanus Nathanael Putra Hermanto', 'nathanaelhp434@gmail.com', '17', 'RPL ', '@_stfnus', 'Jl. Serma Abd Rahman X1/ E-13 RT. 4 RW. 4 Wiroborang Wiroborang Kec. Mayangan 67216'),
(11, 'Martha Taufiq Qurrohman', 'thafaren05@gmail.com', '18', 'RPL ', '@aht_ramf', 'Dusun Krajan RT. 10 RW. 1 Krajan Kerpangan Kec. Leces 67273'),
(12, 'Yonita Nayla Agustina Putri', 'yonitap48@gmail.com', '18', 'RPL ', '@scnd_accyonita', 'Jl. Mayjend Hariyono X/118 RT. 7 RW. 3 Jati Kec. Mayangan 67217'),
(13, 'Malikal Ibni Sultana', 'malikal.sult@gmail.com', '18', 'RPL ', '@_mlkaal', 'Jl. Argopuro 18 RT. 4 RW. 0 Ketapang Kec. Kademangan 67222'),
(14, 'Dina Nur Fitriansyah', 'dinanurfitriansyah@gmailcom', '17', 'RPL ', '@night_pluvio', 'Perum Sti Blok Ii No 14 RT. 6 RW. 7 Sumbertaman Kec. Wonoasih 67237'),
(15, 'AMELLIA', 'lamel2923@gmail.com', '17', 'RPL ', '@liaaamelia_aa', 'Sunan Giri RT. 3 RW. 2 Sumber Tegalrejo Kec. Dringu 67271\r\n'),
(16, 'MOCHAMMAD SHOFYAN ALDIANSYAH', 'ALDIANSYAHmuhammadsofyanaldyansyah@gmail.com', '18', 'RPL ', '@aldyanzz	', 'Jl. Wr Supratman No.21/79E RT. 7 RW. 6 Jati Kec. Mayangan 67217\r\n'),
(17, 'MOCH.CHOIRUL FITRA UNTARA', 'fitrauntara57@gmail.com', '18', 'RPL ', '@fitrauntara27', 'Jln.Ronggojalu RT. 8 RW. 4 Dahlia Sumberagung Kec. Dringu 67271\r\n'),
(18, 'FEBRIANA EKA ARIFIYANTI', 'febrianaarifiyanti@gmail.com', '17', 'RPL ', '@anaa141723', 'Dusun Krajan RT. 28 RW. 11 Krajan Laweyan Kec. Sumberasih 67251\r\n'),
(19, 'RIRIN ASTUTIK', 'ririnastutik456@gmail.com', '18', 'RPL ', '@rrnasttk_	', 'Jl. Melon RT. 4 RW. 1 Kedopok Kec. Kedopok 67231'),
(20, 'HURIYATUL FIRDAUSIL MUMTIROH', 'hfirdausilmumtiroh@gmail.com', '17', 'RPL ', '@ffirdaa._', 'Mastrip Gg Pesantren RT. 2 RW. 2 Wonoasih Kec. Wonoasih 67232\r\n'),
(21, 'MOHAMMAD SANDI RISWANTINO', 'sandyriswantino1933@gmail.com', '18', 'RPL ', '@saaannnndd', 'Jl. Brantas Gg. A.Yani RT. 1 RW. 2 Kademangan Kec. Kademangan 67225\r\n'),
(22, 'RHASYA VANIA MAHARANI', 'rhasyavania@gmail.com', '17', 'RPL ', '@rhaaniaa	', 'Kh. Abd Hamid86 RT. 2 RW. 3 Jrebeng Lor Kec. Kedopok 67238'),
(23, 'AFIVA MAYLINDA', 'afivamay14@gmail.com', '17', 'RPL ', '@fvmylnd', 'Jl. Ir. H. Juanda 83 RT. 2 RW. 2 Tisnonegaran Kec. Kanigaran 67211\r\n'),
(24, 'RAFELLA CHELSA YANUAR', 'rafellachelsayanuar@gmail.com', '17', 'RPL ', '@fllachelsa_', 'Jl. Kali Melati RT. 2 RW. 1 Melati Pohsangit Kidul Kec. Kademangan 67225\r\n'),
(25, 'TRIHAYU PUTRININGRAT', 'putriningrat2007@gmail.com', '17', 'RPL ', '@putriningrat	', 'Jl. Mastrip Perumnas Blok C-04 RT. 5 RW. 4 Jrebeng Wetan Jrebeng Wetan Kec. Kedopok 67239');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbsiswa`
--
ALTER TABLE `tbsiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbsiswa`
--
ALTER TABLE `tbsiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

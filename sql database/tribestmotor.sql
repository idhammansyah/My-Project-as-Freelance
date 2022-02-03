-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 08:39 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tribestmotor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'idhammansyah', 'mansyahidham@gmail.com', '5edc0ddbf6093861f9ab982ba1e3a44c'),
(4, 'dafi', 'dafi@gmail.com', '2aae35ed78c2fc395400fad3fae2135a');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(255) NOT NULL,
  `namaproduk` varchar(255) NOT NULL,
  `jenisbarang` varchar(255) NOT NULL,
  `hargabarang` int(255) NOT NULL,
  `linktokped` varchar(255) NOT NULL,
  `linkshopee` varchar(255) NOT NULL,
  `linkbukalapak` varchar(255) NOT NULL,
  `linklazada` varchar(255) NOT NULL,
  `namabarang` varchar(255) NOT NULL,
  `ukuranbarang` varchar(255) NOT NULL,
  `tipebarang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `namaproduk`, `jenisbarang`, `hargabarang`, `linktokped`, `linkshopee`, `linkbukalapak`, `linklazada`, `namabarang`, `ukuranbarang`, `tipebarang`) VALUES
(1, 'Gantungan Barang (Warna Hitam)', 'Gantungan Barang Nmax', 50000, 'https://www.instagram.com/idhammansyah', '', '', '', 'BLACK-gantungan.png', '104904', 'image/png'),
(2, 'Gantungan Barang (Warna Biru)', 'Gantungan Barang Nmax', 50000, 'https://www.facebook.com', 'https://shopee.com', '', '', 'BLUE-gantungan.png', '53166', 'image/png'),
(3, 'Gantungan Barang (Warna Gold)', 'Gantungan Barang Nmax', 50000, '', '', '', '', 'GOLD-gantungan.png', '64487', 'image/png'),
(4, 'Gantungan Barang (Warna Merah)', 'Gantungan Barang Nmax', 50000, '', '', '', '', 'RED-gantungan.png', '56044', 'image/png'),
(5, 'Gantungan Barang (Warna Silver)', 'Gantungan Barang Nmax', 50000, '', '', '', '', 'SILVER-gantungan.png', '56575', 'image/png'),
(6, 'Gantungan Cabang (Warna Biru)', 'Gantungan Cabang', 50000, '', '', '', '', 'cabang_BLUE.png', '149339', 'image/png'),
(7, 'Gantungan Cabang (Warna Gold)', 'Gantungan Cabang', 50000, '', '', '', '', 'output-onlinepngtools(1).png', '414351', 'image/png'),
(8, 'Gantungan Cabang (Warna Merah)', 'Gantungan Cabang', 50000, '', '', '', '', 'cabang_RED.png', '145433', 'image/png'),
(9, 'Gantungan Cabang (All)', 'Gantungan Cabang CNC', 50000, '', '', '', '', 'All_Cabang_CNC.png', '204915', 'image/png'),
(10, 'Gantungan Twotone', 'Gantungan Twotone', 50000, '', '', '', '', 'output-onlinepngtools(2).png', '177868', 'image/png'),
(11, 'Gas Spontan 3 Tombol (Original)', 'Gas Spontan', 50000, '', '', '', '', 'output-onlinepngtools(3).png', '769326', 'image/png'),
(12, 'Gas Spontan 3 Tombol (Carbon)', 'Gas Spontan', 50000, '', '', '', '', 'output-onlinepngtools(4).png', '568373', 'image/png'),
(13, 'Gas Spontan (Carbon Polos)', 'Gas Spontan', 50000, '', '', '', '', 'gas_carbon_polos.png', '98776', 'image/png'),
(14, 'Gas Spontan (Polos)', 'Gas Spontan', 50000, '', '', '', '', 'output-onlinepngtools(5).png', '671706', 'image/png'),
(15, 'Handgrip Carbon (All)', 'Handgrip Motor', 50000, '', '', '', '', 'handgrip_carbon.png', '234646', 'image/png'),
(16, 'Handgrip Domino (All)', 'Handgrip Motor', 50000, '', '', '', '', 'handgrip_domino.png', '124833', 'image/png'),
(17, 'Handgrip Kitaco (All)', 'Handgrip Motor', 50000, '', '', '', '', 'handgrip_kitaco.png', '218969', 'image/png'),
(18, 'Handgrip Monster Jalu Panjang (All)', 'Handgrip Motor', 50000, '', '', '', '', 'jalu_panjang.png', '323952', 'image/png'),
(19, 'Handgrip Monster Motif CNC (All)', 'Handgrip Motor', 50000, '', '', '', '', 'motif_cnc.png', '370620', 'image/png'),
(20, 'Handle CNC (All)', 'Handle', 50000, '', '', '', '', 'handle_cnc.png', '214419', 'image/png'),
(21, 'Handle CNC Jupiter Z (Warna Biru)', 'Handle', 50000, '', '', '', '', 'handle jupiterZ_blue.png', '698648', 'image/png'),
(22, 'Handle CNC Jupiter Z (Warna Gold)', 'Handle', 50000, '', '', '', '', 'jupiterZ_gold.png', '625890', 'image/png'),
(23, 'Handle CNC Jupiter Z (Warna Merah)', 'Handle', 50000, '', '', '', '', 'jupiterZ_red.png', '633171', 'image/png'),
(24, 'Handle CNC Lipat 3D (All)', 'Handle', 50000, '', '', '', '', 'handle_cnc_lipat.png', '536341', 'image/png'),
(25, 'Handle CNC Supra X (All)', 'Handle', 50000, '', '', '', '', 'Handle_SupraX_ALL.png', '152789', 'image/png'),
(26, 'Handle CNC Twotone (All)', 'Handle', 50000, '', '', '', '', 'Handle_TwotoneCNC_all.png', '160454', 'image/png'),
(27, 'Handle Twotone (All)', 'Handle', 50000, '', '', '', '', 'Handle_Twotone.png', '93413', 'image/png'),
(28, 'Handle Twotone Aerox (All)', 'Handle', 50000, '', '', '', '', 'Handle_Twotone_AEROX.png', '154459', 'image/png'),
(29, 'Handle Twotone Mio (All)', 'Handle', 50000, '', '', '', '', 'Handle_Twotone_Mio.png', '142919', 'image/png'),
(30, 'Jalu AS Buah Naga Twotone', 'Jalu', 50000, '', '', '', '', 'jaluas_twotone.png', '218839', 'image/png'),
(31, 'Jalu AS Full Warna (Warna Biru)', 'Jalu', 50000, '', '', '', '', 'jaluas_BLUE.png', '160864', 'image/png'),
(32, 'Jalu AS Full Warna (Warna Gold)', 'Jalu', 50000, '', '', '', '', 'jaluas_GOLD.png', '192641', 'image/png'),
(33, 'Jalu AS Full Warna (Warna Merah)', 'Jalu', 50000, '', '', '', '', 'jaluas_RED.png', '158831', 'image/png'),
(34, 'Jalu AS Gazi (Warna Hitam)', 'Jalu', 50000, '', '', '', '', 'gazi_BLACK.png', '175999', 'image/png'),
(35, 'Jalu AS Gazi (Warna Biru)', 'Jalu', 50000, '', '', '', '', 'gazi_BLUE.png', '128911', 'image/png'),
(36, 'Jalu AS Gazi (Warna Gold)', 'Jalu', 50000, '', '', '', '', 'gazi_GOLD.png', '176804', 'image/png'),
(37, 'Jalu AS Gazi (Warna Merah)', 'Jalu', 50000, '', '', '', '', 'gazi_RED.png', '183571', 'image/png'),
(38, 'Jalu Pelindung Knalpot Jumbo (Warna Biru dan Merah)', 'Jalu', 50000, '', '', '', '', 'pelindung_BLUE RED.png', '233075', 'image/png'),
(39, 'Jalu Pelindung Knalpot Jumbo (Warna Gold dan Silver)', 'Jalu', 50000, '', '', '', '', 'pelindung_GOLD SILVER.png', '177341', 'image/png'),
(40, 'Jalu Pelindung Knalpot PromadBike', 'Jalu', 50000, '', '', '', '', 'pelindung_promadbike.png', '138213', 'image/png'),
(41, 'Jalu Pelindung Knalpot Segitiga (All)', 'Jalu', 50000, '', '', '', '', 'pelindung kenalpot segitiga_ALL 1.png', '134038', 'image/png'),
(42, 'Klakson Twintune', 'Klakson', 50000, '', '', '', '', 'klakson_twintune.png', '190734', 'image/png'),
(43, 'Klakson Echo 22 Suara (Warna Biru)', 'Klakson', 50000, '', '', '', '', 'echo_BLUE.png', '304038', 'image/png'),
(44, 'Klakson Echo 22 Suara (Warna Merah)', 'Klakson', 50000, '', '', '', '', 'echo_RED.png', '293200', 'image/png'),
(45, 'Klakson Speaker (All)', 'Klakson', 50000, '', '', '', '', 'speaker.png', '60385', 'image/png'),
(46, 'Klakson Standard Bebek', 'Klakson', 50000, '', '', '', '', 'standard.png', '178945', 'image/png'),
(47, 'Bohlam Stop Mata 3 (All)', 'Lampu Motor', 50000, '', '', '', '', 'stop3mata.png', '215098', 'image/png'),
(48, 'Bohlam Stop Mata 13 (All)', 'Lampu Motor', 50000, '', '', '', '', '13mata.png', '191971', 'image/png'),
(49, 'Lampu Depan CB 100', 'Lampu Motor', 50000, '', '', '', '', 'lampudepan_CB100.png', '337286', 'image/png'),
(50, 'Lampu Sein CB 100 (Varian 1)', 'Lampu Motor', 50000, '', '', '', '', 'sein 1.png', '182133', 'image/png'),
(51, 'Lampu Sein CB 100 (Varian 2)', 'Lampu Motor', 50000, '', '', '', '', 'sein 2.png', '180292', 'image/png'),
(52, 'Lampu Sein CB 100 (Varian 3)', 'Lampu Motor', 50000, '', '', '', '', 'sein 3.png', '174829', 'image/png'),
(53, 'Master Rem Brembo (All)', 'Master Rem', 50000, '', '', '', '', 'brembo_ALL.png', '207136', 'image/png'),
(54, 'Master Rem Brembo Kaca (Warna Biru)', 'Master Rem', 50000, '', '', '', '', 'kaca_BLUE.png', '88549', 'image/png'),
(55, 'Master Rem Brembo Kaca (Warna Gold)', 'Master Rem', 50000, '', '', '', '', 'kaca_GOLD.png', '94190', 'image/png'),
(56, 'Master Rem Brembo Kaca (Warna Merah)', 'Master Rem', 50000, '', '', '', '', 'kaca_RED.png', '83592', 'image/png'),
(57, 'Master Rem Brembo Kanan (All)', 'Master Rem', 50000, '', '', '', '', 'brembo kanan_ALL.png', '210882', 'image/png'),
(58, 'Master Rem P&B (Warna Hitam)', 'Master Rem', 50000, '', '', '', '', 'p&b_black.png', '844354', 'image/png'),
(59, 'Master Rem P&B (Warna Biru)', 'Master Rem', 50000, '', '', '', '', 'p&b_blue.png', '1029978', 'image/png'),
(60, 'Master Rem P&B (Warna Gold)', 'Master Rem', 50000, '', '', '', '', 'p&b_gold.png', '891865', 'image/png'),
(61, 'Master Rem P&B (Warna Merah)', 'Master Rem', 50000, '', '', '', '', 'p&b_red.png', '815409', 'image/png'),
(62, 'Monel Spion CNC (All)', 'Monel Spion', 50000, '', '', '', '', 'monel spion_all.png', '160307', 'image/png'),
(63, 'Monel Spion CNC Old (All)', 'Monel Spion', 50000, '', '', '', '', 'monelspion_old_all.png', '259775', 'image/png'),
(64, 'Piringan Cakram Besar Vario', 'Piringan Cakram', 50000, '', '', '', '', 'piringan besar_vario.png', '56659', 'image/png'),
(65, 'Piringan Cakram Besar Vixion', 'Piringan Cakram', 50000, '', '', '', '', 'VIXION 1.png', '364870', 'image/png'),
(66, 'Piringan Cakram Besar RXK', 'Piringan Cakram', 50000, '', '', '', '', 'RXK NEW.png', '363905', 'image/png'),
(67, 'Piringan Cakram Besar Byson', 'Piringan Cakram', 50000, '', '', '', '', 'BYSON 1.png', '322687', 'image/png'),
(68, 'Piringan Cakram Fast Way MegaPro', 'Piringan Cakram', 50000, '', '', '', '', 'MEGA PRO.png', '246035', 'image/png'),
(69, 'Piringan Cakram Fast Way RX-King', 'Piringan Cakram', 50000, '', '', '', '', 'MX KING.png', '240357', 'image/png'),
(70, 'Piringan Cakram Fast Way Ninja (Rear)', 'Piringan Cakram', 50000, '', '', '', '', 'NINJA REAR.png', '268821', 'image/png'),
(71, 'Piringan Cakram Fast Way Tiger', 'Piringan Cakram', 50000, '', '', '', '', 'TIGER.png', '243206', 'image/png'),
(72, 'Piringan Cakram Fast Way Vixion (Rear)', 'Piringan Cakram', 50000, '', '', '', '', 'VIXION REAR.png', '254907', 'image/png'),
(73, 'Piringan Cakram Fast Way Vixion', 'Piringan Cakram', 50000, '', '', '', '', 'VIXION.png', '207960', 'image/png'),
(74, 'Piringan Cakram Nissin Buta (Warna Black-Blue)', 'Piringan Cakram', 50000, '', '', '', '', 'BLACKBLUE.png', '200166', 'image/png'),
(75, 'Piringan Cakram Nissin Buta (Warna Black-Gold)', 'Piringan Cakram', 50000, '', '', '', '', 'BLACKGOLD.png', '205164', 'image/png'),
(76, 'Piringan Cakram Nissin Buta (Warna Black-Green)', 'Piringan Cakram', 50000, '', '', '', '', 'BLACKGREEN.png', '203261', 'image/png'),
(77, 'Piringan Cakram Nissin Buta (Warna Gold-Blue)', 'Piringan Cakram', 50000, '', '', '', '', 'GOLDBLUE.png', '206319', 'image/png'),
(78, 'Piringan Cakram Nissin Buta (Warna Gold-Green)', 'Piringan Cakram', 50000, '', '', '', '', 'GOLDGREEN.png', '194980', 'image/png'),
(79, 'Piringan Cakram Nissin Buta (Warna Silver-Blue)', 'Piringan Cakram', 50000, '', '', '', '', 'SILVERBLUE.png', '190569', 'image/png'),
(80, 'Piringan Cakram Nissin Buta (Warna Silver-Green)', 'Piringan Cakram', 50000, '', '', '', '', 'SILVERGREEN.png', '228906', 'image/png'),
(81, 'Piringan Cakram Nissin Lubang (Warna Hitam)', 'Piringan Cakram', 50000, '', '', '', '', 'BLACK-cakram.png', '180608', 'image/png'),
(82, 'Piringan Cakram Nissin Lubang (Warna Biru)', 'Piringan Cakram', 50000, '', '', '', '', 'BLUE-cakram.png', '205892', 'image/png'),
(83, 'Piringan Cakram Nissin Lubang (Warna Gold)', 'Piringan Cakram', 50000, '', '', '', '', 'GOLD-cakram.png', '190522', 'image/png'),
(84, 'Piringan Cakram Nissin Lubang (Warna Hijau)', 'Piringan Cakram', 50000, '', '', '', '', 'GREEN-cakram.png', '199043', 'image/png'),
(85, 'Piringan Cakram Nissin Lubang (Warna Ungu)', 'Piringan Cakram', 50000, '', '', '', '', 'PURPLE-cakram.png', '306899', 'image/png'),
(86, 'Piringan Cakram KLX', 'Piringan Cakram', 50000, '', '', '', '', '1.jpg', '109681', 'image/jpeg'),
(87, 'Plat Bordesk Aluminium (All)', 'Plat Bordesk', 50000, '', '', '', '', 'bordeskaluminium_ALL.png', '144705', 'image/png'),
(88, 'Plat Bordesk CNC 1 (All)', 'Plat Bordesk', 50000, '', '', '', '', 'bordeskcnc_ALL.png', '222256', 'image/png'),
(89, 'Plat Bordesk CNC 2 (All)', 'Plat Bordesk', 50000, '', '', '', '', 'bordeskcnc2_all.png', '289646', 'image/png'),
(90, 'Plat Bordesk TwoTone 1 (All)', 'Plat Bordesk', 50000, '', '', '', '', 'bordesk_twotone.png', '256401', 'image/png'),
(91, 'Plat Bordesk TwoTone 2 (All)', 'Plat Bordesk', 50000, '', '', '', '', 'Bordesk_Twotone.png', '187390', 'image/png'),
(92, 'Proguard Plastik (All)', 'Proguard', 50000, '', '', '', '', 'ProguardPlastic_all.png', '173348', 'image/png'),
(93, 'Proguard Robot TwoTone (All)', 'Proguard', 50000, '', '', '', '', 'proguardrobot_twotone.png', '238325', 'image/png'),
(94, 'Proguard TwoTone (All)', 'Proguard', 50000, '', '', '', '', 'Proguard_twotone.png', '402856', 'image/png'),
(95, 'Proguard Tulang (All)', 'Proguard', 50000, '', '', '', '', 'Proguardtulang.png', '110270', 'image/png'),
(96, 'Selang Rem 100cm x 130cm (All)', 'Selang Rem', 50000, 'http://tokopedia.com', '', '', '', 'selangrem_all.png', '196277', 'image/png'),
(97, 'Selang Tutup Oli', 'Selang Rem', 50000, '', '', '', '', 'selangtutupoli_all.png', '141254', 'image/png'),
(98, 'Shock Belakang Jupiter MX', 'ShockBreaker', 50000, '', '', '', '', 'shockbelakang_jupiterMX.png', '214687', 'image/png'),
(99, 'Shock Belakang Mio Pro Z', 'ShockBreaker', 50000, '', '', '', '', 'shockbelakang_mioProZ.png', '267430', 'image/png'),
(100, 'Shock Belakang Mio & Vario', 'ShockBreaker', 50000, '', '', '', '', 'Shock_mio+vario.png', '249248', 'image/png'),
(101, 'Shock Mio Z Series (All)', 'ShockBreaker', 50000, '', '', '', '', 'shock_mioZ_Series.png', '272510', 'image/png'),
(102, 'Shock Satria FU', 'ShockBreaker', 50000, '', '', '', '', 'shock_satria_FU.png', '200933', 'image/png'),
(103, 'Shock Tabung Depan', 'ShockBreaker', 50000, '', '', '', '', 'shocktabung_depan.png', '255809', 'image/png'),
(104, 'Shock Tabung Depan Blue X', 'ShockBreaker', 50000, '', '', '', '', 'shocktabung_blueX.png', '227457', 'image/png'),
(105, 'Shock Tabung Vario 330 (All)', 'ShockBreaker', 50000, '', '', '', '', 'shocktabung_vario.png', '324697', 'image/png'),
(106, 'Shock Tabung WP Mio & Vario', 'ShockBreaker', 50000, '', '', '', '', 'shocktabung_WP_MIO+vario.png', '210649', 'image/png'),
(107, 'Shock Vixion', 'ShockBreaker', 50000, '', '', '', '', 'shock_vixion.png', '207017', 'image/png'),
(108, 'Spion Batman (All)', 'Spion Motor', 50000, '', '', '', '', 'spion_batman_all.png', '148562', 'image/png'),
(109, 'Spion Bulat Carbon (All)', 'Spion Motor', 50000, '', '', '', '', 'spion_bulat_carbon.png', '181670', 'image/png'),
(110, 'Spion Bulat Carbon TwoTone(All)', 'Spion Motor', 50000, '', '', '', '', 'spionbulatcarbon_twotone.png', '260036', 'image/png'),
(111, 'Spion Bulat Jokowi (All)', 'Spion Motor', 50000, '', '', '', '', 'spionbulat_jokowi.png', '779663', 'image/png'),
(112, 'Spion Bulat Model Rizoma (All)', 'Spion Motor', 50000, '', '', '', '', 'model_rizoma_all.png', '361733', 'image/png'),
(113, 'Spion Carbon Tangkai Panjang Blue X', 'Spion Motor', 50000, '', '', '', '', 'BLUE X TANGKAI PANJANG.png', '187472', 'image/png'),
(114, 'Spion Carbon Blue & Silver (All)', 'Spion Motor', 50000, '', '', '', '', 'cabon blue silver.png', '86351', 'image/png'),
(115, 'Spion Carbon Honda Vario 150 (All)', 'Spion Motor', 50000, '', '', '', '', 'carbon vario150.png', '88971', 'image/png'),
(116, 'Spion Carbon R25, R15, Nmax, CBR Panjang', 'Spion Motor', 50000, '', '', '', '', 'spion carbon r25_r15_nmax_cbr_panjang.png', '139957', 'image/png'),
(117, 'Spion Carbon R25, R15, Nmax, CBR Pendek', 'Spion Motor', 50000, '', '', '', '', 'pendek.png', '161992', 'image/png'),
(118, 'Spion Carbon Tangkai Panjang TwoTone', 'Spion Motor', 50000, '', '', '', '', 'carbon_tangkaiPanjang.png', '166089', 'image/png'),
(119, 'Spion Carbon Tangkai Pendek Blue X', 'Spion Motor', 50000, '', '', '', '', 'output-onlinepngtools.png', '552758', 'image/png'),
(120, 'Spion Carbon Tangkai Pendek TwoTone', 'Spion Motor', 50000, '', '', '', '', 'TWOTONE TANGKAI PENDEK 2.png', '169075', 'image/png'),
(121, 'Spion Chrome Mio', 'Spion Motor', 50000, '', '', '', '', 'spion_chrome_mio.png', '198781', 'image/png'),
(122, 'Spion Jalu Bulat', 'Spion Motor', 50000, '', '', '', '', 'jalu_bulat_spion.png', '65546', 'image/png'),
(123, 'Spion Chrome Vario', 'Spion Motor', 50000, '', '', '', '', 'chrome_vario.png', '197657', 'image/png'),
(124, 'Spion Jalu Bulat Lipat', 'Spion Motor', 50000, '', '', '', '', 'jalu_bulat_lipat.png', '239740', 'image/png'),
(125, 'Spion Jalu Bulat Lipat TwoTone', 'Spion Motor', 50000, '', '', '', '', 'bulat_lipat_twotone.png', '274645', 'image/png'),
(126, 'Spion Jalu Bulat PromadBike', 'Spion Motor', 50000, '', '', '', '', 'promadbike_bulat.png', '237531', 'image/png'),
(127, 'Spion Jalu Oval Carbon', 'Spion Motor', 50000, '', '', '', '', 'spion_oval_carbon.png', '227370', 'image/png'),
(128, 'Spion Jalu Oval Polos', 'Spion Motor', 50000, '', '', '', '', 'oval_polos.png', '189646', 'image/png'),
(129, 'Spion Jalu Bulat Proguard TwoTone', 'Spion Motor', 50000, '', '', '', '', 'proguard_twotone_spion.png', '174665', 'image/png'),
(130, 'Spion R25, R15, CBR', 'Spion Motor', 50000, '', '', '', '', 'spion r25_r15_cbr.png', '196509', 'image/png'),
(131, 'Spion Tomok Carbon TwoTone', 'Spion Motor', 50000, '', '', '', '', 'tomok_carbon_twotone.png', '219518', 'image/png'),
(132, 'Spion Tomok TwoTone', 'Spion Motor', 50000, '', '', '', '', 'tomok_twotone.png', '137047', 'image/png'),
(133, 'Spion Tomok V2', 'Spion Motor', 50000, '', '', '', '', 'tomokcarbonv2_all.png', '171771', 'image/png'),
(134, 'Spion Tomok V2 TwoTone', 'Spion Motor', 50000, '', '', '', '', 'tomoktwotonev2_all.png', '154849', 'image/png'),
(135, 'Spion Tomok V5', 'Spion Motor', 50000, '', '', '', '', 'tomokv5_all.png', '192674', 'image/png'),
(136, 'Spion Vespa Mini', 'Spion Motor', 50000, '', '', '', '', 'vespa_mini.png', '168208', 'image/png'),
(137, 'Jalu Stang CNC (All)', 'Stang Motor', 50000, '', '', '', '', 'jalustang_cnc.png', '188659', 'image/png'),
(138, 'Kleman V', 'Stang Motor', 50000, '', '', '', '', 'klemanV_all.png', '219595', 'image/png'),
(139, 'Raiser Stang CNC (Warna Biru)', 'Stang Motor', 50000, '', '', '', '', 'raiser_cnc_blue.png', '106364', 'image/png'),
(140, 'Raiser Stang CNC (Warna Merah)', 'Stang Motor', 50000, '', '', '', '', 'raiser_cnc_red.png', '92538', 'image/png'),
(141, 'Raiser Stang CNC (Warna Putih)', 'Stang Motor', 50000, '', '', '', '', 'raiser_cnc_white.png', '76493', 'image/png'),
(142, 'Raiser Stang CNC (Warna Kuning)', 'Stang Motor', 50000, '', '', '', '', 'raiser_cnc_yellow.png', '96839', 'image/png'),
(143, 'Raiser Stang Full CNC (Warna Merah)', 'Stang Motor', 50000, '', '', '', '', 'stang fullcnc_red.png', '114536', 'image/png'),
(144, 'Raiser Stang Full CNC (Warna Kuning)', 'Stang Motor', 50000, '', '', '', '', 'stang fullcnc_yellow.png', '118615', 'image/png'),
(145, 'Raiser Stang Full CNC (Warna Hitam)', 'Stang Motor', 50000, '', '', '', '', 'stangfullcnc_black.png', '98671', 'image/png'),
(146, 'Raiser Stang Full CNC (Warna Putih)', 'Stang Motor', 50000, '', '', '', '', 'stangfullcnc_white.png', '83853', 'image/png'),
(147, 'Stabilizer Stang', 'Stang Motor', 50000, '', '', '', '', 'stabilizerstang_all.png', '193637', 'image/png'),
(148, 'Tabung Master Rem (Warna Hitam)', 'Tutup Minyak Rem', 50000, '', '', '', '', 'tabungmasterrem_BLACK.png', '88679', 'image/png'),
(149, 'Tabung Master Rem (Warna Biru)', 'Tutup Minyak Rem', 50000, '', '', '', '', 'tabungmasterrem_BLUE.png', '83909', 'image/png'),
(150, 'Tabung Master Rem (Warna Gold)', 'Tutup Minyak Rem', 50000, '', '', '', '', 'tabungmasterrem_GOLD.png', '111546', 'image/png'),
(151, 'Tabung Master Rem (Warna Merah)', 'Tutup Minyak Rem', 50000, '', '', '', '', 'tabungmasterrem_RED.png', '112861', 'image/png'),
(152, 'Tutup Minyak Rem', 'Tutup Minyak Rem', 50000, '', '', '', '', 'TUTUP.png', '93612', 'image/png'),
(153, 'Tutup Minyak Rem (All)', 'Tutup Minyak Rem', 50000, '', '', '', '', 'tutupminyakrem_all.png', '6344', 'image/png'),
(154, 'Tutup Minyak Rem Tabung Kaca (All)', 'Tutup Minyak Rem', 50000, '', '', '', '', 'tutupminyakremtabung_all.png', '153991', 'image/png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_kategori` int(100) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Gantungan Motor'),
(2, 'Gas Spontan Motor'),
(3, 'Handgrip Motor'),
(4, 'Handle Motor'),
(5, 'Jalu Motor'),
(6, 'Klakson Motor'),
(7, 'Lampu Motor'),
(8, 'Master Rem Motor'),
(9, 'Monel Spion Motor'),
(10, 'Piringan Cakram Motor'),
(11, 'Plat Boardesk Motor'),
(12, 'Progard Motor'),
(13, 'Selang Motor'),
(14, 'Shockbreaker Motor'),
(15, 'Spion Motor'),
(16, 'Stang Motor'),
(17, 'Tutup Minyak Rem Motor');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `id_statistik` int(200) NOT NULL,
  `ip` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(10) NOT NULL,
  `online` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`id_statistik`, `ip`, `tanggal`, `hits`, `online`) VALUES
(1, '127.0.0.1', '2021-01-11', 8, '1610376857'),
(2, '127.0.0.1', '2021-01-14', 2, '1610598074'),
(3, '127.0.0.1', '2021-01-16', 1, '1610760331'),
(4, '127.0.0.1', '2021-01-19', 1, '1611070773'),
(5, '127.0.0.1', '2021-01-20', 1, '1611116825');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `gambar` ADD FULLTEXT KEY `namaproduk` (`namaproduk`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori`);
ALTER TABLE `kategori_produk` ADD FULLTEXT KEY `nama_kategori` (`nama_kategori`);

--
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id_statistik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_kategori` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id_statistik` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

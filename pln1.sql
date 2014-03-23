-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 19, 2011 at 07:31 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pln1`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE IF NOT EXISTS `t_admin` (
  `id_admin` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16121991 ;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`id_admin`, `nama`, `password`, `address`, `type`) VALUES
(300384, 'prima', 'prima', 'Jl. Teuku Umar No 19', 'ps'),
(290461, 'siswojo', 'siswojo', 'Jl. Panglima Sudirman No. 16', 'p2tl'),
(211057, 'siswanto', 'siswanto', 'Jl. Gajah Mada No. 112', 'meterlistrik'),
(171180, 'arifiyanti', 'arifiyanti', 'Jl. Basuki Rahmat No. 2', 'keluhan');

-- --------------------------------------------------------

--
-- Table structure for table `t_feedback`
--

CREATE TABLE IF NOT EXISTS `t_feedback` (
  `id_feedback` int(3) NOT NULL AUTO_INCREMENT,
  `id_prt` varchar(30) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `pesan` varchar(1000) NOT NULL,
  `isi` varchar(2000) NOT NULL,
  `tgl_feedback` date NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'tutup',
  PRIMARY KEY (`id_feedback`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=99 ;

--
-- Dumping data for table `t_feedback`
--

INSERT INTO `t_feedback` (`id_feedback`, `id_prt`, `judul`, `pesan`, `isi`, `tgl_feedback`, `status`) VALUES
(98, '518040584665', 'P2TL', 'Kepada Yang terhormat Saudara : Kiswo <br>\r\n	Daya listrik yang anda gunakan sebesar : 900 VA<br>\r\n	Uraian pemutusan : petugas yang terhormat saya sudah membayar p2tl tapi listrik belum kembali menyala lagi.\r\nmohon penindakan lebih lanjut<br>\r\n	Tanggal lapor diputus oleh PLN pada : 2011-08-15<br><br> ', 'saudara kiswo denda yang harus di bayar sejumlah Rp 200000 tapi saudara masih membayar sejumlah 150000 jadi masih dalam masa tunggakan.<br>segera dilunas agar listrik bisa kembali menyala<br> ', '2011-08-15', 'buka'),
(97, '518040584665', 'PS', 'Kepada Yang terhormat Saudara : Kiswo <br>\r\n	bertempat tinggal di :  Ds. Kepuhbaro RT06 RW02 <br>\r\n	Dengan tarif : R1 <br>\r\n	Daya listrik yang anda dirumah sekarang : 900 VA<br>\r\n	Daya listrik yang anda inginkan untuk dipasang : 150<br>\r\n	Dengan pemohon : lila <br> \r\n	Dengan keperluan : Digunakan untuk acara pernikahan<br> \r\n	dari tanggal : 2011-08-17<br>\r\n	sampai tanggal : 2011-08-19', 'terimakasih atas layanan inputnya. permintaan akan di proses. dan biaya yang harus di bayar sebesar Rp. 1500000. PIn penyambungan sementara adalah 30108133. silahkan melakukan pembayaran di bank dengan menyertakan PIN penyambungan sementara<br>terima kasih<br> ', '2011-08-15', 'buka'),
(96, '518040584665', 'PS', 'Kepada Yang terhormat Saudara : Kiswo <br>\r\n	bertempat tinggal di :  Ds. Kepuhbaro RT06 RW02 <br>\r\n	Dengan tarif : R1 <br>\r\n	Daya listrik yang anda dirumah sekarang : 900 VA<br>\r\n	Daya listrik yang anda inginkan untuk dipasang : 80<br>\r\n	Dengan pemohon : tika <br> \r\n	Dengan keperluan : Digunakan untuk acara pernikahan<br> \r\n	dari tanggal : 2011-08-09<br>\r\n	sampai tanggal : 2011-08-11', 'layanan penyambungan sementara akan kami proses.<br>total biaya yang harus dibayar sebesar Rp. 150.000,00<br>dengan PIN penyambungan sementara 30108384.<br>silahkan melakukan pembayaran di bank PPA2T yaitu BNI, BRI, Bukopin, OCBC NISP ataupun ke kantor pos. dengan menyertakan PIN penyambungan sementara pada saat membayar<br> ', '2011-08-14', 'buka');

-- --------------------------------------------------------

--
-- Table structure for table `t_grafik`
--

CREATE TABLE IF NOT EXISTS `t_grafik` (
  `id_grafik` int(30) NOT NULL AUTO_INCREMENT,
  `kecamatan` varchar(30) NOT NULL,
  `penyambungan_sementara` int(30) NOT NULL,
  `p2tl` int(30) NOT NULL,
  `keluhan` int(30) NOT NULL,
  `meter_listrik` int(30) NOT NULL,
  PRIMARY KEY (`id_grafik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `t_grafik`
--

INSERT INTO `t_grafik` (`id_grafik`, `kecamatan`, `penyambungan_sementara`, `p2tl`, `keluhan`, `meter_listrik`) VALUES
(1, 'Kanor', 0, 0, 0, 0),
(2, 'Kapas', 0, 0, 0, 0),
(3, 'Malo', 0, 0, 1, 0),
(4, 'Dander', 0, 0, 0, 0),
(5, 'Tambakrejo', 0, 0, 0, 0),
(6, 'Sumberejo', 0, 0, 0, 0),
(7, 'Trucuk', 0, 0, 0, 0),
(8, 'Gondang', 0, 0, 0, 0),
(9, 'Sugihwaras', 0, 0, 0, 0),
(10, 'Kasiman', 0, 0, 0, 0),
(11, 'Ngambon', 0, 0, 0, 0),
(12, 'Kedungadem', 0, 0, 0, 1),
(13, 'Temayang', 1, 0, 0, 0),
(14, 'Sekar', 0, 0, 0, 0),
(15, 'Balen', 0, 0, 0, 0),
(16, 'Ngasem', 0, 0, 0, 0),
(17, 'Purwosari', 0, 0, 0, 0),
(18, 'Kepuhbaru', 3, 1, 1, 0),
(19, 'Ngraho', 0, 0, 0, 0),
(20, 'Kadewan', 0, 0, 0, 0),
(21, 'Bojonegoro', 1, 1, 3, 0),
(22, 'Kalitidu', 0, 0, 0, 0),
(23, 'Bubulan', 0, 0, 0, 0),
(24, 'Baureno', 0, 0, 0, 0),
(25, 'Padangan', 0, 0, 0, 0),
(26, 'Sukosewu', 0, 0, 0, 0),
(27, 'Margomulyo', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_keluhan`
--

CREATE TABLE IF NOT EXISTS `t_keluhan` (
  `id_keluhan` int(3) NOT NULL AUTO_INCREMENT,
  `id_prt` varchar(12) NOT NULL,
  `tgl_keluhan` date NOT NULL,
  `uraian` text NOT NULL,
  `penanganan` varchar(50) NOT NULL DEFAULT 'belum',
  PRIMARY KEY (`id_keluhan`),
  KEY `id_prt` (`id_prt`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `t_keluhan`
--

INSERT INTO `t_keluhan` (`id_keluhan`, `id_prt`, `tgl_keluhan`, `uraian`, `penanganan`) VALUES
(68, '518040584665', '2011-08-14', 'terjadi kebakaran kabel listrik di Ds kepohbaru RT05 RW02. mohon perbaikanya ^^', 'belum'),
(69, '518011636686', '2011-08-10', 'Mohon pengecekanya gardu listrik di Desa Malo dekat toko UD sumber jaya  memercikan api kecil', 'belum'),
(70, '518010036365', '2011-08-19', 'coba2', 'belum'),
(71, '518010036365', '2011-08-20', 'coba 2', 'belum'),
(72, '518010036365', '2011-08-20', 'coba3', 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `t_laporan`
--

CREATE TABLE IF NOT EXISTS `t_laporan` (
  `id_laporan` int(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `penyambungan_sementara` int(30) NOT NULL,
  `p2tl` int(30) NOT NULL,
  `keluhan` int(30) NOT NULL,
  `meter_listrik` int(30) NOT NULL,
  `tgl_laporan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_laporan`
--

INSERT INTO `t_laporan` (`id_laporan`, `kecamatan`, `penyambungan_sementara`, `p2tl`, `keluhan`, `meter_listrik`, `tgl_laporan`) VALUES
(0, 'Kanor', 0, 0, 0, 0, '2011-08-19'),
(0, 'Kapas', 0, 0, 0, 0, '2011-08-19'),
(0, 'Malo', 0, 0, 1, 0, '2011-08-19'),
(0, 'Dander', 0, 0, 0, 0, '2011-08-19'),
(0, 'Tambakrejo', 0, 0, 0, 0, '2011-08-19'),
(0, 'Sumberejo', 0, 0, 0, 0, '2011-08-19'),
(0, 'Trucuk', 0, 0, 0, 0, '2011-08-19'),
(0, 'Gondang', 0, 0, 0, 0, '2011-08-19'),
(0, 'Sugihwaras', 0, 0, 0, 0, '2011-08-19'),
(0, 'Kasiman', 0, 0, 0, 0, '2011-08-19'),
(0, 'Ngambon', 0, 0, 0, 0, '2011-08-19'),
(0, 'Kedungadem', 0, 0, 0, 1, '2011-08-19'),
(0, 'Temayang', 1, 0, 0, 0, '2011-08-19'),
(0, 'Sekar', 0, 0, 0, 0, '2011-08-19'),
(0, 'Balen', 0, 0, 0, 0, '2011-08-19'),
(0, 'Ngasem', 0, 0, 0, 0, '2011-08-19'),
(0, 'Purwosari', 0, 0, 0, 0, '2011-08-19'),
(0, 'Kepuhbaru', 3, 1, 1, 0, '2011-08-19'),
(0, 'Ngraho', 0, 0, 0, 0, '2011-08-19'),
(0, 'Kadewan', 0, 0, 0, 0, '2011-08-19'),
(0, 'Bojonegoro', 1, 1, 3, 0, '2011-08-19'),
(0, 'Kalitidu', 0, 0, 0, 0, '2011-08-19'),
(0, 'Bubulan', 0, 0, 0, 0, '2011-08-19'),
(0, 'Baureno', 0, 0, 0, 0, '2011-08-19'),
(0, 'Padangan', 0, 0, 0, 0, '2011-08-19'),
(0, 'Sukosewu', 0, 0, 0, 0, '2011-08-19'),
(0, 'Margomulyo', 0, 0, 0, 0, '2011-08-19'),
(0, 'Kanor', 0, 0, 0, 0, '2011-08-20'),
(0, 'Kapas', 0, 0, 0, 0, '2011-08-20'),
(0, 'Malo', 0, 0, 1, 0, '2011-08-20'),
(0, 'Dander', 0, 0, 0, 0, '2011-08-20'),
(0, 'Tambakrejo', 0, 0, 0, 0, '2011-08-20'),
(0, 'Sumberejo', 0, 0, 0, 0, '2011-08-20'),
(0, 'Trucuk', 0, 0, 0, 0, '2011-08-20'),
(0, 'Gondang', 0, 0, 0, 0, '2011-08-20'),
(0, 'Sugihwaras', 0, 0, 0, 0, '2011-08-20'),
(0, 'Kasiman', 0, 0, 0, 0, '2011-08-20'),
(0, 'Ngambon', 0, 0, 0, 0, '2011-08-20'),
(0, 'Kedungadem', 0, 0, 0, 1, '2011-08-20'),
(0, 'Temayang', 1, 0, 0, 0, '2011-08-20'),
(0, 'Sekar', 0, 0, 0, 0, '2011-08-20'),
(0, 'Balen', 0, 0, 0, 0, '2011-08-20'),
(0, 'Ngasem', 0, 0, 0, 0, '2011-08-20'),
(0, 'Purwosari', 0, 0, 0, 0, '2011-08-20'),
(0, 'Kepuhbaru', 3, 1, 1, 0, '2011-08-20'),
(0, 'Ngraho', 0, 0, 0, 0, '2011-08-20'),
(0, 'Kadewan', 0, 0, 0, 0, '2011-08-20'),
(0, 'Bojonegoro', 1, 1, 2, 0, '2011-08-20'),
(0, 'Kalitidu', 0, 0, 0, 0, '2011-08-20'),
(0, 'Bubulan', 0, 0, 0, 0, '2011-08-20'),
(0, 'Baureno', 0, 0, 0, 0, '2011-08-20'),
(0, 'Padangan', 0, 0, 0, 0, '2011-08-20'),
(0, 'Sukosewu', 0, 0, 0, 0, '2011-08-20'),
(0, 'Margomulyo', 0, 0, 0, 0, '2011-08-20');

-- --------------------------------------------------------

--
-- Table structure for table `t_meterlistrik`
--

CREATE TABLE IF NOT EXISTS `t_meterlistrik` (
  `id_meterlistrik` int(3) NOT NULL AUTO_INCREMENT,
  `id_prt` varchar(12) NOT NULL,
  `stand_meter_rmh` varchar(30) NOT NULL,
  `tgl_lapor_meter` date NOT NULL,
  `penanganan` varchar(50) NOT NULL DEFAULT 'belum',
  PRIMARY KEY (`id_meterlistrik`),
  KEY `id_prt` (`id_prt`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `t_meterlistrik`
--

INSERT INTO `t_meterlistrik` (`id_meterlistrik`, `id_prt`, `stand_meter_rmh`, `tgl_lapor_meter`, `penanganan`) VALUES
(11, '518010549208', '341700-344800', '2011-08-11', 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `t_p2tl`
--

CREATE TABLE IF NOT EXISTS `t_p2tl` (
  `id_p2tl` int(3) NOT NULL AUTO_INCREMENT,
  `id_prt` varchar(12) NOT NULL,
  `uraian_putus` text NOT NULL,
  `tgl_putus` date NOT NULL,
  `penanganan` varchar(50) NOT NULL DEFAULT 'belum',
  PRIMARY KEY (`id_p2tl`),
  KEY `id_prt` (`id_prt`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `t_p2tl`
--

INSERT INTO `t_p2tl` (`id_p2tl`, `id_prt`, `uraian_putus`, `tgl_putus`, `penanganan`) VALUES
(26, '518040584665', 'petugas yang terhormat saya sudah membayar p2tl tapi listrik belum kembali menyala lagi.\r\nmohon penindakan lebih lanjut', '2011-08-15', 'sudah'),
(25, '518010036365', 'Putugas Yth.\r\nsaya kemarin sudah membayar denda dari tindak pemutusan. kenapa sampai hari ini listrik belum nyala juga. \r\nmohon tindak lanjutnya', '2011-08-11', 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `t_post`
--

CREATE TABLE IF NOT EXISTS `t_post` (
  `id_post` int(30) NOT NULL AUTO_INCREMENT,
  `id_admin` int(7) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `tgl_post` date NOT NULL,
  PRIMARY KEY (`id_post`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `t_post`
--

INSERT INTO `t_post` (`id_post`, `id_admin`, `judul`, `isi`, `kategori`, `tgl_post`) VALUES
(18, 451990, 'Potret Energi Semester-1 2011 dan Prognosa Sampai Akhir 2011', 'Energi yang \r\ndibangkitkan pada semester-1 2011 adalah 88,2 TWh. Bila dibandingkan \r\ndengan semester-1 2010, terjadi kenaikan 6,3%. Volume batubara yang \r\ndibakar (di pembangkit milik PLN maupun IPP) 19 juta ton. Dibandingkan \r\nsemester-1 2010, naik 12%. Volume gas yang dibakar di pembangkit PLN \r\nmaupun IPP 163 tera-btu, turun 7% dibanding periode yang sama tahun lalu\r\n (176 tbtu).\r\n<p>Produksi pembangkit geothermal semester-1 2011 4,7 TWh, sama dengan \r\nsemester-1 2010. Produksi PLTA 6,5 TWh turun dibandingkan dengan \r\nsemester-1 2010 8,6 TWh karena faktor musim, tahun lalu memang lebih \r\nbasah dibanding tahun ini (lebih basah maksudnya tahun lalu inflow \r\nsungai lebih tinggi).</p>\r\n<p>Pembangkit BBM mengkompensasi perubahan-perubahan di atas, pada \r\nsemester-1 2011 20,8 TWh, semester-1 tahun lalu 17,1 TWh.&nbsp;Volume \r\nBBM yang dikonsumsi S-1 5,64 juta kl, semester-1 tahun lalu 4,76 juta \r\nkl.</p> ', 'berita', '2011-08-07'),
(19, 451990, 'PLN Gelar Khatam Al-Quran 1.000 Kali Dalam Sehari', 'Sabtu, 6 Agustus 2011, tidak kurang dari 1500 peserta khatam \r\nAl-Qurâ€™an terdiri dari para hafidz dan hafidzoh dari lembaga-lembaga \r\npendidikan Al-Qurâ€™an, berkumpul di mesjid Nurul Falah PLN Distribusi \r\nJakarta dan Tangerang Jl. MI. Ridwan Rais No 1 Jakarta Pusat, dan siap \r\nmengkhatamkan Al-Qurâ€™an sebanyak 1000 kali dalam waktu satu hari (baâ€™da \r\nsubuh sampai menjelang waktu maghrib).\r\n<p>Seperti disampaikan Irwan Zainal Nasution, Ketua Jamaah Dakwah \r\nIslamiah PLN Distribusi Jakarta dan Tangerang dalam rilisnya Jumat, 5 \r\nAgustus 2011, acara ini akan dihadiri dan diikuti langsung oleh Dirut \r\nPLN Dahlan Iskan dan istri sejak pukul 05.30 sampai 17.00 WIB, \r\ndilanjutkan dengan tausiyah dan buka bersama.</p> ', 'berita', '2011-08-07'),
(20, 451990, 'PLN Pasok Listrik Untuk PT Hankook Tire Indonesia', 'PT PLN (Persero) mengikat kesepakatan dengan PT Hankook Tire \r\nIndonesia (HTI) untuk menyalurkan tenaga listrik dari jaringan tegangan \r\ntinggi 150 kV &nbsp;ke pabrik milik PT HTI yang berlokasi di kawasan industri\r\n Lippo Cikarang Kabupaten Bekasi dengan layanan khusus premium.\r\n<p>Direktur Utama PLN Dahlan Iskan (kiri) dan Presiden Direktur PT \r\nHankook Tire Indonesia (HTI) Lee Ho-Gun (kanan) menandatangani \r\nKesepakatan Bersama Jual Beli Tenaga Listrik di Jakarta, dengan \r\ndisaksikan oleh Komisaris Utama PLN, Yogo Pratomo dan Direktur Bisnis \r\n&amp; Manajemen Risiko PLN, Murtaqi Syamsuddin.</p> ', 'berita', '2011-08-07'),
(21, 451990, 'PLN Pertahankan Gelar Juara Umum Porseni ESDM', 'PLN berhasil mempertahankan gelar juara umum Pekan Olahraga dan Seni (Porseni) ESDM tahun 2011.\r\n<p>Ini\r\n merupakan gelar ke delapan yang diraih PLN secara berturut-turut sejak \r\nPorseni ini diadakan oleh Kementerian Energi dan Sumber Daya Mineral \r\n(ESDM) pada tahun 2004.</p>\r\n<p>PLN mengoleksi 5 medali emas, 4 medali perak, 1 medali perunggu, dan 1\r\n juara harapan tiga untuk dapat tetap mempertahankan gelarnya.</p>\r\n<p>Koleksi ini diraih dari 11 cabang olahraga dan 4 lomba seni yang \r\ndipertandingkan, meliputi kategori putra dan putri. &nbsp;Dengan raihan \r\nmedali sebanyak itu, PLN berhasil mengungguli lima belas peserta lainnya\r\n yang terdiri dari instansi di lingkungan Kementerian ESDM dan BUMN di \r\nbawah Kementerian ESDM seperti Pertamina, PGN dan Bukit Asam.</p> ', 'pengumuman', '2011-08-07'),
(22, 451990, 'Kerjasama PLN-SEB', 'Direktur Perencanaan dan Teknologi PLN, Nasri Sebayang (kanan) tukar menukar berkas kerjasama dengan <em>Chief Executive Office</em>r SEB, Mr. Torstein Dale Sjotveit (kiri) yang disaksikan oleh dari Negara Bagian Sarawak <em>Second Minister of Planning and Resource Management &nbsp;&amp; Minister of Public Utilities</em> Sarawak <em>The Honourable</em>\r\n Datuk Amar Hj. Awang Tengah Ali Hasan (Tengah) usai penandatanganan \r\nkerjasama di bidang Ketenagalistrikan, Jakarta, Senin (18/7).\r\n<p>Kesepakatan\r\n antara PT PLN (Persero) dan Sarawak Energy Berhad (SEB) tentang \r\nkerjasama pembangunan interkoneksi ini, maka potensi keuntungan yang \r\nbisa dirasakan oleh PLN dalam penyediaan tenaga listrik, khususnya di \r\nwilayah Kalimantan Barat, diantaranya; Meningkatkan pasokan daya non-BBM\r\n ke Kalimantan Barat yang berasal dari Sarawak yang secara mayoritas \r\ndibangkitkan dengan menggunakan PLTA yang lebih ekonomis, sehingga \r\nmemungkinkan penurunan biaya operasi; Meningkatkan keandalan operasi \r\nsistem kelistrikan Kalimantan Barat, sekaligus meningkatkan cadangan \r\ndaya sistem kelistrikan Kalimantan Barat</p> ', 'pengumuman', '2011-08-07'),
(23, 451990, 'CEO PLN, Dahlan Iskan Raih Inspiring Leader Award', ' Keteladanan dan komitmen yang ditunjukkan oleh seorang Dahlan Iskan \r\ndalam memimpin PLN, BUMN dibidang kelistrikan dalam kurun 2 tahun \r\nterakhir yang dinilai membawa banyak perubahan yang positif.\r\n<p>Dahlan Iskan berandil dalam membangun dan memperbaiki pelayanan PLN \r\ndalam menyediakan pasokan listrik secara nasional, mendapatkan apresiasi\r\n positif dari sejumlah kalangan, salah satunya dengan terpilihnya Dahlan\r\n Iskan menjadi salah satu dari 25 penerima penghargaan â€œInspiring \r\nLeaderâ€ Award dari harian Seputar Indonesia (Koran Sindo).</p> ', 'berita', '2011-08-07'),
(24, 451990, 'Listrik di Kota Jambi Sudah Kembali Pulih', 'Menyusul terbakarnya salah satu komponen (kubikel 20 kV) pada salah satu\r\n trafo yang terpasang di Gardu Induk (GI) Payo Selincah Jambi, Jumâ€™at \r\n(8/7) lalu yang mengakibatkan sebagian kota Jambi terganggu pasokan \r\nlistriknya, maka mulai hari Minggu malam (10/7) kemarin pasokan listrik \r\nuntuk kota Jambi sudah pulih kembali. â€œ Kondisi listrik di Jambi sudah \r\nkembali normal sejak kemarin malam (Minggu, 10/7). Ledakan di Gardu \r\nInduk Payo Selincah sudah berhasil ditangani oleh tim gabungan petugas \r\nPLN sehingga seluruh perbaikan tadi malam jam 22.00 Wib sudah berhasil \r\ndiselesaikan sehingga pasokan listrik di Jambi sudah normal kembali,â€ \r\nujar Dahlan Iskan, Direktur Utama PLN. ', 'pengumuman', '2011-08-07'),
(25, 451990, 'Kerjasama PLN dengan Kepco', 'Direktur Operasi Jawa Bali PLN, Ngurah Adnyana (kanan) memberikan \r\ncendramata kepada Commercial Attache of Korean Embassy for Indonesia, \r\nKim Namkyu (kiri) dan Vice President of Korea East West Power Company. \r\nLim Han Kyu (tengah) dan usai membuka Seminar tentang pengelolaan Power \r\nPlant kerjasama PLN dengan KEPCO-KEWP (KoreanEast-West Power Co.Ltd) di \r\nJakarta Rabu (6/7). Dalam seminar ini diharapkan terjalin pertukaran \r\npengetahuan yang cukup khususnya dalam pengelolaan pembangkit antar \r\nsesama perusahaan sejenis dilingkup Asia. PLN adalah perusahaan \r\nIndonesia yang akan segera mengoperasikan pembangkit 10000 MW tahapa \r\npertama yang telah selesai dan KEPCO adalah perusahaan Korea dengan \r\nreputasi Internasional dalam pengelolaan pembngkit tenaga listrik lebih \r\ndari 60000 MW. ', 'pengumuman', '2011-08-07'),
(35, 451990, '6 Tips Kelola Uang Keluarga', '<ol><li>1. Prioritas pertama dan terpenting: lunasi hutang konsumtif Anda sesegera mungkin. Lebih cepat lebih baik.</li><li>2. Cek pos pengeluaran cicilan hutang, apakah besarnya &lt;=30%? \r\nJika lebih, artinya beban hutang Anda terlalu berat dan beresiko tidak \r\nterbayar.</li><li>3. Prioritas ke-2, menabung minimal 10% dari penghasilan. Lebih tinggi lebih baik.</li><li>4. Jangan terlalu banyak menempatkan uang Anda dalam tabungan. \r\nSetelah pos Dana Darurat yaitu sebesar 5-6x pengeluaran bulanan \r\nterpenuhi, berinvestasilah !!</li><li>5. Ingat, <em>lifesytle = expense</em>. Ingin tahu apakah gaya \r\nhidup Anda sudah sesuai dengan penghasilan? Cek pos pengeluaran rutin \r\ndan non-rutin Anda. Jika tidak sesuai, lakukan pemangkasan pengeluaran \r\nsekarang juga.</li><li><em>6. Be a smart shopper !</em> Berpikirlah 10x sebelum Anda \r\nmengeluarkan uang. Apakah benar-benar perlu dan sesuai kebutuhan ? \r\nApakah barang yang saya beli termasuk produktif atau konsumtif ?</li></ol> ', 'tips', '2011-08-07'),
(36, 451990, 'Tips Hidup Sehat', '<b style="color: #000000">1. Minum air putih sebanyak mungkin.</b>\r\n<br>\r\n<span style="color: #000000">Minumlah air putih minimal 5 sampai 8 gelas\r\n perhari akan membuat Anda terhindar dari berbagai penyakit.Diantaranya \r\ntekanan darah tinggi,diabetes,sakit perut akibat maag dan sebagainya.</span>\r\n<br>\r\n<b style="color: #000000">2. Perbanyak kandungan serat.</b>\r\n<br>\r\n<span style="color: #000000">Perbanyak kandungan serat dalam tubuh. \r\nSelain melancarkan pencernaan,karbohidrat dalam makanan kaya serat \r\nseperti sayur dan buah akan meningkatkan energi Anda tanpa menambah \r\nkadar lemak dalam tubuh.</span>\r\n<br>\r\n<b style="color: #000000">3. Olahraga secara teratur.</b>\r\n<br>\r\n<span style="color: #000000">Olahraga secara teratur selain dapat \r\nmembakar lemak dan kalori berlebihan dalam tubuh,olahraga juga dapat \r\nmengendurkan otot yang kencang serta menghilangkan stres.</span>\r\n<br>\r\n<b style="color: #000000">4. Cukup Tidur.</b>\r\n<br>\r\n<span style="color: #000000">Saat tidur tubuh akan beristirahat dengan \r\ntotal. Maka jika waktu tidur berkurang,otoamtis tubuh akan lemas dan \r\ngampang terserang penyakit.</span>\r\n<br>\r\n<b style="color: #000000">5. Banyaklah tertawa.</b>\r\n<br>\r\n<span style="color: #000000">\r\nPercaya atau tidak,tertawa merupakan obat yang cukup\r\n<br>\r\nampuh melawan penyakit ! Pikiran yang positif dan bahagia dapat \r\nmempengaruhi Anda baik secara mental dan fisik. Semakin bahagia Anda \r\nmaka semakin jauh penyakit datang menyerang.\r\n</span>\r\n ', 'tips', '2011-08-07'),
(37, 300384, '4 Tips Agar Anak Aman dari Bahaya Listrik', '<p><strong>1. Jangan cabut kabelnya</strong></p><p>Jangan cabut \r\nsesuatu dengan memegang kabelnya. Ambillah bagian kepala steker untuk \r\nmelepasnya dari stop kontak. Jangan lupa memeriksa setiap kabel. Jika \r\nterdapat kabel yang robek gantilah secepatnya. Jangan biarkan anak \r\nmencabut dan mencolokan barang elektronik tanpa pengawasan Anda.</p><p>&nbsp;</p><p><strong>2. Hindari air</strong></p><p>Jangan\r\n letakkan alat rumah tangga elektronik di daerah yang basah atau rawan \r\nbasah. Air dapat menimbulkan korsleting listrik. Bila terjadi kebakaran,\r\n jangan mencoba memadamkan api dengan air tanpa memadamkan pusat aliran \r\nlistrik.</p><p>&nbsp;</p><p>Jangan pernah menyentuh peralatan atau barang \r\nelektronik dengan tangan yang basah. Hal tersebut menjauhkan Anda dari \r\nsetruman. Jangan pula izinkan anak untuk berenang saat turun hujan \r\ndisertai petir.</p><p>&nbsp;</p><p><strong>3. Padamkan aliran listrik</strong></p><p>Jika\r\n ingin mengganti bola lampu yang mati, pastikan aliran listrik sudah \r\npadam. Gunakanlah sarung tangan atau lap kering agar terhindar dari \r\nkontak langsung dengan stop kontak.</p><p>&nbsp;</p><p><strong>4. Waspadai kabel listrik</strong></p><p>Anak\r\n suka sekali memanjat pohon. Periksa pohon tersebut apakah ada kabel \r\nlistrik di sekitarnya. Jika anak bermain dengan tongkat, berikanlah \r\narahan agar menghindari tempat-tempat yang memiliki kabel listrik yang \r\nterjangkau oleh tongkat tersebut. Listrik bisa mengalir melalui benda \r\nyang dapat mengaliri listrik.</p><p>&nbsp;</p><p>Jika Anda menemukan sebuah \r\nkabel listrik terjatuh, jangan menyentuh apa pun yang terkena kabel \r\ntersebut. Beritahukan masalah tersebut secepatnya ke pihak yang \r\nberwenang agar tidak membahayakan siapapun.</p><p>&nbsp;</p><br>', 'tips', '2011-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `t_prt`
--

CREATE TABLE IF NOT EXISTS `t_prt` (
  `id_prt` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `tglLahir` varchar(15) NOT NULL,
  `no_ktp` int(15) NOT NULL,
  `jk` varchar(9) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tarif` varchar(2) NOT NULL,
  `daya` varchar(8) NOT NULL,
  `stand_meter` varchar(16) NOT NULL,
  `tagihan` int(10) NOT NULL,
  `inbox` int(30) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT 'pelanggan/default.png',
  PRIMARY KEY (`id_prt`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_prt`
--

INSERT INTO `t_prt` (`id_prt`, `nama`, `no_telp`, `alamat`, `password`, `kecamatan`, `tglLahir`, `no_ktp`, `jk`, `pekerjaan`, `email`, `tarif`, `daya`, `stand_meter`, `tagihan`, `inbox`, `foto`) VALUES
('518010036365', 'Rini', 881023, 'Jl. Wr Supratman Gang Taman Tirta No12', 'rini', 'Bojonegoro', '11-Mei-1956', 2147483647, 'P', 'Penjual', '-', 'R1', '1300 VA', '580750-583560', 244190, 0, 'pelanggan/default.png'),
('518010309471', 'Maksoem', 2147483647, 'Ds. Kanor RT03 RW03', 'maksoem', 'Kanor', '22-September-19', 2147483647, 'L', 'Guru SMP', '-', 'R1', '900 VA', '142660-143110', 47025, 0, 'pelanggan/default.png'),
('518050085877', 'Sutarjo', 883218, 'Desa Ngasem RT05 RW02', 'sutarjo', 'Kalitidu', '3-Maret-1962', 2147483647, 'L', 'Guru SD', '-', 'R1', '900 VA', '169840-171150', 84090, 0, 'pelanggan/default.png'),
('518010105285', 'Hariyanto ES', 887432, 'Jl. Gajah Mada Perum', 'hariyanto', 'Bojonegoro', '- Pilih Tanggal', 2147483647, 'L', 'Pegawai Infokom ', 'hariyanto3@yahoo.com', 'R1', '900 VA', '185090-187010', 117305, 0, 'pelanggan/default.png'),
('518040585045', 'Subroto', 887988, 'Jl. Pemuda No 127', 'subroto', 'Padangan', '17-Februari-196', 2147483647, 'L', 'Guru SMP', '-', 'R1', '450 VA', '046400-008546', 34880, 0, 'pelanggan/default.png'),
('518040584665', 'Kiswo', 2147483647, 'Ds. Kepuhbaro RT06 RW02', 'kiswo', 'Kepuhbaru', '12-Maret-1965', 2147483647, 'L', 'Kontraktor', '-', 'R1', '900 VA', '175160-176560', 88990, 0, 'pelanggan/kitty.jpg'),
('518010549208', 'Sutoyo', 2147483647, 'Ds Kedung Adem RT 05 RW 1', 'sutoyo', 'Kedungadem', '27-November-195', 2147483647, 'L', 'Wirausaha Roti', '-', 'R1', '900 VA', '341700-344720', 177200, 0, 'pelanggan/default.png'),
('518010083738', 'Suhari Handono', 880173, 'Ds. Sumberejo RT05 RW02', 'suhari', 'Sumberejo', '19-Januari-1975', 2147483647, 'L', 'Guru SMA', 'suhari.handono@yahoo.com', 'R1', '450 VA', '02432100-0228710', 67000, 0, 'pelanggan/default.png'),
('51801010732', 'Winarno', 880211, 'Jl. Teuku Umar Gang KS Tubun No.3', 'winarno', 'Bojonegoro', '6-Agustus-1950', 2147483647, 'L', 'Wirausaha Mebel', '-', 'R1', '2200 VA', '471970-475190', 284590, 0, 'pelanggan/default.png'),
('518011636686', 'Jiono', 888178, 'Ds. Malo RT07 RW02', 'jiono', 'Malo', '8-Juni-1968', 2147483647, 'L', 'Pegawai PDAM', '-', 'R1', '900 VA', ' 026500-027320', 57410, 0, 'pelanggan/default.png'),
('518010410402', 'Kasiyan', 2147483647, 'Ds. Balen RT03 RW01', 'kasiyan', 'Balen', '12-Oktober-1962', 2147483647, 'L', 'Petani', '-', 'R1', '450 VA', '045610-045670', 12560, 0, 'pelanggan/default.png'),
('518010231017', 'Lasmani WD', 2147483647, 'Ds. Temayang  RT07 RW02', 'lasmani', 'Temayang', '5-Januari-1964', 2147483647, 'L', 'PNS', '-', 'R1', '900 VA', '234310-236110', 109350, 0, 'pelanggan/default.png'),
('30108384', 'alfina', 0, '', 'alfina', '', '', 0, '', '', '', '', '', '', 0, 0, 'pelanggan/default.png'),
('30108170', 'Andhika Septi', 0, '', 'ika', '', '', 0, '', '', '', '', '', '', 0, 0, 'pelanggan/default.png');

-- --------------------------------------------------------

--
-- Table structure for table `t_ps`
--

CREATE TABLE IF NOT EXISTS `t_ps` (
  `id_ps` int(3) NOT NULL AUTO_INCREMENT,
  `id_prt` varchar(12) NOT NULL,
  `daya_ingin` varchar(6) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `penanganan` varchar(50) NOT NULL DEFAULT 'belum',
  `pemohon` varchar(30) NOT NULL,
  PRIMARY KEY (`id_ps`),
  KEY `id_prt` (`id_prt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `t_ps`
--

INSERT INTO `t_ps` (`id_ps`, `id_prt`, `daya_ingin`, `keperluan`, `tgl_mulai`, `tgl_akhir`, `penanganan`, `pemohon`) VALUES
(1, '518040584665', '80', 'Digunakan untuk acara pernikahan', '2011-08-09', '2011-08-11', 'sudah', 'tika'),
(2, '518010036365', '80', 'Dipakai untuk penerangan pesta sunatan', '2011-08-16', '2011-08-17', 'belum', 'Aditya'),
(3, '518040584665', '80', 'akan digunakan untuk acara syukuran', '2011-08-16', '2011-08-16', 'belum', 'Tyas'),
(4, '518010231017', '80', 'Dipakai untuk penerangan pesta sunatan', '2011-08-16', '2011-08-18', 'belum', 'vano'),
(5, '518040584665', '150', 'Digunakan untuk acara pernikahan', '2011-08-17', '2011-08-19', 'sudah', 'lila');

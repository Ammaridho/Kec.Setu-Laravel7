-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 04:39 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kecsetu`
--

-- --------------------------------------------------------

--
-- Table structure for table `bacaan`
--

CREATE TABLE `bacaan` (
  `id` int(11) NOT NULL,
  `perihal` varchar(20) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `postedby` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `dilihat` int(11) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bacaan`
--

INSERT INTO `bacaan` (`id`, `perihal`, `judul`, `gambar`, `postedby`, `tanggal`, `dilihat`, `isi`, `created_at`, `updated_at`) VALUES
(2, 'berita', 'Pelaku UMKM di Tangsel Harus Manfaatkan Teknologi', 'gambar2.png', 'admin kec. serpong', '2021-04-05 22:33:12', 56, 'SETU, WEB TANGSEL – Pemerintah Kota Tangerang Selatan mengukuhkan Pengurus UMKM Kecamatan Setu, Kamis (16/07). Seluruh pengurus UMKM nantinya bertugas untuk membantu pemerintah dalam menentukan kebijakan yang dibuat untuk mereka.\r\n\r\nWalikota Tangerang Selatan, Airin Rachmi Diany menjelaskan bahwa dengan dikukuhkannya Pengurus UMKM Setu ini harus bisa menyalurkan informasi yang dibuat pemerintah dalam membantu pelaku UMKM mendapatkan kesejahteraannya.\r\n\r\nDihadiri oleh pelaku UMKM di Setu, Airin meminta seluruh pengurus untuk bisa memberikan informasi mengenai kemajuan teknologi. Sebagaimana diketahui usaha yang tidak diimbangi dengan kemajuan teknologi maka tidak bisa bersaing. \r\n\r\n”Sebagaimana diketahui, banyak usaha yang gulung tikar akibat dari eksisnya ecommerce. Seperti bukalapak, tokopedia dan lainnya,” kata Airin dalam pengukuhan tersebut.\r\n\r\nDengan begitu, dia mengingatkan bahwa pelaku UMKM harus mampu memanfaatkan tekonologi terutama dalam proses marketing barang yang dibuat. Menjadikan teknologi sebagai alat bantu dibandingkan hambatannya.\r\n\r\nAirin juga mengimbau kepada seluruh pelaku usaha untuk memastikan kualitas barang yang dijual. ”Saya juga dulu jualan. Tapi saya pastikan barang yang saya jual itu punya kualitas baik. Dicoba dulu, bagus apa nggaknya,” kata Airin.\r\n\r\nDia berpesan, sebagai pelaku UMKM untuk tidak mudah menyerah. Sebab, kunci dari kesuksesan adalah mampu menghadapi situasi sulit.\r\n\r\nSementara Camat Setu Hamdani menjelaskan dalam pengukuhan ini dipamerkan juga 165 produk UMKM milik Kecamatan Setu. Seperti yang diketahui Setu memiliki banyak produk UMKM yang membidangi beberapa sektor. Seperti makanan dan kerajinan tangan.\r\n\r\n”Selain itu kami juga berharap, bahwa UMKM bisa menjadi salah satu sumber PAD di Kota Tangsel karena harus terus diberdayakan,” kata dia.\r\n\r\nProduk yang dipamerkan yakni Kacang sangrai, ,si mamih, Biji ketapang, dodol dan lain sebagainya. (humas-kominfo)', NULL, '2021-04-17 08:35:01'),
(3, 'kegiatan', 'LOMBA INOVASI TEKNOLOGI TEPAT GUNA (TTG) KE-VIII TINGKAT KOTA', 'gambar3.png', 'admin kec. serpong', '2021-04-04 22:33:12', 134, 'CIPUTAT, WEB TANGSEL - Lomba Inovasi Teknologi Tepat Guna merupakan kegiatan rutin setiap tahun yang diselenggarakan oleh Pemerintah Kota Tangerang Selatan melalui DPMP3AKB Kota Tangerang Selatan dan merupakan langkah nyata untuk mendukung penciptaan, pengembangan dan pendayagunaan potensi masyarakat dibidang teknologi maupun ekonomi berbasis pemberdayaan masyarakat.\r\n\r\nMelalui kegiatan ini diharapkan dapat memacu dan mendorong para inventor dan inovator baik dari kalangan Perguruan Tinggi, Sekolah, Pos Pelayanan Teknologi Tepat Guna, maupun masyarakat untuk menumbuhkembangkan ide-ide kreatif dan inovatif agar menciptakan/menghasilkan produk Teknologi Tepat Guna (TTG) dan memberikan kontribusi kepada masyarakat atas temuan mereka untuk digunakan masyarakat umum.\r\n\r\nLomba Inovasi Teknologi Tepat Guna Tingkat Kota Tangerang Selatan Ke- VIII Tahun 2020 dilaksanakan pada hari Kamis tanggal 16 Juli 2020 bertempat di Ruang Rapat Gedung 3 Lantai 3.A Balaikota Tangerang Selatan.\r\n\r\nPada lomba tahun ini diikuti oleh 17 peserta kategori umum/mahasiswa yang bersasal dari Perguruan Tinggi, Pos Pelayanan Teknologi dan Masyarakat Umum. Dalam sambutannya Wakil Walikota Tangerang Selatan, Bapak Benyamin Davie menyampaikan dengan visi misi terwujudnya Tangerang selatan kota cerdas, berkualitas dan berdaya saing berbasis teknologi dan inovasi agar berbagai masyarakat dapat ikut serta salah satunya melalui kegiatan lomba inovasi TTG.\r\n\r\nTim Penilai Lomba Inovasi TTG berasal dari Kementerian Desa Pembangunan daerah Tertinggal dan Transmigrasi, Pusat Penelitian Ilmu Pengetahuan dan Teknologi (Puspiptek) serta dari Badan Pengkajian dan Penerapan Teknologi (BPPT).\r\n\r\nWalaupun dalam kondisi Pandemi Covid-19 Lomba Inovasi TTG ke -VIII tetap dilaksanakan dengan mengedepankan Protokol Kesehatan yang berlaku saat ini.\r\n\r\nAdapun Pengumumam Pemenang Lomba Inovasi TTG Ke – VIII Tingkat Kota Tangerang Selatan Tahun 2020.\r\nDengan Kriteria penilaian terdiri dari 3 (tiga) komponen/aspek, yaitu :\r\na. Makalah/proposal bisnis (20%)\r\nb. Substansi TTG (50%)\r\nc. Paparan/presentasi (30%)', NULL, '2021-04-15 10:24:27'),
(122, 'kegiatan', 'Pemkot Tangsel Peringati Hari Koperasi ke-73', '7313.jpg-1618648149.jpg', 'Admin Kec. Setu', '0000-00-00 00:00:00', 0, 'CIPUTAT, WEB TANGSEL - Pemerintah Kota Tangerang Selatan memastikan bahwa pemulihan perekonomian akan mengandalkan Koperasi. Hal tersebut dijelaskan dalam Kegiatan Peringatan Hari Koperasi ke 73 Tingkat Kota Tangerang Selatan tahun 2020 di Puspemkot, Ciputat, Selasa (04/08).\r\n\r\nWalikota Tangerang Selatan, Airin Rachmi Diany menjelaskan bahwa pemulihan perekonomian ini merupakan kebijakan yang sudah ditetapkan oleh Presiden RI, Joko Widodo. Dimana, pelaku UMKM bisa survive atau tetap melakukan kegiatan usahanya di tengah pandemi seperti ini.\r\n\r\nAdapun strategi yang dibuat oleh Pemerintah Kota Tangerang Selatan, menurut Airin berupa kebijakan mengenai APBD yang akan dialokasikan untuk memberdayakan pelaku usaha. ”Contohnya saya mendorong ketika kita membutuhkan APD, kita bisa dorong UMKM kita yang melakukan produksi,” ujar Airin.\r\n\r\nDalam kesempatan itu, Airin juga meminta, bahwa saat ini Pemkot sedang melakukan berbagai macam upaya untuk memastikan kegiatan UMKM dan Koperasi tetap mematuhi peraturan protokol kesehatan. Yang mana sudah ditentukan oleh pemerintah pusat.\r\n\r\nSelanjutnya, Ketua Dekopinda Kota Tangerang Selatan Dudung Diredja menjelaskan bahwa UMKM dan Koperasi merupakan beberapa sektor yang terdampak sangat serius pada saat pandemi ini terjadi. Karena itu, dia berharap kepada pemerintah bisa segera melahirkan kebijakan yang bisa memastikan proses kegiatan usaha agar bisa tetap berlangsung.\r\n\r\nMenurutnya, berkaca dari krisis pada tahun 1998, tentunya kami Dekopinda sudah menyiapkan rekomendasi kepada pemerintah. ”Jadi, seperti tahun itu, bahwa Koperasi dan UMKM bisa menjadi motor pemulih keadaan ekonomi,” kata Dudung.\r\n\r\nMenanggapi usulan dan rencana dari pemerintah, Dudung menjelaskan pada anggaran perubahan nanti akan ada beberapa program yang akan dilangsungkan untuk kembali meningkatkan kualitas koperasi dan UMKM. Dengan cara melatih inovasi mereka untuk bisa bersaing di situasi seperti ini.\r\n\r\n”Tapi tentunya ada pembatasan untuk program tersebut. Jangan sampai kita menyalahi protokol kesehatan,” kata dia.\r\n\r\nSalah satu kegiatan yang disebutkan Dudung adalah, kegiatan bazar dengan penyesuaian kondisi yang terjadi saat ini. Misalnya, dengan kuota terbatas dan jarak stand yang harus memuhi standar protokol kesehatan.\r\n\r\nYang perlu dipastikan, Dudung menjamin bahwa akan ada kebijakan yang dibuat pemerintah untuk pelaku Koperasi dan UMKM. Baik itu kebijakan kesehatan, ekonomi atau lainnya.(humas-kominfo)', '2021-04-17 08:29:09', '2021-04-17 08:29:09'),
(124, 'berita', 'Wakil Walikota Benyamin Davnie Bahas Rumah Pegawai untuk ASN Tangsel', '7310.jpg-1618651559.jpg', 'admin kec. serpong', '0000-00-00 00:00:00', 0, 'CIPUTAT, WEB TANGSEL- Wakil Walikota Tangerang Selatan, Benyamin Davnie sampaikan sambutan dalam acara Sosialisasi Pengembangan Pengelolaan Keuangan dan rencana Perumahan Pegawai bekerjasama dengan Bank BTN di Ruang Lengkong Lt.4 Puspemkot pada hari Rabu, (29/07).\r\n\r\nBenyamin menjelaskan bahwa sosialisasi ini merupakan upaya pemerintah dalam membuat hunian yang nyaman terhadap ASN. BTN berkomitmen membantu pemerintah dalam memastikan tempat tinggal terhadap ASN yang bertugas memberikan pelayanan terhadap Pemerintah Kota Tangerang Selatan.\r\n\r\n”Jadi sekarang ada perusahaan developer, jadi nanti bisa dikolaborasikan,” ujar Benyamin dalam acara tersebut.\r\n\r\nDia menambahkan, pemerintah memang sedang fokus terhadap rencana pembangunan perumahan terhadap pegawai Pemkot Tangsel. Karena itu beberapa kali Pemerintah mengundang perusahaan developer untuk bisa berkerjasama dalam memberikan fasilitas pada perumahan yang akan dibangun ini.\r\n\r\nSaat ini, Benyamin memang belum bisa memastikan dimana perumahan ini dibangun. Namun jika memang dikarenakan ada keterbatasan lahan, bisa jadi pembangunan rumah ini dilakukan di luar Tangsel.\r\n\r\n”Tapi jangan khawatir dengan jarak yang cukup jauh. Karena, kita punya 24 bis yang bisa mengantar dan menjemput ASN yang berkerja di sini,” ujar Benyamin.\r\n\r\nPembangunan perumahan untuk ASN ini dilakukan guna melakukan efisiensi terhadap pengeluaran ASN. Terutama dengan adanya pandemi yang masih belum diketahui kapan wabah ini berakhir. Sehingga Pemerintah Kota Tangerang Selatan berkomitmen dalam memberikan fasilitas tempat tinggal kepada ASN ini.\r\n\r\nSementara Kepala BPKAD Warman Syainudin menjelaskan bahwa bahwa sesuai dengan apa yang sering dibahas dalam rapat. Bahwa beberapa OPD mengusulkan Pemerintah Kota Tangerang Selatan untuk membangun rumah pemerintah daerah yang nantinya bisa dihuni oleh ASN Kota Tangerang Selatan.\r\n\r\n”Karena itu, kami bertemu dengan pihak BTN untuk mencari tahu seperti apa pemenuhan solusinya,” ujar Warman.\r\n\r\nDia menambahkan bahwa bisa jadi, pembangunan perumahan pemda ini masih jauh. Namun akan lebih baik dipersiapkan secara matang sehingga pada saat pembangunannya. Fasilitas dalam rumah bisa didesain lebih baik.\r\n\r\nDengan adanya rapat ini, Warman juga menjelaskan bahwa, setiap peserta rapat bisa memberikan usulan demi memenuhi hak tempat tinggal pegawai di Tangsel.(humas-kominfo)', '2021-04-17 09:25:59', '2021-04-17 09:25:59'),
(125, 'berita', 'Wakil Walikota Benyamin Hadiri Kegiatan Pembinaan Depot Air Minum', '7311.jpg-1618651602.jpg', 'admin kec. serpong', '0000-00-00 00:00:00', 0, 'PONDOK AREN, WEB TANGSEL - Depot Air Minum Isi Ulang di Kota Tangsel dapatkan pembinaan oleh Kementerian Kesehatan RI.Pembinaan ini dilakukan di Aula Kecamatan Pondok Aren, Rabu (29/07).\r\n\r\nWakil Walikota Tangerang Selatan, Benyamin Davnie menjelaskan pembinaan ini dilakukan untuk memastikan bahwa air yang digunakan dan diperjualkan memiliki sertifikat yang lengkap. Karena itu pengusaha depot air harus memerhatikan ini lebih teliti.\r\n\r\n\"Jangan sampai, air yang digunakan justru mengakibatkan virus pada penyakit baru,\" ujar Benyamin dalam acara tersebut.\r\n\r\nDia juga mengimbau kepada seluruh pegawai pelayanan yang mana bertugas untuk mengisi ulang untuk memenuhi protokol kesehatan. Sehingga tidak menyebabkam klaster baru dalam penyebaran Covid-19.\r\n\r\nBenyamin menjelaskan bahwa setiap masyarakat harus berhati-hati dalam berinteraksi dengan orang lain. Mungkin, jika anggota keluarga sendiri bisa ditracking kemana interaksinya. Sementara orang lain tidak bisa. Sehingga untuk mencegah penularan Covid-19 diharuskan untuk memenuhi protokol kesehatan.\r\n\r\n\"Bukannya kita sombong. Tapi situasinya memang memaksa kita untuk lebih teliti dalam membatasi diri dalam berinteraksi. Daripada kita tertular,\" ujar Benyamin.\r\n\r\nDia berharap dengan adanya situasi seperti ini pengusaha Depot Air Isi Ulang bisa lebih perhatian. Dan tahu mana air bersih yang bisa dikonsumsi mana yang tidak.(humas-kominfo)', '2021-04-17 09:26:42', '2021-04-17 09:26:42'),
(126, 'artikel', 'Susunan Lengkap Kabinet Indonesia Maju Jokowi-Ma\'ruf', 'kabinet-indonesia-maju-di-halam.jpg-1618651825.jpg', 'admin kel. pondok jagung', '0000-00-00 00:00:00', 0, 'Jakarta - Presiden Joko Widodo (Jokowi) mengumumkan secara resmi menteri-menteri yang akan membantunya di kabinet. Kabinet ini diberi nama Kabinet Indonesia Maju.\r\n\r\nPerkenalan ini berlangsung di tangga veranda Istana Merdeka, Jakarta Pusat, Rabu (23/10/2019). Jokowi dan para calon menteri duduk lesehan.\r\n\r\nJokowi lalu memanggil satu per satu nama calon menteri dan mereka berdiri. Dia juga menjelaskan tugas yang akan diemban para menterinya\r\n\r\nBerikut ini nama-nama menteri Kabinet Indonesia Maju 2019-2024:\r\n\r\n\r\n1. Menteri Koordinator Politik, Hukum, dan Keamanan: Mahfud Md\r\n2. Menteri Koordinator Perekonomian: Airlangga Hartarto\r\n3. Menteri Koordinator Kemaritiman dan Investasi: Luhut B Pandjaitan\r\n4. Menteri Koordinator Pembangunan Manusia dan Kebudayaan: Muhadjir Effendy\r\n5. Menteri Sekretaris Negara: Pratikno\r\n6. Menteri Dalam Negeri: Muhammad Tito Karnavian\r\n7. Menteri Luar Negeri: Retno LP Marsudi\r\n8. Menteri Pertahanan: Prabowo Subianto\r\n9. Menteri Hukum dan HAM: Yasonna Laoly\r\n10. Menteri Keuangan: Sri Mulyani\r\n11. Menteri ESDM: Arifin Tasrif\r\n12. Menteri Perindustrian: Agus Gumiwang Kartasasmita\r\n13. Menteri Perdagangan: Agus Suparmanto\r\n14. Menteri Pertanian: Syahrul Yasin Limpo\r\n15. Menteri Lingkungan Hidup dan Kehutanan: Siti Nurbaya Bakar\r\n16. Menteri Perhubungan: Budi Karya Sumadi\r\n17. Menteri Kelautan dan Perikanan: Edhy Prabowo\r\n18. Menteri Ketenagakerjaan: Ida Fauziyah\r\n19. Menteri Desa dan PDTT: Abdul Halim Iskandar\r\n20. Menteri PUPR: Basuki Hadimuljono\r\n21. Menteri Kesehatan: dr Terawan\r\n22. Menteri Pendidikan dan Kebudayaan: Nadiem Makarim\r\n23. Menristek dan Kepala Badan Riset Inovasi Nasional: Bambang Brodjonegoro\r\n24. Menteri Sosial: Juliari Batubara\r\n25. Menteri Agama: Fachrul Razi\r\n26. Menteri Pariwisata dan Ekonomi Kreatif: Wishnutama\r\n27. Menkominfo: Johnny G Plate\r\n28. Menteri Koperasi dan UKM: Teten Masduki\r\n29. Menteri PPPA: Gusti Ayu Bintang Darmavati\r\n30. MenPAN-RB: Tjahjo Kumolo\r\n31. Menteri PPN/Kepala Bappenas: Suharso Monoarfa\r\n32. Menteri ATR/Kepala BPN: Sofyan Djalil\r\n33. Menteri BUMN: Erick Thohir\r\n34. Menpora: Zainudin Amali\r\n\r\nJaksa Agung: ST Burhanuddin\r\nSekretaris Kabinet: Pramono Anung\r\nKepala Staf Kepresidenan: Moeldoko\r\nKepala BKPM: Bahlil Lahadalia\r\n\r\nsumber: https://news.detik.com/berita/d-4756478/ini-susunan-lengkap-kabinet-indonesia-maju-jokowi-maruf', '2021-04-17 09:30:25', '2021-04-17 09:32:14');

-- --------------------------------------------------------

--
-- Table structure for table `deskripsi`
--

CREATE TABLE `deskripsi` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deskripsi`
--

INSERT INTO `deskripsi` (`id`, `judul`, `isi`) VALUES
(1, 'Permohonan Surat Pindah', 'SURAT PINDAH KELUAR :\r\n    1. KTP dan Kartu Keluarga (KK) Asli.\r\n    2. Potocopy KTP dan KK.\r\n    3. KTP atau KK Hilang Lampirkan :\r\n        • Surat Keterangan Hilang dari Kepolisian.\r\n        • Surat Keterangan dari Kecamatan.\r\n    \r\n    4. Surat Pengantar dari RT dan RW setempat.\r\n    5. Surat Pengantar Pindah dari Kelurahan (F1.33).\r\n    6. Mengisi dan Menandatangani Formulir Permohonan Pindah WNI dari Kelurahan (F1.34).\r\n    7. Surat Pengantar Pindah dari Kecamatan (F1.35).\r\n    8. Mengisi dan Menandatangani Formulir Permohonan Pindah WNI dari Kecamatan (F1.36).\r\n    9. Yang Pindah Usia dibawah Umur 17 Tahun Lampirkan :\r\n        • Potocopy KTP Orang Tua.\r\n        • Potocopy Akta Kelahirah Anak yang pindah.\r\n        • Surat Pernyataan Persetujuan dari Orang Tua bermaterai Rp.6000.\r\n        • Pas Foto Ukuran 4X6 (2 Lembar).\r\n    \r\n    SURAT PINDAH DATANG:\r\n    1. Surat Keterangan Pindah WNI dan Biodata Penduduk WNI dari Dinas Pendudukan dan Pencatatan Sipil Daerah Asal.\r\n    2. Surat Pengantar dari RT dan RW Yang dituju.\r\n    3. Formulir Permohonan Pindah Datang WNI dari Kelurahan (F1.38).\r\n    4. Formulir Permohonan Pindah Datang WNI dari Kecamatan (F1.39).\r\n    5. Yang Pindah Usia dibawah Umur 17 Tahun Lampirkan :\r\n        • Potocopy KTP Orang Tua\r\n        • Potocopy KTP Yang Dikuasai\r\n        • Potocopy KK Yang Ditumpangi        \r\n        • Surat Kuasa dari Orang Tua Bermaterai Rp.6000'),
(2, 'Sekilas Kecamatan', 'Setu adalah sebuah kecamatan di Kota Tangerang Selatan, Provinsi Banten, Indonesia. Kecamatan Setu merupakan pemekaran dari Kecamatan Cisauk, Tangerang dengan batas sungai Cisadane, sebelah barat sungai Cisadane masuk Kec. Cisauk dan sebelah Timur masuk Kec. Setu.\r\n \r\n\r\nWilayah Administratif\r\n\r\nBerdasarkan Perda Kota Tangerang Selatan Nomor 10 Tahun 2012, pada tanggal 30 Oktober 2012, semua desa di Kecamatan Setu telah berstatus kelurahan.\r\n\r\nKecamatan ini terdiri dari 6 kelurahan yaitu:\r\n\r\n\r\nKelurahan Setu dengan luas wilayah 3,64 km2\r\nKelurahan Keranggan dengan luas wilayah 1,70 km2\r\nKelurahan Muncul dengan luas wilayah 3,61 km2\r\nKelurahan Babakan dengan luas wilayah 2,05 km2\r\nKelurahan Bakti Jaya dengan luas wilayah 1,74 km2\r\nKelurahan Kademangan dengan luas wilayah 2,06 km2'),
(3, 'Visi dan Misi', 'Visi : \r\n\r\nTerwujudnya Tangsel Kota Cerdas , Berkualitas dan Berdaya Saing Berbasis Teknologi dan Inovasi.\r\n\r\nMisi : \r\n\r\nMengembangkan Sumberdaya manusia yang handal dan berdaya\r\nMeningkatkan infrastruktur kota yang fungsional.\r\nMenciptakan kota layak huni yang berwawasan lingkungan.\r\nMengembangkan Ekonomi kerakyatan berbasis inovasi dan produk unggulan.\r\nMeningkatkan tata kelola pemerintahan yang baik berbasis teknologi informasi'),
(4, 'Tugas Pokok dan Fungsi', 'PERATURAN WALIKOTA TANGERANG SELATAN\r\n\r\nNOMOR 113 TAHUN 2016\r\n\r\nTENTANG KEDUDUKAN, SUSUNAN ORGANISASI, TUGAS, FUNGSI, DAN TATA KERJA KECAMATAN SETU\r\n\r\n \r\n\r\n \r\n\r\nPasal 9\r\n\r\nCamat memiliki tugas:\r\n\r\nmenyelenggarakan urusan pemerintahan umum;\r\nmengoordinasikandan menyelenggarakan kegiatan pemberdayaan masyarakat; \r\nmengoordinasikan dan menyelenggarakan ketenteraman dan ketertiban umum;\r\nmengoordinasikan penerapan dan penegakan Peraturan Daerah dan Peraturan Walikota;\r\nmengoordinasikan pemeliharaan prasarana dan sarana pelayanan umum;\r\nmengoordinasikan penyelenggaraan kegiatan pemerintahan yang dilakukan oleh Perangkat Daerah di Kecamatan;\r\nmembina dan mengawasi penyelenggaraan kegiatan Kelurahan;  dan\r\nmelaksanakan urusan pemerintahan yang menjadi kewenangan Daerah yang tidak dilaksanakan oleh unit kerja Perangkat Daerah yang ada di Kecamatan.\r\nPasal 10\r\n\r\nCamat dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 9 huruf a menyelenggarakan fungsi:\r\n\r\nPerumusan, penetapan, pelaksanaan kebijakan strategis dan teknis norma, standar prosedur dan kriteria di lingkup Pemerintahan Kecamatan;\r\nPerumusan, penetapan, pelaksanaan program dan anggaran di lingkup Pemerintahan Kecamatan;\r\nPenyelenggaraan, pembinaan, pengawasan, pengendalian, pemantauan urusan pemerintahan umum di Kecamatan;\r\nPenyelenggaraan, pembinaan, pengawasan, pengendalian, pemantauan pelaksanaan tugas pegawai di lingkup Kecamatan dan Kelurahan;\r\nPengoordinasian pelaksanaan tugas pemerintahan di lingkup Kecamatan dan Kelurahan;\r\nPenyelenggaraan survei kepuasan masyarakat, peningkatan kualitas pelayanan publik dan manajemen sumber daya manusia di lingkup Kecamatan dan Kelurahan;\r\nPengelolaan barang milik daerah, arsip dan hubungan masyarakat;\r\nPengoordinasian penyediaan data dan dokumentasi serta informasi publik\r\nPenyusunan laporan kinerja instansi pemerintah, mempersiapkan bahan Laporan Penyelenggaraan Pemerintahan Daerah dan Laporan Keterangan Pertanggungjawaban Walikota di lingkup Kecamatan;\r\nPelaksanaan evaluasi dan pelaporan tugas dan fungsi lingkup Kecamatan; dan\r\nMelaksanakan tugas lain yang diberikan Walikota sesuai dengan tugas dan fungsi serta ketentuan peraturan perundang-undangan.\r\n \r\n\r\nSekretaris\r\n\r\nPasal 11\r\n\r\nSekretaris memiliki tugas membantu Camat dalam memberikan pelayanan administratif dan teknis yang meliputi urusan perencanaan, keuangan, umum dan kepegawaian.\r\n\r\nPasal 12\r\n\r\nSekretaris dalam melaksanakan tugas sebagaimana dimaksud dalam Pasal 11 huruf b menyelenggarakan fungsi :\r\n\r\nPengoordinasian bahan penyusunan perumusan, pelaksanaan kebijakan strategis dan teknis norma, standar, prosedur dan kriteria di lingkup Kecamatan;\r\nPengoordinasian penyusunan, perumusan dokumen perencanaan program dan anggaran di lingkup Kecamatan;\r\nPelaksanaan penyusunan, perumusan dan analisa dokumen perencanaan program dan anggaran di lingkup Kecamatan;\r\nPengoordinasian pelaksanaan penelitian/ asistensi/ pembahasan program, kegiatan dan anggaran dengan Unit Kerja internal/ kementerian/ '),
(6, 'Struktur Organisasi', ''),
(7, 'Profil Pejabat', ''),
(8, 'Sambutan', 'Assalamualaikum warahmatullahi wabarakatu,\r\n\r\nPuji syukur kehadirat Allah SWT karena atas segala limpahan rahmat dan karunia-Nya sehingga Kecamatan Setu - Kota Tangerang Selatan dapat meluncurkan sebuah website. Website ini dimaksudkan sebagai sarana publikasi untuk memberikan Informasi, sosialisasi dan gambaran Kecamatan Setu dalam Hal Publikasi kepada masyarakat. Melalui keberadaan website ini kiranya masyarakat dapat mengetahui seluruh informasi tentang Kebijakan Pemerintah Kota Tangerang Selatan dalam pengelolaan kota, khususnya di wilayah Kecamatan Setu.\r\n\r\nTidak lupa kami mengucapkan terimakasih yang sebesar-besarnya kepada pihak-pihak yang telah banyak membantu dalam pembuatan website ini. semoga website ini dapat memberikan banyak manfaat bagi kita semua.\r\n\r\nKritik dan saran terhadap kekurangan dan kesalahan yang ada sangat kami harapkan guna penyempurnaan Website ini dimasa akan datang.\r\n\r\nterimakasih,\r\n\r\nWasalamualaikum warahmatullahi wabarakatu,'),
(9, 'Prestasi Kecamatan Ciputat Timur', ''),
(10, 'Penerbitan E-KTP', 'Permohonan KTP-el Baru (baru genap 17 Tahun) :\r\n1. Potocopy Kartu Keluarga;\r\n2. Potocopy Akta Lahir dan/atau;\r\n3. Potocopy Ijazah terakhir.\r\n4. Yang bersangkutan wajib hadir untuk pengambilan poto dan sidik jari.\r\n \r\nPermohonan Perbaikan data KTP-el :\r\n1. Potocopy Kartu Keluarga yang sudah diperbaiki datanya;\r\n2. Potocopy KTP-el yang lama;\r\n3. Potocopy Akta Lahir dan/atau;\r\n4. Potocopy ijazah terakhir;\r\n\r\nPermohonan Penggantian KTP-el :\r\n1. Potocopy Kartu Keluarga;\r\n2. Surat Keterangan Hilang dari Kepolisian (POLSEK)'),
(11, 'Penerbitan Kartu Keluarga', 'Penerbitan Kartu Keluarga (KK) Baru\r\n1. Fotocopy Kartu Keluarga (KK)\r\n2. Fotocopy Buku Nikah/ Ijazah/ Akte Kelahiran\r\n3. Fotocopy KTP Pemohon\r\n4. Surat Pengantar dari RT dan RW\r\n5. Surat Pengantar dari Kelurahan ( Formulir F-1.01 dan Formulir F-1.15 )\r\n6. Surat Keterangan Pindah Datang dari Daerah Asal, (yang telah ditanda tangani Lurah/ Camat/ Kepala Dinas Kependudukan dan Pencatatan Sipil, sesuai  klasifikasi penduduk)\r\n\r\nPerubahan Kartu Keluarga (KK)\r\n1. Kartu Keluarga (KK) Asli\r\n2. Fotocopy Akte Kelahiran (Penambahan )\r\n3. Akta Kematian (Karena Meninggal) atau Akta Perkawinan (Karena Menikah)\r\n4. Surat Pengantar RT RW\r\n5. Surat Pengantar dari Kelurahan (Formulir F - 1.01 dan Formulir F - 1.16)\r\n\r\nKartu Keluarga Karena Hilang/ Rusak\r\n1. Surat Keterangan Kehilangan dari Kepolisian (Hilang)\r\n2. Kartu Keluarga Asli (Rusak)\r\n3. Surat Pengantar RT RW\r\n4. Surat Pengantar dari Kelurahan ( Formulir F-1.01 dan Formulir F-1.15 )'),
(12, 'Permohonan Surat Pindah', 'SURAT PINDAH KELUAR :\r\n1. KTP dan Kartu Keluarga (KK) Asli.\r\n2. Potocopy KTP dan KK.\r\n3. KTP atau KK Hilang Lampirkan :\r\n    • Surat Keterangan Hilang dari Kepolisian.\r\n    • Surat Keterangan dari Kecamatan.\r\n\r\n4. Surat Pengantar dari RT dan RW setempat.\r\n5. Surat Pengantar Pindah dari Kelurahan (F1.33).\r\n6. Mengisi dan Menandatangani Formulir Permohonan Pindah WNI dari Kelurahan (F1.34).\r\n7. Surat Pengantar Pindah dari Kecamatan (F1.35).\r\n8. Mengisi dan Menandatangani Formulir Permohonan Pindah WNI dari Kecamatan (F1.36).\r\n9. Yang Pindah Usia dibawah Umur 17 Tahun Lampirkan :\r\n    • Potocopy KTP Orang Tua.\r\n    • Potocopy Akta Kelahirah Anak yang pindah.\r\n    • Surat Pernyataan Persetujuan dari Orang Tua bermaterai Rp.6000.\r\n    • Pas Foto Ukuran 4X6 (2 Lembar).\r\n\r\nSURAT PINDAH DATANG:\r\n1. Surat Keterangan Pindah WNI dan Biodata Penduduk WNI dari Dinas Pendudukan dan Pencatatan Sipil Daerah Asal.\r\n2. Surat Pengantar dari RT dan RW Yang dituju.\r\n3. Formulir Permohonan Pindah Datang WNI dari Kelurahan (F1.38).\r\n4. Formulir Permohonan Pindah Datang WNI dari Kecamatan (F1.39).\r\n5. Yang Pindah Usia dibawah Umur 17 Tahun Lampirkan :\r\n    • Potocopy KTP Orang Tua\r\n    • Potocopy KTP Yang Dikuasai\r\n    • Potocopy KK Yang Ditumpangi        \r\n    • Surat Kuasa dari Orang Tua Bermaterai Rp.6000'),
(13, 'Pengesahan SKUD dan Yayasan', 'Pengesahan/Validasi SKDU\r\n1. Surat Pengantar RT dan RW Setempat dan ijin warga.\r\n2. Potocopy KTP Pemohon/Pemilik Usaha\r\n3. Potocopy Surat Tanah (jika tanah milik sendiri)\r\n4. Potocopy Surat Perjanjian Kontrak Tanah/Gedung (jika tempat usaha sewa)\r\n5. Potocopy bukti lunas PBB tahun terakhir\r\n6. Potocopy Akta Pendirian usaha dari Notaris (jika berbentuk CV/PT)\r\n7. Surat Keterangan Domisili Usaha yang dikeluarkan Lurah Setempat (ditandatangani Lurah dan stempel asli)\r\n8. Berita Acara Hasil Peninjauan Lapangan oleh Petugas Kelurahan.\r\n\r\nPengesahan Perpanjang SKDU\r\n1. Potocopy KTP Pemohon\r\n2. SKDU asli tahun sebelumnya\r\n3. Surat Keterangan Domisili Usaha yang dikeluarkan Lurah Setempat (ditandatangani Lurah dan stempel asli)  \r\n4. Surat Pengantar RT dan RW\r\n\r\nPengesahan Keterangan Domisili Yayasan/Lembaga\r\n1. KTP & KK Pemohon\r\n2. Akte Pendirian / Rekom Yayasan\r\n3. Poto Gedung Yayasan/Sekolah\r\n4. Surat Pengantar RT/RW\r\n5. BAPL (Berita Acara Peninjauan Lapangan) dari kelurahan\r\n6. Surat Keterangan Domisili Yayasan dari Kelurahan (ttd Lurah dan stempel asli)'),
(14, 'Pengesahan SKCK', '1.  Potocopy KTP/SIM & Kartu Keluarga.\r\n\r\n2.  Potocopy Akta Kelahiran/Surat Keterangan Lahir, dan Ijazah Terakhir.\r\n\r\n3.  Surat Pengantar RT/RW setempat.\r\n\r\n4.  Surat SKCK dari kelurahan.'),
(15, 'Pengesahan Surat Pernyataan Waris', 'Pengesahan Surat Pernyataan Waris\r\n\r\n1. Potocopy KTP & KK Para Ahli Waris\r\n\r\n2. Surat Keterangan Kematian dari RS/Puskesmas/Dokter/Kelurahan\r\n\r\n3. Surat Pengantar RT/RW\r\n\r\n4. Surat Pernyataan Waris dari Kelurahan\r\n\r\n5. Surat Kelengkapan Lainnya'),
(16, 'Permohonan Surat Dispensasi Pernikahan', 'Syarat:\r\n\r\n1.  Potocopy KTP & KK Pemohon Calon Suami Istri\r\n\r\n2.  Surat Pernyataan Belum Menikah/Surat Cerai/Surat Kematian\r\n\r\n3.  Surat Pengantar RT/RW\r\n\r\n4.  Surat Pengantar dari Kelurahan N1, N2, N3,N4'),
(17, 'Pengesahan SKTM', 'Syarat:\r\n\r\n1. Potocopy KTP & KK Pemohon\r\n\r\n2. Surat Pengantar RT/RW\r\n\r\n3. Surat Keterangan Tidak Mampu Dari Kelurahan'),
(18, 'Penerbitan Akta Jual Beli/Hibah/Pembagian Hak', 'Persyaratan Pengurusan AJB/Akta Hibah/APHB:                                                                                             \r\n\r\nDokumen dari Penjual/Pemberi Hibah/Pemberi APHB:                                                                                                \r\n1. Foto Copy KTP                                                                                             \r\n2. Foto copy KK                                                                                \r\n3. Surat Pernyataan Persetujuan                                                                                             \r\n4. Foto Copy Surat Nikah (apabila Persetujuan AJB/APHB/Hibah adalah Suami/Istri)        \r\n5. Foto Copy Surat Kematian dari Pelayanan Medis/Kelurahan (apabila Penjual telah meninggal)                              \r\n6. Foto copy Akta Kelahiran Anak (apabila persetujuan adalah anak)       \r\n7. Foto Copy KTP dan KK Saudara kandung (apabila persetujuan adalah saudara kandung)                           \r\n8. Foto Copy Surat pernyataan waris dan atau surat kuasa waris untuk akta AJB/APHB/Hibah yang diketahui RT dan RW serta ditandatangani kepala desa\r\n\r\nDokumen dari Pembeli/Penerima Hibah/Pemberi APHB:                                                                                            \r\n1. Foto Copy KTP                                                                                             \r\n2. Foto copy KK                                                                                \r\n3. Foto Copy Surat pernyataan waris dan atau surat kuasa waris untuk akta AJB/APHB/Hibah yang diketahui RT dan RW serta ditandatangani kepala desa                                                                                          \r\n4. Foto Copy Lunas PBB tahun berjalan                                                                                 \r\n5. Foto Copy Lunas PPH dan BPHTB                                                                                         \r\n6. Surat Permohonan Pembuatan AJB/Akta Hibah/APHB                                                                                              \r\n7. Surat keterangan dan riwayat tanah dari kelurahan apabila belum bersertifikat             \r\n8. Surat Kuasa pengurusan oleh lurah                                                                                    \r\n9. Surat Keterangan bidang tanah                                                                                            \r\n10. Berita acara Jual Beli                                                                                               \r\n11. Asli surat tanah dasar (sertifikat, AJB/Akta Hibah/APHB/Girik)\r\n12. Draft AJB/Akta Hibah/APHB yang diajukan');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gambargallery`
--

CREATE TABLE `gambargallery` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `postedby` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambargallery`
--

INSERT INTO `gambargallery` (`id`, `nama`, `postedby`, `created_at`, `updated_at`, `gambar`) VALUES
(8, 'Sertijab', 'admin kel. pondok jagung', '2021-04-17 18:19:14', '2021-04-17 18:19:14', '177.jpg-1618683554.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `nama`, `gambar`) VALUES
(1, 'Kelurahan Setu', 'Kel_Setu.png'),
(2, 'Kelurahan Keranggan', 'Kel_Keranggan.png'),
(3, 'Kelurahan Muncul', 'Kel_Muncul.png'),
(4, 'Kelurahan Babakan', 'Kel_Babakan.png'),
(5, 'Kelurahan Bakti Jaya', 'Kel_Bakti_Jaya.png'),
(6, 'Kelurahan Kademangan', 'Kel_Kademangan.png');

-- --------------------------------------------------------

--
-- Table structure for table `kepwal`
--

CREATE TABLE `kepwal` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kepwal`
--

INSERT INTO `kepwal` (`id`, `nama`, `link`) VALUES
(1, 'Nomor: 188.44/Kep.11-Huk/2019 Tentang Pembentukan Pusat Pembelajaran Keluarga Periode 2019-2022', 'https://kecsetu.tangerangselatankota.go.id/uploads/kepwal/1.pdf'),
(2, 'Nomor 003.3/Kep.533-Huk/2019 Tentang Pembentukan Panitia Penyelenggara Peringatan Hari Jadi Ke 11 Ko', 'https://kecsetu.tangerangselatankota.go.id/uploads/kepwal/2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tlp` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `nama`, `tlp`, `email`, `alamat`, `perihal`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Ammaridho', '081992545654', 'ridhosiregar84@yahoo.com', 'Perum bukit sawangan indah blok d19 no 3 Depok Jawabarat', 'Masalah system', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi beatae alias odio voluptatum rem nisi atque animi necessitatibus officia. Perferendis tenetur magnam recusandae culpa eos atque dolorum, cupiditate repudiandae. Earum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi beatae alias odio voluptatum rem nisi atque animi necessitatibus officia. Perferendis tenetur magnam recusandae culpa eos atque dolorum, cupiditate repudiandae. Earum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi beatae alias odio voluptatum rem nisi atque animi necessitatibus officia. Perferendis tenetur magnam recusandae culpa eos atque dolorum, cupiditate repudiandae. Earum.', NULL, NULL),
(2, 'Amanah siregar', '3421521345234623', 'asdgsdagasdg', 'alamdaskfnaisdmnfpkmasdmf', 'asdgasdf', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi beatae alias odio voluptatum rem nisi atque animi necessitatibus officia. Perferendis tenetur magnam recusandae culpa eos atque dolorum, cupiditate repudiandae. Earum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi beatae alias odio voluptatum rem nisi atque animi necessitatibus officia. Perferendis tenetur magnam recusandae culpa eos atque dolorum, cupiditate repudiandae. Earum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi beatae alias odio voluptatum rem nisi atque animi necessitatibus officia. Perferendis tenetur magnam recusandae culpa eos atque dolorum, cupiditate repudiandae. Earum.', NULL, NULL),
(6, 'Amanah Siregar', '085155195651', 'syalafadillah@yahoo.com', 'Perum Bukit Sawangan indah', 'Masalah Jaringan Internet', 'Internet saya lemot sudah kira kira dua bulan', '2021-04-14 07:49:52', '2021-04-14 07:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `perda`
--

CREATE TABLE `perda` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perda`
--

INSERT INTO `perda` (`id`, `nama`, `link`) VALUES
(1, 'Nomor 3 Tahun 2019 Tentang Penataan Kecamatan', 'https://kecsetu.tangerangselatankota.go.id/uploads/perda/3.pdf'),
(2, 'Peraturan Daerah Nomor 1 Tahun 2018 Penyelenggaraan Kota Layak Anak', 'https://kecsetu.tangerangselatankota.go.id/uploads/perda/4.pdf'),
(3, 'PERDA NO 4 TAHUN 2016 TENTANG KAWASAN TANPA ROKOK', 'https://kecsetu.tangerangselatankota.go.id/uploads/perda/5.pdf'),
(4, 'PERDA NO 3 TH 2013 TENTANG PENGELOLAAN SAMPAH', 'https://kecsetu.tangerangselatankota.go.id/uploads/perda/6.pdf'),
(5, 'PERDA NO 8 TH 2013 TENTANG PENGELOLAAN KEARSIPAN', 'https://kecsetu.tangerangselatankota.go.id/uploads/perda/7.pdf'),
(6, 'PERDA NO 1 TH 2013 TENTANG PEMAKAMAN DAN PENGABUAN JENAZAH', 'https://kecsetu.tangerangselatankota.go.id/uploads/perda/8.pdf'),
(7, 'PERDA NO 5 TH 2016 TENTANG URUSAN PEMERINTAH DAERAH', 'https://kecsetu.tangerangselatankota.go.id/uploads/perda/9.pdf'),
(8, 'PERDA NO 6 TH 2013 TENTANG KESEJAHTERAAN SOSIAL', 'https://kecsetu.tangerangselatankota.go.id/uploads/perda/10.pdf'),
(9, 'PERDA NO 8 TH 2017 TENTANG PENGELOLAAN BARANG MILIK DAERAH', 'https://kecsetu.tangerangselatankota.go.id/uploads/perda/11.pdf'),
(10, 'PERDA NO 8 TH 2016 TENTANG PEMBENTUKAN & SUSUNAN PERANGKAT DAERAH', 'https://kecsetu.tangerangselatankota.go.id/uploads/perda/12.pdf'),
(11, 'PERDA NO 9 TH 2016 TENTANG RPJMD 2016-2021', 'https://kecsetu.tangerangselatankota.go.id/uploads/perda/13.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `perwal`
--

CREATE TABLE `perwal` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perwal`
--

INSERT INTO `perwal` (`id`, `nama`, `link`) VALUES
(1, 'NOMOR 113 TAHUN 2016 TENTANG KEDUDUKAN, SUSUNAN ORGANISASI, TUGAS, FUNGSI, DAN TATA KERJA KECAMATAN ', 'https://kecsetu.tangerangselatankota.go.id/uploads/perwal/10.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videogallery`
--

CREATE TABLE `videogallery` (
  `id` int(11) NOT NULL,
  `video` varchar(255) NOT NULL,
  `postedby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videogallery`
--

INSERT INTO `videogallery` (`id`, `video`, `postedby`) VALUES
(1, 'https://www.youtube.com/embed/QeqbrVFOO74', 'Admin Kec. Setu'),
(2, 'https://www.youtube.com/embed/UgX2Kjn8yo4', 'admin kec. serpong');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bacaan`
--
ALTER TABLE `bacaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deskripsi`
--
ALTER TABLE `deskripsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambargallery`
--
ALTER TABLE `gambargallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepwal`
--
ALTER TABLE `kepwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perda`
--
ALTER TABLE `perda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perwal`
--
ALTER TABLE `perwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videogallery`
--
ALTER TABLE `videogallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bacaan`
--
ALTER TABLE `bacaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `deskripsi`
--
ALTER TABLE `deskripsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambargallery`
--
ALTER TABLE `gambargallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kepwal`
--
ALTER TABLE `kepwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `perda`
--
ALTER TABLE `perda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `perwal`
--
ALTER TABLE `perwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videogallery`
--
ALTER TABLE `videogallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

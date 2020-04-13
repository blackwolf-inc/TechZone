-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Apr 2020 pada 08.19
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_techzone`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(30) NOT NULL,
  `username_admin` varchar(200) NOT NULL,
  `pass_admin` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `job` int(10) NOT NULL,
  `kode` int(40) NOT NULL,
  `jumlah_post` int(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `carousel`
--

CREATE TABLE `carousel` (
  `no` int(11) NOT NULL,
  `Id_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `carousel`
--

INSERT INTO `carousel` (`no`, `Id_post`) VALUES
(1, 15),
(2, 3),
(3, 6),
(4, 13),
(5, 10),
(6, 11),
(7, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `coment`
--

CREATE TABLE `coment` (
  `id_coment` int(30) NOT NULL,
  `id_post` varchar(30) NOT NULL,
  `nama_komen` varchar(30) NOT NULL,
  `isi_comen` varchar(10000) NOT NULL,
  `id_user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `coment`
--

INSERT INTO `coment` (`id_coment`, `id_post`, `nama_komen`, `isi_comen`, `id_user`) VALUES
(1, '17', 'contoh', 'contoh komentar', 'a@qa.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(30) NOT NULL,
  `pass_user` varchar(30) NOT NULL,
  `alamat_user` varchar(5000) NOT NULL,
  `id_komen_user` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `ttl` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `utama`
--

CREATE TABLE `utama` (
  `id_post` int(30) NOT NULL,
  `tgl_post` varchar(100) NOT NULL,
  `jenis_post` int(10) NOT NULL,
  `titel_post` varchar(300) NOT NULL,
  `isi_post` longtext NOT NULL,
  `id_komen` varchar(20) NOT NULL,
  `id_admin` varchar(30) NOT NULL,
  `jmlh_comen` varchar(1000) NOT NULL,
  `id_gambar` varchar(1000) NOT NULL,
  `id_gambar_crop` varchar(300) NOT NULL,
  `link_post` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `utama`
--

INSERT INTO `utama` (`id_post`, `tgl_post`, `jenis_post`, `titel_post`, `isi_post`, `id_komen`, `id_admin`, `jmlh_comen`, `id_gambar`, `id_gambar_crop`, `link_post`) VALUES
(1, 'Sun Apr 2020', 5, 'Pasien Covid-19 yang terkonfirmasi positif bertambah 399 orang ', 'Pasien Covid-19 yang terkonfirmasi positif bertambah 399 orang pada Minggu (12/4/2020). Dengan bertambahnya pasien tersebut, maka total kasus Covid-19 yang terkonfirmasi positif di Indonesia menjadi 4.241 kasus. \"Kasus positif yang kita dapatkan per hari ini sebanyak 399 orang sehingga total menjadi 4.241 orang,\" ujar Juru Bicara Pemeirntah untuk Penanganan Covid-19 Achmad Yurianto dalam konferensi pers di BNPB, Minggu (12/4/2020). Yuri mengatakan, kasus terkonfirmasi positif masih terus bertambah karena penyebaran virus corona masih terjadi di tengah masyarakat.\r\n\r\nOleh karena itu, ia meminta semua masyarakat bersatu padu untuk memutus penularan tersebut. \"Mari kita yakini penyebaran masih terjadi, ancaman kesehatan lain masih ada. Mari putus penularan dan jaga kesehatan,\" kata Yuri. Meski kasus positif bertambah, akan tetapi jumlah pasien yang sembuh juga bertambah sehingga totalnya menjadi 359 orang. Sementara yang meninggal dunia bertambah sebanyak 46 orang sehingga totalnya menjadi 373 orang. Yuri pun meyakini bahwa seluruh masyarakat Indonesia bisa melawan Covid-19 yang saat ini masih menjadi pandemi.\r\n\r\n', '', 'admin1', '', '../data_gambar/12042030421.jpeg', '', 'https://nasional.kompas.com/read/2020/04/12/16121471/update-12-april-bertambah-399-orang-kasus-positif-covid-19-di-indonesia-jadi.'),
(2, 'Sun Apr 2020', 5, '3 Terduga Provokator Penolakan Pemakaman Jenazah Perawat Positif Covid-19 Ditangkap', ' Tiga orang yang diduga jadi provokator penolakan pemakaman jenazah seorang perawat yang meninggal dunia karena Covid-19 telah ditangkap polisi pada Sabtu (11/4/2020) sekitar 12.30 WIB. Tiga pria yang ditetapkan tersangka tersebut diketahui merupakan tokoh masyarakat di Desa Sewakul, Ungaran Barat, Kabupaten Semarang yakni THP (31), BSS (54), dan S (60). Mereka diduga memprovokasi 10 warga untuk memblokade jalan masuk menuju pemakaman.\r\n\r\nAkibat perbuatan mereka petugas pemakaman yang hendak melaksanakan tugasnya merasa ketakutan dan membatalkan pemakaman di area tersebut. \"Para tersangka melakukan tindakan berupa provokasi warga dan menghalangi - halangi serta melarang petugas pemakaman yang akan melaksanakan tugasnya memakamkan jenazah yang terinfeksi virus corona,\" jelas Direktur Reskrimum Polda Jateng Kombes Budi Haryanto saat dikonfirmasi, Sabtu (11/4/2020).\r\n\r\n', '', 'admin1', '', '../data_gambar/12042033432.jpg', '', '3 Terduga Provokator Penolakan Pemakaman Jenazah Perawat Positif Covid-19 Ditangkap'),
(3, 'Sun Apr 2020', 5, '5 upaya jokowi selamatkan nasib karyawan selama wabah virus corona.', ' Pemerintahan Presiden Joko Widodo ( Jokowi) melakukan berbagai upaya agar jumlah pemutusan hubungan kerja ( PHK) bisa ditekan sekecil mungkin di tengah wabah virus corona atau Covid-19. Merebaknya virus yang bermula dari Kota Wuhan di China ini membuat banyak negara melakukan langkah pembatasan aktivitas warganya, termasuk di Indonesia.\r\n\r\n Diperkirakan, ada sekitar 4 juta pekerja yang terancam kehilangan pekerjaan di tengah kondisi ekonomi yang sulit ini. Bagi karyawan yang sudah terlanjur terkena kebijakan PHK perusahaan, pemerintah juga sudah menyusun skema untuk meringankan beban para pekerja tersebut. Berikut 5 upaya Jokowi selamatkan nasib pekerja selama wabah virus corona: Baca juga: Perluasan PSBB Berpotensi Tingkatkan PHK, Ini yang Dilakukan Pemerintah 1. Kartu Prakerja Pemerintah telah membuka pendaftaran Kartu Prakerja. Cara mendapatkan Kartu Prakerja bisa dilakukan secara online.\r\n\r\n Meski diprioritaskan bagi mereka yang berstatus pengangguran dan korban PHK, program ini juga terbuka untuk karyawan dan wirausahawan. Para peserta yang terdaftar akan menerima bantuan uang sebesar Rp 3.550.000 untuk biaya pelatihan dan insentif. Syarat Kartu Prakerja adalah Warga Negara Indonesia (WNI), usia minimal 18 tahun, dan sedang tidak mengikuti pendidikan formal. Ada beberapa pilihan pelatihan yang bisa diambil sesuai dengan minat peserta Kartu Prakerja 2020. \r\n\r\nTujuan pelatihan, yakni memberikan keterampilan yang bisa digunakan untuk kebutuhan industri maupun berwirausaha. Beberapa alternatif pelatihan antara lain cara berjualan secara online, menjadi fotografer, menguasai aplikasi komputer, kursus bahasa, keterampilan perawatan kecantikan, menjadi pelatih kebugaran, cara mendapatkan penghasilan dari media sosial, dan lain-lain. Baca juga: Pilihan Kursus Kartu Prakerja: Cara Jualan Online hingga Perawatan Kecantikan 2. Insentif untuk korban PHK Melalui BP Jamsostek, pemerintah masih menggodok skema pemberian insentif bagi pekerja korban PHK. Rencananya, setiap pekerja korban PHK akan diberikan insentif sebesar Rp 1 juta hingga Rp 5 juta untuk 3 bulan. Dikutip dari Kontan, Menteri Keuangan Sri Mulyani Indrawati memastikan korban PHK akibat dampak corona bakal mendapatkan bantuan berupa santunan sekaligus pelatihan. Santunan oleh BPJamsostek itu pun berbeda dengan program Kartu Prakerja.\r\n\r\n', '', 'admin3', '', '../data_gambar/12042039333.jpeg', '', '5 Upaya Jokowi Selamatkan Nasib Karyawan Selama Wabah Virus Corona'),
(4, 'Sun Apr 2020', 5, 'Peneliti Temukan 3 Varian Virus Corona Penyebab Covid-19, Apa Saja?', ' Para peneliti yang berasal dari Universitas Cambridge, Inggris dan Jerman telah menganalisis 160 genom virus corona yang berasal dari manusia. ', '', 'admin1', '', '../data_gambar/12042047214.jpeg', '', ' https://www.kompas.com/tren/read/2020/04/12/125022565/peneliti-temukan-3-varian-virus'),
(5, 'Sun Apr 2020', 5, 'Update: 4.241 Orang Terinfeksi Covid-19, Jumlah Tambahan Kasus Terbanyak di Jawa Timur', '\r\nPeningkatan jumlah kasus virus corona masih terjadi di Indonesia. Per 12 April 2020, jumlah kasus infeksi Covid-19 mencapai 4.241 kasus. Jumlah ini mengalami peningkatan sebanyak 399 kasus baru dari laporan di hari sebelumnya. Sementara itu, jumlah pasien sembuh mencapai 359 atau mengalami peningkatan 73 kesembuhan dibandingkan hari Sabtu (11/4/2020). Kemudian, kasus kematian terbaru sebanyak 373, yaitu mengalami peningkatan 46 kasus dari hari sebelumnya. Adapun kasus-kasus ini telah dilaporkan terjadi di seluruh provinsi di Indonesia. Berdasarkan data terbaru, berikut adalah perkembangan dan rincian kasus Covid-19 di Indonesia: Baca juga: Antisipasi Corona, Per 1 Mei Tiket Penyeberangan Harus Dibeli Via Online Kasus baru terbanyak di Jawa Timur Kasus-kasus baru yang dilaporkan pada 12 April ini datang dari beberapa provinsi, yaitu Bali, Banten, DKI Jakarta, Jawa Barat, Jawa Tegah, Jawa Timur, Kalimantan Barat, Kalimantan Selatan, NTB, Sumatera Barat, Sumatera Utara, Sulawesi Selatan, Maluku, Papua Barat, dan Papua. Jumlah kasus baru terbanyak dicatatkan oleh Jawa Timur, yaitu sebanyak 119 kasus sehingga jumlah kasus total menjadi 386. Sementara, pasien sembuh baru dan pasien meninggal baru, paling banyak dilaporkan di DKI Jakarta, yaitu berturut-turut 60 orang dan 36 orang. Hingga kini, secara akumulatif, jumlah pasien sembuh paling banyak masih tercatat di DKI Jakarta, disusul Jawa Timur. Sedangkan untuk kasus kematian akumulatif, jumlah paling banyak dicatatkan oleh DKI Jakarta, disusul Jawa Barat. Baca juga: Lahir Saat Wabah Corona, Bayi Ini Diberi Nama Covid Bryant Rincian kasus di 34 provinsi Adapun rincian kasus Covid-19 berdasarkan data terbaru per Minggu (12/4/2020) adalah sebagai berikut: 1. DKI Jakarta Terkonfirmasi: 2.044 kasus Pasien sembuh: 142 orang Pasien meninggal: 195 orang 2. Jawa Barat Terkonfirmasi: 450 kasus Pasien sembuh: 19 orang Pasien meninggal: 43 orang 3. Jawa Timur Terkonfirmasi: 386 kasus Pasien sembuh: 68 orang Pasien meninggal: 27 orang\r\n\r\n', '', 'admin4', '', '../data_gambar/12042050134.jpg', '', 'https://www.kompas.com/tren/read/2020/04/12/175200765/update--4.241-orang-terinfeksi-covid-19-jumlah-tambahan-kasus-terbanyak-di.'),
(6, 'Sun Apr 2020', 4, 'Berpeluang Jadi PNS, Ini Cara Daftar Lowongan Kerja di BIN untuk Tim Covid-19', '\r\n Badan Intelijen Negara (BIN) membuka lowongan pekerjaan untuk Tim Penanganan Tes Covid-19. Ada 7 posisi yang dibuka pada lowongan BIN untuk tim ini. Saat dikonfirmasi, Juru Bicara Badan Intelijen Negara (BIN) Wawan Hari Purwanto membenarkan pekerjaan tersebut. Bagaimana cara mendaftarnya? Wawan mengatakan, rincian persyaratan dapat diakses di laman resmi BIN yaitu http://bin.go.id/. \"Iya benar (ada lowongan). Mekanisme lebih lengkap bisa dilihat di flyer yang sudah diunggah di website kami. Cek saja,\" kata Wawan saat dihubungi Kompas.com, Minggu (12/4/2020). Selain itu, kata Wawan, ada berbagai fasilitas yang akan diberikan jika peserta seleksi lolos dalam rekrutmen tersebut. Baca juga: 20.577 Orang Meninggal Dunia Akibat Corona, Jumlah Kematian di AS Lampaui Italia dan China Salah satunya, mendapatkan prioritas menjadi Pegawai Negeri Sipil ( PNS) atau PPPK tahun anggaran 2020. Wawan menjelaskan, fasilitas-fasilitas lain juga akan didapat oleh peserta yang lolos seleksi. Cara mendaftar dan fasilitas yang didapatkan Berikut informasi detail soal lowongan, syarat-syarat yang harus dipenuhi, dan cara pendaftarannya: Lowongan yang dibuka Dokter Laboratoris atau analis kesehatan Perawat Administrasi kesehatan Pengemudi Operator disinfektan Tenaga komunikasi Syarat umum Warga Negara Indonesia (WNI) Memiliki KTP Sehat Jasmani dan Rohani Berdedikasi Tinggi Tidak pernah tersangkut pidana atau melanggar hukum Tidak berkedudukan sebagai PNS, TNI, dan Polri Menggunakan Masker pada tahapan seleksi Syarat khusus Dokter Diutamakan spesialis patologi klinik Lulusan profesi dokter Memiliki SIP aktif Memiliki STR aktif Memiliki sertifikat ACLS, ATLS, dan PPGD yang masih berlaku Pengalaman kerja di RS minimal 1 tahun Laboratoris/Analis Kesehatan Minimal D-III Analis Kesehatan Memiliki STR Aktif Pengalaman kerja di laboratorium minimal 1 tahun', '', 'admin4', '', '../data_gambar/1204205256a1.jpg', '', 'https://www.kompas.com/tren/read/2020/04/12/143013865/berpeluang-jadi-pns-ini-cara-daftar-lowongan-kerja-di-bin-untuk-tim-covid.'),
(7, 'Sun Apr 2020', 4, '[HOAKS] Surat LTMPT tentang Perubahan Jadwal dan Penambahan Kuota UTBK', 'Beredar informasi yang mencatut Lembaga Tes Masuk Perguruan Tinggi (LTMPT). Kali ini, beredar surat edaran berkop LTMPT yang menyebutkan adanya perubahan peraturan terkait pelaksanaan Ujian Tulis Berbasis Komputer (UTBK). Saat dikonfirmasi, LTMPT menyatakan bahwa informasi itu tidak benar alias hoaks. Informasi yang beredar Informasi yang beredar menyebutkan, kuota UTBK ditambah menjadi 70 persen. Selain itu, disebutkan bahwa ujian dengan 2 macam tes (TPA dan TPS), setiap peserta bisa tes sebanyak 2 kali (seperti tahun lalu), nilai UTBK langsung keluar setelah tes, dan tidak ada seleksi mandiri. Adapun pesan yang beredar adalah sebagai berikut: SURAT EDARAN TIM PELAKSANA LTMPT NOMOR: 12/SE.LTMPT/2020 TENTANG PERUBAHAN JADWAL PELAKSANAAN UTBK 2020 (Tertunda) Mengingat pandemic virus covid-19 ini, yang mana tidak ada yang mengetahui kapan benar-benar lenyap dan berakhirnya pandemik ini, karena sulitnya memprediksi akan hal ini: Pihak LTMPT tidak luput mencari solusi cadangan dalam seleksi masuk PTN. Maka sampai saat ini masih dirapatkan mengenai pelaksanaan ujian tersebut harus mengacu teguh pada keputusan terakhir yang mana akan diambil\r\n\r\n. Apabila sampai bulan-bulan yang telah diprediksi tersebut pandemik ini belum juga positif memungkinkan untuk pelaksanaan test, maka solusi berikutnya yaitu dengan menghapus ketentuan yang sudah dimuat dalam Surat Edaran No. 11/se.ltmpt/2020 yang kami muat terlalu dini. Yaitu dengan menghapus Seleksi mandiri PTN, dengan persetujuan serta merapatkannya terhadap jajaran rektor setiap PTN terkait, hal ini guna memberikan rentang yang cukup untuk pelaksanaan UTBK nasional. Sehingga tidak benar-benar bentrok dengan Seleksi mandiri (apabila seleksi mandiri diadakan). Apabila langkah ini diambil, maka point penting berikutnya yaitu:\r\n', '', 'admin1', '', '../data_gambar/1204205555a2.jpg', '', 'https://www.kompas.com/tren/read/2020/04/12/164951665/hoaks-surat-ltmpt-tentang-perubahan-jadwal-dan-penambahan-kuota-utbk.'),
(8, 'Sun Apr 2020', 4, 'Sudah Dibuka! Berikut Info Terbaru Cara Mendaftar Kartu Prakerja', 'Pendaftaran Kartu Prakerja sudah dibuka Sabtu (11/4/2020) malam. Program Kartu Prakerja adalah bantuan biaya pelatihan yang bertujuan untuk mengembangkan kompetensi kerja. Sasaran penerima adalah warga berusia 18 tahun ke atas dan sedang tidak sekolah/kuliah. Bantuan ini hanya akan diberikan sekali seumur hidup untuk peserta. Pendaftaran hanya bisa dilakukan di situs resmi, yaitu prakerja.go.id. Adapun cara mendaftarnya adalah sebagai berikut: 1. Perhatikan syaratnya Orang yang dapat mendaftar adalah Warga Negara Indonesia minimal berusia 18 tahun dan tidak sedang menempuh pendidikan formal. Saat mendaftar siapkan nama lengkap, email, dan buat password. Setelah mendaftar, data diverifikasi. Buka email Anda dan klik link yang dikirim kepada Anda untuk melakukan verifikasi. Setelah itu login ke website Prakerja lagi. Klik Login atau Masuk pada laman depan. Masukkan email dan password yang sudah dibuat. Lalu isi data diri Anda di sana, lengkapi dengan data nomor KTP dan swafoto bersama KTP. Setelah itu verifikasi nomor telepon Anda. Caranya dengan mengisikan kode OTP yang dikirim ke nomor Anda. Selanjutnya mengisi pernyataan pendaftar. Baca juga: Pendaftaran Kartu Prakerja Dimulai Hari Ini, Apa Saja yang Perlu Diketahui? 2. Ikuti tes Akan ada tes motivasi dan matematika dasar. Tes ini bertujuan untuk mengenali kompetensi dan potensi yang Anda miliki. Tes Motivasi dan Kemampuan Dasar berdurasi maksimal 25 menit dengan total 19 soal. Penggunaan alat tulis seperti kertas, pensil/pulpen diperbolehkan untuk menyelesaikan soal.\r\n\r\n', '', 'admin1', '', '../data_gambar/1204200056a3.jpg', '', 'https://www.kompas.com/tren/read/2020/04/11/210934565/sudah-dibuka-berikut-info-terbaru-cara-mendaftar-kartu-prakerja.'),
(10, 'Sun Apr 2020', 1, 'Loker BUMN, Berikut Informasi Rekrutmen PT Bio Farma', 'Perusahaan pelat merah yang bergerak di bidang farmasi, PT Bio Farma (Persero) membuka lowongan pekerjaan. Lowongan kerja tersebut terbuka bagi beberapa jurusan atau program studi, seperti S1 Farmasi, D3 Farmasi, D3 Analis Kesehatan, dan D3 Analis Kimia. Adapun lamaran dikirim melalui alamat e-mail biorekrutmen@biofarma.co.id. Proses pengiriman lamaran telah berlangsung dan diterima hingga Minggu (12/4/2020). Baca juga: Pendaftaran 8 Sekolah Kedinasan Diundur karena Virus Corona, Mana Saja? Apa saja persyaratannya? Pelamar merupakan lulusan S1 atau D3 sesuai jurusan atau program studi yang dibuka. Minimal nilai indeks prestasi kumulatif (IPK) sebesar 3.00 dan berasal dari perguruan tinggi berakreditasi B. Usia maksimal yang diperbolehkan mendaftar adalah 30 tahun per tahun ini. Panitia pelaksana rekrutmen menegaskan, seluruh proses seleksi tak dipungut biaya apa pun. Sementara itu, pengumuman seleksi hanya melalui alamat e-mail support-rekrutmen@biofarma.co.id.\r\n', '', 'admin2', '', '../data_gambar/1204200418a4.png', '', 'https://www.kompas.com/tren/read/2020/04/12/112900465/loker-bumn-berikut-informasi-rekrutmen-pt-bio-farma.'),
(11, 'Sun Apr 2020', 1, 'Sampai 14 April, Telkomsel Tawarkan Internet 10 GB Seharga Rp 22.000', 'KOMPAS.com - Promo #SurpriseDeal kembali digelar Telkomsel. Kali ini, Telkomsel menawarkan kuota internet 10 gigabyte dengan harga Rp 22.000. Paket data ini dapat dibeli mulai 12 April pukul 00.00 WIB sampai 14 April 2020 pukul 23.59 WIB. Namun, kuota ini hanya bisa digunakan maksimal tiga hari sejak tanggal pembelian. Jadi pengguna yang mengaktifkan tanggal 12 April bisa memakai kuota sampai 14 April, sedangkan yang membeli pada 14 April bisa menggunakan paket hinggal 16 April 2020. Selain itu, paket ini dapat dibeli hingga lima kali untuk setiap penggunanya selama periode 12-14 April 2020. Sehingga tiap pelanggan bisa mendapatkan kuota total sebanyak 50 GB. Baca juga: Ramai Video Paket Data Telkomsel 30 GB Rp 10, Ini Faktanya Semua pelanggan Simpati, Kartu AS, Loop, dan pascabayar (Kartu Halo, kecuali pelanggan corporate-paid) dapat membeli paket yang dapat digunakan di jaringan 2G, 3G, dan 4G Telkomsel ini. Pengguna bisa mengaktifkannya di aplikasi MyTelkomsel, aplikasi LinkAja, Virtual Assistant, Loop.co.id, atau aplikasi Loop. Khusus pelanggan Kartu Halo, aktivasi hanya bisa dilakukan di aplikasi MyTelkomsel. Apabila sudah membeli paket, pastikan dulu sudah mendapat pesan notifikasi bahwa paket telah diaktifkan. Untuk mengecek kuota data, bisa dilihat di aplikasi MyTelkomsel atau USSD *888#. Namun, kuota data dari paket #SurpriseDeal tidak terakumulasi dengan kuota data yang lain. Apabila pengguna masih memiliki sisa kuota internet aktif dan kemudian mengaktifkan paket promo #SurpriseDeal, akan ada dua paket data yang aktif secara bersamaan. Paket Surprise Deal ini bisa dijadikan hadiah untuk nomor prabayar lain. Melalui aplikasi MyTelkomsel, pemberian hadiah dilakukan lewat menu Gift, kemudian masukkan nomor penerima, dan pilih paket internet Suprise Deal.\r\n', '', 'admin4', '', '../data_gambar/1204200813ba.jpg', '', 'https://tekno.kompas.com/read/2020/04/12/10120307/sampai-14-april-telkomsel-tawarkan-internet-10-gb-seharga-rp-22000.'),
(12, 'Sun Apr 2020', 1, 'Samsung Galaxy A11 dan A21 Meluncur, Andalkan Kapasitas Baterai', ' Samsung meluncurkan sederet Galaxy A series baru di pasar Amerika Serikat. Dua di antaranya adalah Galxy A11 dan A21. Sebagaimana Galaxy A series lain, kedua ponsel mengandalkan kapasitas baterai, kualitas kamera, dan ukuran layar. \"Jika Anda mencari ponsel harga terjangkau dengan baterai tahan lama, layar kelas atas, kamera dengan banyak lensa, dan penyimpanan lega, maka Galaxy A series cocok untuk Anda,\" ujar Drew Blackard, head of US mobile product management at Samsung Electronics America di blog resmi Samsung. Ponsel-ponsel Galaxy A Samsung yang dirilis itu kini juga memiliki desain layar punch hole atau lubang di layar untuk menampung kamera depan, termasuk di lini Galaxy A11 dan Galaxy A21 ini. Walau keduanya sama-sama mengandalkan baterai, layar, dan kamera, namun ada juga perbedaan spesifikasi. Galaxy A11 Galaxy A11 memiliki bentang layar 6,4 inci dengan resolusi HD Plus. Layarnya menggunakan desain Infinity-O atau lubang kamera yang berada di pojok kiri atas. Baca juga: Spesifikasi Lengkap dan Harga Samsung Galaxy M31 di Indonesia Lubang tersebut menampung kamera 8 megapiksel. Sementara di belakang, terdapat tiga kamera yang berjajar secara vertikal. Kamera tersebut terdiri dari kamera wide 13 megapiksel, kamera ultrawide 5 megapiksel, dan kamera bokeh 2 megapiksel. Tidak disebutkan chipset apa yang menjadi otak ponsel ini. Hanya ada keterangan besaran RAM 2 GB dan memori internal 32 GB yang bisa diperluas hingga 512 GB. Di balik cangkang Galaxy A11 tertanam baterai dengan kapasitas 4.000 mAh yang didukung fitur pengisi daya cepat\r\n\r\nSamsung membanderol Galaxy A11 dengan harga 179,9 dollar AS (sekitar Rp Rp 2,8 juta-kurs rupiah saat ini). Ponsel ini baru akan tersedia pertengahan tahun ini, namun Samsung belum menyebut kapan tanggal pastinya. Galaxy A21 Sekilas penampakan Galaxy A21 tidak berbeda dengan Galaxy A11. Sebab keduanya sama-sama mengusung desain Infinity-O dengan letak lubang yang sama. Namun, secara spesifikasi, Galaxy A21 lebih unggul dibanding Galaxy A11. Bentang layarnya lebih luas yakni 6,5 inci. Kamera depannya beresolusi 13 megapiksel. Jumlah kamera belakangnya juga lebih banyak dibanding Galaxy A11. Namun kapasitas baterai yang diusung tetap sama, yakni 4.000 mAh. Baca juga: Samsung Sediakan Layanan Antar Jemput untuk Servis Ponsel Galaxy A21 dibekali quad-camera atau empat kamera yang nangkring di pungggung ponsel. Empat kamera itu terdiri dari kamera utama 16 megapiksel, ultrawide 8 megapiksel, kamera makro 2 megapiksel, dan depth sensor 2 megapiksel. Sama seperti Galaxy A11, Samsung tidak menyebutkan prosesor yang ditanamkan di dalam Galaxy A21. Ponsel ini dibekali kapasitas RAM 3 GB dan memori internal 32 GB yang bisa diperluas 512 GB. Dihimpun KompasTekno, dari situs resmi Samsung, Galaxy A21 dibanderol dengan harga 249,99 dollar AS (sekitar Rp 3,9 juta-kurs saat ini). Samsung Galaxy A21 akan tersedia pada pertengahan tahun 2020 (musim panas), tanggal pastinya belum diumumkan. Belum diketahui juga apakah Galaxy A11 dan Galaxy A21 serta seri Galaxy A lainnya akan turut diboyong Samsung ke Indonesia atau tidak.\r\n', '', 'admin1', '', '../data_gambar/1204201417b3.png', '', 'https://tekno.kompas.com/read/2020/04/10/16310037/samsung-galaxy-a11-dan-a21-meluncur-andalkan-kapasitas-baterai?page=1/'),
(13, 'Sun Apr 2020', 1, 'Melihat Sosok P40 Pro, Smartphone Terbaru Huawei di Indonesia', 'Pada akhir Maret lalu, Huawei meresmikan trio ponsel flagship P40, P40 Pro, dan P40 Pro Plus lewat acara yang digelar secara online di tengah wabah Covid-19 di berbagai belahan dunia. Salah satu ponsel tersebut, yakni P40 Pro, telah resmi memasuki pasaran Indonesia lewat acara peluncuran yang digelar lewat live streaming, Jumat (10/4/2020). Baca juga: Resmi Masuk Indonesia, Huawei P40 Pro Dijual Rp 14,5 Juta KompasTekno berkesempatan menjajal sebuah unit sample dari Huawei P40 Pro, dengan varian warna Deep Sea Blue. Smartphone ini memiliki perbedaan desain dibandingkan pendahulunya, P30 Pro. Kamera depan kini tak lagi ditempatkan di poni berbentuk kecil, melainkan di dalam punch hole yang diposisikan di pojok kiri atas layar. Punch hole tersebut berbentuk elips lantaran memuat dua unit kamera depan, mencakup kamera ToF dan kamera selfie 32 MP (f/2.2) yang kini sudah dibekali autofocus, meningkat dari kamera depan P30 Pro yang hanya memiliki fixed focus.\r\n\r\nHuawei P40 Pro yang dipasarkan di Indonesia dibekali SoC Kirin 990, RAM 8 GB, storage 256 GB, serta baterai 4.200 mAh dengan dukungan fast charging 40 watt. Harganya dipatok sebesar Rp 14.499.000. Nah, seperti apa sosok perangkat ini? Simak penampilan selengkapnya dari Huawei P40 Pro dalam rangkaian foto di tautan berikut.\r\n\r\n', '', 'admin3', '', '../data_gambar/1204201721b6.jpg', '', 'https://tekno.kompas.com/read/2020/04/11/17050087/melihat-sosok-p40-pro-smartphone-terbaru-huawei-di-indonesia'),
(14, 'Sun Apr 2020', 2, 'Erupsi Gunung Anak Krakatau, Ini Daftar Gunung Masuk Level Waspada\"', ' Gunung Anak Krakatau di Lampung kembali erupsi pada pukul 21.58 WIB, Jumat (10/4/2020). Berdasarkan sumber data Kementerian Energi Sumber Daya Mineral (KESDM), Badan Geologi, Pusat Vulkanologi dan Mitigasi Bencana Geologi (PVMBG), tinggi kolom abu teramati sekitar 200 meter di atas puncak atau sekitar 357 meter di atas permukaan laut. Erupsi yang terjadi ini terekam di seismogram dengan amplitudo maksimum 40 milimeter dan durasi sekitar 1 menit 12 detik. Visual letusan disebutkan teramati dari CCTV. Adapun, kolom abu yang teramati berwarna kelabu dengan intensitas sedang hingga tebal condong ke arah selatan. Baca juga: Erupsi Anak Krakatau, Tak Berpotensi Tsunami tapi Aktif Gempa Sementara itu, saat ini Gunung Anak Krakatau berada pada status Level II yaitu waspada. Dalam menanggapi peristiwa ini, KESDM merekomendasikan agar masyarakat atau wisatawan tidak diperbolehkan mendekati kawah dalam radius 2 kilometer dari kawah. Kabar erupsi ini sebelumnya telah banyak beredar di media sosial, karena ada bunyi dentuman di sekitar Bogor, Depok dan Jakarta pada sore hari. Tetapi, bunyi dentuman tersebut bukanlah berasal dari aktivitas Gunung Anak Krakatau yang dimaksudkan. Baca juga: Erupsi Gunung Merapi di Level Waspada, Ini 5 Rekomendasi KESDM Untuk diketahui berikut data Magma terkait tingkat level gunung di Indonesia. Level IV - Awas\r\n\r\n', '', 'admin4', '', '../data_gambar/1204201957s1.jpg', '', 'https://www.kompas.com/sains/read/2020/04/11/110200123/erupsi-gunung-anak-krakatau-ini-daftar-gunung-masuk-level-waspada '),
(15, 'Sun Apr 2020', 2, 'Erupsi Anak Krakatau, Tak Berpotensi Tsunami tapi Aktif Gempa\",', 'Terkait peristiwa erupsi yang terjadi di Gunung Anak Krakatau, pukul 21.58 WIB, Jumat (10/4/2020). Badan Meteorologi Klimatologi dan Geofisika ( BMKG) mengeluarkan hasil monitoring muka laut dan seismik. Disampaikan oleh Kepala Pusat Gempa Bumi dan Tsunami BMKG, Rahmat Triyono ST Dipl Seis MSc, dalam keterangan tertulisnya melihat hasil monitoring kondisi muka laut dan seismik dari beberapa kondisi berikut. 1. Monitoring Tide Gauge Hasil monitoring muka laut menggunakan tide gauge di Pantai Kota Agung, Pelabuhan Panjang, Binuangen, dan Marina Jambu menunjukkan tidak ada anomali perubahan muka laut sejak 10 April 2020 pukul 21.00 WIB tadi malam hingga pagi ini 11 April 2020 pukul 6.00 WIB. Baca juga: Bongkahan Erupsi Gunung Anak Krakatau Ditemukan di Dasar Lautan 2. Monitoring Radar Osean Wera Kata Rahmat, hal yang sama juga terdapat pada hasil monitoring muka laut menggunakan Radar Wera yang berlokasi di Kahai, Lampung dan Tanjung Lesung, Banten. Dari hasil monitoring Radar Wera juga menunjukkan bahwa tidak ada anomali muka laut sejak 10 April 2020 pukul 21.00 tadi malam hingga pagi ini 11 April 2020 pukul 6.00 WIB. \"Sehingga berdasarkan monitoring muka laut yang dilakukan BMKG menggunakan Tide Gauge dan Radar Wera menunjukkan erupsi Gunung Anak Krakatau tadi malam tidak memicu terjadinya tsunami,\" kata Rahmat.\r\n\r\nArtikel ini telah tayang di Kompas.com dengan judul \"Erupsi Anak Krakatau, Tak Berpotensi Tsunami tapi Aktif Gempa\", https://www.kompas.com/sains/read/2020/04/11/102500923/erupsi-anak-krakatau-tak-berpotensi-tsunami-tapi-aktif-gempa.\r\n', '', 'admin3', '', '../data_gambar/1204202111s2.jpeg', '', ' https://www.kompas.com/sains/read/2020/04/11/102500923/erupsi-anak-krakatau-tak-berpotensi-tsunami-tapi-aktif-gempa. '),
(16, 'Sun Apr 2020', 3, 'The World of the Married Rebut Singgasana Itaewon Class\"', 'KOMPAS.com - Drama terbaru JTBC, The World of the Married, terus menanjak ratingnya sejak tayang kali pertama. Bulan lalu, The World of the Married membuat sejarah dengan menetapkan rekor baru untuk peringkat tertinggi yang dicapai oleh episode pertama dari setiap drama produksi JTBC. Baca juga: Rahasia Rambut Chestnut Park Seo Joon dalam Itaewon Class Dalam minggu-minggu sejak itu, drama tersebut telah menjadi hit dan mencapai rating pemirsa tertinggi sepanjang masa di setiap episode barunya. Tak terkecuali episode teranyarnya pada 11 April 2020. Episode keenam The World of the Married tersebut mencetak rating rata-rata 18,8 persen di seluruh Korea Selatan dan 21,4 persen di wilayah Seoul. Baca juga: Episode Terakhir Itaewon Class Cetak Rating Tertinggi\r\n\r\n', '', 'admin1', '', '../data_gambar/1204202240d1.jpg', '', 'https://www.kompas.com/hype/read/2020/04/12/141631366/the-world-of-the-married-rebut-singgasana-itaewon-class.  '),
(17, 'Sun Apr 2020', 3, 'Agnez Mo Mengaku Benci Belanja, Kok Bisa', 'JAKARTA, KOMPAS.com - Penyanyi Agnez Mo mengaku bahwa dirinya tak suka dengan kegiatan berbelanja alias shopping seperti perempuan pada umumnya. \"Ini fakta menarik tentang aku. Aku enggak suka berbelanja. Aku sebenarnya benci belanja,\" ujar Agnez Mo dikutip Kompas.com dalam video Inbox @Home, Minggu (12/4/2020). Agnez Mo mengungkapkan, dirinya adalah seorang pemilih ketika akan membeli sesuatu. Baca juga: Insiden Kocak Agnez Mo Saat Instagram Live Bareng Steve Aoki Sebelum menentukan pilihan dan merogoh kocek, pelantun lagu \"Coke Bottle\" ini harus memastikan bahwa barang yang ia beli layak dan bisa digunakan beberapa kali. \"Kalau misalnya aku kayak harus belanja sesuatu aku harus memastikan apa yang aku beli itu layak,\" terangnya. Chloe Xaviera, keponakan Agnez Mo, cukup heran karena bibinya itu sering menghabiskan waktu saat berbelanja.\r\n\r\n', '', 'admin2', '', '../data_gambar/1204202507d2.jpg', '', 'https://www.kompas.com/hype/read/2020/04/12/120700666/agnez-mo-mengaku-benci-belanja-kok-bisa-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vidio`
--

CREATE TABLE `vidio` (
  `id_vidio` int(100) NOT NULL,
  `id_admin` varchar(10) NOT NULL,
  `tgl` varchar(21) NOT NULL,
  `titel_vidio` varchar(300) NOT NULL,
  `category` varchar(15) NOT NULL,
  `link_vidio` varchar(500) NOT NULL,
  `isi_vidio` varchar(10000) NOT NULL,
  `id_komen_vidio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `vidio`
--

INSERT INTO `vidio` (`id_vidio`, `id_admin`, `tgl`, `titel_vidio`, `category`, `link_vidio`, `isi_vidio`, `id_komen_vidio`) VALUES
(2, 'admin3', 'Sun Apr 2020', 'BINTANG EMON: TUKANG DUKU AJA GA TAKUT CORONA 😂', '3', 'https://www.youtube.com/watch?v=DqPNkiJTW7I', 'BINTANG EMON: TUKANG DUKU AJA GA TAKUT CORONA 😂', ''),
(3, 'admin3', 'Sun Apr 2020', 'Air Mata Vincent Desta saat Mengetahui Glenn Fredly Telah Tiada', '3', 'https://www.youtube.com/watch?v=PKxNmVk78PQ', 'Air Mata Vincent Desta saat Mengetahui Glenn Fredly Telah Tiada', ''),
(4, 'admin3', 'Sun Apr 2020', 'Judika SYOK & NANGIS Mendengar Kabar Kepergian Glenn Fredly Saat Live IG Bareng Maia Estianty', '3', 'https://www.youtube.com/watch?v=xS0ddK7HX2o', 'Judika SYOK & NANGIS Mendengar Kabar Kepergian Glenn Fredly Saat Live IG Bareng Maia Estianty', ''),
(5, 'admin4', 'Sun Apr 2020', 'Via Vallen - Aisyah Istri Rasulullah ( Cover )', '3', 'https://www.youtube.com/watch?v=Kcl3hdv0OPM', 'Via Vallen - Aisyah Istri Rasulullah ( Cover )', ''),
(6, 'admin3', 'Sun Apr 2020', 'Kejar Pelaku Tawuran, Bocah ini Malah Tunjukin Sajamnya Depan Tim Pemburu Preman - 86', '4', 'https://www.youtube.com/watch?v=KBS-y6fFY8Q', 'Kejar Pelaku Tawuran, Bocah ini Malah Tunjukin Sajamnya Depan Tim Pemburu Preman - 86', ''),
(7, 'admin1', 'Sun Apr 2020', 'Bentrok TNI dan Polri di Mamberamo Raya Papua, 3 Orang Polisi Meninggal 2 Terluka', '3', 'https://www.youtube.com/watch?v=4YbZP6j-5Ew', 'Bentrok TNI dan Polri di Mamberamo Raya Papua, 3 Orang Polisi Meninggal 2 Terluka', ''),
(8, 'admin1', 'Sun Apr 2020', 'Begini Cara Penerapan Pendaftaran Kartu Prakerja', '2', 'https://www.youtube.com/watch?v=gGPgLUz6DTE', 'Begini Cara Penerapan Pendaftaran Kartu Prakerja', ''),
(9, 'admin4', 'Sun Apr 2020', 'Pasien Positif Corona di Indonesia 4.241, Sembuh 359, Meninggal 373 - Breaking iNews 12/04', '5', 'https://www.youtube.com/watch?v=C-QaK7FnUE8', 'Pasien Positif Corona di Indonesia 4.241, Sembuh 359, Meninggal 373 - Breaking iNews 12/04', ''),
(10, 'admin4', 'Sun Apr 2020', 'Ojek Online Boleh Angkut Penumpang, Asal Sesuai Protokol Kesehatan', '4', 'https://www.youtube.com/watch?v=A3ymHki1z-Y', 'Ojek Online Boleh Angkut Penumpang, Asal Sesuai Protokol Kesehatan', ''),
(11, 'admin3', 'Sun Apr 2020', 'Video Presiden Jokowi Bagikan Sembako untuk yang Kedua Kalinya Kepada Warga, Punya Pesan Khusus?', '4', 'https://www.youtube.com/watch?v=4wSe3PvSIUg', 'Video Presiden Jokowi Bagikan Sembako untuk yang Kedua Kalinya Kepada Warga, Punya Pesan Khusus?', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `coment`
--
ALTER TABLE `coment`
  ADD PRIMARY KEY (`id_coment`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `utama`
--
ALTER TABLE `utama`
  ADD PRIMARY KEY (`id_post`);

--
-- Indeks untuk tabel `vidio`
--
ALTER TABLE `vidio`
  ADD PRIMARY KEY (`id_vidio`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `coment`
--
ALTER TABLE `coment`
  MODIFY `id_coment` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `utama`
--
ALTER TABLE `utama`
  MODIFY `id_post` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `vidio`
--
ALTER TABLE `vidio`
  MODIFY `id_vidio` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

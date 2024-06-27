CREATE TABLE `bid` (
  `userId` char(12) NOT NULL,
  `propertyId` char(12) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
);
CREATE TABLE `favorit` (
  `userId` char(12) NOT NULL,
  `propertyId` char(12) NOT NULL
);
CREATE TABLE `properties` (
  `propertyId` char(12) NOT NULL,
  `userId` char(12) NOT NULL,
  `namaProperti` varchar(30) NOT NULL,
  `tipe` varchar(8) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `luas` int(11) NOT NULL,
  `toilet` int(11) NOT NULL,
  `kamar` int(11) NOT NULL,
  `status` varchar(4) NOT NULL,
  `public` int(1) NOT NULL,
  `dibangun` date NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `gambar1` char(31) NOT NULL,
  `gambar2` char(31) NOT NULL,
  `gambar3` char(31) NOT NULL,
  `gambar4` char(31) NOT NULL
);
INSERT INTO `properties` (`propertyId`, `userId`, `namaProperti`, `tipe`, `lokasi`, `harga`, `luas`, `toilet`, `kamar`, `status`, `public`, `dibangun`, `deskripsi`, `gambar1`, `gambar2`, `gambar3`, `gambar4`) VALUES
('ABC123DEF456', '66673d3f03d5', 'Rumah bagus banget', 'rumah', 'Jl. Sudirman No.1, Jakarta', 500000000, 300, 2, 3, 'jual', 7, '2010-06-15', 'Rumah indah dengan halaman luas dan kolam renang.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('ABC123SWT789', 'a1b2c3d4e5f6', 'Rumah Sewa Indah', 'rumah', 'Jl. Thamrin No.2, Jakarta', 1000000, 80, 1, 1, 'sewa', 5, '2015-06-15', 'Rumah sewa indah di pusat kota.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('BCD890SWT123', 'm1n2b3v4c5x6', 'Villa Sewa Tropis', 'villa', 'Jl. Asia Afrika No.3, Bandung', 5000000, 130, 1, 1, 'sewa', 6, '2014-02-13', 'Villa tropis dengan akses pantai.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('DEF456GHI789', 'p1o2i3u4y5t6', 'Villa Mewah', 'villa', 'Jl. Dago No.4, Bandung', 800000000, 450, 4, 5, 'jual', 9, '2015-03-20', 'Villa mewah dengan pemandangan pantai yang eksotis.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('DEF456SWT456', 'q1w2e3r4t5y6', 'Villa Sewa Eksotis', 'villa', 'Jl. Malioboro No.5, Yogyakarta', 9000000, 130, 1, 1, 'sewa', 4, '2016-03-20', 'Villa eksotis dengan pemandangan pantai.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('FGH890IJK123', 'z9y8x7w6v5u4', 'Rumah Sejahtera', 'rumah', 'Jl. Solo No.6, Yogyakarta', 440000000, 240, 2, 3, 'jual', 6, '2017-12-28', 'Rumah nyaman dengan lingkungan yang ramah dan aman.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('GHI789SWT123', '66673d3f03d5', 'Kantor Sewa Modern', 'kantor', 'Jl. Tunjungan No.7, Surabaya', 8000000, 70, 2, 0, 'sewa', 6, '2018-01-10', 'Kantor modern di pusat bisnis.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('HIJ456KLM789', 'a1b2c3d4e5f6', 'Rumah Nyaman', 'rumah', 'Jl. Darmo No.8, Surabaya', 525000000, 250, 3, 4, 'jual', 7, '2017-09-27', 'Rumah nyaman dengan lingkungan yang asri dan aman.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('IJK123LMN456', 'm1n2b3v4c5x6', 'Mansion Elite', 'mansion', 'Jl. Raya Kuta No.9, Bali', 1650000000, 900, 10, 10, 'jual', 9, '2012-11-17', 'Mansion elite dengan fasilitas lengkap dan pemandangan laut.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('JKL012MNO345', 'p1o2i3u4y5t6', 'Rumah Minimalis', 'mansion', 'Jl. Sunset Road No.10, Bali', 275000000, 150, 1, 2, 'jual', 6, '2018-11-25', 'Rumah minimalis dengan desain modern dan lokasi strategis.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('JKL012SWT678', 'q1w2e3r4t5y6', 'Rumah Sewa Minimalis', 'rumah', 'Jl. Gatot Subroto No.11, Medan', 2000000, 80, 1, 1, 'sewa', 5, '2017-11-25', 'Rumah minimalis dengan lokasi strategis.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('KLM789NOP012', 'z9y8x7w6v5u4', 'Mansion Elite', 'mansion', 'Jl. Sisingamangaraja No.12, Medan', 1450000000, 800, 8, 9, 'jual', 10, '2010-12-19', 'Mansion elite dengan fasilitas mewah dan eksklusif.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('MNO345PQR678', '66673d3f03d5', 'Mansion Luas', 'mansion', 'Jl. Ahmad Yani No.13, Makassar', 1200000000, 700, 6, 7, 'jual', 10, '2012-09-12', 'Mansion luas dengan taman yang indah dan kolam renang.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('MNO345SWT345', 'a1b2c3d4e5f6', 'Mansion Sewa Luas', 'mansion', 'Jl. Jendral Sudirman No.14, Makassar', 10000000, 260, 2, 2, 'sewa', 8, '0000-00-00', 'Mansion luas dengan fasilitas lengkap.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PQR678SWT234', 'm1n2b3v4c5x6', 'Villa Sewa Asri', 'villa', 'Jl. Pemuda No.15, Semarang', 7000000, 130, 1, 1, 'sewa', 4, '2016-04-05', 'Villa asri dengan suasana sejuk.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP001ABCDE', 'a1b2c3d4e5f6', 'Rumah Mewah', 'rumah', 'Jl. Pandanaran No.16, Semarang', 250000000, 120, 2, 3, 'jual', 8, '2016-05-12', 'Rumah mewah dengan taman luas dan kolam renang.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP002GHIJK', 'z9y8x7w6v5u4', 'Villa Asri', 'villa', 'Jl. Ijen No.17, Malang', 1500000000, 300, 4, 4, 'jual', 7, '2018-08-22', 'Villa asri dengan pemandangan pegunungan.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP003MNOPQ', 'q1w2e3r4t5y6', 'Kantor Modern', 'kantor', 'Jl. Soekarno-Hatta No.18, Malang', 2000000000, 400, 5, 0, 'sewa', 9, '2019-11-10', 'Kantor modern dengan fasilitas lengkap.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP004STUVW', 'm1n2b3v4c5x6', 'Mansion Megah', 'mansion', 'Jl. Slamet Riyadi No.19, Solo', 1800000000, 450, 6, 5, 'jual', 8, '2015-06-15', 'Mansion megah dengan desain klasik.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP005YZABC', 'p1o2i3u4y5t6', 'Rumah Minimalis', 'rumah', 'Jl. Adi Sucipto No.20, Solo', 300000000, 80, 1, 2, 'jual', 6, '2014-04-05', 'Rumah minimalis dengan desain modern.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP006EFGHI', '66673d3f03d5', 'Villa Tropis', 'villa', 'Jl. Pajajaran No.21, Bogor', 1200000000, 280, 3, 3, 'sewa', 7, '2017-03-22', 'Villa tropis dengan akses pantai langsung.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP007KLMNO', 'a1b2c3d4e5f6', 'Kantor Bisnis', 'kantor', 'Jl. Surya Kencana No.22, Bogor', 2147483647, 350, 4, 2, 'sewa', 9, '2020-01-18', 'Kantor bisnis dengan ruang meeting besar.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP008QRSTU', 'z9y8x7w6v5u4', 'Mansion Mewah', 'mansion', 'Jl. Sudirman No.23, Padang', 1700000000, 480, 7, 6, 'jual', 8, '2013-12-01', 'Mansion mewah dengan fasilitas lengkap.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP009WXYZA', 'q1w2e3r4t5y6', 'Rumah Sederhana', 'rumah', 'Jl. Khatib Sulaiman No.24, Padang', 200000000, 60, 1, 1, 'jual', 5, '2012-09-14', 'Rumah sederhana dengan taman kecil.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP010CDEFG', 'm1n2b3v4c5x6', 'Villa Eksklusif', 'villa', 'Jl. Merdeka No.25, Palembang', 1400000000, 310, 4, 4, 'sewa', 7, '2014-05-22', 'Villa eksklusif dengan pemandangan indah.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP011IJKLM', 'p1o2i3u4y5t6', 'Rumah Nyaman', 'rumah', 'Jl. Jendral Sudirman No.26, Palembang', 450000000, 150, 2, 3, 'jual', 8, '2017-06-15', 'Rumah nyaman di lingkungan asri.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP012QRSTU', '66673d3f03d5', 'Mansion Lux', 'mansion', 'Jl. Sudirman No.27, Balikpapan', 2100000000, 470, 6, 5, 'jual', 9, '2015-03-18', 'Mansion lux dengan interior mewah.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP013YZA45', 'a1b2c3d4e5f6', 'Villa Cantik', 'villa', 'Jl. Jendral Ahmad Yani No.28, Balikpapan', 1600000000, 320, 5, 5, 'sewa', 8, '2018-11-25', 'Villa cantik dengan taman tropis.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP014BCD78', 'z9y8x7w6v5u4', 'Rumah Modern', 'rumah', 'Jl. Sam Ratulangi No.29, Manado', 600000000, 180, 3, 4, 'jual', 8, '2016-09-09', 'Rumah modern dengan desain artistik.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP015EFG12', 'q1w2e3r4t5y6', 'Kantor Sewa Dinamis', 'kantor', 'Jl. Pierre Tendean No.30, Manado', 1200000000, 340, 4, 0, 'sewa', 8, '2014-07-14', 'Kantor dinamis dengan ruang terbuka.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP016HIJ45', 'm1n2b3v4c5x6', 'Mansion Anggun', 'mansion', 'Jl. Engku Putri No.31, Batam', 1900000000, 480, 7, 6, 'jual', 9, '2013-02-22', 'Mansion anggun dengan interior elegan.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP017KLM78', 'p1o2i3u4y5t6', 'Rumah Elegan', 'rumah', 'Jl. Raja Haji Fisabilillah No.32, Batam', 850000000, 160, 3, 2, 'jual', 7, '2012-11-05', 'Rumah elegan dengan halaman luas.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP018NOP01', '66673d3f03d5', 'Villa Klasik', 'villa', 'Jl. A. Yani No.33, Banjarmasin', 1800000000, 340, 5, 4, 'sewa', 9, '2019-12-25', 'Villa klasik dengan suasana tenang.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP019QRS34', 'a1b2c3d4e5f6', 'Kantor Sewa Kreatif', 'kantor', 'Jl. Veteran No.34, Banjarmasin', 1500000000, 380, 5, 3, 'sewa', 8, '2017-04-13', 'Kantor kreatif dengan desain modern.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP020TUV67', 'z9y8x7w6v5u4', 'Rumah Sejuk', 'rumah', 'Jl. Jenderal Sudirman No.35, Pekanbaru', 300000000, 100, 1, 2, 'jual', 6, '2015-08-05', 'Rumah sejuk dengan ventilasi baik.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP021WXY90', 'q1w2e3r4t5y6', 'Mansion Artistik', 'mansion', 'Jl. Soekarno-Hatta No.36, Pekanbaru', 1700000000, 460, 7, 6, 'jual', 9, '2014-07-22', 'Mansion artistik dengan desain unik.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP022ABC23', 'm1n2b3v4c5x6', 'Rumah Mungil', 'rumah', 'Jl. Pejanggik No.37, Lombok', 500000000, 140, 2, 3, 'jual', 8, '2013-09-09', 'Rumah mungil dengan desain minimalis.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP023DEF56', 'p1o2i3u4y5t6', 'Villa Unik', 'villa', 'Jl. Udayana No.38, Lombok', 1400000000, 310, 4, 4, 'sewa', 7, '2016-12-30', 'Villa unik dengan desain modern.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP024GHI89', '66673d3f03d5', 'Kantor Sewa Inovatif', 'kantor', 'Jl. A. Yani No.39, Banyuwangi', 1600000000, 370, 5, 0, 'sewa', 8, '2012-04-11', 'Kantor inovatif dengan fasilitas lengkap.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP025JKL01', 'a1b2c3d4e5f6', 'Rumah Sewa Nyaman', 'rumah', 'Jl. Diponegoro No.40, Banyuwangi', 20000000, 700, 1, 2, 'sewa', 7, '2011-06-15', 'Rumah sewa nyaman di lingkungan aman.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP026MNO34', 'z9y8x7w6v5u4', 'Mansion Sewa Megah', 'mansion', 'Jl. MH Thamrin No.41, Jakarta', 2000000000, 490, 8, 7, 'sewa', 9, '2015-08-10', 'Mansion megah dengan taman luas.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP027PQR67', 'q1w2e3r4t5y6', 'Villa Sewa Tropis', 'villa', 'Jl. Riau No.42, Bandung', 1500000000, 320, 5, 5, 'sewa', 9, '2017-10-30', 'Villa tropis dengan kolam renang.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP028STU90', 'm1n2b3v4c5x6', 'Kantor Sewa Megah', 'kantor', 'Jl. Prawirotaman No.43, Yogyakarta', 1800000000, 400, 6, 0, 'sewa', 9, '2018-02-20', 'Kantor megah di lokasi strategis.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP029VWX23', 'p1o2i3u4y5t6', 'Rumah Sewa Mewah', 'rumah', 'Jl. Embong Malang No.44, Surabaya', 300000000, 110, 2, 2, 'sewa', 7, '2016-03-15', 'Rumah mewah dengan harga terjangkau.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('PROP030YZA56', '66673d3f03d5', 'Mansion Sewa Elegan', 'mansion', 'Jl. Legian No.45, Bali', 2147483647, 450, 7, 6, 'sewa', 8, '2019-07-05', 'Mansion elegan dengan fasilitas premium.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('STU901SWT123', 'p1o2i3u4y5t6', 'Kantor Sewa Kreatif', 'kantor', 'Jl. Imam Bonjol No.46, Medan', 6000000, 70, 2, 0, 'sewa', 7, '2019-07-30', 'Kantor kreatif dengan fasilitas lengkap.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('TUV678WXY901', 'q1w2e3r4t5y6', 'Rumah Artistik', 'rumah', 'Jl. AP Pettarani No.47, Makassar', 420000000, 220, 2, 3, 'jual', 7, '2018-03-11', 'Rumah dengan desain artistik dan interior yang unik.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('VWX234SWT789', 'z9y8x7w6v5u4', 'Rumah Sewa Klasik', 'rumah', 'Jl. Gajahmada No.48, Semarang', 3000000, 80, 1, 1, 'sewa', 5, '2011-05-17', 'Rumah klasik dengan desain tradisional.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('VWX234YZA567', '66673d3f03d5', 'Rumah Klasik', 'rumah', 'Jl. MT Haryono No.49, Malang', 400000000, 200, 2, 3, 'jual', 6, '2011-05-17', 'Rumah klasik dengan desain tradisional Jawa.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('WXY901ZAB234', 'a1b2c3d4e5f6', 'Mansion Megah', 'mansion', 'Jl. Radjiman No.50, Solo', 1475000000, 750, 9, 10, 'jual', 10, '2011-08-23', 'Mansion megah dengan fasilitas mewah dan ruang yang luas.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('YZA567BCD890', 'm1n2b3v4c5x6', 'Mansion Modern', 'mansion', 'Jl. Sempur No.51, Bogor', 1175000000, 600, 7, 8, 'jual', 9, '2013-08-22', 'Mansion modern dengan teknologi smart home.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300'),
('YZA567SWT456', 'p1o2i3u4y5t6', 'Mansion Sewa Modern', 'mansion', 'Jl. Rasuna Said No.52, Padang', 10000000, 290, 3, 3, 'sewa', 9, '2013-08-22', 'Mansion modern dengan fasilitas smart home.', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300', 'https://picsum.photos/400/300');
CREATE TABLE `propertyreviews` (
  `revId` int(11) NOT NULL,
  `userId` char(12) NOT NULL,
  `propertyId` char(12) NOT NULL,
  `text` text NOT NULL
);
CREATE TABLE `users` (
  `userId` char(12) NOT NULL,
  `namaUser` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `password` char(60) NOT NULL,
  `role` char(5) NOT NULL,
  `tentang` text NOT NULL
);
INSERT INTO `users` (`userId`, `namaUser`, `email`, `telepon`, `password`, `role`, `tentang`) VALUES
('66673d3f03d5', 'Kamaluddin Arsyad Fadllillah ', 'kamaluddin.arsyad17@gmail.com', '65473892', '$2y$10$13Lew4ajM/WKHhFzK7yspOrJHFolvOxfeTJQH8rYMD/brDu.62n7G', 'owner', 'Agen properti terpercaya'),
('a1b2c3d4e5f6', 'Agus Santoso', 'agus.santoso@gmail.com', '081234567890', '$2y$10$13Lew4ajM/WKHhFzK7yspOrJHFolvOxfeTJQH8rYMD/brDu.62n7G', 'owner', 'Agus Santoso adalah agen properti berpengalaman di Jakarta dengan keahlian dalam penjualan dan penyewaan properti residensial dan komersial.'),
('k1j2h3g4f5d6', 'Yusuf Pratama', 'yusuf.pratama@gmail.com', '081234567895', '$2y$10$13Lew4ajM/WKHhFzK7yspOrJHFolvOxfeTJQH8rYMD/brDu.62n7G', 'buyer', ''),
('l2m3n4b5v6c7', 'Linda Wijaya', 'linda.wijaya@gmail.com', '081234567896', '$2y$10$13Lew4ajM/WKHhFzK7yspOrJHFolvOxfeTJQH8rYMD/brDu.62n7G', 'buyer', ''),
('m1n2b3v4c5x6', 'Siti Nurhaliza', 'siti.nurhaliza@gmail.com', '081234567893', '$2y$10$13Lew4ajM/WKHhFzK7yspOrJHFolvOxfeTJQH8rYMD/brDu.62n7G', 'owner', 'Siti Nurhaliza adalah agen properti terkemuka di Bali, dikenal karena layanan pelanggan yang luar biasa dan pengetahuan mendalam tentang pasar properti lokal.'),
('o2p3q4r5t6y7', 'Andi Nugroho', 'andi.nugroho@gmail.com', '081234567897', '$2y$10$13Lew4ajM/WKHhFzK7yspOrJHFolvOxfeTJQH8rYMD/brDu.62n7G', 'buyer', ''),
('p1o2i3u4y5t6', 'Rina Andriana', 'rina.andriana@gmail.com', '081234567894', '$2y$10$13Lew4ajM/WKHhFzK7yspOrJHFolvOxfeTJQH8rYMD/brDu.62n7G', 'owner', 'Rina Andriana telah membantu banyak klien menemukan properti impian mereka di Medan, dengan spesialisasi dalam properti hunian dan investasi.'),
('q1w2e3r4t5y6', 'Budi Setiawan', 'budi.setiawan@gmail.com', '081234567892', '$2y$10$13Lew4ajM/WKHhFzK7yspOrJHFolvOxfeTJQH8rYMD/brDu.62n7G', 'owner', 'Budi Setiawan memiliki lebih dari 10 tahun pengalaman di industri properti, spesialis dalam properti komersial dan perkantoran di Surabaya.'),
('q3w4e5r6t7y8', 'Nina Amelia', 'nina.amelia@gmail.com', '081234567898', '$2y$10$13Lew4ajM/WKHhFzK7yspOrJHFolvOxfeTJQH8rYMD/brDu.62n7G', 'buyer', ''),
('x4c5v6b7n8m9', 'Hendra Setiawan', 'hendra.setiawan@gmail.com', '081234567899', '$2y$10$13Lew4ajM/WKHhFzK7yspOrJHFolvOxfeTJQH8rYMD/brDu.62n7G', 'buyer', ''),
('z9y8x7w6v5u4', 'Dewi Lestari', 'dewi.lestari@gmail.com', '081234567891', '$2y$10$13Lew4ajM/WKHhFzK7yspOrJHFolvOxfeTJQH8rYMD/brDu.62n7G', 'owner', 'Dewi Lestari adalah agen properti di Bandung dengan fokus pada properti residensial mewah dan pengembangan properti.');
ALTER TABLE `bid`
  ADD PRIMARY KEY (`userId`,`propertyId`),
  ADD KEY `propertyId` (`propertyId`);
ALTER TABLE `favorit`
  ADD PRIMARY KEY (`userId`,`propertyId`),
  ADD KEY `propertyId` (`propertyId`);
ALTER TABLE `properties`
  ADD PRIMARY KEY (`propertyId`),
  ADD KEY `userId` (`userId`);
ALTER TABLE `propertyreviews`
  ADD PRIMARY KEY (`revId`),
  ADD KEY `propertyId` (`propertyId`),
  ADD KEY `userId` (`userId`);
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `telepon` (`telepon`);
ALTER TABLE `propertyreviews`
  MODIFY `revId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
ALTER TABLE `bid`
  ADD CONSTRAINT `bid_ibfk_1` FOREIGN KEY (`propertyId`) REFERENCES `properties` (`propertyId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bid_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `favorit`
  ADD CONSTRAINT `favorit_ibfk_1` FOREIGN KEY (`propertyId`) REFERENCES `properties` (`propertyId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favorit_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `propertyreviews`
  ADD CONSTRAINT `propertyreviews_ibfk_1` FOREIGN KEY (`propertyId`) REFERENCES `properties` (`propertyId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `propertyreviews_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);
COMMIT;
-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2020 at 03:27 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adorablegarden`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_binh_luan`
--

CREATE TABLE `tbl_binh_luan` (
  `id` int(11) NOT NULL,
  `id_khach_hang` int(11) NOT NULL,
  `ho_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tai_khoan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dich_vu`
--

CREATE TABLE `tbl_dich_vu` (
  `id` int(11) NOT NULL,
  `ten_dv` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_dich_vu`
--

INSERT INTO `tbl_dich_vu` (`id`, `ten_dv`) VALUES
(1, 'Chăm sóc cây cảnh tại nhà'),
(2, 'Tư vấn thiết kế cảnh quan'),
(3, 'Khóa học chăm sóc cây cảnh online');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doi_ngu`
--

CREATE TABLE `tbl_doi_ngu` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_sinh` datetime NOT NULL,
  `so_CMT` int(11) NOT NULL,
  `so_nam_kinh_nghiem` int(11) NOT NULL,
  `gioi_thieu` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `anh_minh_hoa` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `anh_CMT_mat_truoc` text COLLATE utf8_unicode_ci NOT NULL,
  `anh_CMT_mat_sau` text COLLATE utf8_unicode_ci NOT NULL,
  `dich_vu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `quan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thanh_pho` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT current_timestamp(),
  `nguoi_tao` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_sua` datetime DEFAULT NULL,
  `nguoi_sua` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_doi_ngu`
--

INSERT INTO `tbl_doi_ngu` (`id`, `name`, `ngay_sinh`, `so_CMT`, `so_nam_kinh_nghiem`, `gioi_thieu`, `email`, `SDT`, `price`, `anh_minh_hoa`, `anh_CMT_mat_truoc`, `anh_CMT_mat_sau`, `dich_vu`, `dia_chi`, `quan`, `thanh_pho`, `ngay_tao`, `nguoi_tao`, `ngay_sua`, `nguoi_sua`) VALUES
(1, 'Lan Nguyen', '2010-01-19 00:00:00', 0, 2, 'Chuyên gia chăm sóc cây cảnh mini đến từ...', '', 0, 50000, '13.jpg', '', '', '', '', '', '', '2020-03-22 13:23:53', 'Lan Nguyen', NULL, NULL),
(2, 'Trần Dần', '0000-00-00 00:00:00', 0, 15, 'Với niềm đam mê chăm sóc cây trồng từ khi còn bé, tôi luôn tin tưởng...', '', 0, 70000, '15.jpg', '', '', '', '', '', '', '2020-03-22 13:23:53', 'Chu Hue Man', NULL, NULL),
(3, 'Trần Trung Hiếu', '0000-00-00 00:00:00', 0, 5, 'Tôi tự hào là một trong những chuyên gia chăm sóc tư vấn cây cảnh có mắt thẩm mỹ...', '', 0, 60000, '29.jpg', '', '', '', '', '', '', '2020-03-22 13:25:51', 'Hoang Ngan', NULL, NULL),
(4, 'Nguyễn Trà My', '0000-00-00 00:00:00', 0, 1, '', '', 0, 1, '37.jpg', '', '', '', '', '', '', '2020-03-22 13:25:51', 'Lan Nguyen', NULL, NULL),
(3000, 'Nguyễn Thị Linh', '0000-00-00 00:00:00', 0, 10, 'Nhân viên lành nghề', '', 0, 30000, 'team2.jpg', '', '', '', '', '', '', '2015-03-20 00:00:00', 'admin', '2020-03-02 00:00:00', 'admin'),
(3001, 'Tô Hoàng Linh', '0000-00-00 00:00:00', 0, 5, 'Nhân viên lành nghề', '', 0, 30000, 'team4.jpg', '', '', '', '', '', '', '2015-03-20 00:00:00', 'admin', '2020-03-02 00:00:00', 'admin'),
(3002, 'Nguyễn Văn Minh', '0000-00-00 00:00:00', 0, 5, 'Nhân viên lành nghề', '', 0, 30000, '38.jpg', '', '', '', '', '', '', '2015-03-20 00:00:00', 'admin', '2020-03-02 00:00:00', 'admin'),
(3003, 'Đào Minh Anh', '0000-00-00 00:00:00', 0, 1, 'Nhân viên lành nghề', '', 0, 25000, 'team7.jpg', '', '', '', '', '', '', '2015-03-20 00:00:00', 'admin', '2020-03-02 00:00:00', 'admin'),
(3007, 'dafd', '1998-07-16 00:00:00', 3424324, 4, 'fdfas', 'qwfasdfsa@gmail.com', 341434, 343243, '43.png', '', '', '', 'ewrewr', 'fdf', 'dfd', '2020-04-12 13:12:42', NULL, NULL, NULL),
(3008, 'vxvxc', '0000-00-00 00:00:00', 3424324, 1, 'dfsd', 'nhn6298@gmail.com', 341434, 50000, '', '', '', '', '', '', '', '2020-04-15 00:27:17', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_don_hang`
--

CREATE TABLE `tbl_don_hang` (
  `id` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT current_timestamp(),
  `trang_thai` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_don_hang`
--

INSERT INTO `tbl_don_hang` (`id`, `id_kh`, `ngay_tao`, `trang_thai`) VALUES
(1, 4, '2020-03-22 13:29:40', 'Đã thanh toán'),
(2, 2, '2020-03-22 13:29:40', 'Đã thanh toán'),
(5, 1016, '2020-04-08 17:00:00', 'Đã thanh toán'),
(6, 1018, '2020-04-08 17:00:00', 'Chưa thanh toán'),
(7, 1019, '2020-04-08 17:00:00', 'Chưa thanh toán'),
(8, 1021, '2020-04-08 17:00:00', 'Đã thanh toán'),
(14, 1027, '2020-04-13 17:00:00', 'Chưa thanh toán'),
(16, 1, '2020-04-13 17:00:00', 'Chưa thanh toán'),
(19, 1, '2020-04-13 17:00:00', 'Đã thanh toán'),
(20, 1, '2020-04-13 17:00:00', 'Đã thanh toán'),
(21, 1, '2020-04-13 17:00:00', 'Chưa thanh toán'),
(22, 1, '2020-04-14 17:00:00', 'Đã thanh toán');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_don_hang_chi_tiet`
--

CREATE TABLE `tbl_don_hang_chi_tiet` (
  `id` int(11) NOT NULL,
  `ma_don` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_nv` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `qty` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_don_hang_chi_tiet`
--

INSERT INTO `tbl_don_hang_chi_tiet` (`id`, `ma_don`, `id_nv`, `qty`, `price`) VALUES
(1, '14', '3000', '1', '50000'),
(2, '6', '3001', '1', '70000'),
(3, '8', '3001', '1', '60000'),
(4, '19', '1', '1', '50000'),
(5, '20', '1', '1', '50000'),
(6, '20', '2', '1', '70000'),
(7, '21', '2', '1', '70000'),
(8, '21', '3000', '1', '30000'),
(9, '22', '1', '1', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khach_hang`
--

CREATE TABLE `tbl_khach_hang` (
  `id` int(11) NOT NULL,
  `ten_kh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thanh_pho` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quan` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` int(11) DEFAULT NULL,
  `ngay_tao` timestamp NULL DEFAULT current_timestamp(),
  `nguoi_tao` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_sua` datetime DEFAULT NULL,
  `nguoi_sua` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anh_minh_hoa` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinh` date NOT NULL,
  `gioi_tinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_khach_hang`
--

INSERT INTO `tbl_khach_hang` (`id`, `ten_kh`, `thanh_pho`, `quan`, `email`, `SDT`, `ngay_tao`, `nguoi_tao`, `ngay_sua`, `nguoi_sua`, `anh_minh_hoa`, `ngaysinh`, `gioi_tinh`) VALUES
(1, 'Nguyễn Hoàng Ngân', 'Hà Nội', 'Thanh Xuân', 'hoangngan6298@gmail.com', 931718229, '2019-12-12 00:00:00', '', '2020-03-02 00:00:00', '', '13.jpg', '2020-04-07', 'Nữ'),
(2, 'Nguyễn Hồng Nhung', 'Hà Nội', 'Hoài Đức', 'nhn6298@gmail.com', 932173229, '2019-12-12 00:00:00', '', '2020-03-02 00:00:00', '', '37.jpg', '2020-04-05', 'Nữ'),
(3, 'Nguyễn Hoàng Nam', 'Hà Nội', 'Đống Đa', 'nhn6298.12379@gmail.com', 967898229, '2019-12-12 00:00:00', '', '2020-03-02 00:00:00', '', '15.jpg', '1998-02-19', 'Nam'),
(4, 'Nguyễn Thị Lan', 'Hà Nội', 'Thanh Xuân', 'lannguyen@gmail.com', 913518229, '2019-12-12 00:00:00', '', '2020-03-02 00:00:00', '', 'team2.jpg', '2020-04-30', 'Nữ'),
(5, 'Chu Huệ Mẫn', 'Hà Nội', 'Long Biên', 'manchu@gmail.com', 931719209, '2019-12-12 00:00:00', '', '2020-03-02 00:00:00', '', 'team7.jpg', '2019-08-13', 'Nữ'),
(6, 'Đoàn Minh Anh', 'Hà Nội', 'Hoài Đức', 'minhanh@gmail.com', 911418229, '2019-12-12 00:00:00', '', '2020-03-02 00:00:00', '', 'team4.jpg', '2020-04-13', 'Nữ'),
(7, 'Nguyễn Hoàng Lan', 'Hà Nội', 'Đống Đa', 'hoanglan@gmail.com', 931723429, '2019-12-12 00:00:00', '', '2020-03-02 00:00:00', '', 'team5.jpg', '2020-01-07', 'Nữ'),
(8, 'Lê Thị Linh', 'Hà Nội', 'Thanh Xuân', 'thilinh@gmail.com', 912318229, '2019-12-12 00:00:00', '', '2020-03-02 00:00:00', '', 'nv3.jpg', '2019-11-05', 'Nữ'),
(9, 'Tô Hoàng Linh', 'Hà Nội', 'Hoài Đức', 'veve@gmail.com', 931794529, '2019-12-12 00:00:00', '', '2020-03-02 00:00:00', '', 'hn.jpg', '2019-11-11', 'Nữ'),
(1011, 'fgfg', '', '', '', 0, '2020-04-05 04:37:01', NULL, NULL, NULL, 'IEUA3361.JPG', '1994-06-07', ''),
(1012, 'dsfsd', NULL, 'fsdfd', 'mman19021998@gmail.com', 0, '2020-04-09 16:01:34', NULL, NULL, NULL, NULL, '0000-00-00', ''),
(1014, 'dsfsd', NULL, 'fsdfd', 'fgfgfdgf@gmail.com', 0, '2020-04-09 16:03:14', NULL, NULL, NULL, NULL, '0000-00-00', ''),
(1016, 'dsfsd', NULL, 'fsdfd', 'fdhsjfdsfhj@gmail.com', 0, '2020-04-09 16:04:40', NULL, NULL, NULL, NULL, '0000-00-00', ''),
(1018, 'dsfsd', NULL, 'fsdfd', 'vhfjvkj@gmail.com', 0, '2020-04-09 16:05:17', NULL, NULL, NULL, NULL, '0000-00-00', ''),
(1019, 'dsfsd', NULL, 'fsdfd', 'trangkyu208@gmail.com', 0, '2020-04-09 16:06:21', NULL, NULL, NULL, NULL, '0000-00-00', ''),
(1021, 'dsfsd', NULL, 'fsdfd', 'dfdsfdf@gmail.com', 0, '2020-04-09 16:06:55', NULL, NULL, NULL, NULL, '0000-00-00', ''),
(1023, 'dsfsd', NULL, 'fsdfd', '19A4040099@bav.edu.vn', 0, '2020-04-13 03:47:29', NULL, NULL, NULL, NULL, '0000-00-00', ''),
(1025, 'dsfsd', NULL, 'fsdfd', '19A4040079@bav.edu.vn', 0, '2020-04-13 05:00:23', NULL, NULL, NULL, NULL, '0000-00-00', ''),
(1026, 'Nguyễn Hoàng Ngân', NULL, 'fsdfd', 'fdfjdk@gmail.com', 0, '2020-04-14 02:38:32', NULL, NULL, NULL, NULL, '0000-00-00', ''),
(1027, 'Nguyễn Hoàng Ngân', NULL, 'fsdfd', '1234@gmail.com', 0, '2020-04-14 07:12:03', NULL, NULL, NULL, NULL, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nguoi_dung`
--

CREATE TABLE `tbl_nguoi_dung` (
  `id` int(10) NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_nguoi_dung`
--

INSERT INTO `tbl_nguoi_dung` (`id`, `email`, `mat_khau`, `quyen`) VALUES
(1234, 'nhn6298@gmail.com', 'admin123', 'admin'),
(1235, 'nhn6298.12379@gmail.com', 'admin321', 'user'),
(1237, 'lannguyen@gmail.com', 'admin123', 'admin'),
(1238, 'manchu@gmail.com', 'admin123', 'admin'),
(1239, 'hoangngan6298@gmail.com', 'admin123', 'user'),
(1240, 'minhanh@gmail.com', 'admin123', 'user'),
(1241, 'hoanglan@gmail.com', 'admin123', 'user'),
(1242, 'thilinh@gmail.com', 'admin123', 'user'),
(1243, 'veve@gmail.com', 'admin123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_phan_hoi`
--

CREATE TABLE `tbl_phan_hoi` (
  `id` int(11) NOT NULL,
  `ho_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung_phan_hoi` text COLLATE utf8_unicode_ci NOT NULL,
  `tai_khoan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian_phan_hoi` timestamp NOT NULL DEFAULT current_timestamp(),
  `tieu_de` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_phan_hoi`
--

INSERT INTO `tbl_phan_hoi` (`id`, `ho_ten`, `noi_dung_phan_hoi`, `tai_khoan`, `thoi_gian_phan_hoi`, `tieu_de`) VALUES
(5, 'dsfds', 'fgfgfd', 'fdaf@gmail.com', '2020-04-07 10:02:08', 'dfgfdg'),
(6, '5454', 'gfgfgf', 'dfdfds@gmail.com', '2020-04-08 03:29:58', 'fdsafd'),
(7, 'bbsdfd', 'sdafd', 'fdaf@gmail.com', '2020-04-08 03:31:53', 'dfafd'),
(9, 'fdfdfđ', 'dsfds', 'manchu@gmail.com', '2020-04-18 08:15:00', 'fdsfd'),
(10, 'vbvmnn', 'fdfhdsjbndshvkds,bvnbdsvdvbsbvvbjklfnvx,vbxnv,cxbvk,cx', 'nhn6298@gmail.com', '2020-04-19 07:34:01', 'fdsfd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tin_tuc`
--

CREATE TABLE `tbl_tin_tuc` (
  `id` int(11) NOT NULL,
  `tieu_de` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tac_gia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung_doc_thu` text COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT current_timestamp(),
  `nguoi_tao` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_sua` datetime DEFAULT NULL,
  `nguoi_sua` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anh_minh_hoa_1` text COLLATE utf8_unicode_ci NOT NULL,
  `anh_minh_hoa_2` text COLLATE utf8_unicode_ci NOT NULL,
  `so_luot_doc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_tin_tuc`
--

INSERT INTO `tbl_tin_tuc` (`id`, `tieu_de`, `tac_gia`, `noi_dung_doc_thu`, `noi_dung`, `ngay_tao`, `nguoi_tao`, `ngay_sua`, `nguoi_sua`, `anh_minh_hoa_1`, `anh_minh_hoa_2`, `so_luot_doc`) VALUES
(1, 'Cây thẻ bài hồng – ý nghĩa, công dụng và cách chăm sóc cho ra hoa đẹp', 'Nắng', 'Bạn đã bao giờ nghe đến cái tên thẻ bài hồng chưa? Cây thẻ bài hồng là một loại cây mang một vẻ đẹp rất riêng, rất lạ, gây thương nhớ đối với bao ánh mắt của những người yêu cây.', 'Bạn đã bao giờ nghe đến cái tên thẻ bài hồng chưa? Cây thẻ bài hồng là một loại cây mang một vẻ đẹp rất riêng, rất lạ, gây thương nhớ đối với bao ánh mắt của những người yêu cây. Không chỉ mang một vẻ đẹp độc đáo, loài cây này còn mang những ý nghĩa và công dụng to lớn.\r\n\r\nĐể có thể tận dụng triệt để những vẻ đẹp mà nó mang lại, trước tiên, bạn cần chăm sóc cây cho đúng cách. Vì vậy, bài viết hôm nay, chúng tôi sẽ giới thiệu cho bạn kĩ thuật chăm sóc cây thẻ bài hồng phát triển tốt tươi.\r\n\r\nKhông chỉ mang một vẻ đẹp độc đáo, loài cây này còn mang những ý nghĩa và công dụng to lớn\r\nGiới thiệu đôi nét về cây thẻ bài hồng\r\nCây thẻ bài hồng có tên khoa học là Tillandsia cyanea, thuộc họ Bromeliaceae, là loài thực vật có hoa lâu năm. Vì hoa của cây có hình dáng giống chiếc lệnh bài của quan lại thời phong kiến nên người Việt ta gọi nó bằng cái tên khác là cây lệnh bài.\r\n\r\nCây thẻ bài hồng có nguồn gốc từ những khu rừng mưa nhiệt đới xích đạo, vùng núi và sa mạc ở châu Mỹ. Nó được trồng phổ biến và vô cùng rộng rãi ở các nước như Mỹ, Mexico, Caribbean, Argentina,…\r\n\r\nCây thẻ bài hồng được biết đến như một loài cây phong thủy. Cả cây thẻ bài hồng toát lên vẻ đẹp lạ lùng, hiếm có, sang trọng , quý phái nhưng cũng rất giản dị. Nó làm cho người ta tò mò muốn sở hữu.\r\n\r\nVẻ đẹp này được làm nên bởi những chiếc lá dát những hạt kim tuyến bạc nhỏ mỏng mịn. la ánh lên những tia long lanh dưới ánh mặt trời. Những chiếc lá dài, hẹp, cứng và có răng cưa vô cùng đẹp mắt.\r\n\r\nBông hoa to, màu hồng gồm nhiều chiếc cánh hoa cứng xếp chồng lên và đối xứng nhau tạo nên một vẻ đẹp độc đáo, riêng có.\r\nVẻ đẹp ấy còn được tạo nên bởi những bông hoa. Bông hoa to, màu hồng gồm nhiều chiếc cánh hoa cứng xếp chồng lên và đối xứng nhau. Nó tạo nên một vẻ đẹp độc đáo, riêng có. Đến khi hoa gần tàn, giữa những kẽ hoa cứng cáp màu hồng kia sẽ mọc ra những bông hoa màu xanh lam vô cùng đẹp mắt và hòa hợp về màu sắc. Cùng với bông hoa hồng to, có 2-3 bông hoa thẻ bài hồng nhỏ mọc cùng nó.\r\n\r\nCùng với bông hoa hồng to, có 2-3 bông hoa thẻ bài hồng nhỏ mọc cùng nó.\r\nCây thẻ bài hồng thích nghi rất tốt đối với khí hậu nước ta nên người ta có thể trồng nó trong nhiều dạng môi trường và chăm sóc nó một cách dễ dàng. Chính vì vậy, nó là loài cây vô cùng được ưa chuộng để trồng làm cảnh ở Việt nam ngày nay.\r\n\r\nCách chăm sóc cây thẻ bài hồng\r\nCây thẻ bài hồng là một loài cây dễ thích nghi và vô cùng dễ chăm sóc\r\n\r\nĐặc tính của cây thẻ bài hồng\r\nVì đây là loài cây có xuất xứ từ vùng nhiệt đới và những vùng sa mạc ở châu Mỹ. Vì thế, nó có thể chịu hạn, sinh trưởng và phát triển tốt trong nhà, trong phòng, những nơi thiếu ánh sáng.\r\n\r\nChọn chậu:\r\nNên chọn chậu phù hợp với cây. Vì đây là loài cây nhỏ, thích hợp để bàn vì vậy, bạn nên chọn chậu có kích thước nhỏ để phù hợp với thẩm mỹ.\r\n\r\nVề đất:\r\nVì là loài cây có thể sống sót trong môi trường sa mạc nên nó có thể sống và phát triển dưới mọi loại đất. Tuy nhiên để cây sinh trưởng và phát triển một cách tốt nhất, bạn nên chọn những loại đất tơi xốp, giàu dinh dưỡng và có khả năng thoát nước cao.\r\n\r\nSau khi chọn đất và chậu xong, bạn đi đến tiến hành trồng cây. Rất đơn giản, bạn chỉ cần cho đất bằng ½ chậu, sau đó đặt cây xuống và lấp phần đất còn lại vào. Sau đó, bạn nên tưới đẫm nước, đủ ẩm để cây có thể duy trì được sụ tươi tốt trong quá trình bén rễ.\r\n\r\nCách chăm sóc cây thẻ bài hồng\r\nRất đơn giản để chăm sóc loài cây này. Bạn chỉ cần chú ý đến việc tưới nước cho cây. Không nên tưới nhiều quá, cây sẽ bị úng và thối rễ, cũng không nên tưới ít quá cây sẽ trông thiếu sức sống.\r\n\r\nBạn nên tưới đủ nước cho cây để cây có thể phát triển tự nhiên nhất. Tốt nhất nên tưới cây 3 ngày 1 lần để đảm bảo quá trình phát triển.\r\n\r\nNên đặt cây ở nơi thông thoáng, thêm vào đó bạn cũng nên dùng kéo cắt đi những lá khô héo để tránh làm ảnh hưởng đến sự sinh trưởng và phát triển của những lá khác.\r\n\r\nNếu chăm sóc cây tươi tốt, nó sẽ đem đến cho bạn những ý nghĩa và công dụng to lớn.\r\nVề ý nghĩa:\r\nĐây là cây thẻ bài, vì thế, nó chính là biểu tượng cho thẻ bài, lá bùa cầu chúc bình an, may mắn và hạnh phúc đến với các thành viên trong gia đình.\r\n\r\ncây thẻ bài hồng là biểu tượng cho thẻ bài, lá bùa cầu chúc bình an, may mắn và hạnh phúc đến với các thành viên trong gia đình\r\nNó sẽ đặc biệt phát huy ý nghĩa của nó đối với những người mệnh Hỏa (vì cây hợp với những người mệnh Hỏa)\r\n\r\nVề công dụng:\r\nNó có công dụng làm cho nhà bạn vẻ đẹp độc đáo, mới lạ, hiếm thấy, làm cho không gian nhà bạn thêm đẹp hơn. Nó làm giảm bớt căng thẳng, mệt mỏi sau những giờ làm việc căng thẳng cho bạn và những người thân trong gia đình bạn.\r\n\r\nNó cũng có chức năng thanh lọc không khí vô cùng hiệu quả, làm cho môi trường sống, sinh hoạt, học tập và làm việc của bạn an toàn hơn.\r\n\r\nNó còn được sử dụng làm quà tặng trong các dịp đặc biệt.\r\n\r\nHi vọng những kĩ thuật trồng và chăm sóc cây thẻ bài hồng trên đây sẽ giúp bạn có thể chăm sóc cho cây của bạn tươi tốt để mang lại may mắn và bình an cho gia đình bạn.', '2020-03-22 13:15:58', 'Lan Nguyen', NULL, NULL, 'cay_the_bai_hong.jpg', 'cay_the_bai_hong_1.jpg', NULL),
(2, 'Bật mí top 5 cây cảnh tượng trưng cho tình yêu', 'Trần Dần', 'Nếu bạn đang có ý định tặng cho người thương một chậu cây cảnh tượng trưng cho tình yêu nhưng lại không biết nên tặng cây gì và ý nghĩa của nó là gì thì bài viết này chính là “nơi bạn dừng chân” đấy', 'Tình yêu là thứ gì đó vô hình, ngấm vào tim ta từng phút”. Tình yêu quả thật thiêng liêng, khi yêu ai cũng luôn muốn dành điều tốt đẹp nhất cho đối phương.\r\n\r\nNếu bạn đang có ý định tặng cho người thương một chậu cây cảnh tượng trưng cho tình yêu nhưng lại không biết nên tặng cây gì và ý nghĩa của nó là gì thì bài viết này chính là “nơi bạn dừng chân” đấy.\r\n\r\nYêu là cho hết đi không cần nhận lại\r\n\r\nCùng ghé qua top 5 cây cảnh tượng trưng cho tình yêu sau đây nhé.\r\n\r\nCây Sen đá - biểu tượng của tình yêu son sắt\r\n\r\nBạn có thấy thời gian gần đây, rất nhiều đám cưới diễn ra được trang trí ngập tràn sen đá không?\r\n\r\nBởi sen đá chính là cây cảnh tượng trưng cho tình yêu đấy. Nó như chứng nhân cho tình cảm bền chặt của đôi lứa.\r\n\r\nNhững người yêu nhau tặng nhau sen đá với mong muốn sẽ có một tình yêu vĩnh cữu. Sen đá có sức sống rất mãnh liệt, dù có mưa sa nắng cháy vẫn luôn kiêu hãnh. Cũng giống như tình yêu vậy, gian khổ ư? Thử thách ư? Cũng mặc thôi, chỉ cần hai người nắm tay nhau, kiên trì một lòng thì đường có mấy chông gai vẫn vượt qua được.\r\n\r\nCây Hồng môn mang sắc đỏ của ngọn lửa tình yêu\r\n\r\nHồng môn nổi bật với những tay lá hình trái tim cùng với những nụ hoa đỏ rực rỡ. Gửi đến đối phương chậu hồng môn xinh xắn như trao gửi đến một nửa của mình ngàn trái tim.  Ngàn trái tim ấy chứa đựng một trời yêu thương, một trời vấn vương thương nhớ. Những bông hoa sắc đỏ chính là biểu trưng cho một tình yêu nồng thắm, đượm vị ấm của ngọn lửa tình yêu bất diệt. Dù thời đổi sao dời thì tình yêu ấy vẫn bùng cháy mãnh liệt.\r\n\r\nCây Ngọc ngân - đại diện cho ngày lễ tình nhân Valentine\r\n\r\nCây ngọc ngân hay còn gọi là cây valentine. Nghe đến cái tên là thấy ngay tình yêu rồi đúng không? Rất nhiều người mua tặng cho người mình yêu loại cây này với mong muốn một năm 365 ngày đối với đôi ta ngày nào cũng là Valentine ngọt ngào.\r\n\r\nVẻ ngoài thanh tao của ngọc ngân đại diện cho một tình yêu trong sáng, một tình cảm chân thành, thủy chung. Ngoài ra cây còn mang đến cảm giác bình yên. Thử nghĩ mà xem, 24h yêu nhau đâu thể cận kề bên nhau, nhưng có một “thiên thần” giúp ta ở bên người ấy. Từng ngấn lá xanh rời, thuôn dài ấy sẽ thay ta vỗ về, an ủi người ấy mỗi khi căng thẳng, mệt mỏi.\r\n\r\nCây kim ngân tim - tượng trưng cho tình yêu\r\n\r\nKim ngân là một trong những cây cảnh tượng trưng cho tình yêu được rất nhiều ưa thích hiện nay. Kim ngân với phần gốc rắn rỏi, tượng trưng cho một tình yêu bền chặt.\r\n\r\nCó nhiều loại Kim ngân, và với mỗi loại lại có những ý nghĩa khác nhau. Kim ngân tim với phần rễ uốn lượn như một trái tim, biểu tượng cho tình yêu chân thành. Trái tim ấy thay lời muốn nói,  luôn yêu và trao đi hết. Kim ngân bím với phần thân đan vào nhau như tóc tết sam, như một minh chứng cho tình yêu của hai tâm hồn đồng điệu, hòa làm một. \r\n\r\nCây Cau tiểu trâm đại diện cho tình yêu mãnh liệt, bền bỉ\r\n\r\nCau tiểu trâm có hình dáng nhỏ nhắn, lá cây luôn hướng lên trên biểu trưng cho sức sống mãnh liệt. Cuộc sống thì không chỉ có màu hồng, tình yêu cũng vậy, để có thể bên nhau là sự cố gắng rất nhiều. Cây mang ý nghĩa cho sự cố gắng không ngừng nghỉ, luôn nỗ lực để vượt qua khó khăn. Những đôi yêu nhau thường tặng cau tiểu trâm như mong muốn mối quan hệ sẽ được dài lâu, như một lời hứa dành cho nhau sẽ cùng nhau đi, hết bão giông chắc chắn sẽ là cầu vồng đa sắc.\r\n\r\nMột chậu cây nhỏ nhắn, kèm theo những chiếc nơ bé xinh, một tấm thiệp chứa lời yêu,  tận tay trao cho đối phương. Chân thành và ấm áp tự nhiên hiện hữu.\r\n\r\nKhông chỉ đơn giản là cây xanh, ẩn chứa đằng sau nó còn là rất nhiều ý nghĩa sâu sắc. Nếu tình yêu của bạn không thể diễn tả bằng lời, hãy để những cây cảnh tượng trưng cho tình yêu thay bạn gửi gắm đến người ấy những gì bạn mong muốn nhé. Hy vọng với những gì Vườn Cây Việt chia sẻ bạn đã có thể lựa chọn được một chậu cây xinh yêu với đầy nhắn gửi yêu thương dành cho một nửa mình nhé và chúc cho tình yêu của các bạn mãi bền chặt và xanh tươi.', '2020-03-22 13:15:58', 'Lan Nguyen', NULL, NULL, 'cay-canh-tuong-trung-cho-tinh-yeu.jpg', 'cay-canh-tuong-trung-cho-tinh-yeu.jpg', NULL),
(3, 'Ý nghĩa của cây Bạch Mã Hoàng Tử và những điều ít người biết', 'Lan Nguyen\r\n', 'Cây Bạch Mã Hoàng Tử được nhiều người trồng làm cảnh trong nhà nhưng không phải ai cũng hiểu rõ về ý nghĩa của cây. Cách trồng cũng như cách chăm sóc cây Bạch Mã Hoàng Tử có đơn giản như mọi người nghĩ? Hãy cùng theo dõi bài viết này và bạn sẽ nhận được câu trả lời.', 'Cây Bạch Mã Hoàng Tử còn được dân gian gọi là cây Bạch Mã, tên khoa học là Aglaonema Pseudobracteatum, thuộc họ Araceae. Ngoài tự nhiên, cây có thể cao đến 1m5, cây trồng chậu thường cao trên 40cm. Bạch Mã thường mọc thành bụi, thân vươn thẳng đứng, màu trắng muốt, tán lá có gân trắng. Lá cây hình bầu dục lớn, nhọn ở đầu, màu xanh lơ, nhiều sọc gợn trắng.\r\n\r\nCây có rễ chùm, màu trắng ngà. Đặc điểm nổi bật của cây Bạch Mã là sinh trưởng nhanh, lan bụi rộng. Người trồng có thể nhân giống bằng cách tách bụi, sẽ hiệu quả hơn nhiều so với việc gieo trồng.\r\n\r\nÝ nghĩa, công dụng của cây Bạch Mã Hoàng Tử trong đời sống\r\nTrong đời sống thường ngày, công dụng của cây Bạch Mã Hoàng Tử là để trang trí. Cây được trồng ở nhiều nơi như nhà ở, văn phòng, khách sạn, quán ăn, quán cafe,... Người ta cũng trồng Bạch Mã ngoài vườn hoặc công viên để giúp cảnh quan thêm sinh động.\r\n\r\nTuy nhiên, tác dụng quan trọng hơn việc làm cảnh là cây có thể thanh lọc không khí. NASA đã xếp cây Bạch Mã vào 1 trong 10 loại cây làm sạch khói bụi tốt nhất. Cây có khả năng loại bỏ các khí độc hại như benzen và formaldehyde, mang lại không gian trong lành xung quanh nơi trồng.\r\n\r\nNgoài ra, cây còn là món quà tặng ý nghĩa mà những người yêu thiên nhiên hay trao cho nhau vào dịp đặc biệt như khai trương, khánh thành, tân gia, sinh nhật, … Những người làm chủ hoặc làm sếp rất thích đặt một chậu cây Bạch Mã tại nơi kinh doanh hay làm việc của mình để thể hiện uy quyền.\r\n\r\nÝ nghĩa phong thủy của cây Bạch Mã Hoàng Tử\r\nBạch Mã Hoàng Tử mang vẻ đẹp của sự sang trọng, lịch lãm. Ngay từ tên gọi đã toát nên vẻ đẹp đẳng cấp của cây. Cây vươn thẳng mang ý nghĩa như sự vươn lên, tiến tới, thuận lợi trong công việc cũng như cuộc sống gia chủ. Bạn có thể trồng cây để cầu mong sự nghiệp luôn hanh thông.\r\n\r\nNhiều người tin rằng cây Bạch Mã Hoàng Tử có thể mang đến nhiều may mắn, tài vận tốt cho người trồng. Trong phong thủy, ý nghĩa của cây Bạch Mã Hoàng Tử như là vật phát tài của người mệnh Kim. Mệnh Kim có màu bản mệnh là màu trắng, xám hoặc bạc. Do đó cây này khá hợp với họ. Đồng thời, nếu hỏi cây Bạch Mã Hoàng Tử hợp mệnh gì, có thể trả lời thêm là mệnh Thủy (cây có màu xanh lơ của nước biển).\r\n\r\nBạch Mã hiếm khi ra hoa. Hoa sẽ tập trung thành cụm màu trắng ngả vàng, bao bọc bởi mo hoa trắng muốt. Mặc dù không quá nổi bật nhưng cây Bạch Mã Hoàng Tử ra hoa là báo hiệu những điều tốt đẹp sắp đến với cuộc sống người trồng.\r\n\r\nCách trồng và chăm sóc cây Bạch Mã Hoàng Tử\r\nĐất trồng\r\nCây Bạch Mã Hoàng Tử có thể sống trong nhiều loại đất trồng, nhưng thích hợp nhất vẫn là tơi, xốp, thoát nước tốt. Khuyến khích người trồng chọn đất than bùn kết hợp cùng đá trân châu và xơ dừa, tro trấu. Hỗn hợp đất này có khả năng giữ lại nước, đủ ẩm nhẹ nuôi cây nhưng cũng dễ dàng thoát nước để cây không bị thối rễ. Nhiều người còn chọn đất chua nhẹ trong phạm vi 5,6-6,5 pH để trồng cây Bạch Mã Hoàng Tử.\r\n\r\nÁnh sáng và nhiệt độ\r\nCây Bạch Mã Hoàng Tử là loại cây cảnh thích hợp trồng trong nhà, dưới ánh đèn huỳnh quang. Bởi lẽ, ở ngoài tự nhiên, Bạch Mã cũng sống dưới bóng râm cây nhiệt đới và hiếm khi nhận ánh nắng trực tiếp.\r\n\r\nĐể cây sinh trưởng tốt hơn, thỉnh thoảng bạn nên mang cây ra phơi nắng nhẹ buổi sáng trước 10h mỗi tuần một lần. Hoặc bạn cũng có thể đặt chậu cây ở gần cửa sổ, dưới giếng trời, trên sân thượng và những nơi có ánh sáng khuếch tán khác.\r\n\r\nVề nhiệt độ, lý tưởng nhất là từ 18-30 độ C. Cây sống được trong điều kiện phòng lạnh. Tuy nhiên, về bản chất, Bạch Mã khá nhạy cảm với thời tiết quá lạnh nên dưới 10 độ C cây có thể chết.\r\n\r\nNước\r\nCây Bạch Mã Hoàng Tử cần lượng nước vừa phải, trung bình bạn nên tưới 2-3 lần/tuần. Điều kiện nước ít không phải là ý hay đối với cây này, do đó bạn không bao giờ được để đất trong chậu cây quá khô trong thời gian dài. Thỉnh thoảng bạn có thể phun sương cho cây để tăng độ ẩm hoặc đặt nó lên khay đá cuội có nước để cung cấp thêm độ ẩm.\r\n\r\nNgoài ra, cây sống tốt trong môi trường thủy canh, có thể trồng cây trong bình thủy tinh, chúng ta có thể thấy được bộ rễ cây Bạch Mã trắng muốt nhìn rất xinh xắn. Cách trồng cây Bạch Mã Hoàng Tử thủy sinh là thường xuyên thay nước cho cây. Không được thay nước trực tiếp vào chậu khi chưa lấy cây ra ngoài, khi thay nước nhớ cắt, tỉa rễ đã bị hư và thối, tránh để lá tiếp xúc với nước dinh dưỡng.\r\n\r\nCắt tỉa\r\nBạn nên loại bỏ những chiếc lá chết, lá héo bằng cách cắt dọc chúng theo thân lá xuống gốc cây. Chú ý dùng dao hoặc kéo chuyên dụng, tránh sử dụng tay ngắt vì có thể làm hại cây và hại da tay của chính bạn. Bạn cần cẩn thận khi cắt để tránh phạm vào thân cây và các bộ phận khác. Cần lưu ý, trong thời gian cây Bạch Mã Hoàng Tử ra hoa, người trồng không nên cắt tỉa cành lá của cây.\r\n\r\nSâu bệnh\r\nCác loài gây hại phổ biến nhất cho cây Bạch Mã Hoàng Tử là rệp sáp, ve nhện. Chúng sẽ bám chặt vào mặt dưới của lá và thân để hút nhựa cây. Người trồng nên xử lý bằng cách phun sương xà phòng, nước muối pha loãng hoặc nước vôi. Hãy phun vào buổi tối khi cây không tiếp xúc ánh nắng để tránh cháy lá.\r\n\r\nNgoài ra, cây Bạch Mã Hoàng Tử dễ bị đốm lá do nấm. Lá sẽ mất màu, xuất hiện các lỗ hoặc đốm nâu loang lổ và hư hại theo thời gian. Bạn nên sử dụng thuốc diệt nấm Monterey Liqui-Cop để phun cho cây. Lưu ý là phải mang cây ra ngoài trời, đeo găng tay và khẩu trang rồi hẵng phun thuốc nhé.\r\n\r\nCây Bạch Mã Hoàng Tử có độc không?\r\nNhững chuyên gia của trung tâm kiểm soát chất độc động vật ASPCA (APCC) cho rằng cây Bạch Mã Hoàng Tử có thể không an toàn đối với động vật như chó, mèo, thỏ. Do đó, nếu như trong nhà bạn đang nuôi thú cưng, và ăn phải lá hoặc thân cây Bạch Mã, hãy mang chúng đến bác sĩ thú ý để chữa trị ngay lập tức. Tốt hơn hết vẫn là giữ chúng tránh xa cây Bạch Mã Hoàng Tử.\r\n\r\nTrong khi đó, Đại học Riverside, CA cho rằng cây có thể chứa tinh thể canxi oxalate, khả năng cao gây kích ứng cho da, miệng, lưỡi và họng của con người. Trường hợp trẻ nhỏ ăn nhầm phải cây Bạch Mã, chất này sẽ gây khó chịu cho dạ dày, sưng và khó thở. Bạn cần đưa bé đến trung tâm y tế để khám và chữa trị kịp thời nếu có dấu hiệu dị ứng với cây.\r\n\r\nBên cạnh đó, nhựa cây tiết ra còn gây viêm da, kích ứng và phát ban da. Đó là lý do mà khi chăm sóc cây, nhân giống hay thay chậu, bạn cần đeo găng tay nhựa để bảo vệ làn da của mình. Đồng thời không được ngắt lá, vò lá hoặc đưa lên mũi ngửi.\r\n\r\nCây Bạch Mã Hoàng Tử có độc không, tất nhiên đáp án là có. Tuy nhiên, với độc tố nhẹ như trên đã nói, bạn chỉ cần lưu tâm một tí khi trồng cây thì sẽ không có gì quá nguy hiểm xảy ra.', '2020-03-22 13:15:58', 'Lan Nguyen', NULL, NULL, 'bach_ma_hoang_tu.jpg', 'bach_ma_hoang_tu.jpg', NULL),
(4, 'Cẩm chướng - Loài hoa tặng mẹ', 'Nguyễn Trà My', 'Ý nghĩa chung: Sự ái mộ - Sự thôi miên, quyến rũ - Tình yêu của phụ nữ - Niềm tự hào - Sắc đẹp - Tình yêu trong sáng và sâu đậm, thiết tha.', 'Những món quà tặng Mẹ là cách để chúng ta thể hiện tình cảm, sự cảm ơn… đến người đã sinh thành và nuôi dưỡng ta nên người. Và sắp đến ngày của Mẹ rồi, bạn đã chuẩn bị được gì để làm Mẹ bất ngờ chưa? Và nếu chưa thì chúng tôi có một gợi ý với bạn rằng bó hoa cẩm chướng tặng Mẹ sẽ là món quà vô cùng bất ngờ và hạnh phúc mà Mẹ nhận được trong ngày này đấy. Nhưng hoa cẩm chướng có ý nghĩa gì trong ngày của Mẹ? Đây lại là một thắc mắc của rất nhiều người. Để tìm hiểu chi tiết hơn thì bạn đọc hãy cùng chúng tôi đi tìm hiểu chi tiết hơn qua nội dung chia sẻ dưới đây nhé. Hoa cẩm chướng Mục lục [Xem] 1. Nguồn gốc ra đời ngày của Mẹ Chắc hẳn sẽ có rất nhiều người thắc mắc rằng ngày của Mẹ có nguồn gốc như thế nào? Và qua thông tin tìm hiểu thì chúng tôi biết được rằng ngày của Mẹ có nguồn gốc ra đời vào thời kỳ Hy Lạp và La Mã – đây chính là lúc mà lễ tri ân Mẹ được tổ chức thường niên vào mùa xuân hàng năm. Với người Hy Lạp thì thời đó họ thường cúng tế cho các nữ thần, đặc biệt là Rhea – Mẹ của nhiều vị thần trong thần thoại của đất nước Hy Lạp. Nhưng sau đó thì đã có một khoảng thời gian mà ngày này bị đi vào lãng quên. Cho đến ngày 8/5/1914 thì tổng thống Mỹ đã quyến định lấy ngày Chủ Nhật thứ hai của tháng 5 hàng năm là ngày của Mẹ. Cũng từ đó mà ngày của Mẹ ra đời và được lan rộng ra nhiều quốc gia trên thế giới, trong đó có Việt Nam. 2. Ý nghĩa hoa cẩm chướng trong ngày của Mẹ Ngày của Mẹ chính là ngày tôn vinh tình yêu thương, công lao và những hi sinh của người Mẹ. Đây chính là dịp để những đứa con thể hiện lòng biết ơn đến người đã sinh thành và nuôi dưỡng mình nên người. Và trong tất cả các món quà thì có lẽ, hoa cẩm chướng chính là món quà ý nghĩa nhất mà chúng ta nên lựa chọn dành tặng Mẹ. Tại sao lại vậy? Hoa cẩm chướng tặng mẹ Bởi những bông hoa cẩm chướng chính là biểu tượng cho đức tính cao quý của mẹ, của người phụ nữ, biểu tượng cho sự thủy chung, lòng nhân hận, sự thnah cao, sâu sắc và bền bỉ của mẹ. Bên cạnh đó thì hoa cẩm chướng với nhiều màu sắc khác nhau cũng thể hiện nhiều cung bậc tình cảm, cảm xúc và nó cũng mang đến nhiều ý nghĩa đặc biệt khác nhau. – Hoa cẩm chướng đỏ nhạt: biểu tượng cho lòng cảm phục. – Hoa cẩm chướng đỏ đậm: là tình yêu sâu đậm của những đứa con dành cho Mẹ. – Hoa cẩm chướng trắng: là lời ngợi ca tinh khiết, sự ngọt ngào, nhẫn nại. Và hoa cẩm chướng trắng chính là loài hoa để dành tặng cho những người Mẹ đã khuất. – Hoa cẩm chướng hồng: bó hoa là lời bày tỏ về lòng tri ân. Hoa cẩm chướng hồng – Hoa cẩm chướng nhiều màu: đó là tình cảm trọn vẹn mà những đứa con muốn dành tặng Mẹ. Qua nội dung trên đây thì chắc hẳn các bạn cũng đã biết được thêm nhiều thông tin hấp dẫn về những bông hoa cẩm chướng trong bó hoa chúc mừng ngày của Mẹ rồi đúng không? Không chỉ có hoa cẩm chướng mà còn rất nhiều các loài hoa khác nữa cũng được dùng làm quà tặng Mẹ trong nhiều dịp khác nhau. Để tìm hiểu thêm thông tin liên quan, bạn đọc có thể truy cập trang web: để tìm hiểu chi tiết nhé. Hoa cẩm chướng còn có một tên gọi khác đó là hoa cẩm nhung. Cũng như hoa lan, hoa hồng, hoa đồng tiền… hoa cẩm chướng cũng mang thông điệp riêng. Vậy ý nghĩa thật sự của loài hoa này là gì? Mời bạn cùng Mrhoa.com của chúng tôi tham khảo bài viết dưới đây nhé!    \r\nÝ nghĩa các màu sắc hoa cẩm chướng + Nếu là cẩm chướng chỉ thuần một màu, có nghĩa là sự đồng ý \r\n+ Nếu là hoa cẩm chướng với các sọc, viền thì biểu hiện cho một thông điệp tế nhị của lời từ chối tình yêu, từ chối lời cầu hôn. Bên cạnh đó, cẩm chướng vàng cũng mang thông điệp của sự từ chối, hắt hủi. \r\n+ Nếu bạn tặng hoa cẩm chướng hồng cho “người ấy” có nghĩa rằng bạn đang gửi gắm thông điệp “Anh sẽ không bao giờ quên em”. Bên cạnh đó, loài hoa cẩm chướng màu hồng này còn mang ý nghĩa tượng trưng cho Ngày của mẹ. \r\n+ Và khi tình cờ bắt gặp một người bạn ái mộ, thần tượng hoặc tôn kính, một cành hoa cẩm chướng đỏ đủ nói lên tất cả. + Nhưng nếu màu đỏ của hoa cẩm chướng ngã sang đỏ thẫm hoặc đỏ nhung thì đồng nghĩa với việc bạn đang muốn gửi gắm một thông điệp rằng, trái tim bạn đang rất đau nhói vì “người ấy” \r\n+ Còn bạn muốn tặng cho cô nàng ngây thơ, trong sáng mang vẻ đẹp trong veo thì cẩm chướng trắng là một gợi ý tuyệt vời đấy! Hoa cẩm chướng trắng Nếu nhìn nhận ở một phạm vi rộng hơn thì hoa cẩm chướng không chỉ gói gọn trong tình cảm mà nó còn là biểu tượng đầy kiêu hãnh của đất nước Slovenia (ở Nam Tư). Trong các bài Thánh ca của Slovenia, loài hoa này luôn xuất hiện và được ca ngợi chẳng khác gì những vị thần của thiên nhiên. Với người dân đất nước Slovenia, cẩm chướng là một loài hoa mà Thượng đế ưu ái ban tặng, là món quà tượng trưng cho tình yêu dành cho 1 đứa trẻ. Và có một điều chắc có lẽ bạn không quá ngạc nhiên, đó là khi đặt chân đến đất nước Slovenia, bạn sẽ hoàn toàn bị chinh phục bởi các thiết kế nhà ở đều có sự góp mặt của hoa cẩm chướng. Và cho tới ngày nay, vẻ đẹp kiều diễm, kiêu sa của hoa cẩm chướng (Canartion) luôn khiến bất cứ ai nhìn ngắm hoặc cầm trên tay loài hoa này đều có sự rung động và xao xuyến khó tả. Trên đây shop hoa tươi ở Quận 5 đã giới thiệu đến các bạn ý nghĩa của hoa cẩm chướng rồi.     \r\nTặng hoa cẩm chướng có ý nghĩa gì? Cũng giống như các loài hoa khác như hoa hồng, hoa hướng dương, hoa lan… hoa cẩm chướng cũng mang đến những thông điệp vô cùng ý nghĩa. Và do vậy, tùy vào từng mục đích cũng như mức độ tâm tư, tình cảm mà việc tặng hoa cẩm chướng mang những ý nghĩa khác nhau:   Đóa hoa cẩm chướng thuần một màu hồng mang đến thông điệp về sự chấp thuận và đồng ý. \r\n+ Nếu bạn dành tặng đóa hoa cẩm chướng vằn có sọc thì bạn đang muốn người ấy hiểu rằng, bạn đã từ chối tiếp nhận tình cảm đơn phương của người ấy! \r\n+ Tặng hoa cẩm chướng tím cho một ai đó chắc hẳn rằng bạn muốn người ấy thầm biết rằng, tính khí của họ rất đáng yêu, dịu dàng nhưng lại thay đổi một cách thất thường, dỗi hờn vu vơ làm bạn rất khó chiều chuộng.\r\n+ Và còn gì đẹp bằng nếu bạn nhận được đóa hoa cẩm chướng trắng. Bởi đó có nghĩa là người ấy muốn gửi đến bạn một tình yêu vẹn nguyện và tinh khôi nhất. \r\n+ Tặng hoa cẩm chướng đỏ chứng tỏ tình yêu bạn dành cho người ấy luôn nồng nhiệt và đắm say. Và ở một khía cạnh khác, hoa cẩm chướng đỏ còn là biểu tượng của tiểu bang Ohio.\r\n', '2020-03-22 13:36:33', 'Hoàng Ngân', NULL, NULL, 'hoa_cam_chuong.jpg', 'hoa_cam_chuong.jpg', NULL),
(7, '1234', 'gsdgds', 'dà', 'fafd', '0000-00-00 00:00:00', NULL, NULL, NULL, '8.jpg', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_binh_luan`
--
ALTER TABLE `tbl_binh_luan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_tbl_binh_luan_tbl_khach_hang` (`id_khach_hang`);

--
-- Indexes for table `tbl_dich_vu`
--
ALTER TABLE `tbl_dich_vu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_doi_ngu`
--
ALTER TABLE `tbl_doi_ngu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_don_hang`
--
ALTER TABLE `tbl_don_hang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_don_hang_chi_tiet`
--
ALTER TABLE `tbl_don_hang_chi_tiet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `tbl_phan_hoi`
--
ALTER TABLE `tbl_phan_hoi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nguoi_tao` (`nguoi_tao`),
  ADD KEY `nguoi_sua` (`nguoi_sua`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_dich_vu`
--
ALTER TABLE `tbl_dich_vu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_doi_ngu`
--
ALTER TABLE `tbl_doi_ngu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3009;

--
-- AUTO_INCREMENT for table `tbl_don_hang`
--
ALTER TABLE `tbl_don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_don_hang_chi_tiet`
--
ALTER TABLE `tbl_don_hang_chi_tiet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1028;

--
-- AUTO_INCREMENT for table `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000;

--
-- AUTO_INCREMENT for table `tbl_phan_hoi`
--
ALTER TABLE `tbl_phan_hoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_binh_luan`
--
ALTER TABLE `tbl_binh_luan`
  ADD CONSTRAINT `FK_tbl_binh_luan_tbl_khach_hang` FOREIGN KEY (`id_khach_hang`) REFERENCES `tbl_khach_hang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  ADD CONSTRAINT `FK_tbl_nguoi_dung_tbl_khach_hang` FOREIGN KEY (`email`) REFERENCES `tbl_khach_hang` (`email`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  ADD CONSTRAINT `FK` FOREIGN KEY (`nguoi_sua`) REFERENCES `tbl_nguoi_dung` (`email`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

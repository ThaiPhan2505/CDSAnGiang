-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 02:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chuyendoiso`
--
CREATE DATABASE IF NOT EXISTS `chuyendoiso` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `chuyendoiso`;

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `id_binhluan` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `id_tintuc` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `ngaydang` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doanhnghiep`
--

CREATE TABLE `doanhnghiep` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_loaihinh` int(11) NOT NULL,
  `id_linhvuc` int(11) NOT NULL,
  `tentiengviet` varchar(255) NOT NULL,
  `tentienganh` varchar(255) NOT NULL,
  `tenviettat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `mathue` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `soluongnhansu` int(11) NOT NULL,
  `ngaylap` date NOT NULL,
  `mota` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doanhnghiep_daidien`
--

CREATE TABLE `doanhnghiep_daidien` (
  `id` int(11) NOT NULL,
  `id_doanhnghiep` int(11) NOT NULL,
  `tennguoidaidien` varchar(255) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `cccd` varchar(20) NOT NULL,
  `noicap` varchar(255) NOT NULL,
  `img_mattruoc` varchar(255) NOT NULL,
  `img_matsau` varchar(255) NOT NULL,
  `chucvu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doanhnghiep_loaihinh`
--

CREATE TABLE `doanhnghiep_loaihinh` (
  `id` int(11) NOT NULL,
  `tenloaihinh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doanhnghiep_loaihinh`
--

INSERT INTO `doanhnghiep_loaihinh` (`id`, `tenloaihinh`) VALUES
(1, 'Doanh nghiệp tư nhân'),
(2, 'Công ty trách nhiệm hữu hạn'),
(3, 'Công ty trách nhiệm hữu hạn một thành viên'),
(4, 'Công ty cổ phần'),
(5, 'Công ty hợp doanh'),
(6, 'Đơn vị phụ thuộc');

-- --------------------------------------------------------

--
-- Table structure for table `doanhnghiep_sdt`
--

CREATE TABLE `doanhnghiep_sdt` (
  `id` int(11) NOT NULL,
  `id_doanhnghiep` int(11) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `loaisdt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `linhvuc`
--

CREATE TABLE `linhvuc` (
  `id` int(11) NOT NULL,
  `tenlinhvuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `linhvuc`
--

INSERT INTO `linhvuc` (`id`, `tenlinhvuc`) VALUES
(1, 'Nông Nghiệp'),
(2, 'Công nghiệp & xây dựng'),
(3, 'Thương mại & dịch vụ'),
(4, 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `id_linhvuc` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` longtext NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `ngaydang` datetime NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `trangthai` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `id_linhvuc`, `id_user`, `tieude`, `tomtat`, `noidung`, `hinhanh`, `ngaydang`, `luotxem`, `trangthai`) VALUES
(1, 1, 1, 'Tháng Thanh niên: Tuổi trẻ tiên phong chuyển đổi số', 'Tháng Thanh niên năm 2023 là dịp để tăng cường chuyển đổi số đồng bộ trên tất cả các mặt công tác của Đoàn, phát huy vai trò của thanh niên tham gia tích cực công cuộc chuyển đổi số, ứng dụng công nghệ số.', 'Tiếp và làm việc với đoàn có ông Phạm Thành Được – Phó Chủ tịch UBND huyện Thoại Sơn, đại diện lãnh đạo Phòng Tài chính kế hoạch, Kinh tế hạ tầng, Phòng Nông nghiệp và Phát triển nông thôn, Phó Chủ tịch UBND các xã, thị trấn cùng thành viên các HTX đang hoạt động trên địa bàn huyện.\r\n\r\nHuyện Thoại Sơn có 27 HTX, với 1.290 thành viên. Trong đó có 9 HTX gắn kết với Tập đoàn Lộc Trời theo chuỗi giá trị gắn với sản phẩm chủ lực của địa phương; có 1 Liên hiệp HTX gồm 8 HTXNN là thành viên cụ thể: HTXNN Thắng Lợi, Hòa Tân, Bình Thành, Sơn Hòa, Vọng Thê, An Bình, Tân Đông, Tây Phú với vốn điều lệ là 500 triệu đồng. Với vai trò nòng cốt về kinh tế tập thể, HTX thời gian qua đã từng bước hoạt động đi vào nề nếp và đem lại hiệu quả khá quan trọng về phát triển nông nghiệp của địa phương cụ thể: Hỗ trợ nông dân tham gia ứng dụng khoa học công nghệ vào sản xuất như các chương trình “một phải năm giảm”, “ba giảm ba tăng”, sản xuất các mô hình ứng dụng khoa học kỹ thuật trong xây dựng NTM; Thực hiện cơ giới hóa vào nông nghiệp ngày càng nhiều và đa dạng các dịch vụ như: sạ lúa, phun xịt thuốc trừ sâu, sạ phân bón bằng máy bay không người lái (drone), sử dụng máy móc từ khâu làm đất đến thu hoạch bằng máy gặt đập liên hợp; HTX còn đóng vai trò quan trọng trong liên kết tiêu thụ giúp nông dân giảm tác động giá vật tư, nâng cao chất lượng sản xuất nông nghiệp…', 'tintucanhdemo.png', '2023-02-24 03:26:27', 130, 1),
(2, 1, 1, 'Cách làm dịch vụ công trực tuyến tiện như mua hàng online', 'Dù chính quyền khuyến khích nộp hồ sơ trực tuyến từ nhiều năm qua nhưng nhiều người dân vẫn băn khoăn không biết nộp ở đâu, cách làm như thế nào, hiệu lực ra sao?\r\n\r\nHiện dịch vụ công trực tuyến được quy định tại Nghị định 42/2022 của Chính phủ về việc cung cấp thông tin và dịch vụ công trực tuyến của cơ quan nhà nước trên môi trường mạng.\r\n\r\nĐể làm hồ sơ trực tuyến, người dân và doanh nghiệp phải đăng ký tài khoản dịch vụ công. Hiện việc đăng ký tài khoản tại Cổng dịch vụ công quốc gia (https://dichvucong.gov.vn) khá đơn giản, trong đó yêu cầu tiên quyết là sim điện thoại đăng ký chính chủ.', 'Tiếp và làm việc với đoàn có ông Phạm Thành Được – Phó Chủ tịch UBND huyện Thoại Sơn, đại diện lãnh đạo Phòng Tài chính kế hoạch, Kinh tế hạ tầng, Phòng Nông nghiệp và Phát triển nông thôn, Phó Chủ tịch UBND các xã, thị trấn cùng thành viên các HTX đang hoạt động trên địa bàn huyện.\r\n\r\nHuyện Thoại Sơn có 27 HTX, với 1.290 thành viên. Trong đó có 9 HTX gắn kết với Tập đoàn Lộc Trời theo chuỗi giá trị gắn với sản phẩm chủ lực của địa phương; có 1 Liên hiệp HTX gồm 8 HTXNN là thành viên cụ thể: HTXNN Thắng Lợi, Hòa Tân, Bình Thành, Sơn Hòa, Vọng Thê, An Bình, Tân Đông, Tây Phú với vốn điều lệ là 500 triệu đồng. Với vai trò nòng cốt về kinh tế tập thể, HTX thời gian qua đã từng bước hoạt động đi vào nề nếp và đem lại hiệu quả khá quan trọng về phát triển nông nghiệp của địa phương cụ thể: Hỗ trợ nông dân tham gia ứng dụng khoa học công nghệ vào sản xuất như các chương trình “một phải năm giảm”, “ba giảm ba tăng”, sản xuất các mô hình ứng dụng khoa học kỹ thuật trong xây dựng NTM; Thực hiện cơ giới hóa vào nông nghiệp ngày càng nhiều và đa dạng các dịch vụ như: sạ lúa, phun xịt thuốc trừ sâu, sạ phân bón bằng máy bay không người lái (drone), sử dụng máy móc từ khâu làm đất đến thu hoạch bằng máy gặt đập liên hợp; HTX còn đóng vai trò quan trọng trong liên kết tiêu thụ giúp nông dân giảm tác động giá vật tư, nâng cao chất lượng sản xuất nông nghiệp…', 'tintucanhdemo.png', '2023-03-24 03:26:27', 130, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `provider_key` varchar(255) DEFAULT NULL,
  `trangthai` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `hoten`, `email`, `password`, `provider_key`, `trangthai`) VALUES
(1, 'Trần Quyền Sinh', 'vn.quyensinh@gmail.com', 'p5J79rxdpfPETHrPWugeLFNerhextJ9qnDUk9ax5FunoM0KY', NULL, 1),
(29, 'Kim huong', 'vn.kimhuong@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, 1),
(30, 'Kim Chi', 'cudodethuonglxag@gmail.com', '59a7c47c86137703e610b83a58b5d481', NULL, 1),
(31, 'Sinh Trần Quyền', 'tqsinh11032002@gmail.com', NULL, 'user_2apy3azzUwrZwdPculVi7zj5nc8', 0),
(32, 'Trần Quyền Sinh', 'tqsinh_21th@student.agu.edu.vn', '59a7c47c86137703e610b83a58b5d481', 'user_2ZUPVyGKE4jfEmqlzfjrTdE32bs', 0),
(33, 'Trâm Quỳnh', 'qt391997@gmail.com', NULL, 'user_2b4WrKXmCACierwQGke7PYuxurP', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_vaitro`
--

CREATE TABLE `user_vaitro` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_vaitro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vaitro`
--

CREATE TABLE `vaitro` (
  `id` int(11) NOT NULL,
  `tenvaitro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vaitro`
--

INSERT INTO `vaitro` (`id`, `tenvaitro`) VALUES
(1, 'Admin'),
(2, 'Cộng tác viên'),
(3, 'Doanh nghiệp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `binhluancha_idx` (`id_binhluan`),
  ADD KEY `binhluan_tintuc_idx` (`id_tintuc`),
  ADD KEY `binhluan_user_idx` (`id_user`);

--
-- Indexes for table `doanhnghiep`
--
ALTER TABLE `doanhnghiep`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user_idx` (`id_user`),
  ADD KEY `id_loaihinh` (`id_loaihinh`),
  ADD KEY `id_linhvuc_idx` (`id_linhvuc`);

--
-- Indexes for table `doanhnghiep_daidien`
--
ALTER TABLE `doanhnghiep_daidien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_doanhnghiep_idx` (`id_doanhnghiep`);

--
-- Indexes for table `doanhnghiep_loaihinh`
--
ALTER TABLE `doanhnghiep_loaihinh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doanhnghiep_sdt`
--
ALTER TABLE `doanhnghiep_sdt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_doanhnghiep_idx` (`id_doanhnghiep`);

--
-- Indexes for table `linhvuc`
--
ALTER TABLE `linhvuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tintuc_tacgia_idx` (`id_user`),
  ADD KEY `tintuc_linhvuc_idx` (`id_linhvuc`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `user_vaitro`
--
ALTER TABLE `user_vaitro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user_idx` (`id_user`),
  ADD KEY `id_vaitro_idx` (`id_vaitro`);

--
-- Indexes for table `vaitro`
--
ALTER TABLE `vaitro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `doanhnghiep`
--
ALTER TABLE `doanhnghiep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doanhnghiep_daidien`
--
ALTER TABLE `doanhnghiep_daidien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doanhnghiep_loaihinh`
--
ALTER TABLE `doanhnghiep_loaihinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doanhnghiep_sdt`
--
ALTER TABLE `doanhnghiep_sdt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `linhvuc`
--
ALTER TABLE `linhvuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_vaitro`
--
ALTER TABLE `user_vaitro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vaitro`
--
ALTER TABLE `vaitro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_tintuc` FOREIGN KEY (`id_tintuc`) REFERENCES `tintuc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `binhluan_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `binhluancha` FOREIGN KEY (`id_binhluan`) REFERENCES `binhluan` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `doanhnghiep`
--
ALTER TABLE `doanhnghiep`
  ADD CONSTRAINT `id_linhvuc` FOREIGN KEY (`id_linhvuc`) REFERENCES `linhvuc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_loaihinh` FOREIGN KEY (`id_loaihinh`) REFERENCES `doanhnghiep_loaihinh` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `doanhnghiep_daidien`
--
ALTER TABLE `doanhnghiep_daidien`
  ADD CONSTRAINT `doanhnghiep_daidien` FOREIGN KEY (`id_doanhnghiep`) REFERENCES `doanhnghiep` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `doanhnghiep_sdt`
--
ALTER TABLE `doanhnghiep_sdt`
  ADD CONSTRAINT `id_doanhnghiep` FOREIGN KEY (`id_doanhnghiep`) REFERENCES `doanhnghiep` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_linhvuc` FOREIGN KEY (`id_linhvuc`) REFERENCES `linhvuc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tintuc_tacgia` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_vaitro`
--
ALTER TABLE `user_vaitro`
  ADD CONSTRAINT `user_user_vaitro` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `vaitro_user_vaitro` FOREIGN KEY (`id_vaitro`) REFERENCES `vaitro` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
